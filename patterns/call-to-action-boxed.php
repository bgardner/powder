<?php
/**
 * Title: Call to action with boxed text, button
 * Slug: powder/call-to-action-boxed
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"},"layout":{"selfStretch":"fixed","flexSize":"680px"}},"fontSize":"x-large"} -->
		<p class="has-x-large-font-size" style="line-height:1.25"><?php echo esc_html__( 'We want to revolutionize how WordPress websites are made by embracing block-based design.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--x-large)"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
