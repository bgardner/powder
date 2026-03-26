<?php
/**
 * Title: Team members in columns view
 * Slug: powder/team-columns-contrast
 * Categories: powder-team
 */
?>
<!-- wp:group {"metadata":{"name":"Team Members"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xx-large"} -->
	<h1 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Team Members', 'powder' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Jennifer Kayne', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Executive Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"center","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}}} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Anthony Hawk', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Operations Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"center","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}}} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Autumn Cole', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Marketing Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"center","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}}} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-light.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Zach Marley', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Financial Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"center","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}}} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size is-style-outline" style="margin-top:15px">
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
