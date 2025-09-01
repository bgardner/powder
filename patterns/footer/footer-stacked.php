<?php
/**
 * Title: Footer - stacked
 * Slug: powder/footer-stacked
 * Categories: powder-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"className":"wp-block-heading has-text-align-center","style":{"typography":{"fontSize":"48px"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Meet Powder.', 'powder' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Our goal is to revolutionize how beautiful WordPress websites are made by embracing the power and flexibility of block-based design.', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"x-small"} -->
	<div class="wp-block-group has-x-small-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.75"}},"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p> · </p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'All Rights Reserved', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
