<?php
/**
 * Title: Team member with image, text, social icons
 * Slug: powder/team-single-image-text-contrast
 * Categories: powder-team
 */
?>
<!-- wp:group {"metadata":{"name":"Team Member"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"300px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:300px">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Jennifer Kayne', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="margin-top:5px"><?php echo esc_html__( 'Chief Executive Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Raised under the sunny skies of Laguna Beach, she channels her coastal upbringing into creative leadership at a cutting-edge design studio, focusing on distinctive branding and digital innovation.', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size is-style-outline">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
