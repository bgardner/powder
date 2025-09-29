<?php
/**
 * Title: List of posts
 * Slug: powder/posts-contrast
 * Categories: powder-posts
 * Block Types: core/query
 */
?>
<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color">
	<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
			<article class="wp-block-group">
				<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"className":"entry-header","layout":{"type":"constrained"}} -->
				<header class="wp-block-group entry-header">
					<!-- wp:post-title {"isLink":true} /-->
					<!-- wp:pattern {"slug":"powder/post-meta"} /-->
				</header>
				<!-- /wp:group -->
				<!-- wp:post-excerpt {"moreText":"Read More"} /-->
			</article>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
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
