  <!-- Sticky Horizontal Navigation -->
  <nav class="header-nav sticky-nav">
    <div class="sticky-nav-container">
      <ul class="nav-horizontal" id="toc-nav">
        <?php if ($lang === 'en'): ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Home</a></li>
          <?php if (isset($_SESSION['user_id'])): ?>
            <li class="<?php echo ($current_page === 'planning') ? 'active' : ''; ?>"><a href="/planning">📅 Schedule</a></li>
          <?php endif; ?>
        <?php elseif ($lang === 'ro'): ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Acasă</a></li>
          <?php if (isset($_SESSION['user_id'])): ?>
            <li class="<?php echo ($current_page === 'planning') ? 'active' : ''; ?>"><a href="/planning">📅 Program</a></li>
          <?php endif; ?>
        <?php else: ?>
          <li class="<?php echo ($current_page === 'index') ? 'active' : ''; ?>"><a href="/">🏠 Accueil</a></li>
          <?php if (isset($_SESSION['user_id'])): ?>
            <li class="<?php echo ($current_page === 'planning') ? 'active' : ''; ?>"><a href="/planning">📅 Planning</a></li>
          <?php endif; ?>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

