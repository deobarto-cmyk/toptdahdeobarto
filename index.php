<?php
/**
 * index.php - Tableau de bord familial d'accueil (Ewan & Florian)
 */

include_once 'includes/lang.php';

// Détermination des textes selon la langue
if ($lang === 'en') {
    $page_title = "Family Dashboard | Routine Portal";
    $page_description = "Private family portal and daily routine tracker for Ewan and Florian.";
    $current_page = "index";
    $header_tag = "Private Portal";
    $header_title = "The Family Portal";
    $header_subtitle = "Welcome to your personal space. Organize your days and track routines together.";
    
    // Traductions de la page
    $txt_welcome = "Hello Laude Family!";
    $txt_intro = "Here is the summary of your routines for today. Make sure to complete your tasks and synchronise them.";
    $txt_today_tasks = "Today's Tasks";
    $txt_completed = "completed";
    $txt_badge_together = "Together";
    $txt_badge_custom = "Custom";
    $txt_open_planning = "📅 Open Weekly Schedule";
    $txt_no_tasks = "No tasks planned for today. Enjoy your day! ✨";
} elseif ($lang === 'ro') {
    $page_title = "Tablou de bord familial | Portal de rutină";
    $page_description = "Portal privat de familie și monitorizare a rutinei zilnice pentru Ewan și Florian.";
    $current_page = "index";
    $header_tag = "Portal Privat";
    $header_title = "Portalul Familiei";
    $header_subtitle = "Bun venit în spațiul vostru personal. Organizați-vă zilele și urmăriți rutinele împreună.";
    
    // Traductions de la page
    $txt_welcome = "Salutare, Familia Laude!";
    $txt_intro = "Iată rezumatul rutinelor voastre pentru astăzi. Asigurați-vă că vă finalizați sarcinile și le sincronizați.";
    $txt_today_tasks = "Sarcinile de astăzi";
    $txt_completed = "finalizate";
    $txt_badge_together = "Împreună";
    $txt_badge_custom = "Perso";
    $txt_open_planning = "📅 Deschide Programul Săptămânal";
    $txt_no_tasks = "Nicio sarcină planificată pentru astăzi. O zi frumoasă! ✨";
} else { // Français par défaut
    $page_title = "Tableau de Bord Familial | Portail Routine";
    $page_description = "Portail familial privé et suivi de la routine quotidienne pour Ewan et Florian.";
    $current_page = "index";
    $header_tag = "Portail Privé";
    $header_title = "Le Portail Familial";
    $header_subtitle = "Bienvenue dans votre espace personnel. Organisez vos journées et suivez vos routines ensemble.";
    
    // Traductions de la page
    $txt_welcome = "Bonjour la Famille Laude !";
    $txt_intro = "Voici le résumé de vos routines pour aujourd'hui. Pensez à compléter vos tâches et à les synchroniser.";
    $txt_today_tasks = "Tâches d'aujourd'hui";
    $txt_completed = "complétées";
    $txt_badge_together = "Ensemble";
    $txt_badge_custom = "Perso";
    $txt_open_planning = "📅 Ouvrir le Planning Hebdomadaire";
    $txt_no_tasks = "Aucune tâche prévue pour aujourd'hui. Passez une belle journée ! ✨";
}

