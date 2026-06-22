  <!-- Sticky Horizontal Navigation -->
  <nav class="header-nav sticky-nav">
    <div class="sticky-nav-container">
      <ul class="nav-horizontal" id="toc-nav">
        <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Accueil</a></li>
        <li class="<?php echo ($current_page === 'definition') ? 'active' : ''; ?>"><a href="/definition">🔎 I. Comprendre le TOP</a></li>
        <li class="<?php echo ($current_page === 'temoignages') ? 'active' : ''; ?>"><a href="/temoignages">📱 II. Analyse des Sources</a></li>
        <li class="<?php echo ($current_page === 'strategies') ? 'active' : ''; ?>"><a href="/strategies">🛠️ III. Fiches Stratégiques</a></li>
        <li class="<?php echo ($current_page === 'accompagnement') ? 'active' : ''; ?>"><a href="/accompagnement">🏥 IV. Prise en Charge</a></li>
        <li class="<?php echo ($current_page === 'synthese') ? 'active' : ''; ?>"><a href="/synthese">📄 V. Synthèse</a></li>
      </ul>
      <div class="search-container horizontal-search">
        <span class="search-icon">🔍</span>
        <input type="text" id="site-search" class="search-input" placeholder="Rechercher...">
      </div>
    </div>
  </nav>
