<?php
/**
 * Thème Standard Externalisé
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SE_THEME_VERSION', '1.6.1');

require get_template_directory() . '/inc/menus.php';
require get_template_directory() . '/inc/composants.php';
require get_template_directory() . '/inc/avis.php';

/* ------------------------------------------------------------------ */
/*  Fonctionnalités                                                    */
/* ------------------------------------------------------------------ */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets']);
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor.css');
    add_post_type_support('page', 'excerpt');
    register_nav_menus(['principal' => 'Menu principal (en-tête et pied de page)']);

    // Palette et tailles proposées dans l'éditeur : uniquement celles de la charte.
    add_theme_support('editor-color-palette', [
        ['name' => 'Aubergine', 'slug' => 'aubergine', 'color' => '#3A0F2E'],
        ['name' => 'Rose', 'slug' => 'rose', 'color' => '#D9266A'],
        ['name' => 'Rose électrique', 'slug' => 'rose-electrique', 'color' => '#FF4D8D'],
        ['name' => 'Rose pâle', 'slug' => 'rose-pale', 'color' => '#F7D7DD'],
        ['name' => 'Sable doux', 'slug' => 'sable', 'color' => '#E8D9C9'],
        ['name' => 'Prune profonde', 'slug' => 'prune', 'color' => '#1A0B16'],
        ['name' => 'Blanc', 'slug' => 'blanc', 'color' => '#FFFFFF'],
    ]);
    add_theme_support('disable-custom-colors');
});

/* ------------------------------------------------------------------ */
/*  Styles et scripts                                                  */
/* ------------------------------------------------------------------ */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('se-main', get_theme_file_uri('assets/css/main.css'), [], SE_THEME_VERSION);
    wp_enqueue_style('se-contenu', get_theme_file_uri('assets/css/contenu.css'), ['se-main'], SE_THEME_VERSION);
    wp_enqueue_style('se-composants', get_theme_file_uri('assets/css/composants.css'), ['se-main'], SE_THEME_VERSION);
    wp_enqueue_script('se-main', get_theme_file_uri('assets/js/main.js'), [], SE_THEME_VERSION, ['in_footer' => true, 'strategy' => 'defer']);
});

add_action('wp_head', function () {
    foreach (['playfair-display-latin-600-normal', 'montserrat-latin-400-normal'] as $f) {
        echo '<link rel="preload" href="' . esc_url(get_theme_file_uri("assets/fonts/$f.woff2")) . '" as="font" type="font/woff2" crossorigin>' . "\n";
    }
    // Favicon du thème, seulement si aucune « Icône du site » n'est définie dans Apparence › Personnaliser.
    if (!has_site_icon()) {
        echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url(get_theme_file_uri('assets/img/favicon-32.png')) . '">' . "\n";
        echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url(get_theme_file_uri('assets/img/favicon-192.png')) . '">' . "\n";
        echo '<link rel="apple-touch-icon" href="' . esc_url(get_theme_file_uri('assets/img/apple-touch-icon.png')) . '">' . "\n";
    }
}, 2);

// Allègement : WordPress n'a pas besoin de ses scripts d'émojis ici.
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* ------------------------------------------------------------------ */
/*  Référencement de la page d'accueil                                 */
/*  (la description est laissée à l'extension SEO si vous en avez une) */
/* ------------------------------------------------------------------ */
function se_extension_seo_active()
{
    return defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || defined('AIOSEO_VERSION') || defined('SEOPRESS_VERSION');
}

add_action('wp_head', function () {
    if (!is_front_page()) {
        return;
    }
    if (!se_extension_seo_active()) {
        $desc = "Standard téléphonique externalisé : des conseillères salariées en France répondent en votre nom, du lundi au vendredi de 8h à 19h. Permanence, débordement d'appels, prise de rendez-vous. Devis gratuit sous 24 h.";
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr(get_bloginfo('name') . " — Chaque appel mérite une réponse d'exception") . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(home_url('/')) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url(get_theme_file_uri('assets/img/equipe.webp')) . '">' . "\n";
        echo '<meta property="og:locale" content="fr_FR">' . "\n";
    }
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => 'Standard Externalisé',
        'url' => home_url('/'),
        'logo' => get_theme_file_uri('assets/img/logo.png'),
        'description' => "Standard téléphonique externalisé : permanence téléphonique, gestion des débordements d'appels, prise de rendez-vous et assistance administrative, assurés par une équipe de conseillères salariées en France.",
        'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Dax', 'postalCode' => '40100', 'addressCountry' => 'FR'],
        'areaServed' => ['@type' => 'Country', 'name' => 'France'],
        'openingHoursSpecification' => ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '08:00', 'closes' => '19:00'],
        'parentOrganization' => ['@type' => 'Organization', 'name' => 'OFFICE & CALL SAS', 'taxID' => '892263484'],
    ];
    $tel = get_theme_mod('se_telephone');
    if ($tel) $data['telephone'] = $tel;
    $li = get_theme_mod('se_linkedin');
    if ($li) $data['sameAs'] = [$li];
    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</script>\n";
}, 5);

