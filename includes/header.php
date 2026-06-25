  <!-- Header Banner -->
  <header>
    <!-- Theme & Language Switchers -->
    <div class="theme-toggle-container">
      <div class="lang-dropdown">
        <button class="btn-toggle-lang" aria-haspopup="true" aria-expanded="false" id="lang-dropdown-btn">
          <?php if ($lang === 'en'): ?>
            <span class="flag-icon flag-en"></span>
            <span class="lang-text">English</span>
          <?php elseif ($lang === 'ro'): ?>
            <span class="flag-icon flag-ro"></span>
            <span class="lang-text">Română</span>
          <?php else: ?>
            <span class="flag-icon flag-fr"></span>
            <span class="lang-text">Français</span>
          <?php endif; ?>
          <span class="dropdown-chevron">▼</span>
        </button>
        <div class="lang-dropdown-menu">
          <a href="?lang=fr" class="lang-dropdown-item <?php echo $lang === 'fr' ? 'active' : ''; ?>">
            <span class="flag-icon flag-fr"></span>
            <span class="lang-text">Français</span>
          </a>
          <a href="?lang=ro" class="lang-dropdown-item <?php echo $lang === 'ro' ? 'active' : ''; ?>">
            <span class="flag-icon flag-ro"></span>
            <span class="lang-text">Română</span>
          </a>
          <a href="?lang=en" class="lang-dropdown-item <?php echo $lang === 'en' ? 'active' : ''; ?>">
            <span class="flag-icon flag-en"></span>
            <span class="lang-text">English</span>
          </a>
        </div>
      </div>
      <button class="btn-toggle-theme" id="theme-btn" onclick="toggleTheme()">
        <span id="theme-icon">🌙</span> <span id="theme-text">Mode Sombre</span>
      </button>
      
      <!-- Photo de profil en haut à droite si connecté -->
      <?php if (isset($_SESSION['user_id'])): ?>
        <div class="header-user-menu-container">
          <div class="header-user-avatar" onclick="toggleHeaderUserDropdown(event)" title="<?php echo htmlspecialchars($_SESSION['user_name']); ?>">
            <?php if (!empty($_SESSION['user_avatar'])): ?>
              <img src="<?php echo htmlspecialchars($_SESSION['user_avatar']); ?>" alt="Avatar" class="header-avatar-img">
            <?php else: ?>
              <span class="header-avatar-placeholder"><?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?></span>
            <?php endif; ?>
          </div>
          
          <!-- Menu déroulant au clic -->
          <div class="header-user-dropdown" id="header-user-dropdown">
            <span class="dropdown-username"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
            <hr>
            <a href="/api/auth-handler.php?action=logout" class="dropdown-logout-link">
              🚪 <?php echo $lang === 'en' ? 'Log Out' : ($lang === 'ro' ? 'Deconectare' : 'Déconnexion'); ?>
            </a>
          </div>
        </div>
      <?php else: ?>
        <?php if (isset($current_page) && $current_page !== 'index'): ?>
          <a href="/login" class="header-login-btn" title="<?php echo $lang === 'en' ? 'Log In' : ($lang === 'ro' ? 'Conectare' : 'Connexion'); ?>">
            👤
          </a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    
    <a href="/" class="header-logo-wrap"><img src="/assets/images/logo.png" alt="Logo TOP & TDAH" class="header-logo"></a>
    <div class="header-content">
      <div class="header-tag"><?php echo isset($header_tag) ? $header_tag : ''; ?></div>
      <h1 class="main-title"><?php echo isset($header_title) ? $header_title : ''; ?></h1>
      <p class="main-subtitle"><?php echo isset($header_subtitle) ? $header_subtitle : ''; ?></p>
    </div>
  </header>

<script>
  function toggleHeaderUserDropdown(event) {
    event.stopPropagation();
    const dropdown = document.getElementById("header-user-dropdown");
    if (dropdown) {
      dropdown.classList.toggle("show");
    }
  }
  
  // Fermer le menu déroulant si on clique ailleurs
  window.addEventListener("click", () => {
    const dropdown = document.getElementById("header-user-dropdown");
    if (dropdown && dropdown.classList.contains("show")) {
      dropdown.classList.remove("show");
    }
  });
</script>
