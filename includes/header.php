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
    </div>
    
    <a href="/" class="header-logo-wrap"><img src="/assets/images/logo.png" alt="Logo TOP & TDAH" class="header-logo"></a>
    <div class="header-content">
      <div class="header-tag"><?php echo isset($header_tag) ? $header_tag : ''; ?></div>
      <h1 class="main-title"><?php echo isset($header_title) ? $header_title : ''; ?></h1>
      <p class="main-subtitle"><?php echo isset($header_subtitle) ? $header_subtitle : ''; ?></p>
    </div>
  </header>
