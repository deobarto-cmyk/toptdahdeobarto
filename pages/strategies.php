<?php
$page_title = "Fiches Stratégiques au Quotidien | deobarto";
$page_description = "Outils et stratégies concrètes de renforcement positif et de communication adaptée pour gérer le TOP au quotidien.";
$current_page = "strategies";
$header_tag = "Chapitre III : Outils pratiques";
$header_title = "Fiches Stratégiques au Quotidien";
$header_subtitle = "Techniques de communication et fiches d'action interactives à utiliser chaque jour.";
$footer_subtitle = "Chapitre III : Outils pratiques et fiches d'action.";

include '../includes/head.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

  <!-- Layout Grid -->
  <div class="container no-sidebar">

    <!-- Main Content -->
    <main>
      
      <section id="communication-rules">
        <span class="section-badge">Communication</span>
        <h2><span>Adapter sa communication</span></h2>
        <p class="lead">
          L'opposition est une réaction automatique face à la contrainte frontale. Reformuler ses demandes permet d'éviter les verrous de résistance.
        </p>

        <div class="comm-card">
          <div class="comm-item dont">
            <span class="comm-badge">A Éviter (Frontal)</span>
            <span>❌ « Va te brosser les dents maintenant. »</span>
          </div>
          <div class="comm-item do">
            <span class="comm-badge">A Privilégier (Choix Limité)</span>
            <span>💡 « Tu préfères te brosser les dents avant ou après avoir mis ton pyjama ? »</span>
          </div>
        </div>
        <p style="font-size:0.9rem; color:var(--text-muted); margin-top:0.5rem;">
          <em>Principe de l'illusion de contrôle :</em> Offrir deux alternatives valides pour le parent redonne un sentiment de maîtrise à l'enfant sans bloquer la consigne.
        </p>
      </section>

      <section id="worksheets-parentales">
        <span class="section-badge">Fiches d'action</span>
        <h2><span>Fiches Pratiques Interactives</span></h2>
        <p>Utilisez ces fiches comme des rappels au quotidien. Cochez les étapes validées. Vos coches sont sauvegardées automatiquement dans votre navigateur.</p>

        <!-- Worksheets Accordion -->
        <div class="worksheet-grid">
          
          <!-- Card 1 -->
          <div class="worksheet-card">
            <div class="worksheet-header" onclick="toggleWorksheet(this)">
              <div class="worksheet-title-group">
                <div class="worksheet-num">1</div>
                <h4>Mettre en place le renforcement positif sélectif</h4>
              </div>
              <span class="chevron-icon">▼</span>
            </div>
            <div class="worksheet-body">
              <p>Valoriser les attitudes de coopération permet d'augmenter leur fréquence tout en évitant d'alimenter les colères par de l'attention négative.</p>
              <ul class="worksheet-steps">
                <li><input type="checkbox"> <strong>Ignorer activement</strong> les provocations mineures (soupirs, grognements, regards en l'air, claquement de portes) tant que la tâche demandée est effectuée.</li>
                <li><input type="checkbox"> Valoriser immédiatement les coopérations et la gestion de frustration de manière chaleureuse.</li>
                <li><input type="checkbox"> Formuler des compliments précis décrivant l'action valorisée (ex: <em>« Merci d'avoir rangé tes chaussures du premier coup, c'est super. »</em>).</li>
              </ul>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="worksheet-card">
            <div class="worksheet-header" onclick="toggleWorksheet(this)">
              <div class="worksheet-title-group">
                <div class="worksheet-num">2</div>
                <h4>Gérer la communication en période de fatigue (Fin de journée)</h4>
              </div>
              <span class="chevron-icon">▼</span>
            </div>
            <div class="worksheet-body">
              <p>Au retour de l'école ou avant le coucher, l'inhibition neurologique de l'enfant est au plus bas. Simplifiez la charge cognitive.</p>
              <ul class="worksheet-steps">
                <li><input type="checkbox"> Éviter les questions ouvertes et complexes (ex: <em>« Comment s'est passée ta journée ? »</em> ou <em>« Qu'est-ce que tu veux faire ce soir ? »</em>).</li>
                <li><input type="checkbox"> Privilégier des phrases affirmatives, courtes et des consignes fermées et directes.</li>
                <li><input type="checkbox"> Utiliser des choix fermés limités à deux options (illusion de contrôle) pour les transitions délicates (douche, repas, coucher).</li>
              </ul>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="worksheet-card">
            <div class="worksheet-header" onclick="toggleWorksheet(this)">
              <div class="worksheet-title-group">
                <div class="worksheet-num">3</div>
                <h4>Canaliser son « Superpouvoir » : L'Hyperfocus</h4>
              </div>
              <span class="chevron-icon">▼</span>
            </div>
            <div class="worksheet-body">
              <p>L'hyperfocus permet à l'enfant TDAH/TOP de concentrer 100% de son énergie sur une passion. C'est un régulateur de tensions majeur.</p>
              <ul class="worksheet-steps">
                <li><input type="checkbox"> Identifier les activités de passion qui déclenchent cette concentration absolue (sport, art, diabolo, jeux de logique).</li>
                <li><input type="checkbox"> Sanctuariser dans l'emploi du temps des moments de pratique libre sans contrainte ou consigne.</li>
                <li><input type="checkbox"> Utiliser ces activités comme un canal de réussite pour restaurer son image de soi et calmer son système nerveux.</li>
              </ul>
            </div>
          </div>

        </div>
      </section>

    </main>
  </div>

<?php
include '../includes/footer.php';
?>
