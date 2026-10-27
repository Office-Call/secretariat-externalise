<?php
/**
 * Page « Standard téléphonique externalisé » (adresse : /standard-telephonique-externalise/).
 * Page pilier du référencement : expression principale « standard téléphonique externalisé ».
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Standard téléphonique externalisé : une équipe en France',
    'Standard téléphonique externalisé pour TPE, PME et professions libérales : des conseillères salariées en France répondent en votre nom, filtrent et transmettent vos appels. Devis gratuit sous 24 h.',
    'Standard téléphonique externalisé',
    'conseillere-accueil.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Accueil téléphonique professionnel',
    'titre'   => 'Standard téléphonique <em>externalisé</em>',
    'texte'   => 'Confiez vos appels entrants à une équipe de conseillères salariées en France. Elles répondent en votre nom, qualifient chaque demande et vous transmettent l’essentiel, pendant que vous travaillez.',
    'bouton2' => ['Parler de mon besoin', se_lien('contact')],
    'points'  => [['france', 'Une équipe<br>en France'], ['headset', 'Un accueil<br>personnalisé'], ['bolt', 'Une mise en place<br>simple']],
    'image'   => 'conseillere-accueil.webp',
    'alt'     => 'Conseillère d’un standard téléphonique externalisé, casque sur les oreilles',
    'badge'   => ['phone', 'Vos appels,<br>entre de bonnes mains.'],
]); ?>

<!-- Définition -->
<section class="section">
  <div class="wrap def-grid">
    <div class="def-text">
      <p class="kicker">Définition</p>
      <h2>Qu’est-ce qu’un standard téléphonique <em>externalisé&nbsp;?</em></h2>
      <p>Externaliser son standard téléphonique, c’est confier la réception de ses appels à une équipe extérieure, qui décroche <strong>au nom de votre entreprise</strong>. Vos clients parlent à une vraie personne, formée à vos consignes. Vous, vous recevez un message clair et vous rappelez quand vous êtes disponible.</p>
      <p>C’est une alternative à l’embauche d’une secrétaire ou d’un standardiste, et une solution bien plus professionnelle qu’une messagerie vocale.</p>
    </div>
    <?php se_cartes([
        ['phone-in', 'Répondre au nom de votre entreprise', 'Avec votre formule d’accueil, comme si l’appel était pris dans vos bureaux.'],
        ['chat', 'Qualifier chaque demande', 'Qui appelle, pour quoi, avec quel degré d’urgence.'],
        ['calendar', 'Prendre un message ou un rendez-vous', 'Selon vos consignes, directement dans votre agenda en ligne.'],
        ['send', 'Vous transmettre l’information', 'Par e-mail dès la fin de l’appel, et par SMS si vous le souhaitez.'],
    ], false, 'cards-compact'); ?>
  </div>
</section>

<!-- Rôle de la conseillère -->
<?php se_split('conseillere-ecran.webp', 'Conseillère prenant un appel devant son écran', 'gauche', function () { ?>
    <p class="kicker">Au service de votre activité</p>
    <h2>Ce que fait <em>votre conseillère</em></h2>
    <p>Chaque client dispose de consignes écrites avec lui : formule d’accueil, réponses aux questions fréquentes, urgences, destinataires des messages. La conseillère les applique à chaque appel.</p>
    <?php se_coches([
        ['Décrocher au nom de votre entreprise', 'Un accueil chaleureux et professionnel.'],
        ['Gérer les urgences selon vos consignes', 'Transfert immédiat ou alerte par SMS.'],
        ['Filtrer et qualifier les appels', 'Vous n’êtes dérangé que lorsque c’est utile.'],
        ['Prendre des rendez-vous', 'Dans votre agenda, selon vos disponibilités.'],
        ['Transmettre les messages', 'Par e-mail, et par SMS en option.'],
        ['Renseigner vos clients', 'Horaires, adresse, informations pratiques.'],
    ]); ?>
<?php }); ?>

<!-- Comparatif -->
<section class="section">
  <div class="wrap compare-grid">
    <div>
      <p class="kicker">Comparatif</p>
      <h2>Standard externalisé ou <em>secrétaire salariée&nbsp;?</em></h2>
      <p>Les deux solutions offrent un accueil humain. Le standard externalisé apporte en plus la souplesse et la continuité d’une équipe, avec un coût qui suit votre activité.</p>
      <p>Pour une simple messagerie vocale, la question ne se pose pas : une partie de vos appelants ne laisse pas de message.</p>
    </div>
    <?php se_comparatif([
        ['Souplesse d’utilisation', 'Très flexible', 'Peu flexible'],
        ['Continuité de service', 'L’équipe se relaie', 'Risque d’absence'],
        ['Coût', 'Selon les appels traités', 'Salaire et charges'],
        ['Congés et absences', 'Couverts par l’équipe', 'Remplacement à prévoir'],
        ['Mise en place', 'Sans recrutement', 'Recrutement et formation'],
        ['Volume d’appels', 'Ajustable à tout moment', 'Difficile à ajuster'],
    ], 'Standard externalisé', 'Secrétaire salariée'); ?>
  </div>
</section>

<!-- Avantages -->
<section class="section section-tint">
  <div class="wrap">
    <?php se_titre_section('Vos bénéfices', 'Les avantages d’un standard externalisé <em>pour votre entreprise</em>', '', false); ?>
    <?php se_cartes([
        ['phone', 'Moins d’appels manqués', 'Pendant nos horaires, une conseillère répond quand vous ne pouvez pas.'],
        ['shield', 'Une image soignée', 'Un accueil professionnel qui valorise votre entreprise.'],
        ['clock', 'Du temps retrouvé', 'Vous n’êtes plus interrompu à chaque sonnerie.'],
        ['users', 'Disponible pour vos clients', 'Une réponse humaine, même pendant vos rendez-vous.'],
        ['chart', 'Un coût maîtrisé', 'Vous ne payez que les appels réellement traités.'],
        ['heart', 'Un contact humain', 'Des conseillères à l’écoute, formées à votre métier.'],
    ], false, 'cards-6'); ?>
  </div>
</section>

<!-- Mise en place -->
<section class="section method">
  <div class="wrap">
    <?php se_titre_section('Votre accompagnement', 'Comment se passe la mise en place <em>de votre standard&nbsp;?</em>'); ?>
    <?php se_etapes([
        ['Échange sur vos besoins', 'Votre activité, vos appelants, vos priorités et vos urgences.'],
        ['Rédaction des consignes', 'Formule d’accueil, réponses types, destinataires et outils.'],
        ['Renvoi de vos appels', 'Vous gardez votre numéro : un simple renvoi vers notre ligne.'],
        ['Suivi et ajustements', 'Vos consignes évoluent avec vous, relevé des appels chaque mois.'],
    ]); ?>
    <p class="center"><?php echo se_bouton('Voir notre méthode en détail', se_lien('comment-ca-fonctionne')); ?></p>
  </div>
</section>

<?php se_faq([
    ['Vos conseillères répondent-elles au nom de mon entreprise&nbsp;?', 'Oui. Elles décrochent avec la formule d’accueil que vous avez choisie, et s’adaptent à votre vocabulaire et à vos consignes. Pour l’appelant, c’est votre accueil.'],
    ['Puis-je garder mon numéro de téléphone&nbsp;?', 'Oui. Vous programmez un renvoi d’appel depuis votre ligne vers la nôtre : en permanence, ou seulement quand vous ne décrochez pas (c’est le <a href="' . se_lien('gestion-des-debordements-dappels') . '">débordement d’appels</a>).'],
    ['Quels sont vos horaires&nbsp;?', 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi.'],
    ['Comment recevrai-je mes messages&nbsp;?', 'Par e-mail, dès la fin de l’appel. Vous pouvez aussi recevoir une notification par SMS, en option.'],
    ['Combien coûte un standard téléphonique externalisé&nbsp;?', 'Le prix dépend du nombre d’appels et du traitement attendu : prise de message, transfert ou prise de rendez-vous. Notre page <a href="' . se_lien('tarifs') . '">tarifs</a> détaille ce qui fait le prix, et vous recevez votre <a href="' . se_lien('devis') . '">devis</a> sous 24 heures ouvrées, gratuitement et sans engagement.'],
    ['En combien de temps le service peut-il démarrer&nbsp;?', 'Le délai dépend surtout de vos consignes. Nous le fixons ensemble lors du premier échange.'],
]); ?>

<?php se_maillage([
    ['Votre métier', 'Artisans, juridique, comptabilité, immobilier, services à la personne.', se_lien('metiers'), 'briefcase'],
    ['Notre méthode', 'De la rédaction des consignes au premier appel pris.', se_lien('comment-ca-fonctionne'), 'gear'],
    ['Nos tarifs', 'Ce qui fait le prix, et ce qui est toujours inclus.', se_lien('tarifs'), 'chart'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Étude sur mesure', se_lien('etude-sur-mesure'), 'bouton']); ?>

</main>
<?php get_footer();
