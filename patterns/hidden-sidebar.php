<?php
/**
 * Title: Default sidebar
 * Slug: powder/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","wideSize":"400px"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"About"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'About', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph -->
		<p>👋 <?php echo esc_html__( 'I’m Brian, a Chicago-based designer, WordPress expert, believer in simplicity, and creator of the', 'powder' ); ?> <a href="https://powder.design/" target="_blank">Powder</a> theme.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"Recent"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Recent', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"Search"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Search', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"<?php echo esc_html__( 'Enter keywords', 'powder' ); ?>...","buttonText":"<?php echo esc_html__( 'Search', 'powder' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
