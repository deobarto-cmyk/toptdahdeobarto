  <!-- Sticky Horizontal Navigation -->
  <nav class="header-nav sticky-nav">
    <div class="sticky-nav-container">
      <ul class="nav-horizontal" id="toc-nav">
        <?php if ($lang === 'en'): ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Home</a></li>
          <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Understanding ODD</a></li>
          <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Source Analysis</a></li>
          <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Strategy Sheets</a></li>
          <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Support & Guidance</a></li>
          <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Synthesis</a></li>
          <li class="<?php echo ($current_page === 'forum') ? 'active' : ''; ?>"><a href="/forum">💬 VI. Forum</a></li>
        <?php elseif ($lang === 'ro'): ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Acasă</a></li>
          <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Înțelegerea TOP</a></li>
          <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Analiza Surselor</a></li>
          <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Fișe Strategice</a></li>
          <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Asistență și Sprijin</a></li>
          <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Sinteză</a></li>
          <li class="<?php echo ($current_page === 'forum') ? 'active' : ''; ?>"><a href="/forum">💬 VI. Forum</a></li>
        <?php else: ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Accueil</a></li>
          <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Comprendre le TOP</a></li>
          <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Analyse des Sources</a></li>
          <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Fiches Stratégiques</a></li>
          <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Prise en Charge</a></li>
          <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Synthèse</a></li>
          <li class="<?php echo ($current_page === 'forum') ? 'active' : ''; ?>"><a href="/forum">💬 VI. Forum</a></li>
        <?php endif; ?>
        
        <!-- Espace Connexion / Utilisateur -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-user-item">
            <span class="nav-user-wrap">
              <?php if (!empty($_SESSION['user_avatar'])): ?>
                <img src="<?php echo htmlspecialchars($_SESSION['user_avatar']); ?>" alt="Avatar" class="nav-avatar">
              <?php else: ?>
                <span class="nav-avatar-placeholder"><?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?></span>
              <?php endif; ?>
              <span class="nav-username"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
            </span>
            <a href="/api/auth-handler.php?action=logout" class="nav-logout-btn" title="<?php echo $lang === 'en' ? 'Log Out' : ($lang === 'ro' ? 'Deconectare' : 'Déconnexion'); ?>">❌</a>
          </li>
        <?php else: ?>
          <li class="<?php echo ($current_page === 'login' || $current_page === 'register') ? 'active' : ''; ?>">
            <a href="/login" class="nav-login-link">👤 <?php echo $lang === 'en' ? 'Log In' : ($lang === 'ro' ? 'Conectare' : 'Connexion'); ?></a>
          </li>
        <?php endif; ?>
      </ul>
      <div class="search-container horizontal-search">
        <span class="search-icon">🔍</span>
        <input type="text" id="site-search" class="search-input" placeholder="<?php echo $lang === 'en' ? 'Search...' : ($lang === 'ro' ? 'Caută...' : 'Rechercher...'); ?>">
      </div>
    </div>
  </nav>
