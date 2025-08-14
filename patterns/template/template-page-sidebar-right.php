<?php
/**
 * Title: Page with sidebar (right)
 * Slug: powder/template-page-sidebar-right
 * Categories: powder-template
 * Template Types: page
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<article class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)">
				<!-- wp:post-title {"level":1} /-->
				<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
			</article>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"400px"} -->
		<div class="wp-block-column" style="flex-basis:400px">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)">
				<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"site-sidebar"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
