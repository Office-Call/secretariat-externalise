<?php
/**
 * Petits générateurs de blocs Gutenberg : les pages créées restent entièrement modifiables dans l'éditeur.
 * Les liens internes s'écrivent href="@/adresse/" et pointent ensuite vers votre site.
 */
if (!defined('ABSPATH')) {
    exit;
}

final class SEP_B
{
    public static function p($html)
    {
        return "<!-- wp:paragraph -->\n<p>$html</p>\n<!-- /wp:paragraph -->\n\n";
    }

    public static function h2($t)
    {
        return "<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">$t</h2>\n<!-- /wp:heading -->\n\n";
    }

    public static function h3($t)
    {
        return "<!-- wp:heading {\"level\":3} -->\n<h3 class=\"wp-block-heading\">$t</h3>\n<!-- /wp:heading -->\n\n";
    }

    public static function ul(array $items, $ordered = false)
    {
        $tag = $ordered ? 'ol' : 'ul';
        $attr = $ordered ? ' {"ordered":true}' : '';
        $h = "<!-- wp:list$attr -->\n<$tag class=\"wp-block-list\">";
        foreach ($items as $i) {
            $h .= "<!-- wp:list-item -->\n<li>$i</li>\n<!-- /wp:list-item -->";
        }
        return $h . "</$tag>\n<!-- /wp:list -->\n\n";
    }

    public static function ol(array $items)
    {
        return self::ul($items, true);
    }

    /** $boutons = [[libellé, lien, contour?], …] */
    public static function btns(array $boutons)
    {
        $h = "<!-- wp:buttons -->\n<div class=\"wp-block-buttons\">";
        foreach ($boutons as $b) {
            $outline = !empty($b[2]);
            $h .= $outline ? "<!-- wp:button {\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\">" : "<!-- wp:button -->\n<div class=\"wp-block-button\">";
            $h .= "<a class=\"wp-block-button__link wp-element-button\" href=\"{$b[1]}\">{$b[0]}</a></div>\n<!-- /wp:button -->";
        }
        return $h . "</div>\n<!-- /wp:buttons -->\n\n";
    }

    /** Questions fréquentes repliables : [[question, réponse], …] */
    public static function faq(array $qr)
    {
        $h = '';
        foreach ($qr as $x) {
            $h .= "<!-- wp:details -->\n<details class=\"wp-block-details\"><summary>{$x[0]}</summary><!-- wp:paragraph -->\n<p>{$x[1]}</p>\n<!-- /wp:paragraph --></details>\n<!-- /wp:details -->\n\n";
        }
        return $h;
    }

    public static function sc($code)
    {
        return "<!-- wp:shortcode -->\n$code\n<!-- /wp:shortcode -->\n\n";
    }

    /** Encadré : un groupe avec la classe « encadre » (stylée par le thème). */
    public static function encadre($inner, $sombre = false)
    {
        $cls = $sombre ? 'encadre encadre-sombre' : 'encadre';
        return "<!-- wp:group {\"className\":\"$cls\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group $cls\">" . $inner . "</div>\n<!-- /wp:group -->\n\n";
    }

    /** Tableau simple : première ligne = en-tête. */
    public static function table(array $rows)
    {
        $head = array_shift($rows);
        $h = "<!-- wp:table -->\n<figure class=\"wp-block-table\"><table><thead><tr>";
        foreach ($head as $c) {
            $h .= "<th>$c</th>";
        }
        $h .= '</tr></thead><tbody>';
        foreach ($rows as $r) {
            $h .= '<tr>';
            foreach ($r as $c) {
                $h .= "<td>$c</td>";
            }
            $h .= '</tr>';
        }
        return $h . "</tbody></table></figure>\n<!-- /wp:table -->\n\n";
    }

    public static function sep()
    {
        return "<!-- wp:separator -->\n<hr class=\"wp-block-separator has-alpha-channel-opacity\"/>\n<!-- /wp:separator -->\n\n";
    }
}
