<?php
/* Gabarit des pages : bandeau de titre aubergine, puis le contenu saisi dans l'éditeur. */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="contenu">
  <?php get_template_part('parts/bandeau-titre'); ?>
  <div class="page-body">
    <div class="wrap entry">
      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
    </div>
  </div>
  <?php get_template_part('parts/cta'); ?>
</main>
<?php endwhile;
get_footer();
