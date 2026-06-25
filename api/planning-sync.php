<?php
/**
 * planning-sync.php - API de synchronisation pour le planning familial (Ewan & Florian)
 */

header('Content-Type: application/json; charset=utf-8');

// Empêcher la mise en cache des requêtes API
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Démarrer la session avec les bons paramètres de cookie (indispensable sous HTTPS/GAE)
if (session_status() === PHP_SESSION_NONE) {
    $isSecureProto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    if ($isSecureProto) {
        ini_set('session.cookie_secure', 1);
    }
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_samesite', 'Lax');
    session_start();
}

// Inclure la connexion à la base de données
require_once __DIR__ . '/../includes/db.php';

// Vérifier que la connexion PDO est bien initialisée
if (!isset($pdo)) {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur de connexion à la base de données']);
    exit;
}

// ── Auto-Migration : Créer la table automatiquement si elle n'existe pas ──
try {
    // Vérifier l'existence de la table via une requête simple
    $pdo->query("SELECT 1 FROM `planning_tasks` LIMIT 1");
} catch (PDOException $e) {
    // Si la table n'existe pas, on la crée
    $createTableSQL = "CREATE TABLE IF NOT EXISTS `planning_tasks` (
      `id` INT AUTO_INCREMENT PRIMARY KEY,
      `date` DATE NOT NULL,
      `person` ENUM('ewan', 'florian') NOT NULL,
      `task_text` VARCHAR(255) NOT NULL,
      `is_checked` TINYINT(1) DEFAULT 0,
      `is_custom` TINYINT(1) DEFAULT 0,
      `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      UNIQUE KEY `idx_date_person_task` (`date`, `person`, `task_text`),
      INDEX `idx_date` (`date`),
      INDEX `idx_date_person` (`date`, `person`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    
    try {
        $pdo->exec($createTableSQL);
    } catch (PDOException $e2) {
        // En cas d'échec de création, renvoyer l'erreur
        http_response_code(500);
        echo json_encode(['error' => 'Erreur d\'auto-migration : ' . $e2->getMessage()]);
        exit;
    }
}

$method = $_SERVER['REQUEST_METHOD'];

// Helper pour renvoyer du JSON et s'arrêter
function sendResponse($data, $statusCode = 200) {
    http_response_code($statusCode);
    echo json_encode($data);
    exit;
}

// ── action 1 : GET (Récupération des tâches pour une date ou une plage de dates) ──
if ($method === 'GET') {
    $date = isset($_GET['date']) ? trim($_GET['date']) : null;
    $startDate = isset($_GET['start_date']) ? trim($_GET['start_date']) : null;
    $endDate = isset($_GET['end_date']) ? trim($_GET['end_date']) : null;
    
    // Cas d'une plage de dates
    if ($startDate && $endDate) {
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $startDate) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $endDate)) {
            sendResponse(['error' => 'Format de date invalide pour la plage (attendu: YYYY-MM-DD)'], 400);
        }
        
        try {
            $stmt = $pdo->prepare("SELECT date, person, task_text, is_checked, is_custom 
                                    FROM planning_tasks 
                                    WHERE date BETWEEN :start_date AND :end_date");
            $stmt->execute(['start_date' => $startDate, 'end_date' => $endDate]);
            $rows = $stmt->fetchAll();
            
            // Organiser l'état : [date][personne][]
            $dbState = [];
            foreach ($rows as $row) {
                $d = $row['date'];
                $person = $row['person'];
                if (!isset($dbState[$d])) {
                    $dbState[$d] = ['ewan' => [], 'florian' => []];
                }
                $dbState[$d][$person][] = [
                    'text' => $row['task_text'],
                    'checked' => (bool)$row['is_checked'],
                    'isCustom' => (bool)$row['is_custom']
                ];
            }
            
            sendResponse([
                'success' => true,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'tasks' => $dbState
            ]);
            
        } catch (PDOException $e) {
            sendResponse(['error' => 'Erreur SQL plage : ' . $e->getMessage()], 500);
        }
    }
    
    // Cas d'une date unique
    if (!$date || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        sendResponse(['error' => 'Date invalide ou manquante. Format attendu : YYYY-MM-DD'], 400);
    }
    
    try {
        // Récupérer toutes les lignes enregistrées pour cette date
        $stmt = $pdo->prepare("SELECT person, task_text, is_checked, is_custom FROM planning_tasks WHERE date = :date");
        $stmt->execute(['date' => $date]);
        $rows = $stmt->fetchAll();
        
        // Organiser les résultats par personne
        $dbState = [
            'ewan' => [],
            'florian' => []
        ];
        
        foreach ($rows as $row) {
            $person = $row['person'];
            if (isset($dbState[$person])) {
                $dbState[$person][] = [
                    'text' => $row['task_text'],
                    'checked' => (bool)$row['is_checked'],
                    'isCustom' => (bool)$row['is_custom']
                ];
            }
        }
        
        sendResponse([
            'success' => true,
            'date' => $date,
            'tasks' => $dbState
        ]);
        
    } catch (PDOException $e) {
        sendResponse(['error' => 'Erreur de base de données : ' . $e->getMessage()], 500);
    }
}

// ── action 2 : POST (Mise à jour, Ajout, Suppression ou Réinitialisation) ──
if ($method === 'POST') {
    // Sécurisation : vérifier que l'utilisateur est connecté pour modifier
    if (!isset($_SESSION['user_id'])) {
        sendResponse(['error' => 'Veuillez vous connecter pour modifier le planning (accès non autorisé)'], 401);
    }
    
    // Lire le JSON envoyé dans le corps de la requête
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true);
    
    if (!$input) {
        sendResponse(['error' => 'Données JSON invalides ou manquantes'], 400);
    }
    
    $action = isset($input['action']) ? trim($input['action']) : '';
    $date = isset($input['date']) ? trim($input['date']) : '';
    $person = isset($input['person']) ? trim($input['person']) : '';
    
    // Valider l'action et la personne qui sont requis pour toutes les actions POST
    if (!$action || !$person) {
        sendResponse(['error' => 'Paramètres invalides (action ou personne manquante)'], 400);
    }
    
    if ($person !== 'ewan' && $person !== 'florian') {
        sendResponse(['error' => 'Personne invalide. Valeurs possibles: ewan, florian'], 400);
    }
    
    // Valider la date uniquement pour les actions individuelles quotidiennes
    if ($action === 'toggle' || $action === 'add_custom' || $action === 'delete_custom' || $action === 'reset_day') {
        if (!$date || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            sendResponse(['error' => 'Date invalide ou manquante. Format attendu : YYYY-MM-DD'], 400);
        }
    }
    
    try {
        switch ($action) {
            case 'toggle':
                $taskText = isset($input['task_text']) ? trim($input['task_text']) : '';
                $checked = isset($input['checked']) ? (int)$input['checked'] : 0;
                $isCustom = isset($input['is_custom']) ? (int)$input['is_custom'] : 0;
                
                if ($taskText === '') {
                    sendResponse(['error' => 'Texte de la tâche manquant'], 400);
                }
                
                // Insérer ou mettre à jour la ligne dans la table (ON DUPLICATE KEY)
                $sql = "INSERT INTO planning_tasks (date, person, task_text, is_checked, is_custom) 
                        VALUES (:date, :person, :task, :checked, :is_custom)
                        ON DUPLICATE KEY UPDATE is_checked = :checked, is_custom = :is_custom";
                
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'date' => $date,
                    'person' => $person,
                    'task' => $taskText,
                    'checked' => $checked,
                    'is_custom' => $isCustom
                ]);
                
                sendResponse(['success' => true, 'message' => 'Statut mis à jour']);
                break;
                
            case 'add_custom':
                $taskText = isset($input['task_text']) ? trim($input['task_text']) : '';
                
                if ($taskText === '') {
                    sendResponse(['error' => 'Texte de la tâche manquant'], 400);
                }
                
                // Ajouter une tâche personnalisée (is_custom = 1)
                $sql = "INSERT INTO planning_tasks (date, person, task_text, is_checked, is_custom) 
                        VALUES (:date, :person, :task, 0, 1)
                        ON DUPLICATE KEY UPDATE is_custom = 1";
                
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'date' => $date,
                    'person' => $person,
                    'task' => $taskText
                ]);
                
                sendResponse(['success' => true, 'message' => 'Tâche personnalisée ajoutée']);
                break;
                
            case 'delete_custom':
                $taskText = isset($input['task_text']) ? trim($input['task_text']) : '';
                
                if ($taskText === '') {
                    sendResponse(['error' => 'Texte de la tâche manquant'], 400);
                }
                
                // Supprimer uniquement les tâches personnalisées
                $sql = "DELETE FROM planning_tasks 
                        WHERE date = :date AND person = :person AND task_text = :task AND is_custom = 1";
                
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'date' => $date,
                    'person' => $person,
                    'task' => $taskText
                ]);
                
                sendResponse(['success' => true, 'message' => 'Tâche personnalisée supprimée']);
                break;
                
            case 'reset_day':
                // Décocher toutes les tâches de la journée (prédéfinies et personnalisées)
                $sql = "UPDATE planning_tasks SET is_checked = 0 WHERE date = :date AND person = :person";
                
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'date' => $date,
                    'person' => $person
                ]);
                
                sendResponse(['success' => true, 'message' => 'Journée réinitialisée (décochée)']);
                break;
                
            case 'save_week':
                $startDate = isset($input['start_date']) ? trim($input['start_date']) : '';
                $endDate = isset($input['end_date']) ? trim($input['end_date']) : '';
                $weeksData = isset($input['weeks_data']) ? $input['weeks_data'] : null;
                
                if (!$startDate || !$endDate || !is_array($weeksData)) {
                    sendResponse(['error' => 'Paramètres de sauvegarde manquants (start_date, end_date ou weeks_data)'], 400);
                }
                
                try {
                    $pdo->beginTransaction();
                    
                    // 1. Supprimer l'état existant pour cette semaine et cette personne
                    $sqlDelete = "DELETE FROM planning_tasks 
                                  WHERE person = :person AND date BETWEEN :start_date AND :end_date";
                    $stmtDelete = $pdo->prepare($sqlDelete);
                    $stmtDelete->execute([
                        'person' => $person,
                        'start_date' => $startDate,
                        'end_date' => $endDate
                    ]);
                    
                    // 2. Insérer le nouvel état complet
                    $sqlInsert = "INSERT INTO planning_tasks (date, person, task_text, is_checked, is_custom) 
                                  VALUES (:date, :person, :task, :checked, :is_custom)";
                    $stmtInsert = $pdo->prepare($sqlInsert);
                    
                    foreach ($weeksData as $dateKey => $tasks) {
                        // S'assurer de la validité de la date
                        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateKey)) continue;
                        
                        foreach ($tasks as $task) {
                            $taskText = isset($task['text']) ? trim($task['text']) : '';
                            $checked = isset($task['checked']) && $task['checked'] ? 1 : 0;
                            $isCustom = isset($task['isCustom']) && $task['isCustom'] ? 1 : 0;
                            
                            if ($taskText === '') continue;
                            
                            // Optimisation : pour les tâches prédéfinies ou communes, on ne les insère que si elles sont cochées
                            // Pour les tâches personnalisées, on les insère toujours (cochées ou non) pour qu'elles restent
                            if ($isCustom || $checked === 1) {
                                $stmtInsert->execute([
                                    'date' => $dateKey,
                                    'person' => $person,
                                    'task' => $taskText,
                                    'checked' => $checked,
                                    'is_custom' => $isCustom
                                ]);
                            }
                        }
                    }
                    
                    $pdo->commit();
                    sendResponse(['success' => true, 'message' => 'Planning de la semaine enregistré et synchronisé']);
                } catch (Exception $e) {
                    if ($pdo->inTransaction()) {
                        $pdo->rollBack();
                    }
                    sendResponse(['error' => 'Erreur lors de la sauvegarde : ' . $e->getMessage()], 500);
                }
                break;
                
            default:
                sendResponse(['error' => 'Action inconnue'], 400);
                break;
        }
        
    } catch (PDOException $e) {
        sendResponse(['error' => 'Erreur SQL : ' . $e->getMessage()], 500);
    }
}

// Si la méthode n'est ni GET ni POST
sendResponse(['error' => 'Méthode non autorisée'], 405);
