<?php
/**
 * Title: Header with site logo, social icons
 * Slug: powder/header-logo-social-dark
 * Categories: powder-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","className":"is-style-section-2","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-2" style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"15px"},"layout":{"selfStretch":"fixed","flexSize":"200px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":30} /-->
			<!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true}} /-->
		<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","style":{"layout":{"selfStretch":"fixed","flexSize":"200px"},"spacing":{"blockGap":{"left":"5px"}}},"className":"is-style-outline is-style-hidden-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-outline is-style-hidden-mobile">
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
