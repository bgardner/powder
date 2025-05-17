<?php
/**
 * Title: Single testimonial with text, image
 * Slug: powder/testimonials-single-contrast
 * Categories: powder-testimonials
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">★ ★ ★ ★ ★</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"10px"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size" style="margin-top:10px;line-height:1.5"><?php echo esc_html__( '“Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.”', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-avatar-light.svg'; ?>" alt="Sample avatar" style="object-fit:cover;width:40px;height:40px"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">Jennifer Kayne, Designer</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
