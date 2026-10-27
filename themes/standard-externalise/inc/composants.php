<?php
/**
 * Composants de mise en page (blocs réutilisables) des pages de services.
 * Les textes passés à ces fonctions sont écrits dans les gabarits du thème ;
 * ils peuvent contenir un <em> pour le mot en rose des titres.
 */
if (!defined('ABSPATH')) {
    exit;
}

/** Pictogrammes au trait (24 × 24). */
function se_icon($nom, $classe = 'ico')
{
    $p = [
        'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/>',
        'phone-in' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/><path d="M15 3a6 6 0 0 1 6 6M15 6.5A2.5 2.5 0 0 1 17.5 9"/>',
        'phone-fwd' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/><path d="M15 6h7M19 3l3 3-3 3"/>',
        'headset'  => '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="2.5" y="13" width="4" height="6" rx="1.5"/><rect x="17.5" y="13" width="4" height="6" rx="1.5"/><path d="M19.5 19c0 1.5-2 2.5-5 2.5"/>',
        'transfer' => '<path d="M17 3l4 4-4 4"/><path d="M3 11V9a2 2 0 0 1 2-2h16"/><path d="M7 21l-4-4 4-4"/><path d="M21 13v2a2 2 0 0 1-2 2H3"/>',
        'calendar' => '<rect x="3" y="4" width="18" height="17" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 17.5h.01M12 17.5h.01"/>',
        'calendar-check' => '<rect x="3" y="4" width="18" height="17" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M9 15.5l2 2 4-4"/>',
        'clipboard' => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'clipboard-check' => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="M9 13l2 2 4-4"/>',
        'chat'     => '<path d="M21 12a8 8 0 0 1-11.6 7.1L4 21l1.9-5.2A8 8 0 1 1 21 12z"/><path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/>',
        'laptop'   => '<rect x="4" y="4" width="16" height="11" rx="1.5"/><path d="M2 19h20"/>',
        'bell'     => '<path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.9 1.9 0 0 0 3.4 0"/>',
        'target'   => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'chart'    => '<path d="M4 20V14M10 20V9M16 20V12M22 20V4"/>',
        'star'     => '<path d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1 6.2L12 17.3 6.5 20.2l1-6.2L3 9.6l6.2-.9z"/>',
        'nodes'    => '<circle cx="12" cy="5" r="2.5"/><circle cx="5" cy="19" r="2.5"/><circle cx="19" cy="19" r="2.5"/><path d="M11 7.2l-4.8 9.5M13 7.2l4.8 9.5M7.5 19h9"/>',
        'users'    => '<circle cx="9" cy="7" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.5"/><path d="M16 14.2c2.8.3 5 2.6 5 5.8"/>',
        'user'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/>',
        'shield'   => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
        'check'    => '<path d="M5 12l5 5 9-10"/>',
        'scale'    => '<path d="M12 3v18M7 21h10M5 7h14"/><path d="M5 7l-3 7a3 3 0 0 0 6 0zM19 7l-3 7a3 3 0 0 0 6 0z"/>',
        'home'     => '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
        'calc'     => '<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8v4H8zM8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 13h18"/>',
        'tools'    => '<path d="M14.7 6.3a4 4 0 0 0 5 5L21 13l-8 8-3-3"/><path d="M3 21l6-6M4 4l5 5M7 3L3 7l2 2 4-4z"/>',
        'france'   => '<path d="M4 7l4-3 4 2 4-2 4 3-2 5 2 6-6 2-4-2-4 2-2-6 2-4z"/>',
        'bolt'     => '<path d="M13 2L4 14h7l-1 8 9-12h-7z"/>',
        'send'     => '<path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4z"/>',
        'heart'    => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8z"/>',
        'gear'     => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'doc'      => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h5"/>',
        'pause'    => '<circle cx="12" cy="12" r="9"/><path d="M10 9v6M14 9v6"/>',
        'plus'     => '<path d="M12 5v14M5 12h14"/>',
        'x'        => '<path d="M6 6l12 12M18 6L6 18"/>',
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
    ];
    return '<svg class="' . esc_attr($classe) . '" viewBox="0 0 24 24" aria-hidden="true">' . ($p[$nom] ?? $p['check']) . '</svg>';
}

