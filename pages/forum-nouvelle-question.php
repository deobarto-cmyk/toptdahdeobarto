<?php
include_once __DIR__ . '/../includes/lang.php';
require_once __DIR__ . '/../includes/db.php';

// Vérifier que l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    $_SESSION['auth_error'] = "Tu dois être connecté pour poser une question.";
    header('Location: /login');
    exit;
}

$errorMsg = '';

// Traiter la publication
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $content = isset($_POST['content']) ? trim($_POST['content']) : '';
    
    if (empty($title) || empty($content)) {
        $errorMsg = $lang === 'en' ? "Please fill in all fields." : ($lang === 'ro' ? "Vă rugăm să completați toate câmpurile." : "Veuillez remplir tous les champs.");
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO forum_questions (user_id, title, content) VALUES (?, ?, ?)");
            $stmt->execute([$_SESSION['user_id'], $title, $content]);
            
            $questionId = $pdo->lastInsertId();
            header('Location: /forum-question?id=' . $questionId);
            exit;
        } catch (PDOException $e) {
            $errorMsg = "Une erreur est survenue lors de la création de la question.";
        }
    }
}

if ($lang === 'en') {
    $page_title = "Ask a Question | Parental Forum";
    $page_description = "Ask your question to the community of parents.";
    $current_page = "forum";
    $header_tag = "Exchange Space";
    $header_title = "Ask a Question";
    $header_subtitle = "Describe your situation to get advice and feedback from other parents.";
} elseif ($lang === 'ro') {
    $page_title = "Pune o Întrebare | Forum Parental";
    $page_description = "Pune o întrebare comunității de părinți.";
    $current_page = "forum";
    $header_tag = "Spațiu de Schimb";
    $header_title = "Pune o Întrebare";
    $header_subtitle = "Descrie situația ta pentru a primi sfaturi de la alți părinți.";
} else {
    $page_title = "Poser une Question | Forum des Parents";
    $page_description = "Posez votre question à la communauté de parents d'enfants TDAH/TOP.";
    $current_page = "forum";
    $header_tag = "Espace d'Échange";
    $header_title = "Poser une Question";
    $header_subtitle = "Décris ta situation pour obtenir des conseils et des retours d'expérience d'autres parents.";
}

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<div class="container no-sidebar">
  <main class="forum-layout">

    <div class="forum-form-container">
      <div class="forum-form-header">
        <a href="/forum" class="forum-back-link">← <?php echo $lang === 'en' ? 'Back to forum' : ($lang === 'ro' ? 'Înapoi la forum' : 'Retour au forum'); ?></a>
        <h2><?php echo $lang === 'en' ? 'New Topic' : ($lang === 'ro' ? 'Subiect Nou' : 'Nouvelle discussion'); ?></h2>
      </div>

      <?php if (!empty($errorMsg)): ?>
        <div class="auth-alert">
          <span class="auth-alert-icon">⚠️</span>
          <span class="auth-alert-text"><?php echo htmlspecialchars($errorMsg); ?></span>
        </div>
      <?php endif; ?>

      <form action="/forum-nouvelle-question" method="POST" class="auth-form forum-form">
        <div class="form-group">
          <label for="title"><?php echo $lang === 'en' ? 'Question Title' : ($lang === 'ro' ? 'Titlul Întrebării' : 'Titre de ta question'); ?></label>
          <input type="text" id="title" name="title" required placeholder="<?php echo $lang === 'en' ? 'e.g. ODD crises in the evening, what to do?' : ($lang === 'ro' ? 'de ex. Crize TOP seara, ce să fac?' : 'ex: Crises TOP le soir, que faire ?'); ?>">
        </div>

        <div class="form-group">
          <label for="content"><?php echo $lang === 'en' ? 'Description / Details' : ($lang === 'ro' ? 'Descriere / Detalii' : 'Description / Détails de ta situation'); ?></label>
          <textarea id="content" name="content" required placeholder="<?php echo $lang === 'en' ? 'Explain your situation in details so other parents can understand and advise you...' : ($lang === 'ro' ? 'Explică situația ta în detaliu pentru ca alți părinți să o poată înțelege și să te sfătuiască...' : 'Explique ta situation en détail pour que les autres parents puissent comprendre et te conseiller...'); ?>" rows="8"></textarea>
        </div>

        <div class="forum-form-actions">
          <a href="/forum" class="btn-secondary"><?php echo $lang === 'en' ? 'Cancel' : ($lang === 'ro' ? 'Anulează' : 'Annuler'); ?></a>
          <button type="submit" class="btn-action">
            <?php echo $lang === 'en' ? 'Publish Question' : ($lang === 'ro' ? 'Publică Întrebarea' : 'Publier la Question'); ?>
          </button>
        </div>
      </form>
    </div>

  </main>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