// Titre de la page d'accueil (si aucune extension SEO ne le gère).
add_filter('document_title_parts', function ($t) {
    if (is_front_page() && !se_extension_seo_active()) {
        $t['title'] = 'Standard téléphonique externalisé haut de gamme';
        $t['site'] = get_bloginfo('name');
        unset($t['tagline']);
    }
    return $t;
});

/* ------------------------------------------------------------------ */
/*  Réglages : Apparence › Personnaliser › Coordonnées                 */
/* ------------------------------------------------------------------ */
add_action('customize_register', function ($c) {
    $c->add_section('se_coordonnees', ['title' => 'Coordonnées', 'priority' => 30]);
    $champs = [
        'se_telephone' => ['Téléphone (affiché dans le pied de page)', 'sanitize_text_field'],
        'se_email'     => ['E-mail de contact', 'sanitize_email'],
        'se_linkedin'  => ['Adresse de la page LinkedIn', 'esc_url_raw'],
        'se_pied_texte' => ['Texte de présentation du pied de page', 'sanitize_textarea_field'],
    ];
    foreach ($champs as $id => $def) {
        $c->add_setting($id, ['default' => '', 'sanitize_callback' => $def[1]]);
        $c->add_control($id, ['label' => $def[0], 'section' => 'se_coordonnees', 'type' => $id === 'se_pied_texte' ? 'textarea' : 'text']);
    }

    $c->add_section('se_menu', [
        'title' => 'Menu du site',
        'priority' => 29,
        'description' => 'Par défaut, l\'en-tête et le pied de page affichent l\'arborescence validée du site. Cochez la case seulement si vous avez construit votre propre menu dans Apparence › Menus et l\'avez attribué à « Menu principal ».',
    ]);
    $c->add_setting('se_menu_perso', ['default' => 0, 'sanitize_callback' => 'absint']);
    $c->add_control('se_menu_perso', ['label' => 'Utiliser mon propre menu', 'section' => 'se_menu', 'type' => 'checkbox']);

    $c->add_section('se_tarifs', [
        'title' => 'Tarifs affichés',
        'priority' => 30,
        'description' => 'Le site n\'affiche aucun prix calculé. Vous pouvez indiquer ici un seul prix d\'appel « à partir de », affiché sur la page Tarifs. Par défaut : 1,99 € HT (prise de message). Laissez vide pour afficher « Sur devis ».',
    ]);
    $c->add_setting('se_prix_appel', ['default' => '1,99 € HT', 'sanitize_callback' => 'sanitize_text_field']);
    $c->add_control('se_prix_appel', ['label' => 'Prix d\'un appel « à partir de » (ex. 1,99 € HT) — facultatif', 'section' => 'se_tarifs', 'type' => 'text']);

    $c->add_section('se_temoignages', [
        'title' => 'Témoignages',
        'priority' => 31,
        'description' => 'Par défaut, le site affiche une sélection d\'avis Google d\'OFFICE & CALL, recopiés tels quels (fichier inc/avis.php). Si vous saisissez des avis ci-dessous, ils les remplacent. Uniquement de vrais avis, avec l\'accord du client.',
    ]);
    $c->add_setting('se_avis_google', ['default' => 1, 'sanitize_callback' => 'absint']);
    $c->add_control('se_avis_google', ['label' => 'Afficher les avis Google d\'OFFICE & CALL', 'section' => 'se_temoignages', 'type' => 'checkbox']);
    for ($i = 1; $i <= 4; $i++) {
        foreach (['texte' => 'Texte du témoignage', 'nom' => 'Nom (ex. Julien M.)', 'metier' => 'Métier, ville'] as $k => $label) {
            $id = "se_avis_{$i}_{$k}";
            $c->add_setting($id, ['default' => '', 'sanitize_callback' => $k === 'texte' ? 'sanitize_textarea_field' : 'sanitize_text_field']);
            $c->add_control($id, ['label' => "Avis $i — $label", 'section' => 'se_temoignages', 'type' => $k === 'texte' ? 'textarea' : 'text']);
        }
    }
});

