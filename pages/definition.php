<?php
include_once __DIR__ . '/../includes/lang.php';

if ($lang === 'en') {
    $page_title = "Understanding ODD and ADHD: Criteria & Neurological Causes";
    $page_description = "Discover the clinical definitions of ODD and ADHD, official DSM-5 diagnostic criteria, and underlying neurological mechanisms. Learn more.";
    $current_page = "definition";
    $header_tag = "Chapter I: Clinical Definition";
    $header_title = "Understanding & Detecting ODD";
    $header_subtitle = "Decoding the neurological and behavioral mechanisms behind active resistance.";
    $footer_subtitle = "Chapter I: Clinical and scientific approach.";
} elseif ($lang === 'ro') {
    $page_title = "Înțelegerea TOP și TDAH: Criterii și Cauze Neurologice";
    $page_description = "Descoperă definițiile clinice ale TOP și TDAH, criteriile oficiale DSM-5 și mecanismele neurologice asociate. Află mai multe.";
    $current_page = "definition";
    $header_tag = "Capitolul I : Definiție Clinică";
    $header_title = "Înțelegerea și Detectarea TOP";
    $header_subtitle = "Decodarea mecanismelor neurologice și comportamentale din spatele rezistenței active.";
    $footer_subtitle = "Capitolul I : Abordare clinică și științifică.";
} else {
    $page_title = "Comprendre le TOP et le TDAH : Critères & Neurologie";
    $page_description = "Découvre la définition clinique du TOP et du TDAH, les critères officiels du DSM-5 et les mécanismes neurologiques associés. Fais le point.";
    $current_page = "definition";
    $header_tag = "Chapitre I : Définition Clinique";
    $header_title = "Comprendre et Déceler le TOP";
    $header_subtitle = "Décoder les mécanismes neurologiques et comportementaux derrière la résistance active.";
    $footer_subtitle = "Chapitre I : Approche clinique et scientifique.";
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
            <strong>Clinically validated content:</strong> This guide has been reviewed by a neuropsychologist specializing in neurodevelopmental disorders and conforms to the diagnostic criteria of the <strong>DSM-5</strong> and clinical guidelines.
          <?php elseif ($lang === 'ro'): ?>
            <strong>Conținut validat clinic:</strong> Acest ghid a fost revizuit de un neuropsiholog specializat în tulburări de neurodezvoltare și este în conformitate cu criteriile de diagnostic ale <strong>DSM-5</strong> și ghidurile clinice.
          <?php else: ?>
            <strong>Contenu validé cliniquement :</strong> Ce guide a été relu par un neuropsychologue spécialisé dans les troubles du neurodéveloppement et est conforme aux critères diagnostiques du <strong>DSM-5</strong> et aux recommandations cliniques.
          <?php endif; ?>
        </div>
      </div>
      
      <!-- Section I: Déceler le TOP -->
      <section id="definition-section">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Description</span>
          <h2><span>What is Oppositional Defiant Disorder (ODD)?</span></h2>
          <p class="lead">
            <strong>Oppositional Defiant Disorder</strong> (ODD) is a neurological disorder affecting emotional regulation and frustration tolerance. It is not a simple passing whim or a result of bad parenting.
          </p>
          
          <p>
            A child with ODD opposes rules <strong>actively, persistently, and intentionally</strong>. While in ADHD alone obedience fails through <em>forgetfulness</em>, <em>inattention</em>, or <em>distraction</em>, ODD induces a frontal and deliberate resistance to authority figures (parents, teachers).
          </p>

          <h3>Neurological Mechanism</h3>
          <p>
            The brain of a child with ODD presents functional particularities:
          </p>
          <ul class="pretty-list">
            <li><strong>Inhibition deficit:</strong> Immense difficulty stopping and thinking before acting or reacting.</li>
            <li><strong>Altered reward circuit:</strong> The child is insensitive to punishment or long-term rewards. They struggle to anticipate the consequences of their actions and live solely in the present.</li>
            <li><strong>Emotional self-regulation difficulty:</strong> Frustration triggers an immediate cognitive overload, making anger uncontrollable.</li>
          </ul>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Descriere</span>
          <h2><span>Ce este Tulburarea de Opoziție și Provocare (TOP)?</span></h2>
          <p class="lead">
            <strong>Tulburarea de Opoziție și Provocare</strong> (TOP) este o tulburare neurologică ce afectează reglarea emoțiilor și toleranța la frustrare. Nu este vorba de un simplu capriciu trecător sau de o educație precară.
          </p>
          
          <p>
            Copilul care prezintă TOP se opune în mod <strong>activ, persistent și intenționat</strong> regulilor. În timp ce în cazul TDAH-ului simplu obedierea eșuează prin <em>uitare</em>, <em>inatenție</em> sau <em>distragere</em>, TOP induce o rezistență frontală și deliberată în fața figurilor de autoritate (părinți, profesori).
          </p>

          <h3>Mecanismul Neurologic</h3>
          <p>
            Creierul copilului cu TOP prezintă particularități de funcționare:
          </p>
          <ul class="pretty-list">
            <li><strong>Deficit de inhibiție:</strong> O dificultate imensă de a se opri și de a gândi înainte de a acționa sau de a reacționa.</li>
            <li><strong>Alterarea circuitului recompensei:</strong> Copilul este puțin sensibil la pedepse sau la recompense pe termen lung. Îi este greu să anticipeze consecințele pe termen lung ale acțiunilor sale și trăiește exclusiv în prezent.</li>
            <li><strong>Dificultate de autoreglare emoțională:</strong> Frustrarea declanșează o supraîncărcare cognitivă imediată, făcând furia incontrolabilă.</li>
          </ul>
        <?php else: ?>
          <span class="section-badge">Description</span>
          <h2><span>Qu'est-ce que le Trouble Oppositionnel avec Provocation (TOP) ?</span></h2>
          <p class="lead">
            Le <strong>Trouble Oppositionnel avec Provocation</strong> (TOP) est un trouble neurologique affectant la régulation des émotions et la tolérance à la frustration. Il ne s'agit pas d'un simple caprice passager ou d'une mauvaise éducation.
          </p>
          
          <p>
            L'enfant qui présente un TOP s'oppose de manière <strong>active, de façon persistante et intentionnelle</strong> aux règles. Alors que dans le TDAH seul, l'obéissance fait défaut par <em>oubli</em>, <em>inattention</em> ou <em>distraction</em>, le TOP induit une résistance frontale et délibérée face aux figures d'autorité (parents, enseignants).
          </p>

          <h3>Le Mécanisme Neurologique</h3>
          <p>
            Le cerveau de l'enfant TOP présente des particularités de fonctionnement :
          </p>
          <ul class="pretty-list">
            <li><strong>Déficit de l'inhibition :</strong> Une immense difficulté à s'arrêter et à réfléchir avant de poser un acte ou de réagir.</li>
            <li><strong>Altération du circuit de la récompense :</strong> L'enfant est peu sensible aux punitions ou aux récompenses à long terme. Il a du mal à anticiper les conséquences de ses actes et vit uniquement dans l'immédiat.</li>
            <li><strong>Difficulté d'inhibition émotionnelle :</strong> La frustration déclenche une surcharge cognitive immédiate, rendant la colere incontrôlable.</li>
          </ul>
        <?php endif; ?>
      </section>

      <!-- Section II: TDAH Seul -->
      <section id="tdah-seul" style="border-top: 4px solid var(--accent);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge" style="color: var(--accent);">Executive deficit</span>
          <h2><span>🧠</span> ADHD alone: Understanding the executive deficit</h2>
          <p class="lead">
            When we understand that the problem lies in the implementation and not in the lack of goodwill, the approach changes radically.
          </p>

          <h3 style="margin-top: 2rem;">1. The Role of Executive Functions</h3>
          <p>
            ADHD is first and foremost a developmental disorder of executive functions (the brain's "conductor"). In daily situations, three cognitive processes fail despite the desire to obey:
          </p>
          
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">📓</span> Working memory</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                It is like a short-term mental slate. We give an instruction (<em>"Go get your shoes and your bag"</em>), but on the way, the slate is literally erased by another thought or distraction. The initial intention is lost.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🛡️</span> Stimuli filtering</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                A neurotypical brain knows how to filter out background noises or useless visual details. For a child with ADHD, a bird passing by the window or a toy on the floor has the same level of importance and priority as the instruction received.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🚀</span> Activation and initiation</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Even with the instruction in mind, moving to action ("starting") requires immense cognitive organization effort. This delay in starting is often confused with procrastination or laziness.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. How to Adapt Posture and the Environment?</h3>
          <p>
            Since the attention deficit prevents following classic instructions, we must modify the communication structure to support these failing executive functions:
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">👀</div>
              <div class="criteria-text">
                <h4>Get their gaze before speaking</h4>
                <p>Ensuring eye contact (or light physical contact, like a hand on the shoulder) helps "force" the activation of attention and ensures that the communication channel is open before transmitting information.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">1️⃣</div>
              <div class="criteria-text">
                <h4>One instruction at a time</h4>
                <p>Avoid complex lists of tasks (<em>"Do this, then that, and then think about..."</em>). Give a single simple instruction, and wait for it to be finished before moving to the next. This relieves working memory.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🗣️</div>
              <div class="criteria-text">
                <h4>Ask for reformulation</h4>
                <p>Ask gently: <em>"What did I just ask you to do?"</em>. This allows checking immediately if the information has been written on the mental slate or if it has already evaporated.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">📋</div>
              <div class="criteria-text">
                <h4>Externalize memory</h4>
                <p>Use visual supports (pictograms, checklists, whiteboards). This transfers the load from working memory to a fixed physical support that the child can consult at any time.</p>
              </div>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">3. The Impact of De-dramatization</h3>
          <p>
            The message of this approach is deeply therapeutic. When a child or adult hears repeatedly <em>"You never listen to me"</em>, <em>"You do it on purpose"</em>, or <em>"You don't make any effort"</em>, they end up internalizing the idea that they are "bad" or "incapable".
          </p>
          
          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(34, 197, 94, 0.05); border: 1px solid rgba(34, 197, 94, 0.2); border-left: 4px solid #22c55e;">
            <strong style="color: #22c55e;">🤝 Team up against the disorder:</strong> Validating that they want to do well but face a technical (cognitive) obstacle helps restore self-esteem. We no longer fight the child, we team up with them to find tips and strategies against ADHD.
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge" style="color: var(--accent);">Deficit de execuție</span>
          <h2><span>🧠</span> TDAH simplu: Înțelegerea deficitului de execuție</h2>
          <p class="lead">
            Când înțelegem că problema rezidă în implementare și nu în lipsa de bunăvoință, abordarea se schimbă radical.
          </p>

          <h3 style="margin-top: 2rem;">1. Rolul Funcțiilor Executive</h3>
          <p>
            TDAH este în primul rând o tulburare de dezvoltare a funcțiilor executive („dirijorul” creierului). În situațiile de zi cu zi, trei procese cognitive eșuează în ciuda dorinței copilului de a asculta:
          </p>
          
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;"> 📓</span> Memoria de lucru</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Este ca o tăbliță mentală pe termen scurt. Oferim o instrucțiune (<em>„Mergi și ia-ți pantofii și ghiozdanul”</em>), dar pe drum, tăblița este pur și simplu ștearsă de o altă gândire sau distragere. Intenția inițială este pierdută.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🛡️</span> Filtrarea stimulilor</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Un creier neurotipic știe să filtreze zgomotele de fundal. Pentru un copil cu TDAH, o pasăre care trece pe la fereastră sau o jucărie pe podea are același nivel de importanță și prioritate ca și instrucțiunea primită.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🚀</span> Activarea și inițierea</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Chiar și având instrucțiunea clară în minte, trecerea la acțiune (pornirea) cere un efort de organizare cognitivă imens. Această întârziere este adesea confundată cu procrastinarea sau lenea.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Cum să adaptăm postura și mediul înconjurător?</h3>
          <p>
            Deoarece deficitul de atenție împiedică urmarea instrucțiunilor clasice, trebuie să modificăm modul de comunicare pentru a susține aceste funcții executive:
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">👀</div>
              <div class="criteria-text">
                <h4>Căutarea privirii înainte de a vorbi</h4>
                <p>Asigurarea unui contact vizual (sau fizic ușor, cum ar fi o mână pe umăr) ajută la stabilirea conexiunii și garantează că canalul de comunicare este deschis.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">1️⃣</div>
              <div class="criteria-text">
                <h4>O singură instrucțiune pe rând</h4>
                <p>Evită listele de sarcini complexe (<em>„Fă asta, apoi cealaltă și după aceea nu uita să...”</em>). Oferă o singură instrucțiune simplă și așteaptă finalizarea ei înainte de a continua.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🗣️</div>
              <div class="criteria-text">
                <h4>Solicitarea reformulării</h4>
                <p>Întreabă cu blândețe: <em>„Ce te-am rugat să faci acum?”</em>. Aceasta permite verificarea imediată dacă informația a fost stocată sau s-a evaporat deja.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">📋</div>
              <div class="criteria-text">
                <h4>Externalizarea memoriei</h4>
                <p>Folosește suporturi vizuale (pictograme, liste, organizatoare). Acest lucru preia sarcina memoriei de lucru și o transferă pe un suport fizic pe care copilul îl poate consulta oricând.</p>
              </div>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">3. Impactul eliminării vinovăției</h3>
          <p>
            Mesajul acestei abordări este profund terapeutic. Când un copil aude des <em>„Nu mă asculți niciodată”</em>, el ajunge să creadă că este „rău” sau „incapabil”.
          </p>
          
          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(34, 197, 94, 0.05); border: 1px solid rgba(34, 197, 94, 0.2); border-left: 4px solid #22c55e;">
            <strong style="color: #22c55e;">🤝 Facem echipă în fața tulburării:</strong> Validarea faptului că își dorește să facă bine, dar se confruntă cu un obstacol cognitiv, ajută la restabilirea stimei de sine. Nu ne mai luptăm cu copilul, ci facem echipă cu el împotriva simptomelor de TDAH.
          </div>
        <?php else: ?>
          <span class="section-badge" style="color: var(--accent);">Déficit d'exécution</span>
          <h2><span>🧠</span> Le TDAH seul : Comprendre le déficit d'exécution</h2>
          <p class="lead">
            Quand on comprend que le problem réside dans la mise en œuvre et non dans la bonne volonté, l'approche change radicalement.
          </p>

          <h3 style="margin-top: 2rem;">1. Le rôle des Fonctions Exécutives</h3>
          <p>
            Le TDAH est avant tout un trouble du développement des fonctions exécutives (le "chef d'orchestre" du cerveau). Dans les situations quotidiennes, trois processus cognitifs flanchent malgré la volonté d'obéir :
          </p>
          
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">📓</span> Mémoire de travail</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                C'est l'ardoise mentale à court terme. On donne une consigne (<em>"Va chercher tes chaussures et ton sac"</em>), mais en chemin, l'ardoise est littéralement effacée par une autre pensée ou une distraction. L'intention de départ est perdue.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🛡️</span> Inhibition des stimuli</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Un cerveau neurotypique sait filtrer les bruits de fond ou les détails visuels inutiles. Pour un enfant avec un TDAH, un oiseau qui passe par la fenêtre ou un jouet qui traîne a le même niveau d'importance et de priorité que la consigne reçue.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span style="font-size: 1.3rem; margin-right: 0.5rem;">🚀</span> Activation et initiation</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Même en ayant la consigne en tête, le passage à l'action (le "démarrage") demande un effort d'organisation cognitive immense. Ce retard au démarrage est souvent confondu avec de la procrastination ou de la paresse.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Comment adapter la posture et l'environnement ?</h3>
          <p>
            Puisque le déficit d'attention empêche de suivre les consignes classiques, il faut modifier la structure de la communication pour soutenir ces fonctions exécutives défaillantes :
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">👀</div>
              <div class="criteria-text">
                <h4>Capter le regard avant de parler</h4>
                <p>S'assurer d'un contact visuel (ou physique léger, comme une main sur l'épaule) permet de "forcer" l'activation de l'attention et de s'assurer que le canal de communication est ouvert avant de transmettre l'information.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">1️⃣</div>
              <div class="criteria-text">
                <h4>Une seule consigne à la fois</h4>
                <p>Éviter les listes de tâches complexes (<em>"Fais ceci, puis cela, et après pense à..."</em>). Donnez une seule instruction simple, et attendez qu'elle soit finie avant de passer à la suivante. Cela soulage la mémoire de travail.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🗣️</div>
              <div class="criteria-text">
                <h4>Faire reformuler</h4>
                <p>Demander gentiment : <em>"Qu'est-ce que je viens de te demander ?"</em>. Cela permet de vérifier immédiatement si l'information a été imprimée sur l'ardoise mentale ou si elle s'est déjà évaporée.</p>
              </div>
            </div>
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">📋</div>
              <div class="criteria-text">
                <h4>Externaliser la mémoire</h4>
                <p>Utiliser des supports visuels (pictogrammes, listes à cocher, checklists sur un tableau blanc). Cela transfère la charge de la mémoire de travail sur un support physique fixe que l'enfant peut consulter à tout moment.</p>
              </div>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">3. L'impact de la déculpabilisation</h3>
          <p>
            Le message de cette approche est profondément thérapeutique. Lorsqu'un enfant ou un adulte s'entend répéter <em>"Tu ne m'écoutes jamais"</em>, <em>"Tu le fais exprès"</em> ou <em>"Tu n'as aucun effort à faire"</em>, il finit par internaliser l'idée qu'il est "mauvais" ou "incapable".
          </p>
          
          <div class="alert-box" style="margin-top: 1.5rem; background: rgba(34, 197, 94, 0.05); border: 1px solid rgba(34, 197, 94, 0.2); border-left: 4px solid #22c55e;">
            <strong style="color: #22c55e;">🤝 Faire équipe face au trouble :</strong> Valider le fait qu'il veut bien faire mais qu'il fait face à un obstacle technique (cognitif) permet de restaurer l'estime de soi. On ne combat plus l'enfant, on fait équipe avec lui pour trouver des astuces et des stratégies contre le TDAH.
          </div>
        <?php endif; ?>
      </section>

      <!-- Section III: TDAH + TOP -->
      <section id="tdah-top" style="border-top: 4px solid var(--primary);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge" style="color: var(--primary);">Dual diagnosis</span>
          <h2><span>⚡</span> ADHD + ODD: Active opposition and defiance</h2>
          <p class="lead">
            The combination of ADHD and ODD creates a major relational challenge, where behavior is no longer just linked to inattention, but to voluntary confrontation.
          </p>

          <h3 style="margin-top: 2rem;">1. The Shift Between "I Can't" and "I Won't"</h3>
          <p>
            Unlike in ADHD alone where the child forgets or is distracted ("I can't"), the ODD + ADHD duo brings a direct and deliberate opposition ("I won't"):
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span>✊</span> Active resistance</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                The child hears the instruction, understands it perfectly, has the resources to execute it, but makes the conscious and immediate decision to oppose it.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span>🔥</span> Defiance</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                This is not a simple passing temper tantrum. The child actively seeks confrontation to test the strength of authority, contest the legitimacy of rules, and reject imposed constraints.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. The Vicious Cycle: Why Do They Intersect So Often?</h3>
          <p>
            Oppositional Defiant Disorder frequently grafts onto ADHD for neurological and systemic reasons:
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>Accumulation of frustrations and the "labeling" effect:</strong> Constantly hearing that they are doing wrong because of their ADHD, the child develops a self-defense posture: <em>"Since you say I'm bad or incapable, I might as well act like it"</em>. Opposition becomes an armor to protect their wounded self-esteem.</li>
            <li><strong>Cognitive inhibition deficit:</strong> The impulsivity inherent to ADHD makes the child react instantly, at the drop of a hat. Faced with a frustration or an unpleasant instruction, the emotion explodes immediately in the form of refusal or anger, long before the brain has time to analyze the situation.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. How to Adjust the Approach in ODD?</h3>
          <p>
            Faced with a dual diagnosis, classic ADHD tools (like visual routines) are necessary but no longer sufficient. We must restructure how conflicts are managed at home:
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🧱</div>
              <div class="criteria-text">
                <h4>Defuse the power struggle (Be a "brick wall")</h4>
                <p>ODD feeds and strengthens itself through confrontation. The more the parent gets angry and raises their voice, the more energy the child gains from this conflict. It is crucial to remain calm, neutral, and firm: completely impervious to verbal provocation, waiting for calm before acting.</p>
              </div>
            </div>
            
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">🎯</div>
              <div class="criteria-text">
                <h4>Pick your battles</h4>
                <p>You cannot negotiate or punish everything without exhausting the relationship. Define 2 or 3 absolute, non-negotiable rules (related to safety or strict mutual respect) on which you will be inflexible, and let go of minor details to reduce daily friction.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">⚖️</div>
              <div class="criteria-text">
                <h4>Illusion of choices method</h4>
                <p>Bypass the refusal reflex by giving the child a sense of control. Instead of a direct instruction (<em>"Go brush your teeth"</em>), ask: <em>"Do you prefer to brush your teeth before or after putting on your pajamas?"</em>. The end result is the same, but the child retains autonomy.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">✨</div>
              <div class="criteria-text">
                <h4>Over-value positive behavior</h4>
                <p>ODD children end up receiving attention mostly when they oppose. To reverse this dynamic, ignore minor, safe provocations and warmly celebrate every small step towards cooperation. Give cooperation a positive relational value.</p>
              </div>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge" style="color: var(--primary);">Diagnostic dublu</span>
          <h2><span>⚡</span> TDAH + TOP: Opoziția activă și provocarea</h2>
          <p class="lead">
            Combinația de TDAH și TOP creează o provocare relațională majoră, unde comportamentul nu mai este legat doar de neatenție, ci de confruntarea voluntară.
          </p>

          <h3 style="margin-top: 2rem;">1. Diferența dintre „Nu pot” și „Nu vreau”</h3>
          <p>
            Spre deosebire de TDAH simplu, unde copilul uită sau este distras („Nu pot”), diagnosticul dublu TDAH + TOP aduce o opoziție directă și deliberată („Nu vreau”):
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span>✊</span> Rezistență activă</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Copilul aude instrucțiunea, o înțelege perfect, are resursele pentru a o executa, dar ia decizia conștientă și imediată de a se opune.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span>🔥</span> Provocarea</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Nu este o simplă criză de furie trecătoare. Copilul caută activ confruntarea pentru a testa limitele autorității, a contesta regulile și a respinge constrângerea.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Cercul vicios: De ce se intersectează atât de des?</h3>
          <p>
            Tulburarea de Opoziție și Provocare se grefează frecvent pe TDAH din motive neurologice și sistemice:
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>Acumularea frustrărilor și efectul de „etichetare”:</strong> Auzind constant că se comportă greșit din cauza TDAH-ului, copilul dezvoltă o postură de auto-apărare: <em>„Dacă tot spuneți că sunt rău, atunci chiar voi fi”</em>. Opoziția devine un scut pentru a-și proteja stima de sine rănită.</li>
            <li><strong>Deficitul de inhibiție cognitivă:</strong> Impulsivitatea specifică TDAH-ului face ca copilul să reacționeze instantaneu. În fața unei frustrări sau a unei reguli neplăcute, emoția explodează sub formă de refuz sau furie, înainte ca creierul să aibă timp să analizeze situația.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. Cum să ajustăm abordarea în fața TOP?</h3>
          <p>
            În fața diagnosticului dublu, instrumentele clasice pentru TDAH (cum ar fi rutinele vizuale) sunt necesare, dar nu suficiente. Trebuie restructurat modul de gestionare a conflictelor acasă:
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🧱</div>
              <div class="criteria-text">
                <h4>Dezamorsarea capcanei puterii (Fiți un „zid de cărămidă”)</h4>
                <p>TOP se alimentează din confruntare. Cu cât părintele se enervează și ridică vocea, cu atât copilul capătă mai multă energie în acest conflict. Este crucial să rămâneți calm, neutru și ferm: impermeabil la provocări și așteptând calmul înainte de a acționa.</p>
              </div>
            </div>
            
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">🎯</div>
              <div class="criteria-text">
                <h4>Alegerea bătăliilor</h4>
                <p>Nu puteți negocia sau pedepsi totul fără a epuiza relația. Definiți 2 sau 3 reguli absolute (siguranță sau respect reciproc strict) pe care veți fi inflexibil și fiți mai indulgent cu detaliile minore pentru a reduce conflictele.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">⚖️</div>
              <div class="criteria-text">
                <h4>Metoda alegerilor iluzorii</h4>
                <p>Ocoliți reflexul de refuz oferind copilului un sentiment de control. În loc de o instrucțiune directă (<em>„Du-te să te speli pe dinți”</em>), întreabă: <em>„Preferi să te speli pe dinți înainte sau după ce îți pui pyjamaua?”</em>. Rezultatul este același, dar copilul își păstrează autonomia.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">✨</div>
              <div class="criteria-text">
                <h4>Valorizarea excesivă a pozitivului</h4>
                <p>Copiii cu TOP primesc atenție mai ales când se opun. Pentru a inversa dinamica, ignorați provocările minore nepericuloase și lăudați călduros fiecare mic pas spre cooperare. Oferiți cooperării o valoare relațională pozitivă.</p>
              </div>
            </div>
          </div>
        <?php else: ?>
          <span class="section-badge" style="color: var(--primary);">Double diagnostic</span>
          <h2><span>⚡</span> TDAH + TOP : L'opposition active et la provocation</h2>
          <p class="lead">
            La rencontre du TDAH et du TOP crée un défi relationnel majeur où le comportement n'est plus seulement lié à l'inattention, mais à un affrontement volontaire.
          </p>

          <h3 style="margin-top: 2rem;">1. La bascule entre "Je ne peux pas" et "Je ne veux pas"</h3>
          <p>
            Contrairement au TDAH seul où l'enfant oublie ou est distrait ("Je ne peux pas"), le duo TDAH + TOP amène une opposition frontale et délimétée ("Je ne veux pas") :
          </p>
          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4 style="color: var(--primary);"><span>✊</span> Une résistance active</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                L'enfant entend la consigne, la comprend parfaitement, possède les ressources pour l'exécuter, mais prend la décision consciente et immédiate de s'y opposer.
              </p>
            </div>
            
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4 style="color: var(--accent);"><span>🔥</span> La provocation</h4>
              <p style="font-size: 0.9rem; line-height: 1.6; margin-top: 0.5rem;">
                Ce n'est pas une simple crise de colère passagère. L'enfant cherche activement la confrontation pour tester la solidité de l'autorité, contester la légitimité des règles et rejeter la contrainte imposée.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2.5rem;">2. Le cercle vicieux : Pourquoi se croisent-ils si souvent ?</h3>
          <p>
            Le Trouble Oppositionnel avec Provocation se greffe très régulièrement sur le TDAH pour des raisons neurologiques et systémiques :
          </p>
          <ul class="pretty-list" style="margin-bottom: 2rem;">
            <li><strong>L'accumulation de frustrations et l'effet "étiquette" :</strong> À force de s'entendre répéter qu'il agit mal, qu'il est distrait ou turbulent à cause de son TDAH, l'enfant finit par développer une posture d'auto-défense : <em>"Puisque vous dites que je suis méchant ou incapable, je vais l'être pour de vrai"</em>. L'opposition devient une armure pour protéger son estime de soi blessée.</li>
            <li><strong>Le déficit d'inhibition cognitive :</strong> L'impulsivité inhérente au TDAH fait que l'enfant réagit instantanément, au quart de tour. Face à une frustration ou une consigne qui lui déplaît, l'émotion explose immédiatement sous forme de refus ou de colère, bien avant que son cortex préfrontal n'ait eu le temps de rationaliser la situation.</li>
          </ul>

          <h3 style="margin-top: 2.5rem;">3. Comment ajuster l'approche face au TOP ?</h3>
          <p>
            Face au double diagnostic, les outils classiques du TDAH (tels que les routines visuelles) sont nécessaires mais ne suffisent plus. Il faut restructurer la gestion des conflits à la maison :
          </p>
          
          <div class="criteria-container">
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">🧱</div>
              <div class="criteria-text">
                <h4>Désamorcer le piège du pouvoir (Être un "mur de briques")</h4>
                <p>Le TOP s'alimente et se renforce de l'affrontement. Plus le parent s'énerve et hausse le ton, plus l'enfant puise de l'énergie dans ce conflit. Il est crucial de rester calme, neutre et ferme : totalement imperméable aux provocations verbales et d'attendre le calme avant d'agir.</p>
              </div>
            </div>
            
            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">🎯</div>
              <div class="criteria-text">
                <h4>Choisir ses batailles</h4>
                <p>On ne peut pas tout négocier ni tout punir sans épuiser la relation. Définissez 2 ou 3 règles absolues et non négociables (liées à la sécurité ou au respect mutuel strict) sur lesquelles vous serez inflexible, et lâchez du lest sur les détails mineurs pour réduire les points de friction quotidiens.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--primary-rgb), 0.1); color: var(--primary);">⚖️</div>
              <div class="criteria-text">
                <h4>La méthode des choix illusoires</h4>
                <p>Contournez le réflexe de refus en donnant à l'enfant un sentiment de contrôle. Au lieu d'une consigne directe (<em>"Va te brosser les dents"</em>), demandez : <em>"Tu préfères te brosser les dents avant ou après avoir mis ton pyjama ?"</em>. La finalité reste la même, mais l'enfant garde son autonomie.</p>
              </div>
            </div>

            <div class="criteria-card">
              <div class="criteria-icon" style="background: rgba(var(--accent-rgb), 0.1); color: var(--accent);">✨</div>
              <div class="criteria-text">
                <h4>Valoriser le positif à outrance</h4>
                <p>Les enfants TOP finissent par ne recevoir de l'attention que lorsqu'ils s'opposent. Pour à inverser cette dynamique, ignorez les provocations mineures non dangereuses et célébrez chaleureusement chaque petit pas vers la coopération. Donnez à la coopération une valeur relationnelle positive.</p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </section>

      <!-- Criteria Section -->
      <section id="criteres-dsm5">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Diagnostic</span>
          <h2><span>Criteria & Warning Signs (DSM-5)</span></h2>
          <p>To suspect ODD, the DSM-5 diagnostic manual identifies major behavioral criteria groups:</p>
          
          <div class="criteria-container">
            
            <!-- Criterion 1 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">😡</div>
                <div class="criteria-text">
                  <h4>Angry & Irritable Mood</h4>
                  <p>The child frequently loses their temper, is often touchy, easily annoyed, and manifests constant anger or resentment.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">How often do these anger outbursts occur in your child?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Rarely or never (typical behavior)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Sometimes, in response to a specific event (normal frustration)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Almost every day, disproportionately (suggestive sign)</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 2 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">🗣️</div>
                <div class="criteria-text">
                  <h4>Argumentative & Defiant Behavior</h4>
                  <p>Frequently disputes rules, actively refuses to comply with adult requests, deliberately annoys others, and blames others for their mistakes.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">How does the child react to requests or rules established by adults?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Usually cooperates willingly.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Opposes a little, but eventually listens.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Actively refuses, argues systematically, and seeks to provoke.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 3 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">⚡</div>
                <div class="criteria-text">
                  <h4>Vindictiveness</h4>
                  <p>Has shown spiteful or vindictive behavior several times (at least twice) within the last 6 months when facing frustrations.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Does the child show spitefulness or seek revenge in case of disagreement?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Never, quickly forgets disagreements.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Very rarely (less than twice in the last 6 months).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Yes, at least twice in the last 6 months, with intent to hurt.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>

            <!-- Criterion 4 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">📅</div>
                <div class="criteria-text">
                  <h4>Duration Criterion</h4>
                  <p>These oppositional and irritable manifestations must be present and intense for <strong>at least 6 months</strong>.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">How long have you observed this oppositional behavior?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 For only a few weeks (passing phase).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Intermittently (during periods linked to specific events).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Continuously for more than 6 months.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
          </div>

          <div class="alert-box" style="margin-top: 2rem;">
            <strong>⚠️ Essential diagnostic vigilance:</strong> Before the age of 5, opposition is part of a child's normal development (self-assertion phase). The diagnosis of ODD must only be made by a <strong>specialized and multidisciplinary team</strong> to rule out other causes (anxiety disorder, sensory issues, or isolated ADHD).
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Diagnostic</span>
          <h2><span>Criterii și Semne de Alarmă (DSM-5)</span></h2>
          <p>Pentru a suspecta un TOP, manualul de diagnostic DSM-5 identifică grupuri de criterii comportamentale majores:</p>
          
          <div class="criteria-container">
            
            <!-- Criterion 1 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">😡</div>
                <div class="criteria-text">
                  <h4>Dispoziție colerică și iritabilă</h4>
                  <p>Copilul își pierde frecvent cumpătul, este adesea susceptibil, ușor de enervat și manifestă furie sau resentimente constante.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Cât de des apar aceste crize de furie la copilul tău?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Rareori sau niciodată (comportament tipic)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Uneori, ca reacție la un eveniment specific (frustrare normală)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Aproape în fiecare zi, în mod disproporționat (semn evocator)</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 2 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">🗣️</div>
                <div class="criteria-text">
                  <h4>Comportament certăreț și provocator</h4>
                  <p>Contestă frecvent regulile, refuză în mod activ să se supună cerințelor adulților, îi enervează intenționat pe ceilalți și dă vina pe alții pentru greșelile sale.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Cum reacționează copilul la cerințele sau regulile stabilite de adulți?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 De obicei cooperează de bunăvoie.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Se opune puțin, dar în cele din urmă ascultă.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Refuză activ, argumentează sistematic și caută să provoace.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 3 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">⚡</div>
                <div class="criteria-text">
                  <h4>Spirit răzbunător</h4>
                  <p>S-a arătat răutăcios sau ranchiunos de mai multe ori (cel puțin de două ori) în ultimele 6 luni în fața frustrărilor.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Copilul manifestă răutate sau caută să se răzbune în caz de dezacord?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Niciodată, uită repede dezacordurile.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Foarte rar (mai puțin de 2 ori în ultimele 6 luni).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Da, cel puțin de două ori în ultimele 6 luni, cu intenția de a răni.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>

            <!-- Criterion 4 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">📅</div>
                <div class="criteria-text">
                  <h4>Criteriul de durată</h4>
                  <p>Aceste manifestări de opoziție și iritabilitate trebuie să fie prezente de <strong>cel puțin 6 luni</strong>.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">De cât timp observați acest comportament de opoziție?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 De doar câteva săptămâni (fază trecătoare).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 În mod intermitent (în perioade legate de evenimente).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 În mod continuu de mai bine de 6 luni.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
          </div>

          <div class="alert-box" style="margin-top: 2rem;">
            <strong>⚠️ Vigilență diagnostică esențială:</strong> Înainte de vârsta de 5 ani, opoziția face parte din dezvoltarea normală a copilului. Diagnosticul de TOP trebuie pus doar de o <strong>echipă specializată și pluridisciplinară</strong> pentru a exclude alte cauze (anxietate, probleme senzoriale).
          </div>
        <?php else: ?>
          <span class="section-badge">Diagnostic</span>
          <h2><span>Critères et Signes d'Alerte (DSM-5)</span></h2>
          <p>Pour suspecter un TOP, le manuel diagnostique DSM-5 identifie des groupes de critères comportementaux majeurs :</p>
          
          <div class="criteria-container">
            
            <!-- Criterion 1 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">😡</div>
                <div class="criteria-text">
                  <h4>Humeur colérique et irritable</h4>
                  <p>L'enfant perd fréquemment son sang-froid, est souvent susceptible, facilement agacé, et manifeste une colère ou un ressentiment constants.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">À quelle fréquence ces colères se produisent-elles chez votre enfant ?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Rarement ou jamais (comportement typique)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Parfois, en réaction à un événement précis (frustration normale)</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c1" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Presque tous les jours, de façon disproportionnée (signe évocateur)</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 2 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">🗣️</div>
                <div class="criteria-text">
                  <h4>Comportement querelleur et provocateur</h4>
                  <p>Il conteste fréquemment les règles, refuse activement de se plier aux demandes des adultes, embête délibérément les autres, et rejette la faute de ses erreurs sur autrui.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Comment réagit l'enfant face aux demandes ou aux règles établies par les adultes ?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Il coopère généralement de façon volontaire.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Il rechigne un peu mais finit par obéir.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c2" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Il refuse activement, argumente systématiquement et cherche à provoquer.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
            <!-- Criterion 3 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">⚡</div>
                <div class="criteria-text">
                  <h4>Esprit vindicatif</h4>
                  <p>Il s'est montré méchant ou rancunier à plusieurs reprises (au moins deux fois) au cours des 6 derniers mois face à des frustrations.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">L'enfant manifeste-t-il de la méchanceté ou cherche-t-il à se venger en cas de désaccord ?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Jamais, il oublie très vite les désaccords.</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 Très rarement (moins de 2 fois ces 6 derniers mois).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c3" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 Oui, au moins deux fois ces 6 derniers mois avec intention de blesser.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>

            <!-- Criterion 4 -->
            <div class="criteria-card" onclick="toggleCriteriaQuiz(this, event)">
              <div class="criteria-header-content">
                <div class="criteria-icon">📅</div>
                <div class="criteria-text">
                  <h4>Critère de durée</h4>
                  <p>Ces manifestations d'opposition et d'irritabilité doivent être présentes et intenses depuis <strong>au moins 6 mois</strong>.</p>
                </div>
                <span class="criteria-chevron">▼</span>
              </div>
              <div class="criteria-quiz" onclick="event.stopPropagation()">
                <p class="quiz-question">Depuis combien de temps observez-vous ce comportement d'opposition ?</p>
                <div class="quiz-options">
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="safe" onchange="evaluateQuiz(this)">
                    <span>🟢 Depuis quelques semaines seulement (phase passagère).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="moderate" onchange="evaluateQuiz(this)">
                    <span>🟡 De façon intermittente (par périodes liées à des événements).</span>
                  </label>
                  <label class="quiz-option">
                    <input type="radio" name="quiz-c4" value="warning" onchange="evaluateQuiz(this)">
                    <span>🔴 De manière continue depuis plus de 6 mois.</span>
                  </label>
                </div>
                <div class="quiz-result"></div>
              </div>
            </div>
            
          </div>

          <div class="alert-box" style="margin-top: 2rem;">
            <strong>⚠️ Vigilance diagnostique essentielle :</strong> Avant l'âge de 5 ans, s'opposer fait partie du développement normal d'un enfant (phase d'affirmation de soi). Le diagnostic de TOP ne doit être posé que par une <strong>équipe spécialisée et pluridisciplinaire</strong> afin d'écarter d'autres pistes (trouble anxieux, troubles sensoriels ou TDAH isolé).
          </div>
        <?php endif; ?>
      </section>

      <!-- Section: Debunking (Démystification) -->
      <section id="demystifier-top" style="border-top: 4px solid var(--accent);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge" style="color: var(--accent);">Debunking</span>
          <h2><span>💡</span> Demystifying ODD (Debunking)</h2>
          <p class="lead">
            Oppositional Defiant Disorder is the subject of many preconceptions. Here is the demystification of the main myths based on current clinical knowledge.
          </p>

          <div class="matrix-grid" style="margin-top: 2rem;">
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Myth 1: "It's an education problem, parents are too lenient."</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>The reality (Debunk):</strong> ODD is a dysfunction linked to mood regulation and brain inhibition. The more a parent applies an ultra-rigid or harsh framework, the more the child's defensive system is activated, worsening the vicious cycle of opposition. The child's brain perceives constraint as an immediate threat.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Myth 2: "The child is manipulative and deliberately trying to destroy the family."</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>The reality (Debunk):</strong> A child with ODD suffers from a <strong>major intolerance to frustration</strong> and transitions. Their opposition is not a long-term Machiavellian calculation, but an impulsive, uncontrolled short-term reaction to emotional overload. Behind the defiance often hides immense anxiety.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Myth 3: "ADHD medication does nothing against opposition."</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>The reality (Debunk):</strong> Clinical studies show that when the underlying ADHD is treated medically (allowing better dopamine regulation), impulsivity decreases drastically. Consequently, ODD behaviors fade significantly in the vast majority of children during the hours the treatment is active, as they regain the cognitive ability to filter their frustration.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Myth 4: "ODD will turn into delinquency in adulthood."</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>The reality (Debunk):</strong> Without guidance, the risk of Conduct Disorder exists. However, with parental guidance (Barkley method), school adjustments, and suitable therapeutic support from childhood, the vast majority of children learn to verbalize their frustration, and ODD symptoms decrease considerably during adolescence and adulthood.
              </p>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge" style="color: var(--accent);">Demistificare</span>
          <h2><span>💡</span> Demistificarea TOP (Debunking)</h2>
          <p class="lead">
            Tulburarea de Opoziție și Provocare face obiectul multor idei preconcepute. Iată demistificarea principalelor mituri pe baza cunoștințelor clinice actuale.
          </p>

          <div class="matrix-grid" style="margin-top: 2rem;">
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mitul 1: „Este o problemă de educație, părinții sunt prea indulgenți.”</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>Realitatea (Debunk):</strong> TOP este o disfuncție legată de reglarea dispoziției și inhibiția cerebrală. Cu cât un părinte aplică un cadru ultra-rigid sau violent, cu atât sistemul defensiv al copilului se activează, agravând cercul vicios al opoziției. Creierul copilului cu TOP percepe constrângerea ca pe o amenințare directă.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mitul 2: „Copilul manipulează și încearcă în mod deliberat să distrugă familia.”</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>Realitatea (Debunk):</strong> Copilul cu TOP suferă de o <strong>intoleranță majoră la frustrare</strong> și la tranziții. Opoziția lui nu este un calcul machiavelic pe termen lung, ci o reacție impulsivă pe termen scurt la o supraîncărcare emoțională. În spatele provocării se ascunde adesea o mare anxietate.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mitul 3: „Medicația pentru TDAH nu servește la nimic împotriva opoziției.”</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>Realitatea (Debunk):</strong> Studiile clinice arată că atunci când TDAH-ul de bază este tratat medical, impulsivitatea scade drastic. Prin urmare, comportamentele de TOP se atenuează semnificativ la majoritatea copiilor în timpul acțiunii tratamentului, deoarece aceștia își recapătă capacitatea cognitivă de a gestiona frustrarea.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mitul 4: „TOP se va transforma în delincvență la vârsta adultă.”</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>Realitatea (Debunk):</strong> Fără sprijin, riscul de Tulburare de Conduită există. Totuși, cu ghidaj parental (Barkley), adaptări școlare și sprijin terapeutic adecvat din copilărie, marea majoritate a copiilor învață să își verbalizeze frustrările, iar simptomele TOP se atenuează considerabil la adolescență și la vârsta adultă.
              </p>
            </div>
          </div>
        <?php else: ?>
          <span class="section-badge" style="color: var(--accent);">Démystification</span>
          <h2><span>💡</span> Démystifier le TOP (Debunking)</h2>
          <p class="lead">
            Le Trouble Oppositionnel avec Provocation fait l'objet de nombreuses idées reçues. Voici une démystification des principaux mythes fondée sur les connaissances cliniques actuelles.
          </p>

          <div class="matrix-grid" style="margin-top: 2rem;">
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mythe 1 : « C'est un problème d'éducation, les parents manquent de fermeté. »</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>La réalité (Debunk) :</strong> Le TOP est un dysfonctionnement lié à la régulation de l'humeur et à l'inhibition cérébrale. Plus un parent applique un cadre ultra-rigide ou violent, plus le système défensif de l'enfant s'active, aggravant le cercle vicieux de l'opposition. Le cerveau de l'enfant TOP perçoit la contrainte comme une menace immédiate.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mythe 2 : « L'enfant manipule et cherche volontairement à détruire la famille. »</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>La réalité (Debunk) :</strong> L'enfant TOP souffre d'une <strong>intolérance majeure à la frustration</strong> et aux transitions. Son opposition n'est pas un calcul machiavélique à long terme, c'est une réaction impulsive et incontrôlée à court terme à une surcharge émotionnelle. Derrière la provocation se cache souvent une immense anxiété.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mythe 3 : « La médication du TDAH (Ritaline, etc.) ne sert à rien contre l'opposition. »</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>La réalité (Debunk) :</strong> Les études cliniques montrent que lorsque le TDAH sous-jacent est traité médicalement (permettant une meilleure régulation de la dopamine), l'impulsivité diminue drastiquement. Par conséquent, les comportements de TOP s'estompent de manière significative chez une grande majorité d'enfants durant les heures d'action du traitement, car ils retrouvent la capacité cognitive de filtrer leur frustration.
              </p>
            </div>

            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.01);">
              <h4 style="color: rgba(220, 38, 38, 0.9);">❌ Mythe 4 : « Le TOP va se transformer en délinquance à l'âge adulte. »</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem; color: var(--text-main);">
                <strong>La réalité (Debunk) :</strong> Sans prise en charge, le risque de Trouble des Conduites existe. Cependant, avec une guidance parentale (Barkley), des aménagements scolaires et un suivi thérapeutique adapté dès l'enfance, l'immense majorité des enfants apprennent à verbaliser leurs frustrations, et les symptômes du TOP s'atténuent considérablement à l'adolescence et à l'âge adulte.
              </p>
            </div>
          </div>
        <?php endif; ?>
      </section>

    </main>
  </div>

<?php
include '../includes/footer.php';
?>
