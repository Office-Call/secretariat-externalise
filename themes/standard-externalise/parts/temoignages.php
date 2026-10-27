<?php
/**
 * Avis clients (accueil, À propos, Prise de rendez-vous, Témoignages).
 * Par défaut : les avis Google publiés pour OFFICE & CALL, recopiés sans modification (inc/avis.php).
 * Des avis saisis dans Apparence › Personnaliser › Témoignages les remplacent.
 */
if (!defined('ABSPATH')) { exit; }

$liste = se_avis_liste();
$avis = $liste['avis'];
if (!$avis) {
    return;
}
$etoiles = '<span class="stars" role="img" aria-label="Note : 5 sur 5">★★★★★</span>';
?>
<section class="section testimonials">
  <div class="wrap">
    <div class="section-head center">
      <p class="kicker">Avis clients</p>
      <h2>Ils nous font confiance</h2>
    </div>
    <div class="carousel<?php echo count($avis) <= 3 ? ' carousel-static' : ''; ?>">
      <button class="car-btn car-prev" type="button" aria-label="Avis précédent"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 6l-6 6 6 6"/></svg></button>
      <div class="car-track" tabindex="0" aria-label="Avis clients">
        <?php foreach ($avis as $a) : ?>
        <figure class="quote">
          <?php if ($liste['google']) { echo $etoiles; } else { ?><span class="quote-mark" aria-hidden="true">“</span><?php } ?>
          <blockquote><?php echo nl2br(esc_html($a['texte'])); ?></blockquote>
          <figcaption><span class="avatar" aria-hidden="true"><?php echo esc_html(mb_strtoupper(mb_substr($a['nom'], 0, 1))); ?></span><span><strong><?php echo esc_html($a['nom']); ?></strong><?php if ($a['metier']) : ?><br><?php echo esc_html($a['metier']); ?><?php endif; ?><?php if ($a['date']) : ?><br><span class="quote-date">Avis Google, <?php echo esc_html($a['date']); ?></span><?php endif; ?></span></figcaption>
        </figure>
        <?php endforeach; ?>
      </div>
      <button class="car-btn car-next" type="button" aria-label="Avis suivant"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg></button>
    </div>
    <?php if ($liste['google']) : ?>
    <p class="avis-source">Avis publiés sur Google pour OFFICE&nbsp;&amp;&nbsp;CALL, la société qui assure le service Standard Externalisé&nbsp;: une sélection d’avis portant sur la gestion des appels, reproduits sans modification. Ces avis ne font pas l’objet d’une vérification de notre part.</p>
    <?php endif; ?>
  </div>
</section>
