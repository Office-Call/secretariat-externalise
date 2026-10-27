<?php
/**
 * Plugin Name: Pages du site — Standard Externalisé
 * Description: Crée ou met à jour en un clic les pages de standard-externalise.fr (textes rédigés, bonnes adresses, bons modèles). Outils › Pages du site. À supprimer une fois les pages créées.
 * Version: 1.1.2
 * Author: OFFICE & CALL
 */

if (!defined('ABSPATH')) {
    exit;
}

require __DIR__ . '/inc/blocs.php';
require __DIR__ . '/inc/pages.php';

final class SEP_Pages
{
    public static function init()
    {
        add_action('admin_menu', function () {
            add_management_page('Pages du site', 'Pages du site', 'manage_options', 'sep-pages', [__CLASS__, 'ecran']);
        });
    }

    private static function chemin(array $p)
    {
        return !empty($p['parent']) ? $p['parent'] . '/' . $p['slug'] : $p['slug'];
    }

    /** Page existante : à son adresse prévue, sinon une page portant le même identifiant. */
    private static function existante(array $p)
    {
        $page = get_page_by_path(self::chemin($p));
        if (!$page && !empty($p['parent'])) {
            $page = get_page_by_path($p['slug']);
        }
        return $page ?: null;
    }

    private static function liens($html)
    {
        return str_replace('"@/', '"' . trailingslashit(home_url()), $html);
    }

    public static function ecran()
    {
        if (!current_user_can('manage_options')) {
            return;
        }
        $pages = sep_pages();
        $rapport = [];

        if (isset($_POST['sep_go']) && check_admin_referer('sep_pages')) {
            $choix = array_map('sanitize_key', (array) ($_POST['sep'] ?? []));
            $statut = ($_POST['sep_statut'] ?? 'publish') === 'draft' ? 'draft' : 'publish';
            $ids = [];
            foreach ($pages as $p) {
                $cle = sanitize_key(self::chemin($p));
                $exist = self::existante($p);
                if ($exist) {
                    $ids[$p['slug']] = $exist->ID;
                }
                if (!in_array($cle, $choix, true)) {
                    continue;
                }
                $parent = 0;
                if (!empty($p['parent'])) {
                    $parent = $ids[$p['parent']] ?? 0;
                    if (!$parent && ($pp = get_page_by_path($p['parent']))) {
                        $parent = $pp->ID;
                    }
                }
                $data = [
                    'post_type' => 'page',
                    'post_title' => $p['titre'],
                    'post_name' => $p['slug'],
                    'post_content' => self::liens($p['contenu']),
                    'post_excerpt' => $p['extrait'] ?? '',
                    'post_parent' => $parent,
                    'menu_order' => (int) ($p['ordre'] ?? 0),
                ];
                if ($exist) {
                    $data['ID'] = $exist->ID;
                    $id = wp_update_post(wp_slash($data), true);
                    $action = 'mise à jour (ancienne version gardée dans les révisions)';
                } else {
                    $data['post_status'] = !empty($p['a_completer']) ? 'draft' : $statut;
                    $id = wp_insert_post(wp_slash($data), true);
                    $action = $data['post_status'] === 'draft' ? 'créée en brouillon' : 'créée et publiée';
                }
                if (is_wp_error($id)) {
                    $rapport[] = ['err', $p['titre'], $id->get_error_message()];
                    continue;
                }
                $ids[$p['slug']] = $id;
                update_post_meta($id, '_wp_page_template', $p['modele'] ?? 'default');
                if (!empty($p['page_articles']) && !get_option('page_for_posts')) {
                    update_option('page_for_posts', $id);
                    $action .= ' — définie comme page des articles';
                }
                if ($p['slug'] === 'politique-de-confidentialite' && !get_option('wp_page_for_privacy_policy')) {
                    update_option('wp_page_for_privacy_policy', $id);
                }
                $rapport[] = ['ok', $p['titre'], $action, get_permalink($id)];
            }
        }

        echo '<div class="wrap"><h1>Pages du site</h1>';
        echo '<p>Cochez les pages à créer ou à mettre à jour. Les textes sont modifiables ensuite dans l’éditeur, comme n’importe quelle page.</p>';
        echo '<p><strong>Pages existantes :</strong> leur contenu est remplacé. L’ancienne version reste récupérable dans <em>Révisions</em> (dans l’éditeur de la page).<br><strong>Pages « à compléter » :</strong> elles contiennent des informations entre [crochets] à renseigner ; elles sont décochées par défaut et toujours créées en brouillon.</p>';

        if ($rapport) {
            echo '<div class="notice notice-success"><p><strong>Terminé.</strong></p><ul style="list-style:disc;padding-left:20px">';
            foreach ($rapport as $r) {
                echo $r[0] === 'ok'
                    ? '<li>' . esc_html($r[1]) . ' : ' . esc_html($r[2]) . ' — <a href="' . esc_url($r[3]) . '" target="_blank" rel="noopener">voir</a></li>'
                    : '<li style="color:#b32d2e">' . esc_html($r[1]) . ' : erreur — ' . esc_html($r[2]) . '</li>';
            }
            echo '</ul></div>';
        }

        echo '<form method="post">';
        wp_nonce_field('sep_pages');
        echo '<table class="widefat striped" style="max-width:980px"><thead><tr><td class="check-column"><input type="checkbox" id="sep-tout" aria-label="Tout cocher"></td><th>Page</th><th>Adresse</th><th>État actuel</th></tr></thead><tbody>';
        foreach ($pages as $p) {
            $cle = sanitize_key(self::chemin($p));
            $exist = self::existante($p);
            $etat = $exist ? 'Existe (' . esc_html(get_post_status_object($exist->post_status)->label) . ') — sera mise à jour' : 'À créer';
            $coche = empty($p['a_completer']);
            echo '<tr><th class="check-column"><input type="checkbox" name="sep[]" value="' . esc_attr($cle) . '" ' . checked($coche, true, false) . '></th>';
            echo '<td><strong>' . esc_html($p['titre']) . '</strong>' . (!empty($p['a_completer']) ? ' <span style="color:#b26200">— à compléter</span>' : '') . '</td>';
            echo '<td><code>/' . esc_html(self::chemin($p)) . '/</code></td><td>' . $etat . '</td></tr>';
        }
        echo '</tbody></table>';
        echo '<p><label>Les nouvelles pages sont : <select name="sep_statut"><option value="publish">publiées directement</option><option value="draft">créées en brouillon</option></select></label></p>';
        submit_button('Créer / mettre à jour les pages cochées', 'primary', 'sep_go');
        echo '</form>';
        echo '<script>document.getElementById("sep-tout").addEventListener("change",function(e){document.querySelectorAll("input[name=\'sep[]\']").forEach(function(c){c.checked=e.target.checked;});});</script>';
        echo '</div>';
    }
}

SEP_Pages::init();
