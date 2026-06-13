<?php
/**
 * Title: Header - site title, separator, navigation
 * Slug: powder/header-separator-black
 * Categories: powder-header
 * Block Types: core/template-part/header
 * Template Types: header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}}} /-->
			<!-- wp:separator {"backgroundColor":"white"} -->
			<hr class="wp-block-separator has-text-color has-black-color has-alpha-channel-opacity has-white-background-color has-background"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"overlay":"navigation-overlay","layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
