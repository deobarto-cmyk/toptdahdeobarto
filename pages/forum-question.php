<?php
include_once __DIR__ . '/../includes/lang.php';
require_once __DIR__ . '/../includes/db.php';

// Formatage de la date
function formatForumDate($dateString, $lang) {
    $time = strtotime($dateString);
    if ($lang === 'en') {
        return date('F j, Y, g:i a', $time);
    } elseif ($lang === 'ro') {
        return date('d.m.Y, H:i', $time);
    } else {
        return date('d/m/Y à H:i', $time);
    }
}

$questionId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($questionId <= 0) {
    header('Location: /forum');
    exit;
}

$errorMsg = '';

// Gérer l'ajout d'une réponse
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'reply') {
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['auth_error'] = "Tu dois être connecté pour répondre.";
        header('Location: /login');
        exit;
    }
    
    $replyContent = isset($_POST['content']) ? trim($_POST['content']) : '';
    
    if (empty($replyContent)) {
        $errorMsg = $lang === 'en' ? "Please write your reply." : ($lang === 'ro' ? "Vă rugăm să scrieți răspunsul." : "Veuillez écrire votre réponse.");
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO forum_answers (question_id, user_id, content) VALUES (?, ?, ?)");
            $stmt->execute([$questionId, $_SESSION['user_id'], $replyContent]);
            
            // Recharger la page pour éviter le double post sur F5
            header('Location: /forum-question?id=' . $questionId);
            exit;
        } catch (PDOException $e) {
            $errorMsg = "Une erreur est survenue lors de l'enregistrement de votre réponse.";
        }
    }
}

