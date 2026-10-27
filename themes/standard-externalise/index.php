<?php
/* Liste des articles (page Guides et conseils, catégories, recherche). */
if (!defined('ABSPATH')) { exit; }
get_header(); ?>
<main id="contenu">
  <section class="page-hero">
    <div class="wrap">
      <h1><?php
        if (is_home()) { echo esc_html(get_the_title(get_option('page_for_posts')) ?: 'Guides et conseils'); }
        elseif (is_search()) { printf('Résultats pour « %s »', esc_html(get_search_query())); }
        else { the_archive_title(); }
      ?></h1>
      <?php if (is_home()) : ?><p class="page-lead">Conseils pratiques pour mieux gérer vos appels et votre accueil téléphonique.</p><?php endif; ?>
    </div>
  </section>
  <div class="page-body">
    <div class="wrap">
      <?php if (have_posts()) : ?>
      <div class="posts">
        <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('post-card'); ?>>
          <?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail('medium_large'); ?></a><?php endif; ?>
          <div class="post-card-body">
            <p class="post-date"><?php echo esc_html(get_the_date()); ?></p>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo esc_html(get_the_excerpt()); ?></p>
          </div>
        </article>
        <?php endwhile; ?>
      </div>
      <div class="pagination"><?php the_posts_pagination(['prev_text' => 'Précédent', 'next_text' => 'Suivant']); ?></div>
      <?php else : ?>
      <p class="entry">Aucun contenu pour le moment.</p>
      <?php endif; ?>
    </div>
  </div>
  <?php get_template_part('parts/cta'); ?>
</main>
<?php get_footer();
