<?php
/**
 * Title: Post with featured image
 * Slug: powder/template-post-featured
 * Categories: powder-template
 * Template Types: single
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","className":"entry-header","layout":{"type":"constrained","wideSize":"800px"}} -->
		<header class="wp-block-group entry-header has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"48px"}}} /-->
			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"5px"}},"fontSize":"small"} -->
			<div class="wp-block-group has-small-font-size">
				<!-- wp:post-date /-->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:post-author-name {"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		</header>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80px"}},"backgroundColor":"contrast","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull has-contrast-background-color has-background" style="min-height:80px"></div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"constrained","wideSize":"960px"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"className":"is-style-position-relative is-style-positive-zindex","style":{"spacing":{"margin":{"top":"-80px"},"blockGap":"0"},"shadow":"var:preset|shadow|light"},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-position-relative is-style-positive-zindex has-base-background-color has-background" style="margin-top:-80px;box-shadow:var(--wp--preset--shadow--light)">
				<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
					<!-- wp:pattern {"slug":"powder/post-terms"} /-->
					<!-- wp:pattern {"slug":"powder/comments"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80px"},"spacing":{"margin":{"top":"-80px"}}},"backgroundColor":"contrast","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull has-contrast-background-color has-background" style="min-height:80px;margin-top:-80px"></div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
