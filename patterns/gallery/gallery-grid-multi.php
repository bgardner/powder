<?php
/**
 * Title: Gallery with multi grid of images
 * Slug: powder/gallery-grid-multi
 * Categories: powder-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'My Images', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><a href="#"><?php echo esc_html__( 'View Gallery →', 'powder' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
		<!-- wp:gallery {"columns":1,"linkTo":"none","sizeSlug":"full","align":"wide","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
			<figure class="wp-block-gallery alignwide has-nested-images columns-1 is-cropped">
				<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
				<!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"full","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<figure class="wp-block-gallery alignwide has-nested-images columns-2 is-cropped">
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
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
