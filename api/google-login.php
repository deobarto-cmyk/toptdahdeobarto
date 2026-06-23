<?php
/**
 * Initiateur de la connexion Google OAuth 2.0
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config.php';

// Vérification de la configuration
if (empty(GOOGLE_CLIENT_ID) || empty(GOOGLE_CLIENT_SECRET)) {
    $_SESSION['auth_error'] = "La connexion Google n'est pas encore configurée (Client ID/Secret manquant).";
    header('Location: /login');
    exit;
}

// Générer un état unique contre les failles CSRF
$state = bin2hex(random_bytes(16));
$_SESSION['oauth_state'] = $state;

// Construire les paramètres de la requête d'autorisation
$params = [
    'response_type' => 'code',
    'client_id'     => GOOGLE_CLIENT_ID,
    'redirect_uri'  => GOOGLE_REDIRECT_URI,
    'scope'         => 'openid email profile',
    'state'         => $state,
    'prompt'        => 'select_account' // Permet de choisir le compte Google
];

$authUrl = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query($params);

// Rediriger vers Google
header('Location: ' . $authUrl);
exit;
