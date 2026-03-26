<?php
/**
 * Title: Gallery with text and images
 * Slug: powder/gallery-text-images-contrast
 * Categories: powder-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
		<div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="line-height:1.5;flex-basis:30%">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'My Images', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Powder reclaims its minimalist roots by embracing simplicity and the purity of form and function. Its signature approach transcends conventional WordPress design standards, offering a canvas where creativity flourishes.', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'View Gallery →', 'powder' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			<!-- wp:gallery {"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
			<figure class="wp-block-gallery has-nested-images columns-default is-cropped">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
