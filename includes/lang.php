<?php
if (session_status() === PHP_SESSION_NONE) {
    // Configurer les cookies de session avant session_start()
    // (obligatoire sous HTTPS/GAE pour que les cookies persistent correctement)
    $isSecureProto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');

    if ($isSecureProto) {
        ini_set('session.cookie_secure', 1);
    }
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_samesite', 'Lax');

    session_start();
}

// Déterminer la langue active (fr par défaut, ro ou en si demandées)
if (isset($_GET['lang'])) {
    $requested_lang = $_GET['lang'];
    $lang = in_array($requested_lang, ['ro', 'en']) ? $requested_lang : 'fr';
    setcookie('lang', $lang, time() + (3600 * 24 * 30), '/'); // 30 jours
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = in_array($_SESSION['lang'], ['ro', 'en']) ? $_SESSION['lang'] : 'fr';
} elseif (isset($_COOKIE['lang'])) {
    $lang = in_array($_COOKIE['lang'], ['ro', 'en']) ? $_COOKIE['lang'] : 'fr';
    $_SESSION['lang'] = $lang;
} else {
    $lang = 'fr';
}
?>
