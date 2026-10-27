<?php
/* Page métier « Artisans et BTP » (adresse : /metiers/artisans-btp/). */
if (!defined('ABSPATH')) { exit; }

se_page_metier([
    'seo' => [
        'Secrétariat téléphonique pour artisans et entreprises du BTP',
        'Secrétariat téléphonique pour artisans et entreprises du bâtiment : pendant vos chantiers, nos conseillères prennent les demandes de devis, repèrent les urgences et fixent vos visites.',
        'Secrétariat téléphonique pour artisans et entreprises du BTP',
    ],
    'hero' => [
        'kicker'  => 'Artisans et entreprises du bâtiment',
        'titre'   => 'Un secrétariat téléphonique pour artisans, <em>pendant vos chantiers</em>',
        'texte'   => 'Sur un chantier, impossible de décrocher à chaque appel. Nos conseillères prennent vos demandes de devis, repèrent les urgences et vous transmettent tout, pour qu’aucun client ne parte chez un concurrent faute de réponse.',
        'bouton2' => ['Découvrir le débordement', se_lien('gestion-des-debordements-dappels')],
        'points'  => [['tools', 'Spécial artisans<br>et BTP'], ['phone', 'Moins d’appels<br>manqués'], ['france', 'Une équipe<br>en France']],
        'image'   => 'artisan-chantier.webp',
        'alt'     => 'Artisan consultant ses messages sur son téléphone, sur un chantier',
        'badge'   => ['phone', 'Vos chantiers avancent,<br>vos appels sont pris.'],
    ],
    'atouts' => [
        ['phone', 'Moins d’appels perdus', 'Vos clients tombent sur une personne, pas sur une messagerie.'],
        ['doc', 'Des demandes de devis claires', 'Travaux, adresse, délai et coordonnées, notés pour vous.'],
        ['clock', 'Moins d’interruptions', 'Vous restez concentré sur votre chantier.'],
        ['shield', 'Une image professionnelle', 'Un accueil soigné, même quand vous êtes sur le toit.'],
    ],
    'split' => [
        'image'  => 'conseillere-bureau.webp',
        'alt'    => 'Conseillère notant une demande de devis',
        'kicker' => 'Des conseillères qui comprennent votre métier',
        'titre'  => 'Vos appels traités <em>comme vous le feriez</em>',
        'texte'  => 'Nous rédigeons avec vous vos consignes : votre zone d’intervention, vos types de travaux, ce qui est urgent pour vous. La conseillère les applique à chaque appel.',
        'coches' => ['Prise des demandes de devis détaillées', 'Repérage des urgences (fuite, panne, sinistre…)', 'Prise de rendez-vous pour les visites de chiffrage', 'Réponses sur vos horaires et votre zone d’intervention'],
    ],
    'appels_titre' => 'Particuliers, professionnels, <em>urgences</em>',
    'appels' => [['users', 'Appels de particuliers'], ['doc', 'Demandes de devis'], ['calendar', 'Prise de rendez-vous'], ['bell', 'Messages urgents']],
    'formule' => ['La formule la plus adaptée aux artisans est souvent le <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> : vous décrochez quand vous pouvez, nous prenons le relais quand vous êtes sur le chantier.'],
    'message' => ['Nouvelle demande de devis', [['Appelant', 'M. [Nom], particulier'], ['Travaux', 'Rénovation d’une salle de bains'], ['Délai', 'Souhaite un passage la semaine prochaine'], ['À faire', 'Rappeler avant 18h']]],
    'texte_kicker' => 'Le secrétariat téléphonique pour les artisans, en détail',
    'texte' => [
        ['Pourquoi un artisan perd des clients <em>au téléphone</em>', [
            'Un particulier qui cherche un plombier, un électricien ou un couvreur appelle rarement une seule entreprise. S’il tombe sur une messagerie, il compose le numéro suivant, et le devis part chez un concurrent. Sur un chantier, avec les mains prises ou en hauteur, décrocher à chaque sonnerie n’est pourtant pas possible, et rappeler le soir arrive souvent trop tard.',
            'Un secrétariat téléphonique pour artisans règle ce problème sans embaucher : vos appels sont renvoyés vers nos conseillères quand vous ne décrochez pas. Elles répondent au nom de votre entreprise, notent la demande avec les informations qui vous servent (nature des travaux, adresse, délai souhaité, coordonnées) et vous la transmettent par e-mail, ou par SMS pour les urgences.',
        ]],
        ['Comment ça se passe <em>pour une entreprise du bâtiment</em>', [
            'Nous rédigeons vos consignes avec vous : votre zone d’intervention, les types de travaux que vous acceptez, ce qui est urgent pour vous (fuite, panne de chauffage, sinistre) et ce qui peut attendre votre rappel. Vous programmez ensuite un <a href="' . se_lien('gestion-des-debordements-dappels') . '">renvoi d’appel en débordement</a> depuis votre mobile : vous continuez à décrocher quand vous le pouvez, nous prenons le reste.',
            'Si vous préférez ne plus être interrompu sur les chantiers, la <a href="' . se_lien('permanence-telephonique') . '">permanence téléphonique</a> prend tous vos appels aux horaires d’ouverture. Dans les deux cas, vous ne payez que les appels réellement traités : un mois creux coûte moins cher qu’un mois de haute saison. Le <a href="' . se_lien('devis') . '">devis</a> vous est envoyé sous 24 heures ouvrées.',
        ]],
    ],
    'liens' => [
        ['Débordement d’appels', 'La formule des artisans : nous prenons le relais quand vous êtes sur le chantier.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
        ['Prise de rendez-vous', 'Vos visites de chiffrage fixées dans votre agenda.', se_lien('prise-de-rendez-vous'), 'calendar'],
        ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
        ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ],
    'faq' => [
        ['Que se passe-t-il pour une urgence ?', 'Vous définissez ce qui est urgent pour vous (fuite, panne, sinistre…). La conseillère vous transfère alors l’appel ou vous prévient aussitôt par SMS, selon vos consignes.'],
        ['Mes clients sauront-ils que je ne réponds pas moi-même ?', 'La conseillère répond au nom de votre entreprise, avec votre formule d’accueil. Ce que vous en dites à vos clients reste votre choix.'],
        ['Puis-je ne faire prendre mes appels que pendant mes chantiers ?', 'Oui : c’est le principe du débordement d’appels. Vous programmez un renvoi quand vous ne décrochez pas, et vous ne payez que les appels que nous traitons.'],
        ['Combien ça coûte pour un artisan ?', 'Cela dépend de votre nombre d’appels. Vous ne payez que les appels que nous traitons, plus des frais de gestion mensuels. <a href="' . se_lien('devis') . '">Demandez votre devis</a> : vous le recevez sous 24 heures ouvrées, sans engagement.'],
    ],
]);
