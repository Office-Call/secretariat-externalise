<?php
/* Page « Votre métier » (adresse : /metiers/) : porte d'entrée des pages métiers. */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Standard téléphonique externalisé par métier',
    'Un standard téléphonique externalisé adapté à votre métier : artisans et BTP, avocats et notaires, experts-comptables, agences immobilières, services à la personne.',
    '',
    'conseillere-bureau.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Votre métier, notre expertise',
    'titre'   => 'Un standard téléphonique <em>adapté à votre métier</em>',
    'texte'   => 'Un artisan, un avocat et une agence immobilière ne reçoivent pas les mêmes appels. Pour chaque client, nous écrivons des consignes adaptées à son métier.',
    'bouton2' => ['Parler de mon besoin', se_lien('contact')],
    'points'  => [['clipboard', 'Des consignes<br>par métier'], ['headset', 'Un accueil<br>personnalisé'], ['france', 'Une équipe<br>en France']],
    'image'   => 'conseillere-bureau.webp',
    'alt'     => 'Conseillère adaptant son accueil au métier du client',
    'badge'   => ['phone', 'Votre vocabulaire,<br>vos priorités.'],
]); ?>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Nos pages métiers', 'Choisissez <em>votre secteur</em>'); ?>
    <?php se_cartes([
        ['tools', 'Artisans et BTP', 'Vous êtes sur le chantier, nous prenons les demandes de devis.', se_lien('metiers/artisans-btp')],
        ['scale', 'Professions juridiques', 'Filtrage discret, messages précis, rendez-vous fixés.', se_lien('metiers/professions-juridiques')],
        ['calc', 'Expertise comptable', 'Un renfort pendant les périodes fiscales.', se_lien('metiers/expertise-comptable')],
        ['home', 'Immobilier', 'Aucun appel sur une annonce sans réponse.', se_lien('metiers/immobilier')],
        ['heart', 'Services à la personne', 'Familles et intervenants bien orientés.', se_lien('metiers/services-a-la-personne')],
    ], false, 'cards-5'); ?>
    <p class="center note-metier">Votre métier n’est pas dans la liste ? Nous accompagnons aussi d’autres TPE et PME : <a href="<?php echo se_lien('contact'); ?>">décrivez-nous votre activité</a>.</p>
  </div>
</section>

<?php se_maillage([
    ['Standard téléphonique externalisé', 'Le service de base, pour tous les métiers.', se_lien('standard-telephonique-externalise'), 'phone-in'],
    ['Débordement d’appels', 'Nous prenons le relais quand vous ne pouvez pas décrocher.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
    ['Prise de rendez-vous', 'Vos rendez-vous fixés dans votre agenda.', se_lien('prise-de-rendez-vous'), 'calendar'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
], 'Nos <em>solutions</em>', 'Pour aller plus loin'); ?>

<?php se_cta_final(); ?>

</main>
<?php get_footer();
