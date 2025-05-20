<?php
/**
 * Title: Section with columns of image, heading, text
 * Slug: powder/featured-columns
 * Categories: powder-featured
 */
?>
<!-- wp:group {"metadata":{"name":"Feature Columns"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
		<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0px"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--20)">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
			<h2 class="wp-block-heading" style="font-size:48px"><?php echo esc_html__( 'Design and build stunning websites with Powder.', 'powder' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Learn More →', 'powder' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:5px"><?php echo esc_html__( 'Are you ready to design with WordPress?', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:5px"><?php echo esc_html__( 'Are you ready to design with WordPress?', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:5px"><?php echo esc_html__( 'Are you ready to design with WordPress?', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
