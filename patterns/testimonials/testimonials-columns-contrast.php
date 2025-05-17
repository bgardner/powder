<?php
/**
 * Title: Testimonials section with text, image
 * Slug: powder/testimonials-columns-contrast
 * Categories: powder-testimonials
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">★ ★ ★ ★ ★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}}} -->
			<p style="margin-top:10px"><?php echo esc_html__( '“Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.”', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">★ ★ ★ ★ ★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}}} -->
			<p style="margin-top:10px"><?php echo esc_html__( '“Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.”', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">★ ★ ★ ★ ★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}}} -->
			<p style="margin-top:10px"><?php echo esc_html__( '“Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.”', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
