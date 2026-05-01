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

function powder_settings_enqueue_assets( $hook ) {
	if ( 'appearance_page_powder' !== $hook ) {
		return;
	}

	wp_enqueue_style(
		'powder-settings',
		get_template_directory_uri() . '/assets/css/settings.css',
		[ 'wp-components' ],
		powder_version()
	);

	wp_enqueue_script(
		'powder-settings',
		get_template_directory_uri() . '/assets/js/settings.js',
		[ 'wp-api-fetch', 'wp-components', 'wp-element', 'wp-i18n' ],
		powder_version(),
		true
	);

	wp_localize_script(
		'powder-settings',
		'PowderSettings',
		[
			'categories' => array_map(
				function( $category ) {
					return [
						'label'       => isset( $category['label'] ) ? esc_html( $category['label'] ) : '',
						'description' => isset( $category['description'] ) ? esc_html( $category['description'] ) : '',
					];
				},
				powder_settings_get_pattern_categories()
			),
			'disabledPatternCategories' => powder_settings_get_disabled_pattern_categories(),
			'nonce'                     => wp_create_nonce( 'wp_rest' ),
			'restPath'                  => '/powder/v1/settings',
		]
	);
}
add_action( 'admin_enqueue_scripts', 'powder_settings_enqueue_assets' );
