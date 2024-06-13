<?php
/**
 * Title: Gallery with row of images
 * Slug: powder/gallery-horizontal-row
 * Categories: powder-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'My Images', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><a href="#"><?php echo esc_html__( 'Follow Me →', 'powder' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"full","align":"wide","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-6 is-cropped">
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
