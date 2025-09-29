<?php
/**
 * Title: Call to action with text, button
 * Slug: powder/call-to-action-stacked-contrast
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","wideSize":"1080px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0">
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:separator -->
			<hr class="wp-block-separator has-alpha-channel-opacity"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"48px"}}} -->
		<h2 class="wp-block-heading" style="font-size:48px;font-style:normal;font-weight:300"><?php echo esc_html__( 'We want to revolutionize how WordPress websites are made by embracing block-based design.', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
