<?php
/* Page « Étude sur mesure » (adresse : /etude-sur-mesure/). */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Étude sur mesure : standard externalisé pour gros volumes',
    'Plusieurs lignes, plusieurs sites, gros volumes d’appels ou intégration à vos outils : demandez une étude sur mesure de votre standard téléphonique externalisé.',
    'Étude sur mesure de standard téléphonique externalisé',
    'rendez-vous-conseil.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'clair'   => true,
    'kicker'  => 'Étude sur mesure',
    'titre'   => 'Une solution sur mesure pour <em>les besoins plus complexes</em>',
    'texte'   => 'Plusieurs lignes, plusieurs sites, plusieurs centaines d’appels par mois ou une intégration à vos outils : parlons de votre projet.',
    'image'   => 'rendez-vous-conseil.webp',
    'alt'     => 'Conseillère en rendez-vous avec un dirigeant d’entreprise',
]); ?>

<section class="section">
  <div class="wrap form-grid">
    <div>
      <p class="kicker">Comment ça se passe</p>
      <h2>Une proposition construite <em>avec vous</em></h2>
      <?php se_atouts([
          ['chat', 'Un échange personnalisé', 'Nous vous rappelons pour comprendre votre organisation et vos appels.'],
          ['gear', 'Une solution adaptée', 'Lignes, sites, horaires, outils : nous concevons le service avec vous.'],
          ['doc', 'Un devis détaillé', 'Chaque prestation et chaque option, ligne par ligne.'],
          ['users', 'Un suivi par la même équipe', 'De l’étude à la mise en service, puis au quotidien.'],
      ], 1); ?>
    </div>
    <div class="form-card">
      <h2 class="form-title">Demander une étude sur mesure</h2>
      <?php echo shortcode_exists('sesim_contact') ? do_shortcode('[sesim_contact type="etude"]') : ''; ?>
    </div>
  </div>
</section>

</main>
<?php get_footer();
