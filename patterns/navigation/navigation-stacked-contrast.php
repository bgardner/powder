<?php
/**
 * Title: Navigation overlay with image, text, buttons
 * Slug: powder/navigation-stacked-contrast
 * Categories: powder-navigation
 * Block Types: core/template-part/navigation-overlay
 * Template Types: navigation
 */
?>
<!-- wp:group {"metadata":{"name":"Navigation"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="min-height:100vh;margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:30px;padding-left:30px">
		<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:separator {"backgroundColor":"contrast"} -->
			<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
			<!-- wp:heading {"style":{"typography":{"fontSize":"48px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);font-size:48px"><?php echo esc_html__( 'The premier block theme for WordPress designers.', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.5"}}} -->
		<p style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'Rooted in simplicity and built with purpose, it brings an abundance of patterns, versatile templates, and a tailored color palette.', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
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
