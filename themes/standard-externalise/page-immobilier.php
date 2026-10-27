<?php
/* Page métier « Immobilier » (adresse : /metiers/immobilier/). */
if (!defined('ABSPATH')) { exit; }

se_page_metier([
    'seo' => [
        'Standard téléphonique pour agences immobilières',
        'Standard téléphonique externalisé pour agences immobilières : appels sur les annonces pris pendant vos visites, demandes d’estimation transmises en priorité, visites proposées dans votre agenda.',
        'Standard téléphonique pour agences immobilières',
    ],
    'hero' => [
        'kicker'  => 'Agences immobilières',
        'titre'   => 'Un standard téléphonique pour agence immobilière, <em>même pendant vos visites</em>',
        'texte'   => 'Quand vos agents sont en visite, le téléphone de l’agence continue de sonner. Nos conseillères prennent les appels sur vos annonces, transmettent les demandes d’estimation en priorité et proposent des créneaux de visite.',
        'bouton2' => ['Découvrir la prise de rendez-vous', se_lien('prise-de-rendez-vous')],
        'points'  => [['home', 'Spécial<br>agences'], ['calendar', 'Visites<br>planifiées'], ['france', 'Une équipe<br>en France']],
        'image'   => 'agente-immobiliere.webp',
        'alt'     => 'Agente immobilière au téléphone devant un bien à vendre',
        'badge'   => ['phone', 'Aucune annonce<br>sans réponse.'],
    ],
    'atouts' => [
        ['phone', 'Des appels pris en votre absence', 'Pendant les visites, du lundi au vendredi de 8h à 19h.'],
        ['calendar', 'Prise de rendez-vous', 'Visites et rendez-vous d’estimation dans votre agenda.'],
        ['target', 'Contacts qualifiés', 'Projet, budget et référence du bien, notés pour vous.'],
        ['headset', 'Un accueil professionnel', 'Au nom de votre agence, avec votre formule.'],
    ],
    'split' => [
        'image'  => 'conseillere-equipe.webp',
        'alt'    => 'Conseillère prenant un appel sur une annonce immobilière',
        'kicker' => 'Des conseillères qui connaissent votre activité',
        'titre'  => 'Acquéreurs, vendeurs, locataires : <em>chacun bien orienté</em>',
        'texte'  => 'Vos consignes précisent ce qui compte pour votre agence : les biens en portefeuille, les demandes à transmettre en priorité, les agents à joindre.',
        'coches' => ['Demandes sur une annonce : référence, projet, coordonnées', 'Demandes d’estimation des vendeurs transmises en priorité', 'Créneaux de visite proposés dans votre agenda', 'Messages transmis à l’agent concerné'],
    ],
    'appels_titre' => 'Acheteurs, vendeurs, <em>locataires</em>',
    'appels' => [['home', 'Appels sur les annonces'], ['target', 'Demandes d’estimation'], ['calendar', 'Demandes de visite'], ['users', 'Propriétaires et locataires']],
    'formule' => ['Pour une agence, la <a href="' . se_lien('prise-de-rendez-vous') . '">prise de rendez-vous</a> est souvent la plus utile : vos visites sont fixées directement dans votre agenda.'],
    'message' => ['Demande sur une annonce', [['Appelant', 'Mme [Nom], acquéreuse'], ['Bien', 'Maison réf. [référence]'], ['Projet', 'Achat, financement en cours'], ['Visite', 'Proposée samedi 10h, à confirmer par l’agent']]],
    'texte_kicker' => 'Le standard téléphonique pour les agences immobilières, en détail',
    'texte' => [
        ['Chaque appel manqué <em>est un acquéreur ou un vendeur</em>', [
            'Une agence immobilière reçoit l’essentiel de ses appels quand ses agents sont dehors : en visite, en estimation, en signature. Un acquéreur qui appelle sur une annonce et tombe sur une messagerie passe à l’annonce suivante ; un propriétaire qui veut faire estimer son bien contacte l’agence qui décroche. Le standard d’une agence ne peut pas dépendre de la présence de quelqu’un au bureau.',
            'Un standard téléphonique externalisé pour agences immobilières répond au nom de votre agence, relève la référence de l’annonce, le projet et les coordonnées de l’appelant, transmet les demandes d’estimation des vendeurs en priorité à l’agent concerné et propose des créneaux de visite dans votre agenda en ligne.',
        ]],
        ['Pour une agence <em>ou pour un réseau</em>', [
            'Vos consignes précisent quel agent suit quel secteur ou quel type de bien, comment traiter les appels des locataires et des propriétaires bailleurs, et ce qui doit vous être transféré sans attendre. Pour un réseau de plusieurs agences, l’orientation des appels est organisée agence par agence dans le cadre d’une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a>.',
            'La formule la plus utile aux agences est souvent la <a href="' . se_lien('prise-de-rendez-vous') . '">prise de rendez-vous</a>, complétée par le <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> aux heures de visite. Vous ne payez que les appels traités, et votre <a href="' . se_lien('devis') . '">devis</a> vous est adressé sous 24 heures ouvrées.',
        ]],
    ],
    'liens' => [
        ['Prise de rendez-vous', 'Visites et estimations fixées dans votre agenda.', se_lien('prise-de-rendez-vous'), 'calendar'],
        ['Débordement d’appels', 'Les appels sur annonces pris pendant vos visites.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
        ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
        ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ],
    'faq' => [
        ['Pouvez-vous fixer des visites ?', 'Oui, dans votre agenda en ligne, selon vos disponibilités et vos règles, si vous nous y ouvrez un accès.'],
        ['Les demandes de vendeurs sont-elles traitées à part ?', 'Oui. Vous pouvez demander que les demandes d’estimation vous soient transmises en priorité, par e-mail et par SMS.'],
        ['Êtes-vous joignables le samedi ?', 'Notre ligne est ouverte du lundi au vendredi, de 8h à 19h, sans coupure le midi.'],
        ['Gérez-vous plusieurs agences ?', 'Oui. Vos consignes peuvent orienter chaque appel vers la bonne agence. Pour un réseau, demandez une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a>.'],
    ],
]);
