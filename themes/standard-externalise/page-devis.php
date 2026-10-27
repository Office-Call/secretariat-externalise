<?php
/**
 * Page « Demander un devis » (adresse : /devis/).
 * Expression visée : devis standard téléphonique externalisé.
 * Aucun prix n'est calculé en ligne : le visiteur décrit son besoin, le devis est établi par l'équipe.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Devis standard téléphonique externalisé : réponse sous 24 h',
    'Demandez votre devis de standard téléphonique externalisé : décrivez votre activité, vos appels et vos horaires, vous recevez une proposition chiffrée sous 24 heures ouvrées. Gratuit, sans engagement.',
    'Devis de standard téléphonique externalisé',
    'conseillere-formulaire.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'clair'   => true,
    'kicker'  => 'Demander un devis',
    'titre'   => 'Votre devis de standard externalisé <em>sous 24 heures</em>',
    'texte'   => 'Décrivez votre activité et vos appels en quelques lignes. Nous vous répondons avec une proposition chiffrée, adaptée à votre volume d’appels et à ce que vous attendez de nous. Gratuit et sans engagement.',
    'image'   => 'conseillere-formulaire.webp',
    'alt'     => 'Conseillère préparant un devis de standard téléphonique externalisé',
]); ?>

<section class="section">
  <div class="wrap form-grid">
    <div class="form-card">
      <h2 class="form-title">Décrivez votre besoin</h2>
      <?php echo shortcode_exists('sesim_contact') ? do_shortcode('[sesim_contact type="devis"]') : '<p>Le formulaire n’est pas disponible pour l’instant. Appelez-nous ou <a href="' . se_lien('contact') . '">écrivez-nous</a>.</p>'; ?>
    </div>
    <div class="contact-side">
      <p class="kicker">Ce qui se passe ensuite</p>
      <h2>Un devis construit <em>sur votre activité</em></h2>
      <?php se_atouts([
          ['mail', 'Sous 24 heures ouvrées', 'Vous recevez une proposition chiffrée par e-mail. Si une précision nous manque, nous vous appelons avant.'],
          ['doc', 'Un devis détaillé', 'Le prix par appel selon le traitement attendu, les frais de gestion et de mise en service, ligne par ligne. Aucun frais caché.'],
          ['chart', 'Facturé au réel', 'Chaque mois, vous ne payez que les appels réellement traités. Un mois calme coûte moins cher.'],
          ['heart', 'Sans engagement', 'Vous décidez après avoir lu le devis. Le premier échange ne vous engage à rien.'],
      ], 1); ?>
    </div>
  </div>
</section>

<section class="section section-tint">
  <div class="wrap def-grid def-grid-wide">
    <div class="def-text">
      <p class="kicker">Pourquoi un devis plutôt qu’un prix affiché ?</p>
      <h2>Parce que deux entreprises n’ont pas <em>les mêmes appels</em></h2>
      <p>Notre prix d’entrée est public : <a href="<?php echo se_lien('tarifs'); ?>">à partir de <?php echo esc_html(se_prix_appel() ?: '1,99 € HT'); ?> par appel traité</a>. Mais un cabinet qui reçoit 60 appels par mois pour des rendez-vous et un artisan qui en reçoit 200 pour des demandes de devis n’ont pas le même besoin. Le prix dépend de votre nombre d’appels, du traitement attendu et des plages horaires à couvrir.</p>
      <p>Plutôt qu’un chiffre moyen qui ne correspondrait à personne, nous préférons lire votre demande et vous proposer un prix juste, en une journée. Notre page <a href="<?php echo se_lien('tarifs'); ?>">tarifs</a> explique en détail comment il est construit.</p>
    </div>
    <?php se_etapes([
        ['Vous décrivez votre besoin', 'Activité, nombre d’appels, horaires, ce que vous attendez pendant l’appel.', 'doc'],
        ['Nous vous rappelons si besoin', 'Pour préciser un point, jamais pour vous vendre plus que nécessaire.', 'phone'],
        ['Vous recevez votre devis', 'Sous 24 heures ouvrées, détaillé ligne par ligne.', 'mail'],
        ['Vous démarrez quand vous voulez', 'Consignes rédigées ensemble, renvoi d’appel, premiers appels pris.', 'bolt'],
    ], 'steps-cards'); ?>
  </div>
</section>

<?php se_faq([
    ['Le devis est-il gratuit ?', 'Oui, et sans engagement. Vous le recevez par e-mail et vous décidez ensuite.'],
    ['En combien de temps est-ce que je reçois mon devis ?', 'Sous 24 heures ouvrées. Si votre demande arrive un vendredi après-midi, vous l’avez le lundi.'],
    ['Je ne connais pas mon nombre d’appels, que faire ?', 'Indiquez « Je ne sais pas encore » : nous vous aidons à l’estimer à partir de votre activité, et le premier relevé mensuel permettra d’ajuster la formule.'],
    ['Que comprend le prix ?', 'Un prix par appel traité, qui dépend de ce que nous faisons pendant l’appel (message, transfert ou rendez-vous), des frais de gestion mensuels et une mise en service unique. Tout est indiqué sur le devis.'],
    ['Mon besoin est plus complexe (plusieurs sites, plusieurs lignes)', 'Demandez plutôt une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a> : nous vous rappelons pour construire la solution avec vous.'],
], 'Vous avez des questions avant de demander votre devis ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Comment sont construits nos tarifs', 'Ce qui fait le prix : volume, traitement, horaires.', se_lien('tarifs'), 'chart'],
    ['Notre méthode', 'De la rédaction des consignes au premier appel pris.', se_lien('comment-ca-fonctionne'), 'gear'],
    ['Votre métier', 'Artisans, juridique, comptabilité, immobilier, services à la personne.', se_lien('metiers'), 'briefcase'],
]); ?>

</main>
<?php get_footer();