/** Bouton. $style : rose | contour-clair | contour */
function se_bouton($texte, $lien, $style = 'rose', $fleche = true)
{
    $c = ['rose' => 'btn btn-rose', 'contour-clair' => 'btn btn-outline-light', 'contour' => 'btn btn-ghost'][$style] ?? 'btn btn-rose';
    return '<a class="' . $c . '" href="' . esc_url($lien) . '">' . esc_html($texte) . ($fleche ? ' ' . se_fleche() : '') . '</a>';
}

/** Bandeau de tête des pages de services (même construction que l'accueil). */
function se_hero(array $a)
{
    ?>
<section class="hero hero-page<?php echo !empty($a['clair']) ? ' hero-light' : ''; ?>">
  <div class="wrap hero-grid">
    <div class="hero-text">
      <?php se_fil_html(empty($a['clair'])); ?>
      <p class="kicker <?php echo empty($a['clair']) ? 'kicker-light' : ''; ?>"><?php echo esc_html($a['kicker']); ?></p>
      <h1><?php echo $a['titre']; ?></h1>
      <p class="hero-lead"><?php echo esc_html($a['texte']); ?></p>
      <?php if (!empty($a['bouton2'])) : ?>
      <div class="btn-row">
        <?php echo se_bouton($a['bouton1'][0] ?? 'Demander un devis', $a['bouton1'][1] ?? se_lien('devis')); ?>
        <?php echo se_bouton($a['bouton2'][0], $a['bouton2'][1], empty($a['clair']) ? 'contour-clair' : 'contour', false); ?>
      </div>
      <?php endif; ?>
      <?php if (!empty($a['points'])) : ?>
      <ul class="hero-points">
        <?php foreach ($a['points'] as $pt) : ?>
        <li><?php echo se_icon($pt[0], ''); ?><span><?php echo $pt[1]; ?></span></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
    <div class="hero-media">
      <img src="<?php echo se_img($a['image']); ?>" alt="<?php echo esc_attr($a['alt']); ?>" width="900" height="1125" fetchpriority="high">
      <?php if (!empty($a['badge'])) : ?>
      <div class="hero-badge">
        <span class="hero-badge-icon"><?php echo se_icon($a['badge'][0], ''); ?></span>
        <span><?php echo $a['badge'][1]; ?></span>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
    <?php
}

/** Titre de section : petit surtitre rose + titre + chapeau. */
function se_titre_section($kicker, $titre, $texte = '', $centre = true, $niveau = 'h2')
{
    echo '<div class="section-head' . ($centre ? ' center' : ' left') . '">';
    echo '<p class="kicker">' . esc_html($kicker) . '</p>';
    echo "<$niveau>" . $titre . "</$niveau>";
    if ($texte) {
        echo '<p>' . $texte . '</p>';
    }
    echo '</div>';
}

/** Grille de cartes à pictogramme : [[icône, titre, texte, lien?], …]. Première carte sombre si $sombre. */
function se_cartes(array $items, $sombre = false, $classe = '')
{
    $n = count($items);
    echo '<div class="cards cards-' . $n . ' ' . esc_attr($classe) . '">';
    foreach ($items as $i => $c) {
        $tag = !empty($c[3]) ? 'a' : 'div';
        $href = !empty($c[3]) ? ' href="' . esc_url($c[3]) . '"' : '';
        echo "<$tag class=\"card" . ($sombre && $i === 0 ? ' card-dark' : '') . "\"$href>";
        echo se_icon($c[0]);
        echo '<h3>' . $c[1] . '</h3><p>' . $c[2] . '</p>';
        if (!empty($c[3])) {
            echo '<span class="card-go" aria-hidden="true">' . se_icon('arrow', '') . '</span>';
        }
        echo "</$tag>";
    }
    echo '</div>';
}

/** Petites cartes d'atouts (pictogramme à gauche) : [[icône, titre, texte], …] */
function se_atouts(array $items, $colonnes = 3)
{
    echo '<div class="atouts atouts-' . (int) $colonnes . '">';
    foreach ($items as $c) {
        echo '<div class="atout">' . se_icon($c[0]) . '<div><h3>' . $c[1] . '</h3><p>' . $c[2] . '</p></div></div>';
    }
    echo '</div>';
}

/** Liste cochée en cartes : [[titre, texte], …] */
function se_coches(array $items)
{
    echo '<ul class="coches">';
    foreach ($items as $c) {
        echo '<li><span class="coche">' . se_icon('check', '') . '</span><div><strong>' . $c[0] . '</strong><span>' . $c[1] . '</span></div></li>';
    }
    echo '</ul>';
}

