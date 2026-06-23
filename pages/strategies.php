<?php
include_once __DIR__ . '/../includes/lang.php';

if ($lang === 'en') {
    $page_title = "ADHD and ODD: 10 Practical Daily Strategies";
    $page_description = "Visual routines, limited choices, anger management: apply our psychoeducational strategies to defuse oppositional behaviors.";
    $current_page = "strategies";
    $header_tag = "Chapter III: Practical Tools";
    $header_title = "Strategy Sheets for Daily Life";
    $header_subtitle = "Communication techniques and interactive action sheets to use every day.";
    $footer_subtitle = "Chapter III: Practical tools and action sheets.";
} elseif ($lang === 'ro') {
    $page_title = "TDAH și TOP: 10 Strategii Practice pentru Viața de Zi cu Zi";
    $page_description = "Rutine vizuale, alegeri limitate, gestionarea furiei: aplică strategiile noastre psihoeducaționale pentru a dezamorsa opoziția.";
    $current_page = "strategies";
    $header_tag = "Capitolul III: Instrumente Practice";
    $header_title = "Fișe Strategice pentru Viața de Zi cu Zi";
    $header_subtitle = "Tehnici de comunicare și fișe de acțiune interactive de utilizat în fiecare zi.";
    $footer_subtitle = "Capitolul III: Instrumente practice și fișe de acțiune.";
} else {
    $page_title = "TDAH et TOP : 10 Stratégies Pratiques au Quotidien";
    $page_description = "Routines visuelles, choix illusoires, gestion des colères : applique nos stratégies psychoéducatives pour désamorcer l'opposition.";
    $current_page = "strategies";
    $header_tag = "Chapitre III : Outils pratiques";
    $header_title = "Fiches Stratégiques au Quotidien";
    $header_subtitle = "Techniques de communication et fiches d'action interactives à utiliser chaque jour.";
    $footer_subtitle = "Chapitre III : Outils pratiques et fiches d'action.";
}

