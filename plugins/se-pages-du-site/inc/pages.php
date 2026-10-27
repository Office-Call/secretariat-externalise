<?php
/**
 * Contenu des pages du site Standard Externalisé.
 * Chaque page : slug, parent, titre, extrait (chapeau sous le titre), modèle, à compléter (oui/non), contenu.
 * Les textes entre [crochets] sont à compléter avant publication.
 */
if (!defined('ABSPATH')) {
    exit;
}

function sep_pages()
{
    $B = 'SEP_B';
    $cta = $B::btns([['Demander un devis', '@/devis/'], ['Voir nos tarifs', '@/tarifs/', true]]);

    return [

    /* ================= NOS SOLUTIONS ================= */

    [
        'slug' => 'standard-telephonique-externalise',
        'titre' => 'Standard téléphonique externalisé',
        'extrait' => 'Une équipe de conseillères répond en votre nom, filtre vos appels et vous transmet chaque message. Vous gardez votre numéro et votre image.',
        'ordre' => 1,
        'contenu' =>
            $B::p('Un standard téléphonique externalisé, c’est une équipe qui décroche à votre place, en votre nom, quand vous ne pouvez pas le faire. Vos clients parlent à une vraie personne. Vous recevez un message clair et vous rappelez quand vous êtes disponible.')
          . $B::h2('Ce que fait votre conseillère')
          . $B::ul([
                'Elle répond avec la formule d’accueil de votre entreprise.',
                'Elle identifie l’appelant et la raison de son appel.',
                'Elle applique vos consignes : prendre un message, vous transférer l’appel, fixer un rendez-vous ou renseigner.',
                'Elle vous transmet le message par e-mail, et par SMS si vous le souhaitez.',
            ])
          . $B::h2('Pourquoi externaliser votre standard ?')
          . $B::ul([
                '<strong>Ne plus laisser d’appel sans réponse.</strong> Un prospect qui tombe sur une messagerie peut appeler l’entreprise suivante.',
                '<strong>Rester concentré sur votre métier.</strong> Vous n’êtes plus interrompu à chaque sonnerie.',
                '<strong>Soigner votre image.</strong> Un accueil professionnel, même pendant vos rendez-vous, vos déplacements ou vos congés.',
                '<strong>Payer selon votre activité.</strong> Vous réglez les appels réellement traités, sans salaire ni charges à gérer.',
            ])
          . $B::h2('Standard externalisé, secrétaire salariée ou messagerie ?')
          . $B::table([
                ['', 'Standard externalisé', 'Secrétaire salariée', 'Messagerie vocale'],
                ['Une personne répond', 'Oui', 'Oui', 'Non'],
                ['Absences et congés', 'L’équipe se relaie', 'À organiser', 'Pas de réponse humaine'],
                ['Coût', 'Selon les appels traités', 'Salaire et charges, même en période calme', 'Faible'],
                ['Gestion du personnel', 'Aucune', 'Recrutement, planning, remplacements', 'Aucune'],
            ])
          . $B::h2('Comment ça se passe')
          . $B::p('Nous définissons vos consignes ensemble. Vous renvoyez vos appels vers notre ligne, et vous gardez votre numéro. Toutes les étapes sont détaillées dans <a href="@/comment-ca-fonctionne/">notre méthode</a>.')
          . $B::h2('Questions fréquentes')
          . $B::faq([
                ['Vos clients sauront-ils que l’appel est externalisé ?', 'La conseillère répond au nom de votre entreprise, avec la formule d’accueil que vous choisissez. Ce que vous dites ou non à vos clients reste votre décision.'],
                ['Pouvez-vous garder votre numéro de téléphone ?', 'Oui. Vous programmez un renvoi d’appel depuis votre ligne vers la nôtre, en permanence ou seulement quand vous ne décrochez pas.'],
                ['Quels sont vos horaires ?', 'Du lundi au vendredi, de 8h à 19h, sans coupure le midi.'],
                ['Combien ça coûte ?', 'Le prix dépend du nombre d’appels et de ce que vous attendez de nous. Notre page <a href="@/tarifs/">tarifs</a> explique ce qui fait le prix, et vous recevez votre <a href="@/devis/">devis</a> sous 24 heures ouvrées.'],
            ])
          . $cta,
    ],

    [
        'slug' => 'permanence-telephonique',
        'titre' => 'Permanence téléphonique',
        'extrait' => 'Tous vos appels pris en charge du lundi au vendredi, de 8h à 19h, par une équipe en France.',
        'ordre' => 2,
        'contenu' =>
            $B::p('Avec la permanence téléphonique, nous prenons <strong>tous vos appels</strong> pendant nos horaires. Vous n’avez plus à surveiller votre téléphone : chaque appel reçoit une réponse, et vous recevez chaque message.')
          . $B::h2('Pour qui ?')
          . $B::ul([
                'Les professionnels souvent en déplacement, en rendez-vous ou sur le terrain.',
                'Les dirigeants de TPE qui n’ont pas d’accueil téléphonique.',
                'Les cabinets dont l’équipe est occupée toute la journée.',
            ])
          . $B::h2('Ce qui est compris')
          . $B::ul([
                'L’accueil en votre nom, avec votre formule.',
                'Une prise de message détaillée : nom, coordonnées, objet de l’appel, degré d’urgence.',
                'La transmission par e-mail dès la fin de l’appel.',
                'Des consignes propres à votre entreprise, mises à jour quand vous le demandez.',
                'Un relevé mensuel des appels traités.',
            ])
          . $B::h2('En option')
          . $B::ul([
                'La notification de chaque message par SMS.',
                'Le <a href="@/gestion-des-debordements-dappels/">transfert des appels importants</a> vers vous.',
                'La <a href="@/prise-de-rendez-vous/">prise de rendez-vous</a> dans votre agenda en ligne.',
            ])
          . $B::h2('Questions fréquentes')
          . $B::faq([
                ['Que se passe-t-il pour un appel urgent ?', 'Vous définissez ce qui est urgent pour vous. La conseillère applique vos consignes : vous transférer l’appel, ou vous prévenir par SMS.'],
                ['Et en dehors des horaires ?', 'Les appels reçus avant 8h, après 19h ou le week-end suivent la solution que vous avez prévue sur votre ligne, par exemple votre messagerie.'],
                ['Puis-je ne confier que certains appels ?', 'Oui : c’est le principe du <a href="@/gestion-des-debordements-dappels/">débordement d’appels</a>. Vous décrochez quand vous pouvez, nous prenons le relais sinon.'],
            ])
          . $cta,
    ],

    [
        'slug' => 'gestion-des-debordements-dappels',
        'titre' => 'Débordement d’appels',
        'extrait' => 'Vous décrochez quand vous pouvez. Quand la ligne est occupée ou que vous ne répondez pas, nous prenons le relais.',
        'ordre' => 3,
        'contenu' =>
            $B::p('Le débordement d’appels vous permet de garder la main sur votre téléphone. Vous répondez vous-même quand vous êtes disponible ; les appels que vous ne pouvez pas prendre arrivent chez nous au lieu de tomber sur une messagerie.')
          . $B::h2('Comment ça fonctionne')
          . $B::p('Vous programmez un renvoi d’appel conditionnel sur votre ligne. Selon votre opérateur, il peut se déclencher :')
          . $B::ul([
                'quand votre ligne est occupée ;',
                'quand vous ne décrochez pas après quelques sonneries ;',
                'sur certaines plages horaires, par exemple pendant vos rendez-vous.',
            ])
          . $B::h2('Les situations typiques')
          . $B::ul([
                'Les pics d’activité : rentrée, périodes fiscales, saison haute.',
                'La pause déjeuner : notre ligne reste ouverte sans coupure le midi.',
                'Les réunions, les chantiers, les absences et les congés.',
            ])
          . $B::h2('Ce que vous payez')
          . $B::p('Uniquement les appels qui débordent vers nous et que nous traitons. Les appels que vous prenez vous-même ne vous coûtent rien de plus. Le détail est sur notre page <a href="@/tarifs/">tarifs</a>.')
          . $cta,
    ],

    [
        'slug' => 'prise-de-rendez-vous',
        'titre' => 'Prise de rendez-vous',
        'extrait' => 'Vos rendez-vous fixés directement dans votre agenda en ligne, en suivant vos règles.',
        'ordre' => 4,
        'contenu' =>
            $B::p('Vos clients appellent pour un rendez-vous ? La conseillère le fixe directement dans votre agenda en ligne, pendant l’appel. Vous retrouvez un planning à jour, sans avoir décroché.')
          . $B::h2('Ce que fait la conseillère')
          . $B::ul([
                'Elle consulte vos disponibilités en temps réel.',
                'Elle fixe, déplace ou annule un rendez-vous.',
                'Elle applique vos règles : durées, motifs, créneaux réservés, délais à respecter.',
                'Elle note les informations utiles pour préparer le rendez-vous.',
            ])
          . $B::h2('Avec quel agenda ?')
          . $B::p('Nous travaillons dans votre agenda en ligne (Doctolib par exemple), à condition que vous nous y donniez un accès. Si vous n’en avez pas encore, parlons-en.')
          . $B::h2('Un prix qui reflète le temps passé')
          . $B::p('Fixer un rendez-vous demande plus de temps que prendre un message : vérifier les disponibilités, proposer des créneaux, confirmer. Le prix par appel en tient compte : [sesim_prix cle="prix_rdv"] HT par appel traité.')
          . $cta,
    ],

    [
        'slug' => 'assistance-administrative',
        'titre' => 'Assistance administrative',
        'extrait' => 'Devis, factures, relances, suivi de dossiers : la même équipe s’occupe de votre administratif, à votre rythme.',
        'ordre' => 5,
        'contenu' =>
            $B::p('Au-delà du téléphone, la même équipe peut prendre en charge une partie de votre administratif. Vous déléguez les tâches qui vous prennent du temps, sans recruter.')
          . $B::h2('Ce que nous prenons en charge')
          . $B::ul([
                'L’établissement et l’envoi de vos devis et factures.',
                'La relance des devis en attente et des factures impayées.',
                'Les courriers et le suivi de vos dossiers.',
                'La préparation des pièces pour votre expert-comptable.',
                'Le classement et l’organisation de vos documents.',
            ])
          . $B::h2('Comment ça s’organise')
          . $B::ul([
                '<strong>À distance</strong>, avec un accès sécurisé à vos outils.',
                '<strong>Sur place</strong>, autour de Dax, quand la mission le demande.',
                '<strong>Avec un volume mensuel défini ensemble</strong>, révisable : vous connaissez votre budget à l’avance.',
            ])
          . $B::h2('Tarif')
          . $B::p('Chaque mission est différente : nous établissons un devis après un premier échange, gratuit et sans engagement.')
          . $B::btns([['Parler de mon besoin', '@/contact/'], ['Voir nos solutions téléphoniques', '@/standard-telephonique-externalise/', true]]),
    ],

    /* ================= VOTRE MÉTIER ================= */

    [
        'slug' => 'metiers',
        'titre' => 'Votre métier',
        'extrait' => 'Chaque métier a ses appels. Nos conseillères s’adaptent à vos clients, à votre vocabulaire et à vos priorités.',
        'ordre' => 10,
        'contenu' =>
            $B::p('Un artisan, un avocat et une agence immobilière ne reçoivent pas les mêmes appels. Pour chaque client, nous écrivons des consignes adaptées à son métier, et la conseillère les suit à chaque appel.')
          . $B::ul([
                '<a href="@/metiers/artisans-btp/"><strong>Artisans et BTP</strong></a> : vous êtes sur le chantier, nous prenons les demandes de devis.',
                '<a href="@/metiers/professions-juridiques/"><strong>Professions juridiques</strong></a> : filtrage discret et messages précis.',
                '<a href="@/metiers/expertise-comptable/"><strong>Expertise comptable</strong></a> : un renfort pendant les périodes chargées.',
                '<a href="@/metiers/immobilier/"><strong>Immobilier</strong></a> : aucun appel sur une annonce sans réponse.',
                '<a href="@/metiers/services-a-la-personne/"><strong>Services à la personne</strong></a> : familles et intervenants bien orientés.',
            ])
          . $B::p('Votre métier n’est pas dans la liste ? Nous accompagnons aussi d’autres TPE et PME : <a href="@/contact/">décrivez-nous votre activité</a>.')
          . $cta,
    ],

    [
        'slug' => 'artisans-btp',
        'parent' => 'metiers',
        'titre' => 'Artisans et entreprises du bâtiment',
        'extrait' => 'Vous êtes sur le chantier, nous prenons les demandes de devis et repérons les urgences.',
        'ordre' => 1,
        'contenu' =>
            $B::p('Sur un chantier, impossible de décrocher à chaque appel. Pourtant, chaque appel manqué peut être un devis perdu : un client qui tombe sur une messagerie peut appeler l’entreprise suivante.')
          . $B::h2('Ce que nous faisons pour vous')
          . $B::ul([
                'Noter les demandes de devis : nature des travaux, adresse, délai souhaité, coordonnées.',
                'Repérer les urgences selon vos critères (fuite, panne, sinistre…) et vous les transmettre aussitôt.',
                'Fixer les visites de chiffrage dans votre agenda.',
                'Répondre aux questions simples : horaires, zone d’intervention.',
            ])
          . $B::h2('Exemple de message transmis')
          . $B::encadre(
                $B::p('<strong>Nouvelle demande de devis</strong> — M. [Nom], particulier')
              . $B::p('Rénovation d’une salle de bains. Souhaite un passage la semaine prochaine. À rappeler avant 18h.')
            )
          . $B::h2('La formule qui convient le plus souvent')
          . $B::p('Le <a href="@/gestion-des-debordements-dappels/">débordement d’appels</a> : vous décrochez quand vous pouvez, nous prenons le relais quand vous êtes sur le chantier.')
          . $cta,
    ],

    [
        'slug' => 'professions-juridiques',
        'parent' => 'metiers',
        'titre' => 'Avocats, notaires et professions juridiques',
        'extrait' => 'Filtrage discret, messages précis, rendez-vous fixés selon vos règles.',
        'ordre' => 2,
        'contenu' =>
            $B::p('Votre temps est précieux et vos appels sont confidentiels. Nos conseillères filtrent vos appels avec discrétion et vous transmettent des messages précis, pour que vous ne soyez dérangé que lorsque c’est nécessaire.')
          . $B::h2('Ce que nous faisons pour vous')
          . $B::ul([
                'Identifier l’appelant : client, nouveau dossier, confrère, juridiction.',
                'Filtrer selon vos consignes et ne vous transférer que les appels prévus.',
                'Fixer les rendez-vous de premier contact dans votre agenda.',
                'Prendre des messages précis : nom, référence du dossier, objet, délai.',
            ])
          . $B::h2('Ce que nous ne faisons pas')
          . $B::p('La conseillère ne donne aucun conseil juridique et ne se prononce jamais sur un dossier : elle oriente vers vous.')
          . $B::h2('Confidentialité')
          . $B::p('Nos contrats comprennent une annexe dédiée à la protection des données personnelles. Vos consignes et vos messages ne sont utilisés que pour traiter vos appels.')
          . $cta,
    ],

    [
        'slug' => 'expertise-comptable',
        'parent' => 'metiers',
        'titre' => 'Cabinets d’expertise comptable',
        'extrait' => 'Un renfort fiable pendant les périodes fiscales et les pics d’appels.',
        'ordre' => 3,
        'contenu' =>
            $B::p('Pendant les périodes déclaratives, les appels s’accumulent au moment où vos équipes ont le moins de temps. Nous prenons le relais pour que chaque client reçoive une réponse.')
          . $B::h2('Ce que nous faisons pour vous')
          . $B::ul([
                'Prendre les appels en débordement pendant les périodes chargées.',
                'Orienter chaque appel vers le bon collaborateur.',
                'Noter des messages précis : nom du client, référence du dossier, objet de la demande.',
                'Fixer des rendez-vous dans les agendas de vos collaborateurs.',
            ])
          . $B::p('La conseillère ne répond pas sur le fond des dossiers : elle transmet à la bonne personne.')
          . $cta,
    ],

    [
        'slug' => 'immobilier',
        'parent' => 'metiers',
        'titre' => 'Agences immobilières',
        'extrait' => 'Aucun appel sur une annonce ne reste sans réponse.',
        'ordre' => 4,
        'contenu' =>
            $B::p('Quand vos agents sont en visite, le téléphone de l’agence continue de sonner. Un acquéreur ou un vendeur qui n’obtient pas de réponse peut contacter une autre agence.')
          . $B::h2('Ce que nous faisons pour vous')
          . $B::ul([
                'Noter les demandes sur une annonce : référence du bien, projet, coordonnées.',
                'Proposer des créneaux de visite dans votre agenda.',
                'Vous transmettre en priorité les demandes d’estimation des vendeurs.',
                'Renseigner sur vos horaires et l’adresse de l’agence.',
            ])
          . $cta,
    ],

    [
        'slug' => 'services-a-la-personne',
        'parent' => 'metiers',
        'titre' => 'Services à la personne et réseaux d’agences',
        'extrait' => 'Familles et intervenants bien orientés, agence par agence.',
        'ordre' => 5,
        'contenu' =>
            $B::p('Dans les services à la personne, les appels sont nombreux et variés : familles, intervenants, candidats. Nous les orientons selon vos consignes, agence par agence.')
          . $B::h2('Ce que nous faisons pour vous')
          . $B::ul([
                'Distinguer les appels des familles, des intervenants et des candidats.',
                'Orienter vers la bonne agence quand vous en avez plusieurs.',
                'Noter les demandes de prestation avec les informations utiles.',
                'Vous transmettre aussitôt les absences d’intervenants et les urgences, selon vos consignes.',
            ])
          . $cta,
    ],

    /* ================= POURQUOI NOUS ================= */

    [
        'slug' => 'a-propos',
        'titre' => 'Notre équipe',
        'extrait' => 'Une petite équipe de conseillères salariées, basée à Dax, qui connaît vos clients.',
        'ordre' => 20,
        'contenu' =>
            $B::p('Standard Externalisé est le service d’accueil téléphonique d’OFFICE &amp; CALL, une société basée à Dax, dans les Landes. Nous accompagnons aujourd’hui plus de 50 entreprises et traitons environ 5 200 appels chaque mois.')
          . $B::h2('Une petite équipe, pas un plateau')
          . $B::ul([
                '<strong>Des conseillères salariées</strong>, pas des intérimaires : elles connaissent vos consignes et vos habitudes.',
                '<strong>Formées par la gérante</strong>, qui exerce ce métier depuis 2008.',
                '<strong>Les mêmes voix au bout du fil</strong> : vos clients ne parlent pas à un centre d’appels anonyme.',
            ])
          . $B::h2('Une expérience depuis 2008')
          . $B::p('Catherine Delaistre exerce les métiers de l’accueil téléphonique et de la relation client à distance depuis 2008. Elle a fondé OFFICE &amp; CALL en 2020 et forme elle-même les conseillères de l’équipe.')
          . $B::h2('Nos engagements')
          . $B::ul([
                'Vos consignes tenues à jour, dès que vous nous signalez un changement.',
                'La protection de vos données, encadrée par une annexe dédiée dans notre contrat.',
                'Une interlocutrice identifiée : la gérante de la société.',
            ])
          . $cta,
    ],

    [
        'slug' => 'comment-ca-fonctionne',
        'titre' => 'Notre méthode',
        'extrait' => 'Une mise en place simple, en quatre étapes, sans changer vos outils.',
        'ordre' => 21,
        'contenu' =>
            $B::h3('1. Échange sur vos besoins')
          . $B::p('Nous faisons le point sur votre activité : qui vous appelle, à quels moments, ce qui est urgent, ce que vous attendez de nous.')
          . $B::h3('2. Paramétrage sur mesure')
          . $B::p('Nous rédigeons vos consignes avec vous : formule d’accueil, réponses aux questions fréquentes, destinataires des messages, accès à votre agenda si besoin.')
          . $B::h3('3. Formation de l’équipe et mise en service')
          . $B::p('Les conseillères prennent connaissance de vos consignes. À la date convenue, vous programmez le renvoi de vos appels : nous sommes en ligne.')
          . $B::h3('4. Suivi continu')
          . $B::p('Vos consignes évoluent avec votre activité. Chaque mois, vous recevez le relevé des appels traités.')
          . $B::h2('Ce que vous recevez')
          . $B::encadre(
                $B::p('<strong>Exemple de message transmis</strong>')
              . $B::p('Appelant : Mme [Nom], cliente — Objet : souhaite décaler son rendez-vous de jeudi — À faire : la rappeler avant 17h.')
            )
          . $B::h2('Questions fréquentes')
          . $B::faq([
                ['Que faut-il pour démarrer ?', 'Une ligne téléphonique sur laquelle programmer un renvoi d’appel, et un échange pour définir vos consignes.'],
                ['Puis-je modifier mes consignes ?', 'Oui, à tout moment, par e-mail ou par téléphone.'],
                ['Comment suis-je facturé ?', 'Chaque mois, au relevé des appels réellement traités. Le détail est sur notre page <a href="@/tarifs/">tarifs</a>.'],
            ])
          . $cta,
    ],

    [
        'slug' => 'temoignages',
        'titre' => 'Témoignages et cas clients',
        'extrait' => 'Ce qu’en disent les entreprises qui nous confient leurs appels.',
        'ordre' => 22,
        'contenu' =>
            $B::sc('[se_temoignages]')
          . $B::p('[Ajoutez ici 2 ou 3 cas clients courts, avec l’accord des clients : leur situation avant, ce que nous avons mis en place, le résultat.]')
          . $cta,
    ],

    [
        'slug' => 'nos-outils',
        'titre' => 'Nos outils',
        'extrait' => 'Des outils professionnels au service d’un accueil humain.',
        'ordre' => 23,
        'contenu' =>
            $B::p('Derrière chaque appel, il y a une personne. Et derrière chaque conseillère, des outils qui lui permettent de répondre vite et juste.')
          . $B::h2('Une téléphonie professionnelle')
          . $B::p('Vos appels arrivent sur une plateforme de téléphonie dans le cloud, qui les répartit entre les conseillères disponibles et nous donne des statistiques précises sur les appels traités.')
          . $B::h2('Un guide d’appel pour chaque client')
          . $B::p('Chaque client a son propre guide d’appel, construit avec lui et tenu à jour. La conseillère le suit pendant l’appel : elle pose les bonnes questions et applique les bonnes consignes.')
          . $B::h2('Des outils sur mesure')
          . $B::p('Quand une activité le demande, nous développons nos propres outils : formulaires de prise d’appel, annuaires de standard, suivi d’activité. Ils sont aujourd’hui en service chez plusieurs de nos clients.')
          . $cta,
    ],

    [
        'slug' => 'guides',
        'titre' => 'Guides et conseils',
        'extrait' => 'Conseils pratiques pour mieux gérer vos appels et votre accueil téléphonique.',
        'ordre' => 24,
        'page_articles' => true,
        'contenu' => '',
    ],

    /* ================= TARIFS ET DEVIS ================= */

    [
        'slug' => 'tarifs',
        'titre' => 'Tarifs',
        'extrait' => 'Des prix publiés, et une facturation au relevé des appels réellement traités.',
        'ordre' => 30,
        'contenu' =>
            $B::p('Nos prix sont publiés : vous savez ce que vous paierez avant de nous appeler. Chaque mois, vous ne réglez que les appels que nous avons réellement traités.')
          . $B::sc('[sesim_tableau]')
          . $B::h2('Un exemple')
          . $B::p('Pour 100 appels par mois en prise de message : 100 appels à [sesim_prix cle="prix_message"] HT, plus [sesim_prix cle="frais_gestion"] HT de frais de gestion. La mise en service ([sesim_prix cle="frais_mes"] HT) n’est facturée qu’une fois.')
          . $B::h2('Ce qui fait varier le prix')
          . $B::ul([
                '<strong>Le type de traitement</strong> : un rendez-vous demande plus de temps qu’un message.',
                '<strong>Le nombre d’appels</strong> : vous ne payez que ceux que nous traitons.',
                '<strong>Les options</strong> : notification par SMS, par exemple.',
            ])
          . $B::h2('Gros volumes ou besoin particulier')
          . $B::p('Plusieurs lignes, plusieurs sites, intégration à vos outils ou plusieurs centaines d’appels par mois : nous vous proposons une <a href="@/etude-sur-mesure/">étude sur mesure</a>.')
          . $B::btns([['Demander un devis', '@/devis/'], ['Demander une étude sur mesure', '@/etude-sur-mesure/', true]]),
    ],

    [
        'slug' => 'devis',
        'titre' => 'Demander un devis',
        'extrait' => 'Décrivez votre activité et vos appels : vous recevez une proposition chiffrée sous 24 heures ouvrées.',
        'ordre' => 31,
        'modele' => 'page-pleine-largeur.php',
        'contenu' => $B::p('Décrivez votre activité, votre nombre d’appels et ce que vous attendez pendant l’appel. Nous vous répondons avec un devis détaillé sous 24 heures ouvrées, gratuitement et sans engagement.')
          . $B::sc('[sesim_contact type="devis"]'),
    ],

    [
        'slug' => 'etude-sur-mesure',
        'titre' => 'Étude sur mesure',
        'extrait' => 'Plusieurs lignes, plusieurs sites, gros volumes ou intégration à vos outils : parlons-en.',
        'ordre' => 32,
        'contenu' =>
            $B::p('Plusieurs lignes, plusieurs sites, gros volumes ? Décrivez votre besoin ici. Nous vous rappelons pour en parler, puis nous vous adressons une proposition détaillée.')
          . $B::sc('[sesim_contact type="etude"]'),
    ],

    [
        'slug' => 'contact',
        'titre' => 'Contact',
        'extrait' => 'Une question ? Écrivez-nous ou appelez-nous.',
        'ordre' => 33,
        'contenu' =>
            $B::encadre(
                $B::p('<strong>Téléphone :</strong> [se_tel]<br><strong>E-mail :</strong> [se_email]<br><strong>Horaires :</strong> du lundi au vendredi, de 8h à 19h')
              . $B::p('Standard Externalisé — OFFICE &amp; CALL, Dax (Landes)')
            )
          . $B::h2('Écrivez-nous')
          . $B::sc('[sesim_contact]')
          . $B::p('Vous souhaitez une proposition chiffrée ? <a href="@/devis/">Demandez votre devis</a> : réponse sous 24 heures ouvrées.'),
    ],

    /* ================= PAGES LÉGALES ================= */

    [
        'slug' => 'mentions-legales',
        'titre' => 'Mentions légales',
        'ordre' => 40,
        'a_completer' => true,
        'contenu' =>
            $B::h2('Éditeur du site')
          . $B::p('Le site standard-externalise.fr est édité par <strong>OFFICE &amp; CALL</strong>, société par actions simplifiée (SAS) au capital de 1 500 €, immatriculée au RCS de Dax sous le numéro 892 263 484.<br>Siège social : [adresse complète du siège]<br>Numéro de TVA intracommunautaire : FR95892263484<br>Téléphone : [se_tel]<br>E-mail : [se_email]')
          . $B::h2('Directrice de la publication')
          . $B::p('Catherine Delaistre, représentante légale d’OFFICE &amp; CALL.')
          . $B::h2('Hébergeur')
          . $B::p('IONOS SARL, 7 place de la Gare, 57200 Sarreguemines (SIREN 431 303 775).<br>Téléphone : [numéro indiqué dans votre contrat Ionos]')
          . $B::h2('Propriété intellectuelle')
          . $B::p('L’ensemble des contenus de ce site (textes, logo, charte graphique) est la propriété d’OFFICE &amp; CALL, sauf mention contraire. Toute reproduction sans autorisation écrite est interdite.')
          . $B::h2('Crédits')
          . $B::p('Photographies : [source ou mention des images utilisées].')
          . $B::h2('Données personnelles')
          . $B::p('Le traitement de vos données est décrit dans notre <a href="@/politique-de-confidentialite/">politique de confidentialité</a>.'),
    ],

    [
        'slug' => 'politique-de-confidentialite',
        'titre' => 'Politique de confidentialité',
        'ordre' => 41,
        'a_completer' => true,
        'contenu' =>
            $B::p('Cette page explique quelles données nous collectons sur ce site, pourquoi, et comment exercer vos droits.')
          . $B::h2('Responsable du traitement')
          . $B::p('OFFICE &amp; CALL SAS, RCS Dax 892 263 484, [adresse du siège]. Contact : [se_email].')
          . $B::h2('Données collectées et finalités')
          . $B::ul([
                '<strong>Formulaire de demande de devis</strong> : nom, entreprise, e-mail, téléphone, activité, volume d’appels, horaires souhaités et précisions éventuelles. Finalité : établir votre devis et vous recontacter à son sujet.',
                '<strong>Formulaires de contact et d’étude sur mesure</strong> : nom, société, e-mail, téléphone et message. Finalité : répondre à votre demande.',
            ])
          . $B::p('Ces données ne sont pas enregistrées dans la base du site : elles nous sont transmises par e-mail. Elles ne sont ni vendues ni utilisées à d’autres fins.')
          . $B::h2('Base légale')
          . $B::p('Le traitement repose sur votre demande : il s’agit de mesures précontractuelles prises à votre initiative.')
          . $B::h2('Durée de conservation')
          . $B::p('Les données d’un prospect sont conservées au maximum 3 ans après le dernier contact de sa part, puis supprimées. Si vous devenez client, elles sont conservées pendant la durée de la relation contractuelle et des obligations légales qui en découlent.')
          . $B::h2('Destinataires')
          . $B::p('Vos données sont destinées à OFFICE &amp; CALL uniquement. Elles transitent par notre hébergeur (IONOS) et notre messagerie électronique, qui agissent en tant que sous-traitants.')
          . $B::h2('Cookies et mesure d’audience')
          . $B::p('[À vérifier selon les extensions installées sur votre site : indiquez ici si vous utilisez un outil de mesure d’audience ou des cookies, et lesquels. Le thème et les formulaires n’en déposent aucun.]')
          . $B::h2('Vos droits')
          . $B::p('Vous disposez d’un droit d’accès, de rectification, d’effacement, d’opposition, de limitation et de portabilité de vos données. Pour les exercer, écrivez-nous à [se_email]. Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL (cnil.fr).'),
    ],

    [
        'slug' => 'cgv',
        'titre' => 'Conditions générales de vente',
        'ordre' => 42,
        'a_completer' => true,
        'contenu' =>
            $B::p('[Collez ici vos conditions générales de vente actuelles : ce sont celles jointes à vos devis. Elles ne sont pas réécrites ici, car il s’agit d’un document contractuel qui doit rester identique à celui que signent vos clients.]'),
    ],

    [
        'slug' => 'plan-du-site',
        'titre' => 'Plan du site',
        'ordre' => 43,
        'contenu' => $B::sc('[se_plan_du_site]'),
    ],

    ];
}
