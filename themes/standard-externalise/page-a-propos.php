<?php
/**
 * Page « Notre équipe » (adresse : /a-propos/).
 * Chiffres affichés : uniquement des faits vérifiés.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Notre équipe de conseillères téléphoniques en France',
    'Des conseillères salariées en France, encadrées depuis notre siège de Dax et formées par une dirigeante qui exerce ce métier depuis 2008. Une petite équipe qui connaît vos clients.',
    '',
    'equipe.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Notre équipe',
    'titre'   => 'Une équipe engagée, à la hauteur <em>de votre image</em>',
    'texte'   => 'Des conseillères salariées, basées en France, qui représentent votre entreprise et offrent à vos appelants un accueil chaleureux, professionnel et personnalisé.',
    'bouton2' => ['Nous contacter', se_lien('contact')],
    'points'  => [['france', 'Une équipe<br>en France'], ['headset', 'Des conseillères<br>salariées'], ['shield', 'Formées par<br>la dirigeante']],
    'image'   => 'equipe.webp',
    'alt'     => 'Conseillères de l’équipe Standard Externalisé avec leur casque',
    'badge'   => ['phone', 'Vos appels,<br>entre de bonnes mains.'],
]); ?>

<section class="section">
  <div class="wrap def-grid">
    <div class="def-text">
      <p class="kicker">Qui répond à vos appels&nbsp;?</p>
      <h2>Une petite équipe, <em>pas un plateau</em></h2>
      <p>Vos appels sont pris par des conseillères salariées en France, encadrées depuis notre siège de Dax, dans les Landes. Ce sont toujours les mêmes voix : elles connaissent vos consignes et, au fil des appels, vos clients.</p>
    </div>
    <div class="chiffres">
      <?php foreach ([['users', 'Salariées', 'pas d’intérimaires'], ['france', 'Siège à Dax', 'Landes, France'], ['star', 'Depuis 2008', 'l’expérience de la dirigeante'], ['heart', '50+', 'entreprises clientes']] as $c) : ?>
        <div class="chiffre"><?php echo se_icon($c[0]); ?><strong><?php echo esc_html($c[1]); ?></strong><span><?php echo esc_html($c[2]); ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php se_split('conseillere-souriante.webp', 'Conseillère souriante en ligne avec un client', 'gauche', function () { ?>
    <p class="kicker">Une équipe stable et formée</p>
    <h2>Bien plus qu’un standard, <em>une véritable équipe</em></h2>
    <p>OFFICE &amp; CALL a été fondée en 2020 par Catherine Delaistre, qui exerce les métiers de l’accueil téléphonique et de la relation client à distance depuis 2008. Elle forme elle-même chaque conseillère et suit chaque client.</p>
    <?php se_atouts([
        ['star', 'Expérience', 'Un métier exercé depuis 2008.'],
        ['users', 'Stabilité', 'Des conseillères salariées, toujours les mêmes voix.'],
        ['doc', 'Formation', 'Par la dirigeante, puis sur vos consignes.'],
        ['heart', 'Engagement', 'Le souci de bien représenter votre entreprise.'],
    ], 2); ?>
<?php }); ?>

<section class="section section-tint">
  <div class="wrap compare-grid">
    <div>
      <p class="kicker">Recrutement et formation</p>
      <h2>Une exigence de qualité, <em>du recrutement au quotidien</em></h2>
      <p>Nous recrutons des profils au sens relationnel affirmé, puis nous les formons à notre métier et à vos consignes.</p>
      <?php echo se_bouton('Découvrir notre méthode', se_lien('comment-ca-fonctionne')); ?>
    </div>
    <?php se_etapes([
        ['Recrutement', 'Des profils choisis pour leur sens du service.', 'users'],
        ['Formation initiale', 'Par la dirigeante, aux bonnes pratiques de l’accueil.', 'doc'],
        ['Formation à vos consignes', 'Votre métier, votre vocabulaire, vos priorités.', 'clipboard'],
        ['Suivi au quotidien', 'Ajustements et montée en compétence.', 'chart'],
    ], 'steps-cards'); ?>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Nos engagements au quotidien', 'Des valeurs concrètes <em>qui font la différence</em>'); ?>
    <?php se_cartes([
        ['headset', 'Écoute et attention', 'Prendre le temps de comprendre chaque demande.'],
        ['shield', 'Confidentialité', 'Vos informations traitées avec rigueur.'],
        ['target', 'Sens du service', 'Un accueil chaleureux, à chaque appel.'],
        ['users', 'Esprit d’équipe', 'Des conseillères qui se relaient pour vous.'],
        ['star', 'Fierté de vous représenter', 'Votre image est entre nos mains.'],
    ], false, 'cards-5'); ?>
  </div>
</section>

<?php get_template_part('parts/temoignages'); ?>

<?php se_faq([
    ['Où sont basées vos conseillères ?', 'En France. Elles sont salariées de l’entreprise et encadrées depuis notre siège de Dax, dans les Landes.'],
    ['Quelle est leur expérience ?', 'Elles sont formées par la dirigeante, qui exerce les métiers de l’accueil téléphonique et de la relation client depuis 2008.'],
    ['Comment sont-elles formées ?', 'Une formation initiale aux bonnes pratiques de l’accueil, puis une formation à vos consignes avant la mise en service.'],
    ['L’équipe est-elle stable ?', 'Oui : ce sont des conseillères salariées, pas des intérimaires. Vos clients entendent les mêmes voix.'],
    ['Peuvent-elles s’adapter à mon secteur d’activité ?', 'Oui. Vos consignes sont écrites pour votre métier, et nous les ajustons avec vous.'],
], 'Vous avez des questions sur notre équipe ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Notre méthode', 'Comment se passe la mise en place.', se_lien('comment-ca-fonctionne'), 'gear'],
    ['Avis clients', 'Ce qu’en disent nos clients.', se_lien('temoignages'), 'star'],
    ['Nos outils', 'Téléphonie, consignes, confidentialité.', se_lien('nos-outils'), 'laptop'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Étude sur mesure', se_lien('etude-sur-mesure'), 'bouton']); ?>

</main>
<?php get_footer();
