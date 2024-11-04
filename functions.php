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
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'powder' ),
		),
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
 * Check for theme updates.
 */
function powder_theme_updates( $transient ) {
    $update_url = 'https://powderwp.com/updates.json';

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
            'url'         => 'https://powderwp.com/changelog/',
            'package'     => $data->download_url,
        );
    }

    return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'powder_theme_updates' );
