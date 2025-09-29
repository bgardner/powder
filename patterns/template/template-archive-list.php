<?php
/**
 * Title: Archive page with list of posts
 * Slug: powder/template-archive-list
 * Template Types: archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"10px"}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-title {"type":"archive","showPrefix":false} /-->
		<!-- wp:term-description /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"default"}} -->
				<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-css-opacity is-style-wide"/>
				<!-- /wp:separator -->
				<!-- wp:spacer {"height":"30px"} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
				<div class="wp-block-columns" style="margin-bottom:0px">
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:post-date {"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","className":"is-style-no-margin"} -->
					<div class="wp-block-column is-style-no-margin" style="flex-basis:50%">
						<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}},"fontSize":"medium"} /-->
						<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
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
