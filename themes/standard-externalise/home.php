<?php
/* Page des articles : « Guides et conseils » (définie dans Réglages › Lecture). */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Guides et conseils pour votre accueil téléphonique',
    'Guides pratiques pour mieux gérer vos appels : standard externalisé ou secrétaire, débordement d’appels, prise de rendez-vous, organisation de l’accueil téléphonique.',
    '',
    'guides-conseils.webp'
);
get_header();
$cats = get_categories(['hide_empty' => true]);
$courante = is_category() ? get_queried_object_id() : 0;
?>
<main id="contenu">

<?php se_hero([
    'clair'   => true,
    'kicker'  => 'Guides et conseils',
    'titre'   => 'Nos conseils pour un accueil téléphonique <em>plus efficace</em>',
    'texte'   => 'Des articles pratiques pour mieux gérer vos appels, votre communication et votre organisation.',
    'image'   => 'guides-conseils.webp',
    'alt'     => 'Ordinateur affichant des guides pratiques sur l’accueil téléphonique',
]); ?>

<section class="section">
  <div class="wrap">
    <?php if ($cats) : ?>
    <nav class="filtres" aria-label="Catégories">
      <a class="<?php echo $courante ? '' : 'is-on'; ?>" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/')); ?>">Tous</a>
      <?php foreach ($cats as $c) : ?>
        <a class="<?php echo $courante === $c->term_id ? 'is-on' : ''; ?>" href="<?php echo esc_url(get_category_link($c)); ?>"><?php echo esc_html($c->name); ?></a>
      <?php endforeach; ?>
    </nav>
    <?php endif; ?>

    <?php if (have_posts()) : ?>
    <div class="posts">
      <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('post-card'); ?>>
        <?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail('medium_large'); ?></a><?php endif; ?>
        <div class="post-card-body">
          <p class="post-date"><?php echo esc_html(get_the_date()); ?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html(get_the_excerpt()); ?></p>
          <a class="cas-lien" href="<?php the_permalink(); ?>">Lire l’article <?php echo se_icon('arrow', ''); ?></a>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    <div class="pagination"><?php the_posts_pagination(['prev_text' => 'Précédent', 'next_text' => 'Suivant']); ?></div>
    <?php else : ?>
    <p class="center">Nos premiers guides arrivent bientôt.</p>
    <?php endif; ?>
  </div>
</section>

<?php se_cta_final(); ?>

</main>
<?php get_footer();