include 'includes/head.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<style>
  /* Styles exclusifs pour le Tableau de Bord d'accueil familial */
  .dashboard-header {
    text-align: center;
    margin-bottom: 2.5rem;
  }

  .dashboard-header h3 {
    font-family: var(--font-heading);
    font-size: 1.75rem;
    font-weight: 800;
    color: var(--text-main);
    margin-bottom: 0.5rem;
  }

  .dashboard-header p {
    font-size: 1.05rem;
    color: var(--text-muted);
    max-width: 600px;
    margin: 0 auto;
  }

  .date-banner {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 800;
    color: var(--primary);
    background: var(--bg-alt);
    border: 1px solid var(--card-border);
    padding: 0.5rem 1.5rem;
    border-radius: 30px;
    display: inline-block;
    margin-top: 1rem;
    box-shadow: var(--shadow-sm);
  }

  /* Grille des membres de la famille */
  .family-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
  }

  .family-card {
    background: var(--card-bg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid var(--card-border);
    border-radius: 24px;
    padding: 2rem;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
  }

  .family-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(var(--primary-rgb), 0.25);
  }

  .family-card-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    border-bottom: 1px solid var(--bg-alt);
    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
  }

  .family-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--bg-alt);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    box-shadow: var(--shadow-sm);
  }

  .family-name-wrap h4 {
    font-family: var(--font-heading);
    font-size: 1.35rem;
    font-weight: 800;
    color: var(--text-main);
  }

  .family-progress-text {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin: 0 !important;
  }

  /* Liste de tâches du jour */
  .today-task-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    flex-grow: 1;
  }

  .today-task-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.65rem 1rem;
    border-radius: 12px;
    background: var(--bg-alt);
    border: 1px solid transparent;
    transition: var(--transition);
  }

  .today-task-item.checked {
    opacity: 0.7;
  }

  .task-status-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--text-dark);
    flex-shrink: 0;
  }

  .today-task-item.checked .task-status-dot {
    background: var(--primary);
    box-shadow: 0 0 8px var(--primary);
  }

  .today-task-text {
    font-size: 0.92rem;
    font-weight: 500;
    color: var(--text-main);
    flex-grow: 1;
    word-break: break-word;
  }

  .today-task-item.checked .today-task-text {
    text-decoration: line-through;
    color: var(--text-muted);
  }

  /* Badge de type */
  .today-task-badge {
    font-size: 0.6rem;
    padding: 0.15rem 0.4rem;
    border-radius: 4px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.02em;
    flex-shrink: 0;
  }

  .badge-together {
    background: rgba(180, 83, 9, 0.1);
    color: var(--accent);
  }

  .badge-custom {
    background: rgba(13, 148, 136, 0.1);
    color: var(--primary);
  }

  /* Barre de progression de carte */
  .card-progress-bar {
    height: 6px;
    background: var(--bg-alt);
    border-radius: 3px;
    overflow: hidden;
    margin-top: 1rem;
    border: 1px solid var(--card-border);
  }

  .card-progress-fill {
    height: 100%;
    background: var(--primary);
    width: 0%;
    transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* Bouton d'action central */
  .action-container {
    text-align: center;
    margin-top: 2rem;
  }

  .btn-dashboard-action {
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: 1.1rem;
    padding: 0.85rem 2.5rem;
    border-radius: 40px;
    box-shadow: 0 4px 14px rgba(var(--primary-rgb), 0.25);
    background: var(--primary);
    color: #ffffff !important;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    transition: var(--transition);
    border: none;
    cursor: pointer;
  }

  .btn-dashboard-action:hover {
    background: var(--primary-hover);
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(var(--primary-rgb), 0.4);
  }

  .no-tasks-msg {
    text-align: center;
    font-style: italic;
    color: var(--text-dark);
    margin: 2rem 0;
  }
</style>

<div class="container no-sidebar">
  <main>
    <div class="dashboard-header">
      <span class="section-badge"><?php echo htmlspecialchars($header_tag); ?></span>
      <h3><?php echo htmlspecialchars($txt_welcome); ?></h3>
      <p><?php echo htmlspecialchars($txt_intro); ?></p>
      
      <!-- Bannière de date -->
      <div class="date-banner" id="today-date-text">
        <!-- Rempli par JS -->
      </div>
    </div>

    <!-- Grille Familiale -->
    <div class="family-grid">
      
      <!-- Carte Ewan -->
      <div class="family-card" id="card-ewan">
        <div class="family-card-header">
          <div class="family-avatar">👦</div>
          <div class="family-name-wrap">
            <h4>Ewan</h4>
            <p class="family-progress-text">
              <span id="ewan-completed">0</span> / <span id="ewan-total">0</span> <?php echo htmlspecialchars($txt_completed); ?>
            </p>
          </div>
        </div>
        
        <ul class="today-task-list" id="ewan-task-list">
          <!-- Injecté par JS -->
        </ul>
        
        <div class="card-progress-bar">
          <div class="card-progress-fill" id="ewan-progress-fill"></div>
        </div>
      </div>

      <!-- Carte Florian -->
      <div class="family-card" id="card-florian">
        <div class="family-card-header">
          <div class="family-avatar">👨</div>
          <div class="family-name-wrap">
            <h4>Florian</h4>
            <p class="family-progress-text">
              <span id="florian-completed">0</span> / <span id="florian-total">0</span> <?php echo htmlspecialchars($txt_completed); ?>
            </p>
          </div>
        </div>
        
        <ul class="today-task-list" id="florian-task-list">
          <!-- Injecté par JS -->
        </ul>
        
        <div class="card-progress-bar">
          <div class="card-progress-fill" id="florian-progress-fill"></div>
        </div>
      </div>

    </div>

    <!-- Bouton d'action principal -->
    <?php if (isset($_SESSION['user_id'])): ?>
    <div class="action-container">
      <a href="/planning" class="btn-dashboard-action">
        <?php echo htmlspecialchars($txt_open_planning); ?>
      </a>
    </div>
    <?php endif; ?>
  </main>
</div>

<script>
  // Tâches par défaut (issues du Google Sheet)
  const defaultTasks = {
    florian: {
      Lundi: ["🧺 Lessive", "🧹 Aspirateur", "🛒 Courses"],
      Mardi: ["🧽 Nettoyer Cuisine/SdB", "🐈 Caisse des chats"],
      Mercredi: ["🧺 Lessive", "🗑️ Sortir poubelles"],
      Jeudi: ["🪟 Poussières", "🛒 Courses"],
      Vendredi: ["🧺 Lessive", "🧹 Aspirateur", "🐈 Caisse des chats", "🧽 Laver le sol"],
      Samedi: ["🛋️ Repos / Loisirs", "🐈 Caisse des chats"],
      Dimanche: ["🧺 Lessive", "🧹 Petit rangement", "🐈 Caisse des chats"]
    },
    ewan: {
      Lundi: ["🧹 Ranger son bureau"],
      Mardi: ["🍽️ Ranger la vaisselle de sa chambre"],
      Mercredi: ["🛏️ Faire son lit"],
      Jeudi: ["🍽️ Ranger la vaisselle de sa chambre"],
      Vendredi: ["🧹 Ranger son bureau"],
      Samedi: ["🛋️ Repos / Loisirs"],
      Dimanche: ["🍽️ Ranger la vaisselle de sa chambre"]
    }
  };

  const commonTask = "🎵 Mettre de la musique";

  document.addEventListener("DOMContentLoaded", () => {
    displayTodayDate();
    fetchTodayTasks();
  });

  // Formater et afficher la date du jour en haut
  function displayTodayDate() {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const locale = <?php echo json_encode($lang === 'en' ? 'en-US' : ($lang === 'ro' ? 'ro-RO' : 'fr-FR')); ?>;
    const today = new Date();
    
    // Capitaliser la première lettre
    let dateString = today.toLocaleDateString(locale, options);
    dateString = dateString.charAt(0).toUpperCase() + dateString.slice(1);
    
    document.getElementById("today-date-text").innerText = dateString;
  }

  // Obtenir le jour actuel en français ("Lundi", "Mardi", etc.)
  function getFrenchDayName() {
    const days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    const d = new Date();
    return days[d.getDay()];
  }

  // Obtenir la date actuelle YYYY-MM-DD
  function getTodayDateString() {
    const d = new Date();
    return `${d.getFullYear()}-${String(d.getMonth() + 1).padStart(2, '0')}-${String(d.getDate()).padStart(2, '0')}`;
  }

  // Fetch les tâches du jour depuis la BDD
  function fetchTodayTasks() {
    const todayStr = getTodayDateString();
    
    fetch(`/api/planning-sync.php?date=${todayStr}&t=${Date.now()}`)
      .then(response => {
        if (!response.ok) throw new Error("HTTP error " + response.status);
        return response.json();
      })
      .then(data => {
        if (data.success) {
          renderTodayDashboard(data.tasks);
        } else {
          throw new Error(data.error);
        }
      })
      .catch(err => {
        console.error("Erreur de récupération des tâches du jour en BDD, utilisation par défaut non cochée.", err);
        renderTodayDashboard({ ewan: [], florian: [] });
      });
  }

  // Rendu des listes sur la page d'accueil
  function renderTodayDashboard(dbTasks) {
    const currentDayFr = getFrenchDayName();
    
    ["ewan", "florian"].forEach(person => {
      const listElement = document.getElementById(`${person}-task-list`);
      listElement.innerHTML = "";
      
      const dbPersonTasks = dbTasks[person] || [];
      const mergedTasks = [];
      
      // 1. Charger les tâches spécifiques par défaut pour aujourd'hui
      const specificDefaults = defaultTasks[person][currentDayFr] || [];
      specificDefaults.forEach(taskText => {
        const dbMatch = dbPersonTasks.find(t => t.text === taskText && !t.isCustom);
        mergedTasks.push({
          text: taskText,
          checked: dbMatch ? dbMatch.checked : false,
          isCustom: false,
          isCommon: false
        });
      });

      // 2. Tâche commune
      const dbCommonMatch = dbPersonTasks.find(t => t.text === commonTask && !t.isCustom);
      mergedTasks.push({
        text: commonTask,
        checked: dbCommonMatch ? dbCommonMatch.checked : false,
        isCustom: false,
        isCommon: true
      });

      // 3. Tâches personnalisées ajoutées pour aujourd'hui
      const dbCustomTasks = dbPersonTasks.filter(t => t.isCustom);
      dbCustomTasks.forEach(dbCustom => {
        mergedTasks.push({
          text: dbCustom.text,
          checked: dbCustom.checked,
          isCustom: true,
          isCommon: false
        });
      });

      // Rendre la liste
      let completedCount = 0;
      let totalCount = mergedTasks.length;

      if (totalCount === 0) {
        listElement.innerHTML = `<li class="no-tasks-msg"><?php echo htmlspecialchars($txt_no_tasks); ?></li>`;
      } else {
        mergedTasks.forEach(task => {
          if (task.checked) completedCount++;
          
          const li = document.createElement("li");
          li.className = `today-task-item animate-task${task.checked ? ' checked' : ''}`;
          
          let badgeHTML = "";
          if (task.isCommon) {
            badgeHTML = `<span class="today-task-badge badge-together"><?php echo htmlspecialchars($txt_badge_together); ?></span>`;
          } else if (task.isCustom) {
            badgeHTML = `<span class="today-task-badge badge-custom"><?php echo htmlspecialchars($txt_badge_custom); ?></span>`;
          }

          li.innerHTML = `
            <span class="task-status-dot"></span>
            <span class="today-task-text">${escapeHtml(task.text)}</span>
            ${badgeHTML}
          `;
          listElement.appendChild(li);
        });
      }

      // Mettre à jour les indicateurs de progression
      document.getElementById(`${person}-completed`).innerText = completedCount;
      document.getElementById(`${person}-total`).innerText = totalCount;
      
      const pct = totalCount > 0 ? (completedCount / totalCount) * 100 : 0;
      document.getElementById(`${person}-progress-fill`).style.width = `${pct}%`;
    });
  }

  function escapeHtml(text) {
    const map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
  }
</script>

<?php
include 'includes/footer.php';
?>
