<?php
/**
 * Define pattern categories.
 *
 * @package Powder
 */

add_action( 'init', function() {

	$categories = [
		'footer' => [
			'label'       => __( 'Footer', 'powder' ),
			'description' => __( 'A collection of footer patterns for Powder.', 'powder' ),
		],
		'header' => [
			'label'       => __( 'Header', 'powder' ),
			'description' => __( 'A collection of header patterns for Powder.', 'powder' ),
		],
	];

	foreach ( $categories as $slug => $data ) {
		register_block_pattern_category(
			'powder-' . $slug,
			[
				'label'       => $data['label'],
				'description' => $data['description'],
			]
		);
	}

} );
