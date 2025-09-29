<?php
/**
 * Title: Section with text, image, buttons
 * Slug: powder/hero-columns-text-image
 * Categories: powder-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}},"className":"is-style-column-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-column-reverse">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
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
			<!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
			<h2 class="wp-block-heading" style="font-size:48px"><?php echo esc_html__( 'Design and build stunning websites with Powder.', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Our goal is to revolutionize how beautiful WordPress websites are made by embracing the power and flexibility of block-based design.', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'powder' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