include '../includes/head.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

  <!-- Layout Grid -->
  <div class="container no-sidebar">

    <!-- Main Content -->
    <main>
      
      <!-- E-E-A-T Reassurance Banner -->
      <div class="alert-box" style="margin-bottom: 2rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary); padding: 1rem; border-radius: 12px; font-size: 0.88rem; display: flex; align-items: center; gap: 0.75rem;">
        <span style="font-size: 1.5rem;">💡</span>
        <div>
          <?php if ($lang === 'en'): ?>
            <strong>Practical guidance:</strong> The behavioral tips and communication templates below are adapted from psychoeducational protocols used in occupational therapy and specialized parenting support.
          <?php elseif ($lang === 'ro'): ?>
            <strong>Îndrumare practică:</strong> Sfaturile comportamentale și șabloanele de comunicare de mai jos sunt adaptate din protocoalele psihoeducaționale utilizate în terapia ocupațională și sprijinul parental specializat.
          <?php else: ?>
            <strong>Conseils pratiques :</strong> Les conseils comportementaux et modèles de communication ci-dessous sont adaptés des protocoles psychoéducatifs appliqués en ergothérapie et en éducation spécialisée.
          <?php endif; ?>
        </div>
      </div>
      
      <section id="communication-rules">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Communication</span>
          <h2><span>Adapting communication</span></h2>
          <p class="lead">
            Opposition is an automatic reaction to direct constraint. Reformulating requests helps prevent resistance blocks.
          </p>

          <div class="comm-card">
            <div class="comm-item dont">
              <span class="comm-badge">To Avoid (Direct)</span>
              <span>❌ "Go brush your teeth now."</span>
            </div>
            <div class="comm-item do">
              <span class="comm-badge">To Prefer (Limited Choice)</span>
              <span>💡 "Do you prefer to brush your teeth before or after putting on your pajamas?"</span>
            </div>
          </div>
          <p style="font-size:0.9rem; color:var(--text-muted); margin-top:0.5rem;">
            <em>Principle of the illusion of control:</em> Offering two valid alternatives gives the child a sense of control without blocking the instruction.
          </p>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Comunicare</span>
          <h2><span>Adaptarea comunicării</span></h2>
          <p class="lead">
            Opoziția este o reacție automată în fața constrângerii directe. Reformularea cerințelor ajută la evitarea blocajelor de rezistență.
          </p>

          <div class="comm-card">
            <div class="comm-item dont">
              <span class="comm-badge">De Evitat (Direct)</span>
              <span>❌ « Du-te să te speli pe dinți acum. »</span>
            </div>
            <div class="comm-item do">
              <span class="comm-badge">De Preferat (Alegere Limitată)</span>
              <span>💡 « Preferi să te speli pe dinți înainte sau după ce îți pui pyjamaua? »</span>
            </div>
          </div>
          <p style="font-size:0.9rem; color:var(--text-muted); margin-top:0.5rem;">
            <em>Principiul iluziei de control :</em> Oferirea a două alternative valide pentru părinte îi redă copilului un sentiment de control, fără a bloca regula.
          </p>
        <?php else: ?>
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
        <?php endif; ?>
      </section>

      <section id="worksheets-parentales">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Action sheets</span>
          <h2><span>Interactive Practical Sheets</span></h2>
          <p>Use these sheets as daily reminders. Check the completed steps. Your checks are automatically saved in the browser.</p>

          <!-- Worksheets Accordion -->
          <div class="worksheet-grid">
            
            <!-- Card 1 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">1</div>
                  <h4>Implementing selective positive reinforcement</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>Valuing cooperative attitudes helps increase their frequency while avoiding feeding outbursts with negative attention.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> <strong>Actively ignore</strong> minor provocations (sighs, grunts, rolling eyes, slamming doors) as long as the requested task is performed.</li>
                  <li><input type="checkbox"> Immediately and warmly value cooperation and frustration management.</li>
                  <li><input type="checkbox"> Formulate specific praise describing the valued action (e.g., <em>"Thank you for putting away your shoes right away, that's great."</em>).</li>
                </ul>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">2</div>
                  <h4>Managing communication during fatigue periods (End of the day)</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>When returning from school or before bedtime, the child's neurological inhibition is at its lowest. Simplify the cognitive load.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> Avoid open and complex questions (e.g., <em>"How was your day?"</em> or <em>"What do you want to do tonight?"</em>).</li>
                  <li><input type="checkbox"> Prefer simple, short affirmative statements and closed, direct instructions.</li>
                  <li><input type="checkbox"> Use closed choices limited to two options (illusion of control) for delicate transitions (shower, meal, bedtime).</li>
                </ul>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">3</div>
                  <h4>Channeling their "Superpower": Hyperfocus</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>Hyperfocus allows a child with ADHD/ODD to concentrate 100% of their energy on a passion. It is a major tension regulator.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> Identify favorite activities that trigger this absolute focus (sport, art, diabolo, logic games).</li>
                  <li><input type="checkbox"> Set aside times in the schedule for free practice, without constraints or instructions.</li>
                  <li><input type="checkbox"> Use these activities as a path to success to restore self-esteem and calm the nervous system.</li>
                </ul>
              </div>
            </div>

          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Fișe de acțiune</span>
          <h2><span>Fișe Practice Interactive</span></h2>
          <p>Folosiți aceste fișe ca memento-uri zilnice. Bifați pașii realizați. Bifările voastre sunt salvate automat în browser.</p>

          <!-- Worksheets Accordion -->
          <div class="worksheet-grid">
            
            <!-- Card 1 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">1</div>
                  <h4>Implementarea întăririi pozitive selective</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>Valorizarea atitudinilor de cooperare ajută la creșterea frecvenței acestora, evitând în același timp alimentarea crizelor prin atenție negativă.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> <strong>Ignorarea activă</strong> a provocărilor minore (suspinuri, mormăieli, priviri în sus, trântirea ușilor) atât timp cât sarcina cerută este îndeplinită.</li>
                  <li><input type="checkbox"> Valorizarea imediată și călduroasă a cooperării și a gestionării frustrării.</li>
                  <li><input type="checkbox"> Formularea de laude specifice care descriu acțiunea valorizată (ex: <em>« Mulțumesc că ți-ai strâns încălțămintea din prima, este super. »</em>).</li>
                </ul>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">2</div>
                  <h4>Gestionarea comunicării în perioadele de oboseală (Sfârșitul zilei)</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>La întoarcerea de la școală sau înainte de culcare, inhibiția neurologică a copilului este la cel mai scăzut nivel. Simplificați sarcina cognitivă.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> Evitarea întrebărilor deschise și complexe (ex: <em>« Cum a fost ziua ta ? »</em> sau <em>« Ce vrei să facem deseară ? »</em>).</li>
                  <li><input type="checkbox"> Preferarea propozițiilor afirmative, scurte și a instrucțiunilor închise și directe.</li>
                  <li><input type="checkbox"> Utilizarea alegerilor închise limitate la două opțiuni (iluzia de control) pentru tranzițiile delicate (duș, masă, culcare).</li>
                </ul>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="worksheet-card">
              <div class="worksheet-header" onclick="toggleWorksheet(this)">
                <div class="worksheet-title-group">
                  <div class="worksheet-num">3</div>
                  <h4>Canalizarea „Superputerii” sale: Hiperfocusul</h4>
                </div>
                <span class="chevron-icon">▼</span>
              </div>
              <div class="worksheet-body">
                <p>Hiperfocusul permite copilului cu TDAH/TOP să își concentreze 100% din energie pe o pasiune. Este un regulator major de tensiune.</p>
                <ul class="worksheet-steps">
                  <li><input type="checkbox"> Identificarea activităților preferate care declanșează această concentrare absolută (sport, artă, diabolo, jocuri de logică).</li>
                  <li><input type="checkbox"> Stabilirea în program a unor momente de practică liberă, fără constrângeri sau instrucțiuni.</li>
                  <li><input type="checkbox"> Utilizarea acestor activități ca un canal de succes pentru a-și restabili imaginea de sine și a-și calma sistemul nervos.</li>
                </ul>
              </div>
            </div>

          </div>
        <?php else: ?>
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
        <?php endif; ?>
      </section>

    </main>
  </div>

<?php
include '../includes/footer.php';
?>
