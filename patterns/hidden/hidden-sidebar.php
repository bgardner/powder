<?php
/**
 * Title: Default sidebar
 * Slug: powder/sidebar
 * Block Types: core/template-part/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"fontSize":"x-small","layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
<div class="wp-block-group has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'About Powder', 'powder' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Powder is the premier block theme for WordPress designers and developers, offering an extensive library of patterns.', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><a href="#"><?php echo esc_html__( 'Learn more about Powder →', 'powder' ); ?></a></p>
	<!-- /wp:paragraph -->
	
</div>
<!-- /wp:group -->
