<?php
include_once __DIR__ . '/../includes/lang.php';

if ($lang === 'en') {
    $page_title = "Understanding & Managing the Dual Diagnosis: ADHD and ODD | deobarto";
    $page_description = "Synthesis and practical tools from testimonials and psychoeducational research on Oppositional Defiant Disorder.";
    $current_page = "synthese";
    $header_tag = "Synthesis Document";
    $header_title = "Understanding & Managing the Dual Diagnosis";
    $header_subtitle = "ADHD & ODD — Synthesis and practical tools from testimonials and psychoeducational research.";
    $footer_subtitle = "Educational synthesis document — Non-medical. Consult a health professional for any diagnosis.";
} elseif ($lang === 'ro') {
    $page_title = "Înțelegerea și Gestionarea Diagnosticului Dublu: TDAH și TOP | deobarto";
    $page_description = "Sinteză și instrumente practice din mărturii și cercetări psihoeducaționale privind Tulburarea de Opoziție și Provocare.";
    $current_page = "synthese";
    $header_tag = "Document de Sinteză";
    $header_title = "Înțelegerea și Gestionarea Diagnosticului Dublu";
    $header_subtitle = "TDAH și TOP — Sinteză și instrumente practice din mărturii și cercetări psihoeducaționale.";
    $footer_subtitle = "Document de sinteză educațională — Non-medical. Consultați un profesionist din domeniul sănătății pentru orice diagnostic.";
} else {
    $page_title = "Comprendre et Gérer le Double Défi : TDAH et TOP | deobarto";
    $page_description = "Synthèse et outils pratiques issus de témoignages et de la recherche psychoéducative sur le Trouble Oppositionnel avec Provocation.";
    $current_page = "synthese";
    $header_tag = "Document de Synthèse";
    $header_title = "Comprendre et Gérer le Double Défi";
    $header_subtitle = "TDAH & TOP — Synthèse et outils pratiques issus des témoignages et de la recherche psychoéducative.";
    $footer_subtitle = "Document de synthèse éducative — Non médical. Consultez un professionnel de santé pour tout diagnostic.";
}

