<?php
/**
 * Functions for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://powderwp.com/
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
 * Register block pattern category.
 */
function powder_register_pattern_category( $slug, $label, $description ) {
	register_block_pattern_category(
		'powder-' . $slug,
		array(
			'label'       => __( $label, 'powder' ),
			'description' => __( $description, 'powder' ),
		)
	);
}

/**
 * Register block pattern categories.
 */
function powder_register_pattern_categories() {
	$categories = array(
		'call-to-action' => array( __( 'Call to Action', 'powder' ), __( 'A collection of call to action patterns for Powder.', 'powder' ) ),
		'content'        => array( __( 'Content', 'powder' ), __( 'A collection of content patterns for Powder.', 'powder' ) ),
		'gallery'        => array( __( 'Gallery', 'powder' ), __( 'A collection of gallery patterns for Powder.', 'powder' ) ),
		'hero'           => array( __( 'Hero', 'powder' ), __( 'A collection of hero patterns for Powder.', 'powder' ) ),
		'layout'         => array( __( 'Layout', 'powder' ), __( 'A collection of layout patterns for Powder.', 'powder' ) ),
		'pricing'        => array( __( 'Pricing', 'powder' ), __( 'A collection of pricing patterns for Powder.', 'powder' ) ),
		'team'           => array( __( 'Team', 'powder' ), __( 'A collection of team patterns for Powder.', 'powder' ) ),
		'template'       => array( __( 'Templates', 'powder' ), __( 'A collection of template patterns for Powder.', 'powder' ) ),
		'testimonials'   => array( __( 'Testimonials', 'powder' ), __( 'A collection of testimonials patterns for Powder.', 'powder' ) ),
		'theme'          => array( __( 'Theme', 'powder' ), __( 'A collection of theme patterns for Powder.', 'powder' ) ),
	);

	foreach ( $categories as $slug => $details ) {
		powder_register_pattern_category( $slug, $details[0], $details[1] );
	}
}
add_action( 'init', 'powder_register_pattern_categories' );
