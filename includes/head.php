<?php
// Récupération dynamique de l'URL courante pour le SEO
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';

$queryParams = $_GET;
unset($queryParams['lang']);

$currentUrl = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];

$frUrl = $protocol . '://' . $host . $path . (!empty($queryParams) ? '?' . http_build_query($queryParams) . '&lang=fr' : '?lang=fr');
$enUrl = $protocol . '://' . $host . $path . (!empty($queryParams) ? '?' . http_build_query($queryParams) . '&lang=en' : '?lang=en');
$roUrl = $protocol . '://' . $host . $path . (!empty($queryParams) ? '?' . http_build_query($queryParams) . '&lang=ro' : '?lang=ro');

// Déterminer la locale OG
$ogLocale = 'fr_FR';
if ($lang === 'en') {
    $ogLocale = 'en_US';
} elseif ($lang === 'ro') {
    $ogLocale = 'ro_RO';
}

$defaultTitle = "Portail d'Accompagnement TOP & TDAH | deobarto";
$defaultDesc = "Portail de psychoéducation pour le Trouble Oppositionnel avec Provocation (TOP) et le TDAH. Conseils, stratégies et forum d'échange.";

$title = isset($page_title) ? $page_title : $defaultTitle;
$desc = isset($page_description) ? $page_description : $defaultDesc;
$ogImage = $protocol . '://' . $host . '/assets/images/logo.png';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
  
  <!-- SEO Multilingue (hreflang) -->
  <link rel="alternate" hreflang="fr" href="<?php echo htmlspecialchars($frUrl); ?>" />
  <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($enUrl); ?>" />
  <link rel="alternate" hreflang="ro" href="<?php echo htmlspecialchars($roUrl); ?>" />
  <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($frUrl); ?>" />
  
  <!-- Balises Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:locale" content="<?php echo $ogLocale; ?>">

  <!-- Balises Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($desc); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css?v=1.3.1">
</head>
<body>

  <!-- Scroll Progress Indicator -->
  <div id="progress-bar"></div>
