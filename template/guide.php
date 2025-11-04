<?php
/*
Template Name: Guide Landing
Template Post Type: page
*/

get_header();

while (have_posts()) : the_post();

		// Reusable content with sensible defaults so this template can be dropped onto any page
		$bonus_text = get_post_meta(get_the_ID(), 'guide_bonus_text', true);
		if (!$bonus_text) {
				$bonus_text = "Recevez en bonus notre guide: 12 améliorations pour ajouter jusqu’à 95 000 $ à la valeur de votre propriété.";
		}

		$cta_url  = get_post_meta(get_the_ID(), 'guide_cta_url', true);
		$cta_text = get_post_meta(get_the_ID(), 'guide_cta_text', true);
		if (!$cta_text) {
				$cta_text = 'Télécharger le guide';
		}

		// If no URL is provided, keep the button but disable link behavior
		$cta_href = $cta_url ? esc_url($cta_url) : '#';

		// If page content is empty, provide a default list of features as a helpful starting point
		$raw_content = trim(get_the_content());
		$has_editor_content = !empty($raw_content);

?>

<main class="guide-hero">
	<div class="container">
		<div class="guide-grid">
			<section class="guide-left">
				<h1 class="guide-title"><?php echo esc_html(get_the_title()); ?></h1>

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
			</section>

			<aside class="guide-right">
				<?php if ($has_editor_content) : ?>
					<div class="guide-content">
						<?php
							// Render the editor content on the right side (ideal for a UL of features with optional icons)
							the_content();
						?>
					</div>
				<?php else : ?>
					<ul class="guide-features">
						<li class="guide-feature"><i class="fa fa-home" aria-hidden="true"></i> Une sélection de propriétés comparables vendues récemment dans votre secteur.</li>
						<li class="guide-feature"><i class="fa fa-tags" aria-hidden="true"></i> L’évolution estimée de la valeur de votre propriété depuis son achat.</li>
						<li class="guide-feature"><i class="fa fa-line-chart" aria-hidden="true"></i> Un aperçu du marché actuel pour déterminer si c’est le bon moment de vendre.</li>
						<li class="guide-feature"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Des recommandations d’améliorations pour en tirer le meilleur prix.</li>
					</ul>
				<?php endif; ?>
			</aside>
		</div>
	</div>
</main>

<?php endwhile; // end of the loop.

get_footer();
?>

