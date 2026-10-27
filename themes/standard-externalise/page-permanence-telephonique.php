<?php
/**
 * Page « Permanence téléphonique » (adresse : /permanence-telephonique/).
 * Expressions visées : permanence téléphonique, permanence téléphonique externalisée, secrétariat téléphonique.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Permanence téléphonique externalisée, de 8h à 19h',
    'Permanence téléphonique externalisée : tous vos appels pris du lundi au vendredi de 8h à 19h, sans coupure le midi, par des conseillères salariées en France. Messages transmis par e-mail.',
    'Permanence téléphonique externalisée',
    'conseillere-casque.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Permanence téléphonique externalisée',
    'titre'   => 'Permanence téléphonique : <em>tous vos appels pris en charge</em>',
    'texte'   => 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi, nos conseillères répondent à tous vos appels en votre nom et vous transmettent chaque message.',
    'bouton2' => ['Voir nos tarifs', se_lien('tarifs')],
    'points'  => [['clock', 'De 8h à 19h<br>du lundi au vendredi'], ['shield', 'Sans coupure<br>le midi'], ['france', 'Une équipe<br>en France']],
    'image'   => 'conseillere-casque.webp',
    'alt'     => 'Conseillère assurant une permanence téléphonique',
    'badge'   => ['phone', 'Vos appels,<br>entre de bonnes mains.'],
]); ?>

<section class="section">
  <div class="wrap def-grid">
    <div class="def-text">
      <p class="kicker">Une présence continue</p>
      <h2>Une permanence téléphonique pour <em>ne plus manquer d’opportunités</em></h2>
      <p>Avec la permanence téléphonique, vous n’avez plus à surveiller votre téléphone. Chaque appel reçoit une réponse humaine, et vous recevez un message clair : nom, coordonnées, objet de l’appel, degré d’urgence.</p>
      <p>Pour ne nous confier que les appels que vous ne pouvez pas prendre, choisissez plutôt le <a href="<?php echo se_lien('gestion-des-debordements-dappels'); ?>">débordement d’appels</a>.</p>
    </div>
    <?php se_cartes([
        ['headset', 'Accueil personnalisé', 'En votre nom, avec votre formule d’accueil.'],
        ['doc', 'Prise de messages', 'Détaillés et transmis dès la fin de l’appel.'],
        ['phone-fwd', 'Transfert des appels importants', 'Vers vous, selon vos consignes.'],
        ['bell', 'Gestion des urgences', 'Transfert ou alerte par SMS.'],
    ], false, 'cards-compact'); ?>
  </div>
</section>

<?php se_split('conseillere-equipe.webp', 'Conseillères assurant la permanence téléphonique', 'gauche', function () { ?>
    <p class="kicker">Pour qui&nbsp;?</p>
    <h2>Une permanence pour <em>les professionnels occupés</em></h2>
    <p>La permanence téléphonique convient à ceux qui ne peuvent pas répondre au téléphone pendant leur journée de travail.</p>
    <?php se_coches([
        ['Professionnels en déplacement', 'Rendez-vous, terrain, chantiers.'],
        ['Dirigeants de TPE', 'Sans accueil téléphonique dédié.'],
        ['Professions libérales', 'Consultations et rendez-vous à la chaîne.'],
        ['Cabinets et agences', 'Des équipes occupées toute la journée.'],
    ]); ?>
<?php }); ?>

<section class="section section-tint">
  <div class="wrap">
    <?php se_titre_section('Nos formules', 'Des formules <em>adaptées à vos besoins</em>'); ?>
    <?php se_cartes([
        ['clock', 'Permanence complète', 'Tous vos appels, du lundi au vendredi de 8h à 19h.', se_lien('devis')],
        ['transfer', 'Débordement d’appels', 'Seulement les appels que vous ne pouvez pas prendre.', se_lien('gestion-des-debordements-dappels')],
        ['gear', 'Formule sur mesure', 'Plusieurs lignes, plusieurs sites ou gros volumes.', se_lien('etude-sur-mesure')],
    ], true, 'cards-3'); ?>
  </div>
</section>

<?php se_faq([
    ['Qui répond à mes appels ?', 'Des conseillères salariées, basées à Dax, formées à vos consignes. Ce sont toujours les mêmes voix.'],
    ['Quels sont les horaires de la permanence ?', 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi. En dehors de ces horaires, vos appels suivent la solution que vous avez prévue, par exemple votre messagerie.'],
    ['Puis-je personnaliser la formule d’accueil ?', 'Oui. La conseillère répond avec la formule que vous choisissez, au nom de votre entreprise.'],
    ['Comment me sont transmis les messages ?', 'Par e-mail dès la fin de l’appel, et par SMS en option.'],
    ['Combien coûte une permanence téléphonique ?', 'Vous payez les appels réellement traités, plus des frais de gestion mensuels. Le prix dépend de votre volume d’appels et de ce que vous attendez pendant l’appel : voir <a href="' . se_lien('tarifs') . '">comment nos tarifs sont construits</a>, puis <a href="' . se_lien('devis') . '">demandez votre devis</a>, gratuit et sans engagement.'],
], 'Vous avez des questions sur la permanence téléphonique ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Débordement d’appels', 'Quand vous voulez continuer à décrocher vous-même.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
    ['Prise de rendez-vous', 'Vos rendez-vous fixés dans votre agenda en ligne.', se_lien('prise-de-rendez-vous'), 'calendar'],
    ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(); ?>

</main>
<?php get_footer();
