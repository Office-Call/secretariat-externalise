<?php
/**
 * Page « Tarifs » (adresse : /tarifs/).
 * Expressions visées : tarif standard téléphonique externalisé, prix permanence téléphonique.
 * Aucun prix calculable n'est publié. Un seul prix d'appel « à partir de » peut être affiché
 * (Apparence › Personnaliser › Tarifs affichés) ; sinon la page indique « Sur devis ».
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Tarifs standard téléphonique externalisé : comment est fixé le prix',
    'Prix d’un standard téléphonique externalisé : à partir de 1,99 € HT par appel traité. Ce qui fait le tarif (volume, traitement, horaires), ce qui est inclus, comparatif avec une secrétaire salariée. Devis sous 24 h.',
    'Tarifs du standard téléphonique externalisé',
    'conseillere-document.webp'
);
get_header();
$prix = se_prix_appel();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Tarifs',
    'titre'   => 'Tarifs du standard externalisé : <em>vous payez les appels traités</em>',
    'texte'   => ($prix ? 'À partir de ' . $prix . ' par appel traité. ' : '') . 'Pas d’abonnement à minutes, pas de forfait à deviner : un prix par appel, des frais de gestion mensuels, et un devis détaillé sous 24 heures. Un mois calme vous coûte moins cher.',
    'bouton2' => ['Demander une étude sur mesure', se_lien('etude-sur-mesure')],
    'points'  => [['chart', 'Facturé<br>au réel'], ['doc', 'Un devis<br>ligne par ligne'], ['headset', 'Une équipe<br>en France']],
    'image'   => 'conseillere-document.webp',
    'alt'     => 'Conseillère consultant un devis de standard téléphonique externalisé',
    'badge'   => ['phone', 'Un tarif adapté<br>à chaque activité.'],
]); ?>

<section class="section">
  <div class="wrap def-grid def-grid-wide">
    <div class="def-text">
      <p class="kicker">Ce qui fait le prix</p>
      <h2>Comment est calculé <em>votre tarif&nbsp;?</em></h2>
      <p>Le prix d’un standard téléphonique externalisé dépend de trois éléments : le <strong>nombre d’appels</strong> que nous traitons chaque mois, le <strong>traitement attendu</strong> pendant l’appel (prise de message, filtrage et transfert, ou prise de rendez-vous dans votre agenda) et les <strong>plages horaires</strong> à couvrir.</p>
      <p>Prendre un rendez-vous demande plus de temps que noter un message : le prix par appel en tient compte. Vous êtes facturé au relevé mensuel des appels réellement traités, plus des frais de gestion fixes qui couvrent vos consignes, leur mise à jour et votre suivi.</p>
    </div>
    <?php se_etapes([
        ['Votre volume d’appels', 'Le nombre d’appels que nous prenons chaque mois pour vous. C’est le premier facteur.', 'phone'],
        ['Le traitement attendu', 'Message, transfert des urgences ou rendez-vous : chacun a son prix par appel.', 'clipboard'],
        ['Les horaires à couvrir', 'Toute la journée, seulement en débordement, ou certaines plages.', 'clock'],
        ['Les options', 'Notification par SMS, plusieurs destinataires, assistance administrative.', 'plus'],
    ], 'steps-cards'); ?>
  </div>
</section>

<section class="section section-tint section-tight">
  <div class="wrap">
    <?php se_titre_section('Toujours inclus', 'Ce qui est inclus <em>dans toutes nos formules</em>', 'Quel que soit votre besoin, ces éléments font partie du service, sans supplément.', false); ?>
    <div class="incl">
      <?php foreach ([
          ['headset', 'Accueil personnalisé en votre nom'],
          ['chat', 'Écoute attentive et prise de message'],
          ['mail', 'Transmission des messages par e-mail'],
          ['france', 'Conseillères salariées en France'],
          ['clipboard', 'Consignes rédigées avec vous'],
          ['chart', 'Relevé mensuel des appels traités'],
      ] as $i) : ?>
        <div class="incl-item"><?php echo se_icon($i[0]); ?><span><?php echo esc_html($i[1]); ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="formules-head">
      <div>
        <p class="kicker">Nos formules</p>
        <h2>Des solutions souples <em>pour chaque besoin</em></h2>
      </div>
      <p>Choisissez la formule qui correspond à votre activité, ou demandez une <a href="<?php echo se_lien('etude-sur-mesure'); ?>">étude sur mesure</a> pour les gros volumes et les besoins particuliers. Le devis précise le prix de chaque appel selon le traitement.</p>
    </div>
    <?php se_formules([
        ['headset', 'Standard téléphonique', 'Un accueil professionnel pour tous vos appels, pendant nos horaires.', ['Réponse personnalisée en votre nom', 'Filtrage et qualification des appels', 'Messages transmis par e-mail', 'Adapté à tous les secteurs'], $prix, $prix ? 'par appel traité, prise de message' : 'prix par appel selon le traitement', ['Demander un devis', se_lien('devis')], true],
        ['transfer', 'Débordement d’appels', 'Nous prenons le relais quand vous ne pouvez pas décrocher.', ['Appels pris en renfort', 'Gestion des pics d’activité', 'Transfert des appels urgents', 'Vous ne payez que les appels reçus'], $prix, $prix ? 'par appel traité, prise de message' : 'prix par appel selon le traitement', ['Demander un devis', se_lien('devis')]],
        ['calendar', 'Prise de rendez-vous', 'Vos rendez-vous fixés dans votre agenda en ligne.', ['Planification selon vos règles', 'Qualification des demandes', 'Travail dans votre agenda', 'Modifications et annulations'], '', 'prix par appel, rendez-vous dans votre agenda', ['Demander un devis', se_lien('devis')]],
    ]); ?>
  </div>
</section>

<section class="section section-tint">
  <div class="wrap compare-grid">
    <div>
      <p class="kicker">Standard externalisé ou embauche&nbsp;?</p>
      <h2>Ce que vous payez, <em>et ce que vous ne payez pas</em></h2>
      <p>Une secrétaire salariée coûte le même prix que le téléphone sonne ou non. Avec un standard externalisé, le coût suit votre activité : vous payez les appels traités, et nous gérons les absences, les congés et les pics d’appels.</p>
    </div>
    <?php se_comparatif([
        ['Coût mensuel', 'Suit votre nombre d’appels', 'Fixe : salaire, charges, poste de travail'],
        ['Congés, maladie, formation', 'Gérés par nous, sans interruption', 'À organiser et à remplacer'],
        ['Pics d’appels', 'Plusieurs conseillères en relais', 'Une seule personne, une ligne occupée'],
        ['Mise en place', 'Quelques jours, sans embauche', 'Recrutement, contrat, période d’essai'],
        ['Engagement', 'Formule ajustable chaque mois', 'Contrat de travail'],
    ], 'Standard externalisé', 'Secrétaire salariée'); ?>
  </div>
</section>

<?php se_texte([
    ['Un prix d’entrée, <em>pas de grille de prix</em>', [
        'Notre prix d’entrée est public : ' . ($prix ? $prix : 'il figure sur votre devis') . ' par appel traité pour une prise de message. Au-delà, un tarif unique affiché en ligne serait trop cher pour certains et trop bas pour d’autres. Un cabinet qui reçoit 60 appels par mois pour des rendez-vous et un artisan qui en reçoit 200 pour des demandes de devis n’ont ni le même volume, ni le même traitement, ni les mêmes horaires. Nous préférons lire votre demande et vous proposer un prix juste, détaillé ligne par ligne, sous 24 heures ouvrées.',
        'Ce que nous pouvons vous dire sans vous connaître : vous ne payez que les appels réellement traités, les frais de gestion sont fixes et annoncés, et aucun coût n’apparaît sur la facture sans avoir figuré sur le devis.',
    ]],
    ['Combien coûte un standard téléphonique externalisé <em>en pratique</em>', [
        'Le poste principal est le nombre d’appels : c’est lui qui fait varier la facture d’un mois à l’autre. Vient ensuite le traitement attendu : une prise de message est rapide, une prise de rendez-vous dans un agenda en ligne demande plus de temps et coûte donc plus cher par appel. Les horaires à couvrir et les options (SMS, plusieurs destinataires) complètent le calcul.',
        'Pour les activités qui reçoivent plusieurs centaines d’appels par mois, plusieurs lignes ou plusieurs sites, nous construisons une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a> plutôt qu’un devis standard : le dimensionnement de l’équipe et des horaires change le prix.',
    ]],
], 'Nos tarifs en détail'); ?>

<?php se_faq([
    ['Comment est calculé le nombre d’appels facturés ?', 'Chaque mois, nous relevons les appels que nos conseillères ont réellement traités pour vous. Vous recevez ce relevé avec votre facture.'],
    ['Combien coûte un appel ?', ($prix ? 'À partir de ' . $prix . ' par appel traité pour une prise de message. ' : '') . 'Le transfert des appels urgents et la prise de rendez-vous dans votre agenda demandent plus de temps et sont facturés un peu plus cher par appel. Votre devis indique le prix exact de chaque traitement.'],
    ['Y a-t-il un engagement ou des frais cachés ?', 'Le devis indique le prix par appel, les frais de gestion mensuels et la mise en service unique. Rien d’autre n’apparaît sur la facture. La formule s’ajuste quand votre activité change.'],
    ['Quels sont vos horaires ?', 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi.'],
    ['Quelles options sont disponibles ?', 'La notification de chaque message par SMS, le transfert des appels urgents vers vous et la prise de rendez-vous dans votre agenda en ligne.'],
    ['Comment obtenir un devis personnalisé ?', 'En décrivant votre besoin sur notre page <a href="' . se_lien('devis') . '">demande de devis</a> : vous recevez une proposition chiffrée sous 24 heures ouvrées. Pour plusieurs lignes, plusieurs sites ou plusieurs centaines d’appels par mois, demandez une <a href="' . se_lien('etude-sur-mesure') . '">étude sur mesure</a>.'],
], 'Vous avez des questions sur nos tarifs ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
    ['Débordement d’appels', 'Ne payer que les appels que vous ne pouvez pas prendre.', se_lien('gestion-des-debordements-dappels'), 'transfer'],
    ['Prise de rendez-vous', 'Vos rendez-vous fixés dans votre agenda en ligne.', se_lien('prise-de-rendez-vous'), 'calendar'],
    ['Notre méthode', 'Comment se passe la mise en place.', se_lien('comment-ca-fonctionne'), 'gear'],
]); ?>

<?php se_cta_final(['Demander une étude sur mesure', se_lien('etude-sur-mesure'), 'bouton']); ?>

</main>
<?php get_footer();
