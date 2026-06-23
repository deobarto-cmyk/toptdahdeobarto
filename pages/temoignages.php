<?php
include_once __DIR__ . '/../includes/lang.php';

if ($lang === 'en') {
    $page_title = "ADHD and ODD Testimonials: Stories from Families";
    $page_description = "Discover inspiring stories from families and professionals dealing with ODD and ADHD on a daily basis. Share your experience.";
    $current_page = "temoignages";
    $header_tag = "Chapter II: Testimonials & Experiences";
    $header_title = "Testimonials & Source Analysis";
    $header_subtitle = "Decoding family experiences and analyzing critical online resources.";
    $footer_subtitle = "Chapter II: Experience feedback and family life experiences.";
} elseif ($lang === 'ro') {
    $page_title = "Mărturii TDAH și TOP: Povești de la Familii și Specialiști";
    $page_description = "Descoperă povești inspiraționale de la familii și specialiști care gestionează zilnic TOP și TDAH. Împărtășește-ți experiența.";
    $current_page = "temoignages";
    $header_tag = "Capitolul II: Mărturii și Experiențe";
    $header_title = "Mărturii și Analiza Surselor";
    $header_subtitle = "Decodificarea experiențelor familiale și analiza critică a resurselor online.";
    $footer_subtitle = "Capitolul II: Feedback din experiență și experiențe de viață de familie.";
} else {
    $page_title = "Témoignages TDAH & TOP : Histoires de Parents et Pros";
    $page_description = "Découvre les récits inspirants de familles et de professionnels qui surmontent le TOP et le TDAH au quotidien. Partage ton vécu.";
    $current_page = "temoignages";
    $header_tag = "Chapitre II : Retours d'expériences";
    $header_title = "Témoignages & Analyse des Sources";
    $header_subtitle = "Décoder le vécu familial et analyser les critiques de ressources en ligne.";
    $footer_subtitle = "Chapitre II : Retours d'expériences et vécus familiaux.";
}

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

  <!-- Layout Grid -->
  <div class="container no-sidebar">

    <!-- Main Content -->
    <main>
      
      <!-- E-E-A-T Reassurance Banner -->
      <div class="alert-box" style="margin-bottom: 2rem; background: rgba(var(--primary-rgb), 0.05); border: 1px solid rgba(var(--primary-rgb), 0.2); border-left: 4px solid var(--primary); padding: 1rem; border-radius: 12px; font-size: 0.88rem; display: flex; align-items: center; gap: 0.75rem;">
        <span style="font-size: 1.5rem;">💬</span>
        <div>
          <?php if ($lang === 'en'): ?>
            <strong>Shared experiences:</strong> The testimonies on this page are unique family narratives. They are for peer support only and do not replace individual medical advice.
          <?php elseif ($lang === 'ro'): ?>
            <strong>Experiențe împărtășite:</strong> Mărturiile de pe această pagină sunt relatări unice ale familiilor. Acestea au doar scop de sprijin reciproc și nu înlocuiesc sfaturile medicale individuale.
          <?php else: ?>
            <strong>Expériences partagées :</strong> Les témoignages présentés sur cette page sont des récits de vie uniques. Ils ont une valeur d'entraide entre pairs et ne remplacent pas un avis médical individualisé.
          <?php endif; ?>
        </div>
      </div>
      
      <section id="tiktok-videos">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Social Media</span>
          <h2><span>Data from content creators</span></h2>
          <p class="lead">
            Sharing platforms like TikTok help break parent isolation for families of children with ODD and provide valuable psychoeducational insights.
          </p>

          <!-- Video 1 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span></a>
              <span class="tiktok-badge">Raw daily life of a mom</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              Vivi authentically shares the daily life of parents with children presenting ADHD and ODD.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Deep relational impact:</strong> The disorder disrupts family spontaneity. Parents report "walking on eggshells," constantly anticipating conflicts, and feeling heavy guilt regarding their own exhaustion or frustration.</li>
              <li><strong>Emotional ambivalence:</strong> Daily life is unstable, constantly swinging between violent crises (total chaos at home) and moments of laughter or intense connection.</li>
            </ul>
          </div>
          
          <!-- Video 2 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Psychoeducational Insight</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              This account simplifies clinical and neurological concepts to help families understand better.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Neurological origin:</strong> Crises are not a matter of "whims" or "lenient parenting." The disorder directly affects impulsivity and the brain's reward circuit.</li>
              <li><strong>Lack of visibility:</strong> This is a major distress that is not talked about enough in family structures compared to ADHD alone, which deeply isolates parents.</li>
            </ul>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Rețele Sociale</span>
          <h2><span>Date provenite de la creatorii de conținut</span></h2>
          <p class="lead">
            Platformele de partajare precum TikTok permit ruperea izolării părinților de copii cu TOP și obținerea unor chei psihoeducaționale prețioase.
          </p>

          <!-- Video 1 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span></a>
              <span class="tiktok-badge">Viața de zi cu zi brută a unei mame</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              Vivi împărtășește în mod autentic viața de zi cu zi a părinților cu copii care prezintă TDAH și TOP.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Impactul relațional profund:</strong> Tulburarea distruge spontaneitatea familiei. Părinții relatează că „merg pe coji de ouă”, anticipează constant conflictele și simt o vinovăție grea în fața propriei epuizări sau frustrări.</li>
              <li><strong>Ambivalența emoțională:</strong> Viața de zi cu zi este instabilă și oscilează constant în mod simultan între crize violente (haos total acasă) și momente de râs sau complicitate intensă.</li>
            </ul>
          </div>
          
          <!-- Video 2 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Perspectivă Psihoeducațională</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              Acest cont vulgarizează noțiunile clinice și neurologice pentru a ajuta familiile să înțeleagă mai bine.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Origine neurologică:</strong> Crizele nu sunt o chestiune de „capriciu” sau de „laxisme educațional”. Tulburarea afectează direct impulsivitatea și sistemul de recompensă din creierul copilului.</li>
              <li><strong>Lipsa de vizibilitate:</strong> Este o suferință majoră despre care nu se vorbește destul în structurile familiale în comparație cu TDAH-ul simplu, ceea ce îi izolează foarte mult pe părinți.</li>
            </ul>
          </div>
        <?php else: ?>
          <span class="section-badge">Réseaux Sociaux</span>
          <h2><span>Données issues des créateurs de contenu</span></h2>
          <p class="lead">
            Les plateformes de partage comme TikTok permettent de briser l'isolement des parents d'enfants TOP et d'obtenir des clés psychoéducatives précieuses.
          </p>

          <!-- Video 1 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@mamandejumeaux_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@mamandejumeaux_tdah <span class="tiktok-handle-badge">(Vivi)</span></a>
              <span class="tiktok-badge">Quotidien brut de maman</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              Vivi partage de manière authentique le quotidien de parents d'enfants présentant un TDAH et un TOP.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>L'impact relationnel profond :</strong> Le trouble détruit la spontanéité familiale. Les parents rapportent "marcher sur des œufs", anticiper constamment les conflits et ressentir une lourde culpabilité face à leur propre épuisement ou frustration.</li>
              <li><strong>L'ambivalence émotionnelle :</strong> Le quotidien est instable et oscille constamment en simultané entre de violentes crises (le chaos total à la maison) et des moments de rire ou de complicité intenses.</li>
            </ul>
          </div>
          
          <!-- Video 2 -->
          <div class="tiktok-card">
            <div class="tiktok-header">
              <a href="https://www.tiktok.com/@horizon_tdah" target="_blank" rel="noopener noreferrer" class="tiktok-author tiktok-author-link">@horizon_tdah</a>
              <span class="tiktok-badge">Éclairage Psychoéducatif</span>
            </div>
            <p style="font-size:0.9rem; margin-bottom:1rem; color:var(--text-muted);">
              Ce compte vulgarise les notions cliniques et neurologiques pour aider les familles à mieux comprendre.
            </p>
            <ul class="tiktok-bullets">
              <li><strong>Origine neurologique :</strong> Les crises ne sont pas une question de « caprice » ou de « laxisme éducatif ». Le trouble affecte directement l'impulsivité et le système de récompense dans le cerveau de l'enfant.</li>
              <li><strong>Manque de visibilité :</strong> C’est une détresse majeure dont on ne parle pas assez au sein des structures familiales par rapport au TDAH seul, ce qui isole grandement les parents.</li>
            </ul>
          </div>
        <?php endif; ?>
      </section>

      <!-- Critique & Commentaires Section -->
      <section id="analyse-critique" style="border-top: 4px solid var(--primary);">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Critical Analysis</span>
          <h2><span>📰</span> Article Review & Comments</h2>
          <p class="lead">
            Analyzing the reference article by the organization <strong>Mieux Vivre le TDAH</strong> and online feedback highlights strengths and weaknesses in public perception.
          </p>

          <h3 style="margin-top: 2rem;">1. Article Review: <em>Mieux Vivre le TDAH</em></h3>
          <p>
            Critical analysis of their publication (<a href="https://www.mieux-vivre-le-tdah.com/trouble-oppositionnel-avec-provocation-top/" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">mieux-vivre-le-tdah.com</a>) highlights the following points:
          </p>

          <div class="matrix-grid" style="margin-bottom: 2.5rem;">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Parental destigmatization</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                The article correctly insists that ODD is not the result of bad parenting or lack of parental authority, but a neurodevelopmental disorder.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🟢 ADHD vs ODD distinction</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                It clarifies the fundamental difference: ADHD forgets or gets distracted along the way, while ODD actively refuses and intentionally opposes.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Therapeutic focus</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                It rightly directs towards appropriate behavioral therapies (like Barkley parental guidance programs) rather than arbitrary punishments.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limit: Linear inevitability</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                It may give the impression that ODD is an automatic consequence of ADHD. It is a frequent co-morbidity (40 to 60% of cases), but by no means automatic.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limit: Differential diagnosis</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                The role of other causes of opposition is not sufficiently detailed, such as Autism Spectrum Disorder (ASD), a Pathological Demand Avoidance (PDA) profile, or severe anxiety.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2rem;">2. Comments Analysis (Forums & Social Networks)</h3>
          <p>
            Comment sections under these articles or videos illustrate three major reaction profiles:
          </p>

          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 2px solid var(--primary);">
              <h4>🗣️ Parental distress ("Cry from the heart")</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                "I can't take it anymore, my son refuses everything, school calls me every day, I feel like a bad mother."
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analysis:</strong> Illustration of extreme parental exhaustion facing crises and the resulting social isolation.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid rgba(220, 38, 38, 0.5);">
              <h4>🗣️ Social judgment ("Punitive approach")</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                "In my day, a good spanking or taking things away would have solved the problem. It's just a spoiled kid who lacks boundaries."
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analysis:</strong> Misunderstanding of the neurological structure of the disorder, which feeds and worsens parents' guilt.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid var(--accent);">
              <h4>🗣️ Relief from diagnosis</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                "Putting a name (ODD) to this behavior changed everything. We finally understand our child is suffering and isn't doing this *against* us."
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analysis:</strong> The diagnosis defuses the perceived intentionality and helps restore more peaceful relationships.
              </p>
            </div>
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Analiză Critică</span>
          <h2><span>📰</span> Recenzie de articol &amp; Comentarii</h2>
          <p class="lead">
            Analiza articolului de referință al organizației <strong>Mieux Vivre le TDAH</strong> și a mărturiilor online evidențiază puncte forte și slăbiciuni în percepția publică.
          </p>

          <h3 style="margin-top: 2rem;">1. Recenzia articolului de pe <em>Mieux Vivre le TDAH</em></h3>
          <p>
            Analiza critică a publicației lor (<a href="https://www.mieux-vivre-le-tdah.com/trouble-oppositionnel-avec-provocation-top/" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">mieux-vivre-le-tdah.com</a>) evidențiază următoarele puncte:
          </p>

          <div class="matrix-grid" style="margin-bottom: 2.5rem;">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Destigmatizarea parentală</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Articolul insistă corect pe faptul că TOP nu este rezultatul unei educații greșite sau al lipsei de autoritate părintească, ci este o tulburare neurodezvoltare.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🟢 Distincția TDAH vs TOP</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Clarifică diferența fundamentală: TDAH uită sau este distras pe parcurs, în timp ce TOP refuză activ și se opune în mod intenționat.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Focus terapeutic</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Orientează pe bună dreptate spre terapii comportamentale adaptate (cum ar fi programele de ghidaj parental de tip Barkley) în loc de pedepse arbitrare.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limită: Fatalitate liniară</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Poate lăsa impresia că TOP este o fatalitate sistematică a TDAH-ului. Este o comorbiditate frecventă (40-60% din cazuri), dar nu este deloc automată.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limită: Diagnostic diferențial</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Rolul altor cauze ale opoziției nu este suficient dezvoltat, cum ar fi o Tulburare de Spectru Autist (TSA), un profil de Evitare Patologică a Cerințelor (PDA) sau o anxietate severă.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2rem;">2. Analiza Comentariilor (Forumuri &amp; Rețele)</h3>
          <p>
            Secțiunile de comentarii sub aceste articole sau videoclipuri ilustrează trei mari profiluri de reacții:
          </p>

          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 2px solid var(--primary);">
              <h4>🗣️ Suferința parentală („Strigătul inimii”)</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                „Nu mai pot, fiul meu refuză totul, școala mă sună în fiecare zi, am impresia că sunt o mamă rea.”
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analiză:</strong> Ilustrare a epuizării parentale extreme în fața crizelor și a sentimentului de izolare socială care rezultă din aceasta.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid rgba(220, 38, 38, 0.5);">
              <h4>🗣️ Judecata socială („Abordarea punitivă”)</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                „Pe vremea mea, o palmă bună sau o pedeapsă ar fi rezolvat problema. Este doar un copil răsfățat care nu are limite.”
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analiză:</strong> Neînțelegerea structurii neurologice a tulburării, ceea ce alimentează și agravează vinovăția părinților.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid var(--accent);">
              <h4>🗣️ Ușurarea adusă de diagnostic</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                „Să punem un nume (TOP) pe acest comportament a schimbat totul. Înțelegem în sfârșit că copilul nostru suferă și că nu face asta *împotriva* noastră.”
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analiză:</strong> Diagnosticul permite dezamorsarea intenționalității percepute și stabilirea unor relații mai senine.
              </p>
            </div>
          </div>
        <?php else: ?>
          <span class="section-badge">Analyse Critique</span>
          <h2><span>📰</span> Critique d'article &amp; Commentaires</h2>
          <p class="lead">
            L'analyse de l'article de référence de l'organisme <strong>Mieux Vivre le TDAH</strong> et des retours d'expérience en ligne met en évidence des forces et des fragilités de perception publique.
          </p>

          <h3 style="margin-top: 2rem;">1. Critique de l'article de <em>Mieux Vivre le TDAH</em></h3>
          <p>
            L'analyse critique de leur publication (<a href="https://www.mieux-vivre-le-tdah.com/trouble-oppositionnel-avec-provocation-top/" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">mieux-vivre-le-tdah.com</a>) met en évidence les points suivants :
          </p>

          <div class="matrix-grid" style="margin-bottom: 2.5rem;">
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Déstigmatisation parentale</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                L’article insiste bien sur le fait que le TOP n'est pas le fruit d'une mauvaise éducation ou d'un manque d'autorité parentale, mais qu'il s'agit d'un trouble neurodéveloppemental.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--accent);">
              <h4>🟢 Distinction TDAH vs TOP</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Il clarifie la différence fondamentale : le TDAH oublie ou se distrait en route, tandis que le TOP refuse activement et s'oppose de manière intentionnelle.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid var(--primary);">
              <h4>🟢 Focus thérapeutique</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Il oriente avec raison vers les thérapies comportementales adaptées (comme les programmes de guidance parentale de type Barkley) plutôt que sur la punition arbitraire.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limite : Fatalité linéaire</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Il peut laisser penser que le TOP est une fatalité systématique du TDAH. C'est une comorbidité fréquente (40 à 60 % des cas), mais elle n'est aucunement automatique.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 3px solid rgba(220, 38, 38, 0.7); background: rgba(220, 38, 38, 0.02);">
              <h4>🔴 Limite : Diagnostic différentiel</h4>
              <p style="font-size: 0.9rem; line-height: 1.5; margin-top: 0.25rem;">
                Le rôle d'autres causes d'opposition n'est pas assez développé, comme un Trouble du Spectre de l'Autisme (TSA), un profil d'Évitement Pathologique des Demandes (PDA), ou une anxiété sévère.
              </p>
            </div>
          </div>

          <h3 style="margin-top: 2rem;">2. Lecture des Commentaires (Forums &amp; Réseaux)</h3>
          <p>
            Les sections de commentaires sous ces articles ou vidéos illustrent trois grands profils de réactions :
          </p>

          <div class="matrix-grid">
            <div class="matrix-card" style="border-top: 2px solid var(--primary);">
              <h4>🗣️ La détresse parentale (« Le cri du cœur »)</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                « Je n'en peux plus, mon fils refuse tout, l'école m'appelle tous les jours, j'ai l'impression d'être une mauvaise mère. »
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analyse :</strong> Illustration de l'épuisement parental extrême face aux crises et du sentiment d'isolement social qui en découle.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid rgba(220, 38, 38, 0.5);">
              <h4>🗣️ Le jugement social (« L'approche punitive »)</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                « À mon époque, une bonne fessée ou une privation aurait réglé le problème. C'est juste un enfant roi qui manque de limites. »
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analyse :</strong> Incompréhension de la structure neurologique du trouble qui alimente et aggrave la culpabilité des parents.
              </p>
            </div>
            <div class="matrix-card" style="border-top: 2px solid var(--accent);">
              <h4>🗣️ Le soulagement du diagnostic</h4>
              <p style="font-size: 0.9rem; font-style: italic; margin-top: 0.25rem; color: var(--text-muted);">
                « Mettre un mot (TOP) sur ce comportement a tout changé. On comprend enfin que notre enfant souffre et qu'il ne fait pas ça *contre* nous. »
              </p>
              <p style="font-size: 0.85rem; margin-top: 0.5rem; border-top: 1px dashed var(--card-border); padding-top: 0.5rem;">
                <strong>Analyse :</strong> Le diagnostic permet de désamorcer l'intentionnalité perçue et d'instaurer des relations plus sereines.
              </p>
            </div>
          </div>
        <?php endif; ?>
      </section>

      <!-- Hope for Future Section -->
      <section id="espoir-futur">
        <?php if ($lang === 'en'): ?>
          <span class="section-badge">Perspective</span>
          <h2><span>Perspective &amp; A ray of hope</span></h2>
          <p>
            Experience feedback and testimonials in comments of these videos are also a crucial source of hope for exhausted parents.
          </p>

          <div class="alert-box" style="background: rgba(13, 148, 136, 0.05); border-color: rgba(13, 148, 136, 0.3); color: var(--text-main);">
            <strong>🕊️ A ray of hope in the long term:</strong> Although the daily journey may seem chaotic, many testimonials from parents of former ODD children report that a <strong>radical calming frequently occurs during adolescence (around 15-16 years old)</strong>. 
            <br><br>
            With age and brain maturation, the child with ODD will calm down. They frequently become a respectful, intelligent, self-taught adult, perfectly integrated into their professional life.
          </div>
        <?php elseif ($lang === 'ro'): ?>
          <span class="section-badge">Perspective</span>
          <h2><span>Perspective &amp; O rază de speranță</span></h2>
          <p>
            Mărturiile și comentariile la aceste videoclipuri sunt, de asemenea, o sursă crucială de speranță pentru părinții epuizați.
          </p>

          <div class="alert-box" style="background: rgba(13, 148, 136, 0.05); border-color: rgba(13, 148, 136, 0.3); color: var(--text-main);">
            <strong>🕊️ O rază de speranță pe termen lung:</strong> Deși parcursul zilnic poate părea haotic, multe mărturii ale părinților cu foști copii TOP relatează că o <strong>liniștire radicală survine frecvent la adolescență (în jurul vârstei de 15-16 ani)</strong>. 
            <br><br>
            Cu vârsta și maturizarea creierului, copilul cu TOP se va liniști. De multe ori devine un adult respectuos, inteligent, autodidact și perfect integrat profesional.
          </div>
        <?php else: ?>
          <span class="section-badge">Perspectives</span>
          <h2><span>Perspectives & Lueur d'espoir</span></h2>
          <p>
            Les retours d'expérience et témoignages en commentaires de ces vidéos sont également une source d'espoir cruciale pour les parents épuisés.
          </p>

          <div class="alert-box" style="background: rgba(13, 148, 136, 0.05); border-color: rgba(13, 148, 136, 0.3); color: var(--text-main);">
            <strong>🕊️ Une lueur d'espoir à long terme :</strong> Bien que le parcours quotidien puisse sembler chaotique, de nombreux témoignages de parents d'anciens enfants TOP rapportent qu'un <strong>apaisement radical survient fréquemment à l'adolescence (vers 15-16 ans)</strong>. 
            <br><br>
            Avec l'âge et la maturation cérébrale, l'enfant TOP va s'apaiser. Il devient fréquemment un adulte respectueux, intelligent, autodidacte et parfaitement inséré dans sa vie professionnelle.
          </div>
        <?php endif; ?>
      </section>

    </main>
  </div>

<?php
include __DIR__ . '/../includes/footer.php';
?>