/** Section image + texte. $cote : gauche (image à gauche) | droite */
function se_split($image, $alt, $cote, callable $contenu)
{
    ?>
<section class="split <?php echo $cote === 'gauche' ? 'split-left' : 'split-right'; ?>">
  <?php if ($cote === 'gauche') : ?><div class="split-media"><img src="<?php echo se_img($image); ?>" alt="<?php echo esc_attr($alt); ?>" width="1100" height="825" loading="lazy"></div><?php endif; ?>
  <div class="split-text"><?php $contenu(); ?></div>
  <?php if ($cote !== 'gauche') : ?><div class="split-media"><img src="<?php echo se_img($image); ?>" alt="<?php echo esc_attr($alt); ?>" width="1100" height="825" loading="lazy"></div><?php endif; ?>
</section>
    <?php
}

/** Étapes numérotées : [[titre, texte, icône?], …] */
function se_etapes(array $items, $classe = '')
{
    echo '<ol class="steps ' . esc_attr($classe) . '">';
    foreach ($items as $i => $e) {
        echo '<li><span class="step-num">' . ($i + 1) . '</span>';
        if (!empty($e[2])) {
            echo se_icon($e[2], 'step-ico');
        }
        echo '<h3>' . $e[0] . '</h3><p>' . $e[1] . '</p></li>';
    }
    echo '</ol>';
}

/** Comparatif : $lignes = [[critère, nous, eux], …] */
function se_comparatif(array $lignes, $nous = 'Standard externalisé', $eux = 'Salariée dédiée')
{
    echo '<div class="compare" role="table" aria-label="Comparatif">';
    echo '<div class="compare-row compare-head" role="row"><span role="columnheader"></span><span role="columnheader" class="compare-us">' . se_icon('headset', '') . esc_html($nous) . '</span><span role="columnheader" class="compare-them">' . se_icon('user', '') . esc_html($eux) . '</span></div>';
    foreach ($lignes as $l) {
        echo '<div class="compare-row" role="row"><span role="rowheader">' . esc_html($l[0]) . '</span>';
        echo '<span role="cell" class="compare-us"><i class="yes">' . se_icon('check', '') . '</i>' . esc_html($l[1]) . '</span>';
        echo '<span role="cell" class="compare-them"><i class="no">' . se_icon('x', '') . '</i>' . esc_html($l[2]) . '</span></div>';
    }
    echo '</div>';
}

/** Questions fréquentes : titre à gauche, accordéon à droite. */
function se_faq(array $qr, $intro = 'Vous avez des questions ? Voici les réponses aux plus fréquentes.')
{
    ?>
<section class="section faq-section">
  <div class="wrap faq-grid">
    <div class="faq-intro">
      <p class="kicker">Vos questions, nos réponses</p>
      <h2>FAQ</h2>
      <p><?php echo esc_html($intro); ?></p>
      <?php echo se_bouton('Nous contacter', se_lien('contact')); ?>
    </div>
    <div class="faq-list">
      <?php foreach ($qr as $i => $x) : ?>
      <details class="faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
        <summary><?php echo esc_html($x[0]); ?><span class="faq-sign" aria-hidden="true"></span></summary>
        <p><?php echo $x[1]; ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script type="application/ld+json"><?php
    $data = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($qr as $x) {
        $data['mainEntity'][] = ['@type' => 'Question', 'name' => $x[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => wp_strip_all_tags($x[1])]];
    }
    echo wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?></script>
    <?php
}

/** Bandeau d'appel à l'action de bas de page, avec second bouton au choix. */
function se_cta_final($second = null)
{
    $second = $second ?: ['ou demander une étude sur mesure', se_lien('etude-sur-mesure'), 'lien'];
    ?>
<section class="cta">
  <div class="wrap cta-inner">
    <div>
      <p class="kicker kicker-light">Tarifs et devis</p>
      <h2>Recevez votre devis sous 24 heures</h2>
      <p>Décrivez votre activité et vos appels en quelques lignes : nous vous répondons avec une proposition chiffrée, adaptée à votre volume d’appels. Gratuit et sans engagement.</p>
    </div>
    <div class="cta-actions<?php echo $second[2] === 'bouton' ? ' cta-actions-row' : ''; ?>">
      <?php echo se_bouton('Demander un devis', se_lien('devis')); ?>
      <?php if ($second[2] === 'bouton') : ?>
        <?php echo se_bouton($second[0], $second[1], 'contour-clair', false); ?>
      <?php else : ?>
        <a class="cta-link" href="<?php echo esc_url($second[1]); ?>"><?php echo esc_html($second[0]); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>
    <?php
}

