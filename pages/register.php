<?php
include_once __DIR__ . '/../includes/lang.php';

// Si déjà connecté, redirection vers le forum
if (isset($_SESSION['user_id'])) {
    header('Location: /forum');
    exit;
}

if ($lang === 'en') {
    $page_title = "Sign Up | ODD & ADHD Support Portal";
    $page_description = "Create an account to join the discussion forum and share strategies.";
    $current_page = "register";
    $header_tag = "Community Space";
    $header_title = "Sign Up";
    $header_subtitle = "Create an account to exchange, discuss, and find help.";
} elseif ($lang === 'ro') {
    $page_title = "Înregistrare | Portal de Suport TOP & TDAH";
    $page_description = "Creează un cont pentru a te alătura forumului de discuții și a împărtăși strategii.";
    $current_page = "register";
    $header_tag = "Spațiu Comunitar";
    $header_title = "Înregistrare";
    $header_subtitle = "Creează un cont pentru a schimba idei, a discuta și a găsi ajutor.";
} else {
    $page_title = "Inscription | Portail d'Accompagnement TOP & TDAH";
    $page_description = "Créez un compte pour rejoindre le forum de discussion et partager des conseils.";
    $current_page = "register";
    $header_tag = "Espace Communautaire";
    $header_title = "Inscription";
    $header_subtitle = "Crée un compte pour échanger, discuter et trouver de l'aide.";
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
          <?php echo $lang === 'en' ? 'Create Account' : ($lang === 'ro' ? 'Creează un cont' : 'Créer un compte'); ?>
        </h2>
        <p>
          <?php echo $lang === 'en' ? 'Join the community of parents and exchange strategies.' : ($lang === 'ro' ? 'Alătură-te comunității de părinți și împărtășește strategii.' : 'Rejoins la communauté de parents et échange des conseils.'); ?>
        </p>
      </div>

      <?php if (!empty($authError)): ?>
        <div class="auth-alert">
          <span class="auth-alert-icon">⚠️</span>
          <span class="auth-alert-text"><?php echo htmlspecialchars($authError); ?></span>
        </div>
      <?php endif; ?>

      <!-- Formulaire Classique -->
      <form action="/api/auth-handler.php?action=register" method="POST" class="auth-form">
        <div class="form-group">
          <label for="display_name"><?php echo $lang === 'en' ? 'Display Name or Pseudonym' : ($lang === 'ro' ? 'Nume afișat sau Pseudonim' : 'Nom d\'affichage ou Pseudonyme'); ?></label>
          <input type="text" id="display_name" name="display_name" required placeholder="<?php echo $lang === 'en' ? 'e.g. Marie88' : ($lang === 'ro' ? 'de ex. Marie88' : 'ex: Marie88'); ?>">
        </div>

        <div class="form-group">
          <label for="email"><?php echo $lang === 'en' ? 'Email Address' : ($lang === 'ro' ? 'Adresă de e-mail' : 'Adresse e-mail'); ?></label>
          <input type="email" id="email" name="email" required placeholder="parents@example.com">
        </div>

        <div class="form-group">
          <label for="password"><?php echo $lang === 'en' ? 'Password (min. 6 chars)' : ($lang === 'ro' ? 'Parolă (min. 6 caractere)' : 'Mot de passe (min. 6 car.)'); ?></label>
          <input type="password" id="password" name="password" required placeholder="••••••••" minlength="6">
        </div>

        <button type="submit" class="btn-action btn-auth-submit">
          <?php echo $lang === 'en' ? 'Sign Up' : ($lang === 'ro' ? 'Înregistrare' : 'S\'inscrire'); ?>
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
        <span><?php echo $lang === 'en' ? 'Register with Google' : ($lang === 'ro' ? 'Înregistrează-te cu Google' : 'S\'inscrire avec Google'); ?></span>
      </a>

      <div class="auth-card-footer">
        <p>
          <?php if ($lang === 'en'): ?>
            Already have an account? <a href="/login">Log in</a>
          <?php elseif ($lang === 'ro'): ?>
            Ai deja un cont? <a href="/login">Conectează-te</a>
          <?php else: ?>
            Tu as déjà un compte ? <a href="/login">Se connecter</a>
          <?php endif; ?>
        </p>
      </div>

    </div>

  </main>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
