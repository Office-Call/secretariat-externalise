<?php
/**
 * Page « Assistance administrative » (adresse : /assistance-administrative/).
 * Expressions visées : assistance administrative externalisée, secrétariat administratif à distance.
 */
if (!defined('ABSPATH')) { exit; }

se_seo(
    'Assistance administrative externalisée pour TPE et PME',
    'Assistance administrative externalisée : devis, factures, relances, courriers, suivi de dossiers et préparation des pièces comptables, par la même équipe que votre standard.',
    'Assistance administrative externalisée',
    'conseillere-document.webp'
);
get_header();
?>
<main id="contenu">

<?php se_hero([
    'kicker'  => 'Au-delà du téléphone',
    'titre'   => 'Une assistance administrative <em>par la même équipe</em>',
    'texte'   => 'Devis, factures, relances, courriers, suivi de dossiers : déléguez les tâches administratives qui vous prennent du temps, sans recruter.',
    'bouton1' => ['Parler de mon besoin', se_lien('contact')],
    'bouton2' => ['Voir nos solutions téléphoniques', se_lien('standard-telephonique-externalise')],
    'points'  => [['doc', 'Devis, factures<br>et relances'], ['laptop', 'À distance<br>ou sur place'], ['france', 'Une équipe<br>en France']],
    'image'   => 'conseillere-document.webp',
    'alt'     => 'Assistante administrative relisant un document',
    'badge'   => ['doc', 'Votre administratif,<br>entre de bonnes mains.'],
]); ?>

<section class="section">
  <div class="wrap">
    <?php se_titre_section('Ce que nous prenons en charge', 'Une assistance administrative <em>externalisée</em>', 'Vous choisissez les tâches à déléguer. Nous les réalisons à votre rythme, dans vos outils.'); ?>
    <?php se_cartes([
        ['doc', 'Devis et factures', 'Établissement et envoi, selon vos modèles.'],
        ['bell', 'Relances', 'Devis en attente et factures impayées.'],
        ['mail', 'Courriers', 'Rédaction et suivi de vos courriers.'],
        ['clipboard', 'Suivi de dossiers', 'Vos dossiers tenus à jour.'],
        ['calc', 'Pièces comptables', 'Préparées pour votre expert-comptable.'],
        ['nodes', 'Classement', 'Vos documents organisés et retrouvables.'],
    ], false, 'cards-6'); ?>
  </div>
</section>

<?php se_split('conseillere-notes.webp', 'Assistante administrative au travail', 'gauche', function () { ?>
    <p class="kicker">Comment ça s’organise</p>
    <h2>Une organisation <em>souple et claire</em></h2>
    <p>Chaque mission est différente. Nous définissons ensemble le périmètre, le mode de travail et le volume, puis nous ajustons au fil du temps.</p>
    <?php se_atouts([
        ['laptop', 'À distance', 'Avec un accès sécurisé à vos outils.'],
        ['home', 'Sur place', 'Autour de Dax, quand la mission le demande.'],
        ['calendar', 'Un volume défini', 'Révisable : votre budget est connu à l’avance.'],
        ['users', 'La même équipe', 'Que votre standard, qui connaît déjà vos clients.'],
    ], 2); ?>
<?php }); ?>

<?php se_faq([
    ['Comment est facturée l’assistance administrative ?', 'Sur devis, établi après un premier échange gratuit et sans engagement, selon les tâches et le volume que vous nous confiez.'],
    ['Travaillez-vous dans mes logiciels ?', 'Oui, avec un accès sécurisé que vous nous ouvrez : logiciel de facturation, messagerie, outil de gestion.'],
    ['Pouvez-vous intervenir dans mes locaux ?', 'Oui, autour de Dax, quand la mission le demande. Le reste du temps, nous travaillons à distance.'],
    ['Puis-je combiner standard et assistance administrative ?', 'Oui, c’est même ce que choisissent beaucoup de nos clients : la même équipe connaît vos clients au téléphone et vos dossiers.'],
], 'Vous avez des questions sur l’assistance administrative ? Voici les réponses aux plus fréquentes.'); ?>

<?php se_maillage([
    ['Standard téléphonique externalisé', 'Le service de base : vos appels pris en votre nom.', se_lien('standard-telephonique-externalise'), 'phone-in'],
    ['Expertise comptable', 'Relances et pièces comptables pour les cabinets.', se_lien('metiers/expertise-comptable'), 'calc'],
    ['Notre équipe', 'Qui répond à vos appels et traite vos dossiers.', se_lien('a-propos'), 'users'],
    ['Demander un devis', 'Votre proposition chiffrée sous 24 heures ouvrées.', se_lien('devis'), 'doc'],
]); ?>

<?php se_cta_final(['Parler de mon besoin', se_lien('contact'), 'bouton']); ?>

</main>
<?php get_footer();
