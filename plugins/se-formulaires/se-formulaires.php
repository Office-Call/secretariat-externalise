<?php
/**
 * Plugin Name: Formulaires — Standard Externalisé
 * Description: Formulaires de demande de devis, d'étude sur mesure et de contact, envoyés par e-mail. Remplace l'extension « Simulateur de devis » (aucun prix n'est calculé ni affiché). Shortcodes : [sesim_contact type="devis"], [sesim_contact type="etude"], [sesim_contact]
 * Version: 1.0.0
 * Author: OFFICE & CALL
 * Text Domain: se-formulaires
 */

if (!defined('ABSPATH')) {
    exit;
}

final class SE_Formulaires
{
    const VERSION = '1.0.0';
    const OPTION = 'sef_reglages';

    public static function defaults()
    {
        return [
            'email_dest' => get_option('admin_email'),
            'delai'      => '24 heures ouvrées',
        ];
    }

    public static function settings()
    {
        return array_merge(self::defaults(), (array) get_option(self::OPTION, []));
    }

    public static function init()
    {
        // Priorité 20 : si l'ancien Simulateur est encore actif, ce sont ces formulaires qui s'affichent.
        add_action('init', function () {
            add_shortcode('sesim_contact', [__CLASS__, 'shortcode']);
            add_shortcode('se_formulaire', [__CLASS__, 'shortcode']);
        }, 20);
        add_action('wp_ajax_sef_envoyer', [__CLASS__, 'ajax']);
        add_action('wp_ajax_nopriv_sef_envoyer', [__CLASS__, 'ajax']);
        add_action('wp_enqueue_scripts', [__CLASS__, 'register_assets']);
        add_action('admin_menu', [__CLASS__, 'admin_menu']);
        add_action('admin_init', [__CLASS__, 'admin_init']);
        add_action('admin_notices', [__CLASS__, 'notice_simulateur']);
    }

    public static function notice_simulateur()
    {
        if (class_exists('SE_Simulateur_Devis') && current_user_can('activate_plugins')) {
            echo '<div class="notice notice-warning"><p><strong>Formulaires — Standard Externalisé :</strong> l’extension « Simulateur de devis » est encore active. Désactivez-la puis supprimez-la (Extensions › Extensions installées) : le site n’affiche plus de prix calculés, et ses réglages de coûts n’ont plus de raison d’être en ligne.</p></div>';
        }
    }

    public static function register_assets()
    {
        $u = plugin_dir_url(__FILE__) . 'assets/';
        wp_register_style('sef', $u . 'formulaires.css', [], self::VERSION);
        wp_register_script('sef', $u . 'formulaires.js', [], self::VERSION, ['in_footer' => true, 'strategy' => 'defer']);
    }

    public static function metiers()
    {
        return [
            'Artisan, entreprise du bâtiment',
            'Avocat, notaire, profession juridique',
            'Cabinet d’expertise comptable',
            'Agence immobilière',
            'Services à la personne, réseau d’agences',
            'Profession libérale (autre)',
            'TPE / PME',
            'Association',
            'Autre',
        ];
    }

    public static function volumes()
    {
        return ['Moins de 50 appels par mois', '50 à 150 appels par mois', '150 à 300 appels par mois', '300 à 500 appels par mois', 'Plus de 500 appels par mois', 'Je ne sais pas encore'];
    }

    public static function horaires()
    {
        return ['Du lundi au vendredi, de 8h à 19h (toute la journée)', 'Seulement quand je ne décroche pas (débordement)', 'Certaines plages seulement (midi, fin de journée, congés…)', 'À définir ensemble'];
    }

    public static function traitements()
    {
        return ['message' => 'Prise de message et transmission', 'transfert' => 'Filtrage et transfert des appels urgents', 'rdv' => 'Prise de rendez-vous dans mon agenda', 'admin' => 'Assistance administrative en plus'];
    }

    /* ------------------------------------------------------------------ */
    /*  Affichage                                                          */
    /* ------------------------------------------------------------------ */

