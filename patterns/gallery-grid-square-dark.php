<?php
/**
 * Title: Gallery with square grid of images
 * Slug: powder/gallery-grid-square-dark
 * Categories: gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","className":"is-style-section-2","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-2" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
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
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","minimumColumnWidth":"400px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Image #1 — Laguna Beach, CA</figcaption></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Image #2 — Laguna Beach, CA</figcaption></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Image #3 — Laguna Beach, CA</figcaption></figure>
		<!-- /wp:image -->
		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Image #4 — Laguna Beach, CA</figcaption></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
