// Central JavaScript logic for multi-page tdah site

const currentLang = document.documentElement.lang || 'fr';

const translations = {
  fr: {
    themeDark: 'Mode Sombre',
    themeLight: 'Mode Clair',
    cookieText: '🍪 <strong>Respect de ta vie privée :</strong> Ce site utilise uniquement le stockage local de ton navigateur (sans cookies de pistage) pour enregistrer tes préférences de thème et sauvegarder ton journal de réflexion.',
    cookieAccept: 'Accepter',
    quizSafe: "<strong>🟢 Orientation : Non suspect.</strong> Ce comportement semble typique pour le développement normal d'un enfant de cet âge. Il n'indique pas de suspicion de TOP.",
    quizModerate: "<strong>🟡 Orientation : Vigilance modérée.</strong> Ce comportement est présent mais modéré ou situationnel (frustration classique). Une simple attention éducative ou méthode Barkley peut suffire pour apaiser les tensions.",
    quizWarning: "<strong>🔴 Orientation : Forte suspicion de TOP.</strong> Ce comportement répété, intense et persistant correspond aux critères diagnostiques majeurs du DSM-5. Il est fortement recommandé d'en parler à un spécialiste (médecin, neuropédiatre ou pédopsychiatre) pour obtenir un bilan clinique.",
    noLogMsg: 'Aucune situation enregistrée pour le moment. Remplissez le formulaire ci-dessus.',
    recordedOn: 'Enregistré le',
    shareTitle: 'Situation TOP/TDAH',
    shareDesc: 'Partager cette observation',
    deleteDesc: 'Supprimer cette observation',
    labelConsigne: 'Consigne',
    labelIntensity: "Niveau d'opposition",
    labelReaction: 'Réaction',
    labelStrategie: 'Stratégie appliquée',
    soutienTitle: '💡 Soutien & Conseils personnalisés',
    concretaActions: '🎯 Actions concrètes :',
    alertDemande: 'Veuillez choisir un type de demande.',
    alertIntensity: 'Veuillez sélectionner une intensité (1 à 5).',
    alertStrategie: 'Veuillez choisir une stratégie appliquée.',
    alertStorageError: "Erreur lors de l'enregistrement. Stockage local plein ou indisponible.",
    deleteConfirm: 'Voulez-vous supprimer cette situation de votre historique ?',
    copyText: 'Copiez ce texte :',
    shareHeader: 'Situation enregistrée — Journal TOP/TDAH',
    shareStateParent: 'État parent',
    shareResolution: 'Résolution',
    shareContext: 'Contexte',
    shareFooter: "— Partagé depuis l'espace de réflexion TDAH",
    menuLabel: 'Menu de navigation',
    menuText: 'Menu',
    menuClose: 'Fermer',
    deptTitlePrefix: 'Département',
    deptTextTemplate: 'Ce département est rattaché à la région <strong>{region}</strong>.<br><br>Les bénévoles locaux d\'<strong>HyperSupers TDAH France</strong> y animent des réseaux d\'entraide, partagent les contacts de professionnels de santé spécialisés et informent sur les ateliers de guidance parentale ouverts près de chez vous.',
    demande: {
      'Hygiène & Soins (brossage dents, bain, habillage)': '🛁 Hygiène & Soins (brossage dents, bain...)',
      'Transitions & Écrans (arrêter un jeu, quitter la maison)': '📱 Transitions & Écrans (écrans, départ...)',
      'Tâches & Devoirs (devoirs, rangement chambre)': '📚 Tâches & Devoirs (devoirs, rangement...)',
      'Repas & Coucher (venir à table, aller au lit)': '🛌 Repas & Coucher (table, coucher...)',
      'Autre consigne': '💬 Autre consigne'
    },
    strategie: {
      'Choix limité (illusion de contrôle)': '💡 Choix limité (illusion de contrôle)',
      'Renforcement positif (valoriser la coopération)': '✨ Renforcement positif',
      'Ignorer activement les comportements mineurs': '🔇 Ignorer activement',
      'Consigne claire, courte et visuelle': '📢 Consigne courte & claire',
      'Réaction spontanée (conflit / hausse de ton)': '⚡ Réaction spontanée / Hausse de ton'
    },
    reactions: {
      '🗣️ Crie / Hurle': '🗣️ Crie / Hurle',
      '🚫 Dit \'Non\' fermement': '🚫 Dit \'Non\' fermement',
      '⏳ Négocie / Argumente': '⏳ Négocie / Argumente',
      '🏃 Fuit / S\'en va': '🏃 Fuit / S\'en va',
      '🤫 Ignore / Boude': '🤫 Ignore / Boude',
      'Aucune': 'Aucune',
      'Aucune renseignée': 'Aucune renseignée'
    },
    parentState: {
      calme: '😌 Calm',
      frustre: '😤 Frustré(e)',
      depasse: '😰 Dépassé(e)'
    },
    resolutionState: {
      oui_vite: '✅ Résolu rapidement',
      oui_long: '⏳ Résolu difficilement',
      non: '❌ Non résolu'
    },
    contextState: {
      retour_ecole: '🎒 Retour école',
      fatigue: '😴 Fatigue',
      faim: '🍽️ Faim',
      transition: '🔄 Transition',
      autre: '💬 Autre'
    }
  },
  en: {
    themeDark: 'Dark Mode',
    themeLight: 'Light Mode',
    cookieText: '🍪 <strong>Privacy policy:</strong> This website only uses your browser\'s local storage (no tracking cookies) to save your theme preferences and your reflection log.',
    cookieAccept: 'Accept',
    quizSafe: "<strong>🟢 Orientation: Safe.</strong> This behavior seems typical for the normal development of a child of this age. It does not indicate ODD suspicion.",
    quizModerate: "<strong>🟡 Orientation: Moderate vigilance.</strong> This behavior is present but moderate or situational (classic frustration). Simple educational attention or the Barkley method can be enough to calm tensions.",
    quizWarning: "<strong>🔴 Orientation: Strong suspicion of ODD.</strong> This repeated, intense, and persistent behavior matches the major diagnostic criteria of the DSM-5. It is strongly recommended to speak with a specialist (doctor, neuropediatrician, or child psychiatrist) to get a clinical evaluation.",
    noLogMsg: 'No situations recorded yet. Fill out the form above.',
    recordedOn: 'Recorded on',
    shareTitle: 'ODD/ADHD Situation',
    shareDesc: 'Share this observation',
    deleteDesc: 'Delete this observation',
    labelConsigne: 'Instruction',
    labelIntensity: 'Opposition level',
    labelReaction: 'Reaction',
    labelStrategie: 'Strategy applied',
    soutienTitle: '💡 Personalized Support & Advice',
    concretaActions: '🎯 Concrete actions:',
    alertDemande: 'Please choose a type of request.',
    alertIntensity: 'Please select an intensity (1 to 5).',
    alertStrategie: 'Please choose an applied strategy.',
    alertStorageError: 'Error while saving. Local storage is full or unavailable.',
    deleteConfirm: 'Do you want to delete this situation from your history?',
    copyText: 'Copy this text:',
    shareHeader: 'Recorded situation — ODD/ADHD Log',
    shareStateParent: 'Parent state',
    shareResolution: 'Resolution',
    shareContext: 'Context',
    shareFooter: '— Shared from the ADHD reflection space',
    menuLabel: 'Navigation menu',
    menuText: 'Menu',
    menuClose: 'Close',
    deptTitlePrefix: 'Department',
    deptTextTemplate: 'This department is attached to region <strong>{region}</strong>.<br><br>Local volunteers of <strong>HyperSupers TDAH France</strong> run mutual aid networks, share contact information of specialized healthcare professionals, and inform about parental guidance workshops open near you.',
    demande: {
      'Hygiène & Soins (brossage dents, bain, habillage)': '🛁 Hygiene & Care (brushing teeth, bath...)',
      'Transitions & Écrans (arrêter un jeu, quitter the house)': '📱 Transitions & Screens (screens, departure...)',
      'Tâches & Devoirs (devoirs, rangement chambre)': '📚 Tasks & Homework (homework, cleaning...)',
      'Repas & Coucher (venir à table, aller au lit)': '🛌 Meal & Bedtime (meal, bedtime...)',
      'Autre consigne': '💬 Other instruction'
    },
    strategie: {
      'Choix limité (illusion de contrôle)': '💡 Limited choice (illusion of control)',
      'Renforcement positif (valoriser la coopération)': '✨ Positive reinforcement',
      'Ignorer activement les comportements mineurs': '🔇 Active ignoring',
      'Consigne claire, courte et visuelle': '📢 Short & clear instruction',
      'Réaction spontanée (conflit / hausse de ton)': '⚡ Spontaneous reaction / Raising voice'
    },
    reactions: {
      '🗣️ Crie / Hurle': '🗣️ Screams / Yells',
      '🚫 Dit \'Non\' fermement': '🚫 Says "No" firmly',
      '⏳ Négocie / Argumente': '⏳ Negotiates / Argues',
      '🏃 Fuit / S\'en va': '🏃 Runs away / Leaves',
      '🤫 Ignore / Boude': '🤫 Ignores / Pouts',
      'Aucune': 'None',
      'Aucune renseignée': 'None specified'
    },
    parentState: {
      calme: '😌 Calm',
      frustre: '😤 Frustrated',
      depasse: '😰 Overwhelmed'
    },
    resolutionState: {
      oui_vite: '✅ Resolved quickly',
      oui_long: '⏳ Resolved with difficulty',
      non: '❌ Unresolved'
    },
    contextState: {
      retour_ecole: '🎒 School return',
      fatigue: '😴 Fatigue',
      faim: '🍽️ Hunger',
      transition: '🔄 Transition',
      autre: '💬 Other'
    }
  },
  ro: {
    themeDark: 'Mod Întunecat',
    themeLight: 'Mod Luminos',
    cookieText: '🍪 <strong>Respectarea confidențialității:</strong> Acest site utilizează doar stocarea locală a browserului tău (fără cookie-uri de urmărire) pentru a-ți salva preferințele de temă și jurnalul de reflecție.',
    cookieAccept: 'Acceptă',
    quizSafe: "<strong>🟢 Orientare: Fără suspiciune.</strong> Acest comportament pare tipic pentru dezvoltarea normală a unui copil de această vârstă. Nu indică o suspiciune de TOP.",
    quizModerate: "<strong>🟡 Orientare: Vigilență moderată.</strong> Acest comportament este prezent, dar moderat sau situațional (frustrare clasică). O simplă atenție educativă sau metoda Barkley poate fi suficientă pentru a calma tensiunile.",
    quizWarning: "<strong>🔴 Orientare: Suspiciune puternică de TOP.</strong> Acest comportament repetat, intens și persistent corespunde criteriilor de diagnostic majore din DSM-5. Es recomandat cu tărie să discutați cu un specialist (medic, neuropediatru sau pedopsihiatru) pentru a obține o evaluare clinică.",
    noLogMsg: 'Nicio situație înregistrată momentan. Completați formularul de mai sus.',
    recordedOn: 'Înregistrat la',
    shareTitle: 'Situație TOP/TDAH',
    shareDesc: 'Distribuiți această observație',
    deleteDesc: 'Ștergeți această observație',
    labelConsigne: 'Instrucțiune',
    labelIntensity: 'Nivel de opoziție',
    labelReaction: 'Reacție',
    labelStrategie: 'Strategie aplicată',
    soutienTitle: '💡 Susținere și Sfaturi personalizate',
    concretaActions: '🎯 Acțiuni concrete:',
    alertDemande: 'Vă rugăm să alegeți un tip de solicitare.',
    alertIntensity: 'Vă rugăm să selectați o intensitate (de la 1 la 5).',
    alertStrategie: 'Vă rugăm să alegeți o strategie aplicată.',
    alertStorageError: 'Eroare la salvare. Spațiul de stocare local este plin sau indisponibil.',
    deleteConfirm: 'Doriți să ștergeți această situație din istoricul dumneavoastră?',
    copyText: 'Copiați acest text:',
    shareHeader: 'Situație înregistrată — Jurnal TOP/TDAH',
    shareStateParent: 'Stare părinte',
    shareResolution: 'Rezoluție',
    shareContext: 'Context',
    shareFooter: '— Distribuit din spațiul de reflecție TDAH',
    menuLabel: 'Meniu de navigare',
    menuText: 'Meniu',
    menuClose: 'Închide',
    deptTitlePrefix: 'Departament',
    deptTextTemplate: 'Acest departament aparține regiunii <strong>{region}</strong>.<br><br>Voluntarii locali ai asociației <strong>HyperSupers TDAH France</strong> organizează rețele de sprijin reciproc, împărtășesc contactele profesioniștilor din domeniul sănătății specializați și oferă informații despre atelierele de îndrumare parentală deschise în apropierea dumneavoastră.',
    demande: {
      'Hygiène & Soins (brossage dents, bain, habillage)': '🛁 Igienă & Îngrijire (spălat pe dinți, baie...)',
      'Transitions & Écrans (arrêter un jeu, quitter la maison)': '📱 Tranziții & Ecrane (ecrane, plecare...)',
      'Tâches & Devoirs (devoirs, rangement chambre)': '📚 Sarcini & Teme (teme, curățenie...)',
      'Repas & Coucher (venir à table, aller au lit)': '🛌 Masă & Culcare (masă, somn...)',
      'Autre consigne': '💬 Altă instrucțiune'
    },
    strategie: {
      'Choix limité (illusion de contrôle)': '💡 Alegere limitată (iluzia controlului)',
      'Renforcement positif (valoriser la coopération)': '✨ Întărire pozitivă',
      'Ignorer activement les comportements mineurs': '🔇 Ignorare activă',
      'Consigne claire, courte et visuelle': '📢 Instrucțiune scurtă & clară',
      'Réaction spontanée (conflit / hausse de ton)': '⚡ Reacție spontană / Ridicarea vocii'
    },
    reactions: {
      '🗣️ Crie / Hurle': '🗣️ Țipă / Urlă',
      '🚫 Dit \'Non\' fermement': '🚫 Spune „Nu” ferm',
      '⏳ Négocie / Argumente': '⏳ Negociază / Argumentează',
      '🏃 Fuit / S\'en va': '🏃 Fuge / Pleacă',
      '🤫 Ignore / Boude': '🤫 Ignoră / Se supără',
      'Aucune': 'Niciuna',
      'Aucune renseignée': 'Niciuna specificată'
    },
    parentState: {
      calme: '😌 Calm(ă)',
      frustre: '😤 Frustrat(ă)',
      depasse: '😰 Depășit(ă)'
    },
    resolutionState: {
      oui_vite: '✅ Rezolvat rapid',
      oui_long: '⏳ Rezolvat cu dificultate',
      non: '❌ Nerezolvat'
    },
    contextState: {
      retour_ecole: '🎒 Întoarcere școală',
      fatigue: '😴 Oboseală',
      faim: '🍽️ Foame',
      transition: '🔄 Tranziție',
      autre: '💬 Altele'
    }
  }
};