    public static function shortcode($atts)
    {
        $a = shortcode_atts(['type' => 'contact'], $atts);
        $type = in_array($a['type'], ['devis', 'etude', 'contact'], true) ? $a['type'] : 'contact';
        $s = self::settings();
        wp_enqueue_style('sef');
        wp_enqueue_script('sef');
        wp_localize_script('sef', 'SEF', ['ajax' => admin_url('admin-ajax.php')]);
        $uid = 'sef' . wp_rand(1000, 9999);
        $id = function ($k) use ($uid) { return $uid . '-' . $k; };
        $boutons = ['devis' => 'Recevoir mon devis', 'etude' => 'Demander mon étude', 'contact' => 'Envoyer mon message'];
        ob_start(); ?>
<form class="sef sef-<?php echo esc_attr($type); ?>" data-sef novalidate>
  <input type="hidden" name="type" value="<?php echo esc_attr($type); ?>">
  <input type="hidden" name="t0" value="<?php echo esc_attr(time()); ?>">
  <div class="sef-hp" aria-hidden="true"><label>Ne pas remplir <input type="text" name="site_web" tabindex="-1" autocomplete="off"></label></div>

  <div class="sef-row">
    <div><label class="sef-label" for="<?php echo $id('nom'); ?>">Nom et prénom</label><input id="<?php echo $id('nom'); ?>" name="nom" type="text" autocomplete="name" required></div>
    <div><label class="sef-label" for="<?php echo $id('soc'); ?>">Entreprise</label><input id="<?php echo $id('soc'); ?>" name="societe" type="text" autocomplete="organization" required></div>
  </div>
  <div class="sef-row">
    <div><label class="sef-label" for="<?php echo $id('mail'); ?>">E-mail</label><input id="<?php echo $id('mail'); ?>" name="email" type="email" autocomplete="email" required></div>
    <div><label class="sef-label" for="<?php echo $id('tel'); ?>">Téléphone</label><input id="<?php echo $id('tel'); ?>" name="telephone" type="tel" autocomplete="tel" required></div>
  </div>

  <?php if ($type === 'devis') : ?>
  <div class="sef-row">
    <div><label class="sef-label" for="<?php echo $id('metier'); ?>">Votre activité</label>
      <select id="<?php echo $id('metier'); ?>" name="metier" required>
        <option value="">Choisir…</option>
        <?php foreach (self::metiers() as $m) : ?><option><?php echo esc_html($m); ?></option><?php endforeach; ?>
      </select></div>
    <div><label class="sef-label" for="<?php echo $id('volume'); ?>">Appels reçus chaque mois (estimation)</label>
      <select id="<?php echo $id('volume'); ?>" name="volume" required>
        <option value="">Choisir…</option>
        <?php foreach (self::volumes() as $v) : ?><option><?php echo esc_html($v); ?></option><?php endforeach; ?>
      </select></div>
  </div>
  <label class="sef-label" for="<?php echo $id('horaires'); ?>">Quand souhaitez-vous que nous répondions ?</label>
  <select id="<?php echo $id('horaires'); ?>" name="horaires">
    <?php foreach (self::horaires() as $h) : ?><option><?php echo esc_html($h); ?></option><?php endforeach; ?>
  </select>
  <p class="sef-label">Ce que vous attendez pendant l’appel <small>(plusieurs choix possibles)</small></p>
  <div class="sef-checks">
    <?php foreach (self::traitements() as $k => $lib) : ?>
    <label><input type="checkbox" name="traitement[]" value="<?php echo esc_attr($k); ?>"<?php echo $k === 'message' ? ' checked' : ''; ?>> <?php echo esc_html($lib); ?></label>
    <?php endforeach; ?>
  </div>
  <label class="sef-label" for="<?php echo $id('msg'); ?>">Précisions utiles <small>(facultatif : vos horaires, vos outils, ce qui est urgent pour vous…)</small></label>
  <textarea id="<?php echo $id('msg'); ?>" name="message" rows="4"></textarea>

  <?php elseif ($type === 'etude') : ?>
  <div class="sef-row">
    <div><label class="sef-label" for="<?php echo $id('vol'); ?>">Volume d’appels estimé par mois</label><input id="<?php echo $id('vol'); ?>" name="volume" type="text" inputmode="numeric" placeholder="Ex. 1 500"></div>
    <div><label class="sef-label" for="<?php echo $id('sites'); ?>">Nombre de lignes ou de sites</label><input id="<?php echo $id('sites'); ?>" name="sites" type="text" placeholder="Ex. 3 agences"></div>
  </div>
  <label class="sef-label" for="<?php echo $id('outils'); ?>">Outils à utiliser <small>(agenda, logiciel métier, CRM…)</small></label>
  <input id="<?php echo $id('outils'); ?>" name="outils" type="text">
  <label class="sef-label" for="<?php echo $id('msg'); ?>">Décrivez votre besoin</label>
  <textarea id="<?php echo $id('msg'); ?>" name="message" rows="5" required></textarea>

  <?php else : ?>
  <label class="sef-label" for="<?php echo $id('msg'); ?>">Votre message</label>
  <textarea id="<?php echo $id('msg'); ?>" name="message" rows="5" required></textarea>
  <?php endif; ?>

  <label class="sef-consent"><input type="checkbox" name="consentement" value="1" required> J’accepte que mes coordonnées soient utilisées pour répondre à ma demande. Elles ne sont ni revendues ni utilisées à d’autres fins.</label>
  <p class="sef-error" role="alert" hidden></p>
  <p class="sef-ok" role="status" hidden><?php echo $type === 'devis' ? 'Merci, votre demande est bien envoyée. Vous recevez votre devis sous ' . esc_html($s['delai']) . '. Si une précision nous manque, nous vous appelons avant.' : 'Merci, votre demande est bien envoyée. Nous vous répondons sous ' . esc_html($s['delai']) . '.'; ?></p>
  <div class="sef-nav"><button type="submit" class="sef-btn"><?php echo esc_html($boutons[$type]); ?></button></div>
</form>
<?php
        return ob_get_clean();
    }

