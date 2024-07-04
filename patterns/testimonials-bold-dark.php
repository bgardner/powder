<?php
/**
 * Title: Bold testimonial with text, images
 * Slug: powder/testimonials-bold-dark
 * Categories: powder-testimonials
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","className":"is-style-section-2","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull is-style-section-2" style="margin-top:0">
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-top-light.svg'; ?>" alt="Quote top light" style="width:60px"/></figure>
	<!-- /wp:image -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"60px"}}} -->
		<p class="has-text-align-center" style="font-size:60px;line-height:1"><?php echo esc_html__( 'Powder is the premier block theme for WordPress designers and developers, offering an extensive library of stylish patterns.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Jennifer Kayne, Designer', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-bottom-light.svg'; ?>" alt="Quote bottom light" style="width:60px"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
