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
		[ 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-hooks', 'wp-compose' ],
		$theme_version,
		true
	);
} );

add_action( 'wp_enqueue_scripts', function() {

	$theme   = wp_get_theme( get_template() );
	$version = $theme->get( 'Version' );

	wp_register_style(
		'powder-motion',
		get_template_directory_uri() . '/assets/css/motion.css',
		[],
		$version
	);

	wp_register_script(
		'powder-motion',
		get_template_directory_uri() . '/assets/js/motion.js',
		[],
		$version,
		true
	);

} );

add_filter( 'render_block', function( $content, $block ) {

	static $needed = false;

	if (
		! empty( $block['blockName'] )
		&& in_array(
			$block['blockName'],
			[ 'core/group', 'core/columns', 'core/column' ],
			true
		)
		&& ! empty( $block['attrs']['powderMotion'] )
		&& (
			empty( $block['attrs']['powderMotionEffect'] )
			|| in_array(
				$block['attrs']['powderMotionEffect'],
				[ 'fadeIn', 'fadeInUp', 'fadeInDown' ],
				true
			)
		)
	) {
		$needed = true;
		$GLOBALS['powder_motion_needed'] = true;
	}

	return $content;
}, 10, 2 );

add_action( 'wp_footer', function() {

	if ( ! empty( $GLOBALS['powder_motion_needed'] ) ) {
		wp_enqueue_style( 'powder-motion' );
		wp_enqueue_script( 'powder-motion' );
	}
}, 5 );
