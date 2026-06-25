<?php
/**
 * planning.php - Page de planning et routine hebdomadaire interactive synchronisée BDD avec validation
 */

include_once 'includes/lang.php';

// Vérifier si l'utilisateur est connecté en session, sinon redirection vers /login
if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}
$is_logged_in = true;

// Détermination des textes selon la langue
if ($lang === 'en') {
    $page_title = "Interactive Family Planning | Support Guide";
    $page_description = "Weekly routine and family tasks tracking portal. Interactive checkbox schedule for Ewan and Florian.";
    $current_page = "planning";
    $header_tag = "Routine & Habits";
    $header_title = "Family Schedule";
    $header_subtitle = "An interactive tool to structure the day and track routines together.";
    
    // Traductions de la page
    $txt_subtitle = "Track your daily tasks, check them off as you go, and add your own custom tasks for each day.";
    $txt_tab_ewan = "👦 Ewan's Schedule";
    $txt_tab_florian = "👨 Florian's Schedule";
    $txt_today = "Today";
    $txt_reset_btn = "🧹 Reset Day (Uncheck all)";
    $txt_add_placeholder = "Add a task...";
    $txt_completed_tasks = "tasks completed";
    $txt_badge_together = "Together";
    $txt_badge_custom = "Custom";
    $txt_week_range = "Week from %s to %s";
    
    // Status de sync
    $txt_sync_online = "🟢 Saved & Synchronized";
    $txt_sync_pending = "💾 Changes pending (Click Save)";
    $txt_sync_saving = "⏳ Saving to database...";
    $txt_sync_error = "🔴 Connection error (could not save)";
    
    // Bouton enregistrer
    $txt_save_btn = " Enregistrer & Synchroniser";
    
    // Confirmations
    $txt_confirm_reset = "Are you sure you want to uncheck all tasks for this day?";
    $txt_confirm_tab_change = "You have unsaved changes. Are you sure you want to switch tabs? Your changes will be lost.";
} elseif ($lang === 'ro') {
    $page_title = "Program Familial Interactiv | Ghid de Însoțire";
    $page_description = "Portal de urmărire a rutinei săptămânale și a sarcinilor de familie. Program interactiv cu bife pentru Ewan și Florian.";
    $current_page = "planning";
    $header_tag = "Rutină & Obiceiuri";
    $header_title = "Programul Familiei";
    $header_subtitle = "Un instrument interactiv pentru a structura ziua și a urmări rutinele împreună.";
    
    // Traductions de la page
    $txt_subtitle = "Urmărește-ți sarcinile zilnice, bifează-le pe parcurs și adaugă propriile liste personalizate pentru fiecare zi.";
    $txt_tab_ewan = "👦 Programul lui Ewan";
    $txt_tab_florian = "👨 Programul lui Florian";
    $txt_today = "Astăzi";
    $txt_reset_btn = "🧹 Resetează ziua (debifează tot)";
    $txt_add_placeholder = "Adaugă o sarcină...";
    $txt_completed_tasks = "sarcini finalizate";
    $txt_badge_together = "Împreună";
    $txt_badge_custom = "Perso";
    $txt_week_range = "Săptămâna de la %s la %s";
    
    // Status de sync
    $txt_sync_online = "🟢 Salvat & Sincronizat";
    $txt_sync_pending = "💾 Modificări nesalvate (Apasă pe Salvare)";
    $txt_sync_saving = "⏳ Se salvează în baza de date...";
    $txt_sync_error = "🔴 Eroare de conexiune (nu s-a putut salva)";
    
    // Bouton enregistrer
    $txt_save_btn = " Salvează și Sincronizează";
    
    // Confirmations
    $txt_confirm_reset = "Sigur vrei să debifezi toate sarcinile pentru această zi?";
    $txt_confirm_tab_change = "Ai modificări nesalvate. Sigur vrei să schimbi fila? Modificările tale vor fi pierdute.";
} else { // Français par défaut
    $page_title = "Planning Familial Interactif | Guide d'Accompagnement";
    $page_description = "Portail de suivi de la routine hebdomadaire et des tâches de la famille. Planning interactif à cocher pour Ewan et Florian.";
    $current_page = "planning";
    $header_tag = "Routine & Habitudes";
    $header_title = "Planning de la Famille";
    $header_subtitle = "Un outil interactif pour structurer les journées et suivre les routines ensemble.";
    
    // Traductions de la page
    $txt_subtitle = "Suis tes tâches quotidiennes, coche-les au fur et à mesure et ajoute tes propres tâches personnalisées pour chaque jour.";
    $txt_tab_ewan = "👦 Routine d'Ewan";
    $txt_tab_florian = "👨 Routine de Florian";
    $txt_today = "Aujourd'hui";
    $txt_reset_btn = "🧹 Recommencer la journée (décocher tout)";
    $txt_add_placeholder = "Ajouter une tâche...";
    $txt_completed_tasks = "tâches accomplies";
    $txt_badge_together = "Ensemble";
    $txt_badge_custom = "Perso";
    $txt_week_range = "Semaine du %s au %s";
    
    // Status de sync
    $txt_sync_online = "🟢 Enregistré & Synchronisé";
    $txt_sync_pending = "💾 Modifications en attente (clique sur Valider)";
    $txt_sync_saving = "⏳ Enregistrement dans la base de données...";
    $txt_sync_error = "🔴 Erreur lors de l'enregistrement";
    
    // Bouton enregistrer
    $txt_save_btn = " Valider & Synchroniser";
    
    // Confirmations
    $txt_confirm_reset = "Es-tu sûr de vouloir décocher toutes les tâches pour ce jour ?";
    $txt_confirm_tab_change = "Tu as des modifications non enregistrées. Es-tu sûr de vouloir changer d'onglet ? Tes modifications seront perdues.";
}

