<?php
// Reusable Guide block (no header/footer). Can be embedded under other templates.
// Optional variables you can set before including this file:
// - $guide_heading_level (e.g., 'h1' or 'h2')
// - $guide_title (string; defaults to current page title)
// - $guide_right_content_html (HTML; if empty, a default features list is rendered)

$heading = isset($guide_heading_level) && in_array($guide_heading_level, ['h1','h2','h3']) ? $guide_heading_level : 'h1';
// Fixed title as requested
$title   = 'Évaluation de la valeur<br>marchande de votre propriété.';

// Fixed bonus text under the image
$bonus_text = "Recevez en bonus notre guide:\n12 améliorations pour ajouter jusqu’à \n 95 000 $ à la valeur de votre propriété.";

// CTA (text fixed; URL optional via meta if provided)
$cta_url_meta  = get_post_meta(get_the_ID(), 'guide_cta_url', true);
$cta_text = 'Télécharger le guide';
$cta_href = $cta_url_meta ? esc_url($cta_url_meta) : '#';

$right_html = isset($guide_right_content_html) ? trim($guide_right_content_html) : '';
?>

<section class="guide-hero">
  <div class="container">
  <<?php echo $heading; ?> class="guide-title"><?php echo $title; ?></<?php echo $heading; ?>>
    <div class="guide-grid">
      <div class="guide-left">
        <div class="guide-left-inner">
          <div class="guide-visual">
            <img src="https://storage.googleapis.com/msgsndr/FqqkdWQ0F0QPYOpLYXnz/media/690e1e7827678e94cfe5fcb1.webp" alt="Guide pratique - Évaluation de la valeur marchande" class="guide-image" loading="eager" />
          </div>

          <p class="guide-bonus"><?php echo nl2br(esc_html($bonus_text)); ?></p>

          <p class="guide-cta-wrap">
            <a class="guide-cta" href="#evaluation">
              <?php echo esc_html($cta_text); ?>
            </a>
          </p>
        </div>
      </div>

      <div class="guide-right">
        <?php if (!empty($right_html)) : ?>
          <div class="guide-content"><?php echo $right_html; ?></div>
        <?php else : ?>
          <ul class="guide-features">
            <li class="guide-feature"><img class="guide-icon" src="https://test2.evaluationpropriete.ca/wp-content/uploads/sites/89/2025/11/home.png" alt="Icône maison" /> Une sélection de propriétés comparables vendues récemment dans votre secteur.</li>
            <li class="guide-feature"><img class="guide-icon" src="https://test2.evaluationpropriete.ca/wp-content/uploads/sites/89/2025/11/price.png" alt="Icône prix" /> L’évolution estimée de la valeur de votre propriété depuis son achat.</li>
            <li class="guide-feature"><img class="guide-icon" src="https://test2.evaluationpropriete.ca/wp-content/uploads/sites/89/2025/11/office.png" alt="Icône marché" /> Un aperçu du marché actuel pour déterminer si c’est le bon moment de vendre.</li>
            <li class="guide-feature"><img class="guide-icon" src="https://test2.evaluationpropriete.ca/wp-content/uploads/sites/89/2025/11/bag.png" alt="Icône recommandations" /> Des recommandations d’améliorations pour en tirer le meilleur prix.</li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
