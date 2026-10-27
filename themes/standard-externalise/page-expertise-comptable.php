<?php
/* Page métier « Expertise comptable » (adresse : /metiers/expertise-comptable/). */
if (!defined('ABSPATH')) { exit; }

se_page_metier([
    'seo' => [
        'Permanence téléphonique pour experts-comptables',
        'Permanence téléphonique pour cabinets d’expertise comptable : un renfort pendant les périodes fiscales, des appels orientés vers le bon collaborateur et des messages précis.',
        'Permanence téléphonique pour experts-comptables',
    ],
    'hero' => [
        'kicker'  => 'Experts-comptables et cabinets de conseil',
        'titre'   => 'Une permanence téléphonique <em>qui suit vos pics d’activité</em>',
        'texte'   => 'Pendant les périodes déclaratives, les appels s’accumulent au moment où vos équipes ont le moins de temps. Nos conseillères prennent le relais, orientent chaque appel et vous transmettent des messages précis.',
        'bouton2' => ['Découvrir le débordement', se_lien('gestion-des-debordements-dappels')],
        'points'  => [['chart', 'Un renfort<br>en période fiscale'], ['nodes', 'Des appels<br>bien orientés'], ['france', 'Une équipe<br>en France']],
        'image'   => 'expert-comptable.webp',
        'alt'     => 'Expert-comptable au téléphone dans son cabinet',
        'badge'   => ['phone', 'Vos clients répondus,<br>même en pleine saison.'],
    ],
    'atouts' => [
        ['chart', 'Gestion des pics d’appels', 'Un renfort quand vos lignes sont saturées.'],
        ['nodes', 'Orientation des appels', 'Chaque client dirigé vers le bon collaborateur.'],
        ['calendar', 'Prise de rendez-vous', 'Bilans, rendez-vous de conseil, nouveaux clients.'],
        ['users', 'Une équipe formée', 'À vos consignes et à votre vocabulaire.'],
    ],
    'split' => [
        'image'  => 'conseillere-ecran.webp',
        'alt'    => 'Conseillère orientant un appel vers un collaborateur',
        'kicker' => 'Un soutien fiable toute l’année',
        'titre'  => 'Vos collaborateurs <em>moins interrompus</em>',
        'texte'  => 'La conseillère identifie le client et l’objet de son appel, puis transmet le message au bon collaborateur. Elle ne répond pas sur le fond des dossiers : elle oriente.',
        'coches' => ['Messages précis : client, dossier, objet de la demande', 'Orientation vers le collaborateur en charge', 'Prise de rendez-vous dans les agendas', 'Renfort pendant les échéances fiscales'],
    ],
    'appels_titre' => 'Clients, prospects, <em>partenaires</em>',
    'appels' => [['user', 'Clients du cabinet'], ['briefcase', 'Nouveaux clients'], ['calendar', 'Demandes de rendez-vous'], ['doc', 'Relances de pièces']],
    'formule' => ['La formule la plus utilisée par les cabinets est le <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> : vos équipes décrochent quand elles le peuvent, nous prenons le reste.'],
    'message' => ['Appel d’un client', [['Appelant', 'M. [Nom], gérant de [société cliente]'], ['Objet', 'Question sur la date de dépôt de sa déclaration'], ['Pour', '[Collaborateur en charge du dossier]'], ['À faire', 'Le rappeler dans la journée']]],
    'texte_kicker' => 'La permanence téléphonique pour les cabinets comptables, en détail',
    'texte' => [
        ['Des appels qui arrivent <em>au pire moment</em>', [
            'Dans un cabinet d’expertise comptable, les appels suivent le calendrier fiscal : clôtures, liasses, déclarations de TVA, bilans. C’est précisément pendant ces périodes que les collaborateurs ont le moins de temps pour décrocher, et que les clients ont le plus de questions. Résultat : des lignes occupées, des messages laissés sur des répondeurs, des rappels qui s’accumulent.',
            'Une permanence téléphonique pour experts-comptables absorbe ces pics sans recruter. Nos conseillères répondent au nom du cabinet, identifient le client et le dossier, qualifient la demande (pièce manquante, question sur une échéance, demande de rendez-vous) et transmettent un message précis au collaborateur en charge, par e-mail.',
        ]],
        ['Une organisation <em>qui respecte la vôtre</em>', [
            'Vos consignes indiquent qui suit quel client, quels appels doivent être transférés immédiatement et lesquels peuvent faire l’objet d’un message. Les rendez-vous peuvent être fixés directement dans les agendas en ligne de vos collaborateurs, en respectant leurs règles.',
            'La plupart des cabinets choisissent le <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> : votre accueil continue de décrocher, nous prenons les appels qui déborderaient. Pour un cabinet à plusieurs sites, une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a> permet d’organiser l’orientation des appels site par site. Dans tous les cas, vous ne payez que les appels réellement traités.',
        ]],
    ],
    'liens' => [
        ['Débordement d’appels', 'Un renfort pendant les périodes fiscales, facturé au réel.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
        ['Assistance administrative', 'Relances, courriers, préparation de pièces, par la même équipe.', se_lien('assistance-administrative'), 'clipboard'],
        ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
        ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ],
    'faq' => [
        ['Pouvez-vous nous aider uniquement pendant les périodes fiscales ?', 'Oui : avec le débordement d’appels, nous ne prenons que les appels que vos équipes ne peuvent pas prendre, et vous ne payez que les appels traités.'],
        ['La conseillère répond-elle aux questions comptables ?', 'Non. Elle identifie la demande et la transmet au bon collaborateur, sans jamais répondre sur le fond des dossiers.'],
        ['Pouvez-vous distribuer les messages à plusieurs collaborateurs ?', 'Oui. Vos consignes précisent qui suit quel client : chaque message part vers la bonne personne.'],
        ['Comment démarrer ?', '<a href="' . se_lien('devis') . '">Demandez un devis</a>, ou une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a> si votre cabinet compte plusieurs sites.'],
    ],
]);
