<?php
/* Gabarit des pages légales : contenu saisi dans l'éditeur + navigation latérale. */
if (!defined('ABSPATH')) { exit; }
get_header();
$liens = [
    'mentions-legales' => 'Mentions légales',
    'politique-de-confidentialite' => 'Politique de confidentialité',
    'cgv' => 'Conditions générales de vente',
    'plan-du-site' => 'Plan du site',
];
$courant = get_post_field('post_name', get_the_ID());
while (have_posts()) : the_post(); ?>
<main id="contenu">
  <?php se_hero([
      'clair'  => true,
      'kicker' => 'Informations légales',
      'titre'  => esc_html(get_the_title()),
      'texte'  => 'Mis à jour le ' . get_the_modified_date() . '.',
      'image'  => 'bureau-juridique.webp',
      'alt'    => 'Document posé sur un bureau',
  ]); ?>
  <div class="page-body">
    <div class="wrap legal-grid">
      <nav class="legal-nav" aria-label="Pages légales">
        <?php foreach ($liens as $slug => $titre) : ?>
          <a class="<?php echo $courant === $slug ? 'is-on' : ''; ?>" href="<?php echo se_lien($slug); ?>"><?php echo esc_html($titre); ?></a>
        <?php endforeach; ?>
      </nav>
      <div class="entry legal-entry"><?php the_content(); ?></div>
    </div>
  </div>
</main>
<?php endwhile;
get_footer();
