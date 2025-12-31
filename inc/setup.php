<?php
/**
 * Configure theme assets and defaults.
 *
 * @package Powder
 */

function powder_setup() {

	add_editor_style( get_template_directory_uri() . '/style.css' );
	remove_theme_support( 'core-block-patterns' );

}
add_action( 'after_setup_theme', 'powder_setup' );

function powder_enqueue_style_sheet() {

	$theme   = wp_get_theme( 'powder' );
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'powder',
		get_template_directory_uri() . '/style.css',
		[],
		$version
	);

	wp_enqueue_script(
		'powder-header',
		get_template_directory_uri() . '/assets/js/header.js',
		[],
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_style_sheet' );
