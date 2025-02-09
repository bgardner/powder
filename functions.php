<?php
/**
 * Functions for the Powder theme for WordPress.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://briangardner.com/powder/
 */

if ( ! function_exists( 'powder_setup' ) ) {

	/**
	 * Initialize theme defaults and add support for WordPress features.
	 */
	function powder_setup() {

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'powder_setup' );

/**
 * Enqueue theme stylesheet and script.
 */
function powder_enqueue_stylesheet_script() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'powder', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'powder' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_stylesheet_script' );

/**
 * Register block styles.
 */
function powder_register_block_styles() {

	$block_styles = array(
		'core/list' => array(
			'no-style' => __( 'No Style', 'powder' ),
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
 * Register pattern category.
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
 * Register pattern categories.
 */
function powder_register_pattern_categories() {
	$categories = array(
		'call-to-action' => array( __( 'Call to Action', 'powder' ), __( 'A collection of call to action patterns for Powder.', 'powder' ) ),
		'content'        => array( __( 'Content', 'powder' ), __( 'A collection of content patterns for Powder.', 'powder' ) ),
		'footer'         => array( __( 'Footers', 'powder' ), __( 'A collection of footer patterns for Powder.', 'powder' ) ),
		'gallery'        => array( __( 'Gallery', 'powder' ), __( 'A collection of gallery patterns for Powder.', 'powder' ) ),
		'header'         => array( __( 'Headers', 'powder' ), __( 'A collection of header patterns for Powder.', 'powder' ) ),
		'hero'           => array( __( 'Hero', 'powder' ), __( 'A collection of hero patterns for Powder.', 'powder' ) ),
		'posts'          => array( __( 'Posts', 'powder' ), __( 'A collection of posts patterns for Powder.', 'powder' ) ),
		'pricing'        => array( __( 'Pricing', 'powder' ), __( 'A collection of pricing patterns for Powder.', 'powder' ) ),
		'team'           => array( __( 'Team', 'powder' ), __( 'A collection of team patterns for Powder.', 'powder' ) ),
		'template'       => array( __( 'Template', 'powder' ), __( 'A collection of template patterns for Powder.', 'powder' ) ),
		'theme'          => array( __( 'Theme', 'powder' ), __( 'A collection of theme patterns for Powder.', 'powder' ) ),
		'testimonials'   => array( __( 'Testimonials', 'powder' ), __( 'A collection of testimonials patterns for Powder.', 'powder' ) ),
	);

	foreach ( $categories as $slug => $details ) {
		powder_register_pattern_category( $slug, $details[0], $details[1] );
	}
}
add_action( 'init', 'powder_register_pattern_categories' );

/**
 * Check for theme updates.
 */
function powder_theme_updates( $transient ) {
    $update_url = 'https://briangardner.com/powder-updates.json';

    $response = wp_remote_get( $update_url );
    if ( is_wp_error( $response ) ) {
        return $transient;
    }

    $data = json_decode( wp_remote_retrieve_body( $response ) );
    if ( ! $data ) {
        return $transient;
    }

    $theme = wp_get_theme( 'powder' );
    $current_version = $theme->get( 'Version' );

    if ( version_compare( $current_version, $data->version, '<' ) ) {
        $transient->response['powder'] = array(
            'theme'       => 'powder',
            'new_version' => $data->version,
            'url'         => 'https://briangardner.com/powder/changelog/',
            'package'     => $data->download_url,
        );
    }

    return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'powder_theme_updates' );
