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
        <?php elseif ($lang === 'ro'): ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Acasă</a></li>
          <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Înțelegerea TOP</a></li>
          <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Analiza Surselor</a></li>
          <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Fișe Strategice</a></li>
          <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Asistență și Sprijin</a></li>
          <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Sinteză</a></li>
        <?php else: ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Accueil</a></li>
          <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Comprendre le TOP</a></li>
          <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Analyse des Sources</a></li>
          <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Fiches Stratégiques</a></li>
          <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Prise en Charge</a></li>
          <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Synthèse</a></li>
        <?php endif; ?>
      </ul>
      <div class="search-container horizontal-search">
        <span class="search-icon">🔍</span>
        <input type="text" id="site-search" class="search-input" placeholder="<?php echo $lang === 'en' ? 'Search...' : ($lang === 'ro' ? 'Caută...' : 'Rechercher...'); ?>">
      </div>
    </div>
  </nav>
