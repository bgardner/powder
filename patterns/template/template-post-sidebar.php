<?php
/**
 * Title: Post with sidebar
 * Slug: powder/template-post-sidebar
 * Template Types: single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--80)">
	<!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
	<article class="wp-block-group">
		<!-- wp:group {"tagName":"header","align":"wide","className":"entry-header","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
		<header class="wp-block-group alignwide entry-header" style="padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"level":1,"fontSize":"xx-large"} /-->
				<!-- wp:post-date {"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
		</header>
		<!-- /wp:group -->
		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"padding":{"bottom":"var:preset|spacing|80"}},"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"top":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"right":{},"left":{}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
		<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:1px;margin-top:0;padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40)">
				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:post-content {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} /-->
					<!-- wp:pattern {"slug":"powder/post-terms"} /-->
					<!-- wp:pattern {"slug":"powder/comments"} /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)">
					<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"site-sidebar"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
