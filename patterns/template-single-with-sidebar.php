<?php
/**
 * Title: Post with sidebar
 * Slug: powder/template-single-with-sidebar
 * Categories: powder-template
 * Template Types: page
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"tagName":"main","layout":{"type":"constrained","justifyContent":"left"}} -->
			<main class="wp-block-group">
				<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
				<article class="wp-block-group">
					<!-- wp:group {"tagName":"header","className":"entry-header","layout":{"type":"default"}} -->
					<header class="wp-block-group entry-header">
						<!-- wp:post-title {"level":1} /-->
						<!-- wp:pattern {"slug":"powder/post-meta"} /-->
					</header>
					<!-- /wp:group -->
					<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
					<!-- wp:pattern {"slug":"powder/post-terms"} /-->
					<!-- wp:pattern {"slug":"powder/comments"} /-->
				</article>
				<!-- /wp:group -->
			</main>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"400px"} -->
		<div class="wp-block-column" style="flex-basis:400px">
			<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"site-sidebar"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