// Theme Switcher Logic
function toggleTheme() {
  const lang = document.documentElement.lang || 'fr';
  const body = document.body;
  const currentTheme = body.getAttribute('data-theme');
  const themeIcon = document.getElementById('theme-icon');
  const themeText = document.getElementById('theme-text');
  
  if (currentTheme === 'dark') {
    body.removeAttribute('data-theme');
    if (themeIcon) themeIcon.textContent = '🌙';
    if (themeText) themeText.textContent = translations[lang].themeDark;
    localStorage.setItem('theme', 'light');
  } else {
    body.setAttribute('data-theme', 'dark');
    if (themeIcon) themeIcon.textContent = '☀️';
    if (themeText) themeText.textContent = translations[lang].themeLight;
    localStorage.setItem('theme', 'dark');
  }
}

// Checkbox Persistence Helper
function initCheckboxes() {
  const checkboxes = document.querySelectorAll('.worksheet-steps input[type="checkbox"]');
  checkboxes.forEach((cb, idx) => {
    const cbId = `cb_${window.location.pathname}_${idx}`;
    const savedState = localStorage.getItem(cbId);
    
    if (savedState === 'true') {
      cb.checked = true;
      cb.closest('li').classList.add('checked');
    }
    
    cb.addEventListener('change', () => {
      const li = cb.closest('li');
      if (cb.checked) {
        li.classList.add('checked');
        localStorage.setItem(cbId, 'true');
      } else {
        li.classList.remove('checked');
        localStorage.setItem(cbId, 'false');
      }
    });
  });
}

