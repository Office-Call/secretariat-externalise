<?php
/**
 * Page « Nos outils » (adresse : /nos-outils/).
 * Ne présente que des outils réellement utilisés aujourd'hui.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Nos outils de permanence téléphonique : simples et fiables',
    'Téléphonie professionnelle dans le cloud, consignes écrites pour chaque client, transmission par e-mail ou SMS, outils développés sur mesure : les outils de notre standard externalisé.',
    '',
    'conseillere-agenda.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Nos outils',
    'titre'   => 'Des outils simples, <em>utiles et discrets</em>',
    'texte'   => 'La technologie au service de l’humain. Nos outils permettent aux conseillères de répondre vite, de suivre vos consignes à la lettre et de vous transmettre chaque message, sans jamais remplacer la relation humaine.',
    'bouton2' => ['Parler de mon besoin', se_lien('contact')],
    'points'  => [['france', 'Une équipe<br>en France'], ['headset', 'Un accueil<br>personnalisé'], ['shield', 'Des outils<br>professionnels']],
    'image'   => 'conseillere-agenda.webp',
    'alt'     => 'Conseillère utilisant un agenda en ligne sur son écran',
    'badge'   => ['phone', 'Des outils fiables,<br>entre de bonnes mains.'],
]); ?>

<section class="section">
  <div class="wrap def-grid">
    <div class="def-text">
      <p class="kicker">Notre philosophie</p>
      <h2>Des outils au service <em>de la réactivité</em></h2>
      <p>Nous avons choisi des outils simples et fiables, adaptés à notre façon de travailler : prendre chaque appel rapidement, suivre précisément vos consignes et vous transmettre une information claire.</p>
    </div>
    <?php se_cartes([
        ['clock', 'Gain de temps', 'Les bonnes informations sous les yeux de la conseillère, dès le premier mot.'],
        ['nodes', 'Organisation', 'Vos consignes et vos contacts réunis au même endroit.'],
        ['shield', 'Fiabilité', 'Une téléphonie professionnelle dans le cloud.'],
        ['chart', 'Suivi', 'Un relevé mensuel des appels traités pour vous.'],
    ], false, 'cards-compact'); ?>
  </div>
</section>

<section class="section section-tint">
  <div class="wrap">
    <?php se_colonnes([
        ['phone-in', 'Téléphonie', 'Une téléphonie <em>professionnelle</em>', 'Vos appels arrivent sur une plateforme de téléphonie dans le cloud, qui les répartit entre les conseillères disponibles.', ['Répartition des appels entre conseillères', 'Statistiques précises sur les appels', 'Renvoi d’appel depuis votre ligne']],
        ['clipboard', 'Consignes', 'Un accueil fidèle à <em>vos consignes</em>', 'Chaque client a son guide d’appel, construit avec lui et tenu à jour. La conseillère le suit pendant l’appel.', ['Formule d’accueil personnalisée', 'Réponses aux questions fréquentes', 'Gestion des urgences selon vos règles']],
        ['send', 'Transmission', 'Des messages <em>clairs et complets</em>', 'Nom, coordonnées, objet de l’appel, degré d’urgence : vous recevez l’essentiel, dès la fin de l’appel.', ['Messages structurés', 'Envoi par e-mail', 'Notification par SMS en option']],
    ]); ?>
  </div>
</section>

<?php se_split('conseillere-ecran.webp', 'Conseillère travaillant dans un agenda en ligne', 'gauche', function () { ?>
    <p class="kicker">Agenda et outils sur mesure</p>
    <h2>Nous travaillons <em>dans vos outils</em></h2>
    <p>Pour la prise de rendez-vous, la conseillère travaille directement dans votre agenda en ligne, à condition que vous lui ouvriez un accès. Quand une activité le demande, nous allons plus loin.</p>
    <?php se_coches([
        ['Votre agenda en ligne', 'Rendez-vous fixés, déplacés ou annulés.'],
        ['Vos outils métier', 'Quand vous nous y donnez accès.'],
        ['Des outils développés par nos soins', 'Formulaires de prise d’appel, annuaires de standard.'],
        ['Déjà en service chez nos clients', 'Conçus pour des besoins réels, pas pour la vitrine.'],
    ]); ?>
<?php }); ?>

<section class="section">
  <div class="wrap compare-grid">
    <div>
      <p class="kicker">Confidentialité</p>
      <h2>Vos données <em>en toute confiance</em></h2>
      <p>Vos consignes, vos contacts et les messages de vos clients sont des informations sensibles. Nous les traitons comme telles.</p>
      <ul class="liste-coches">
        <li><?php echo se_icon('check', ''); ?>Une annexe dédiée à la protection des données dans chaque contrat</li>
        <li><?php echo se_icon('check', ''); ?>Des données utilisées uniquement pour traiter vos appels</li>
        <li><?php echo se_icon('check', ''); ?>Un rôle de sous-traitant au sens du RGPD, défini par écrit</li>
      </ul>
    </div>
    <div>
      <p class="kicker">Compatible avec vos habitudes</p>
      <h3 class="h3-serif">Une intégration <em>simple</em></h3>
      <div class="tuiles">
        <?php foreach ([['mail', 'E-mail'], ['chat', 'SMS'], ['calendar', 'Agenda en ligne'], ['laptop', 'Logiciel métier'], ['phone', 'Votre ligne actuelle'], ['transfer', 'Transfert vers mobile'], ['users', 'Plusieurs destinataires'], ['plus', 'Autre outil sur demande']] as $t) : ?>
          <div class="tuile"><?php echo se_icon($t[0]); ?><span><?php echo esc_html($t[1]); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php se_faq([
    ['Quels outils utilisez-vous pour prendre les messages ?', 'Une plateforme de téléphonie professionnelle dans le cloud, et un guide d’appel propre à chaque client, qui contient vos consignes.'],
    ['Pouvez-vous travailler dans mon agenda ?', 'Oui, si vous utilisez un agenda en ligne et que vous nous y ouvrez un accès.'],
    ['Comment me sont transmises les informations ?', 'Par e-mail dès la fin de l’appel, et par SMS en option.'],
    ['Mes données sont-elles protégées ?', 'Chaque contrat comprend une annexe dédiée à la protection des données personnelles. Vos informations ne servent qu’à traiter vos appels.'],
    ['Puis-je garder mes outils actuels ?', 'Oui. Vous gardez votre numéro, votre agenda et vos logiciels : nous nous adaptons à votre organisation.'],
], 'Vous avez des questions sur nos outils ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Prise de rendez-vous', 'Nous travaillons dans votre agenda en ligne.', se_lien('prise-de-rendez-vous'), 'calendar'],
    ['Notre méthode', 'Consignes, renvoi d’appel, premiers appels.', se_lien('comment-ca-fonctionne'), 'gear'],
    ['Notre équipe', 'Des conseillères salariées en France.', se_lien('a-propos'), 'users'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(); ?>

</main>
<?php get_footer();
