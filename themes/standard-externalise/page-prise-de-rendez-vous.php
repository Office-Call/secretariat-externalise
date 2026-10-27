<?php
/**
 * Page « Prise de rendez-vous » (adresse : /prise-de-rendez-vous/).
 * Expressions visées : prise de rendez-vous externalisée, secrétariat prise de rendez-vous, prise de rendez-vous téléphonique.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Prise de rendez-vous externalisée par téléphone',
    'Prise de rendez-vous téléphonique externalisée : nos conseillères en France qualifient chaque demande et planifient vos rendez-vous dans votre agenda en ligne, selon vos règles.',
    'Prise de rendez-vous externalisée',
    'conseillere-bureau.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Secrétariat téléphonique',
    'titre'   => 'Prise de rendez-vous externalisée, <em>planifiée avec méthode</em>',
    'texte'   => 'Nos conseillères répondent à vos appels, qualifient chaque demande et fixent les rendez-vous directement dans votre agenda en ligne, selon vos critères. Vous rencontrez les bonnes personnes, sans avoir décroché.',
    'bouton2' => ['Découvrir le service', '#service'],
    'points'  => [['france', 'Une équipe<br>en France'], ['headset', 'Un accueil<br>personnalisé'], ['target', 'Des demandes<br>qualifiées'], ['calendar', 'Directement dans<br>votre agenda']],
    'image'   => 'conseillere-bureau.webp',
    'alt'     => 'Conseillère notant un rendez-vous pendant un appel',
    'badge'   => ['calendar-check', 'Des agendas bien tenus,<br>des rendez-vous utiles.'],
]); ?>

<section class="section" id="service">
  <div class="wrap">
    <?php se_titre_section('Notre service', 'Ce que nous gérons <em>pour vous</em>', 'De la première demande jusqu’au rendez-vous fixé, nous prenons en charge vos appels de prise de rendez-vous, selon vos consignes et dans vos outils.'); ?>
    <?php se_cartes([
        ['chat', 'Qualification des demandes', 'Nous identifions l’appelant, son besoin et le type de rendez-vous qui lui convient.'],
        ['calendar', 'Prise de rendez-vous', 'Nous planifions selon vos disponibilités et vos critères : durée, motif, présentiel ou visio.'],
        ['laptop', 'Gestion de votre agenda en ligne', 'Nous travaillons directement dans votre outil d’agenda, mis à jour en temps réel.'],
        ['calendar-check', 'Modifications et annulations', 'Nous déplaçons ou annulons les rendez-vous à la demande de vos clients.'],
    ]); ?>
  </div>
</section>

<?php se_split('conseillere-ecran.webp', 'Conseillère gérant un agenda en ligne', 'gauche', function () { ?>
    <p class="kicker">Un atout concret pour votre activité</p>
    <h2>Un secrétariat de prise de rendez-vous <em>à forte valeur ajoutée</em></h2>
    <p>Une prise de rendez-vous bien faite, ce sont des créneaux bien remplis, moins d’allers-retours et des rendez-vous préparés. Vous vous concentrez sur ce que vous faites le mieux.</p>
    <?php se_atouts([
        ['target', 'Des rendez-vous qualifiés', 'Vous rencontrez des interlocuteurs réellement intéressés.'],
        ['clock', 'Du temps retrouvé', 'Nous filtrons, organisons et planifions pour vous.'],
        ['chart', 'Une meilleure productivité', 'Vous vous consacrez à votre cœur de métier.'],
        ['star', 'Une expérience client soignée', 'Chaque échange est courtois et à votre image.'],
        ['nodes', 'Une organisation fluide', 'Vos agendas restent à jour et lisibles.'],
        ['users', 'Un service adapté à votre secteur', 'Vos règles de prise de rendez-vous sont respectées.'],
    ], 3); ?>
<?php }); ?>

<section class="section method">
  <div class="wrap">
    <?php se_titre_section('Notre méthode', 'Une mise en place <em>simple et rapide</em>'); ?>
    <?php se_etapes([
        ['Analyse de vos critères', 'Types de rendez-vous, durées, disponibilités et informations à recueillir.'],
        ['Accès à votre agenda', 'Vous nous ouvrez un accès à votre agenda en ligne.'],
        ['Planification des rendez-vous', 'Nous fixons chaque rendez-vous et le confirmons à l’appelant.'],
        ['Suivi et ajustements', 'Vos règles évoluent avec votre activité, relevé mensuel des appels.'],
    ]); ?>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Exemples d’usages', 'Un service adapté à <em>votre secteur d’activité</em>'); ?>
    <?php se_cartes([
        ['scale', 'Professions juridiques', 'Premiers rendez-vous de consultation et rendez-vous clients.', se_lien('metiers/professions-juridiques')],
        ['home', 'Immobilier', 'Visites de biens et rendez-vous d’estimation.', se_lien('metiers/immobilier')],
        ['calc', 'Expertise comptable', 'Rendez-vous de bilan, de conseil et nouveaux clients.', se_lien('metiers/expertise-comptable')],
        ['briefcase', 'Services aux entreprises', 'Rendez-vous commerciaux et démonstrations.', se_lien('contact')],
    ]); ?>
  </div>
</section>

<?php se_faq([
    ['Avec quel agenda travaillez-vous&nbsp;?', 'Avec votre agenda en ligne, à condition que vous nous y ouvriez un accès. Si vous n’en avez pas encore, parlons-en lors du premier échange.'],
    ['Respectez-vous mes règles de prise de rendez-vous&nbsp;?', 'Oui : durées, motifs, créneaux réservés, délais à respecter et informations à recueillir sont écrits dans vos consignes, que la conseillère applique à chaque appel.'],
    ['Pouvez-vous déplacer ou annuler un rendez-vous&nbsp;?', 'Oui, à la demande de l’appelant et selon vos consignes.'],
    ['Combien coûte la prise de rendez-vous externalisée&nbsp;?', 'Fixer un rendez-vous demande plus de temps que prendre un message : le prix par appel en tient compte. Notre page <a href="' . se_lien('tarifs') . '">tarifs</a> explique ce qui fait le prix, et votre <a href="' . se_lien('devis') . '">devis</a> vous est envoyé sous 24 heures ouvrées.'],
], 'Vous avez des questions sur la prise de rendez-vous externalisée ? Voici les réponses aux plus fréquentes.'); ?>

<?php get_template_part('parts/temoignages'); ?>

<?php se_maillage([
    ['Agences immobilières', 'Visites et estimations fixées dans votre agenda.', se_lien('metiers/immobilier'), 'home'],
    ['Professions juridiques', 'Vos premiers rendez-vous, avec discrétion.', se_lien('metiers/professions-juridiques'), 'scale'],
    ['Nos outils', 'Comment nous travaillons dans votre agenda en ligne.', se_lien('nos-outils'), 'laptop'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(); ?>

</main>
<?php get_footer();
