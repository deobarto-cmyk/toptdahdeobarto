<?php
$page_title = "Portail d'Accompagnement TOP & TDAH | deobarto";
$page_description = "Portail d'accompagnement parental sur le Trouble Oppositionnel avec Provocation (TOP) et le TDAH. Outils de psychoéducation et stratégies.";
$current_page = "index";
$header_tag = "Portail de Psychoéducation";
$header_title = "TOP & TDAH : Guide d'Accompagnement";
$header_subtitle = "Un espace ressources pour comprendre, décoder et désamorcer les conflits au quotidien.";
$footer_subtitle = "Portail de psychoéducation parentale.";

include 'includes/head.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

  <!-- Layout Grid -->
  <div class="container no-sidebar">

    <!-- Main Content -->
    <main>
      
      <!-- Empathetic Introduction Box -->
      <div class="intro-callout">
        <strong>À tous les mamans et papas :</strong> Je ressens toute ton implication et l'amour que tu portes à ton fils. Vouloir « tout savoir », c'est déjà chercher les meilleures clés pour le comprendre et le soulager, car derrière un enfant qui s'oppose, il y a presque toujours un enfant en souffrance qui gère mal ses émotions. Vivre avec un enfant TDAH et TOP est un immense défi qui demande une énergie hors du commun. Voici un guide complet structuré en chapitres pour vous aider.
      </div>

      <!-- Overview Section -->
      <section id="accueil-intro">
        <span class="section-badge">Vue d'ensemble</span>
        <h2><span>Le croisement du TDAH et du TOP</span></h2>
        <p>
          Il est très fréquent qu'un enfant ayant un TDAH développe également un <strong>Trouble Oppositionnel avec Provocation (TOP)</strong>. On estime que <strong>40 % à 70 %</strong> des enfants TDAH présentent ce double diagnostic. 
        </p>
        <p>
          Bien que ces deux troubles soient neurologiquement liés, ils se traduisent par des comportements et des besoins très différents au quotidien.
        </p>

        <div class="matrix-grid">
          <div class="matrix-card" style="border-top: 4px solid var(--accent);">
            <h4><span>🧠</span> TDAH seul</h4>
            <p style="font-size:0.88rem; margin-bottom: 1rem;">
              L'enfant n'écoute pas par <strong>oubli</strong>, <strong>distraction</strong> ou <strong>impulsivité</strong>. Il a la volonté d'obéir mais son déficit d'attention l'empêche de suivre les consignes.
            </p>
            <a href="definition#tdah-seul" class="portal-link">En savoir plus →</a>
          </div>
          
          <div class="matrix-card" style="border-top: 4px solid var(--primary);">
            <h4><span>⚡</span> TDAH + TOP</h4>
            <p style="font-size:0.88rem; margin-bottom: 1rem;">
              L'enfant manifeste une <strong>résistance active, répétée et intentionnelle</strong> face aux règles et aux figures d'autorité. Il cherche à tester les limites délibérément.
            </p>
            <a href="definition#tdah-top" class="portal-link">En savoir plus →</a>
          </div>
        </div>
      </section>

      <!-- Dashboard / Portal Grid -->
      <section id="dashboard-menu">
        <span class="section-badge">Tableau de bord</span>
        <h2><span>Explorer les chapitres</span></h2>
        
        <div class="portal-grid">
          
          <!-- Card 1 -->
          <div class="portal-card">
            <div class="portal-card-body">
              <h3>Comprendre le TOP</h3>
              <p>Découvrez les définitions cliniques (DSM-5), les signes d'alerte, l'explication neurologique et la vigilance diagnostique.</p>
            </div>
            <a href="definition" class="portal-link">Accéder au chapitre →</a>
          </div>

          <!-- Card 2 -->
          <div class="portal-card">
            <div class="portal-card-body">
              <h3>Analyse des Sources</h3>
              <p>Retours d'expérience cliniques et analyses psychoéducatives issus de créateurs spécialisés sur TikTok et perspectives d'avenir.</p>
            </div>
            <a href="temoignages" class="portal-link">Accéder au chapitre →</a>
          </div>

          <!-- Card 3 -->
          <div class="portal-card">
            <div class="portal-card-body">
              <h3>Fiches Stratégiques</h3>
              <p>Outils pratiques interactifs pour le quotidien : techniques d'hyperfocus, renforcement positif, et communication modifiée.</p>
            </div>
            <a href="strategies" class="portal-link">Accéder au chapitre →</a>
          </div>

          <!-- Card 4 -->
          <div class="portal-card">
            <div class="portal-card-body">
              <h3>Prise en Charge</h3>
              <p>Accompagnement médical et thérapeutique, méthode Barkley, livres recommandés et carnet de réflexion parentale.</p>
            </div>
            <a href="accompagnement" class="portal-link">Accéder au chapitre →</a>
          </div>

          <!-- Card 5 : Synthèse -->
          <div class="portal-card" style="border-top: 3px solid var(--primary); grid-column: 1 / -1;">
            <div class="portal-card-body">
              <h3>📄 Synthèse complète</h3>
              <p>Retrouvez l'ensemble du contenu condensé en un document structuré et optimisé pour la lecture ou l'impression : définitions, témoignages, outils pratiques et sources.</p>
            </div>
            <a href="synthese" class="portal-link" style="font-size:1rem;">Consulter la synthèse →</a>
          </div>

        </div>
      </section>

    </main>
  </div>

<?php
include 'includes/footer.php';
?>
