<?php
/**
 * Title: Gallery with full-width image
 * Slug: powder/gallery-full-width-dark
 * Categories: powder-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Full-width Image"},"align":"full","style":{"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0">
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