/* ------------------------------------------------------------------ */
/*  Petits utilitaires de gabarit                                      */
/* ------------------------------------------------------------------ */
function se_img($fichier)
{
    return esc_url(get_theme_file_uri('assets/img/' . $fichier));
}

function se_lien($slug)
{
    return esc_url(home_url('/' . trim($slug, '/') . '/'));
}

function se_fleche()
{
    return '<svg class="arr" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
}

// Les extraits d'articles (page Guides) restent courts.
add_filter('excerpt_length', function () { return 28; });
add_filter('excerpt_more', function () { return '…'; });

/* ------------------------------------------------------------------ */
/*  Codes courts utilisables dans les pages                            */
/* ------------------------------------------------------------------ */

// [se_temoignages] : les témoignages saisis dans Apparence › Personnaliser › Témoignages.
add_shortcode('se_temoignages', function () {
    ob_start();
    get_template_part('parts/temoignages');
    $html = ob_get_clean();
    if (trim($html) === '' && current_user_can('edit_theme_options')) {
        return '<p><em>(Visible par vous seule : aucun témoignage saisi pour l\'instant. Ajoutez-les dans Apparence › Personnaliser › Témoignages.)</em></p>';
    }
    return $html;
});

// [se_plan_du_site] : liste de toutes les pages publiées.
add_shortcode('se_plan_du_site', function () {
    return '<ul class="plan-du-site">' . wp_list_pages(['title_li' => '', 'echo' => false, 'sort_column' => 'menu_order,post_title']) . '</ul>';
});

// [se_tel] et [se_email] : coordonnées saisies dans Apparence › Personnaliser › Coordonnées.
add_shortcode('se_tel', function () {
    $t = get_theme_mod('se_telephone');
    return $t ? '<a href="tel:' . esc_attr(preg_replace('/[^0-9+]/', '', $t)) . '">' . esc_html($t) . '</a>' : '[téléphone à renseigner dans Apparence › Personnaliser › Coordonnées]';
});
add_shortcode('se_email', function () {
    $m = get_theme_mod('se_email');
    return $m ? '<a href="mailto:' . esc_attr($m) . '">' . esc_html($m) . '</a>' : '[e-mail à renseigner dans Apparence › Personnaliser › Coordonnées]';
});

/* ------------------------------------------------------------------ */
/*  Référencement par page : titre Google, description, donnée         */
/*  « Service », image de partage. À appeler dans un gabarit,           */
/*  avant get_header().                                                 */
/* ------------------------------------------------------------------ */
function se_seo($titre, $description, $service = '', $image = '')
{
    $GLOBALS['se_seo'] = ['titre' => $titre, 'description' => $description, 'service' => $service, 'image' => $image];
}

/** Pages exclues des moteurs (obligatoires mais sans intérêt pour le référencement). */
function se_page_noindex()
{
    return is_page(['mentions-legales', 'politique-de-confidentialite', 'cgv']) || is_search() || is_404();
}

/** Fil d'Ariane de la page courante : [[nom, url], …], d'après les pages parentes de WordPress. */
function se_fil()
{
    $fil = [['Accueil', home_url('/')]];
    if (is_front_page()) {
        return $fil;
    }
    if (is_home()) {
        $p = get_option('page_for_posts');
        $fil[] = [$p ? get_the_title($p) : 'Guides et conseils', $p ? get_permalink($p) : home_url('/')];
        return $fil;
    }
    if (is_singular('post') && ($p = get_option('page_for_posts'))) {
        $fil[] = [get_the_title($p), get_permalink($p)];
    }
    if (is_page()) {
        foreach (array_reverse(get_post_ancestors(get_queried_object_id())) as $a) {
            $fil[] = [get_the_title($a), get_permalink($a)];
        }
    }
    if (is_singular()) {
        $fil[] = [get_the_title(), get_permalink()];
    } elseif (is_category()) {
        $fil[] = [single_cat_title('', false), get_category_link(get_queried_object_id())];
    }
    return $fil;
}

/** Fil d'Ariane visible (dans les bandeaux de page). */
function se_fil_html($clair = false)
{
    $fil = se_fil();
    if (count($fil) < 2) {
        return;
    }
    echo '<nav class="crumbs' . ($clair ? ' crumbs-dark' : '') . '" aria-label="Fil d\'Ariane">';
    foreach ($fil as $i => $f) {
        if ($i) echo '<span aria-hidden="true">›</span>';
        echo $i === count($fil) - 1 ? '<span aria-current="page">' . esc_html($f[0]) . '</span>' : '<a href="' . esc_url($f[1]) . '">' . esc_html($f[0]) . '</a>';
    }
    echo '</nav>';
}

