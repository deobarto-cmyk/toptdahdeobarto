
  <!-- Back to Top -->
  <button id="btn-back-to-top" class="back-to-top" title="<?php echo $lang === 'en' ? 'Back to top' : ($lang === 'ro' ? 'Înapoi sus' : 'Retour en haut'); ?>">▲</button>

  <!-- Footer -->
  <footer>
    <p>© 2026 Florian Laude  - <?php echo $lang === 'en' ? 'Understanding & Supporting ODD & ADHD' : ($lang === 'ro' ? 'Înțelegerea și Ghidarea TOP & TDAH' : 'Comprendre et Accompagner le TOP & TDAH'); ?></p>
    <?php if (isset($footer_subtitle) && $footer_subtitle !== ''): ?>
      <p style="margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-dark);"><?php echo $footer_subtitle; ?></p>
    <?php endif; ?>
  </footer>


  <script src="/js/main.js?v=1.3.1"></script>
</body>
</html>
