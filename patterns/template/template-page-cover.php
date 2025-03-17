<?php
/**
 * Title: Page with cover image
 * Slug: powder/template-page-cover
 * Categories: powder-template
 * Template Types: page
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
	<article class="wp-block-group">
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":400,"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover" style="margin-top:0;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
		<!-- /wp:cover -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
		<div class="wp-block-group" style="margin-top:0">
			<!-- wp:group {"className":"is-style-position-relative is-style-positive-zindex","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"-200px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-position-relative is-style-positive-zindex has-base-background-color has-background" style="margin-top:-200px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":""}} -->
				<header class="wp-block-group entry-header" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"xx-large"} /-->
					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
					<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40)"/>
					<!-- /wp:separator -->
				</header>
				<!-- /wp:group -->
				<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
