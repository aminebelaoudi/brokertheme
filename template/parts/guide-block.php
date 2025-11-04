<?php
// Reusable Guide block (no header/footer). Can be embedded under other templates.
// Optional variables you can set before including this file:
// - $guide_heading_level (e.g., 'h1' or 'h2')
// - $guide_title (string; defaults to current page title)
// - $guide_right_content_html (HTML; if empty, a default features list is rendered)

$heading = isset($guide_heading_level) && in_array($guide_heading_level, ['h1','h2','h3']) ? $guide_heading_level : 'h1';
$title   = isset($guide_title) && $guide_title !== '' ? $guide_title : get_the_title();

$bonus_text = get_post_meta(get_the_ID(), 'guide_bonus_text', true);
if (!$bonus_text) {
  $bonus_text = "Recevez en bonus notre guide: 12 améliorations pour ajouter jusqu’à 95 000 $ à la valeur de votre propriété.";
}

$cta_url  = get_post_meta(get_the_ID(), 'guide_cta_url', true);
$cta_text = get_post_meta(get_the_ID(), 'guide_cta_text', true);
if (!$cta_text) { $cta_text = 'Télécharger le guide'; }
$cta_href = $cta_url ? esc_url($cta_url) : '#';

$right_html = isset($guide_right_content_html) ? trim($guide_right_content_html) : '';
?>

<section class="guide-hero">
  <div class="container">
    <div class="guide-grid">
      <div class="guide-left">
        <<?php echo $heading; ?> class="guide-title"><?php echo esc_html($title); ?></<?php echo $heading; ?>>

        <div class="guide-visual">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['class' => 'guide-image', 'loading' => 'eager']); ?>
          <?php endif; ?>
        </div>

        <p class="guide-bonus"><?php echo wp_kses_post($bonus_text); ?></p>

        <p class="guide-cta-wrap">
          <a class="guide-cta<?php echo $cta_url ? '' : ' is-disabled'; ?>" href="<?php echo $cta_href; ?>"<?php echo $cta_url ? '' : ' role="button" aria-disabled="true"'; ?>>
            <?php echo esc_html($cta_text); ?>
          </a>
        </p>
      </div>

      <div class="guide-right">
        <?php if (!empty($right_html)) : ?>
          <div class="guide-content"><?php echo $right_html; ?></div>
        <?php else : ?>
          <ul class="guide-features">
            <li class="guide-feature"><i class="fa fa-home" aria-hidden="true"></i> Une sélection de propriétés comparables vendues récemment dans votre secteur.</li>
            <li class="guide-feature"><i class="fa fa-tags" aria-hidden="true"></i> L’évolution estimée de la valeur de votre propriété depuis son achat.</li>
            <li class="guide-feature"><i class="fa fa-line-chart" aria-hidden="true"></i> Un aperçu du marché actuel pour déterminer si c’est le bon moment de vendre.</li>
            <li class="guide-feature"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Des recommandations d’améliorations pour en tirer le meilleur prix.</li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
