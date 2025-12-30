<?php
/**
 * Configure theme assets and defaults.
 *
 * @package Powder
 */

/**
 * Define theme setup behavior.
 */
function powder_setup() {

	// Load editor styles.
	add_editor_style( get_template_directory_uri() . '/style.css' );

	// Disable core patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'powder_setup' );

/**
 * Enqueue frontend assets.
 */
function powder_enqueue_style_sheet() {

	// Resolve theme version.
	$theme   = wp_get_theme( 'powder' );
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'powder',
		get_template_directory_uri() . '/style.css',
		[],
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_style_sheet' );
