---
trigger: always_on
---

import os
import json
from dotenv import load_dotenv

load_dotenv()

class AntigravityInclusiveAgent:
    def __init__(self, config_path="config/agent_config.json"):
        self.config = self.load_configuration(config_path)
        self.current_profile_name = self.config.get("active_profile", "designer-tsa-tdah")
        self.profile_settings = self.config.get("profiles", {}).get(self.current_profile_name, {})
        
        print(f"[-] Agent '{self.config.get('agent_name')}' initialisé en mode [{self.current_profile_name.upper()}]")

    def load_configuration(self, path):
        if not os.path.exists(path):
            raise FileNotFoundError(f"Fichier de configuration introuvable : {path}")
        with open(path, "r", encoding="utf-8") as file:
            return json.load(file)

    def generate_layout_specs(self, component_name):
        """Génère des directives UI/UX adaptées aux critères TSA/TDAH."""
        constraints = self.profile_settings.get("ui_constraints", {})
        ux_rules = constraints.get("ux_rules", [])
        colors = constraints.get("colors", {})
        
        print(f"\n[Analyse Accessibilité] Conception du composant : {component_name}")
        
        # Structure de réponse épurée, sans fioritures pour limiter la charge cognitive
        design_system_output = {
            "component": component_name,
            "recommandations_ux": ux_rules,
            "tokens_de_couleur": colors,
            "conseil_prompt": "Présenter l'information de manière séquentielle, étape par étape."
        }
        return design_system_output

if __name__ == "__main__":
    try:
        agent = AntigravityInclusiveAgent()
        # Test sur un composant sensible : un formulaire ou un tableau de bord
        specs = agent.generate_layout_specs("Tableau de bord principal")
        
        print("\n--- CAHIER DES CHARGES COMPOSANT (TSA/TDAH) ---")
        print(json.dumps(specs, indent=2, ensure_ascii=False))
        
    except Exception as e:
        print(f"[Erreur] Échec du workspace inclusif : {e}")