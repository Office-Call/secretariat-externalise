<?php
/**
 * Page « Notre méthode » (adresse : /comment-ca-fonctionne/).
 * Expressions visées : mise en place standard téléphonique externalisé, comment externaliser son standard.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Mettre en place un standard externalisé : notre méthode',
    'Comment externaliser son standard téléphonique : analyse de vos besoins, consignes écrites avec vous, formation des conseillères, renvoi d’appel et suivi. Une mise en place simple, sans changer vos outils.',
    'Mise en place d’un standard téléphonique externalisé',
    'conseillere-notes.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Notre méthode',
    'titre'   => 'Mettre en place votre standard : une méthode <em>simple et claire</em>',
    'texte'   => 'Une mise en place personnalisée, pour un accueil téléphonique qui vous ressemble. De l’analyse de vos besoins au suivi au quotidien, nous vous accompagnons à chaque étape.',
    'bouton2' => ['Découvrir nos solutions', se_lien('standard-telephonique-externalise')],
    'points'  => [['gear', 'Une mise en place<br>sans contrainte'], ['users', 'Un accompagnement<br>personnalisé'], ['shield', 'Une qualité<br>suivie']],
    'image'   => 'conseillere-notes.webp',
    'alt'     => 'Conseillère notant les consignes d’un client',
    'badge'   => ['phone', 'Vos appels,<br>entre de bonnes mains.'],
]); ?>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Votre parcours avec nous', 'Comment se passe <em>la mise en place&nbsp;?</em>', 'Cinq étapes pour externaliser votre standard téléphonique sereinement. Vous gardez votre numéro et vos outils.'); ?>
    <?php se_etapes([
        ['Analyse de vos besoins', 'Votre activité, vos appelants, vos horaires, vos urgences et ce que vous attendez de nous.', 'target'],
        ['Rédaction de vos consignes', 'Formule d’accueil, réponses types, informations à recueillir, destinataires des messages.', 'clipboard'],
        ['Formation des conseillères', 'Elles prennent connaissance de vos consignes et de votre vocabulaire.', 'users'],
        ['Mise en service', 'Vous programmez le renvoi de vos appels : nous répondons en votre nom.', 'phone'],
        ['Suivi et ajustements', 'Vos consignes évoluent avec votre activité, relevé des appels chaque mois.', 'chart'],
    ], 'steps-cards steps-5'); ?>
  </div>
</section>

<?php se_split('conseillere-telephone.webp', 'Conseillère au téléphone', 'gauche', function () { ?>
    <p class="kicker">Une mise en place sans contrainte</p>
    <h2>Des consignes respectées <em>à la lettre</em></h2>
    <p>Vous gardez le contrôle. Vos consignes sont écrites avec vous, et la conseillère les suit à chaque appel : votre accueil reste fidèle à votre image.</p>
    <?php se_atouts([
        ['doc', 'Un guide d’appel sur mesure', 'Rédigé avec vous et validé avant le lancement.'],
        ['target', 'Vos priorités', 'Informations à recueillir, transferts, urgences.'],
        ['shield', 'Votre image', 'Votre vocabulaire et votre ton, appel après appel.'],
    ], 3); ?>
<?php }); ?>

<section class="section section-tint">
  <div class="wrap compare-grid">
    <div>
      <p class="kicker">Un service qui évolue</p>
      <h2>Un suivi régulier, pour un service <em>toujours ajusté</em></h2>
      <p>Nous restons à vos côtés après la mise en place, pour adapter le service à l’évolution de votre activité.</p>
      <?php se_atouts([
          ['chart', 'Un relevé mensuel', 'Le détail des appels traités pour vous.'],
          ['chat', 'Des échanges simples', 'Un e-mail ou un appel suffit pour ajuster.'],
          ['gear', 'Des consignes à jour', 'Modifiées dès que vous nous le signalez.'],
      ], 3); ?>
    </div>
    <div>
      <p class="kicker">Des outils adaptés</p>
      <h3 class="h3-serif">Adaptés <em>à vos habitudes</em></h3>
      <div class="tuiles tuiles-2">
        <?php foreach ([['phone-fwd', 'Transferts d’appels selon vos consignes'], ['bell', 'Notifications par SMS'], ['chart', 'Relevé mensuel des appels'], ['calendar', 'Travail dans votre agenda']] as $t) : ?>
          <div class="tuile"><?php echo se_icon($t[0]); ?><span><?php echo esc_html($t[1]); ?></span></div>
        <?php endforeach; ?>
      </div>
      <p><a href="<?php echo se_lien('nos-outils'); ?>">Découvrir nos outils</a></p>
    </div>
  </div>
</section>

<?php se_faq([
    ['Combien de temps faut-il pour mettre en place le service ?', 'Cela dépend surtout de vos consignes : un simple accueil avec prise de message se prépare plus vite qu’une prise de rendez-vous avec des règles détaillées. Nous fixons la date ensemble lors du premier échange.'],
    ['Quelles informations devez-vous me demander ?', 'Votre activité, vos horaires, les questions fréquentes de vos clients, ce qui est urgent, et à qui transmettre les messages.'],
    ['Puis-je modifier mes consignes après le lancement ?', 'Oui, à tout moment, par e-mail ou par téléphone.'],
    ['Comment sont formées les conseillères ?', 'Elles sont salariées et formées par la dirigeante, qui exerce ce métier depuis 2008. Elles prennent connaissance de vos consignes avant la mise en service.'],
    ['Dois-je changer de numéro ou de logiciel ?', 'Non. Un simple renvoi d’appel depuis votre ligne suffit, et nous travaillons dans vos outils quand c’est nécessaire.'],
], 'Vous vous posez des questions sur la mise en place de notre service ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Nos outils', 'Téléphonie, consignes, transmission des messages.', se_lien('nos-outils'), 'laptop'],
    ['Nos solutions', 'Permanence, débordement, rendez-vous, administratif.', se_lien('standard-telephonique-externalise'), 'phone-in'],
    ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Découvrir nos solutions', se_lien('standard-telephonique-externalise'), 'bouton']); ?>

</main>
<?php get_footer();