// Récupérer la question et son auteur
try {
    $stmt = $pdo->prepare("SELECT q.*, u.display_name, u.avatar_url 
                           FROM forum_questions q
                           JOIN users u ON q.user_id = u.id
                           WHERE q.id = ?");
    $stmt->execute([$questionId]);
    $question = $stmt->fetch();
    
    if (!$question) {
        header('Location: /forum');
        exit;
    }
    
    // Récupérer les réponses associées
    $stmt = $pdo->prepare("SELECT a.*, u.display_name, u.avatar_url 
                           FROM forum_answers a
                           JOIN users u ON a.user_id = u.id
                           WHERE a.question_id = ?
                           ORDER BY a.created_at ASC");
    $stmt->execute([$questionId]);
    $answers = $stmt->fetchAll();
    
} catch (PDOException $e) {
    header('Location: /forum');
    exit;
}

$page_title = htmlspecialchars($question['title']) . " | Forum";
$page_description = htmlspecialchars(substr(strip_tags($question['content']), 0, 150));
$current_page = "forum";
$header_tag = $lang === 'en' ? "Forum Discussion" : ($lang === 'ro' ? "Discuție pe Forum" : "Discussion du Forum");
$header_title = $lang === 'en' ? "Exchange Space" : ($lang === 'ro' ? "Spațiu de Schimb" : "Espace d'Échange");
$header_subtitle = $lang === 'en' ? "Support and advice between parents." : ($lang === 'ro' ? "Sprijin și sfaturi între părinți." : "Soutien et conseils entre parents.");

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<div class="container no-sidebar">
  <main class="forum-layout">
    
    <!-- Bouton Retour -->
    <div style="margin-bottom: 1.5rem;">
      <a href="/forum" class="forum-back-link">← <?php echo $lang === 'en' ? 'Back to forum' : ($lang === 'ro' ? 'Înapoi la forum' : 'Retour au forum'); ?></a>
    </div>

    <!-- Question Principale -->
    <article class="forum-question-detail">
      <div class="forum-detail-header">
        <div class="forum-user-meta">
          <?php if (!empty($question['avatar_url'])): ?>
            <img src="<?php echo htmlspecialchars($question['avatar_url']); ?>" alt="<?php echo htmlspecialchars($question['display_name']); ?>" class="forum-avatar">
          <?php else: ?>
            <div class="forum-avatar-placeholder">
              <?php echo strtoupper(substr($question['display_name'], 0, 1)); ?>
            </div>
          <?php endif; ?>
          <div>
            <span class="forum-detail-author"><?php echo htmlspecialchars($question['display_name']); ?></span>
            <span class="forum-detail-date"><?php echo formatForumDate($question['created_at'], $lang); ?></span>
          </div>
        </div>
      </div>
      
      <div class="forum-detail-body">
        <h2 class="forum-detail-title"><?php echo htmlspecialchars($question['title']); ?></h2>
        <div class="forum-detail-text">
          <?php echo nl2br(htmlspecialchars($question['content'])); ?>
        </div>
      </div>
    </article>

    <!-- Réponses -->
    <section class="forum-replies-section">
      <h3 class="forum-replies-title">
        <span>💬</span> 
        <?php 
        $repliesCount = count($answers);
        if ($lang === 'en') {
            echo $repliesCount . ($repliesCount > 1 ? ' Replies' : ' Reply');
        } elseif ($lang === 'ro') {
            echo $repliesCount . ($repliesCount > 1 ? ' Răspunsuri' : ' Răspuns');
        } else {
            echo $repliesCount . ($repliesCount > 1 ? ' Réponses' : ' Réponse');
        }
        ?>
      </h3>

      <?php if (empty($answers)): ?>
        <div class="forum-no-replies">
          <p><?php echo $lang === 'en' ? 'No replies yet. Be the first to advise this parent!' : ($lang === 'ro' ? 'Niciun răspuns deocamdată. Fii primul care sfătuiește acest părinte!' : 'Aucune réponse pour le moment. Sois le premier à conseiller ce parent !'); ?></p>
        </div>
      <?php else: ?>
        <div class="forum-replies-list">
          <?php foreach ($answers as $ans): ?>
            <div class="forum-reply-card">
              <div class="forum-reply-header">
                <div class="forum-user-meta">
                  <?php if (!empty($ans['avatar_url'])): ?>
                    <img src="<?php echo htmlspecialchars($ans['avatar_url']); ?>" alt="<?php echo htmlspecialchars($ans['display_name']); ?>" class="forum-avatar small">
                  <?php else: ?>
                    <div class="forum-avatar-placeholder small">
                      <?php echo strtoupper(substr($ans['display_name'], 0, 1)); ?>
                    </div>
                  <?php endif; ?>
                  <div>
                    <span class="forum-reply-author"><?php echo htmlspecialchars($ans['display_name']); ?></span>
                    <span class="forum-reply-date"><?php echo formatForumDate($ans['created_at'], $lang); ?></span>
                  </div>
                </div>
              </div>
              <div class="forum-reply-body">
                <?php echo nl2br(htmlspecialchars($ans['content'])); ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>

    <!-- Formulaire pour répondre -->
    <section class="forum-reply-form-section">
      <h3 style="margin-top:0;"><?php echo $lang === 'en' ? 'Give Advice / Reply' : ($lang === 'ro' ? 'Oferă un sfat / Răspunde' : 'Apporter un conseil / Répondre'); ?></h3>
      
      <?php if (!empty($errorMsg)): ?>
        <div class="auth-alert">
          <span class="auth-alert-icon">⚠️</span>
          <span class="auth-alert-text"><?php echo htmlspecialchars($errorMsg); ?></span>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['user_id'])): ?>
        <form action="/forum-question?id=<?php echo $questionId; ?>" method="POST" class="auth-form forum-reply-form">
          <input type="hidden" name="action" value="reply">
          <div class="form-group">
            <textarea name="content" required placeholder="<?php echo $lang === 'en' ? 'Share your experience or advice with kindness...' : ($lang === 'ro' ? 'Împărtășește experiența sau sfaturile tale cu bunătate...' : 'Partage ton expérience ou apporte un conseil avec bienveillance...'); ?>" rows="5"></textarea>
          </div>
          <button type="submit" class="btn-action">
            <?php echo $lang === 'en' ? 'Publish Reply' : ($lang === 'ro' ? 'Publică Răspunsul' : 'Publier ma Réponse'); ?>
          </button>
        </form>
      <?php else: ?>
        <div class="forum-reply-login-prompt">
          <p>
            <?php if ($lang === 'en'): ?>
              You must be logged in to reply. <a href="/login">Log in here</a>.
            <?php elseif ($lang === 'ro'): ?>
              Trebuie să fii conectat pentru a răspunde. <a href="/login">Conectează-te aici</a>.
            <?php else: ?>
              Tu dois être connecté pour apporter une réponse. <a href="/login">Se connecter ici</a>.
            <?php endif; ?>
          </p>
        </div>
      <?php endif; ?>
    </section>

  </main>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
