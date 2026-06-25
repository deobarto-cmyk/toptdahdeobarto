<?php
/**
 * Gestionnaire d'authentification classique (Email/Mot de passe)
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/db.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // ACTION : INSCRIPTION (REGISTER)
    if ($action === 'register') {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $displayName = isset($_POST['display_name']) ? trim($_POST['display_name']) : '';
        
        // Validation simple
        if (empty($email) || empty($password) || empty($displayName)) {
            $_SESSION['auth_error'] = "Tous les champs sont obligatoires.";
            header('Location: /register');
            exit;
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['auth_error'] = "Adresse e-mail invalide.";
            header('Location: /register');
            exit;
        }
        
        if (strlen($password) < 6) {
            $_SESSION['auth_error'] = "Le mot de passe doit contenir au moins 6 caractères.";
            header('Location: /register');
            exit;
        }
        
        try {
            // Vérifier si l'email existe déjà
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $_SESSION['auth_error'] = "Cette adresse e-mail est déjà utilisée.";
                header('Location: /register');
                exit;
            }
            
            // Créer l'utilisateur
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            // Avatar par défaut (première lettre du nom sur fond couleur)
            $avatarUrl = null; 
            
            $stmt = $pdo->prepare("INSERT INTO users (email, password_hash, display_name, avatar_url) VALUES (?, ?, ?, ?)");
            $stmt->execute([$email, $passwordHash, $displayName, $avatarUrl]);
            
            $userId = $pdo->lastInsertId();
            
            // Connecter l'utilisateur automatiquement
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_name'] = $displayName;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_avatar'] = $avatarUrl;
            
            unset($_SESSION['auth_error']);
            header('Location: /');
            exit;
            
        } catch (PDOException $e) {
            $_SESSION['auth_error'] = "Une erreur est survenue lors de l'inscription.";
            header('Location: /register');
            exit;
        }
    }
    
    // ACTION : CONNEXION (LOGIN)
    if ($action === 'login') {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        if (empty($email) || empty($password)) {
            $_SESSION['auth_error'] = "Tous les champs sont obligatoires.";
            header('Location: /login');
            exit;
        }
        
        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            
            // Vérification utilisateur + mot de passe
            if ($user && $user['password_hash'] && password_verify($password, $user['password_hash'])) {
                // Succès
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['display_name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_avatar'] = $user['avatar_url'];
                
                unset($_SESSION['auth_error']);
                header('Location: /');
                exit;
            } else {
                // Identifiants erronés ou inscrit avec Google (sans password_hash)
                if ($user && empty($user['password_hash'])) {
                    $_SESSION['auth_error'] = "Ce compte utilise la connexion Google. Veuillez cliquer sur 'Se connecter avec Google'.";
                } else {
                    $_SESSION['auth_error'] = "Adresse e-mail ou mot de passe incorrect.";
                }
                header('Location: /login');
                exit;
            }
            
        } catch (PDOException $e) {
            $_SESSION['auth_error'] = "Une erreur est survenue lors de la connexion.";
            header('Location: /login');
            exit;
        }
    }
}

// ACTION : DÉCONNEXION (LOGOUT)
if ($action === 'logout') {
    $_SESSION = array();
    
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    session_destroy();
    header('Location: /');
    exit;
}

// Redirection par défaut si rien ne correspond
header('Location: /login');
exit;
