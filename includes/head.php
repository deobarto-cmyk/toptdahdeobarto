<?php include_once __DIR__ . '/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : "Portail d'Accompagnement TOP & TDAH | deobarto"; ?></title>
  <meta name="description" content="<?php echo isset($page_description) ? $page_description : ''; ?>">
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css?v=1.3.1">
</head>
<body>

  <!-- Scroll Progress Indicator -->
  <div id="progress-bar"></div>
