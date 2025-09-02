<?php
/**
 * Register block styles.
 */
function powder_register_block_styles() {
	$block_styles = array(
		'core/button' => array(
			'light' => __( 'Light', 'powder' ),
			'shadow' => __( 'Shadow', 'powder' ),
		),
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'powder' ),
		),
		'core/cover' => array(
			'gradient' => __( 'Gradient', 'powder' ),
		),
		'core/heading' => array(
			'balanced' => __( 'Balanced', 'powder' ),
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
