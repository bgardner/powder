<?php
/**
 * Title: Section with text, button
 * Slug: powder/hero-basic-text-button-contrast
 * Categories: powder-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:60px"><?php echo esc_html__( 'The premier block theme for WordPress designers & developers', 'powder' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Extensive pattern library. Versatile templates. Tailored color palettes.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--x-large)"><?php echo esc_html__( 'Start Your Project →', 'powder' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