    /* ------------------------------------------------------------------ */
    /*  Envoi                                                              */
    /* ------------------------------------------------------------------ */

    public static function ajax()
    {
        nocache_headers();
        $p = wp_unslash($_POST);
        if (!empty($p['site_web']) || (time() - (int) ($p['t0'] ?? 0)) < 4) {
            wp_send_json_error(['message' => 'Envoi refusé. Rechargez la page puis recommencez.'], 400);
        }
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '0';
        $cle = 'sef_' . md5($ip . wp_salt());
        $nb = (int) get_transient($cle);
        if ($nb >= 5) {
            wp_send_json_error(['message' => 'Trop de messages en peu de temps. Appelez-nous ou réessayez dans une heure.'], 429);
        }
        $type = in_array($p['type'] ?? '', ['devis', 'etude', 'contact'], true) ? $p['type'] : 'contact';
        $f = [];
        foreach (['nom', 'societe', 'telephone', 'metier', 'volume', 'horaires', 'sites', 'outils'] as $k) {
            $f[$k] = sanitize_text_field($p[$k] ?? '');
        }
        $f['email'] = sanitize_email($p['email'] ?? '');
        $f['message'] = sanitize_textarea_field($p['message'] ?? '');
        $trait = self::traitements();
        $f['traitement'] = [];
        foreach ((array) ($p['traitement'] ?? []) as $t) {
            $t = sanitize_key($t);
            if (isset($trait[$t])) $f['traitement'][] = $trait[$t];
        }

        $err = [];
        if ($f['nom'] === '') $err[] = 'votre nom';
        if ($f['societe'] === '') $err[] = 'votre entreprise';
        if (!is_email($f['email'])) $err[] = 'une adresse e-mail valide';
        if (strlen(preg_replace('/\D/', '', $f['telephone'])) < 9) $err[] = 'un numéro de téléphone';
        if ($type === 'devis') {
            if ($f['metier'] === '') $err[] = 'votre activité';
            if ($f['volume'] === '') $err[] = 'votre nombre d’appels';
        } elseif ($f['message'] === '') {
            $err[] = 'votre message';
        }
        if (empty($p['consentement'])) $err[] = 'votre accord pour être recontacté';
        if ($err) {
            wp_send_json_error(['message' => 'Merci d’indiquer ' . implode(', ', $err) . '.'], 422);
        }

        $s = self::settings();
        $titres = ['devis' => 'Demande de devis', 'etude' => 'Demande d’étude sur mesure', 'contact' => 'Nouveau message'];
        $lignes = ['Nom' => $f['nom'], 'Entreprise' => $f['societe'], 'E-mail' => $f['email'], 'Téléphone' => $f['telephone']];
        if ($type === 'devis') {
            $lignes += ['Activité' => $f['metier'], 'Appels par mois' => $f['volume'], 'Horaires souhaités' => $f['horaires'], 'Attendu pendant l’appel' => implode(', ', $f['traitement'])];
        } elseif ($type === 'etude') {
            $lignes += ['Volume estimé' => $f['volume'], 'Lignes ou sites' => $f['sites'], 'Outils' => $f['outils']];
        }
        $h = '<div style="font-family:Arial,sans-serif;color:#1A0B16"><h2 style="color:#3A0F2E">' . $titres[$type] . ' — standard-externalise.fr</h2><table style="border-collapse:collapse">';
        foreach ($lignes as $k => $v) {
            if ($v === '') continue;
            $h .= '<tr><td style="padding:4px 12px 4px 0;color:#666;vertical-align:top">' . esc_html($k) . '</td><td style="padding:4px 0"><strong>' . esc_html($v) . '</strong></td></tr>';
        }
        $h .= '</table>';
        if ($f['message'] !== '') {
            $h .= '<p><strong>' . ($type === 'devis' ? 'Précisions' : 'Message') . ' :</strong><br>' . nl2br(esc_html($f['message'])) . '</p>';
        }
        $h .= '<p style="color:#888;font-size:12px">Reçu le ' . esc_html(wp_date('d/m/Y à H:i')) . '</p></div>';
        $prefixe = ['devis' => '[Devis] ', 'etude' => '[Étude sur mesure] ', 'contact' => '[Contact] '];
        $sujet = $prefixe[$type] . $f['societe'] . ' — ' . $f['nom'];
        $ok = wp_mail($s['email_dest'], $sujet, $h, ['Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $f['nom'] . ' <' . $f['email'] . '>']);
        if (!$ok) {
            wp_send_json_error(['message' => 'L’envoi a échoué sur le serveur. Appelez-nous ou écrivez-nous directement.'], 500);
        }
        // Accusé de réception au demandeur (texte simple, sans aucun prix).
        $accuse = "Bonjour " . $f['nom'] . ",\n\nNous avons bien reçu votre " . mb_strtolower($titres[$type]) . ". Nous vous répondons sous " . $s['delai'] . ".\n\nL’équipe Standard Externalisé\n" . home_url('/');
        wp_mail($f['email'], 'Votre demande est bien reçue — Standard Externalisé', $accuse, ['Content-Type: text/plain; charset=UTF-8']);
        set_transient($cle, $nb + 1, HOUR_IN_SECONDS);
        wp_send_json_success(['ok' => 1]);
    }

    /* ------------------------------------------------------------------ */
    /*  Réglages                                                           */
    /* ------------------------------------------------------------------ */

    public static function admin_menu()
    {
        add_options_page('Formulaires', 'Formulaires', 'manage_options', 'sef', [__CLASS__, 'admin_page']);
    }

    public static function admin_init()
    {
        register_setting('sef', self::OPTION, ['sanitize_callback' => function ($in) {
            return [
                'email_dest' => sanitize_email($in['email_dest'] ?? '') ?: get_option('admin_email'),
                'delai'      => sanitize_text_field($in['delai'] ?? '') ?: '24 heures ouvrées',
            ];
        }]);
    }

    public static function admin_page()
    {
        $s = self::settings();
        echo '<div class="wrap"><h1>Formulaires</h1>';
        echo '<p>Les demandes arrivent par e-mail. Codes courts à placer dans une page : <code>[sesim_contact type="devis"]</code> (demande de devis), <code>[sesim_contact type="etude"]</code> (étude sur mesure), <code>[sesim_contact]</code> (contact). Les pages Devis, Étude sur mesure et Contact du thème les affichent déjà.</p>';
        echo '<form method="post" action="options.php">';
        settings_fields('sef');
        echo '<table class="form-table" role="presentation">';
        echo '<tr><th scope="row"><label for="sef-email">Adresse qui reçoit les demandes</label></th><td><input class="regular-text" type="email" id="sef-email" name="' . self::OPTION . '[email_dest]" value="' . esc_attr($s['email_dest']) . '"></td></tr>';
        echo '<tr><th scope="row"><label for="sef-delai">Délai de réponse annoncé</label></th><td><input class="regular-text" type="text" id="sef-delai" name="' . self::OPTION . '[delai]" value="' . esc_attr($s['delai']) . '"><p class="description">Affiché dans le message de confirmation et l’accusé de réception, ex. « 24 heures ouvrées ».</p></td></tr>';
        echo '</table>';
        submit_button();
        echo '</form></div>';
    }
}

SE_Formulaires::init();
