<?php
include_once __DIR__ . '/../includes/lang.php';

// Si déjà connecté, redirection vers le forum
if (isset($_SESSION['user_id'])) {
    header('Location: /forum');
    exit;
}

if ($lang === 'en') {
    $page_title = "Log In | ODD & ADHD Support Portal";
    $page_description = "Log in to join the discussion forum and share strategies.";
    $current_page = "login";
    $header_tag = "Community Space";
    $header_title = "Log In";
    $header_subtitle = "Connect to exchange, discuss, and find help.";
} elseif ($lang === 'ro') {
    $page_title = "Conectare | Portal de Suport TOP & TDAH";
    $page_description = "Conectează-te pentru a te alătura forumului de discuții și a împărtăși strategii.";
    $current_page = "login";
    $header_tag = "Spațiu Comunitar";
    $header_title = "Conectare";
    $header_subtitle = "Conectează-te pentru a schimba idei, a discuta și a găsi ajutor.";
} else {
    $page_title = "Connexion | Portail d'Accompagnement TOP & TDAH";
    $page_description = "Connectez-vous pour rejoindre le forum de discussion et partager des conseils.";
    $current_page = "login";
    $header_tag = "Espace Communautaire";
    $header_title = "Connexion";
    $header_subtitle = "Connecte-toi pour échanger, discuter et trouver de l'aide.";
}

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';

$authError = isset($_SESSION['auth_error']) ? $_SESSION['auth_error'] : '';
unset($_SESSION['auth_error']); // Effacer après affichage
?>

<div class="container no-sidebar">
  <main class="auth-layout">
    
    <div class="auth-card">
      <div class="auth-card-header">
        <h2>
          <?php echo $lang === 'en' ? 'Welcome Back' : ($lang === 'ro' ? 'Bine ai revenit' : 'Ravi de te revoir'); ?>
        </h2>
        <p>
          <?php echo $lang === 'en' ? 'Log in to participate in the community.' : ($lang === 'ro' ? 'Conectează-te pentru a participa la comunitate.' : 'Connecte-toi pour participer à la communauté.'); ?>
        </p>
      </div>

      <?php if (!empty($authError)): ?>
        <div class="auth-alert">
          <span class="auth-alert-icon">⚠️</span>
          <span class="auth-alert-text"><?php echo htmlspecialchars($authError); ?></span>
        </div>
      <?php endif; ?>

      <!-- Formulaire Classique -->
      <form action="/api/auth-handler.php?action=login" method="POST" class="auth-form">
        <div class="form-group">
          <label for="email"><?php echo $lang === 'en' ? 'Email Address' : ($lang === 'ro' ? 'Adresă de e-mail' : 'Adresse e-mail'); ?></label>
          <input type="email" id="email" name="email" required placeholder="parents@example.com">
        </div>

        <div class="form-group">
          <label for="password"><?php echo $lang === 'en' ? 'Password' : ($lang === 'ro' ? 'Parolă' : 'Mot de passe'); ?></label>
          <input type="password" id="password" name="password" required placeholder="••••••••">
        </div>

        <button type="submit" class="btn-action btn-auth-submit">
          <?php echo $lang === 'en' ? 'Log In' : ($lang === 'ro' ? 'Conectare' : 'Se connecter'); ?>
        </button>
      </form>

      <div class="auth-divider">
        <span><?php echo $lang === 'en' ? 'or' : ($lang === 'ro' ? 'sau' : 'ou'); ?></span>
      </div>

      <!-- Connexion Google -->
      <a href="/api/google-login.php" class="btn-google-login">
        <svg class="google-icon" viewBox="0 0 24 24" width="18" height="18">
          <path fill="#EA4335" d="M12.24 10.285V14.4h6.887c-.648 2.41-2.519 4.114-5.136 4.114A5.79 5.79 0 0 1 8.2 12.725a5.79 5.79 0 0 1 5.79-5.79c2.502 0 4.382 1.08 5.348 2.025l3.242-3.242C20.6 3.825 17.58 2.225 13.99 2.225 7.99 2.225 3.2 7.015 3.2 13.015s4.79 10.79 10.79 10.79c6.26 0 10.79-4.4 10.79-10.79 0-.765-.08-1.3-.22-1.73H12.24z"/>
        </svg>
        <span><?php echo $lang === 'en' ? 'Sign in with Google' : ($lang === 'ro' ? 'Conectează-te cu Google' : 'Se connecter avec Google'); ?></span>
      </a>

      <div class="auth-card-footer">
        <p>
          <?php if ($lang === 'en'): ?>
            Don't have an account? <a href="/register">Create an account</a>
          <?php elseif ($lang === 'ro'): ?>
            Nu ai un cont? <a href="/register">Creează un cont</a>
          <?php else: ?>
            Tu n'as pas de compte ? <a href="/register">Créer un compte</a>
          <?php endif; ?>
        </p>
      </div>

    </div>

  </main>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
