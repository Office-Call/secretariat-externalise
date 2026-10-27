<?php
/* Bandeau de titre des pages et articles. L'extrait de la page (s'il est rempli) sert de chapeau. */
if (!defined('ABSPATH')) { exit; }
?>
<section class="page-hero">
  <div class="wrap">
    <?php se_fil_html(true); ?>
    <h1><?php the_title(); ?></h1>
    <?php if (has_excerpt()) : ?><p class="page-lead"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?>
  </div>
</section>
