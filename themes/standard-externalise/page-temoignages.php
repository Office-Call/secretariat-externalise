<?php
/**
 * Page « Témoignages et cas clients » (adresse : /temoignages/).
 * Avis : sélection d'avis Google d'OFFICE & CALL (inc/avis.php), ou ceux saisis dans le Customizer.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Avis clients et témoignages sur notre standard externalisé',
    'Avis de nos clients et exemples d’usages par métier : artisans, professions juridiques, immobilier. Plus de 50 entreprises confient leurs appels à notre équipe.',
    '',
    'conseillere-mobile.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Témoignages et cas clients',
    'titre'   => 'Ils nous font <em>confiance</em>',
    'texte'   => 'Artisans, professions libérales, agences : découvrez comment notre standard téléphonique externalisé s’adapte à leur activité, et ce qu’en disent nos clients.',
    'bouton2' => ['Demander une étude sur mesure', se_lien('etude-sur-mesure')],
    'points'  => [['france', 'Des clients<br>partout en France'], ['headset', 'Un accueil<br>personnalisé'], ['shield', 'Une relation<br>durable']],
    'image'   => 'conseillere-mobile.webp',
    'alt'     => 'Cheffe d’entreprise consultant ses messages sur son téléphone',
    'badge'   => ['phone', 'Une équipe à l’écoute<br>de vos clients.'],
]); ?>

<?php se_stats([['50+', 'entreprises nous font confiance'], ['≈ 5 200', 'appels traités chaque mois'], ['2008', 'à vos côtés', 'Depuis']]); ?>

<?php get_template_part('parts/temoignages'); ?>

<section class="section section-tint">
  <div class="wrap">
    <?php se_titre_section('Exemples d’usages', 'Des solutions adaptées à <em>chaque métier</em>', 'Chaque métier reçoit des appels différents. Voici comment notre standard externalisé y répond.'); ?>
    <?php se_cas([
        ['tools', 'Artisans et BTP', 'Un accueil professionnel pendant les chantiers', 'Impossible de décrocher sur un chantier, alors que chaque appel peut être une demande de devis.', 'Les appels débordent vers nos conseillères, qui notent les demandes de devis et repèrent les urgences.', se_lien('metiers/artisans-btp')],
        ['scale', 'Professions juridiques', 'Un filtrage discret pour un cabinet', 'Des appels pendant les rendez-vous et les audiences, et des messages éparpillés.', 'Un filtrage selon vos consignes, des messages précis et des premiers rendez-vous fixés dans l’agenda.', se_lien('metiers/professions-juridiques')],
        ['home', 'Immobilier', 'Des appels sur les annonces toujours pris', 'Des agents en visite, et des acquéreurs qui appellent une autre agence faute de réponse.', 'Les demandes sur les biens sont notées et les visites proposées dans l’agenda de l’agence.', se_lien('metiers/immobilier')],
    ]); ?>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Pourquoi nous ?', 'Pourquoi ils choisissent <em>Standard Externalisé</em>'); ?>
    <?php se_cartes([
        ['headset', 'Un accueil humain et professionnel', 'Des conseillères salariées, formées, qui représentent votre entreprise avec soin.'],
        ['gear', 'Un service sur mesure', 'Des consignes écrites pour votre métier, vos horaires et vos priorités.'],
        ['chart', 'Un prix lisible', 'Des tarifs publiés, et seuls les appels traités sont facturés.'],
        ['heart', 'Une relation suivie', 'Une petite équipe, et une gérante qui suit chaque client.'],
    ]); ?>
  </div>
</section>

<?php se_faq([
    ['Quels types d’entreprises font appel à vos services ?', 'Des TPE et des PME, des artisans, des professions libérales et des réseaux d’agences, partout en France.'],
    ['Comment se déroule la mise en place ?', 'Nous écrivons vos consignes ensemble, puis vous renvoyez vos appels vers notre ligne. Toutes les étapes sont sur la page <a href="' . se_lien('comment-ca-fonctionne') . '">Notre méthode</a>.'],
    ['Vos conseillères sont-elles formées à mon métier ?', 'Elles sont formées à vos consignes, rédigées avec vous pour votre activité, et mises à jour quand vous le souhaitez.'],
    ['Puis-je laisser un avis ?', 'Avec plaisir : votre retour nous aide à progresser. Écrivez-nous depuis la page <a href="' . se_lien('contact') . '">Contact</a>.'],
], 'Vous avez des questions sur notre service ou sur l’expérience de nos clients ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Votre métier', 'Les pages dédiées à chaque secteur.', se_lien('metiers'), 'briefcase'],
    ['Notre équipe', 'Qui répond à vos appels.', se_lien('a-propos'), 'users'],
    ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Demander une étude sur mesure', se_lien('etude-sur-mesure'), 'bouton']); ?>

</main>
<?php get_footer();
