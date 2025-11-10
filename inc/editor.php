<?php
/**
 * Editor customizations.
 *
 * @package Powder
 */

/**
 * Register Sidebar template part.
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

/**
 * Register block styles.
 */
function powder_register_block_styles() {
	$block_styles = [
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'powder' ),
		),
		'core/heading' => array(
			'balanced' => __( 'Balanced', 'powder' ),
		),
		'core/list' => array(
			'no-style' => __( 'No Style', 'powder' ),
		),
		'core/paragraph' => array(
			'balanced' => __( 'Balanced', 'powder' ),
		),
		'core/post-content' => array(
			'indent' => __( 'Indent', 'powder' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'powder' ),
		),
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