include '../includes/head.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

  <!-- Layout Grid -->
  <div class="container no-sidebar" id="synthese-content">
    <main>

      <!-- Introduction -->
      <section id="intro">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Introduction</span>
          <h2><span>Overview of the synthesis</span></h2>
          <div class="intro-callout">
            Here is a complete synthesis of information from experience feedback and data extracted from TikTok videos of
            <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@mamandejumeaux_tdah (Vivi)</a>
            and
            <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@horizon_tdah</a>.
          </div>

          <div class="synthese-toc">
            <div class="synthese-toc-title">📋 Document content</div>
            <ul class="synthese-toc-list">
              <li><a href="#section-1">I. Understanding and Detecting ODD</a></li>
              <li><a href="#section-2">II. Source Video Analysis</a></li>
              <li><a href="#section-3">III. Practical Application in Daily Life</a></li>
            </ul>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Introducere</span>
          <h2><span>Prezentarea sintezei</span></h2>
          <div class="intro-callout">
            Iată o sinteză completă a informațiilor din recenziile de experiențe și datele extrase din videoclipurile TikTok ale
            <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@mamandejumeaux_tdah (Vivi)</a>
            și
            <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@horizon_tdah</a>.
          </div>

          <div class="synthese-toc">
            <div class="synthese-toc-title">📋 Conținutul documentului</div>
            <ul class="synthese-toc-list">
              <li><a href="#section-1">I. Înțelegerea și Detectarea TOP</a></li>
              <li><a href="#section-2">II. Analiza Videoclipurilor sursă</a></li>
              <li><a href="#section-3">III. Aplicare Practică în Viața de Zi cu Zi</a></li>
            </ul>
          </div>
        <?php else: ?>
          <span class="section-badge">Introduction</span>
          <h2><span>Présentation de la synthèse</span></h2>
          <div class="intro-callout">
            Voici une synthèse complète des informations issues des retours d'expériences et des données extraites des vidéos TikTok de
            <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@mamandejumeaux_tdah (Vivi)</a>
            et
            <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" style="color:var(--primary);font-weight:600;">@horizon_tdah</a>.
          </div>

          <div class="synthese-toc">
            <div class="synthese-toc-title">📋 Contenu du document</div>
            <ul class="synthese-toc-list">
              <li><a href="#section-1">I. Comprendre et Déceler le TOP</a></li>
              <li><a href="#section-2">II. Analyse des Vidéos sources</a></li>
              <li><a href="#section-3">III. Application Pratique au Quotidien</a></li>
            </ul>
          </div>
        <?php endif; ?>
      </section>

      <!-- Section I -->
      <section id="section-1" class="pdf-new-page">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Section I</span>
          <h2><span>Understanding and Detecting ODD</span></h2>

          <h3><span>🧠</span> What is ODD?</h3>
          <p>
            The acronym <strong>ODD</strong> stands for <strong>Oppositional Defiant Disorder</strong>. It is a behavioral disorder characterized by disobedience and an active, repeated, and intentional resistance to authority figures (parents, teachers), distinguishing itself from simple forgetfulness or distraction related to ADHD alone.
          </p>
          <div class="alert-box" style="background:rgba(13,148,136,0.05);border-color:rgba(13,148,136,0.3);">
            📊 It is estimated that <strong>40% to 70% of children with ADHD</strong> also develop ODD, which represents a major, often underdiagnosed co-morbidity.
          </div>

          <h3><span>🧠</span> ADHD alone: a disorder of implementation</h3>
          <p>
            Unlike ODD, where resistance is active and intentional, in <strong>ADHD alone</strong>, disobedience stems from a dysfunction of executive functions (the brain's conductor). Three cognitive processes fail:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Working memory:</strong> The short-term mental slate is erased along the way. The instruction is forgotten at the slightest intermediate stimulus or distraction.</li>
            <li><strong>Filtering of stimuli:</strong> Difficulty filtering out noise or useless visual elements. A toy on the floor or a bird at the window captures attention with the same priority as the parental instruction.</li>
            <li><strong>Activation and initiation:</strong> A colossal effort is required to plan and start a task. This delay in action is often mistaken for laziness or opposition.</li>
          </ul>
          <p>
            To adapt the environment and relieve working memory, it is recommended to <strong>get their gaze</strong> before giving <strong>one instruction at a time</strong>, ask the child for <strong>reformulation</strong>, and <strong>externalize their memory</strong> through checklists and visual supports. This de-dramatization helps restore the child's self-esteem and build a team with them against the disorder.
          </p>

          <h3><span>⚡</span> The ADHD + ODD duo: active opposition and the vicious cycle</h3>
          <p>
            When ADHD is accompanied by <strong>Oppositional Defiant Disorder (ODD)</strong>, behavior shifts from "I can't" to "I won't":
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Active resistance:</strong> The child understands the instruction but makes the deliberate decision to refuse to comply.</li>
            <li><strong>Defiance:</strong> Active search for confrontation to test the boundaries of parental authority and contest the legitimacy of constraints.</li>
            <li><strong>The vicious cycle:</strong> The accumulation of reproaches related to ADHD pushes the child to adopt opposition as a defensive shield (<em>"Since I am labeled as bad, I might as well act like it"</em>). Furthermore, the cognitive inhibition deficit causes instant explosive reactions in case of frustration.</li>
          </ul>
          <p>
            Adjusting posture facing ODD is based on the <strong>"brick wall"</strong> method (staying calm and totally impervious to provocations to break the confrontation), on <strong>picking your battles</strong> (focusing on 2 or 3 key rules related to safety and tolerating the rest), applying the <strong>illusion of choices</strong> technique (e.g., <em>"Do you prefer to brush your teeth before or after putting on your pajamas?"</em>), and using a <strong>targeted positive reinforcement</strong>, ignoring minor provocations to warmly celebrate cooperation.
          </p>

          <h3><span>🔍</span> Criteria and warning signs (DSM-5)</h3>
          <div class="matrix-grid">
            <div class="matrix-card">
              <h4>😡 Angry / irritable mood</h4>
              <p>Frequent loss of temper, extreme touchiness when facing daily constraints.</p>
            </div>
            <div class="matrix-card">
              <h4>🗣️ Argumentative / defiant behavior</h4>
              <p>Systematic challenge of rules, deliberate refusal to obey, tendency to deliberately annoy others, and systematic rejection of blame onto others.</p>
            </div>
            <div class="matrix-card">
              <h4>⚡ Vindictiveness</h4>
              <p>Spiteful or vindictive behavior facing frustration.</p>
            </div>
          </div>

          <h3><span>⚠️</span> Diagnostic vigilance</h3>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li>Behaviors must be <strong>present and intense for at least 6 months</strong> to trigger a clinical alert.</li>
            <li>Before the age of <strong>5 years</strong>, oppositional behavior is part of a child's normal development.</li>
            <li>A diagnosis can only be made by a <strong>specialized and multidisciplinary team</strong> to rule out other paths.</li>
          </ul>

          <h3><span>💡</span> Demystifying ODD (Debunking)</h3>
          <ul class="pretty-list">
            <li><strong>Education is not the cause:</strong> ODD is a mood regulation dysfunction. A rigid or harsh firmness worsens opposition by stimulating the child's defensive system.</li>
            <li><strong>Absence of calculated manipulation:</strong> It is an acute neurological intolerance to frustration and transitions. It is an impulsive reaction and not a malicious calculation.</li>
            <li><strong>Efficacy of medical treatment:</strong> Treating the underlying ADHD (medication) regulates dopamine, decreases impulsivity, and very clearly reduces ODD behaviors.</li>
            <li><strong>Positive long-term perspective:</strong> Symptoms decrease considerably in adolescence thanks to brain maturation and adapted guidance (Barkley method).</li>
          </ul>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Secțiunea I</span>
          <h2><span>Înțelegerea și Detectarea TOP</span></h2>

          <h3><span>🧠</span> Ce este TOP?</h3>
          <p>
            Acronimul <strong>TOP</strong> înseamnă <strong>Tulburarea de Opoziție și Provocare</strong>. Este o tulburare de comportament caracterizată prin nesupunere și o rezistență activă, repetată și intenționată în fața figurilor de autoritate (părinți, profesori), distingându-se de simplele uitări sau de distragerea legată de TDAH-ul simplu.
          </p>
          <div class="alert-box" style="background:rgba(13,148,136,0.05);border-color:rgba(13,148,136,0.3);">
            📊 Se estimează că <strong style="color:var(--primary);">40% până la 70% dintre copiii cu TDAH</strong> dezvoltă și TOP, ceea ce reprezintă o comorbiditate majoră, adesea subdiagnosticată.
          </div>

          <h3><span>🧠</span> TDAH simplu: o tulburare de implementare</h3>
          <p>
            Spre deosebire de TOP, unde rezistența este activă și intenționată, în cazul <strong>TDAH-ului simplu</strong>, nesupunerea provine dintr-o disfuncție a funcțiilor executive (dirijorul creierului). Trei procese cognitive eșuează:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Memoria de lucru:</strong> Tăblița mentală pe termen scurt se șterge pe parcurs. Instrucțiunea este uitată la cel mai mic stimul sau distragere.</li>
            <li><strong>Filtrarea stimulilor:</strong> Dificultate de a filtra zgomotele sau elementele vizuale inutile. O jucărie pe podea sau o pasăre la fereastră captează atenția cu aceeași prioritate ca și instrucțiunea părintească.</li>
            <li><strong>Activarea și inițierea:</strong> Un efort colosal este necesar pentru a planifica și porni o sarcină. Această întârziere la acțiune este adesea confundată cu lenea sau opoziția.</li>
          </ul>
          <p>
            Pentru a adapta mediul și a ușura memoria de lucru, se recomandă <strong>captarea privirii</strong> înainte de a enunța o <strong>singură instrucțiune pe rând</strong>, solicitarea <strong>reformulării</strong> de către copil și <strong>externalizarea memoriei</strong> prin liste și suporturi vizuale. Această eliminare a vinovăției ajută la restabilirea stimei de sine a copilului și la crearea unei echipe cu el împotriva tulburării.
          </p>

          <h3><span>⚡</span> Combinația TDAH + TOP: opoziția activă și cercul vicios</h3>
          <p>
            Când TDAH-ul este însoțit de o <strong>Tulburare de Opoziție și Provocare (TOP)</strong>, comportamentul trece de la „Nu pot” la „Nu vreau”:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>O rezistență activă:</strong> Copilul înțelege instrucțiunea, dar ia decizia deliberată de a refuza să se supună.</li>
            <li><strong>Provocarea:</strong> Căutarea activă a confruntării pentru a testa limitele autorității părintești și a contesta legitimitatea constrângerilor.</li>
            <li><strong>Cercul vicios:</strong> Acumularea de reproșuri legate de TDAH îl determină pe copil să adopte opoziția ca pe un scut defensiv (<em>„Dacă tot sunt etichetat ca rău, voi acționa ca atare”</em>). În plus, deficitul de inhibiție cognitivă provoacă reacții explozive instantanee în caz de frustrare.</li>
          </ul>
          <p>
            Ajustarea posturii în fața TOP se bazează pe metoda <strong>„zidului de cărămidă”</strong> (rămâneți calm și total impermeabil la provocări pentru a opri confruntarea), pe <strong>alegerea bătăliilor</strong> (concentrarea pe 2 sau 3 reguli cheie legate de siguranță și tolerarea restului), pe aplicarea tehnicii <strong>alegerilor iluzorii</strong> (ex: <em>„Preferi să te speli pe dinți înainte sau după ce îți pui pyjamaua?”</em>) și pe utilizarea unei <strong>întăriri pozitive țintite</strong>, ignorând provocările minore pentru a celebra masiv cooperarea.
          </p>

          <h3><span>🔍</span> Criteriile și semnele de alarmă (DSM-5)</h3>
          <div class="matrix-grid">
            <div class="matrix-card">
              <h4>😤 Dispoziție colerică / iritabilă</h4>
              <p>Pierderea frecventă a cumpătului, susceptibilitate extremă în fața contestațiilor zilnice.</p>
            </div>
            <div class="matrix-card">
              <h4>⚔️ Comportament argumentativ / provocator</h4>
              <p>Contestarea sistematică a regulilor, refuzul deliberat de a se supune, tendința de a agasa intenționat pe ceilalți și respingerea sistematică a vinei.</p>
            </div>
            <div class="matrix-card">
              <h4>🗡️ Spirit răzbunător</h4>
              <p>Comportamente răutăcioase sau ranchiunoase în fața frustrării.</p>
            </div>
          </div>

          <h3><span>⚠️</span> Vigilență diagnostică</h3>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li>Comportamentele trebuie să fie <strong>persistente și intense de cel puțin 6 luni</strong> pentru a declanșa o alarmă clinică.</li>
            <li>Înainte de vârsta de <strong>5 ani</strong>, comportamentele de opoziție fac parte din dezvoltarea normală a copilului.</li>
            <li>Un diagnostic poate fi pus doar de o <strong>echipă specializată și pluridisciplinară</strong> pentru a evita orice eroare.</li>
          </ul>

          <h3><span>💡</span> Demistificarea TOP (Debunking)</h3>
          <ul class="pretty-list">
            <li><strong>Educația nu este cauza:</strong> TOP este o disfuncție a reglării dispoziției. O fermitate rigidă sau severă agravează opoziția prin stimularea sistemului defensiv al copilului.</li>
            <li><strong>Absența manipulării calculate:</strong> Este vorba despre o intoleranță neurologică acută la frustrare și tranziții. Este o reacție impulsivă și nu un calcul rău intenționat.</li>
            <li><strong>Eficacitatea tratamentului medical:</strong> Tratarea TDAH-ului de bază (medicație) regulează dopamina, scade impulsivitatea și reduce clar comportamentele de TOP.</li>
            <li><strong>Perspectivă pozitivă pe termen lung:</strong> Simptomele se atenuează considerabil la adolescență datorită maturizării creierului și a unui ghidaj adaptat (tip Barkley).</li>
          </ul>
        <?php else: ?>
          <span class="section-badge">Section I</span>
          <h2><span>Comprendre et Déceler le TOP</span></h2>

          <h3><span>🧠</span> Qu'est-ce que le TOP ?</h3>
          <p>
            L'acronyme <strong>TOP</strong> signifie <strong>Trouble Oppositionnel avec Provocation</strong>. C'est un trouble du comportement caractérisé par une désobéissance et une résistance active, répétée et intentionnelle face aux physiques d'autorité (parents, enseignants), se distinguant des simples oublis ou de la distraction liés au TDAH seul.
          </p>
          <div class="alert-box" style="background:rgba(13,148,136,0.05);border-color:rgba(13,148,136,0.3);">
            📊 On estime que <strong>40 % à 70 % des enfants atteints de TDAH</strong> développent également un TOP, ce qui en fait une comorbidité majeure souvent sous-diagnostiquée.
          </div>

          <h3><span>🧠</span> Le TDAH seul : un trouble de la mise en œuvre</h3>
          <p>
            Contrairement au TOP où la résistance est active et intentionnelle, dans le <strong>TDAH seul</strong>, la désobéissance découle d'un dysfonctionnement des fonctions exécutives (le chef d'orchestre du cerveau). Trois processus cognitifs font défaut :
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>La mémoire de travail :</strong> L'ardoise mentale à court terme s'efface en cours de route. La consigne est oubliée au moindre stimulus ou distraction intermédiaire.</li>
            <li><strong>L'inhibition des stimuli :</strong> Difficulté à filtrer les bruits ou éléments visuels inutiles. Un jouet qui traîne ou un oiseau à la fenêtre capte l'attention avec la même priorité que la consigne parentale.</li>
            <li><strong>L'activation et l'initiation :</strong> Un effort colossal est requis pour planifier et démarrer une tâche. Ce retard à l'action est souvent mépris pour de la paresse ou de l'opposition.</li>
          </ul>
          <p>
            Pour adapter l'environnement et soulager la mémoire de travail, il convient de <strong>capter le regard</strong> avant d'énoncer une <strong>unique consigne à la fois</strong>, de faire <strong>reformuler</strong> l'enfant et d'<strong>externaliser sa mémoire</strong> via des checklists et supports visuels. Cette déculpabilisation permet de restaurer l'estime de soi de l'enfant et de faire équipe avec lui contre le trouble.
          </p>

          <h3><span>⚡</span> Le duo TDAH + TOP : l'opposition active et le cercle vicieux</h3>
          <p>
            Lorsque le TDAH s'accompagne d'un <strong>Trouble Oppositionnel avec Provocation (TOP)</strong>, le comportement bascule du "Je ne peux pas" au "Je ne veux pas" :
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Une résistance active :</strong> L'enfant comprend la consigne mais prend la décision délibérée de refuser de s'y soumettre.</li>
            <li><strong>La provocation :</strong> Recherche active de la confrontation pour tester les limites de l'autorité parentale et contester la légitimité des contraintes.</li>
            <li><strong>Le cercle vicieux :</strong> L'accumulation de reproches liés au TDAH pousse l'enfant à adopter l'opposition comme une armure défensive (<em>"Puisque je suis étiqueté comme mauvais, je vais agir comme tel"</em>). De plus, le déficit d'inhibition cognitive provoque des réactions explosives instantanées en cas de frustration.</li>
          </ul>
          <p>
            L'ajustement de la posture face au TOP repose sur la méthode du <strong>"mur de briques"</strong> (rester calme et totalement imperméable aux provocations pour casser l'affrontement), sur le fait de <strong>choisir ses batailles</strong> (se focaliser sur 2 ou 3 règles clés liées à la sécurité et tolérer le reste), d'appliquer la technique des <strong>choix illusoires</strong> (ex : <em>"Tu préfères te brosser les dents avant ou après avoir mis ton pyjama ?"</em>) et d'utiliser un <strong>renforcement positif ciblé</strong> en ignorant les provocations mineures pour célébrer massivement la coopération.
          </p>

          <h3><span>🔍</span> Les critères et signes d'alerte (DSM-5)</h3>
          <div class="matrix-grid">
            <div class="matrix-card">
              <h4>😡 Humeur colérique / irritable</h4>
              <p>Perte fréquente de sang-froid, susceptibilité extrême face aux contraintes du quotidien.</p>
            </div>
            <div class="matrix-card">
              <h4>🗣️ Comportement querelleur / provocateur</h4>
              <p>Contestation systématique des règles, refus délibéré d'obéir, tendance à agacer volontairement autrui et rejet systématique de la faute sur les autres.</p>
            </div>
            <div class="matrix-card">
              <h4>⚡ Esprit vindicatif</h4>
              <p>Comportements méchants ou rancuniers face à la frustration.</p>
            </div>
          </div>

          <h3><span>⚠️</span> Vigilance diagnostique</h3>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li>Les comportements doivent être <strong>présents et intenses depuis plus de 6 mois</strong> pour déclencher une alerte clinique.</li>
            <li>Avant l'âge de <strong>5 ans</strong>, les comportements d'opposition font partie du développement normal de l'enfant.</li>
            <li>Un diagnostic ne peut être posé que par une <strong>équipe spécialisée et pluridisciplinaire</strong> afin d'écarter d'autres pistes.</li>
          </ul>

          <h3><span>💡</span> Démystifier le TOP (Debunking)</h3>
          <ul class="pretty-list">
            <li><strong>L'education n'est pas la cause :</strong> Le TOP est un dysfonctionnement de la régulation de l'humeur. Une fermeté rigide ou sévère aggrave l'opposition en stimulant le système défensif de l'enfant.</li>
            <li><strong>Absence de manipulation calculée :</strong> Il s'agit d'une intolérance neurologique aiguë à la frustration et aux transitions. C'est une réaction impulsive et non un calcul malveillant.</li>
            <li><strong>Efficacité du traitement médical :</strong> Traiter le TDAH sous-jacent (médication) régule la dopamine, diminue l'impulsivité et estompe très nettement les comportements de TOP.</li>
            <li><strong>Perspective positive à long terme :</strong> Les symptômes s'atténuent considérablement à l'adolescence grâce à la maturation cérébrale et à une guidance adaptée (type Barkley).</li>
          </ul>
        <?php endif; ?>
      </section>

      <!-- Section II -->
      <section id="section-2" class="pdf-new-page">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Section II</span>
          <h2><span>Analysis of Sources and Testimonials</span></h2>

          <h3><span>📰</span> Article Review: <em>Mieux Vivre le TDAH</em></h3>
          <p>
            Critical analysis of their reference publication reveals important insights:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Strengths:</strong> Real parent destigmatization, clear distinction between ADHD (distraction) and ODD (active opposition), and a focus on behavioral solutions (Barkley).</li>
            <li><strong>Limits:</strong> Sometimes too linear presentation of ODD as an automatic consequence of ADHD (although it is a 40-60% co-morbidity) and lack of focus on other causes of opposition (ASD, PDA profile, anxiety).</li>
          </ul>

          <h3><span>🗣️</span> Comment Profiles (Forums and Networks)</h3>
          <p>
            Comment sections illustrate three major reaction profiles:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Parental distress ("Cry from the heart"):</strong> Extreme exhaustion and social isolation of parents in the face of general misunderstanding.</li>
            <li><strong>Social judgment ("Punitive approach"):</strong> Blaming comments advocating spanking or deprivation, ignoring the neurological nature of the disorder.</li>
            <li><strong>Relief from diagnosis:</strong> Parents relieved to learn that their child does not oppose them in a calculated way.</li>
          </ul>

          <h3><span>📱</span> Data from Source Videos</h3>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">
                @mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span>
              </a>
              <span class="tiktok-badge">Raw daily life of a mom</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Video 1: Raw daily life seen by a mom</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Deep relational impact:</strong> The disorder destroys family spontaneity. Parents report "walking on eggshells," constantly anticipating conflicts, and feeling heavy guilt facing their own exhaustion.</li>
              <li><strong>Emotional ambivalence:</strong> Daily life constantly swings between violent crises (chaos) and moments of laughter or connection.</li>
              <li><strong>A ray of hope:</strong> Testimonials in comments emphasize that a radical calming can occur in adolescence (around 15-16 years old), leading to a respectful, self-taught, and fulfilled adult life.</li>
            </ul>
          </div>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Psychoeducational Insight</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Video 2: Psychoeducational perspective</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Neurological origin:</strong> Crises are not a matter of "bad parenting." The disorder directly affects impulsivity and the reward system in the child's brain.</li>
              <li><strong>Lack of visibility:</strong> This is a major distress that is not talked about enough in family structures compared to ADHD alone.</li>
            </ul>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Secțiunea II</span>
          <h2><span>Analiza Surselor și Mărturiilor</span></h2>

          <h3><span>📰</span> Recenzia articolului: <em>Mieux Vivre le TDAH</em></h3>
          <p>
            Analiza critică a publicației lor de referință dezvăluie învățăminte importante:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Puncte forte:</strong> O adevărată destigmatizare a părinților, o distincție clară între TDAH (distragere) și TOP (opoziție activă) și un accent pe soluții comportamentale (Barkley).</li>
            <li><strong>Limite:</strong> Prezentare uneori prea liniară a TOP ca fatalitate sistematică a TDAH (deși este o comorbiditate de 40-60%) și lipsa de focus pe alte cauze de opoziție (TSA, profil PDA, anxietate).</li>
          </ul>

          <h3><span>🗣️</span> Profiluri de comentarii (Forumuri și Rețele)</h3>
          <p>
            Secțiunile de comentarii sub aceste articole sau videoclipuri ilustrează trei mari profiluri de reacții:
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Suferința parentală („Strigătul inimii”):</strong> Epuizarea extremă și izolarea socială a părinților în fața neînțelegerii generale.</li>
            <li><strong>Judecata socială („Abordarea punitivă”):</strong> Comentarii culpabilizatoare care susțin palma sau pedeapsa, ignorând natura neurologică a tulburării.</li>
            <li><strong>Ușurarea adusă de diagnostic:</strong> Părinți eliberați să afle că cel copil nu se opune <em>împotriva</em> lor în mod calculat.</li>
          </ul>

          <h3><span>📱</span> Date provenite din videoclipurile sursă</h3>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">
                @mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span>
              </a>
              <span class="tiktok-badge">Viața de zi cu zi brută a unei mame</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Video 1: Viața brută de zi cu zi văzută de o mamă</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Impactul relațional profund:</strong> Tulburarea distruge spontaneitatea familiei. Părinții relatează că „merg pe coji de ouă”, anticipează constant conflictele și simt o vinovăție grea în fața propriei epuizări.</li>
              <li><strong>Ambivalența emoțională:</strong> Viața de zi cu zi oscilează constant în mod simultan între crize violente (haos) și momente de râs sau complicitate.</li>
              <li><strong>O rază de speranță:</strong> Mărturiile din comentarii subliniază că o liniștire radicală poate surveni la adolescență (pe la 15-16 ani), ducând la o viață de adult respectuoasă, autodidactă și împlinită.</li>
            </ul>
          </div>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Perspectivă Psihoeducațională</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Video 2: Perspectiva psihoeducațională</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Origine neurologică:</strong> Crizele nu sunt o chestiune de „rea educație”. Tulburarea afectează direct impulsivitatea și sistemul de recompensă din creierul copilului.</li>
              <li><strong>Lipsa de vizibilitate:</strong> Este o suferință majoră despre care nu se vorbește destul în structurile familiale în comparație cu TDAH simplu.</li>
            </ul>
          </div>
        <?php else: ?>
          <span class="section-badge">Section II</span>
          <h2><span>Analyse des Sources et Témoignages</span></h2>

          <h3><span>📰</span> Critique d'article : <em>Mieux Vivre le TDAH</em></h3>
          <p>
            L'analyse critique de leur publication de référence révèle des enseignements importants :
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>Points forts :</strong> Une vraie déstigmatisation des parents, une distinction nette entre le TDAH (distraction) et le TOP (opposition active), et un focus sur les solutions comportementales (Barkley).</li>
            <li><strong>Limites :</strong> Présentation parfois trop linéaire du TOP comme fatalité automatique du TDAH (alors qu'il s'agit d'une comorbidité de 40 à 60 %) et manque de focus sur d'autres causes d'opposition (TSA, profil PDA, anxiété).</li>
          </ul>

          <h3><span>🗣️</span> Profils de commentaires (Forums et Réseaux)</h3>
          <p>
            Les sections de commentaires illustrent trois grands profils de réactions :
          </p>
          <ul class="pretty-list" style="margin-bottom: 1.5rem;">
            <li><strong>La détresse parentale (« Le cri du cœur ») :</strong> Épuisement extrême et isolement social des parents face à l'incompréhension générale.</li>
            <li><strong>Le jugement social (« L'approche punitive ») :</strong> Commentaires culpabilisateurs prônant la fessée ou la privation, ignorant la nature neurologique du trouble.</li>
            <li><strong>Le soulagement du diagnostic :</strong> Parents libérés d'apprendre que l'enfant ne s'oppose pas <em>contre</em> eux de manière calculée.</li>
          </ul>

          <h3><span>📱</span> Données issues des vidéos sources</h3>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">
                @mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span>
              </a>
              <span class="tiktok-badge">Quotidien brut de maman</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Vidéo 1 : Le quotidien brut vu par une maman</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>L'impact relationnel profond :</strong> Le trouble détruit la spontanéité familiale. Les parents rapportent « marcher sur des œufs », anticiper constamment les conflits et ressentir une lourde culpabilité face à leur propre épuisement ou frustration.</li>
              <li><strong>L'ambivalence émotionnelle :</strong> Le quotidien oscille constamment en simultané entre de violentes crises (le chaos) et des moments de rire ou de complicité.</li>
              <li><strong>Une lueur d'espoir :</strong> Les témoignages en commentaires soulignent qu'un apaisement radical peut survenir à l'adolescence (vers 15-16 ans), menant à une vie d'adulte respectueuse, autodidacte et épanouie.</li>
            </ul>
          </div>

          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Éclairage Psychoéducatif</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              <strong>Vidéo 2 : L'éclairage psychoéducatif</strong>
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Origine neurologique :</strong> Les crises ne sont pas une question de « mauvaise éducation ». Le trouble affecte directement l'impulsivité et le système de récompense dans le cerveau de l'enfant.</li>
              <li><strong>Manque de visibilité :</strong> C'est une détresse majeure dont on ne parle pas assez au sein des structures familiales par rapport au TDAH seul.</li>
            </ul>
          </div>
        <?php endif; ?>
      </section>

      <!-- Section III -->
      <section id="section-3" class="pdf-new-page">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Section III</span>
          <h2><span>Practical Application in Daily Life</span></h2>
          <p class="lead">
            To break the vicious cycle of opposition where "the more the child provokes, the more the parent gets angry":
          </p>

          <div class="synthese-tools-grid">

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">01</div>
              <div class="synthese-tool-body">
                <h4>⚡ Channeling Hyperfocus</h4>
                <p>When the child finds an activity they are 100% passionate about (sport, art, skill games like diabolo), they show remarkable focus and perseverance. Encouraging this "superpower" allows them to experience success and restore their self-esteem, which is often damaged at school.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">02</div>
              <div class="synthese-tool-body">
                <h4>✨ Targeted Positive Reinforcement</h4>
                <p>Actively ignoring minor provocations (sighs, grunts) and, conversely, over-valuing and warmly praising the child as soon as an interaction goes well or they cooperate.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">03</div>
              <div class="synthese-tool-body">
                <h4>💬 Adapting Communication During Fatigue Periods</h4>
                <p>At the end of the day, avoid open or intrusive questions (e.g., "How was your day?") which trigger anger. Prefer short instructions or <strong>closed and limited choices</strong> (e.g., "Do you prefer pasta with tomato or cream?") to give them a sense of control without overloading their emotions.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">04</div>
              <div class="synthese-tool-body">
                <h4>🏥 Surrounding Yourself and Joining Parental Guidance</h4>
                <p>It is essential to get support: first through your <strong>neuropediatrician or child psychiatrist</strong> for medical follow-up (ADHD treatment often reduces opposition, creating an ideal window for education). Then, join a <strong>PEHP (Barkley method)</strong> to modify family dynamics (active ignoring of minor provocations, positive reinforcement, restored connection). You can access this through <strong>CMP/CMPE</strong>, home interventions (<strong>SESSAD</strong>), or by contacting volunteers from the association <strong>HyperSupers TDAH France</strong> in your region.</p>
              </div>
            </div>

          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Secțiunea III</span>
          <h2><span>Aplicare Practică în Viața de Zi cu Zi</span></h2>
          <p class="lead">
            Pentru a rupe cercul vicios al opoziției unde „cu cât copilul provoacă, cu atât părintele se enervează”, pot fi aplicate mai multe instrumente concrete:
          </p>

          <div class="synthese-tools-grid">

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">01</div>
              <div class="synthese-tool-body">
                <h4>⚡ Canalizarea Hiperfocusului</h4>
                <p>Când copilul găsește o activitate care îl pasionează 100% (sport, artă, jocuri de îndemânare precum diabolo), el dă dovadă de o concentrare și o perseverență remarcabile. Încurajarea acestei „superputeri” îi permite să trăiască succese și să își restabilească stima de sine, adesea afectată la școală.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">02</div>
              <div class="synthese-tool-body">
                <h4>✨ Întărire Pozitivă Selectivă</h4>
                <p>Ignorarea activă a provocărilor minore (suspinuri, mormăieli) și, dimpotrivă, supra-valorizarea și lăudarea călduroasă a copilului de îndată ce o interacțiune decurge bine sau acceptă să colaboreze.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">03</div>
              <div class="synthese-tool-body">
                <h4>💬 Adaptarea Comunicării în Perioadele de Oboseală</h4>
                <p>La sfârșitul zilei, evitați întrebările deschise sau intrusive (ex: „Cum a fost ziua ta?”) care pot declanșa crize. Preferanți instrucțiunile scurte sau <strong>alegerile închise și limitate</strong> (ex: „Preferi paste cu roșii sau cu smântână?”) pentru a-i oferi un sentiment de control fără a-i supraîncărca emoțiile.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">04</div>
              <div class="synthese-tool-body">
                <h4>🏥 Sprijinul de specialitate și participarea la Ghidaj Parental</h4>
                <p>Este indispensabil să te înconjori de sprijin: mai întâi prin intermediul <strong>neuropediatrului sau pedopsihiatrului</strong> pentru monitorizarea medicală (tratamentul TDAH-ului reduce adesea opoziția, creând o fereastră ideală pentru educație). Apoi, integrați un <strong>PEHP (Metoda Barkley)</strong> pentru a modifica dinamica familială (ignorarea provocărilor minore, întărirea pozitivă, complicitatea regăsită). Puteți accesa aceste resurse prin <strong>CMP/CMPE</strong>, intervenții la domiciliu (<strong>SESSAD</strong>) sau contactând voluntarii asociației <strong>HyperSupers TDAH France</strong> din regiunea dumneavoastră.</p>
              </div>
            </div>

          </div>
        <?php else: ?>
          <span class="section-badge">Section III</span>
          <h2><span>Application Pratique au Quotidien</span></h2>
          <p class="lead">
            Pour rompre le cercle vicieux de l'opposition où « plus l'enfant provoque, plus le parent s'énerve » :
          </p>

          <div class="synthese-tools-grid">

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">01</div>
              <div class="synthese-tool-body">
                <h4>⚡ Canaliser l'Hyperfocus</h4>
                <p>Lorsque l'enfant trouve une activité qui le passionne à 100 % (sport, art, jeux d'adresse comme le diabolo), il fait preuve d'une concentration et d'une persévérance remarquables. Encourager ce « superpouvoir » lui permet de vivre des réussites et de restaurer son estime de soi, souvent abîmée à l'école.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">02</div>
              <div class="synthese-tool-body">
                <h4>✨ Renforcement Positif Sélectif</h4>
                <p>Ignorer activement les provocations mineures (soupirs, grognements) et, à l'inverse, sur-valoriser et féliciter chaleureusement l'enfant dès qu'un échange se déroule bien ou qu'il accepte de collaborer.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">03</div>
              <div class="synthese-tool-body">
                <h4>💬 Adapter la Communication en Période de Fatigue</h4>
                <p>En fin de journée, évitez les questions ouvertes ou intrusives (ex : « Comment s'est passée ta journée ? ») qui déclenchent les foudres. Privilégiez des consignes courtes ou des <strong>choix fermés et limités</strong> (ex : « Tu préfères des pâtes à la tomate ou à la crème ? ») afin de lui donner un sentiment de contrôle sans surcharger ses émotions.</p>
              </div>
            </div>

            <div class="synthese-tool-card">
              <div class="synthese-tool-num">04</div>
              <div class="synthese-tool-body">
                <h4>🏥 S'entourer et s'inscrire en Guidance Parentale</h4>
                <p>Il est indispensable de s'entourer : d'abord via son <strong>neuropédiatre ou pédopsychiatre</strong> pour le suivi médical (le traitement du TDAH réduit souvent l'opposition, créant une fenêtre idéale pour l'éducation). Ensuite, intégrez un <strong>PEHP (Méthode Barkley)</strong> pour modifier les dynamiques familiales (ignorance active des provocations mineures, renforcement positif, complicité retrouvée). Vous pouvez y accéder via les <strong>CMP/CMPE</strong>, les interventions à domicile (<strong>SESSAD</strong>) ou en contactant les bénévoles de l'association <strong>HyperSupers TDAH France</strong> de votre région.</p>
              </div>
            </div>

          </div>
        <?php endif; ?>
      </section>

      <!-- Sources -->
      <section id="sources" class="pdf-new-page" style="background:var(--bg-alt);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">References</span>
          <h2><span>Sources and resources</span></h2>
          <ul class="pretty-list">
            <li>Videos and testimonials of <strong>@mamandejumeaux_tdah</strong> (Vivi) — TikTok</li>
            <li>Vulgarization videos of <strong>@horizon_tdah</strong> — TikTok</li>
            <li><strong>DSM-5</strong> — Diagnostic and Statistical Manual of Mental Disorders, 5th edition (APA)</li>
            <li>Hammarrenger, B. — <em>L'opposition : Ces enfants qui vous en font voir de toutes les couleurs</em>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" style="margin-left:0.5rem; font-size:0.8rem; color:var(--primary);">View on Amazon ↗</a>
            </li>
            <li>Barkley, R. A. — <em>Parent Skills Training Program (PEHP)</em></li>
          </ul>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Referințe</span>
          <h2><span>Surse și resurse</span></h2>
          <ul class="pretty-list">
            <li>Videoclipuri și mărturii ale <strong>@mamandejumeaux_tdah</strong> (Vivi) — TikTok</li>
            <li>Videoclipuri de vulgarizare ale <strong>@horizon_tdah</strong> — TikTok</li>
            <li><strong>DSM-5</strong> — Diagnostic and Statistical Manual of Mental Disorders, ediția a 5-a (APA)</li>
            <li>Hammarrenger, B. — <em>Opoziția: Acei copii care te fac să vezi toate culorile</em>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" style="margin-left:0.5rem; font-size:0.8rem; color:var(--primary);">Vezi pe Amazon ↗</a>
            </li>
            <li>Barkley, R. A. — <em>Program de Antrenament al Abilităților Parentale (PEHP)</em></li>
          </ul>
        <?php else: ?>
          <span class="section-badge">Références</span>
          <h2><span>Sources et ressources</span></h2>
          <ul class="pretty-list">
            <li>Vidéos et témoignages de <strong>@mamandejumeaux_tdah</strong> (Vivi) — TikTok</li>
            <li>Vidéos de vulgarisation de <strong>@horizon_tdah</strong> — TikTok</li>
            <li><strong>DSM-5</strong> — Diagnostic and Statistical Manual of Mental Disorders, 5<sup>e</sup> édition (APA)</li>
            <li>Hammarrenger, B. — <em>L'opposition : Ces enfants qui vous en font voir de toutes les couleurs</em>
              <a href="https://www.amazon.fr/Lopposition-enfants-vous-toutes-couleurs-ebook/dp/B0CPZBT8PT/" target="_blank" rel="noopener noreferrer" style="margin-left:0.5rem; font-size:0.8rem; color:var(--primary);">Voir sur Amazon ↗</a>
            </li>
            <li>Barkley, R. A. — <em>Programme d'Entraînement aux Habiletés Parentales (PEHP)</em></li>
          </ul>
        <?php endif; ?>
      </section>

    </main>
  </div>

<?php
include '../includes/footer.php';
?>
