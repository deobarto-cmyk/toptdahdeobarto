<?php
// router.php - Routeur d'URL pour Google App Engine (remplace .htaccess)

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = ltrim($uri, '/');

// 1. Rediriger explicitement /www/ ou /www/quelque-chose vers la racine
if (strpos($uri, 'www/') === 0) {
    $newUri = substr($uri, 4);
    header("Location: /" . $newUri, true, 301);
    exit;
}

// 2. Rediriger /index, /index.html et /index.php vers la racine /
if ($uri === 'index' || $uri === 'index.html' || $uri === 'index.php') {
    header("Location: /", true, 301);
    exit;
}

// 3. Exécuter directement les scripts de l'API se terminant par .php sans faire de redirection
if (strpos($uri, 'api/') === 0 && preg_match('/\.php$/', $uri)) {
    $apiFile = __DIR__ . '/' . $uri;
    if (file_exists($apiFile)) {
        include $apiFile;
        exit;
    }
}

// 3b. Rediriger l'accès direct aux autres fichiers PHP des dossiers internes vers les URLs propres
if (preg_match('/\.php$/', $uri)) {
    $cleanUri = preg_replace('/\.php$/', '', $uri);
    // Retirer le préfixe pages/ s'il existe pour avoir une URL propre
    if (strpos($cleanUri, 'pages/') === 0) {
        $cleanUri = substr($cleanUri, 6);
    }
    header("Location: /" . $cleanUri, true, 301);
    exit;
}


// 4. Route pour la racine
if ($uri === '') {
    include __DIR__ . '/index.php';
    exit;
}

// 5. API : réécrire api/xyz en api/xyz.php
if (strpos($uri, 'api/') === 0) {
    $apiFile = __DIR__ . '/' . $uri . '.php';
    if (file_exists($apiFile)) {
        include $apiFile;
        exit;
    }
}

// 6. Pages : réécrire xyz en pages/xyz.php
$pageFile = __DIR__ . '/pages/' . $uri . '.php';
if (file_exists($pageFile)) {
    include $pageFile;
    exit;
}

// 7. Si le fichier physique existe à la racine ou dans www/, laisser le serveur le servir (ex: images, css, js)
$realFile = __DIR__ . '/' . $uri;
if (file_exists($realFile) && !is_dir($realFile)) {
    return false;
}

// 8. Sinon, page non trouvée
header("HTTP/1.0 404 Not Found");
include __DIR__ . '/pages/404.php'; // On peut essayer d'inclure une page 404 si elle existe, ou afficher un message par défaut
if (!file_exists(__DIR__ . '/pages/404.php')) {
    echo "404 Not Found - La page demandée n'existe pas.";
}
exit;
