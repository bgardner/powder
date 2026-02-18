<?php
/**
 * Configure theme assets and defaults.
 *
 * @package Powder
 */

function powder_version() {
	static $version;

	if ( ! $version ) {
		$version = wp_get_theme( 'powder' )->get( 'Version' );
	}

	return $version;
}

function powder_setup() {
	add_editor_style( get_template_directory_uri() . '/style.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'powder_setup' );

function powder_enqueue_assets() {
	wp_enqueue_style(
		'powder',
		get_template_directory_uri() . '/style.css',
		[],
		powder_version()
	);

	wp_enqueue_script(
		'powder-scroll',
		get_template_directory_uri() . '/assets/js/scroll.js',
		[],
		powder_version(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_assets' );
