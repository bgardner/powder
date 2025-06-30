<?php
/**
 * Enqueue theme stylesheet.
 */
function powder_enqueue_style_sheet() {
	wp_enqueue_style( 'powder', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'powder' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_style_sheet' );

/**
 * Enqueue assets for Fade In Up block style.
 */
function powder_fadeinup_assets() {
	if (
		is_singular()
		&& has_block( 'core/group', get_post() )
		&& strpos( get_post()->post_content, 'is-style-fadeinup' ) !== false
	) {
		wp_enqueue_script( 'powder-fadeinup', get_template_directory_uri() . '/assets/js/fadeinup.js', [], '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'powder_fadeinup_assets' );