add_filter('document_title_parts', function ($t) {
    if (!empty($GLOBALS['se_seo']) && !se_extension_seo_active()) {
        $t['title'] = $GLOBALS['se_seo']['titre'];
        unset($t['site'], $t['tagline']);
    }
    return $t;
}, 20);

add_action('wp_head', function () {
    if (se_page_noindex()) {
        if (!se_extension_seo_active()) {
            echo '<meta name="robots" content="noindex, follow">' . "\n";
        }
        return;
    }
    if (empty($GLOBALS['se_seo'])) {
        return;
    }
    $s = $GLOBALS['se_seo'];
    $image = $s['image'] ? get_theme_file_uri('assets/img/' . $s['image']) : get_theme_file_uri('assets/img/equipe.webp');
    if (!se_extension_seo_active()) {
        echo '<meta name="description" content="' . esc_attr($s['description']) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($s['titre']) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($s['description']) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(is_singular() ? get_permalink() : home_url(add_query_arg([]))) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
        echo '<meta property="og:locale" content="fr_FR">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    }
    if ($s['service']) {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $s['service'],
            'serviceType' => $s['service'],
            'description' => $s['description'],
            'url' => get_permalink(),
            'image' => $image,
            'areaServed' => ['@type' => 'Country', 'name' => 'France'],
            'provider' => ['@type' => 'ProfessionalService', 'name' => 'Standard Externalisé', 'url' => home_url('/')],
        ];
        echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</script>\n";
    }
    if (se_extension_seo_active()) {
        return; // le fil d'Ariane est déjà dans les données de l'extension SEO
    }
    $fil = se_fil();
    if (count($fil) > 1) {
        $items = [];
        foreach ($fil as $i => $f) {
            $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $f[0], 'item' => $f[1]];
        }
        echo '<script type="application/ld+json">' . wp_json_encode(['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</script>\n";
    }
}, 5);

/* Yoast : les titres et descriptions saisis dans Yoast restent toujours prioritaires.
   Quand rien n'est saisi pour une page, c'est le titre / la description du thème qui est utilisé
   (au lieu du titre brut « Nom de la page - Nom du site » et d'une description vide). */
function se_desc_repli()
{
    if (!empty($GLOBALS['se_seo']['description'])) {
        return $GLOBALS['se_seo']['description'];
    }
    if (is_front_page()) {
        return "Standard téléphonique externalisé : des conseillères salariées en France répondent en votre nom, du lundi au vendredi de 8h à 19h. Permanence, débordement d'appels, prise de rendez-vous. Devis gratuit sous 24 h.";
    }
    return '';
}
function se_titre_repli()
{
    if (!empty($GLOBALS['se_seo']['titre'])) {
        return $GLOBALS['se_seo']['titre'];
    }
    if (is_front_page()) {
        return 'Standard téléphonique externalisé haut de gamme | Standard Externalisé';
    }
    return '';
}
function se_yoast_saisi($cle)
{
    return is_singular() && trim((string) get_post_meta(get_queried_object_id(), $cle, true)) !== '';
}
foreach (['wpseo_metadesc', 'wpseo_opengraph_desc', 'wpseo_twitter_description'] as $f) {
    add_filter($f, function ($d) {
        if (se_yoast_saisi('_yoast_wpseo_metadesc') && is_string($d) && trim($d) !== '') {
            return $d;
        }
        $r = se_desc_repli();
        return $r !== '' ? $r : $d;
    });
}
foreach (['wpseo_title', 'wpseo_opengraph_title', 'wpseo_twitter_title'] as $f) {
    add_filter($f, function ($t) {
        if (se_yoast_saisi('_yoast_wpseo_title')) {
            return $t;
        }
        $r = se_titre_repli();
        return $r !== '' ? $r : $t;
    });
}
add_filter('wpseo_robots', function ($robots) {
    return se_page_noindex() ? 'noindex, follow' : $robots;
});
add_filter('wpseo_opengraph_image', function ($img) {
    if (se_yoast_saisi('_yoast_wpseo_opengraph-image')) {
        return $img;
    }
    $i = $GLOBALS['se_seo']['image'] ?? '';
    return $i ? get_theme_file_uri('assets/img/' . $i) : $img;
});

/* Les pages qui ont une mise en page dédiée (page-{adresse}.php) l'utilisent toujours,
   même si un autre modèle a été choisi dans l'éditeur. */
add_filter('template_include', function ($tpl) {
    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $dedie = locate_template('page-' . $slug . '.php');
        if ($dedie) {
            return $dedie;
        }
    }
    return $tpl;
}, 99);
