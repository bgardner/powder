<?php
/**
 * Title: Team member with image, text, social icons
 * Slug: powder/team-single-text-image
 * Categories: powder-team
 */
?>
<!-- wp:group {"metadata":{"name":"Team Member"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
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
			<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#0a0a0a","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"5px"}}},"className":"is-style-outline"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-outline">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"300px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:300px">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
