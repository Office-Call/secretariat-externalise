<?php
/* Article (guides et conseils). */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="contenu">
  <section class="page-hero">
    <div class="wrap">
      <?php se_fil_html(true); ?>
      <h1><?php the_title(); ?></h1>
      <p class="page-lead">Publié le <?php echo esc_html(get_the_date()); ?><?php if (get_the_modified_date('U') > get_the_date('U') + DAY_IN_SECONDS) : ?>, mis à jour le <?php echo esc_html(get_the_modified_date()); ?><?php endif; ?></p>
    </div>
  </section>
  <div class="page-body">
    <article <?php post_class('wrap entry'); ?>>
      <?php if (has_post_thumbnail()) : ?><figure class="entry-thumb"><?php the_post_thumbnail('large'); ?></figure><?php endif; ?>
      <?php the_content(); ?>
    </article>
  </div>
  <?php get_template_part('parts/cta'); ?>
</main>
<?php endwhile;
get_footer();
