<?php
/**
 * Avis clients : avis Google publiés pour OFFICE & CALL, la société qui opère Standard Externalisé.
 * Les textes sont recopiés tels quels, sans correction ni coupure : un avis ne se réécrit pas.
 * Les avis saisis dans Apparence › Personnaliser › Témoignages, s'il y en a, passent devant.
 */

if (!defined('ABSPATH')) {
    exit;
}

function se_avis_google()
{
    return [
        [
            'nom' => 'Nicolas Capelle',
            'metier' => 'S3D, réseau de franchise',
            'date' => '11 septembre 2024',
            'texte' => "nous utilisons les services externalisé pour les appels. Notre réseau de franchise, nous sommes extrêmement satisfaits par la qualité de la prestation, la qualité d'accueil, la qualité d'écoute, et le renvoi par mail immédiat des données. Je recommande fortement cette entreprise basé en France.",
        ],
        [
            'nom' => 'Arun Tasiev',
            'metier' => 'M2R',
            'date' => '11 septembre 2024',
            'texte' => 'Très professionnels, nous travaillons avec eux depuis maintenant 5 ans. Merci pour votre service irréprochable.',
        ],
        [
            'nom' => 'San Be',
            'metier' => 'La Girafe RH',
            'date' => '24 octobre 2024',
            'texte' => 'un professionnalisme hors pair et un relationnel parfait, pour un coût très raisonnable. un confort appréciable !',
        ],
        [
            'nom' => 'Anne-Sophie Caistiker',
            'metier' => 'Doctibike',
            'date' => '11 septembre 2024',
            'texte' => "Plusieurs années de collaboration avec Catherine et son équipe , une partenaire investie et d'une grande disponibilité !",
        ],
        [
            'nom' => 'Rudy B',
            'metier' => 'Neosit',
            'date' => '23 novembre 2023',
            'texte' => "Très content de l'accueil téléphonique et du service rendu par Office & call. Merci à toute l'équipe. On vous recommande les yeux fermés.",
        ],
        [
            'nom' => 'Macha di Casanova',
            'metier' => 'Voyante',
            'date' => '7 septembre 2023',
            'texte' => 'Très à l’écoute, très bonne réactivité. Indispensable à tous professionnels qui souhaitent externaliser ses appels. Je recommande vivement',
        ],
        [
            'nom' => 'Marion Dangoumau',
            'metier' => 'Ostéopathe',
            'date' => '11 novembre 2023',
            'texte' => 'Secrétariat de qualité, communication facile, secrétaires professionnelles et à l’écoute. Je recommande vivement.',
        ],
        [
            'nom' => 'Alexis Not',
            'metier' => 'AMK',
            'date' => '13 mars 2023',
            'texte' => "Une très bonne équipe, réactive et attentive à nos besoins.\nJe recommande.",
        ],
        [
            'nom' => 'Antony Cohen',
            'metier' => 'Okeenea',
            'date' => 'février 2026',
            'texte' => "Nous avons fais appel au service d'office and call pour récupérer la gestion de notre standard. L'équipe est vraiment top ! Très réactive et à l'écoute. La mise en place a été simple et rapide.\n\nJe peux que vous conseiller leurs services !",
        ],
        [
            'nom' => 'Nicolas Auvin',
            'metier' => 'Pouvoir Plus',
            'date' => '17 janvier 2025',
            'texte' => 'Merci beaucoup Office & call pour votre accompagnement et votre professionnalisme ! Au plaisir de travailler ensemble en 22025.',
        ],
    ];
}

/** Avis à afficher : ceux du Customizer s'il y en a, sinon les avis Google ci-dessus. */
function se_avis_liste()
{
    $perso = [];
    for ($i = 1; $i <= 4; $i++) {
        $texte = trim((string) get_theme_mod("se_avis_{$i}_texte"));
        if ($texte !== '') {
            $perso[] = [
                'texte' => $texte,
                'nom' => (string) get_theme_mod("se_avis_{$i}_nom"),
                'metier' => (string) get_theme_mod("se_avis_{$i}_metier"),
                'date' => '',
            ];
        }
    }
    if ($perso) {
        return ['avis' => $perso, 'google' => false];
    }
    if (!get_theme_mod('se_avis_google', 1)) {
        return ['avis' => [], 'google' => false];
    }
    return ['avis' => se_avis_google(), 'google' => true];
}
