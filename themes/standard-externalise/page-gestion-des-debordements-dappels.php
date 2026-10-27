<?php
/**
 * Page « Débordement d'appels » (adresse : /gestion-des-debordements-dappels/).
 * Expressions visées : débordement d'appels, gestion des débordements d'appels, renvoi d'appel.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Débordement d’appels : un relais quand vous êtes occupé',
    'Gestion des débordements d’appels : quand votre ligne est occupée ou que vous ne décrochez pas, nos conseillères en France répondent en votre nom. Vous ne payez que les appels traités.',
    'Gestion des débordements d’appels',
    'conseillere-souriante.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Gestion des débordements',
    'titre'   => 'Débordement d’appels : gardez la main pendant vos <em>pics d’activité</em>',
    'texte'   => 'Vous décrochez quand vous pouvez. Quand vos lignes sont occupées, après quelques sonneries ou pendant vos absences, nos conseillères prennent le relais en votre nom.',
    'bouton2' => ['Découvrir nos solutions', '#situations'],
    'points'  => [['phone-fwd', 'Vos appels<br>pris en relais'], ['clock', 'Une continuité<br>de service'], ['users', 'Une équipe<br>en France']],
    'image'   => 'conseillere-souriante.webp',
    'alt'     => 'Conseillère prenant en charge un appel en débordement',
    'badge'   => ['phone', 'Vos appels,<br>entre de bonnes mains.'],
]); ?>

<section class="section" id="situations">
  <div class="wrap">
    <?php se_titre_section('Dans quelles situations&nbsp;?', 'Un relais efficace pour tous vos <em>pics d’activité</em>', 'Le débordement d’appels se déclenche uniquement quand vous en avez besoin. Le reste du temps, c’est vous qui décrochez.'); ?>
    <?php se_cartes([
        ['phone-in', 'Après quelques sonneries', 'Si personne ne décroche au bout du nombre de sonneries que vous avez choisi, l’appel arrive chez nous.'],
        ['chart', 'Pendant les pics d’activité', 'Rentrée, saison haute, périodes fiscales : nous absorbons le surplus d’appels.'],
        ['calendar', 'Pendant vos absences', 'Congés, réunions, rendez-vous, chantiers : vos appels restent pris.'],
        ['users', 'En renfort ponctuel', 'Pour un lancement, un événement ou un imprévu dans votre équipe.'],
    ]); ?>
  </div>
</section>

<?php se_split('conseillere-equipe.webp', 'Conseillère en ligne dans un bureau', 'gauche', function () { ?>
    <p class="kicker">Vos enjeux, nos réponses</p>
    <h2>Pourquoi choisir le <em>débordement d’appels&nbsp;?</em></h2>
    <p>Un appel sans réponse, c’est souvent un client qui rappelle ailleurs. La gestion des débordements d’appels garantit une réponse humaine à vos appelants, sans changer votre organisation.</p>
    <?php se_atouts([
        ['phone', 'Moins d’appels perdus', 'Les appels que vous ne pouvez pas prendre ne tombent plus sur une messagerie.'],
        ['shield', 'Une continuité de service', 'Vos clients obtiennent une réponse, quelle que soit la situation.'],
        ['users', 'Des équipes moins sollicitées', 'Vos collaborateurs restent concentrés sur leur travail.'],
    ], 3); ?>
<?php }); ?>

<section class="section method">
  <div class="wrap">
    <?php se_titre_section('Comment ça marche&nbsp;?', 'Un fonctionnement <em>simple et transparent</em>', 'Le débordement repose sur un renvoi d’appel conditionnel, programmé sur votre ligne : vous gardez votre numéro.'); ?>
    <?php se_etapes([
        ['Votre ligne ne répond pas', 'Ligne occupée, sonneries dépassées ou plage horaire programmée.', 'phone-fwd'],
        ['Nos conseillères décrochent', 'En votre nom, avec votre formule d’accueil.', 'headset'],
        ['Traitement selon vos consignes', 'Message, transfert d’un appel urgent ou prise de rendez-vous.', 'chat'],
        ['Transmission du message', 'Par e-mail dès la fin de l’appel, et par SMS en option.', 'mail'],
    ]); ?>
  </div>
</section>

<section class="section">
  <div class="wrap example-grid">
    <div>
      <p class="kicker">Exemple d’usage</p>
      <h2>Un artisan joignable, même en <em>période de forte activité</em></h2>
      <p>Un artisan du bâtiment reçoit beaucoup d’appels le lundi matin et pendant la haute saison, au moment où il est sur ses chantiers. Avec le débordement d’appels, il décroche quand il le peut ; sinon, une conseillère prend la demande de devis et la lui transmet.</p>
      <p><a href="<?php echo se_lien('metiers/artisans-btp'); ?>">Voir notre page dédiée aux artisans et au BTP</a></p>
    </div>
    <div class="encadre-box">
      <h3>Ce que ça change</h3>
      <ul class="liste-coches">
        <li><?php echo se_icon('check', ''); ?>Les appels pris pendant les chantiers</li>
        <li><?php echo se_icon('check', ''); ?>Les demandes de devis notées et transmises</li>
        <li><?php echo se_icon('check', ''); ?>Moins d’interruptions dans la journée</li>
        <li><?php echo se_icon('check', ''); ?>Des clients renseignés et rassurés</li>
      </ul>
    </div>
  </div>
</section>

<?php se_faq([
    ['À partir de combien de sonneries le débordement se déclenche-t-il&nbsp;?', 'C’est vous qui choisissez. Le renvoi d’appel conditionnel se règle sur votre ligne, auprès de votre opérateur : nous vous aidons à le paramétrer.'],
    ['Puis-je définir des plages horaires précises&nbsp;?', 'Oui, si votre opérateur le permet : par exemple, renvoyer vos appels uniquement pendant vos rendez-vous ou à l’heure du déjeuner. Notre ligne est ouverte du lundi au vendredi, de 8h à 19h.'],
    ['Comment sont transmis les messages&nbsp;?', 'Par e-mail dès la fin de l’appel, avec le nom de l’appelant, ses coordonnées et l’objet de sa demande. Une notification par SMS est possible en option.'],
    ['Mes appelants savent-ils que l’appel est pris en débordement&nbsp;?', 'La conseillère répond au nom de votre entreprise, avec votre formule d’accueil. Ce que vous dites ou non à vos clients reste votre choix.'],
    ['Le débordement d’appels convient-il aux petites structures&nbsp;?', 'Oui. Vous ne payez que les appels que nous traitons réellement, plus des frais de gestion mensuels. Le détail est sur notre page <a href="' . se_lien('tarifs') . '">tarifs</a>.'],
], 'Vous avez des questions sur la gestion des débordements d’appels ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Permanence téléphonique', 'Quand vous préférez confier tous vos appels.', se_lien('permanence-telephonique'), 'headset'],
    ['Artisans et BTP', 'La formule des artisans, pendant les chantiers.', se_lien('metiers/artisans-btp'), 'tools'],
    ['Expertise comptable', 'Un renfort pendant les périodes fiscales.', se_lien('metiers/expertise-comptable'), 'calc'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Échanger avec nous', se_lien('contact'), 'bouton']); ?>

</main>
<?php get_footer();
