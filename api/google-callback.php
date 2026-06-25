<?php
/**
 * Callback de connexion Google OAuth 2.0
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/db.php';

// 1. Vérification de l'état (protection CSRF)
if (!isset($_GET['state']) || !isset($_SESSION['oauth_state']) || $_GET['state'] !== $_SESSION['oauth_state']) {
    $_SESSION['auth_error'] = "État OAuth non valide. Tentative de falsification potentielle.";
    header('Location: /login');
    exit;
}

// Nettoyer l'état en session
unset($_SESSION['oauth_state']);

// Vérifier la présence du code d'autorisation
if (!isset($_GET['code'])) {
    $_SESSION['auth_error'] = "Le code d'autorisation Google n'a pas été retourné.";
    header('Location: /login');
    exit;
}

$code = $_GET['code'];

// 2. Échanger le code contre un jeton d'accès (Access Token)
$tokenUrl = 'https://oauth2.googleapis.com/token';
$tokenParams = [
    'code'          => $code,
    'client_id'     => GOOGLE_CLIENT_ID,
    'client_secret' => GOOGLE_CLIENT_SECRET,
    'redirect_uri'  => GOOGLE_REDIRECT_URI,
    'grant_type'    => 'authorization_code'
];

$ch = curl_init($tokenUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($tokenParams));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded'
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    $_SESSION['auth_error'] = "Erreur lors de la récupération du jeton d'accès Google.";
    header('Location: /login');
    exit;
}

$tokenData = json_decode($response, true);
$accessToken = isset($tokenData['access_token']) ? $tokenData['access_token'] : '';

if (empty($accessToken)) {
    $_SESSION['auth_error'] = "Jeton d'accès Google introuvable.";
    header('Location: /login');
    exit;
}

// 3. Récupérer les informations de profil de l'utilisateur
$userInfoUrl = 'https://www.googleapis.com/oauth2/v3/userinfo';
$ch = curl_init($userInfoUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $accessToken
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    $_SESSION['auth_error'] = "Erreur lors de la récupération des informations utilisateur Google.";
    header('Location: /login');
    exit;
}

$userInfo = json_decode($response, true);
$googleId = isset($userInfo['sub']) ? $userInfo['sub'] : '';
$email = isset($userInfo['email']) ? $userInfo['email'] : '';
$name = isset($userInfo['name']) ? $userInfo['name'] : '';
$picture = isset($userInfo['picture']) ? $userInfo['picture'] : null;

if (empty($googleId) || empty($email)) {
    $_SESSION['auth_error'] = "Informations de profil Google insuffisantes.";
    header('Location: /login');
    exit;
}

// 4. Inscrire ou connecter l'utilisateur en base de données
try {
    // Vérifier d'abord si l'utilisateur existe déjà par son e-mail ou google_id
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR google_id = ?");
    $stmt->execute([$email, $googleId]);
    $existingUser = $stmt->fetch();
    
    $allowedEmails = defined('ALLOWED_EMAILS') ? ALLOWED_EMAILS : ['ewan.laude.roman.fr@gmail.com'];
    
    // Si l'utilisateur n'est pas déjà dans la base et que son e-mail n'est pas dans la liste blanche
    if (!$existingUser && !in_array($email, $allowedEmails)) {
        $_SESSION['auth_error'] = "Accès refusé : l'adresse email " . htmlspecialchars($email) . " n'est pas autorisée sur ce portail.";
        header('Location: /login');
        exit;
    }

    // A. Chercher par google_id
    $stmt = $pdo->prepare("SELECT * FROM users WHERE google_id = ?");
    $stmt->execute([$googleId]);
    $user = $stmt->fetch();
    
    if (!$user) {
        // B. Si pas trouvé par google_id, chercher par e-mail
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if ($user) {
            // L'utilisateur s'était déjà inscrit par e-mail : on lie le compte Google
            $stmt = $pdo->prepare("UPDATE users SET google_id = ?, avatar_url = ? WHERE id = ?");
            $stmt->execute([$googleId, $picture ?: $user['avatar_url'], $user['id']]);
            // Re-charger les données mises à jour
            $user['google_id'] = $googleId;
            if ($picture) $user['avatar_url'] = $picture;
        } else {
            // C. L'utilisateur n'existe pas : on le crée (car son e-mail est dans la liste blanche)
            $stmt = $pdo->prepare("INSERT INTO users (google_id, email, display_name, avatar_url) VALUES (?, ?, ?, ?)");
            $stmt->execute([$googleId, $email, $name, $picture]);
            
            $userId = $pdo->lastInsertId();
            
            // Charger le nouvel utilisateur créé
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$userId]);
            $user = $stmt->fetch();
        }
    } else {
        // Si l'avatar ou le nom a changé chez Google, on le met à jour en base
        if ($user['avatar_url'] !== $picture || $user['display_name'] !== $name) {
            $stmt = $pdo->prepare("UPDATE users SET display_name = ?, avatar_url = ? WHERE id = ?");
            $stmt->execute([$name, $picture ?: $user['avatar_url'], $user['id']]);
            $user['display_name'] = $name;
            if ($picture) $user['avatar_url'] = $picture;
        }
    }
    
    // Connecter l'utilisateur en session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['display_name'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_avatar'] = $user['avatar_url'];
    
    unset($_SESSION['auth_error']);
    header('Location: /');
    exit;
    
} catch (PDOException $e) {
    $_SESSION['auth_error'] = "Erreur de base de données lors de la connexion Google : " . $e->getMessage();
    header('Location: /login');
    exit;
}