/** Prix d'appel « à partir de » saisi dans Apparence › Personnaliser › Tarifs affichés (chaîne vide = sur devis). */
function se_prix_appel()
{
    return trim((string) get_theme_mod('se_prix_appel', '1,99 € HT'));
}

/**
 * Maillage interne : bloc « Pour aller plus loin » avec 3 ou 4 liens vers des pages voisines.
 * $liens : [[titre, texte, url, icône?], …]
 */
function se_maillage(array $liens, $titre = 'Pour aller <em>plus loin</em>', $kicker = 'Pages utiles')
{
    ?>
<section class="section section-tight maillage">
  <div class="wrap">
    <?php se_titre_section($kicker, $titre, '', false); ?>
    <div class="cards cards-<?php echo count($liens); ?> cards-centre">
      <?php foreach ($liens as $l) : ?>
      <a class="card" href="<?php echo esc_url($l[2]); ?>"><?php echo se_icon($l[3] ?? 'arrow'); ?><h3><?php echo esc_html($l[0]); ?></h3><p><?php echo esc_html($l[1]); ?></p><span class="card-go" aria-hidden="true"><?php echo se_icon('arrow', ''); ?></span></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
    <?php
}

/**
 * Section de texte de fond (référencement) : titre, paragraphes et sous-parties.
 * $blocs : [[h2 (peut contenir <em>), [paragraphes…]], …] — chaque paragraphe peut contenir des liens.
 */
function se_texte(array $blocs, $kicker = 'En détail')
{
    ?>
<section class="section section-tint texte-fond">
  <div class="wrap texte-fond-inner">
    <p class="kicker"><?php echo esc_html($kicker); ?></p>
    <?php foreach ($blocs as $b) : ?>
    <h2><?php echo $b[0]; ?></h2>
    <?php foreach ($b[1] as $par) : ?><p><?php echo $par; ?></p><?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</section>
    <?php
}

/** Bandeau de chiffres : [[valeur, libellé, petit-surtitre?], …] — uniquement des chiffres vérifiés. */
function se_stats(array $items)
{
    echo '<section class="stats" aria-label="Quelques chiffres"><div class="wrap stats-grid stats-' . count($items) . '">';
    foreach ($items as $s) {
        echo '<div class="stat">' . (!empty($s[2]) ? '<p class="stat-small">' . esc_html($s[2]) . '</p>' : '') . '<p class="stat-num">' . esc_html($s[0]) . '</p><p>' . esc_html($s[1]) . '</p></div>';
    }
    echo '</div></section>';
}

/** Colonnes thématiques : [[icône, surtitre, titre (avec <em>), texte, [coches]], …] */
function se_colonnes(array $items)
{
    echo '<div class="colonnes-theme colonnes-' . count($items) . '">';
    foreach ($items as $c) {
        echo '<div class="col-theme"><div class="col-theme-head">' . se_icon($c[0]) . '<div><p class="kicker">' . esc_html($c[1]) . '</p><h3>' . $c[2] . '</h3></div></div>';
        echo '<p>' . $c[3] . '</p><ul class="liste-coches">';
        foreach ($c[4] as $li) {
            echo '<li>' . se_icon('check', '') . $li . '</li>';
        }
        echo '</ul></div>';
    }
    echo '</div>';
}

/** Cartes « formule » avec prix : [[icône, titre, texte, [coches], prix, unité, bouton[texte,lien], sombre?], …] */
function se_formules(array $items)
{
    echo '<div class="formules">';
    foreach ($items as $f) {
        echo '<div class="formule' . (!empty($f[7]) ? ' formule-dark' : '') . '"><div class="formule-head">' . se_icon($f[0]) . '<div><h3>' . esc_html($f[1]) . '</h3><p>' . esc_html($f[2]) . '</p></div></div><ul class="liste-coches">';
        foreach ($f[3] as $li) {
            echo '<li>' . se_icon('check', '') . esc_html($li) . '</li>';
        }
        echo '</ul><div class="formule-prix">' . ($f[4] ? '<span>À partir de</span><strong>' . esc_html($f[4]) . ' <small>HT</small></strong>' : '<span>Tarif</span><strong>Sur devis</strong>') . '<em>' . esc_html($f[5]) . '</em></div>';
        echo se_bouton($f[6][0], $f[6][1], !empty($f[7]) ? 'contour-clair' : 'rose') . '</div>';
    }
    echo '</div>';
}

