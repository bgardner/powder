<?php
/**
 * Title: Post with boxed content
 * Slug: powder/template-post-boxed
 * Template Types: single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group">
		<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":400,"gradient":"fade-down","sizeSlug":"full","className":"is-style-gradient","style":{"spacing":{"padding":{"bottom":"140px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"default"}} -->
		<div class="wp-block-cover is-style-gradient has-base-color has-text-color has-link-color" style="padding-bottom:140px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-fade-down-gradient-background"></span><div class="wp-block-cover__inner-container">
			<!-- wp:group {"tagName":"header","align":"wide","className":"entry-header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
			<header class="wp-block-group alignwide entry-header">
				<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /-->
				<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"5px"}},"fontSize":"x-small"} -->
				<div class="wp-block-group has-x-small-font-size">
					<!-- wp:post-date /-->
					<!-- wp:paragraph -->
					<p>·</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-author-name {"isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</header>
			<!-- /wp:group -->
		</div></div>
		<!-- /wp:cover -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained","wideSize":"1080px","contentSize":"960px"}} -->
		<div class="wp-block-group" style="margin-top:0px">
			<!-- wp:group {"className":"is-style-position-relative is-style-positive-zindex","style":{"spacing":{"margin":{"top":"-100px"},"blockGap":"0"},"shadow":"var:preset|shadow|light"},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-position-relative is-style-positive-zindex has-base-background-color has-background" style="margin-top:-100px;box-shadow:var(--wp--preset--shadow--light)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
					<!-- wp:pattern {"slug":"powder/post-terms"} /-->
					<!-- wp:pattern {"slug":"powder/comments"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100px"},"spacing":{"margin":{"top":"-100px"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull has-black-background-color has-background" style="min-height:100px;margin-top:-100px"></div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
