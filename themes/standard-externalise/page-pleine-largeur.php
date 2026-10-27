<?php
/*
 * Template Name: Pleine largeur (formulaires)
 * Template Post Type: page
 * Même gabarit que les pages, avec une zone de contenu large et sans bandeau d'appel à l'action en bas.
 * Utile pour une page créée dans l'éditeur qui contient un formulaire ([sesim_contact]).
 */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="contenu">
  <?php get_template_part('parts/bandeau-titre'); ?>
  <div class="page-body">
    <div class="wrap entry entry-wide">
      <?php the_content(); ?>
    </div>
  </div>
</main>
<?php endwhile;
get_footer();
