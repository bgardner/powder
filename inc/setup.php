<?php
/**
 * Theme setup and assets.
 *
 * @package Powder
 */

/**
 * Setup theme defaults and supports.
 */
function powder_setup() {
	add_editor_style( get_template_directory_uri() . '/style.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'powder_setup' );

/**
 * Enqueue frontend styles and scripts.
 */
function powder_enqueue_style_sheet() {
	wp_enqueue_style( 'powder', get_template_directory_uri() . '/style.css', [], wp_get_theme( 'powder' )->get( 'Version' ) );
	wp_enqueue_script( 'powder-header', get_template_directory_uri() . '/assets/js/scroll-header.js', [], null, true );
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_style_sheet' );