// Reflection Carnet Logic
function initReflection() {
  loadLogEntries();
}

function generateSoutien(demande, intensity, strategie, reactions, questionnaire) {
  const lang = document.documentElement.lang || 'fr';
  const q = questionnaire || {};
  const blocks = [];

  // ── BLOC 1 : Soutien au parent ─────────────────────────────────────
  let parentMsg = '';
  if (q.parent === 'depasse') {
    parentMsg = lang === 'en'
      ? '🤝 <strong>You are not alone.</strong> Feeling overwhelmed by ODD is a normal reaction, not a sign of failure. Every situation noted here is a step towards a better understanding.'
      : (lang === 'ro'
        ? '🤝 <strong>Nu sunteți singur(ă).</strong> Să vă simțiți copleșit(ă) în fața TOP este o reacție normală, nu un semn de eșec. Fiecare situație notată aici este un pas spre o mai bună înțelegere.'
        : '🤝 <strong>Vous n\'êtes pas seul(e).</strong> Se sentir dépassé(e) face au TOP est une réaction normale, pas un signe d\'échec. Chaque situation notée ici est un pas vers une meilleure compréhension.');
  } else if (q.parent === 'frustre') {
    parentMsg = lang === 'en'
      ? '💪 <strong>Frustration is human.</strong> Recognizing your own emotion is already a valuable skill. Remember to take a 30-second breathing space before intervening next time.'
      : (lang === 'ro'
        ? '💪 <strong>Frustrarea este umană.</strong> Să vă recunoașteți propria emoție este deja o abilitate valoroasă. Gândiți-vă să respirați adânc timp de 30 de secunde înainte de a interveni data viitoare.'
        : '💪 <strong>La frustration est humaine.</strong> Reconnaître votre propre émotion est déjà une compétence précieuse. Pensez à prendre 30 secondes de respiration avant d\'intervenir la prochaine fois.');
  } else {
    parentMsg = lang === 'en'
      ? '🌟 <strong>Congratulations on your calm.</strong> Keeping your cool in the face of opposition is one of the most difficult — and most effective — skills of the Barkley method.'
      : (lang === 'ro'
        ? '🌟 <strong>Felicitări pentru calmul dumneavoastră.</strong> Să vă păstrați calmul în fața opoziției este una dintre cele mai dificile — și cele mai eficiente — abilități ale metodei Barkley.'
        : '🌟 <strong>Bravo pour votre calme.</strong> Garder son calme face à l\'opposition est l\'une des compétences les plus difficiles — et les plus efficaces — de la méthode Barkley.');
  }
  blocks.push(`<div class="soutien-block soutien-parent">${parentMsg}</div>`);

  // ── BLOC 2 : Analyse de la stratégie ──────────────────────────────
  let strategieMsg = '';
  if (strategie.includes('Choix limité')) {
    strategieMsg = lang === 'en'
      ? '💡 <strong>Limited choice:</strong> Offering a maximum of 2 options (e.g., "Pajamas before or after brushing teeth?") gives the child a sense of control without losing the core rule.'
      : (lang === 'ro'
        ? '💡 <strong>Alegere limitată:</strong> Propunerea a maximum 2 opțiuni (de ex: „Pijama înainte sau după spălatul pe dinți?”) îi redă copilului un sentiment de control fără a pierde din vedere instrucțiunea.'
        : '💡 <strong>Choix limité :</strong> Proposer 2 options max (ex: "Pyjama avant ou après le brossage ?") redonne à l\'enfant un sentiment de contrôle sans perdre le fond de la consigne.');
  } else if (strategie.includes('Renforcement positif')) {
    strategieMsg = lang === 'en'
      ? '✨ <strong>Positive reinforcement:</strong> Immediately and warmly praise even the smallest step towards cooperation. "You started well, bravo!" is worth more than 10 reminders.'
      : (lang === 'ro'
        ? '✨ <strong>Consolidare pozitivă:</strong> Lăudați imediat și cu căldură chiar și cel mai mic pas spre cooperare. „Ai început bine, bravo!” valorează mai mult decât 10 reamintiri.'
        : '✨ <strong>Renforcement positif :</strong> Félicitez immédiatement et chaleureusement même le tout petit pas vers la coopération. "Tu as bien commencé, bravo !" vaut plus que 10 rappels.');
  } else if (strategie.includes('Ignorer activement')) {
    strategieMsg = lang === 'en'
      ? '🔇 <strong>Active ignoring:</strong> Avoid all visual or verbal contact with the behavior. It is difficult, but it is what "extinguishes" the behavior over the long term.'
      : (lang === 'ro'
        ? '🔇 <strong>Ignorare activă:</strong> Evitați orice contact vizual sau verbal cu comportamentul. Este dificil, dar este ceea ce „stinge” comportamentul pe termen lung.'
        : '🔇 <strong>Ignorer activement :</strong> Évitez tout contact visuel ou verbal avec le comportement. C\'est difficile, mais c\'est ce qui "éteint" le comportement sur le long terme.');
  } else if (strategie.includes('Consigne claire')) {
    strategieMsg = lang === 'en'
      ? '📢 <strong>Short instruction:</strong> A maximum of 1 instruction at a time, formulated positively ("Put away your bag" rather than "Stop leaving things around"). A visual support (post-it, image) increases effectiveness.'
      : (lang === 'ro'
        ? '📢 <strong>Instrucțiune scurtă:</strong> Maximum 1 instrucțiune pe rând, formulată pozitiv („Pune-ți ghiozdanul la loc” în loc de „Nu mai lăsa lucrurile împrăștiate”). Un support vizual (post-it, imagine) sporește eficiența.'
        : '📢 <strong>Consigne courte :</strong> Max 1 consigne à la fois, formulée positivement ("Range ton sac" plutôt que "Arrête de laisser traîner"). Un support visuel (post-it, image) renforce l\'efficacité.');
  } else if (strategie.includes('spontanée')) {
    strategieMsg = lang === 'en'
      ? '🔴 <strong>Spontaneous reaction:</strong> Frontal conflicts feed resistance. Next time, try leaving the room for 60 seconds to defuse the situation before resuming the instruction.'
      : (lang === 'ro'
        ? '🔴 <strong>Reacție spontană:</strong> Conflictele frontale alimentează rezistența. Data viitoare, încercați să ieșiți din cameră timp de 60 de secunde pentru a dezamorsa situația înainte de a relua instrucțiunea.'
        : '🔴 <strong>Réaction spontanée :</strong> Les conflits frontaux alimentent la résistance. Pour la prochaine fois, essayez de sortir de la pièce 60 secondes pour désamorcer avant de reprendre la consigne.');
  } else {
    strategieMsg = lang === 'en'
      ? '📌 Keep observing and experimenting with different strategies to find what works best with your child.'
      : (lang === 'ro'
        ? '📌 Continuați să observați și să experimentați diferite strategii pentru a găsi ceea ce funcționează cel mai bine pentru copilul dumneavoastră.'
        : '📌 Continuez à observer et expérimenter les différentes stratégies pour trouver ce qui fonctionne le mieux avec votre enfant.');
  }

  // Ajout basé sur la résolution
  if (q.resolution === 'non') {
    strategieMsg += lang === 'en'
      ? ' <em>As the situation was not resolved, consider noting this trigger to discuss it with a specialist.</em>'
      : (lang === 'ro'
        ? ' <em>Situația nefiind rezolvată, luați în considerare notarea acestui declanșator pentru a discuta cu un specialist.</em>'
        : ' <em>La situation n\'ayant pas été résolue, envisagez de noter ce déclencheur pour en parler avec un spécialiste.</em>');
  } else if (q.resolution === 'oui_long') {
    strategieMsg += lang === 'en'
      ? ' <em>Even if it took time, you went all the way through — that is what matters.</em>'
      : (lang === 'ro'
        ? ' <em>Chiar dacă a durat mult timp, ați mers până la capăt — asta este ceea ce contează.</em>'
        : ' <em>Même si ça a pris du temps, vous êtes allé jusqu\'au bout — c\'est ce qui compte.</em>');
  }
  blocks.push(`<div class="soutien-block soutien-strategie">${strategieMsg}</div>`);

  // ── BLOC 3 : Conseil ciblé sur les réactions + contexte ───────────
  const conseils = [];

  if (reactions && reactions.length > 0) {
    if (reactions.some(r => r.includes('Crie'))) {
      conseils.push(lang === 'en'
        ? 'Lower your own voice volume — studies show that speaking softer "draws" the child\'s attention'
        : (lang === 'ro'
          ? 'Reduceți volumul propriei voci — studiile arată că vorbitul mai încet „atrage” atenția copilului'
          : 'Baissez votre propre volume vocal — les études montrent que parler plus doucement "aspire" l\'attention de l\'enfant')
      );
    }
    if (reactions.some(r => r.includes('Non'))) {
      conseils.push(lang === 'en'
        ? 'In case of refusal, do not repeat the same phrasing: try a limited choice or leave a short 5-second silence'
        : (lang === 'ro'
          ? 'În caz de refuz, nu repetați aceeași formulare: încercați alegerea limitată sau lăsați o scurtă tăcere de 5 secunde'
          : 'Face au refus, ne répétez pas la même formulation : essayez le choix limité ou laissez un court silence de 5 secondes')
      );
    }
    if (reactions.some(r => r.includes('Négocie'))) {
      conseils.push(lang === 'en'
        ? 'To end the negotiation, repeat the exact same phrase word for word, without variation, up to 3 times (broken record)'
        : (lang === 'ro'
          ? 'Pentru a încheia negocierea, repetați aceeași frază cuvânt cu cuvânt, fără variații, de până la 3 ori (placă stricată)'
          : 'Pour clore la négociation, répétez la même phrase mot pour mot, sans variation, jusqu\'à 3 fois (disque rayé)')
      );
    }
    if (reactions.some(r => r.includes('Fuit'))) {
      conseils.push(lang === 'en'
        ? 'Do not chase a fleeing child. Stay visible at a distance, keep calm and wait for 1 minute before resuming'
        : (lang === 'ro'
          ? 'Nu urmăriți copilul care fuge. Rămâneți vizibil la distanță, păstrați calmul și așteptați 1 minut înainte de a relua'
          : 'Ne courez pas après l\'enfant qui fuit. Restez visible à distance, gardez votre calme et attendez 1 minute avant de reprendre')
      );
    }
    if (reactions.some(r => r.includes('Ignore'))) {
      conseils.push(lang === 'en'
        ? 'First capture attention through a gentle physical contact (hand on the shoulder) before giving the instruction'
        : (lang === 'ro'
          ? 'Captați mai întâi atenția printr-un contact fizic blând (mâna pe umăr) înainte de a enunța instrucțiunea'
          : 'Captez d\'abord l\'attention par un contact physique doux (main sur l\'épaule) avant d\'énoncer la consigne')
      );
    }
  }

  if (q.contexte === 'retour_ecole') {
    conseils.push(lang === 'en'
      ? 'After school, systematically plan 20 minutes of free decompression before any requests'
      : (lang === 'ro'
        ? 'După școală, planificați sistematic 20 de minute de decompresie liberă înainte de orice solicitare'
        : 'Après l\'école, prévoyez systématiquement 20 min de décompression libre avant toute demande')
    );
  }
  if (q.contexte === 'fatigue') {
    conseils.push(lang === 'en'
      ? 'Fatigue amplifies all symptoms: simplify or postpone non-urgent requests'
      : (lang === 'ro'
        ? 'Oboseala amplifică toate simptomele: simplificați sau amânați solicitările care nu sunt urgente'
        : 'La fatigue amplifie tous les symptômes : simplifiez ou reportez les demandes non urgentes')
    );
  }
  if (q.contexte === 'faim') {
    conseils.push(lang === 'en'
      ? 'Offer a snack before approaching a request — blood sugar level directly influences self-regulation'
      : (lang === 'ro'
        ? 'Oferiți o gustare înainte de a aborda o solicitare — glicemia influențează direct autoreglarea'
        : 'Proposez une collation avant d\'aborder une demande — la glycémie influence directement l\'autorégulation')
    );
  }
  if (q.contexte === 'transition') {
    conseils.push(lang === 'en'
      ? 'Announce transitions 5 minutes before (visual or verbal timer) to prepare the brain for the transition to action'
      : (lang === 'ro'
        ? 'Anunțați tranzițiile cu 5 minute înainte (cronometru vizual sau verbal) pentru a pregăti creierul pentru trecerea la acțiune'
        : 'Annoncez les transitions 5 minutes avant (minuteur visuel ou verbal) pour préparer le cerveau du passage à l\'action')
    );
  }

  if (parseInt(intensity) >= 4 && conseils.length === 0) {
    conseils.push(lang === 'en'
      ? 'In case of high intensity, secure the space, take a step back, and talk about it 30 minutes after the crisis'
      : (lang === 'ro'
        ? 'În caz de intensitate mare, securizați spațiul, faceți un pas înapoi și discutați despre asta la 30 de minute după criză'
        : 'En cas de forte intensité, sécurisez l\'espace, prenez du recul et reparlez-en 30 minutes après la crise')
    );
  }

  if (conseils.length > 0) {
    const conseilHtml = conseils.map(c => `<li>${c}.</li>`).join('');
    blocks.push(`<div class="soutien-block soutien-conseil"><strong>${translations[lang].concretaActions}</strong><ul class="soutien-list">${conseilHtml}</ul></div>`);
  }

  return blocks.join('');
}

