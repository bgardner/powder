<?php
/**
 * Functions for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://powder.design/
 */

if ( ! function_exists( 'powder_setup' ) ) {

	/**
	 * Initialize theme defaults and register support for WordPress features.
	 */
	function powder_setup() {

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Disable core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Include theme settings page.
		require_once get_template_directory() . '/inc/theme-settings.php';

		// Remove core block patterns support.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'powder_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function powder_enqueue_styles_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'powder', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'powder' )->get( 'Version' ) );

	// Enqueue theme JavaScript.
	wp_enqueue_script( 'powder', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_styles_scripts' );

/**
 * Register block styles.
 */
function powder_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'powder' ),
		),
		'core/cover' => array(
			'gradient' => __( 'Gradient', 'powder' )
		),
		'core/group' => array(
			'shadow-faint' => __( 'Shadow (Faint)', 'powder' ),
			'shadow-light' => __( 'Shadow (Light)', 'powder' ),
			'shadow-solid' => __( 'Shadow (Solid)', 'powder' ),
		),
		'core/list' => array(
			'no-style' => __( 'No Style', 'powder' ),
		),
		'core/navigation-link' => array(
			'underline' => __( 'Underline', 'powder' )
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'powder' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'powder_register_block_styles' );

/**
 * Register block pattern categories.
 */
function powder_register_pattern_categories() {

	register_block_pattern_category(
		'powder-content',
		array(
			'label'       => __( 'Content', 'powder' ),
			'description' => __( 'A collection of content patterns for Powder.', 'powder' ),
		)
	);
	register_block_pattern_category(
		'powder-hero',
		array(
			'label'       => __( 'Hero', 'powder' ),
			'description' => __( 'A collection of hero patterns for Powder.', 'powder' ),
		)
	);
	register_block_pattern_category(
		'powder-pricing',
		array(
			'label'       => __( 'Pricing', 'powder' ),
			'description' => __( 'A collection of pricing patterns for Powder.', 'powder' ),
		)
	);
	register_block_pattern_category(
		'powder-template',
		array(
			'label'       => __( 'Templates', 'powder' ),
			'description' => __( 'A collection of template patterns for Powder.', 'powder' ),
		)
	);

}
add_action( 'init', 'powder_register_pattern_categories' );