include 'includes/head.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<style>
  /* Styles exclusifs et premium pour la page de planning */
  .planning-intro {
    text-align: center;
    margin-bottom: 1.5rem;
  }
  
  .planning-intro p {
    font-size: 1.05rem;
    color: var(--text-muted);
    max-width: 700px;
    margin: 0.5rem auto 0;
  }

  .week-indicator {
    font-family: var(--font-heading);
    font-size: 1rem;
    font-weight: 700;
    color: var(--text-muted);
    background: var(--bg-alt);
    border: 1px solid var(--card-border);
    padding: 0.4rem 1.25rem;
    border-radius: 20px;
    display: inline-block;
    margin-top: 1rem;
    box-shadow: var(--shadow-sm);
  }

  .planning-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
    margin-bottom: 2rem;
  }

  /* Sélecteur d'onglet style sliding pill */
  .planning-tabs {
    display: inline-flex;
    background: var(--bg-alt);
    border-radius: 30px;
    padding: 6px;
    border: 1px solid var(--card-border);
    box-shadow: var(--shadow-sm);
  }

  .planning-tab-btn {
    border: none;
    background: transparent;
    padding: 0.65rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 700;
    font-family: var(--font-heading);
    color: var(--text-muted);
    cursor: pointer;
    border-radius: 25px;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .planning-tab-btn:hover {
    color: var(--primary);
  }

  .planning-tab-btn.active {
    background: var(--primary);
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(var(--primary-rgb), 0.25);
  }

  /* Bouton Enregistrer / Valider */
  .btn-save-planning {
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: 0.95rem;
    padding: 0.7rem 1.75rem;
    border-radius: 30px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
    transition: var(--transition);
    text-decoration: none;
    border: none;
    background: var(--bg-alt);
    color: var(--text-muted);
    border: 1px solid var(--card-border);
    pointer-events: none;
    opacity: 0.5;
  }

  .btn-save-planning.active-unsaved {
    background: var(--accent);
    color: #ffffff;
    border-color: var(--accent);
    opacity: 1;
    pointer-events: auto;
    box-shadow: 0 4px 14px rgba(var(--accent-rgb), 0.3);
    animation: pulseGlow 2s infinite ease-in-out;
  }

  .btn-save-planning.active-unsaved:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(var(--accent-rgb), 0.45);
  }

  @keyframes pulseGlow {
    0%, 100% {
      box-shadow: 0 4px 14px rgba(var(--accent-rgb), 0.25);
    }
    50% {
      box-shadow: 0 4px 22px rgba(var(--accent-rgb), 0.55);
    }
  }

  /* Bouton Réinitialiser */
  .btn-reset-planning {
    background: var(--bg-alt);
    border: 1px solid var(--card-border);
    color: var(--text-main);
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 0.88rem;
    padding: 0.65rem 1.25rem;
    border-radius: 30px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: var(--shadow-sm);
  }

  .btn-reset-planning:hover {
    border-color: #ef4444;
    background: rgba(239, 68, 68, 0.05);
    color: #ef4444;
    transform: translateY(-1px);
  }

  /* Statut de Synchronisation */
  .sync-status {
    font-family: var(--font-heading);
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.4rem 1rem;
    border-radius: 20px;
    background: var(--bg-alt);
    border: 1px solid var(--card-border);
    box-shadow: var(--shadow-sm);
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
  }

  /* Progression */
  .progress-section {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 16px;
    padding: 1.25rem 1.5rem;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-sm);
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
  }

  .progress-info {
    flex-shrink: 0;
  }

  .progress-info h4 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 800;
    color: var(--text-main);
  }

  .progress-info p {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin: 0 !important;
  }

  .progress-bar-container {
    flex-grow: 1;
    height: 12px;
    background: var(--bg-alt);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    border: 1px solid var(--card-border);
  }

  .progress-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--primary), var(--primary-hover));
    width: 0%;
    border-radius: 6px;
    transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .progress-percentage {
    font-family: var(--font-heading);
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--primary);
    min-width: 60px;
    text-align: right;
  }

  /* Grille de Jours */
  .planning-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
    gap: 1.5rem;
  }

  .day-card {
    background: var(--card-bg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid var(--card-border);
    border-radius: 20px;
    padding: 1.5rem;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
    height: 100%;
    position: relative;
  }

  .day-card:hover {
    border-color: rgba(var(--primary-rgb), 0.25);
    box-shadow: var(--shadow-lg);
    transform: translateY(-2px);
  }

  .day-card.today {
    border: 2px solid var(--primary);
    box-shadow: 0 0 20px rgba(var(--primary-rgb), 0.15);
  }

  .day-title {
    font-family: var(--font-heading);
    font-size: 1.25rem;
    font-weight: 800;
    margin-bottom: 0.25rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--text-main);
  }

  .day-subtitle {
    font-size: 0.8rem;
    color: var(--text-muted);
    margin-bottom: 1rem;
    border-bottom: 1px solid var(--bg-alt);
    padding-bottom: 0.5rem;
  }

  .today-badge {
    font-size: 0.65rem;
    background: var(--accent);
    color: #ffffff;
    padding: 0.2rem 0.6rem;
    border-radius: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    box-shadow: 0 2px 6px rgba(var(--accent-rgb), 0.2);
  }

  /* Liste de tâches */
  .task-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0.65rem;
    margin-bottom: 1.5rem;
    flex-grow: 1;
    padding: 0;
  }

  .task-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.6rem 0.85rem;
    border-radius: 10px;
    background: var(--bg-alt);
    transition: var(--transition);
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
  }

  .task-item:hover {
    background: var(--card-bg-hover);
    border-color: rgba(var(--primary-rgb), 0.15);
  }

  .task-checkbox-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .task-checkbox {
    opacity: 0;
    position: absolute;
    width: 0;
    height: 0;
  }

  .custom-checkbox {
    width: 20px;
    height: 20px;
    border: 2px solid var(--text-dark);
    border-radius: 6px;
    transition: var(--transition);
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-color);
  }

  .task-checkbox:checked + .custom-checkbox {
    background: var(--primary);
    border-color: var(--primary);
  }

  .custom-checkbox::after {
    content: "✓";
    color: #ffffff;
    font-weight: bold;
    font-size: 0.8rem;
    display: none;
  }

  .task-checkbox:checked + .custom-checkbox::after {
    display: block;
  }

  .task-text {
    font-size: 0.92rem;
    color: var(--text-main);
    transition: var(--transition);
    flex-grow: 1;
    word-break: break-word;
    font-weight: 500;
  }

  .task-checkbox:checked ~ .task-text {
    text-decoration: line-through;
    color: var(--text-muted);
    opacity: 0.65;
  }

  /* Badges de tâches */
  .task-badge {
    font-size: 0.6rem;
    padding: 0.15rem 0.4rem;
    border-radius: 4px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.03em;
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

  /* Formulaire d'ajout rapide */
  .add-task-form {
    display: flex;
    gap: 0.5rem;
    margin-top: auto;
    border-top: 1px solid var(--card-border);
    padding-top: 0.85rem;
  }

  .add-task-input {
    flex-grow: 1;
    border: none;
    border-bottom: 1px solid var(--card-border);
    background: transparent;
    padding: 0.4rem 0.2rem;
    font-size: 0.85rem;
    color: var(--text-main);
    font-family: var(--font-body);
    transition: var(--transition);
  }

  .add-task-input:focus {
    outline: none;
    border-bottom-color: var(--primary);
  }

  .add-task-btn {
    border: none;
    background: var(--bg-alt);
    color: var(--text-muted);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1rem;
    transition: var(--transition);
    border: 1px solid var(--card-border);
  }

  .add-task-btn:hover {
    background: var(--primary);
    color: #ffffff;
    border-color: var(--primary);
    transform: scale(1.05);
  }

  /* Bouton Supprimer la tâche */
  .delete-task-btn {
    border: none;
    background: transparent;
    color: var(--text-dark);
    cursor: pointer;
    font-size: 0.9rem;
    opacity: 0;
    transition: var(--transition);
    padding: 0.2rem;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .task-item:hover .delete-task-btn {
    opacity: 0.5;
  }

  .task-item:hover .delete-task-btn:hover {
    opacity: 1;
    color: #ef4444;
    background: rgba(239, 68, 68, 0.08);
  }

  /* ── Styles du mode lecture seule (non connecté) ── */
  .not-logged-in .btn-save-planning,
  .not-logged-in .btn-reset-planning,
  .not-logged-in .add-task-form,
  .not-logged-in .delete-task-btn {
    display: none !important;
  }

  .not-logged-in .task-item {
    cursor: default !important;
    pointer-events: none !important;
  }

  .not-logged-in .sync-status {
    display: none !important;
  }

  /* Animations */
  @keyframes fadeInSlide {
    from {
      opacity: 0;
      transform: translateY(8px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-task {
    animation: fadeInSlide 0.28s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  }

  /* Responsive styling */
  @media (max-width: 600px) {
    .planning-controls {
      flex-direction: column;
      align-items: stretch;
    }
    
    .planning-tabs {
      display: flex;
    }
    
    .planning-tab-btn {
      flex: 1;
      justify-content: center;
      padding: 0.6rem 1rem;
      font-size: 0.88rem;
    }
    
    .btn-reset-planning {
      justify-content: center;
    }
  }
</style>

<div class="container no-sidebar <?php echo !$is_logged_in ? 'not-logged-in' : ''; ?>">
  <main>
    <div class="planning-intro">
      <span class="section-badge"><?php echo htmlspecialchars($header_tag); ?></span>
      <h2 style="justify-content: center; border: none; padding: 0; margin-bottom: 0.5rem;">
        <span><?php echo htmlspecialchars($header_title); ?></span>
      </h2>
      <p><?php echo htmlspecialchars($txt_subtitle); ?></p>
      
      <!-- Indicateur de semaine et bouton reset -->
      <div class="week-indicator-row" style="display: flex; justify-content: center; align-items: center; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
        <div class="week-indicator" id="week-indicator-text" style="margin-top: 0;">
          <!-- Rempli par JS -->
        </div>
        <button class="btn-reset-planning" onclick="confirmResetAll()">
          <?php echo htmlspecialchars($txt_reset_btn); ?>
        </button>
      </div>

      <!-- Bandeau invitation connexion si non connecté -->
      <?php if (!$is_logged_in): ?>
        <div class="alert-box" style="text-align: center; margin-top: 1.5rem; border-style: solid; background: rgba(13, 148, 136, 0.05); border-color: rgba(13, 148, 136, 0.3); border-radius: 12px;">
          🔑 <?php echo $lang === 'en' ? 'Please <a href="/login" style="font-weight:bold; color:var(--primary); text-decoration: underline;">log in</a> to check tasks and sync modifications.' : ($lang === 'ro' ? 'Vă rugăm să vă <a href="/login" style="font-weight:bold; color:var(--primary); text-decoration: underline;">conectați</a> pentru a bifa sarcinile și a le salva.' : 'Connecte-toi à ton <a href="/login" style="font-weight:bold; color:var(--primary); text-decoration: underline;">espace personnel</a> pour pouvoir cocher les tâches et enregistrer les modifications.'); ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- Contrôles, Onglets et Statut -->
    <div class="planning-controls">
      <div class="planning-tabs" style="margin-bottom: 0 !important; border: none !important; box-shadow: none !important; padding: 0 !important; background: transparent !important;">
        <button class="planning-tab-btn active" onclick="switchTab('ewan')" id="tab-btn-ewan">
          <?php echo htmlspecialchars($txt_tab_ewan); ?>
        </button>
        <button class="planning-tab-btn" onclick="switchTab('florian')" id="tab-btn-florian">
          <?php echo htmlspecialchars($txt_tab_florian); ?>
        </button>
      </div>

      <!-- Bouton d'action de sauvegarde Cloud -->
      <button class="btn-save-planning" id="btn-save-planning" onclick="saveWeekToServer()">
        <?php echo htmlspecialchars($txt_save_btn); ?>
      </button>

      <!-- Statut de synchronisation -->
      <div class="sync-status" id="sync-status-indicator">
        <?php echo htmlspecialchars($txt_sync_online); ?>
      </div>
    </div>

    <!-- Progression -->
    <div class="progress-section">
      <div class="progress-info">
        <h4 id="progress-title">👦 Ewan</h4>
        <p><span id="completed-count">0</span> / <span id="total-count">0</span> <?php echo htmlspecialchars($txt_completed_tasks); ?></p>
      </div>
      <div class="progress-bar-container">
        <div class="progress-bar-fill" id="progress-fill"></div>
      </div>
      <div class="progress-percentage" id="progress-pct">0%</div>
    </div>

    <!-- Grille des Jours de la Semaine -->
    <div class="planning-grid" id="planning-container">
      <!-- Les cartes de jours seront injectées ici par Javascript -->
    </div>
  </main>
</div>

<script>
  // Jours de la semaine
  const daysOfWeek = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
  
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

  // Tâche commune
  const commonTask = "🎵 Mettre de la musique";

  // Libellés traduits
  const syncLabels = {
    online: <?php echo json_encode($txt_sync_online); ?>,
    pending: <?php echo json_encode($txt_sync_pending); ?>,
    saving: <?php echo json_encode($txt_sync_saving); ?>,
    error: <?php echo json_encode($txt_sync_error); ?>
  };

  // États
  const isLoggedIn = <?php echo $is_logged_in ? 'true' : 'false'; ?>;
  let currentActiveTab = "ewan";
  let weekDates = {};
  let tasksState = {};
  let hasUnsavedChanges = false;

  // Initialisation
  document.addEventListener("DOMContentLoaded", () => {
    calculateWeekDates();
    fetchPlanningState();
    
    // Alerte en cas de fermeture avec modifications non enregistrées
    window.addEventListener('beforeunload', (e) => {
      if (hasUnsavedChanges) {
        e.preventDefault();
        e.returnValue = ''; // Déclenche le prompt de confirmation standard du navigateur
      }
    });
  });

  // Calculer les dates de la semaine courante
  function calculateWeekDates() {
    const today = new Date();
    let dayOfWeek = today.getDay();
    dayOfWeek = dayOfWeek === 0 ? 6 : dayOfWeek - 1;
    
    const monday = new Date(today);
    monday.setDate(today.getDate() - dayOfWeek);
    
    daysOfWeek.forEach((day, index) => {
      const d = new Date(monday);
      d.setDate(monday.getDate() + index);
      
      const yyyy = d.getFullYear();
      const mm = String(d.getMonth() + 1).padStart(2, '0');
      const dd = String(d.getDate()).padStart(2, '0');
      
      weekDates[day] = `${yyyy}-${mm}-${dd}`;
    });

    const formattedStart = formatDateFr(new Date(monday));
    const sunday = new Date(monday);
    sunday.setDate(monday.getDate() + 6);
    const formattedEnd = formatDateFr(sunday);

    const weekRangeTemplate = <?php echo json_encode($txt_week_range); ?>;
    const weekText = weekRangeTemplate.replace("%s", formattedStart).replace("%s", formattedEnd);
    document.getElementById("week-indicator-text").innerText = weekText;
  }

  function formatDateFr(date) {
    const dd = String(date.getDate()).padStart(2, '0');
    const mm = String(date.getMonth() + 1).padStart(2, '0');
    return `${dd}/${mm}`;
  }

  // Mettre à jour visuellement l'état de synchronisation et le bouton
  function setSyncStatus(status) {
    if (!isLoggedIn) return; // Pas d'état de sync à gérer si non connecté
    
    const indicator = document.getElementById("sync-status-indicator");
    indicator.innerText = syncLabels[status] || syncLabels.online;
    
    const saveBtn = document.getElementById("btn-save-planning");

    if (status === 'pending') {
      indicator.style.color = '#b45309';
      indicator.style.borderColor = '#b45309';
      saveBtn.classList.add("active-unsaved");
    } else if (status === 'saving') {
      indicator.style.color = 'var(--primary)';
      indicator.style.borderColor = 'var(--primary)';
      saveBtn.classList.remove("active-unsaved");
    } else if (status === 'error') {
      indicator.style.color = '#ef4444';
      indicator.style.borderColor = '#ef4444';
      saveBtn.classList.add("active-unsaved"); // Permettre de retenter la sauvegarde
    } else {
      // online / saved
      indicator.style.color = 'var(--primary)';
      indicator.style.borderColor = 'var(--card-border)';
      saveBtn.classList.remove("active-unsaved");
    }
  }

  // Récupérer le planning de la semaine courante
  function fetchPlanningState() {
    if (isLoggedIn) {
      setSyncStatus('saving'); // Indicateur de chargement
    }
    
    const mondayDate = weekDates["Lundi"];
    const sundayDate = weekDates["Dimanche"];
    
    const url = `/api/planning-sync.php?start_date=${mondayDate}&end_date=${sundayDate}&t=${Date.now()}`;
    
    fetch(url)
      .then(response => {
        if (!response.ok) throw new Error("HTTP error " + response.status);
        return response.json();
      })
      .then(data => {
        if (data.success) {
          buildMergedState(data.tasks);
          hasUnsavedChanges = false;
          if (isLoggedIn) {
            setSyncStatus('online');
          }
          renderPlanning();
        } else {
          throw new Error(data.error || "Unknown server error");
        }
      })
      .catch(err => {
        console.error("Erreur de récupération BDD, utilisation de l'état vide par défaut", err);
        if (isLoggedIn) {
          setSyncStatus('error');
        }
        buildMergedState({});
        renderPlanning();
      });
  }

  // Fusionner
  function buildMergedState(dbData) {
    tasksState = {
      ewan: {},
      florian: {}
    };

    ["ewan", "florian"].forEach(person => {
      daysOfWeek.forEach(day => {
        tasksState[person][day] = [];
        const dateKey = weekDates[day];
        
        const dbTasks = (dbData[dateKey] && dbData[dateKey][person]) ? dbData[dateKey][person] : [];
        
        const specificDefaults = defaultTasks[person][day] || [];
        specificDefaults.forEach(taskText => {
          const dbMatch = dbTasks.find(t => t.text === taskText && !t.isCustom);
          tasksState[person][day].push({
            text: taskText,
            checked: dbMatch ? dbMatch.checked : false,
            isCustom: false,
            isCommon: false
          });
        });

        const dbCommonMatch = dbTasks.find(t => t.text === commonTask && !t.isCustom);
        tasksState[person][day].push({
          text: commonTask,
          checked: dbCommonMatch ? dbCommonMatch.checked : false,
          isCustom: false,
          isCommon: true
        });

        const dbCustomTasks = dbTasks.filter(t => t.isCustom);
        dbCustomTasks.forEach(dbCustom => {
          tasksState[person][day].push({
            text: dbCustom.text,
            checked: dbCustom.checked,
            isCustom: true,
            isCommon: false
          });
        });
      });
    });
  }

  // Obtenir le jour actuel
  function getFrenchDayName() {
    const days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    const d = new Date();
    return days[d.getDay()];
  }

  // Changer d'onglet (avec contrôle de changements non enregistrés)
  function switchTab(person) {
    if (person === currentActiveTab) return;
    
    if (isLoggedIn && hasUnsavedChanges) {
      const confirmTab = <?php echo json_encode($txt_confirm_tab_change); ?>;
      if (!confirm(confirmTab)) return;
    }
    
    currentActiveTab = person;
    hasUnsavedChanges = false;
    
    document.getElementById("tab-btn-ewan").classList.toggle("active", person === "ewan");
    document.getElementById("tab-btn-florian").classList.toggle("active", person === "florian");
    
    const titleText = person === "ewan" ? "👦 Ewan" : "👨 Florian";
    document.getElementById("progress-title").innerText = titleText;
    
    // Recharger l'état d'origine depuis le serveur
    fetchPlanningState();
  }

  // Rendre le planning
  function renderPlanning() {
    const container = document.getElementById("planning-container");
    container.innerHTML = "";
    
    const personData = tasksState[currentActiveTab];
    const frenchDayToday = getFrenchDayName();

    daysOfWeek.forEach(day => {
      const isToday = (day === frenchDayToday);
      const dayTasks = personData[day] || [];
      const dayDate = weekDates[day];
      
      const dayCard = document.createElement("div");
      dayCard.className = `day-card animate-task${isToday ? ' today' : ''}`;
      
      const rawDate = new Date(dayDate);
      const formattedDayDate = `${String(rawDate.getDate()).padStart(2, '0')}/${String(rawDate.getMonth() + 1).padStart(2, '0')}`;
      
      let headerHTML = `
        <div class="day-title">
          <span>${day}</span>
          ${isToday ? `<span class="today-badge"><?php echo htmlspecialchars($txt_today); ?></span>` : ''}
        </div>
        <div class="day-subtitle">${formattedDayDate}</div>
      `;
      
      dayCard.innerHTML = headerHTML;
      
      const ul = document.createElement("ul");
      ul.className = "task-list";
      
      dayTasks.forEach((task, index) => {
        const li = document.createElement("li");
        li.className = "task-item";
        li.setAttribute("onclick", `toggleTask('${day}', ${index}, event)`);
        
        let badgeHTML = "";
        if (task.isCommon) {
          badgeHTML = `<span class="task-badge badge-together"><?php echo htmlspecialchars($txt_badge_together); ?></span>`;
        } else if (task.isCustom) {
          badgeHTML = `<span class="task-badge badge-custom"><?php echo htmlspecialchars($txt_badge_custom); ?></span>`;
        }
        
        let deleteBtnHTML = "";
        if (task.isCustom) {
          deleteBtnHTML = `
            <button class="delete-task-btn" title="Supprimer" onclick="deleteCustomTask('${day}', ${index}, event)">
              🗑️
            </button>
          `;
        }

        li.innerHTML = `
          <div class="task-checkbox-wrapper">
            <input type="checkbox" class="task-checkbox" ${task.checked ? 'checked' : ''} readonly>
            <span class="custom-checkbox"></span>
          </div>
          <span class="task-text">${escapeHtml(task.text)}</span>
          ${badgeHTML}
          ${deleteBtnHTML}
        `;
        
        ul.appendChild(li);
      });
      
      dayCard.appendChild(ul);
      
      const addForm = document.createElement("form");
      addForm.className = "add-task-form";
      addForm.setAttribute("onsubmit", `addCustomTask('${day}', this, event)`);
      addForm.innerHTML = `
        <input type="text" class="add-task-input" placeholder="<?php echo htmlspecialchars($txt_add_placeholder); ?>" required autocomplete="off">
        <button type="submit" class="add-task-btn">+</button>
      `;
      
      dayCard.appendChild(addForm);
      container.appendChild(dayCard);
    });

    updateProgressBar();
  }

  // Notifier d'un changement local en attente
  function markAsUnsaved() {
    if (!isLoggedIn) return;
    
    hasUnsavedChanges = true;
    setSyncStatus('pending');
  }

  // Cocher localement
  function toggleTask(day, index, event) {
    if (!isLoggedIn) return; // Interdire l'action
    if (event.target.closest('.delete-task-btn')) return;
    
    const task = tasksState[currentActiveTab][day][index];
    if (!task) return;
    
    task.checked = !task.checked;
    
    const dayCards = document.querySelectorAll(".day-card");
    const dayIndex = daysOfWeek.indexOf(day);
    if (dayIndex !== -1) {
      const targetLi = dayCards[dayIndex].querySelectorAll(".task-list .task-item")[index];
      if (targetLi) {
        const checkbox = targetLi.querySelector(".task-checkbox");
        if (checkbox) checkbox.checked = task.checked;
      }
    }
    
    updateProgressBar();
    markAsUnsaved();
  }

  // Ajouter localement
  function addCustomTask(day, formElement, event) {
    event.preventDefault();
    if (!isLoggedIn) return; // Interdire
    
    const input = formElement.querySelector(".add-task-input");
    const text = input.value.trim();
    
    if (!text) return;
    
    tasksState[currentActiveTab][day].push({
      text: text,
      checked: false,
      isCustom: true,
      isCommon: false
    });
    
    input.value = "";
    renderPlanning();
    markAsUnsaved();
  }

  // Supprimer localement
  function deleteCustomTask(day, index, event) {
    event.stopPropagation();
    if (!isLoggedIn) return; // Interdire
    
    tasksState[currentActiveTab][day].splice(index, 1);
    renderPlanning();
    markAsUnsaved();
  }

  // Décocher localement toutes les tâches de la semaine
  function confirmResetAll() {
    if (!isLoggedIn) return; // Interdire
    
    const confirmMsg = <?php echo json_encode($txt_confirm_reset); ?>;
    if (confirm(confirmMsg)) {
      daysOfWeek.forEach(day => {
        tasksState[currentActiveTab][day].forEach(task => {
          task.checked = false;
        });
      });
      renderPlanning();
      markAsUnsaved();
    }
  }

  // Sauvegarder l'état de la semaine courante en BDD
  function saveWeekToServer() {
    if (!isLoggedIn) return;
    if (!hasUnsavedChanges) return;
    
    setSyncStatus('saving');
    
    const payload = {
      action: 'save_week',
      person: currentActiveTab,
      start_date: weekDates["Lundi"],
      end_date: weekDates["Dimanche"],
      weeks_data: {}
    };

    daysOfWeek.forEach(day => {
      const dateKey = weekDates[day];
      payload.weeks_data[dateKey] = tasksState[currentActiveTab][day].map(task => ({
        text: task.text,
        checked: task.checked,
        isCustom: task.isCustom
      }));
    });

    fetch('/api/planning-sync.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    })
    .then(res => {
      if (!res.ok) throw new Error("Sync failed");
      return res.json();
    })
    .then(data => {
      if (data.success) {
        hasUnsavedChanges = false;
        setSyncStatus('online');
      } else {
        throw new Error(data.error);
      }
    })
    .catch(err => {
      console.error("Erreur d'enregistrement global BDD", err);
      setSyncStatus('error');
    });
  }

  // Progression
  function updateProgressBar() {
    const personData = tasksState[currentActiveTab];
    let total = 0;
    let completed = 0;
    
    daysOfWeek.forEach(day => {
      const dayTasks = personData[day] || [];
      dayTasks.forEach(task => {
        total++;
        if (task.checked) completed++;
      });
    });

    document.getElementById("completed-count").innerText = completed;
    document.getElementById("total-count").innerText = total;
    
    const pct = total > 0 ? Math.round((completed / total) * 100) : 0;
    document.getElementById("progress-pct").innerText = `${pct}%`;
    document.getElementById("progress-fill").style.width = `${pct}%`;
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