/** Exemples d'usage par métier : [[icône, métier, titre, besoin, réponse, lien], …] */
function se_cas(array $items)
{
    echo '<div class="cas">';
    foreach ($items as $c) {
        echo '<article class="cas-item"><p class="cas-tag">' . se_icon($c[0], '') . esc_html($c[1]) . '</p><h3>' . esc_html($c[2]) . '</h3>';
        echo '<div class="cas-ligne"><strong>Le besoin</strong><p>' . esc_html($c[3]) . '</p></div>';
        echo '<div class="cas-ligne"><strong>Notre réponse</strong><p>' . esc_html($c[4]) . '</p></div>';
        echo '<a class="cas-lien" href="' . esc_url($c[5]) . '">Voir la page métier ' . se_icon('arrow', '') . '</a></article>';
    }
    echo '</div>';
}

/**
 * Page métier complète.
 * $c : seo[titre, description, service], hero[...], atouts[[icône,titre,texte]×4], split[titre, texte, coches[]],
 *      appels[[icône, libellé]×4], message[titre, lignes[[libellé, valeur]]], formule[texte, lien],
 *      texte[[h2, [paragraphes]]] (texte de fond pour le référencement), faq[[q, r]], liens[[titre, texte, url, icône]].
 */
function se_page_metier(array $c)
{
    se_seo($c['seo'][0], $c['seo'][1], $c['seo'][2], $c['hero']['image'] ?? '');
    get_header();
    echo '<main id="contenu">';
    se_hero($c['hero']);
    ?>
<section class="section section-tight">
  <div class="wrap"><?php se_cartes($c['atouts'], false, 'cards-4 cards-centre'); ?></div>
</section>
    <?php
    se_split($c['split']['image'], $c['split']['alt'], 'gauche', function () use ($c) {
        echo '<p class="kicker">' . esc_html($c['split']['kicker']) . '</p><h2>' . $c['split']['titre'] . '</h2><p>' . $c['split']['texte'] . '</p><ul class="liste-coches">';
        foreach ($c['split']['coches'] as $li) {
            echo '<li>' . se_icon('check', '') . esc_html($li) . '</li>';
        }
        echo '</ul>';
    });
    ?>
<section class="section section-tint">
  <div class="wrap example-grid">
    <div>
      <p class="kicker">Les appels que nous prenons pour vous</p>
      <h2><?php echo $c['appels_titre']; ?></h2>
      <div class="tuiles tuiles-2"><?php foreach ($c['appels'] as $t) : ?><div class="tuile"><?php echo se_icon($t[0]); ?><span><?php echo esc_html($t[1]); ?></span></div><?php endforeach; ?></div>
      <p><?php echo $c['formule'][0]; ?></p>
    </div>
    <div class="encadre-box message-exemple">
      <p class="kicker">Exemple de message transmis</p>
      <h3><?php echo esc_html($c['message'][0]); ?></h3>
      <dl><?php foreach ($c['message'][1] as $l) : ?><dt><?php echo esc_html($l[0]); ?></dt><dd><?php echo esc_html($l[1]); ?></dd><?php endforeach; ?></dl>
      <p class="message-pied"><?php echo se_icon('mail', ''); ?>Envoyé par e-mail dès la fin de l’appel</p>
    </div>
  </div>
</section>
    <?php
    if (!empty($c['texte'])) {
        se_texte($c['texte'], $c['texte_kicker'] ?? 'Le standard externalisé pour votre métier');
    }
    se_faq($c['faq'], 'Vous avez des questions sur notre accueil téléphonique pour votre métier ? Voici les réponses aux plus fréquentes.');
    if (!empty($c['liens'])) {
        se_maillage($c['liens']);
    }
    se_cta_final(['Découvrir nos solutions', se_lien('standard-telephonique-externalise'), 'bouton']);
    echo '</main>';
    get_footer();
}
