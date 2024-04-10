<?php
/**
 * Title: Single testimonial with text, image
 * Slug: powder/testimonials-single-dark
 * Categories: powder-testimonials
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","wideSize":"720px"},"metadata":{"name":"Testimonials"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">★ ★ ★ ★ ★</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"10px"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size" style="margin-top:10px;line-height:1.5"><?php echo esc_html__( '“Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.”', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"align":"center","width":40,"height":40,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-avatar-light.svg'; ?>" alt="Sample avatar" style="object-fit:cover;width:40px;height:40px" width="40" height="40"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'Jennifer Kayne, Designer', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
