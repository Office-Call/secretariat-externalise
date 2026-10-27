<?php if (!defined('ABSPATH')) { exit; }
$texte = get_theme_mod('se_pied_texte') ?: 'Une permanence téléphonique haut de gamme, humaine et sur mesure, pour ne manquer aucun appel et renforcer votre image professionnelle.';
$tel = get_theme_mod('se_telephone');
$mail = get_theme_mod('se_email');
$li = get_theme_mod('se_linkedin');
?>
<footer class="site-footer">
  <div class="wrap footer-grid">
    <div class="footer-brand">
      <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo se_img('monogramme.png'); ?>" alt="" width="160" height="134">
        <span>Standard<br>Externalisé</span>
      </a>
      <p><?php echo esc_html($texte); ?></p>
      <?php if ($tel || $mail) : ?>
      <p class="footer-contact">
        <?php if ($tel) : ?><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $tel)); ?>"><?php echo esc_html($tel); ?></a><br><?php endif; ?>
        <?php if ($mail) : ?><a href="mailto:<?php echo esc_attr($mail); ?>"><?php echo esc_html($mail); ?></a><?php endif; ?>
      </p>
      <?php endif; ?>
      <?php if ($li) : ?>
      <a class="social" href="<?php echo esc_url($li); ?>" aria-label="Standard Externalisé sur LinkedIn" rel="noopener"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="4"/><path d="M7 10v7M7 7v.01M11 17v-4a2 2 0 0 1 4 0v4M11 10v7"/></svg></a>
      <?php endif; ?>
    </div>
    <?php se_menu_pied(); ?>
  </div>
  <div class="wrap footer-bottom">
    <ul>
      <li><a href="<?php echo se_lien('mentions-legales'); ?>">Mentions légales</a></li>
      <li><a href="<?php echo esc_url(get_privacy_policy_url() ?: home_url('/politique-de-confidentialite/')); ?>">Confidentialité</a></li>
      <li><a href="<?php echo se_lien('cgv'); ?>">CGV</a></li>
      <li><a href="<?php echo se_lien('plan-du-site'); ?>">Plan du site</a></li>
    </ul>
    <p>© <?php echo esc_html(wp_date('Y')); ?> Standard Externalisé, un service d'OFFICE &amp; CALL SAS (SIREN 892 263 484). Tous droits réservés.</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
