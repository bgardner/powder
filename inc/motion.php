<?php
/**
 * Register block motion controls.
 *
 * @package Powder
 */

add_action( 'enqueue_block_editor_assets', function() {
	$theme_version = wp_get_theme( get_template() )->get( 'Version' );

	wp_enqueue_script(
		'powder-motion-sidebar',
		get_template_directory_uri() . '/assets/js/motion-sidebar.js',
		[ 'wp-blocks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-hooks', 'wp-compose' ],
		$theme_version,
		true
	);
} );

add_action( 'wp_enqueue_scripts', function() {
	$theme_version = wp_get_theme( get_template() )->get( 'Version' );

	wp_enqueue_style(
		'powder-motion',
		get_template_directory_uri() . '/assets/css/motion.css',
		[],
		$theme_version
	);

	wp_enqueue_script(
		'powder-motion',
		get_template_directory_uri() . '/assets/js/motion.js',
		[],
		$theme_version,
		true
	);
} );
