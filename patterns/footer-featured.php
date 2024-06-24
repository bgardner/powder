<?php
/**
 * Title: Featured footer with call to action
 * Slug: powder/footer-featured
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|large","bottom":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-column-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-column-reverse">
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"constrained","wideSize":"800px","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
					<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"fontSize":"max-60"} -->
				<h2 class="wp-block-heading has-max-60-font-size"><?php echo esc_html__( 'Are you ready to start designing with WordPress?', 'powder' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'powder' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"320px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:320px">
			<!-- wp:image {"width":320,"height":320,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="object-fit:cover;width:320px;height:320px" width="320" height="320"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"fontSize":"x-small"} -->
	<div class="wp-block-group alignwide has-x-small-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p> · </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="https://powderwp.com/">Powder Theme</a> by <a href="https://briangardner.com/">Brian Gardner</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"}}}} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-outline">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.threads.net/","service":"threads"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
