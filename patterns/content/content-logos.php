<?php
/**
 * Title: Logo section with images
 * Slug: powder/content-logos
 * Categories: powder-content
 */
?>
<!-- wp:group {"metadata":{"name":"Logos"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"className":"wp-block-heading is-style-eyebrow","style":{"typography":{"textAlign":"center"}},"fontSize":"x-small"} -->
	<p class="has-text-align-center wp-block-heading is-style-eyebrow has-x-small-font-size"><?php echo esc_html__( 'Our Clients', 'powder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:image {"width":"140px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-logo-dark.svg'; ?>" alt="Sample logo" style="object-fit:cover;width:140px;height:30px"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":"140px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-logo-dark.svg'; ?>" alt="Sample logo" style="object-fit:cover;width:140px;height:30px"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":"140px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-logo-dark.svg'; ?>" alt="Sample logo" style="object-fit:cover;width:140px;height:30px"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":"140px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-logo-dark.svg'; ?>" alt="Sample logo" style="object-fit:cover;width:140px;height:30px"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":"140px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-logo-dark.svg'; ?>" alt="Sample logo" style="object-fit:cover;width:140px;height:30px"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->