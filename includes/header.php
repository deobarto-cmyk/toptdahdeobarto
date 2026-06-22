  <!-- Header Banner -->
  <header>
    <!-- Theme Switcher -->
    <div class="theme-toggle-container">
      <button class="btn-toggle-theme" id="theme-btn" onclick="toggleTheme()">
        <span id="theme-icon">🌙</span> <span id="theme-text">Mode Sombre</span>
      </button>
    </div>
    
    <a href="/" class="header-logo-wrap"><img src="/img/logo.png" alt="Logo deobarto" class="header-logo"></a>
    <div class="header-content">
      <div class="header-tag"><?php echo isset($header_tag) ? $header_tag : ''; ?></div>
      <h1 class="main-title"><?php echo isset($header_title) ? $header_title : ''; ?></h1>
      <p class="main-subtitle"><?php echo isset($header_subtitle) ? $header_subtitle : ''; ?></p>
    </div>
  </header>
