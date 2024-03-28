<?php
/**
 * Title: Team section with four columns
 * Slug: powder/team-four-columns
 * Categories: team
 */
?>
<!-- wp:group {"metadata":{"name":"Team Members"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"max-36"} -->
	<h1 class="wp-block-heading alignwide has-text-align-center has-max-36-font-size">Team Members</h1>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Jennifer Kayne', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Executive Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Anthony Hawk', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Operations Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Kya Strickland', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Marketing Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Noah Stone', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Financial Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Thomas Everett', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Technology Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Autumn Cole', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Product Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Zach Marley', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Security Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="line-height:1.25"><?php echo esc_html__( 'Kate Reeser', 'powder' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size" style="margin-top:0"><?php echo esc_html__( 'Chief Brand Officer', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
