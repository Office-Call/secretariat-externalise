<?php
/* Page métier « Services à la personne » (adresse : /metiers/services-a-la-personne/). */
if (!defined('ABSPATH')) { exit; }

se_page_metier([
    'seo' => [
        'Accueil téléphonique pour les services à la personne',
        'Accueil téléphonique externalisé pour les services à la personne et les réseaux d’agences : familles, intervenants et candidats orientés selon vos consignes, agence par agence.',
        'Accueil téléphonique pour les services à la personne',
    ],
    'hero' => [
        'kicker'  => 'Services à la personne',
        'titre'   => 'Un accueil téléphonique bienveillant <em>pour vos bénéficiaires</em>',
        'texte'   => 'Familles, intervenants, candidats : les appels sont nombreux et variés. Nos conseillères les orientent selon vos consignes, agence par agence, avec écoute et patience.',
        'bouton2' => ['Découvrir le service', se_lien('permanence-telephonique')],
        'points'  => [['heart', 'Un accueil<br>bienveillant'], ['nodes', 'Des appels<br>bien orientés'], ['france', 'Une équipe<br>en France']],
        'image'   => 'aide-a-domicile.webp',
        'alt'     => 'Aide à domicile auprès d’une personne âgée',
        'badge'   => ['phone', 'Des familles écoutées,<br>des agences soulagées.'],
    ],
    'atouts' => [
        ['heart', 'Un accueil bienveillant', 'Écoute et patience avec les personnes âgées et leurs proches.'],
        ['bell', 'Gestion des urgences', 'Absences d’intervenants transmises aussitôt.'],
        ['nodes', 'Coordination', 'Chaque appel orienté vers la bonne agence.'],
        ['users', 'Des conseillères à l’écoute', 'Formées à vos consignes et à vos prestations.'],
    ],
    'split' => [
        'image'  => 'conseillere-accueil.webp',
        'alt'    => 'Conseillère orientant un appel vers la bonne agence',
        'kicker' => 'Un service à votre image',
        'titre'  => 'Des appels triés, <em>agence par agence</em>',
        'texte'  => 'Nous distinguons les appels des familles, des intervenants et des candidats, et chaque message part vers la bonne personne, dans la bonne agence.',
        'coches' => ['Accueil des bénéficiaires et de leurs familles', 'Absences et urgences transmises sans délai', 'Demandes de prestation notées avec les informations utiles', 'Orientation multi-agences selon vos consignes'],
    ],
    'appels_titre' => 'Familles, intervenants, <em>candidats</em>',
    'appels' => [['heart', 'Familles et bénéficiaires'], ['users', 'Intervenants'], ['doc', 'Demandes de prestation'], ['briefcase', 'Candidatures']],
    'formule' => ['Pour un réseau de plusieurs agences, demandez une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a> : nous adaptons l’orientation des appels à votre organisation.'],
    'message' => ['Absence d’une intervenante', [['Appelant', '[Prénom], intervenante, agence de [ville]'], ['Objet', 'Absente demain matin, raison médicale'], ['Bénéficiaire', 'Mme [Nom], passage de 9h'], ['Urgence', 'Remplacement à organiser, SMS envoyé']]],
    'texte_kicker' => 'L’accueil téléphonique pour les services à la personne, en détail',
    'texte' => [
        ['Des appels nombreux, variés <em>et souvent sensibles</em>', [
            'Une structure de services à la personne (aide à domicile, garde d’enfants, ménage, accompagnement de personnes âgées) reçoit des appels de nature très différente : une famille qui cherche une solution, un bénéficiaire qui signale un changement, un intervenant qui prévient d’une absence, un candidat qui répond à une annonce. Les responsables d’agence, eux, sont souvent en visite d’évaluation ou en entretien.',
            'Un accueil téléphonique externalisé pour les services à la personne décroche chaque appel avec écoute et patience, au nom de votre structure. Nos conseillères appliquent vos consignes : les absences d’intervenants et les urgences vous sont transmises sans délai, les demandes de prestation sont notées avec les informations utiles à votre évaluation, les candidatures sont orientées vers la bonne personne.',
        ]],
        ['Une organisation <em>agence par agence</em>', [
            'Pour un réseau, les consignes sont construites par agence : quel responsable prévenir, quels créneaux proposer, comment traiter les appels hors secteur. Nos conseillères travaillent pour un nombre limité de clients et connaissent votre organisation ; les familles parlent toujours à une vraie personne, jamais à un répondeur.',
            'Selon votre besoin, vous choisirez une <a href="' . se_lien('permanence-telephonique') . '">permanence téléphonique</a> complète ou un <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> quand vos lignes sont occupées. Pour plusieurs agences, nous construisons une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a>. Vous ne payez que les appels réellement traités.',
        ]],
    ],
    'liens' => [
        ['Permanence téléphonique', 'Tous vos appels pris, du lundi au vendredi de 8h à 19h.', se_lien('permanence-telephonique'), 'headset'],
        ['Étude sur mesure', 'Pour un réseau de plusieurs agences.', se_lien('etude-sur-mesure'), 'nodes'],
        ['Avis clients', 'Ce qu’en disent nos clients.', se_lien('temoignages'), 'star'],
        ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ],
    'faq' => [
        ['Pouvez-vous gérer plusieurs agences ?', 'Oui. Vos consignes indiquent quelle agence couvre quel secteur, et chaque appel est orienté en conséquence.'],
        ['Comment sont traitées les absences d’intervenants ?', 'Comme une urgence si vous le souhaitez : le message vous est transmis aussitôt, par e-mail et par SMS.'],
        ['Les familles parlent-elles à une vraie personne ?', 'Oui, toujours. Nos conseillères prennent le temps d’écouter, en particulier avec les personnes âgées.'],
        ['Quels sont vos horaires ?', 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi.'],
    ],
]);
