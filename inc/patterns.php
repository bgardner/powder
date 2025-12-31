<?php
/**
 * Define pattern categories.
 *
 * @package Powder
 */

add_action( 'init', function() {

	$categories = [
		'call-to-action' => [
			'label'       => __( 'Call to Action', 'powder' ),
			'description' => __( 'A collection of call to action patterns for Powder.', 'powder' ),
		],
		'content' => [
			'label'       => __( 'Content', 'powder' ),
			'description' => __( 'A collection of content patterns for Powder.', 'powder' ),
		],
		'example' => [
			'label'       => __( 'Example', 'powder' ),
			'description' => __( 'A collection of example patterns for Powder.', 'powder' ),
		],
		'footer' => [
			'label'       => __( 'Footer', 'powder' ),
			'description' => __( 'A collection of footer patterns for Powder.', 'powder' ),
		],
		'gallery' => [
			'label'       => __( 'Gallery', 'powder' ),
			'description' => __( 'A collection of gallery patterns for Powder.', 'powder' ),
		],
		'header' => [
			'label'       => __( 'Header', 'powder' ),
			'description' => __( 'A collection of header patterns for Powder.', 'powder' ),
		],
		'hero' => [
			'label'       => __( 'Hero', 'powder' ),
			'description' => __( 'A collection of hero patterns for Powder.', 'powder' ),
		],
		'pricing' => [
			'label'       => __( 'Pricing', 'powder' ),
			'description' => __( 'A collection of pricing patterns for Powder.', 'powder' ),
		],
		'team' => [
			'label'       => __( 'Team', 'powder' ),
			'description' => __( 'A collection of team patterns for Powder.', 'powder' ),
		],
		'testimonials' => [
			'label'       => __( 'Testimonials', 'powder' ),
			'description' => __( 'A collection of testimonial patterns for Powder.', 'powder' ),
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
