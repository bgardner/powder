<?php
/**
 * Title: Footer - mega
 * Slug: powder/footer-mega
 * Categories: powder-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"fontSize":"x-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-x-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var(--wp--preset--spacing--60)"}}}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:image {"align":"center","width":40,"height":40,"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><a href="https://briangardner.com/powder/"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/site-logo-dark.svg'; ?>" alt="Powder site logo" width="40" height="40"/></a></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Made with Powder', 'powder' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"style":"dotted","width":"1px"},"bottom":{"width":"1px","style":"dotted"},"right":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0px"}}}} -->
	<div class="wp-block-group alignwide" style="border-top-style:dotted;border-top-width:1px;border-bottom-style:dotted;border-bottom-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
				<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"align":"center"} -->
					<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"left":{"width":"1px","style":"dotted"},"top":{},"right":{"width":"1px","style":"dotted"},"bottom":{}}}} -->
				<div class="wp-block-group" style="border-right-style:dotted;border-right-width:1px;border-left-style:dotted;border-left-width:1px">
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo esc_html__( '“If you can dream it, you can do it.”', 'powder' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">—Walt Disney</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
				<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"align":"center"} -->
					<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'powder' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.75"}},"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p> · </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="https://briangardner.com/powder/">Powder Theme</a> by <a href="https://briangardner.com/">Brian Gardner</a></p>
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