function loadLogEntries() {
  const lang = document.documentElement.lang || 'fr';
  const listElement = document.getElementById('log-history-list');
  if (!listElement) return;

  const entries = JSON.parse(localStorage.getItem('tdah_log_entries') || '[]');
  
  if (entries.length === 0) {
    listElement.innerHTML = `<p class="no-log-msg">${translations[lang].noLogMsg}</p>`;
    return;
  }

  let html = '';
  entries.forEach((entry, idx) => {
    let rxList = translations[lang].reactions['Aucune renseignée'];
    if (entry.reactions && entry.reactions.length > 0) {
      rxList = entry.reactions.map(r => translations[lang].reactions[r] || r).join(', ');
    }
    
    const adviceHtml = entry.soutien
      ? entry.soutien
      : generateSoutien(entry.demande, entry.intensity, entry.strategie, entry.reactions || [], entry.questionnaire || {});

    // Build questionnaire summary tags
    const q = entry.questionnaire || {};
    const parentLabel = translations[lang].parentState[q.parent] || '';
    const resolutionLabel = translations[lang].resolutionState[q.resolution] || '';
    const contexteLabel = translations[lang].contextState[q.contexte] || '';
    const qTags = [parentLabel, resolutionLabel, contexteLabel].filter(Boolean).map(t => `<span class="entry-context-tag">${t}</span>`).join('');
    
    const demandeTrad = translations[lang].demande[entry.demande] || entry.demande;
    const strategieTrad = translations[lang].strategie[entry.strategie] || entry.strategie;
    
    html += `
      <div class="log-entry-card" data-idx="${idx}">
        <div class="log-entry-header">
          <span class="log-entry-date">📅 ${translations[lang].recordedOn} ${entry.date}</span>
          <div class="log-entry-actions">
            <button class="log-share-btn" onclick="shareLogEntry(${idx})" title="${translations[lang].shareDesc}">🔗</button>
            <button class="log-delete-btn" onclick="deleteLogEntry(${idx})" title="${translations[lang].deleteDesc}">🗑️</button>
          </div>
        </div>
        <div class="log-entry-body">
          <p style="margin: 0.25rem 0;"><strong>${translations[lang].labelConsigne} :</strong> ${demandeTrad}</p>
          <p style="margin: 0.25rem 0;"><strong>${translations[lang].labelIntensity} :</strong> <span class="intensity-badge intensity-${entry.intensity}">${entry.intensity}/5</span></p>
          <p style="margin: 0.25rem 0;"><strong>${translations[lang].labelReaction} :</strong> ${rxList}</p>
          <p style="margin: 0.25rem 0;"><strong>${translations[lang].labelStrategie} :</strong> ${strategieTrad}</p>
          ${qTags ? `<div class="entry-context-tags">${qTags}</div>` : ''}
          
          <div class="soutien-box">
            <div class="soutien-title">${translations[lang].soutienTitle}</div>
            <div class="soutien-text">${adviceHtml}</div>
          </div>
        </div>
      </div>
    `;
  });
  listElement.innerHTML = html;
}

