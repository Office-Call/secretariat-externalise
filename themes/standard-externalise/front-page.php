<?php
/* Page d'accueil (s'affiche automatiquement sur la page d'accueil du site). */
if (!defined('ABSPATH')) { exit; }
get_header();
?>
<main id="contenu">

<!-- ============ BANDEAU PRINCIPAL ============ -->
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-text">
      <p class="kicker kicker-light">Permanence téléphonique haut de gamme</p>
      <h1>Chaque appel mérite une réponse <em>d'exception.</em></h1>
      <p class="hero-lead">Confiez votre accueil téléphonique à une équipe professionnelle en France. Une relation humaine, un service sur mesure, une image irréprochable.</p>
      <div class="btn-row">
        <a class="btn btn-rose" href="<?php echo se_lien('devis'); ?>">Demander un devis <?php echo se_fleche(); ?></a>
        <a class="btn btn-outline-light" href="#solutions">Découvrir nos solutions</a>
      </div>
      <ul class="hero-points">
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7l4-3 4 2 4-2 4 3-2 5 2 6-6 2-4-2-4 2-2-6 2-4z"/></svg>
          <span>Une équipe<br>en France</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="2.5" y="13" width="4" height="6" rx="1.5"/><rect x="17.5" y="13" width="4" height="6" rx="1.5"/><path d="M19.5 19c0 1.5-2 2.5-5 2.5"/></svg>
          <span>Un accueil<br>100 % personnalisé</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/></svg>
          <span>Une image professionnelle<br>en toutes circonstances</span>
        </li>
      </ul>
    </div>
    <div class="hero-media">
      <!-- Photo d'illustration : à remplacer par une photo réelle de votre équipe dès que possible. -->
      <img src="<?php echo se_img('conseillere-casque.webp'); ?>" alt="Conseillère souriante avec un casque téléphonique" width="900" height="1125" fetchpriority="high">
      <div class="hero-badge">
        <span class="hero-badge-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></span>
        <span>Vos appels,<br>entre de bonnes mains.</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ CHIFFRES ============ -->
<section class="stats" aria-label="Quelques chiffres">
  <div class="wrap stats-grid">
    <div class="stat"><p class="stat-num">50+</p><p>clients nous font confiance</p></div>
    <div class="stat"><p class="stat-num">≈ 5 200</p><p>appels traités par mois</p></div>
    <div class="stat"><p class="stat-small">Depuis</p><p class="stat-num">2008</p><p>à vos côtés</p></div>
  </div>
</section>

<!-- ============ SOLUTIONS ============ -->
<section id="solutions" class="section">
  <div class="wrap">
    <div class="section-head center">
      <p class="kicker">Nos solutions</p>
      <h2>Des services sur mesure <br class="br-desk">pour <em>prendre vos appels quand vous ne pouvez pas</em></h2>
      <p>Une permanence téléphonique professionnelle et humaine, adaptée à vos besoins et à votre activité.</p>
    </div>
    <div class="cards">
      <a class="card card-dark" href="<?php echo se_lien('standard-telephonique-externalise'); ?>">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/><path d="M15 3a6 6 0 0 1 6 6M15 6.5A2.5 2.5 0 0 1 17.5 9"/></svg>
        <h3>Standard téléphonique externalisé</h3>
        <p>Votre standard géré en toute confiance.</p>
        <span class="card-go" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="card" href="<?php echo se_lien('permanence-telephonique'); ?>">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="2.5" y="13" width="4" height="6" rx="1.5"/><rect x="17.5" y="13" width="4" height="6" rx="1.5"/><path d="M19.5 19c0 1.5-2 2.5-5 2.5"/></svg>
        <h3>Permanence téléphonique</h3>
        <p>Tous vos appels pris en charge de 8h à 19h.</p>
        <span class="card-go" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="card" href="<?php echo se_lien('gestion-des-debordements-dappels'); ?>">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 3l4 4-4 4"/><path d="M3 11V9a2 2 0 0 1 2-2h16"/><path d="M7 21l-4-4 4-4"/><path d="M21 13v2a2 2 0 0 1-2 2H3"/></svg>
        <h3>Débordement d'appels</h3>
        <p>Une solution flexible en période de pic d'activité.</p>
        <span class="card-go" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="card" href="<?php echo se_lien('prise-de-rendez-vous'); ?>">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 17.5h.01M12 17.5h.01"/></svg>
        <h3>Prise de rendez-vous</h3>
        <p>Des agendas à jour et des clients bien informés.</p>
        <span class="card-go" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="card" href="<?php echo se_lien('assistance-administrative'); ?>">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="M9 10h6M9 14h6M9 18h3"/></svg>
        <h3>Assistance administrative</h3>
        <p>Devis, facturation, suivi de dossiers… par la même équipe.</p>
        <span class="card-go" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
    </div>
  </div>
</section>

