<?php
/* Page métier « Professions juridiques » (adresse : /metiers/professions-juridiques/). */
if (!defined('ABSPATH')) { exit; }

se_page_metier([
    'seo' => [
        'Secrétariat téléphonique pour avocats et notaires',
        'Secrétariat téléphonique externalisé pour avocats, notaires et professions juridiques : filtrage discret, messages précis et prise de rendez-vous, par une équipe en France.',
        'Secrétariat téléphonique pour avocats et professions juridiques',
    ],
    'hero' => [
        'kicker'  => 'Avocats, notaires et professions juridiques',
        'titre'   => 'Un secrétariat téléphonique <em>à la hauteur de votre exigence</em>',
        'texte'   => 'Pendant vos rendez-vous et vos audiences, nos conseillères filtrent vos appels avec discrétion, prennent des messages précis et fixent vos premiers rendez-vous. Vous n’êtes dérangé que lorsque c’est nécessaire.',
        'bouton2' => ['Découvrir le service', se_lien('standard-telephonique-externalise')],
        'points'  => [['shield', 'Discrétion<br>et rigueur'], ['headset', 'Un accueil<br>professionnel'], ['france', 'Une équipe<br>en France']],
        'image'   => 'avocate-cabinet.webp',
        'alt'     => 'Avocate travaillant sur un dossier dans son cabinet',
        'badge'   => ['phone', 'Un accueil discret<br>pour votre cabinet.'],
    ],
    'atouts' => [
        ['shield', 'Confidentialité', 'Une annexe dédiée à la protection des données dans notre contrat.'],
        ['headset', 'Un accueil professionnel', 'Une formule d’accueil et un ton à l’image de votre cabinet.'],
        ['nodes', 'Filtrage des appels', 'Client, nouveau dossier, confrère : chaque appel est identifié.'],
        ['calendar', 'Prise de rendez-vous', 'Premiers rendez-vous fixés dans votre agenda.'],
    ],
    'split' => [
        'image'  => 'conseillere-notes.webp',
        'alt'    => 'Conseillère prenant un message précis',
        'kicker' => 'Une équipe formée à vos consignes',
        'titre'  => 'Des messages précis, <em>sans jamais sortir de son rôle</em>',
        'texte'  => 'La conseillère identifie l’appelant et l’objet de son appel, puis vous transmet un message clair. Elle ne donne aucun conseil juridique et ne se prononce jamais sur un dossier : elle oriente vers vous.',
        'coches' => ['Identification de l’appelant et de son dossier', 'Filtrage selon vos consignes', 'Prise de rendez-vous dans votre agenda', 'Transmission rapide des messages par e-mail'],
    ],
    'appels_titre' => 'Clients, nouveaux dossiers, <em>confrères</em>',
    'appels' => [['user', 'Clients du cabinet'], ['doc', 'Nouveaux dossiers'], ['scale', 'Confrères et juridictions'], ['calendar', 'Demandes de rendez-vous']],
    'formule' => ['Selon votre organisation : une <a href="' . se_lien('permanence-telephonique') . '">permanence téléphonique</a> pendant vos audiences, ou la <a href="' . se_lien('prise-de-rendez-vous') . '">prise de rendez-vous</a> pour vos premiers contacts.'],
    'message' => ['Demande de premier rendez-vous', [['Appelant', 'Mme [Nom], nouvelle cliente'], ['Objet', 'Souhaite un conseil en droit de la famille'], ['Rendez-vous', 'Fixé jeudi à 10h, cabinet'], ['À noter', 'Apportera les documents demandés']]],
    'texte_kicker' => 'Le secrétariat téléphonique pour les cabinets juridiques, en détail',
    'texte' => [
        ['Ce qu’attend un cabinet d’avocats ou une étude <em>de son accueil téléphonique</em>', [
            'Dans un cabinet d’avocats, une étude notariale ou un cabinet d’huissiers, le téléphone sonne pendant les rendez-vous, les audiences et les signatures. Chaque appel compte : un client inquiet pour son dossier, un confrère, un greffe, un futur client qui compare plusieurs cabinets. Mais chaque interruption coûte de la concentration, et un accueil approximatif abîme une image construite sur la rigueur.',
            'Un secrétariat téléphonique pour avocats et professions juridiques répond à cette double exigence : les appels sont décrochés au nom du cabinet, avec votre formule d’accueil, par une conseillère qui applique vos consignes de filtrage. Elle identifie l’appelant et le dossier concerné, prend un message précis et ne vous transfère que les appels que vous avez désignés comme prioritaires.',
        ]],
        ['Discrétion, précision <em>et confidentialité</em>', [
            'Nos conseillères sont salariées, basées en France, et travaillent pour un nombre limité de clients : elles connaissent votre cabinet et vos habitudes. Chaque contrat comporte une annexe dédiée à la protection des données personnelles, et les informations échangées ne servent qu’au traitement de vos appels.',
            'Selon votre organisation, vous choisirez une <a href="' . se_lien('permanence-telephonique') . '">permanence téléphonique</a> pendant vos audiences, un <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a> quand votre assistante est déjà en ligne, ou la <a href="' . se_lien('prise-de-rendez-vous') . '">prise de rendez-vous</a> pour vos premiers contacts. Votre <a href="' . se_lien('devis') . '">devis</a> vous est adressé sous 24 heures ouvrées.',
        ]],
    ],
    'liens' => [
        ['Permanence téléphonique', 'Tous vos appels pris pendant vos rendez-vous et audiences.', se_lien('permanence-telephonique'), 'headset'],
        ['Prise de rendez-vous', 'Vos premiers rendez-vous fixés dans votre agenda en ligne.', se_lien('prise-de-rendez-vous'), 'calendar'],
        ['Nos outils et la confidentialité', 'Comment vos données et celles de vos clients sont protégées.', se_lien('nos-outils'), 'shield'],
        ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ],
    'faq' => [
        ['La conseillère peut-elle renseigner mes clients sur leur dossier ?', 'Non. Elle ne donne aucun conseil juridique et ne se prononce jamais sur un dossier. Elle prend un message précis et vous le transmet, ou fixe un rendez-vous.'],
        ['Comment la confidentialité est-elle assurée ?', 'Nos contrats comprennent une annexe dédiée à la protection des données personnelles. Les informations recueillies ne servent qu’à traiter vos appels.'],
        ['Pouvez-vous ne me transférer que certains appels ?', 'Oui. Vous indiquez qui doit vous être transféré (un confrère, une juridiction, un client précis) et tous les autres appels font l’objet d’un message.'],
        ['Travaillez-vous dans mon agenda ?', 'Oui, si vous utilisez un agenda en ligne et que vous nous y ouvrez un accès.'],
    ],
]);