function addLogEntry(event) {
  event.preventDefault();
  const lang = document.documentElement.lang || 'fr';

  const demandeEl = document.getElementById('log-demande');
  const strategieEl = document.getElementById('log-strategie');
  const intensityEl = document.querySelector('input[name="intensity"]:checked');

  // Guard: all required fields must be present
  if (!demandeEl || !demandeEl.value) {
    alert(translations[lang].alertDemande);
    return;
  }
  if (!intensityEl) {
    alert(translations[lang].alertIntensity);
    return;
  }
  if (!strategieEl || !strategieEl.value) {
    alert(translations[lang].alertStrategie);
    return;
  }

  const demande = demandeEl.value;
  const intensity = intensityEl.value;
  const strategie = strategieEl.value;

  // Get child reactions (checkboxes)
  const reactions = Array.from(document.querySelectorAll('input[name="reaction"]:checked')).map(cb => cb.value);

  // Get questionnaire answers (radios)
  const qParent = (document.querySelector('input[name="q-parent"]:checked') || {}).value || '';
  const qResolution = (document.querySelector('input[name="q-resolution"]:checked') || {}).value || '';
  const qContexte = (document.querySelector('input[name="q-contexte"]:checked') || {}).value || '';
  const questionnaire = { parent: qParent, resolution: qResolution, contexte: qContexte };

  const locale = lang === 'en' ? 'en-US' : (lang === 'ro' ? 'ro-RO' : 'fr-FR');
  const date = new Date().toLocaleDateString(locale, {
    day: 'numeric',
    month: 'short',
    hour: '2-digit',
    minute: '2-digit'
  });

  let entries;
  try {
    entries = JSON.parse(localStorage.getItem('tdah_log_entries') || '[]');
    if (!Array.isArray(entries)) entries = [];
  } catch (e) {
    entries = [];
  }

  const soutien = generateSoutien(demande, intensity, strategie, reactions, questionnaire);

  entries.unshift({
    date,
    demande,
    intensity,
    strategie,
    reactions,
    questionnaire,
    soutien
  });

  try {
    localStorage.setItem('tdah_log_entries', JSON.stringify(entries));
  } catch (e) {
    alert(translations[lang].alertStorageError);
    return;
  }

  // Reset form
  document.getElementById('log-form').reset();

  // Reload list
  loadLogEntries();
}

function deleteLogEntry(idx) {
  const lang = document.documentElement.lang || 'fr';
  if (!confirm(translations[lang].deleteConfirm)) return;

  let entries;
  try {
    entries = JSON.parse(localStorage.getItem('tdah_log_entries') || '[]');
    if (!Array.isArray(entries)) entries = [];
  } catch (e) {
    entries = [];
  }

  entries.splice(idx, 1);

  try {
    localStorage.setItem('tdah_log_entries', JSON.stringify(entries));
  } catch (e) {
    console.error('deleteLogEntry: localStorage write failed', e);
  }

  loadLogEntries();
}

function shareLogEntry(idx) {
  const lang = document.documentElement.lang || 'fr';
  let entries;
  try {
    entries = JSON.parse(localStorage.getItem('tdah_log_entries') || '[]');
    if (!Array.isArray(entries)) entries = [];
  } catch (e) {
    entries = [];
  }

  const entry = entries[idx];
  if (!entry) return;

  const q = entry.questionnaire || {};
  const parentLabel = translations[lang].parentState[q.parent] || '';
  const resolutionLabel = translations[lang].resolutionState[q.resolution] || '';
  const contexteLabel = translations[lang].contextState[q.contexte] || '';
  
  let rxList = translations[lang].reactions['Aucune'];
  if (entry.reactions && entry.reactions.length > 0) {
    rxList = entry.reactions.map(r => translations[lang].reactions[r] || r).join(', ');
  }
  
  const demandeTrad = translations[lang].demande[entry.demande] || entry.demande;
  const strategieTrad = translations[lang].strategie[entry.strategie] || entry.strategie;

  const lines = [
    `📅 ${entry.date}`,
    ``,
    `📋 ${translations[lang].shareHeader}`,
    ``,
    `${translations[lang].labelConsigne} : ${demandeTrad}`,
    `${translations[lang].labelIntensity} : ${entry.intensity}/5`,
    `${translations[lang].labelReaction} : ${rxList}`,
    `${translations[lang].labelStrategie} : ${strategieTrad}`,
    parentLabel ? `${translations[lang].shareStateParent} : ${parentLabel}` : null,
    resolutionLabel ? `${translations[lang].shareResolution} : ${resolutionLabel}` : null,
    contexteLabel ? `${translations[lang].shareContext} : ${contexteLabel}` : null,
    ``,
    `${translations[lang].shareFooter} · ${window.location.hostname}`
  ].filter(l => l !== null);

  const text = lines.join('\n');
  const title = translations[lang].shareTitle;

  // Web Share API (mobile / modern browsers)
  if (navigator.share) {
    navigator.share({ title, text })
      .catch(err => { if (err.name !== 'AbortError') console.warn('share error', err); });
    return;
  }

  // Fallback: copy to clipboard
  navigator.clipboard.writeText(text).then(() => {
    const btn = document.querySelector(`.log-entry-card[data-idx="${idx}"] .log-share-btn`);
    if (btn) {
      const original = btn.textContent;
      btn.textContent = '✅';
      btn.classList.add('copied');
      setTimeout(() => {
        btn.textContent = original;
        btn.classList.remove('copied');
      }, 1800);
    }
  }).catch(() => {
    prompt(translations[lang].copyText, text);
  });
}

