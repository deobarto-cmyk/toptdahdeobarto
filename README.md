# TOP & TDAH : Portail d'Accompagnement deobarto

Ce dépôt contient le code source du portail de psychoéducation parentale dédié au **Trouble Oppositionnel avec Provocation (TOP)** et au **Trouble du Déficit de l'Attention avec ou sans Hyperactivité (TDAH)**.

Lien du site en production : [deobarto.alwaysdata.net](https://deobarto.alwaysdata.net/)

## 🎨 Charte Graphique & Accessibilité (Neuro-inclusive)
Ce projet a été conçu selon des principes rigoureux d'accessibilité numérique pour les profils TSA/TDAH, en évitant les surcharges cognitives et visuelles :
- **Palette de couleurs apaisante :** Vert d'eau (Sauge/Mint) et Ambre doux, offrant un excellent contraste (conforme WCAG >= 4.5:1) sans stimuler excessivement la vision.
- **Glassmorphism :** Effet de verre dépoli moderne et épuré (`backdrop-filter`) pour structurer l'information de manière tridimensionnelle et lisible, sans animations intrusives.
- **Typographie :** Importation de la police **Outfit** (titres) et **Inter** (corps) pour un rendu moderne et ultra-lisible.
- **Zéro distraction :** Animations extrêmement discrètes et absence totale de mouvements brusques.

## 🛠️ Fonctionnalités clés
1. **Chapitre I : Approche clinique** — Définitions, critères DSM-5 et éclairages scientifiques.
2. **Chapitre II : Témoignages** — Retours d'expériences de familles et de parents.
3. **Chapitre III : Fiches Stratégiques** — Outils pratiques et fiches d'action au quotidien.
4. **Chapitre IV : Accompagnement médical** — Parcours de soin, guidance parentale (Méthode Barkley) et carnet de réflexion interactif avec persistance locale (`localStorage`).
5. **Synthèse Interactive** — Document condensé avec option d'impression ou d'export PDF propre.
6. **Bandeau de transparence RGPD / LocalStorage :** Information claire de l'utilisateur sur l'usage exclusif du stockage local (sans cookies tiers de pistage).

## 🚀 Structure du Projet
- `index.html` : Page d'accueil et portail principal.
- `definition.html` : Chapitre I.
- `temoignages.html` : Chapitre II.
- `strategies.html` : Chapitre III.
- `accompagnement.html` : Chapitre IV.
- `synthese.html` : Synthèse complète.
- `style.css` : Feuille de style globale (variables, thèmes clair/sombre, glassmorphism, responsive).
- `app.js` : Scripts interactifs (gestion du thème, journal de réflexion, quiz DSM-5, sélecteur de départements).
- `logo.png` : Logo du site.
- `favicon.ico` : Icône de favori.
- `designer-tsa-tdah.json` : Spécifications et contraintes d'accessibilité.
