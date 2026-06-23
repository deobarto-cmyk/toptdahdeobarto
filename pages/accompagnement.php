<?php
include_once __DIR__ . '/../includes/lang.php';

if ($lang === 'en') {
    $page_title = "Supporting ODD and ADHD: Barkley Method & CBT";
    $page_description = "Discover parental guidance through the Barkley method and CBT techniques to effectively support a child with ODD and ADHD.";
    $current_page = "accompagnement";
    $header_tag = "Chapter IV: Medical Support";
    $header_title = "Support & Parental Guidance";
    $header_subtitle = "Surrounding yourself with the right professionals, practicing the Barkley method, and analyzing daily situations.";
    $footer_subtitle = "Chapter IV: Medical and therapeutic support.";
} elseif ($lang === 'ro') {
    $page_title = "Sprijinirea TOP și TDAH: Metoda Barkley și TCC";
    $page_description = "Descoperă ghidarea parentală prin metoda Barkley și tehnici TCC pentru a sprijini eficient un copil cu TOP și TDAH.";
    $current_page = "accompagnement";
    $header_tag = "Capitolul IV: Sprijin Medical";
    $header_title = "Asistență și Ghidare Parentală";
    $header_subtitle = "Cum să vă înconjurați de profesioniștii potriviți, să practicați metoda Barkley și să analizați situațiile zilnice.";
    $footer_subtitle = "Capitolul IV: Sprijin medical și terapeutic.";
} else {
    $page_title = "Accompagner le TOP et le TDAH : Méthode Barkley & TCC";
    $page_description = "Découvre la guidance parentale avec la méthode Barkley et l'impact des TCC pour accompagner efficacement un enfant TDAH ou TOP.";
    $current_page = "accompagnement";
    $header_tag = "Chapitre IV : Accompagnement médical";
    $page_title = "Accompagner le TOP et le TDAH : Méthode Barkley & TCC";
    $header_title = "Prise en Charge & Guidance";
    $header_subtitle = "S'entourer des bons professionnels, pratiquer la méthode Barkley et analyser vos situations au quotidien.";
    $footer_subtitle = "Chapitre IV : Accompagnement médical et thérapeutique.";
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
        <span style="font-size: 1.5rem;">🩺</span>
        <div>
          <?php if ($lang === 'en'): ?>
            <strong>Therapeutic complement:</strong> The psychoeducational programs and tools presented on this page are based on international guidelines (Barkley, CBT) recommended by health authorities such as the **HAS** for the treatment of ADHD and conduct disorders.
          <?php elseif ($lang === 'ro'): ?>
            <strong>Complement terapeutic:</strong> Programele și instrumentele psihoeducaționale prezentate pe această pagină se bazează pe ghidurile internaționale (Barkley, TCC) recomandate de autoritățile de sănătate (precum **HAS**) pentru tratamentul TDAH și al tulburărilor de conduită.
          <?php else: ?>
            <strong>Complément thérapeutique :</strong> Les programmes et outils psychoéducatifs présentés sur cette page s'appuient sur les recommandations internationales (Barkley, TCC) validées par les autorités de santé (comme la **HAS**) dans la prise en charge du TDAH et des troubles du comportement.
          <?php endif; ?>
        </div>
      </div>
      
      <section id="professionnels-suivi">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Clinical Follow-up</span>
          <h2><span>Working with professionals</span></h2>
          <p class="lead">
            Oppositional Defiant Disorder is heavy to manage and generates major exhaustion among parents. Solid medical and therapeutic support is necessary.
          </p>

          <ul class="pretty-list">
            <li><strong>The neuropediatrician or child psychiatrist:</strong> These specialists establish the diagnosis and follow-up. If an effective medical treatment for the underlying ADHD is prescribed, it often helps <strong>strongly decrease ODD symptoms</strong>, opening a window of attention suitable for educational learning.</li>
            <li><strong>Parental Skills Training Program (PEHP):</strong> Parent training groups (such as the <strong>Barkley method</strong>) are recommended internationally. They teach parents scientifically validated methods to reorganize attention at home and defuse the vicious cycle of defiance.</li>
          </ul>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Monitorizare Clinică</span>
          <h2><span>Colaborarea cu profesioniștii</span></h2>
          <p class="lead">
            Tulburarea de Opoziție și Provocare este greu de gestionat și generează o epuizare majoră în rândul părinților. Este necesară o asistență medicală și terapeutică solidă.
          </p>

          <ul class="pretty-list">
            <li><strong>Neuropediatrul sau pedopsihiatrul:</strong> Acești specialiști stabilesc diagnosticul și monitorizarea. Dacă este prescris un tratament medical eficient pentru TDAH-ul de bază, acesta ajută adesea la <strong>diminuarea puternică a simptomelor de TOP</strong>, deschizând o fereastră de atenție propice învățării educative.</li>
            <li><strong>Programul de Antrenament al Abilităților Parentale (PEHP):</strong> Grupurile de formare pentru părinți (cum ar fi <strong>metoda Barkley</strong>) sunt recomandate la nivel internațional. Ele îi învață pe părinți metode validate științific pentru a reorganiza atenția acasă și a dezamorsa cercul vicios al provocării.</li>
          </ul>
        <?php else: ?>
          <span class="section-badge">Suivi Clinique</span>
          <h2><span>S'entourer des professionnels</span></h2>
          <p class="lead">
            Le Trouble Oppositionnel avec Provocation est lourd à gérer et génère un épuisement majeur chez les parents. Un accompagnement médical et thérapeutique solide est nécessaire.
          </p>

          <ul class="pretty-list">
            <li><strong>Le neuropédiatre ou pédopsychiatre :</strong> Ces spécialistes posent le diagnostic et mettent en place le suivi. Si un traitement médical pour le TDAH sous-jacent est prescrit et s'avère efficace, il permet souvent de <strong>diminuer fortement les symptômes du TOP</strong>, en ouvrant une fenêtre d'attention propice aux apprentissages éducatifs.</li>
            <li><strong>Le Programme d'Entraînement aux Habiletés Parentales (PEHP) :</strong> Les groupes de formation pour parents (comme la <strong>méthode Barkley</strong>) sont recommandés internationalement. Ils apprennent aux parents des méthodes scientifiquement validées pour réemployer l'attention à la maison et désamorcer le cercle vicieux de la provocation.</li>
          </ul>
        <?php endif; ?>
      </section>

      <!-- Section: Dispositifs d'Accompagnement -->
      <section id="dispositifs-guidance" style="border-top: 4px solid var(--primary);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge" style="color: var(--primary);">Existing support</span>
          <h2><span>🏫</span> Support & Parental Guidance</h2>
          <p class="lead">
            To cope with ADHD combined with ODD, it is essential to train in specific communication methods and rely on dedicated support structures.
          </p>

          <h3 style="margin-top: 2rem;">1. The Reference Program: The Barkley Method</h3>
          <p>
            <strong>Parent Training Programs (PEHP)</strong>, and more specifically the <strong>Barkley method</strong>, constitute the absolute international reference for supporting a child with ADHD + ODD. These workshops teach parents concretely to:
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔄 Reversing the dynamic</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Modify the structure of conflicts at home by withdrawing attention from oppositional behaviors.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>✨ Positive Reinforcement</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Implement a system of tokens and immediate rewards to actively value cooperation.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔇 Active Ignoring</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Learn to systematically ignore minor provocations (grunting, sighing) so as not to feed the crisis.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🤝 Reconnecting</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Plan exclusive moments of connection (without instructions or expectations) to restore the parent-child relationship.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. How to access these resources?</h3>
          <p>
            Several structures and health professionals provide access to this parental guidance:
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>The Association HyperSupers TDAH France (<a href="https://www.tdah-france.fr" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">tdah-france.fr</a>) :</strong> This is an essential starting point. The association informs, guides, and regularly co-organizes parent guidance groups throughout France. Free online self-training modules are also offered to members.</li>
            <li><strong>Hospital follow-up or CMP / CMPE:</strong> Child and adolescent psychiatry services in hospitals or Medico-Psychological Centers regularly organize these behavioral workshops in group sessions.</li>
            <li><strong>Home help structures (SESSAD):</strong> The intervention of a specialized educator through a SESSAD allows these strategies to be applied and adapted directly within your home.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. Why is it indispensable?</h3>
          <p>
            The child with ODD presents a neurological dysfunction in managing frustration and reward circuits: they are stuck in the present moment and have a hard time following direct instructions. Parental guidance helps you adapt your communication (through the illusion of control or ultra-short instructions) to bypass this rigidity without exhausting yourself.
          </p>

          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary);">
            <strong>💡 Essential medical complementarity:</strong> Parental guidance tools are all the more effective when coupled with medical support. If your child receives medical treatment for their ADHD, oppositional behaviors are often heavily reduced during the hours the treatment is active, which opens the <strong>ideal window</strong> to apply educational strategies.
          </div>

          <!-- Interactive Department Selector -->
          <div class="reflection-container" style="margin-top: 2.5rem; border-color: var(--accent);">
            <h3 style="color: var(--accent);"><span>📍</span> Find contacts and groups in my department</h3>
            <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem;">
              Select your department to identify your administrative region and get the direct link to volunteers and parental guidance groups of the association <strong>HyperSupers TDAH France</strong>.
            </p>
            
            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
              <div style="flex: 1; min-width: 250px; display: flex; flex-direction: column;">
                <input type="text" id="select-dept" class="form-control" oninput="updateDeptContact()" placeholder="Enter your department (e.g., 06, Paris, 75...)" style="width: 100%; padding: 0.75rem; border-radius: 8px; border: 1px solid var(--card-border); background: var(--bg-alt); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem;">
                <div id="custom-suggestions" class="suggestions-list"></div>
              </div>
            </div>

            <div id="dept-result-box" style="display: none; background: var(--bg-alt); border: 1px solid var(--card-border); padding: 1.25rem; border-radius: 10px; margin-top: 1rem; animation: slideDown 0.3s ease;">
              <h4 id="dept-title" style="margin: 0 0 0.5rem 0; font-family: var(--font-heading); color: var(--text-main); font-size: 1.1rem;"></h4>
              <p id="dept-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;"></p>
              <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1rem;">
                <a id="dept-link" href="#" target="_blank" rel="noopener noreferrer" class="btn-action primary" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                  <span>🌐</span> Region Contacts (HyperSupers)
                </a>
              </div>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge" style="color: var(--primary);">Dispozitive existente</span>
          <h2><span>🏫</span> Asistență & Ghidaj Parental</h2>
          <p class="lead">
            Pentru a face față TDAH-ului asociat cu TOP, este indispensabil să te formezi în metode specifice de comunicare și să te sprijini pe structuri de ajutor dedicate.
          </p>

          <h3 style="margin-top: 2rem;">1. Programul de Referință: Metoda Barkley</h3>
          <p>
            <strong>Programele de Antrenament al Abilităților Parentale (PEHP)</strong>, și în special <strong>metoda Barkley</strong>, reprezintă referința internațională absolută pentru însoțirea unui copil TDAH + TOP. Aceste ateliere îi învață concret pe părinți să:
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔄 Inversarea dinamicii</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Modificarea structurii conflictelor de acasă prin retragerea atenției de la comportamentele de opoziție.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>✨ Întărire Pozitivă</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Implementarea unui sistem de jetoane și recompense imediate pentru a valoriza activ cooperarea.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔇 Ignorare Activă</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Învățarea ignorării sistematice a provocărilor minore (mormăieli, suspine) pentru a nu alimenta criza.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🤝 Recrearea legăturii</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Planificarea unor momente exclusive de complicitate (fără instrucțiuni sau așteptări) pentru a restabili relația părinte-copil.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Cum să accesezi concret aceste resurse?</h3>
          <p>
            Mai multe structuri și profesioniști de sănătate permit accesul la acest ghidaj parental:
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>Asociația HyperSupers TDAH France (<a href="https://www.tdah-france.fr" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">tdah-france.fr</a>) :</strong> Este un punct de plecare esențial. Asociația informează, îndrumă și organizează regulat grupuri de sprijin parental în toată Franța. Module de auto-formare online gratuite sunt, de asemenea, oferite membrilor.</li>
            <li><strong>Monitorizarea spitalicească sau CMP / CMPE:</strong> Serviciile de psihiatrie pentru copii și adolescenți din spitale sau Centrele Medico-Psihologice organizează regulat aceste ateliere sub formă de ședințe de grup.</li>
            <li><strong>Structurile de ajutor la domiciliu (SESSAD):</strong> Intervenția unui educator specializat prin intermediul unui SESSAD permite aplicarea și adaptarea acestor strategii direct în cadrul căminului dumneavoastră.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. De ce este indispensabil?</h3>
          <p>
            Copilul cu TOP prezintă o disfuncție neurologică în gestionarea frustrării și a circuitelor de recompensă: este blocat în momentul prezent și ghidează foarte greu instrucțiunile directe. Ghidajul parental vă ajută să vă adaptați comunicarea (prin iluzia de control sau instrucțiuni ultra-scurte) pentru a ocoli această rigiditate fără a vă epuiza.
          </p>

          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary);">
            <strong>💡 Compatibilitate medicală esențială:</strong> Instrumentele de ghidaj parental sunt cu atât mai eficiente când sunt asociate cu asistența medicală. Dacă copilul dumneavoastră urmează un tratament medicamentos pentru TDAH, comportamentele de opoziție sunt adesea mult reduse în orele în care acționează tratamentul, ceea ce deschide <strong>fereastra ideală</strong> pentru aplicarea strategiilor educative.
          </div>

          <!-- Interactive Department Selector -->
          <div class="reflection-container" style="margin-top: 2.5rem; border-color: var(--accent);">
            <h3 style="color: var(--accent);"><span>📍</span> Găsește contacte și grupuri în departamentul meu</h3>
            <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem;">
              Selectează departamentul tău pentru a identifica regiunea administrativă și a obține linkul direct către voluntarii și grupurile de sprijin parental ale asociației <strong>HyperSupers TDAH France</strong>.
            </p>
            
            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
              <div style="flex: 1; min-width: 250px; display: flex; flex-direction: column;">
                <input type="text" id="select-dept" class="form-control" oninput="updateDeptContact()" placeholder="Introduceți departamentul (ex : 06, Paris, 75...)" style="width: 100%; padding: 0.75rem; border-radius: 8px; border: 1px solid var(--card-border); background: var(--bg-alt); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem;">
                <div id="custom-suggestions" class="suggestions-list"></div>
              </div>
            </div>

            <div id="dept-result-box" style="display: none; background: var(--bg-alt); border: 1px solid var(--card-border); padding: 1.25rem; border-radius: 10px; margin-top: 1rem; animation: slideDown 0.3s ease;">
              <h4 id="dept-title" style="margin: 0 0 0.5rem 0; font-family: var(--font-heading); color: var(--text-main); font-size: 1.1rem;"></h4>
              <p id="dept-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;"></p>
              <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1rem;">
                <a id="dept-link" href="#" target="_blank" rel="noopener noreferrer" class="btn-action primary" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                  <span>🌐</span> Contacte Regiune (HyperSupers)
                </a>
              </div>
            </div>
          </div>
        <?php else: ?>
          <span class="section-badge" style="color: var(--primary);">Dispositifs existants</span>
          <h2><span>🏫</span> Accompagnement & Guidance Parentale</h2>
          <p class="lead">
            Pour faire face au TDAH associé au TOP, il est indispensable de se former à des méthodes de communication spécifiques et de s'appuyer sur des structures d'aide dédiées.
          </p>

          <h3 style="margin-top: 2rem;">1. Le Programme de Référence : La Méthode Barkley</h3>
          <p>
            Les <strong>Programmes d'Entraînement aux Habiletés Parentales (PEHP)</strong>, et plus particulièrement la <strong>méthode Barkley</strong>, constituent la référence internationale absolue pour accompagner un enfant TDAH + TOP. Ces ateliers apprennent concrètement aux parents à :
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔄 Inverser la dynamique</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Modifier la structure des conflits à la maison en retirant l'attention sur les comportements d'opposition.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>✨ Renforcement Positif</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Mettre en place un système de jetons et de récompenses immédiates pour valoriser activement les comportements de coopération.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🔇 Ignorance Active</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Apprendre à ignorer de manière systématique les provocations mineures (grognements, soupirs) pour ne pas nourrir la crise.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🤝 Recréer du lien</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Planifier des moments exclusifs de complicité (sans consignes ni attentes) pour restaurer la relation parent-enfant.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Comment y accéder concrètement ?</h3>
          <p>
            Plusieurs structures et professionnels de santé permettent d'accéder à cette guidance parentale :
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>L'Association HyperSupers TDAH France (<a href="https://www.tdah-france.fr" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">tdah-france.fr</a>) :</strong> C'est un point de départ incontournable. L'association informe, oriente et co-organise régulièrement des groupes de guidance parentale partout en France (comme les sessions de pré-inscription pour le mois de juin 2026). Des modules d'auto-formation en ligne gratuits sont également proposés aux adhérents.</li>
            <li><strong>Le suivi hospitalier ou CMP / CMPE :</strong> Les services de psychiatrie infanto-juvénile (PIJ) des hôpitaux ou les Centres Médico-Psychologiques organisent régulièrement ces ateliers comportementaux sous forme de séances collectives.</li>
            <li><strong>Les structures d'aide à domicile (SESSAD) :</strong> L'intervention d'un éducateur spécialisé via un SESSAD (Service d'Éducation Spécialisée et de Soins à Domicile) permet d'appliquer et d'adapter ces stratégies directement au sein de votre domicile.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. Pourquoi c'est indispensable ?</h3>
          <p>
            L'enfant TOP présente un dysfonctionnement neurologique de la gestion de la frustration et des circuits de la récompense : il est bloqué dans l'instant présent et gère très mal les consignes directes. La guidance parentale vous aide à adapter votre communication (via l'illusion de contrôle ou des consignes ultra-courtes) pour contourner cette rigidité sans vous épuiser.
          </p>

          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary);">
            <strong>💡 Complémentarité médicale essentielle :</strong> Les outils de la guidance parentale sont d'autant plus efficaces lorsqu'ils sont couplés à une prise en charge médicale. Si votre enfant reçoit un traitement médicamenteux pour son TDAH, les comportements d'opposition sont souvent fortement réduits pendant les heures où la molécule fait effet, ce qui ouvre la <strong>fenêtre idéale</strong> pour appliquer vos stratégies éducatives et ancrer durablement la coopération.
          </div>

          <!-- Interactive Department Selector -->
          <div class="reflection-container" style="margin-top: 2.5rem; border-color: var(--accent);">
            <h3 style="color: var(--accent);"><span>📍</span> Trouver des contacts et groupes dans mon département</h3>
            <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem;">
              Sélectionnez votre département pour identifier votre région administrative et obtenir le lien direct vers les bénévoles et les groupes de guidance parentale de l'association <strong>HyperSupers TDAH France</strong>.
            </p>
            
            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
              <div style="flex: 1; min-width: 250px; display: flex; flex-direction: column;">
                <input type="text" id="select-dept" class="form-control" oninput="updateDeptContact()" placeholder="Saisissez votre département (ex : 06, Paris, 75...)" style="width: 100%; padding: 0.75rem; border-radius: 8px; border: 1px solid var(--card-border); background: var(--bg-alt); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem;">
                <div id="custom-suggestions" class="suggestions-list"></div>
              </div>
            </div>

            <div id="dept-result-box" style="display: none; background: var(--bg-alt); border: 1px solid var(--card-border); padding: 1.25rem; border-radius: 10px; margin-top: 1rem; animation: slideDown 0.3s ease;">
              <h4 id="dept-title" style="margin: 0 0 0.5rem 0; font-family: var(--font-heading); color: var(--text-main); font-size: 1.1rem;"></h4>
              <p id="dept-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;"></p>
              <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1rem;">
                <a id="dept-link" href="#" target="_blank" rel="noopener noreferrer" class="btn-action primary" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                  <span>🌐</span> Contacts Région (HyperSupers)
                </a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </section>

      <!-- Recommended Reading -->
      <section id="lecture-conseillee">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Literature</span>
          <h2><span>Recommended Reference Book</span></h2>
          <p>To deepen your understanding and decode your child's behavior, one book is particularly recognized:</p>
          
          <div class="book-card">
            <div class="book-icon">📖</div>
            <div class="book-details">
              <h4>L'opposition : Ces enfants qui vous en font voir de toutes les couleurs</h4>
              <div class="author">Benoît Hammarrenger, Ph.D. (Child Psychologist)</div>
              <p>
                This book allows you to look behind the "smokescreen" of defiance. It explains how to decode the true cause of opposition (anxiety, fatigue, sense of injustice) in order to act on the root of the problem rather than exhausting yourself dealing with symptoms.
              </p>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" class="btn-action secondary book-amazon-btn">
                <span>🛒</span> View on Amazon
              </a>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Literatură</span>
          <h2><span>Carte de referință recomandată</span></h2>
          <p>Pentru a vă aprofunda înțelegerea și a decoda comportamentele copilului dumneavoastră, o lucrare este în mod deosebit recunoscută:</p>
          
          <div class="book-card">
            <div class="book-icon">📖</div>
            <div class="book-details">
              <h4>Opoziția: Acei copii care te fac să vezi toate culorile</h4>
              <div class="author">Benoît Hammarrenger, Ph.D. (Pedopsiholog)</div>
              <p>
                Această carte vă permite să priviți dincolo de „ecranul de fum” al provocării. Ea explică cum să decodați adevărata cauză a opoziției (anxietate, oboseală, sentiment de nedreptate) pentru a acționa asupra rădăcinii problemei, mai degrabă decât să vă epuizați în fața simptomelor.
              </p>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" class="btn-action secondary book-amazon-btn">
                <span>🛒</span> Vezi pe Amazon
              </a>
            </div>
          </div>
        <?php else: ?>
          <span class="section-badge">Littérature</span>
          <h2><span>Livre de référence conseillé</span></h2>
          <p>Pour approfondir votre compréhension et décoder les comportements de votre enfant, un ouvrage est particulièrement reconnu :</p>
          
          <div class="book-card">
            <div class="book-icon">📖</div>
            <div class="book-details">
              <h4>L'opposition : Ces enfants qui vous en font voir de toutes les couleurs</h4>
              <div class="author">Benoît Hammarrenger, Ph.D. (Pédopsychologue)</div>
              <p>
                Ce livre permet de regarder derrière « l'écran de fumée » de la provocation. Il explique comment décoder la vraie cause de l'opposition (anxiété, fatigue, sentiment d'injustice) afin d'agir sur la racine du problème plutôt que de s'épuiser face au symptôme.
              </p>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" class="btn-action secondary book-amazon-btn">
                <span>🛒</span> Voir sur Amazon
              </a>
            </div>
          </div>
        <?php endif; ?>
      </section>

      <!-- Parent Reflection Journal -->
      <section id="carnet-reflection">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Reflection log</span>
          <h2><span>My Reflection Space</span></h2>
          <p>Writing down difficult moments helps to take a step back, identify repetitive patterns, and prepare for consultations with specialists.</p>

          <div class="reflection-container">
            <h3><span>📝</span> Log of Opposition Situations</h3>
            <form id="log-form" onsubmit="addLogEntry(event)" style="margin-top: 1.5rem;">
              <div class="form-grid">
                
                <div class="form-group">
                  <label for="log-demande"><strong>Type of request / instruction:</strong></label>
                  <select id="log-demande" class="form-control" required>
                    <option value="" disabled selected>Choose a request...</option>
                    <option value="Hygiène & Soins (brossage dents, bain, habillage)">🛁 Hygiene & Care (brushing teeth, bath...)</option>
                    <option value="Transitions & Écrans (arrêter un jeu, quitter la maison)">📱 Transitions & Screens (screens, leaving...)</option>
                    <option value="Tâches & Devoirs (devoirs, rangement chambre)">📚 Tasks & Homework (homework, cleaning...)</option>
                    <option value="Repas & Coucher (venir à table, aller au lit)">🛌 Meal & Bedtime (meal, bedtime...)</option>
                    <option value="Autre consigne">💬 Other instruction</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Intensity of opposition:</strong></label>
                  <div class="intensity-rating">
                    <label><input type="radio" name="intensity" value="1" required><span>1</span></label>
                    <label><input type="radio" name="intensity" value="2"><span>2</span></label>
                    <label><input type="radio" name="intensity" value="3"><span>3</span></label>
                    <label><input type="radio" name="intensity" value="4"><span>4</span></label>
                    <label><input type="radio" name="intensity" value="5"><span>5</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="log-strategie"><strong>Strategy applied:</strong></label>
                  <select id="log-strategie" class="form-control" required>
                    <option value="" disabled selected>Choose a strategy...</option>
                    <option value="Choix limité (illusion de contrôle)">💡 Limited choice (illusion of control)</option>
                    <option value="Renforcement positif (valoriser la coopération)">✨ Positive reinforcement</option>
                    <option value="Ignorer activement les comportements mineurs">🔇 Active ignoring</option>
                    <option value="Consigne claire, courte et visuelle">📢 Short & clear instruction</option>
                    <option value="Réaction spontanée (conflit / hausse de ton)">⚡ Spontaneous reaction / Raising voice</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Child's reaction (quick select):</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🗣️ Crie / Hurle"><span>🗣️ Screams / Yells</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🚫 Dit 'Non' fermement"><span>🚫 Says "No" firmly</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="⏳ Négocie / Argumente"><span>⏳ Negotiates / Argues</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🏃 Fuit / S'en va"><span>🏃 Runs away / Leaves</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🤫 Ignore / Boude"><span>🤫 Ignores / Pouts</span></label>
                  </div>
                </div>

                <!-- Contextual questionnaire -->
                <div class="form-group">
                  <label><strong>How did you feel?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="calme"><span>😌 Calm</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="frustre"><span>😤 Frustrated</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="depasse"><span>😰 Overwhelmed</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>Was the situation resolved?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_vite"><span>✅ Yes, quickly</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_long"><span>⏳ Yes, but with difficulty</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="non"><span>❌ No, persistent conflict</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>What was the context?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="retour_ecole"><span>🎒 School return</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="fatigue"><span>😴 Fatigue</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="faim"><span>🍽️ Hunger</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="transition"><span>🔄 Transition</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="autre"><span>💬 Other</span></label>
                  </div>
                </div>

              </div>

              <button type="submit" class="btn-action primary" style="margin-top: 1rem; width: 100%; justify-content: center;">
                📥 Record this situation
              </button>
            </form>

            <!-- Log entries list -->
            <div class="log-history-container" style="margin-top: 2.5rem;">
              <h4>📋 History of recorded situations</h4>
              <div id="log-history-list" class="log-history-list">
                <!-- Entries will be loaded here dynamically -->
              </div>
            </div>

          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Jurnal de bord</span>
          <h2><span>Spațiul Meu de Reflecție</span></h2>
          <p>Notarea în scris a momentelor dificile ajută la detașare, la identificarea tiparelor repetitive și la pregătirea consultărilor cu specialiștii.</p>

          <div class="reflection-container">
            <h3><span>📝</span> Jurnalul Situațiilor de Opoziție</h3>
            <form id="log-form" onsubmit="addLogEntry(event)" style="margin-top: 1.5rem;">
              <div class="form-grid">
                
                <div class="form-group">
                  <label for="log-demande"><strong>Tipul de cerere / instrucțiune :</strong></label>
                  <select id="log-demande" class="form-control" required>
                    <option value="" disabled selected>Alegeți o cerere...</option>
                    <option value="Hygiène & Soins (brossage dents, bain, habillage)">🛁 Igienă & Îngrijire (spălat pe dinți, baie...)</option>
                    <option value="Transitions & Écrans (arrêter un jeu, quitter la maison)">📱 Tranziții & Ecrane (ecrane, plecare...)</option>
                    <option value="Tâches & Devoirs (devoirs, rangement chambre)">📚 Sarcini & Teme (teme, curățenie...)</option>
                    <option value="Repas & Coucher (venir à table, aller au lit)">🛌 Masă & Culcare (masă, somn...)</option>
                    <option value="Autre consigne">💬 Altă instrucțiune</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Intensitatea opoziției :</strong></label>
                  <div class="intensity-rating">
                    <label><input type="radio" name="intensity" value="1" required><span>1</span></label>
                    <label><input type="radio" name="intensity" value="2"><span>2</span></label>
                    <label><input type="radio" name="intensity" value="3"><span>3</span></label>
                    <label><input type="radio" name="intensity" value="4"><span>4</span></label>
                    <label><input type="radio" name="intensity" value="5"><span>5</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="log-strategie"><strong>Strategia aplicată :</strong></label>
                  <select id="log-strategie" class="form-control" required>
                    <option value="" disabled selected>Alegeți o strategie...</option>
                    <option value="Choix limité (illusion de contrôle)">💡 Alegere limitată (iluzia controlului)</option>
                    <option value="Renforcement positif (valoriser la coopération)">✨ Întărire pozitivă</option>
                    <option value="Ignorer activement les comportements mineurs">🔇 Ignorare activă</option>
                    <option value="Consigne claire, courte et visuelle">📢 Instrucțiune scurtă & clară</option>
                    <option value="Réaction spontanée (conflit / hausse de ton)">⚡ Reacție spontană / Ridicarea vocii</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Reacția copilului (selecție rapidă) :</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🗣️ Crie / Hurle"><span>🗣️ Țipă / Urlă</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🚫 Dit 'Non' fermement"><span>🚫 Spune „Nu” ferm</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="⏳ Négocie / Argumente"><span>⏳ Negociază / Argumentează</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🏃 Fuit / S'en va"><span>🏃 Fuge / Pleacă</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🤫 Ignore / Boude"><span>🤫 Ignoră / Se supără</span></label>
                  </div>
                </div>

                <!-- Contextual questionnaire -->
                <div class="form-group">
                  <label><strong>Cum v-ați simțit ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="calme"><span>😌 Calm(ă)</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="frustre"><span>😤 Frustrat(ă)</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="depasse"><span>😰 Depășit(ă)</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>A fost rezolvată situația ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_vite"><span>✅ Da, rapid</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_long"><span>⏳ Da, dar cu dificultate</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="non"><span>❌ Nu, conflict persistent</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>Care a fost contextul ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="retour_ecole"><span>🎒 Întoarcere școală</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="fatigue"><span>😴 Oboseală</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="faim"><span>🍽️ Foame</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="transition"><span>🔄 Tranziție</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="autre"><span>💬 Altul</span></label>
                  </div>
                </div>

              </div>

              <button type="submit" class="btn-action primary" style="margin-top: 1rem; width: 100%; justify-content: center;">
                📥 Înregistrează această situație
              </button>
            </form>

            <!-- Log entries list -->
            <div class="log-history-container" style="margin-top: 2.5rem;">
              <h4>📋 Istoricul situațiilor înregistrate</h4>
              <div id="log-history-list" class="log-history-list">
                <!-- Entries will be loaded here dynamically -->
              </div>
            </div>

          </div>
        <?php else: ?>
          <span class="section-badge">Carnet de bord</span>
          <h2><span>Mon Espace de Réflexion</span></h2>
          <p>Le fait de noter par écrit les moments difficiles permet de prendre du recul, de repérer les schémas répétitifs et de préparer ses consultations avec les spécialistes.</p>

          <div class="reflection-container">
            <h3><span>📝</span> Log des Situations d'Opposition</h3>
            <form id="log-form" onsubmit="addLogEntry(event)" style="margin-top: 1.5rem;">
              <div class="form-grid">
                
                <div class="form-group">
                  <label for="log-demande"><strong>Type de demande / consigne :</strong></label>
                  <select id="log-demande" class="form-control" required>
                    <option value="" disabled selected>Choisir une demande...</option>
                    <option value="Hygiène & Soins (brossage dents, bain, habillage)">🛁 Hygiène & Soins (brossage dents, bain...)</option>
                    <option value="Transitions & Écrans (arrêter un jeu, quitter la maison)">📱 Transitions & Écrans (écrans, départ...)</option>
                    <option value="Tâches & Devoirs (devoirs, rangement chambre)">📚 Tâches & Devoirs (devoirs, rangement...)</option>
                    <option value="Repas & Coucher (venir à table, aller au lit)">🛌 Repas & Coucher (table, coucher...)</option>
                    <option value="Autre consigne">💬 Autre consigne</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Intensité de l'opposition :</strong></label>
                  <div class="intensity-rating">
                    <label><input type="radio" name="intensity" value="1" required><span>1</span></label>
                    <label><input type="radio" name="intensity" value="2"><span>2</span></label>
                    <label><input type="radio" name="intensity" value="3"><span>3</span></label>
                    <label><input type="radio" name="intensity" value="4"><span>4</span></label>
                    <label><input type="radio" name="intensity" value="5"><span>5</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="log-strategie"><strong>Stratégie appliquée :</strong></label>
                  <select id="log-strategie" class="form-control" required>
                    <option value="" disabled selected>Choisir une stratégie...</option>
                    <option value="Choix limité (illusion de contrôle)">💡 Choix limité (illusion de contrôle)</option>
                    <option value="Renforcement positif (valoriser la coopération)">✨ Renforcement positif</option>
                    <option value="Ignorer activement les comportements mineurs">🔇 Ignorer activement</option>
                    <option value="Consigne claire, courte et visuelle">📢 Consigne courte & claire</option>
                    <option value="Réaction spontanée (conflit / hausse de ton)">⚡ Réaction spontanée / Hausse de ton</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><strong>Réaction de l'enfant (sélection rapide) :</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🗣️ Crie / Hurle"><span>🗣️ Crie / Hurle</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🚫 Dit 'Non' fermement"><span>🚫 Dit 'Non' fermement</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="⏳ Négocie / Argumente"><span>⏳ Négocie / Argumente</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🏃 Fuit / S'en va"><span>🏃 Fuit / S'en va</span></label>
                    <label class="tag-checkbox"><input type="checkbox" name="reaction" value="🤫 Ignore / Boude"><span>🤫 Ignore / Boude</span></label>
                  </div>
                </div>

                <!-- Contextual questionnaire -->
                <div class="form-group">
                  <label><strong>Comment vous êtes-vous senti(e) ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="calme"><span>😌 Calme</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="frustre"><span>😤 Frustré(e)</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-parent" value="depasse"><span>😰 Dépassé(e)</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>La situation a-t-elle été résolue ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_vite"><span>✅ Oui, rapidement</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="oui_long"><span>⏳ Oui, mais difficilement</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-resolution" value="non"><span>❌ Non, conflit persistant</span></label>
                  </div>
                </div>

                <div class="form-group">
                  <label><strong>Quel était le contexte ?</strong></label>
                  <div class="reaction-tags">
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="retour_ecole"><span>🎒 Retour école</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="fatigue"><span>😴 Fatigue</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="faim"><span>🍽️ Faim</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="transition"><span>🔄 Transition</span></label>
                    <label class="tag-checkbox"><input type="radio" name="q-contexte" value="autre"><span>💬 Autre</span></label>
                  </div>
                </div>

              </div>

              <button type="submit" class="btn-action primary" style="margin-top: 1rem; width: 100%; justify-content: center;">
                📥 Enregistrer cette situation
              </button>
            </form>

            <!-- Log entries list -->
            <div class="log-history-container" style="margin-top: 2.5rem;">
              <h4>📋 Historique des situations enregistrées</h4>
              <div id="log-history-list" class="log-history-list">
                <!-- Entries will be loaded here dynamically -->
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
