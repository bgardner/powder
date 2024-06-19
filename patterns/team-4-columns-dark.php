<?php
/**
 * Title: Team section with 4 columns
 * Slug: powder/team-4-columns-dark
 * Categories: powder-team
 */
?>
<!-- wp:group {"metadata":{"name":"Team Members"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xx-large"} -->
	<h1 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size">Team Members</h1>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
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
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}},"className":"is-style-outline"} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
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
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}},"className":"is-style-outline"} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
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
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}},"className":"is-style-outline"} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
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
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"left":"5px"},"margin":{"top":"15px"}}},"className":"is-style-outline"} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-outline" style="margin-top:15px">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
