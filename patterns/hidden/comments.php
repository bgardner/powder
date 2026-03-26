<?php
/**
 * Title: Comments
 * Slug: powder/comments
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"entry-comments","layout":{"type":"constrained"}} -->
<section class="wp-block-group entry-comments" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
	<div class="wp-block-comments wp-block-comments-query-loop">
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:heading -->
			<h2><?php echo esc_html__( 'Comments', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:comments-title {"level":3} /-->
			<!-- wp:comment-template -->
			<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<article class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<header class="wp-block-group">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"fontSize":"x-small","layout":{"type":"default"}} -->
					<div class="wp-block-group has-x-small-font-size" style="line-height:1.5">
						<!-- wp:comment-author-name /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-date /-->
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</header>
				<!-- /wp:group -->
				<!-- wp:comment-content /-->
				<!-- wp:comment-reply-link /-->
			</article>
			<!-- /wp:group -->
			<!-- /wp:comment-template -->
		</div>
		<!-- /wp:group -->
		<!-- wp:comments-pagination -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->
		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</section>
<!-- /wp:group -->
