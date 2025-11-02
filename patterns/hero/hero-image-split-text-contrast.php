<?php
/**
 * Title: Section with image, split text
 * Slug: powder/hero-split-text-contrast
 * Categories: powder-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","wideSize":"960px","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"xx-small"} -->
		<p class="has-text-align-center has-xx-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Designed by Brian Gardner', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
		
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);font-size:48px;font-style:normal;font-weight:300;line-height:1.2"><?php echo esc_html__( 'The premier block theme for professional WordPress designers &amp; agencies', 'powder' ); ?></h1>
		<!-- /wp:heading -->
		
		<!-- wp:separator {"backgroundColor":"contrast"} -->
		<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background"/>
		<!-- /wp:separator -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php echo esc_html__( 'Rooted in simplicity and built with purpose, Powder brings an abundance of patterns, versatile templates, and tailored color palettes to designers and agencies.', 'powder' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php echo esc_html__( 'Rooted in simplicity and built with purpose, Powder brings an abundance of patterns, versatile templates, and tailored color palettes to designers and agencies.', 'powder' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
