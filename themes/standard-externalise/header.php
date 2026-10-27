<?php if (!defined('ABSPATH')) { exit; } ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip" href="#contenu">Aller au contenu</a>

<header class="site-header">
  <div class="wrap header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>, retour à l'accueil">
      <img src="<?php echo se_img('logo.png'); ?>" alt="Standard Externalisé — L'humain en avance" width="640" height="204">
    </a>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principal">
      <span class="menu-toggle-bars" aria-hidden="true"></span>
      <span class="sr">Menu</span>
    </button>

    <nav id="menu-principal" class="main-nav" aria-label="Menu principal">
      <?php se_menu_principal(); ?>
      <a class="btn btn-rose nav-cta" href="<?php echo se_lien('devis'); ?>">Demander un devis <?php echo se_fleche(); ?></a>
    </nav>
  </div>
</header>
