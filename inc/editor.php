<?php
/**
 * Register block styles.
 *
 * @package Powder
 */

function powder_register_block_styles() {
	$block_styles = [
		'core/columns' => [
			'column-reverse' => __( 'Reverse', 'powder' ),
		],
		'core/heading' => [
			'balanced' => __( 'Balanced', 'powder' ),
		],
		'core/list' => [
			'no-style' => __( 'No Style', 'powder' ),
		],
		'core/paragraph' => [
			'balanced' => __( 'Balanced', 'powder' ),
			'eyebrow' => __( 'Eyebrow', 'powder' ),
		],
		'core/post-title' => [
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
