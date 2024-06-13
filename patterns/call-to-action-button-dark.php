<?php
/**
 * Title: Call to action with text, button
 * Slug: powder/call-to-action-button-dark
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--medium);padding-right:30px;padding-bottom:var(--wp--preset--spacing--medium);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"}},"fontSize":"xx-large"} -->
		<p class="has-xx-large-font-size" style="line-height:1.25"><?php echo esc_html__( 'Work with me and experience the magic of simple design.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Let’s get started →', 'powder' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
