<?php
include_once 'includes/lang.php';

if ($lang === 'en') {
    $page_title = "ODD & ADHD Support Portal | deobarto";
    $page_description = "Parental support portal for Oppositional Defiant Disorder (ODD) and ADHD. Psychoeducation tools and strategies.";
    $current_page = "index";
    $header_tag = "Psychoeducation Portal";
    $header_title = "ODD & ADHD: Supporting Guide";
    $header_subtitle = "A resource space to understand, decode, and defuse everyday conflicts.";
    $footer_subtitle = "Parental psychoeducation portal.";
} elseif ($lang === 'ro') {
    $page_title = "Portal de Suport TOP & TDAH | deobarto";
    $page_description = "Portal de suport parental pentru Tulburarea de Opoziție și Provocare (TOP) și TDAH. Instrumente de psihoeducație și strategii.";
    $current_page = "index";
    $header_tag = "Portal de Psihoeducație";
    $header_title = "TOP & TDAH: Ghid de Însoțire";
    $header_subtitle = "Un spațiu de resurse pentru a înțelege, decoda și dezamorsa conflictele de zi cu zi.";
    $footer_subtitle = "Portal de psihoeducație parentală.";
} else {
    $page_title = "Portail d'Accompagnement TOP & TDAH | deobarto";
    $page_description = "Portail d'accompagnement parental sur le Trouble Oppositionnel avec Provocation (TOP) et le TDAH. Outils de psychoéducation et stratégies.";
    $current_page = "index";
    $header_tag = "Portail de Psychoéducation";
    $header_title = "TOP & TDAH : Guide d'Accompagnement";
    $header_subtitle = "Un espace ressources pour comprendre, décoder et désamorcer les conflits au quotidien.";
    $footer_subtitle = "Portail de psychoéducation parentale.";
}

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
        <?php if ($lang === 'en'): ?>
          <strong>To all moms and dads:</strong> I can feel all your dedication and the love you have for your child. Wanting to "know everything" already means looking for the best keys to understand and comfort them, because behind a child who opposes, there is almost always a child in pain who struggles to manage their emotions. Living with a child who has ADHD and ODD is an immense challenge that requires extraordinary energy. Here is a complete guide structured in chapters to help you.
        <?php elseif ($lang === 'ro'): ?>
          <strong>Tuturor mămicilor și tăticilor:</strong> Îți simt întreaga implicare și iubirea pe care o porți fiului tău. A dori să «știi totul» înseamnă deja să cauți cele mai bune chei pentru a-l înțelege și a-l alina, deoarece în spatele unui copil care se opune există aproape întotdeauna un copil în suferință care își gestionează greu emoțiile. A trăi cu un copil cu TDAH și TOP este o provocare imensă care cere o energie ieșită din comun. Iată un ghid complet structurat în capitole pentru a vă ajuta.
        <?php else: ?>
          <strong>À tous les mamans et papas :</strong> Je ressens toute ton implication et l'amour que tu portes à ton fils. Vouloir « tout savoir », c'est déjà chercher les meilleures clés pour le comprendre et le soulager, car derrière un enfant qui s'oppose, il y a presque toujours un enfant en souffrance qui gère mal ses émotions. Vivre avec un enfant TDAH et TOP est un immense défi qui demande une énergie hors du commun. Voici un guide complet structuré en chapitres pour vous aider.
        <?php endif; ?>
      </div>

      <!-- Overview Section -->
      <section id="accueil-intro">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Overview</span>
          <h2><span>The intersection of ADHD and ODD</span></h2>
          <p>
            It is very common for a child with ADHD to also develop <strong>Oppositional Defiant Disorder (ODD)</strong>. It is estimated that <strong>40% to 70%</strong> of children with ADHD present this double diagnosis.
          </p>
          <p>
            Although these two disorders are neurologically linked, they translate into very different behaviors and daily needs.
          </p>

          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 4px solid var(--accent);">
              <h4><span>🧠</span> ADHD alone</h4>
              <p style="font-size:0.88rem; margin-bottom: 1rem;">
                The child does not listen due to <strong>forgetfulness</strong>, <strong>distraction</strong>, or <strong>impulsivity</strong>. They have the desire to obey but their attention deficit prevents them from following instructions.
              </p>
              <a href="definition#tdah-seul" class="portal-link">Learn more →</a>
            </div>
            
            <div class="matrix-card" style="border-top: 4px solid var(--primary);">
              <h4><span>⚡</span> ADHD + ODD</h4>
              <p style="font-size:0.88rem; margin-bottom: 1rem;">
                The child manifests an <strong>active, repeated, and intentional resistance</strong> to rules and authority figures. They deliberately seek to test boundaries.
              </p>
              <a href="definition#tdah-top" class="portal-link">Learn more →</a>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Prezentare generală</span>
          <h2><span>Intersecția dintre TDAH și TOP</span></h2>
          <p>
            Este foarte frecvent ca un copil cu TDAH să dezvolte și <strong>Tulburarea de Opoziție și Provocare (TOP)</strong>. Se estimează că <strong>40% până la 70%</strong> dintre copiii cu TDAH prezintă acest diagnostic dublu.
          </p>
          <p>
            Deși aceste două tulburări sunt legate din punct de vedere neurologic, ele se traduc în comportamente și nevoi zilnice foarte diferite.
          </p>

          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 4px solid var(--accent);">
              <h4><span>🧠</span> Doar TDAH</h4>
              <p style="font-size:0.88rem; margin-bottom: 1rem;">
                Copilul nu ascultă din cauza <strong>uitării</strong>, <strong>distragerii</strong> sau <strong>impulsivității</strong>. Are voința de a asculta, dar deficitul său de atenție îl împiedică să urmeze instrucțiunile.
              </p>
              <a href="definition#tdah-seul" class="portal-link">Află mai multe →</a>
            </div>
            
            <div class="matrix-card" style="border-top: 4px solid var(--primary);">
              <h4><span>⚡</span> TDAH + TOP</h4>
              <p style="font-size:0.88rem; margin-bottom: 1rem;">
                Copilul manifestă o <strong>rezistență activă, repetată și intenționată</strong> în fața regulilor și a figurilor de autoritate. Caută să testeze limitele în mod deliberat.
              </p>
              <a href="definition#tdah-top" class="portal-link">Află mai multe →</a>
            </div>
          </div>
        <?php else: ?>
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
        <?php endif; ?>
      </section>

      <!-- Dashboard / Portal Grid -->
      <section id="dashboard-menu">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Dashboard</span>
          <h2><span>Explore the chapters</span></h2>
          
          <div class="portal-grid">
            
            <!-- Card 1 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Understanding ODD</h3>
                <p>Discover clinical definitions (DSM-5), warning signs, neurological explanations, and diagnostic vigilance.</p>
              </div>
              <a href="definition" class="portal-link">Access chapter →</a>
            </div>

            <!-- Card 2 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Source Analysis</h3>
                <p>Clinical feedback and psychoeducational analysis from specialized creators on TikTok and future prospects.</p>
              </div>
              <a href="temoignages" class="portal-link">Access chapter →</a>
            </div>

            <!-- Card 3 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Strategy Sheets</h3>
                <p>Interactive practical tools for daily life: hyperfocus techniques, positive reinforcement, and modified communication.</p>
              </div>
              <a href="strategies" class="portal-link">Access chapter →</a>
            </div>

            <!-- Card 4 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Support & Guidance</h3>
                <p>Medical and therapeutic follow-up, Barkley method, recommended books, and parental reflection journal.</p>
              </div>
              <a href="accompagnement" class="portal-link">Access chapter →</a>
            </div>

            <!-- Card 5 : Synthesis -->
            <div class="portal-card" style="border-top: 3px solid var(--primary); grid-column: 1 / -1;">
              <div class="portal-card-body">
                <h3>📄 Complete Synthesis</h3>
                <p>Find all the condensed content in a structured document optimized for reading or printing: definitions, testimonials, practical tools, and sources.</p>
              </div>
              <a href="synthese" class="portal-link" style="font-size:1rem;">View synthesis →</a>
            </div>

          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Tablou de bord</span>
          <h2><span>Explorează capitolele</span></h2>
          
          <div class="portal-grid">
            
            <!-- Card 1 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Înțelegerea TOP</h3>
                <p>Descoperă definițiile clinice (DSM-5), semnele de alarmă, explicația neurologică și vigilența diagnostică.</p>
              </div>
              <a href="definition" class="portal-link">Accesează capitolul →</a>
            </div>

            <!-- Card 2 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Analiza Surselor</h3>
                <p>Mărturii clinice și analize psihoeducaționale de la creatori specializați pe TikTok și perspective de viitor.</p>
              </div>
              <a href="temoignages" class="portal-link">Accesează capitolul →</a>
            </div>

            <!-- Card 3 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Fișe Strategice</h3>
                <p>Instrumente practice interactive pentru viața de zi cu zi: tehnici de hyperfocus, întărire pozitivă și comunicare adaptată.</p>
              </div>
              <a href="strategies" class="portal-link">Accesează capitolul →</a>
            </div>

            <!-- Card 4 -->
            <div class="portal-card">
              <div class="portal-card-body">
                <h3>Asistență și Sprijin</h3>
                <p>Însoțire medicală și terapeutică, metoda Barkley, cărți recomandate și jurnalul de reflecție parentală.</p>
              </div>
              <a href="accompagnement" class="portal-link">Accesează capitolul →</a>
            </div>

            <!-- Card 5 : Sinteză -->
            <div class="portal-card" style="border-top: 3px solid var(--primary); grid-column: 1 / -1;">
              <div class="portal-card-body">
                <h3>📄 Sinteză completă</h3>
                <p>Găsește întreaga sinteză condensată într-un document structurat și optimizat pentru lectură sau imprimare: definiții, mărturii, instrumente practice și surse.</p>
              </div>
              <a href="synthese" class="portal-link" style="font-size:1rem;">Consultă sinteza →</a>
            </div>

          </div>
        <?php else: ?>
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
        <?php endif; ?>
      </section>

    </main>
  </div>

<?php
include 'includes/footer.php';
?>
