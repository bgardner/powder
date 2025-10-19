<?php
/**
 * Motion: Adds refined motion controls for Group blocks.
 *
 * @package Powder
 */

/**
 * Enqueue editor assets (sidebar controls).
 */
add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_script(
		'powder-motion-sidebar',
		get_template_directory_uri() . '/assets/js/motion-sidebar.js',
		array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-hooks', 'wp-compose' ),
		'1.0',
		true
	);
} );

/**
 * Register front-end assets (not enqueued yet).
 */
add_action( 'wp_enqueue_scripts', function() {
	if ( is_admin() ) return;

	$theme   = wp_get_theme( get_template() ); // Get current theme object.
	$version = $theme->get( 'Version' ); // Read version from style.css.

	wp_register_style( 'powder-motion', get_template_directory_uri() . '/assets/css/motion.css', array(), $version );
	wp_register_script( 'powder-motion', get_template_directory_uri() . '/assets/js/motion.js', array(), $version, true );
}, 5 );

/**
 * Detect Motion-enabled blocks during rendering.
 */
add_filter( 'render_block', function( $content, $block ) {
	static $needed = false;

	if (
		! empty( $block['blockName'] )
		&& in_array( $block['blockName'], array( 'core/group', 'core/columns', 'core/column' ), true )
		&& ! empty( $block['attrs']['powderMotion'] )
		&& (
			empty( $block['attrs']['powderMotionEffect'] )
			|| in_array( $block['attrs']['powderMotionEffect'], array( 'fadeIn', 'fadeInUp', 'fadeInDown' ), true )
		)
	) {
		$needed = true;
		$GLOBALS['powder_motion_needed'] = true;
	}

	return $content;
}, 10, 2 );

/**
 * Enqueue Motion assets in the footer if needed.
 */
add_action( 'wp_footer', function() {
	if ( ! empty( $GLOBALS['powder_motion_needed'] ) ) {
		wp_enqueue_style( 'powder-motion' );
		wp_enqueue_script( 'powder-motion' );
	}
}, 5 );