// Toggle Worksheets
function toggleWorksheet(headerElement) {
  const card = headerElement.closest('.worksheet-card');
  card.classList.toggle('expanded');
}

// Page active status check in TOC Sidebar
function highlightActiveNav() {
  const tocLinks = document.querySelectorAll('#toc-nav a');
  const currentPath = window.location.pathname;
  
  tocLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    const item = link.closest('li');
    item.classList.remove('active');
    
    // Check if the current URL matches the link path
    if (currentPath === linkPath || (linkPath !== '/' && currentPath.endsWith(linkPath))) {
      item.classList.add('active');
    }
  });
}

// Search bar functionality
function initSearch() {
  const searchInput = document.getElementById('site-search');
  if (!searchInput) return;
  
  searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase().trim();
    const cards = document.querySelectorAll('.criteria-card, .tiktok-card, .worksheet-card, .comm-card, .matrix-card, .book-card, .portal-card, section p');
    const sections = document.querySelectorAll('section');
    
    if (query === '') {
      cards.forEach(card => {
        card.style.display = '';
        removeHighlights(card);
      });
      sections.forEach(sec => sec.style.display = '');
      return;
    }

    sections.forEach(section => {
      let sectionMatches = false;
      const sectionCards = section.querySelectorAll('.criteria-card, .tiktok-card, .worksheet-card, .comm-card, .matrix-card, .book-card, .portal-card, p');
      
      sectionCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        if (text.includes(query)) {
          card.style.display = '';
          sectionMatches = true;
          
          // Expand worksheets if they match
          if (card.classList.contains('worksheet-card')) {
            card.classList.add('expanded');
          }
          
          highlightText(card, query);
        } else {
          const parentCard = card.closest('.worksheet-card');
          if (parentCard && parentCard.textContent.toLowerCase().includes(query)) {
            card.style.display = '';
          } else {
            card.style.display = 'none';
          }
        }
      });

      if (sectionMatches || section.querySelector('h2').textContent.toLowerCase().includes(query)) {
        section.style.display = '';
      } else {
        section.style.display = 'none';
      }
    });
  });
}

// Helper functions for search highlighting
function highlightText(element, query) {
  removeHighlights(element);
  if (element.children.length > 0) {
    Array.from(element.children).forEach(child => {
      if (!child.classList.contains('chevron-icon') && !child.classList.contains('criteria-icon') && child.tagName !== 'INPUT' && child.tagName !== 'TEXTAREA') {
        highlightText(child, query);
      }
    });
    return;
  }
  
  const text = element.textContent;
  const regex = new RegExp(`(${escapeRegExp(query)})`, 'gi');
  if (regex.test(text)) {
    const newHtml = text.replace(regex, '<span class="search-highlight">$1</span>');
    element.innerHTML = newHtml;
  }
}

function removeHighlights(element) {
  const highlights = element.querySelectorAll('.search-highlight');
  highlights.forEach(hl => {
    const parent = hl.parentNode;
    parent.replaceChild(document.createTextNode(hl.textContent), hl);
    parent.normalize();
  });
}

function escapeRegExp(string) {
  return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

// Cookie Consent Banner (RGPD)
function initCookieBanner() {
  const lang = document.documentElement.lang || 'fr';
  const consent = localStorage.getItem('tdah_cookies_consent');
  if (consent === 'true') return;

  const banner = document.createElement('div');
  banner.className = 'cookie-banner';
  banner.id = 'cookie-consent-banner';
  banner.innerHTML = `
    <p class="cookie-text">
      ${translations[lang].cookieText}
    </p>
    <div class="cookie-actions">
      <button class="btn-action primary cookie-btn" id="btn-accept-cookies">${translations[lang].cookieAccept}</button>
    </div>
  `;

  document.body.appendChild(banner);

  const acceptBtn = document.getElementById('btn-accept-cookies');
  if (acceptBtn) {
    acceptBtn.addEventListener('click', () => {
      localStorage.setItem('tdah_cookies_consent', 'true');
      banner.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
      banner.style.opacity = '0';
      banner.style.transform = 'translate(-50%, 10px)';
      setTimeout(() => {
        banner.remove();
      }, 300);
    });
  }
}

// Mobile menu toggle logic
function initMobileMenu() {
  const lang = document.documentElement.lang || 'fr';
  const navElement = document.querySelector('.header-nav.sticky-nav');
  const container = document.querySelector('.sticky-nav-container');
  if (!navElement || !container) return;

  // Create mobile menu trigger button
  const trigger = document.createElement('button');
  trigger.className = 'mobile-menu-trigger';
  trigger.setAttribute('aria-expanded', 'false');
  trigger.setAttribute('aria-label', translations[lang].menuLabel);
  trigger.innerHTML = `<span class="menu-icon">☰</span> <span class="menu-text">${translations[lang].menuText}</span>`;
  
  // Insert at the beginning of the sticky-nav-container
  container.insertBefore(trigger, container.firstChild);

  trigger.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = navElement.classList.contains('menu-open');
    if (isOpen) {
      navElement.classList.remove('menu-open');
      trigger.setAttribute('aria-expanded', 'false');
      trigger.querySelector('.menu-icon').textContent = '☰';
      trigger.querySelector('.menu-text').textContent = translations[lang].menuText;
    } else {
      navElement.classList.add('menu-open');
      trigger.setAttribute('aria-expanded', 'true');
      trigger.querySelector('.menu-icon').textContent = '✕';
      trigger.querySelector('.menu-text').textContent = translations[lang].menuClose;
    }
  });

  // Close menu when clicking on a link inside the nav
  const navLinks = container.querySelectorAll('.nav-horizontal a');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navElement.classList.remove('menu-open');
      trigger.setAttribute('aria-expanded', 'false');
      trigger.querySelector('.menu-icon').textContent = '☰';
      trigger.querySelector('.menu-text').textContent = translations[lang].menuText;
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!navElement.contains(e.target) && navElement.classList.contains('menu-open')) {
      navElement.classList.remove('menu-open');
      trigger.setAttribute('aria-expanded', 'false');
      trigger.querySelector('.menu-icon').textContent = '☰';
      trigger.querySelector('.menu-text').textContent = translations[lang].menuText;
    }
  });
}

