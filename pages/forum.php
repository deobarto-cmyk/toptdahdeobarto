<?php
include_once __DIR__ . '/../includes/lang.php';
require_once __DIR__ . '/../includes/db.php';

// Formatage de la date en français, anglais ou roumain
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

// Recherche
$searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';

// Récupérer les questions avec infos utilisateur et nombre de réponses
try {
    $sql = "SELECT q.*, u.display_name, u.avatar_url, COUNT(a.id) as answers_count 
            FROM forum_questions q
            JOIN users u ON q.user_id = u.id
            LEFT JOIN forum_answers a ON q.id = a.question_id";
    
    $params = [];
    if (!empty($searchQuery)) {
        $sql .= " WHERE q.title LIKE ? OR q.content LIKE ?";
        $params[] = "%$searchQuery%";
        $params[] = "%$searchQuery%";
    }
    
    $sql .= " GROUP BY q.id ORDER BY q.created_at DESC";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $questions = $stmt->fetchAll();
} catch (PDOException $e) {
    $questions = [];
    $dbError = "Impossible de récupérer les discussions.";
}

if ($lang === 'en') {
    $page_title = "ODD & ADHD Forum: Parental Support Community";
    $page_description = "Join our supportive community to exchange, ask questions, and find help regarding ODD and ADHD.";
    $current_page = "forum";
    $header_tag = "Exchange Space";
    $header_title = "Parental Forum";
    $header_subtitle = "Ask your questions, share your advice, and connect with other parents.";
} elseif ($lang === 'ro') {
    $page_title = "Forum TDAH și TOP: Comunitate de Sprijin Parental";
    $page_description = "Alătură-te comunității noastre pentru a schimba idei, a pune întrebări și a găsi sprijin în fața TOP și TDAH.";
    $current_page = "forum";
    $header_tag = "Spațiu de Schimb";
    $header_title = "Forum Parental";
    $header_subtitle = "Pune întrebări, împărtășește sfaturi și conectează-te cu alți părinți.";
} else {
    $page_title = "Forum TDAH & TOP : Espace d'Entraide pour les Parents";
    $page_description = "Rejoins notre communauté bienveillante pour échanger, poser tes questions et trouver du soutien face au TOP et au TDAH.";
    $current_page = "forum";
    $header_tag = "Espace d'Échange";
    $header_title = "Forum des Parents";
    $header_subtitle = "Pose tes questions, partage tes conseils et connecte-toi avec d'autres parents.";
}

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<div class="container no-sidebar">
  <main class="forum-layout">
    
    <!-- E-E-A-T Reassurance Banner -->
    <div class="alert-box" style="margin-bottom: 2rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary); padding: 1rem; border-radius: 12px; font-size: 0.88rem; display: flex; align-items: center; gap: 0.75rem;">
      <span style="font-size: 1.5rem;">🤝</span>
      <div>
        <?php if ($lang === 'en'): ?>
          <strong>Support space:</strong> This forum is a peer-to-peer exchange community. The advice shared by users is based on personal experience and does not replace medical consultation.
        <?php elseif ($lang === 'ro'): ?>
          <strong>Spațiu de sprijin:</strong> Acest forum este o comunitate de schimb de experiențe. Sfaturile utilizatorilor se bazează pe experiențe personale și nu înlocuiesc o consultație medicală.
        <?php else: ?>
          <strong>Espace de soutien :</strong> Ce forum est une communauté d'entraide entre pairs. Les conseils partagés par les utilisateurs découlent de retours d'expérience et ne remplacent pas une consultation médicale.
        <?php endif; ?>
      </div>
    </div>

    <!-- Top Action Bar -->
    <div class="forum-action-bar">
      <!-- Moteur de recherche interne au forum -->
      <form action="/forum" method="GET" class="forum-search-form">
        <input type="text" name="q" value="<?php echo htmlspecialchars($searchQuery); ?>" placeholder="<?php echo $lang === 'en' ? 'Search a topic...' : ($lang === 'ro' ? 'Caută un subiect...' : 'Rechercher un sujet...'); ?>" class="forum-search-input">
        <button type="submit" class="forum-search-btn">🔍</button>
      </form>

      <!-- Bouton Poser une question -->
      <a href="/forum-nouvelle-question" class="btn-action btn-new-topic">
        <span>➕</span> <?php echo $lang === 'en' ? 'Ask a Question' : ($lang === 'ro' ? 'Pune o Întrebare' : 'Poser une Question'); ?>
      </a>
    </div>

    <!-- Liste des Questions -->
    <div class="forum-list">
      <?php if (isset($dbError)): ?>
        <div class="forum-empty-state">
          <p class="error"><?php echo $dbError; ?></p>
        </div>
      <?php elseif (empty($questions)): ?>
        <div class="forum-empty-state">
          <div class="empty-icon">💬</div>
          <h3><?php echo $lang === 'en' ? 'No discussions found' : ($lang === 'ro' ? 'Niciun subiect găsit' : 'Aucune discussion trouvée'); ?></h3>
          <p><?php echo $lang === 'en' ? 'Be the first to ask a question to the community!' : ($lang === 'ro' ? 'Fii primul care pune o întrebare comunității!' : 'Sois le premier à poser une question à la communauté !'); ?></p>
          <a href="/forum-nouvelle-question" class="btn-action" style="margin-top: 1rem;"><?php echo $lang === 'en' ? 'Start a discussion' : ($lang === 'ro' ? 'Începe o discuție' : 'Lancer une discussion'); ?></a>
        </div>
      <?php else: ?>
        <?php foreach ($questions as $q): ?>
          <article class="forum-card">
            <div class="forum-card-avatar-col">
              <?php if (!empty($q['avatar_url'])): ?>
                <img src="<?php echo htmlspecialchars($q['avatar_url']); ?>" alt="<?php echo htmlspecialchars($q['display_name']); ?>" class="forum-avatar">
              <?php else: ?>
                <div class="forum-avatar-placeholder">
                  <?php echo strtoupper(substr($q['display_name'], 0, 1)); ?>
                </div>
              <?php endif; ?>
            </div>
            
            <div class="forum-card-content-col">
              <h3 class="forum-card-title">
                <a href="/forum-question?id=<?php echo $q['id']; ?>"><?php echo htmlspecialchars($q['title']); ?></a>
              </h3>
              <p class="forum-card-excerpt">
                <?php 
                $excerpt = strip_tags($q['content']);
                echo htmlspecialchars(strlen($excerpt) > 150 ? substr($excerpt, 0, 150) . '...' : $excerpt); 
                ?>
              </p>
              <div class="forum-card-meta">
                <span class="meta-author"><?php echo htmlspecialchars($q['display_name']); ?></span>
                <span class="meta-separator">•</span>
                <span class="meta-date"><?php echo formatForumDate($q['created_at'], $lang); ?></span>
              </div>
            </div>

            <div class="forum-card-stats-col">
              <div class="forum-stat-box">
                <span class="stat-count"><?php echo $q['answers_count']; ?></span>
                <span class="stat-label">
                  <?php 
                  if ($lang === 'en') {
                      echo $q['answers_count'] > 1 ? 'replies' : 'reply';
                  } elseif ($lang === 'ro') {
                      echo $q['answers_count'] > 1 ? 'răspunsuri' : 'răspuns';
                  } else {
                      echo $q['answers_count'] > 1 ? 'réponses' : 'réponse';
                  }
                  ?>
                </span>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </main>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
