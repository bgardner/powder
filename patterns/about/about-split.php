<?php
/**
 * Title: About section with columns
 * Slug: powder/about-split
 * Categories: powder-about
 */
?>
<!-- wp:group {"metadata":{"name":"About Split"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
		<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0px"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--20)">
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"48px"}}} -->
			<h2 class="wp-block-heading" style="font-size:48px;font-style:normal;font-weight:300"><?php echo esc_html__( 'Design and build stunning websites with Powder.', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button  -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We want to revolutionize how beautiful WordPress websites are made by embracing the power and flexibility of block-based design. Our approach transcends conventional standards and provides an innovative and imaginative canvas where creativity has no limits.', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