// Language dropdown interactive logic
function initLangDropdown() {
  const container = document.querySelector('.lang-dropdown');
  const btn = document.getElementById('lang-dropdown-btn');
  if (!container || !btn) return;

  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = container.classList.contains('active');
    if (isOpen) {
      container.classList.remove('active');
      btn.setAttribute('aria-expanded', 'false');
    } else {
      container.classList.add('active');
      btn.setAttribute('aria-expanded', 'true');
    }
  });

  document.addEventListener('click', (e) => {
    if (!container.contains(e.target)) {
      container.classList.remove('active');
      btn.setAttribute('aria-expanded', 'false');
    }
  });
}

// Back to top visibility
window.addEventListener('scroll', () => {
  const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
  const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrolled = (winScroll / height) * 100;
  
  const progressBar = document.getElementById('progress-bar');
  if (progressBar) progressBar.style.width = scrolled + '%';
  
  const backToTopBtn = document.getElementById('btn-back-to-top');
  if (backToTopBtn) {
    if (winScroll > 300) {
      backToTopBtn.classList.add('show');
    } else {
      backToTopBtn.classList.remove('show');
    }
  }
});

// Interactive Criteria Quiz Logic
function toggleCriteriaQuiz(cardElement, event) {
  if (event.target.closest('.criteria-quiz')) return;
  cardElement.classList.toggle('expanded');
}

function evaluateQuiz(inputElement) {
  const lang = document.documentElement.lang || 'fr';
  const value = inputElement.value;
  const quizDiv = inputElement.closest('.criteria-quiz');
  const resultDiv = quizDiv.querySelector('.quiz-result');
  
  let text = '';
  let statusClass = '';
  
  if (value === 'safe') {
    text = translations[lang].quizSafe;
    statusClass = 'safe';
  } else if (value === 'moderate') {
    text = translations[lang].quizModerate;
    statusClass = 'moderate';
  } else if (value === 'warning') {
    text = translations[lang].quizWarning;
    statusClass = 'warning';
  }
  
  resultDiv.innerHTML = text;
  resultDiv.className = 'quiz-result show ' + statusClass;
}