<!-- ============ MÉTIERS ============ -->
<section class="split split-left">
  <div class="split-media">
    <!-- Photo d'illustration -->
    <img src="<?php echo se_img('conseillere-telephone.webp'); ?>" alt="Conseillère au téléphone dans un bureau" width="800" height="1000" loading="lazy">
  </div>
  <div class="split-text">
    <p class="kicker">Votre métier, notre expertise</p>
    <h2>Une permanence téléphonique qui comprend <em>votre quotidien</em></h2>
    <p>Nos conseillères s'adaptent à votre secteur d'activité, à vos consignes et à vos priorités. Elles parlent votre langage et représentent votre entreprise avec le même soin que si c'était la leur.</p>
    <ul class="metiers">
      <li><a href="<?php echo se_lien('metiers/artisans-btp'); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.7 6.3a4 4 0 0 0 5 5L21 13l-8 8-3-3"/><path d="M3 21l6-6M4 4l5 5M7 3L3 7l2 2 4-4z"/></svg><span>Artisans<br>et BTP</span></a></li>
      <li><a href="<?php echo se_lien('metiers/professions-juridiques'); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v18M7 21h10M5 7h14"/><path d="M5 7l-3 7a3 3 0 0 0 6 0zM19 7l-3 7a3 3 0 0 0 6 0z"/></svg><span>Professions<br>juridiques</span></a></li>
      <li><a href="<?php echo se_lien('metiers/expertise-comptable'); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8v4H8zM8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/></svg><span>Expertise<br>comptable</span></a></li>
      <li><a href="<?php echo se_lien('metiers/immobilier'); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/></svg><span>Immobilier</span></a></li>
      <li><a href="<?php echo se_lien('metiers/services-a-la-personne'); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="7" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.5"/><path d="M16 14.2c2.8.3 5 2.6 5 5.8"/></svg><span>Services à<br>la personne</span></a></li>
    </ul>
    <a class="btn btn-rose" href="<?php echo se_lien('metiers'); ?>">Découvrir tous les métiers <?php echo se_fleche(); ?></a>
  </div>
</section>

<!-- ============ POURQUOI NOUS ============ -->
<section class="split split-right">
  <div class="split-text">
    <p class="kicker">Pourquoi nous ?</p>
    <h2>Une équipe engagée, <br class="br-desk">une <em>vraie différence</em></h2>
    <p>Derrière chaque appel, il y a une personne, une écoute et une attention sincère. Nos conseillères sont salariées en France et formées pour offrir un accueil de qualité, à la hauteur de votre image.</p>
    <a class="btn btn-rose" href="<?php echo se_lien('a-propos'); ?>">Découvrir notre équipe <?php echo se_fleche(); ?></a>
  </div>
  <div class="split-media">
    <!-- Photo d'illustration : à remplacer par une photo réelle de l'équipe. -->
    <img src="<?php echo se_img('equipe.webp'); ?>" alt="Trois conseillères équipées de casques téléphoniques" width="1100" height="825" loading="lazy">
  </div>
</section>

<!-- ============ MÉTHODE ============ -->
<section class="section method">
  <div class="wrap">
    <div class="section-head center">
      <p class="kicker">Notre méthode</p>
      <h2>Une mise en place simple et rapide</h2>
    </div>
    <ol class="steps">
      <li><span class="step-num">1</span><h3>Échange sur vos besoins</h3><p>Nous analysons votre activité et vos priorités.</p></li>
      <li><span class="step-num">2</span><h3>Paramétrage sur mesure</h3><p>Consignes, messages, agenda, outils.</p></li>
      <li><span class="step-num">3</span><h3>Formation de l'équipe</h3><p>Vos appels sont pris en charge par nos conseillères.</p></li>
      <li><span class="step-num">4</span><h3>Suivi continu</h3><p>Ajustements et relevé mensuel selon vos besoins.</p></li>
    </ol>
    <p class="center"><a class="btn btn-rose" href="<?php echo se_lien('comment-ca-fonctionne'); ?>">Voir comment ça fonctionne <?php echo se_fleche(); ?></a></p>
  </div>
</section>

<?php get_template_part('parts/temoignages'); ?>

<!-- ============ APPEL À L'ACTION ============ -->
<section class="cta">
  <div class="wrap cta-inner">
    <div>
      <p class="kicker kicker-light">Tarifs et devis</p>
      <h2>Recevez votre devis sous 24 heures</h2>
      <p>Décrivez votre activité et vos appels en quelques lignes : nous vous répondons avec une proposition chiffrée, adaptée à votre volume d’appels. Gratuit et sans engagement.</p>
    </div>
    <div class="cta-actions">
      <a class="btn btn-rose" href="<?php echo se_lien('devis'); ?>">Demander un devis <?php echo se_fleche(); ?></a>
      <a class="cta-link" href="<?php echo se_lien('etude-sur-mesure'); ?>">ou demander une étude sur mesure</a>
    </div>
  </div>
</section>

</main>
<?php get_footer();
