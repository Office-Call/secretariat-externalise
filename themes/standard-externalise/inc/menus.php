<?php
/**
 * Menus : un seul menu WordPress (« Menu principal ») alimente l'en-tête ET les colonnes du pied de page.
 * Tant qu'aucun menu n'est attribué dans Apparence › Menus, l'arborescence validée ci-dessous s'affiche.
 */

if (!defined('ABSPATH')) {
    exit;
}

function se_menu_par_defaut()
{
    $u = function ($slug) { return home_url('/' . $slug . '/'); };
    return [
        ['titre' => 'Nos solutions', 'url' => '', 'enfants' => [
            ['titre' => 'Standard téléphonique externalisé', 'url' => $u('standard-telephonique-externalise')],
            ['titre' => 'Permanence téléphonique', 'url' => $u('permanence-telephonique')],
            ['titre' => "Débordement d'appels", 'url' => $u('gestion-des-debordements-dappels')],
            ['titre' => 'Prise de rendez-vous', 'url' => $u('prise-de-rendez-vous')],
            ['titre' => 'Assistance administrative', 'url' => $u('assistance-administrative')],
        ]],
        ['titre' => 'Votre métier', 'url' => '', 'enfants' => [
            ['titre' => 'Artisans et BTP', 'url' => $u('metiers/artisans-btp')],
            ['titre' => 'Professions juridiques', 'url' => $u('metiers/professions-juridiques')],
            ['titre' => 'Expertise comptable', 'url' => $u('metiers/expertise-comptable')],
            ['titre' => 'Immobilier', 'url' => $u('metiers/immobilier')],
            ['titre' => 'Services à la personne', 'url' => $u('metiers/services-a-la-personne')],
        ]],
        ['titre' => 'Pourquoi nous ?', 'url' => '', 'enfants' => [
            ['titre' => 'Notre équipe', 'url' => $u('a-propos')],
            ['titre' => 'Notre méthode', 'url' => $u('comment-ca-fonctionne')],
            ['titre' => 'Témoignages et cas clients', 'url' => $u('temoignages')],
            ['titre' => 'Nos outils', 'url' => $u('nos-outils')],
            ['titre' => 'Guides et conseils', 'url' => $u('guides')],
        ]],
        ['titre' => 'Tarifs et devis', 'url' => '', 'enfants' => [
            ['titre' => 'Tarifs', 'url' => $u('tarifs')],
            ['titre' => 'Demander un devis', 'url' => $u('devis')],
            ['titre' => 'Étude sur mesure', 'url' => $u('etude-sur-mesure')],
            ['titre' => 'Contact', 'url' => $u('contact')],
        ]],
    ];
}

/**
 * Arborescence à deux niveaux.
 * Par défaut : l'arborescence validée ci-dessus, quel que soit le menu hérité de l'ancien thème.
 * Un menu WordPress n'est utilisé que si la case « Utiliser mon propre menu » est cochée
 * (Apparence › Personnaliser › Menu du site) ET qu'un menu est attribué à « Menu principal ».
 */
function se_menu_arbre()
{
    static $arbre = null;
    if ($arbre !== null) {
        return $arbre;
    }
    $lieux = get_nav_menu_locations();
    $items = (get_theme_mod('se_menu_perso') && !empty($lieux['principal'])) ? wp_get_nav_menu_items($lieux['principal']) : false;
    if (!$items) {
        return $arbre = se_menu_par_defaut();
    }
    $enfants = [];
    foreach ($items as $it) {
        $parent = (int) $it->menu_item_parent;
        if ($parent) {
            $enfants[$parent][] = ['titre' => $it->title, 'url' => $it->url, 'enfants' => []];
        }
    }
    $arbre = [];
    foreach ($items as $it) {
        if (!(int) $it->menu_item_parent) {
            $arbre[] = ['titre' => $it->title, 'url' => $it->url, 'enfants' => $enfants[$it->ID] ?? []];
        }
    }
    return $arbre;
}

function se_chevron()
{
    return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>';
}

function se_menu_principal()
{
    echo '<ul>';
    foreach (se_menu_arbre() as $n) {
        if (!empty($n['enfants'])) {
            echo '<li class="has-sub"><button type="button" aria-expanded="false">' . esc_html($n['titre']) . ' ' . se_chevron() . '</button><ul class="sub">';
            foreach ($n['enfants'] as $e) {
                echo '<li><a href="' . esc_url($e['url']) . '">' . esc_html($e['titre']) . '</a></li>';
            }
            echo '</ul></li>';
        } else {
            echo '<li><a class="nav-link" href="' . esc_url($n['url']) . '">' . esc_html($n['titre']) . '</a></li>';
        }
    }
    echo '</ul>';
}

function se_menu_pied()
{
    foreach (se_menu_arbre() as $n) {
        if (empty($n['enfants'])) {
            continue;
        }
        echo '<nav aria-label="' . esc_attr($n['titre']) . '"><p class="footer-title">' . esc_html($n['titre']) . '</p><ul>';
        foreach ($n['enfants'] as $e) {
            echo '<li><a href="' . esc_url($e['url']) . '">' . esc_html($e['titre']) . '</a></li>';
        }
        echo '</ul></nav>';
    }
}
