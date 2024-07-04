<?php
/**
 * Title: Section with text, button
 * Slug: powder/hero-text-button
 * Categories: powder-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","className":"is-style-section-1","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:60px"><?php echo esc_html__( 'Are you ready to design with WordPress?', 'powder' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Redefine your space with a stylish, modern design.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--x-large)"><?php echo esc_html__( 'Start Your Project →', 'powder' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
