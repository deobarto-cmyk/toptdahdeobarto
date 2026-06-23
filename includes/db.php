<?php
/**
 * Connexion à la base de données MySQL via PDO
 */

require_once __DIR__ . '/../config.php';

try {
    // Si DB_HOST commence par /cloudsql/, on utilise une connexion par socket Unix (Cloud SQL)
    if (strpos(DB_HOST, '/cloudsql/') === 0) {
        $dsn = "mysql:unix_socket=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    } else {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    }
    
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    // En production, il faudrait masquer le détail de l'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