// Interactive Department Contact Selector
function initDeptSelector() {
  const lang = document.documentElement.lang || 'fr';
  const inputDept = document.getElementById('select-dept');
  const suggestionsDiv = document.getElementById('custom-suggestions');
  if (!inputDept || !suggestionsDiv) return;

  const depts = [
    { code: '01', name: 'Ain', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '02', name: 'Aisne', region: 'Hauts-de-France', url: 'https://www.tdah-france.fr/hauts-de-france.html' },
    { code: '03', name: 'Allier', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '04', name: 'Alpes-de-Haute-Provence', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '05', name: 'Hautes-Alpes', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '06', name: 'Alpes-Maritimes', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '07', name: 'Ardèche', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '08', name: 'Ardennes', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '09', name: 'Ariège', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '10', name: 'Aube', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '11', name: 'Aude', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '12', name: 'Aveyron', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '13', name: 'Bouches-du-Rhône', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '14', name: 'Calvados', region: 'Normandie', url: 'https://www.tdah-france.fr/normandie.html' },
    { code: '15', name: 'Cantal', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '16', name: 'Charente', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '17', name: 'Charente-Maritime', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '18', name: 'Cher', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '19', name: 'Corrèze', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '2A', name: 'Corse-du-Sud', region: 'Corse', url: 'https://www.tdah-france.fr/corse.html' },
    { code: '2B', name: 'Haute-Corse', region: 'Corse', url: 'https://www.tdah-france.fr/corse.html' },
    { code: '21', name: 'Côte-d\'Or', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '22', name: 'Côtes-d\'Armor', region: 'Bretagne', url: 'https://www.tdah-france.fr/bretagne.html' },
    { code: '23', name: 'Creuse', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '24', name: 'Dordogne', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '25', name: 'Doubs', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '26', name: 'Drôme', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '27', name: 'Eure', region: 'Normandie', url: 'https://www.tdah-france.fr/normandie.html' },
    { code: '28', name: 'Eure-et-Loir', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '29', name: 'Finistère', region: 'Bretagne', url: 'https://www.tdah-france.fr/bretagne.html' },
    { code: '30', name: 'Gard', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '31', name: 'Haute-Garonne', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '32', name: 'Gers', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '33', name: 'Gironde', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '34', name: 'Hérault', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '35', name: 'Ille-et-Vilaine', region: 'Bretagne', url: 'https://www.tdah-france.fr/bretagne.html' },
    { code: '36', name: 'Indre', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '37', name: 'Indre-et-Loire', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '38', name: 'Isère', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '39', name: 'Jura', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '40', name: 'Landes', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '41', name: 'Loir-et-Cher', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '42', name: 'Loire', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '43', name: 'Haute-Loire', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '44', name: 'Loire-Atlantique', region: 'Pays de la Loire', url: 'https://www.tdah-france.fr/pays-de-la-loire.html' },
    { code: '45', name: 'Loiret', region: 'Centre-Val de Loire', url: 'https://www.tdah-france.fr/centre-val-de-loire.html' },
    { code: '46', name: 'Lot', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '47', name: 'Lot-et-Garonne', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '48', name: 'Lozère', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '49', name: 'Maine-et-Loire', region: 'Pays de la Loire', url: 'https://www.tdah-france.fr/pays-de-la-loire.html' },
    { code: '50', name: 'Manche', region: 'Normandie', url: 'https://www.tdah-france.fr/normandie.html' },
    { code: '51', name: 'Marne', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '52', name: 'Haute-Marne', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '53', name: 'Mayenne', region: 'Pays de la Loire', url: 'https://www.tdah-france.fr/pays-de-la-loire.html' },
    { code: '54', name: 'Meurthe-et-Moselle', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '55', name: 'Meuse', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '56', name: 'Morbihan', region: 'Bretagne', url: 'https://www.tdah-france.fr/bretagne.html' },
    { code: '57', name: 'Moselle', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '58', name: 'Nièvre', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '59', name: 'Nord', region: 'Hauts-de-France', url: 'https://www.tdah-france.fr/hauts-de-france.html' },
    { code: '60', name: 'Oise', region: 'Hauts-de-France', url: 'https://www.tdah-france.fr/hauts-de-france.html' },
    { code: '61', name: 'Orne', region: 'Normandie', url: 'https://www.tdah-france.fr/normandie.html' },
    { code: '62', name: 'Pas-de-Calais', region: 'Hauts-de-France', url: 'https://www.tdah-france.fr/hauts-de-france.html' },
    { code: '63', name: 'Puy-de-Dôme', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '64', name: 'Pyrénées-Atlantiques', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '65', name: 'Hautes-Pyrénées', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '66', name: 'Pyrénées-Orientales', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '67', name: 'Bas-Rhin', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '68', name: 'Haut-Rhin', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '69', name: 'Rhône', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '70', name: 'Haute-Saône', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '71', name: 'Saône-et-Loire', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '72', name: 'Sarthe', region: 'Pays de la Loire', url: 'https://www.tdah-france.fr/pays-de-la-loire.html' },
    { code: '73', name: 'Savoie', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '74', name: 'Haute-Savoie', region: 'Auvergne-Rhône-Alpes', url: 'https://www.tdah-france.fr/auvergne-rhone-alpes.html' },
    { code: '75', name: 'Paris', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '76', name: 'Seine-Maritime', region: 'Normandie', url: 'https://www.tdah-france.fr/normandie.html' },
    { code: '77', name: 'Seine-et-Marne', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '78', name: 'Yvelines', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '79', name: 'Deux-Sèvres', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '80', name: 'Somme', region: 'Hauts-de-France', url: 'https://www.tdah-france.fr/hauts-de-france.html' },
    { code: '81', name: 'Tarn', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '82', name: 'Tarn-et-Garonne', region: 'Occitanie', url: 'https://www.tdah-france.fr/occitanie.html' },
    { code: '83', name: 'Var', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '84', name: 'Vaucluse', region: 'Provence-Alpes-Côte d\'Azur', url: 'https://www.tdah-france.fr/provence-alpes-cote-d-azur.html' },
    { code: '85', name: 'Vendée', region: 'Pays de la Loire', url: 'https://www.tdah-france.fr/pays-de-la-loire.html' },
    { code: '86', name: 'Vienne', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '87', name: 'Haute-Vienne', region: 'Nouvelle-Aquitaine', url: 'https://www.tdah-france.fr/nouvelle-aquitaine.html' },
    { code: '88', name: 'Vosges', region: 'Grand Est', url: 'https://www.tdah-france.fr/grand-est.html' },
    { code: '89', name: 'Yonne', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '90', name: 'Territoire de Belfort', region: 'Bourgogne-Franche-Comté', url: 'https://www.tdah-france.fr/bourgogne-franche-comte.html' },
    { code: '91', name: 'Essonne', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '92', name: 'Hauts-de-Seine', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '93', name: 'Seine-Saint-Denis', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '94', name: 'Val-de-Marne', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '95', name: 'Val-d\'Oise', region: 'Île-de-France', url: 'https://www.tdah-france.fr/ile-de-france.html' },
    { code: '971', name: 'Guadeloupe', region: 'Guadeloupe (Outre-Mer)', url: 'https://www.tdah-france.fr/-Contact-Regions-.html' },
    { code: '972', name: 'Martinique', region: 'Martinique (Outre-Mer)', url: 'https://www.tdah-france.fr/-Contact-Regions-.html' },
    { code: '973', name: 'Guyane', region: 'Guyane (Outre-Mer)', url: 'https://www.tdah-france.fr/-Contact-Regions-.html' },
    { code: '974', name: 'La Réunion', region: 'La Réunion (Outre-Mer)', url: 'https://www.tdah-france.fr/-Contact-Regions-.html' },
    { code: '976', name: 'Mayotte', region: 'Mayotte (Outre-Mer)', url: 'https://www.tdah-france.fr/-Contact-Regions-.html' }
  ];

  // Helper function to normalize strings for comparison (removes spaces, hyphens, accents)
  function normalizeString(str) {
    if (!str) return '';
    return str
      .normalize("NFD")
      .replace(/[\u0300-\u036f]/g, "")
      .toLowerCase()
      .replace(/[^a-z0-9]/g, '');
  }

  // Helper function to update suggestions dynamically, limited to 7 items
  function updateCustomSuggestions(inputVal) {
    suggestionsDiv.innerHTML = '';
    
    let matches = [];
    if (!inputVal) {
      matches = depts.slice(0, 7);
    } else {
      const search = normalizeString(inputVal);
      matches = depts.filter(d => 
        normalizeString(d.name).includes(search) || 
        normalizeString(d.code).includes(search)
      ).slice(0, 7);
    }

    if (matches.length === 0) {
      suggestionsDiv.style.display = 'none';
      return;
    }

    matches.forEach(dept => {
      const item = document.createElement('div');
      item.className = 'suggestion-item';
      item.textContent = `${dept.name} - (${dept.code})`;
      item.onclick = function() {
        window.selectSuggestion(`${dept.name} - (${dept.code})`);
      };
      suggestionsDiv.appendChild(item);
    });

    suggestionsDiv.style.display = 'block';
  }

  // Handle suggestion selection
  window.selectSuggestion = function(val) {
    inputDept.value = val;
    suggestionsDiv.style.display = 'none';
    window.updateDeptContact();
  };

  // Listeners for focus and blur to show/hide suggestions box in flow
  inputDept.addEventListener('focus', () => {
    updateCustomSuggestions(inputDept.value.trim());
  });

  inputDept.addEventListener('blur', () => {
    // Delay to allow clicking suggestions before hiding
    setTimeout(() => {
      suggestionsDiv.style.display = 'none';
    }, 250);
  });

  // Event listener for input changes
  window.updateDeptContact = function() {
    const inputVal = inputDept.value.trim();
    
    // Update the suggestion elements dynamically in the custom flow container
    updateCustomSuggestions(inputVal);
    
    const resultBox = document.getElementById('dept-result-box');
    const title = document.getElementById('dept-title');
    const text = document.getElementById('dept-text');
    const link = document.getElementById('dept-link');

    if (!inputVal) {
      if (resultBox) resultBox.style.display = 'none';
      return;
    }

    // Extract digits and letters for robust matching
    const searchVal = normalizeString(inputVal);
    const inputDigits = inputVal.replace(/\D/g, ''); // Extract all digits
    const inputLetters = normalizeString(inputVal.replace(/[0-9]/g, '')); // Extract letters only

    let selected = null;

    // 1. Exact match on normalized full string to code or name
    selected = depts.find(d => 
      normalizeString(d.code) === searchVal || 
      normalizeString(d.name) === searchVal
    );

    // 2. Exact match on extracted digits (handling single digit padding)
    if (!selected && inputDigits) {
      let paddedDigit = inputDigits;
      if (inputDigits.length === 1) {
        paddedDigit = '0' + inputDigits;
      }
      selected = depts.find(d => d.code === paddedDigit);
    }

    // 3. Exact match on extracted letters
    if (!selected && inputLetters) {
      selected = depts.find(d => normalizeString(d.name) === inputLetters);
    }

    // 4. Substring match on extracted letters (minimum 3 characters to avoid false matches)
    if (!selected && inputLetters && inputLetters.length >= 3) {
      selected = depts.find(d => normalizeString(d.name).includes(inputLetters));
    }

    if (selected && resultBox && title && text && link) {
      resultBox.style.display = 'block';
      title.textContent = `📍 ${translations[lang].deptTitlePrefix} ${selected.code} - ${selected.name}`;
      text.innerHTML = translations[lang].deptTextTemplate.replace('{region}', selected.region);
      link.href = selected.url;
    } else {
      if (resultBox) {
        resultBox.style.display = 'none';
      }
    }
  };
}

// Load configurations and themes on initialization
function initAll() {
  const lang = document.documentElement.lang || 'fr';

  // Mobile menu initialization
  initMobileMenu();

  // Language dropdown initialization
  initLangDropdown();

  // Cookie Consent Banner
  initCookieBanner();

  // Theme sync
  const savedTheme = localStorage.getItem('theme');
  const themeIcon = document.getElementById('theme-icon');
  const themeText = document.getElementById('theme-text');

  if (savedTheme === 'dark') {
    document.body.setAttribute('data-theme', 'dark');
    if (themeIcon) themeIcon.textContent = '☀️';
    if (themeText) themeText.textContent = translations[lang].themeLight;
  } else {
    document.body.removeAttribute('data-theme');
    if (themeIcon) themeIcon.textContent = '🌙';
    if (themeText) themeText.textContent = translations[lang].themeDark;
  }
  
  // Back to top click handler
  const backToTopBtn = document.getElementById('btn-back-to-top');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
  
  // Navigation indicator
  highlightActiveNav();
  
  // Checklist and Reflection
  initCheckboxes();
  initReflection();
  
  // Search
  initSearch();

  // Department contact selector
  initDeptSelector();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAll);
} else {
  initAll();
}
