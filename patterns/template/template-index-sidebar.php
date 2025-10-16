<?php
/**
 * Title: Index page with list of posts, sidebar
 * Slug: powder/template-index-sidebar
 * Template Types: front-page, home, index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"top":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"right":{},"left":{}},"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40)">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40)">
					<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
					<div class="wp-block-query">
						<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
							<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"},"blockGap":"10px"},"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"}}},"layout":{"type":"default"}} -->
							<article class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--20)">
								<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
								<!-- wp:post-date {"fontSize":"x-small"} /-->
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
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->