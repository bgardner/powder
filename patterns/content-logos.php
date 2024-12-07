<?php
/**
 * Title: Logo section with images
 * Slug: powder/content-logos
 * Categories: powder-content
 */
?>
<!-- wp:group {"metadata":{"name":"Logos"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading","fontSize":"small"} -->
	<h2 class="wp-block-heading has-text-align-center has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);text-transform:uppercase"><?php echo esc_html__( 'Our Clients', 'powder' ); ?></h2>
	<!-- /wp:heading -->
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