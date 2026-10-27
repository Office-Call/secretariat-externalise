# standard-externalise.fr

Site WordPress de la marque **Standard Externalisé** (OFFICE & CALL SAS, Dax), hébergé chez IONOS.

## Contenu du dépôt

| Dossier | Rôle | Version |
|---|---|---|
| `themes/standard-externalise/` | Thème sur mesure : mises en page de toutes les pages, référencement intégré | 1.6.2 |
| `plugins/se-formulaires/` | Formulaires de demande de devis, d'étude sur mesure et de contact (envoi par e-mail) | 1.0.0 |
| `plugins/se-pages-du-site/` | Création / mise à jour en un clic des pages WordPress (Outils › Pages du site) | 1.1.2 |
| `docs/seo-pages.md` | Tableau de référencement page par page (titre, description, H1) | — |

## Installer une mise à jour sur le site

1. Zipper le dossier concerné (le zip doit contenir le dossier, ex. `standard-externalise/`).
2. Thème : Apparence › Thèmes › Téléverser › **Remplacer l'existant**.
   Extension : Extensions › Ajouter › Téléverser › **Remplacer l'existant**.
3. Après une mise à jour de `se-pages-du-site` : Outils › Pages du site, cocher les pages à mettre à jour.

Détails dans `themes/standard-externalise/LISEZMOI.txt` et `plugins/se-formulaires/LISEZMOI.txt`.

## Règles

- Aucun prix calculable n'est publié sur le site : un seul prix d'entrée (Apparence › Personnaliser › Tarifs affichés).
- Les pages Devis, Étude sur mesure et Contact utilisent les shortcodes `[sesim_contact type="devis|etude"]` et `[sesim_contact]`.
- Ne jamais réactiver l'ancienne extension « Simulateur de devis » (retirée en octobre 2026).
