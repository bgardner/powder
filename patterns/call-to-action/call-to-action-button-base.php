<?php
/**
 * Title: Call to action with text, button
 * Slug: powder/call-to-action-button
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action","categories":["powder-call-to-action"],"patternName":"powder/call-to-action-button"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"},"layout":{"selfStretch":"fixed","flexSize":"800px"}},"fontSize":"xx-large"} -->
		<p class="has-xx-large-font-size" style="line-height:1.25"><?php echo esc_html__( 'We want to revolutionize how WordPress websites are made by embracing block-based design.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
