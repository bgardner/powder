<?php
/**
 * Register template parts and block styles.
 *
 * @package Powder
 */

function powder_template_parts( array $areas ) {
	$areas[] = [
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'powder' ),
		'description' => __( 'The Sidebar template defines a page area that typically contains secondary content, navigation, or social icons.', 'powder' ),
		'icon'        => 'sidebar',
	];

	return $areas;
}
add_filter( 'default_wp_template_part_areas', 'powder_template_parts' );

function powder_register_block_styles() {
	$block_styles = [
		'core/columns' => [
			'column-reverse' => __( 'Reverse', 'powder' ),
		],
		'core/group' => [
			'fadeinup' => __( 'Fade In Up', 'powder' ),
		],
		'core/heading' => [
			'balanced' => __( 'Balanced', 'powder' ),
		],
		'core/image' => [
			'inner-border' => __( 'Inner Border', 'powder' ),
		],
		'core/list' => [
			'no-style' => __( 'No Style', 'powder' ),
		],
		'core/paragraph' => [
			'balanced' => __( 'Balanced', 'powder' ),
		],
		'core/separator' => [
			'extended' => __( 'Extended', 'powder' ),
		],
		'core/social-links' => [
			'outline' => __( 'Outline', 'powder' ),
		],
	];

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				[
					'name'  => $style_name,
					'label' => $style_label,
				]
			);
		}
	}
}
add_action( 'init', 'powder_register_block_styles' );

function powder_enqueue_motion_assets() {

	if ( ! is_singular() ) {
		return;
	}

	$content = get_post()->post_content ?? '';

	if (
		strpos( $content, 'is-style-fadeinup' ) === false
	) {
		return;
	}

	$version = wp_get_theme( 'powder' )->get( 'Version' );

	wp_enqueue_script(
		'powder-motion',
		get_template_directory_uri() . '/assets/js/motion.js',
		array(),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_motion_assets', 20 );
