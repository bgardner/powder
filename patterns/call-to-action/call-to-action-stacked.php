<?php
/**
 * Title: Call to action with text, button
 * Slug: powder/call-to-action-stacked
 * Categories: powder-call-to-action
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"fontSize":"x-small"} -->
		<p class="has-x-small-font-size" style="line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:heading {"className":"is-style-balanced","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"48px"}}} -->
	<h2 class="wp-block-heading is-style-balanced" style="font-size:48px;font-style:normal;font-weight:400"><?php echo esc_html__( 'We want to revolutionize how WordPress websites are made by embracing block-based design.', 'powder' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
