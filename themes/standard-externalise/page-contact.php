<?php
/* Page « Contact » (adresse : /contact/). */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Contact : parlons de votre standard téléphonique',
    'Contactez Standard Externalisé par téléphone, par e-mail ou via notre formulaire. Une équipe basée à Dax, joignable du lundi au vendredi de 8h à 19h.',
    '',
    'accueil-telephone.webp'
);
get_header();
$tel = get_theme_mod('se_telephone');
$mail = get_theme_mod('se_email');
?>
<main id="contenu">

<?php se_hero([
    'clair'   => true,
    'kicker'  => 'Contact',
    'titre'   => 'Parlons de <em>votre projet</em>',
    'texte'   => 'Une question, un besoin, un projet spécifique ? Notre équipe est à votre écoute.',
    'image'   => 'accueil-telephone.webp',
    'alt'     => 'Conseillère souriante répondant au téléphone',
]); ?>

<section class="section section-tight">
  <div class="wrap contact-cards">
    <div class="contact-card">
      <?php echo se_icon('phone'); ?>
      <h2>Par téléphone</h2>
      <?php if ($tel) : ?><a class="contact-big" href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $tel)); ?>"><?php echo esc_html($tel); ?></a><?php endif; ?>
      <p>Du lundi au vendredi, de 8h à 19h</p>
    </div>
    <div class="contact-card">
      <?php echo se_icon('mail'); ?>
      <h2>Par e-mail</h2>
      <?php if ($mail) : ?><a class="contact-big" href="mailto:<?php echo esc_attr($mail); ?>"><?php echo esc_html($mail); ?></a><?php endif; ?>
      <p>Réponse sous 24 heures ouvrées</p>
    </div>
    <div class="contact-card">
      <?php echo se_icon('doc'); ?>
      <h2>Un devis</h2>
      <a class="contact-big" href="<?php echo se_lien('devis'); ?>">Demander un devis</a>
      <p>Proposition chiffrée sous 24 heures ouvrées</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap form-grid">
    <div class="form-card">
      <h2 class="form-title">Envoyez-nous un message</h2>
      <?php echo shortcode_exists('sesim_contact') ? do_shortcode('[sesim_contact]') : ''; ?>
    </div>
    <div class="contact-side">
      <img src="<?php echo se_img('conseillere-equipe.webp'); ?>" alt="Conseillère de l’équipe Standard Externalisé" width="1100" height="825" loading="lazy">
      <ul class="liste-coches">
        <li><?php echo se_icon('check', ''); ?>Une équipe basée à Dax, en France</li>
        <li><?php echo se_icon('check', ''); ?>Une réponse sous 24 heures ouvrées</li>
        <li><?php echo se_icon('check', ''); ?>Un accompagnement personnalisé</li>
      </ul>
    </div>
  </div>
</section>

</main>
<?php get_footer();
