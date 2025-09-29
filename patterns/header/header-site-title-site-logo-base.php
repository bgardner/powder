<?php
/**
 * Title: Header - site title, site logo
 * Slug: powder/header-site-title-site-logo
 * Categories: powder-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fixed","flexSize":"200px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":30} /-->
			<!-- wp:group {"style":{"border":{"left":{"width":"1px","style":"dotted"}},"spacing":{"padding":{"left":"15px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="border-left-style:dotted;border-left-width:1px;padding-left:15px">
				<!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
