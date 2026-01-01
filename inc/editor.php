<?php
/**
 * Register template part areas and block styles.
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
