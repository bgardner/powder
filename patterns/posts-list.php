<?php
/**
 * Title: List of posts, 3 columns
 * Slug: powder/posts-list
 * Categories: posts
 * Block Types: core/query
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:30px;padding-left:30px">
	<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":"10"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--small)"/>
		<!-- /wp:separator -->
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
			<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
			<article class="wp-block-group">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:post-date {"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
						<!-- wp:post-excerpt {"moreText":"","excerptLength":30,"fontSize":"small"} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:post-terms {"term":"post_tag","textAlign":"right","fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
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
