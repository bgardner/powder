<?php
/**
 * Title: Call to action with text, buttons
 * Slug: powder/call-to-action-centered-contrast
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"className":"wp-block-heading has-text-align-center","style":{"typography":{"fontSize":"48px"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Meet Powder.', 'powder' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Our goal is to revolutionize how beautiful WordPress websites are made by embracing the power and flexibility of block-based design.', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Get Started', 'powder' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'powder' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
