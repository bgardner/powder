<?php
/**
 * Enqueue theme stylesheet.
 */
function powder_enqueue_style_sheet() {
	wp_enqueue_style( 'powder', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'powder' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_style_sheet' );
