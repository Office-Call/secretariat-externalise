<?php
if (!defined('ABSPATH')) { exit; }
get_header(); ?>
<main id="contenu">
  <section class="page-hero">
    <div class="wrap">
      <h1>Cette page n'existe pas</h1>
      <p class="page-lead">Le lien est peut-être ancien, ou la page a été déplacée.</p>
    </div>
  </section>
  <div class="page-body">
    <div class="wrap entry">
      <p>Vous pouvez revenir à l'accueil, découvrir nos solutions ou nous demander un devis.</p>
      <p class="btn-row">
        <a class="btn btn-rose" href="<?php echo esc_url(home_url('/')); ?>">Retour à l'accueil</a>
        <a class="btn btn-ghost" href="<?php echo se_lien('devis'); ?>">Demander un devis</a>
      </p>
    </div>
  </div>
</main>
<?php get_footer();
