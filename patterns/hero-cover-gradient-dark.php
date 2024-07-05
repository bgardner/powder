<?php
/**
 * Title: Cover gradient with text, buttons
 * Slug: powder/hero-cover-gradient-dark
 * Categories: powder-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Cover"},"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0">
	<!-- wp:cover {"isUserOverlayColor":true,"gradient":"contrast-base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}}} -->
	<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-contrast-base-gradient-background"></span><div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained","wideSize":"960px"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"20px"},"shadow":"var:preset|shadow|light"},"borderColor":"base"} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" class="has-border-color has-base-border-color" style="border-width:20px;box-shadow:var(--wp--preset--shadow--light);aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div></div>
	<!-- /wp:cover -->
	<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"margin":{"top":"0"},"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Meet Powder.', 'powder' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Our goal is to revolutionize how beautiful WordPress websites are made by embracing the power and flexibility of block-based design.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'powder' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
