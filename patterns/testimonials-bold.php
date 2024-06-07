<?php
/**
 * Title: Bold testimonial with text, images
 * Slug: powder/testimonials-bold
 * Categories: powder-testimonials
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-right:30px;padding-left:30px">
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-top-dark.svg'; ?>" alt="Quote top dark" style="width:60px"/></figure>
	<!-- /wp:image -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"max-60","fontFamily":"cormorant"} -->
		<p class="has-text-align-center has-cormorant-font-family has-max-60-font-size" style="line-height:1"><?php echo esc_html__( 'Powder is the premier block theme for WordPress designers and developers, offering an extensive library of stylish patterns.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Jennifer Kayne, Designer', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-bottom-dark.svg'; ?>" alt="Quote bottom dark" style="width:60px"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
