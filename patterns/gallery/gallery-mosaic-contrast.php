<?php
/**
 * Title: Gallery with mosaic of images
 * Slug: powder/gallery-mosaic-contrast
 * Categories: powder-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
