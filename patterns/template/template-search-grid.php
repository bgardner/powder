<?php
/**
 * Title: Search page with grid of posts
 * Slug: powder/template-search-grid
 * Template Types: search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"10px"}}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-title {"type":"search","textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
				<article class="wp-block-group">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"5px"}},"className":"entry-header","layout":{"type":"default"}} -->
						<header class="wp-block-group entry-header">
							<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
							<!-- wp:pattern {"slug":"powder/post-meta"} /-->
						</header>
						<!-- /wp:group -->
						<!-- wp:post-excerpt {"moreText":"Read More →","excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:group -->
				</article>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0">
				<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
