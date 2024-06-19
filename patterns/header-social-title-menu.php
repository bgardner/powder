<?php
/**
 * Title: Header with social icons, site title, menu
 * Slug: powder/header-social-title-menu
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-small","right":"30px","bottom":"var:preset|spacing|x-small","left":"30px"}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#0a0a0a","openInNewTab":true,"size":"has-small-icon-size","style":{"layout":{"selfStretch":"fixed","flexSize":"300px"},"spacing":{"blockGap":{"left":"5px"}}},"className":"is-style-hidden-mobile is-style-outline","layout":{"type":"flex"}} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-hidden-mobile is-style-outline">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.threads.net/","service":"threads"} /-->
		</ul>
		<!-- /wp:social-links -->
		<!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"typography":{"textTransform":"uppercase","fontSize":"12px","fontStyle":"normal","fontWeight":"400"},"layout":{"selfStretch":"fixed","flexSize":"300px"}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
