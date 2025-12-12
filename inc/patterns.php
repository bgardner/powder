<?php
/**
 * Define pattern categories for Powder.
 *
 * @package Powder
 */

add_action( 'init', function() {

	// Define pattern categories.
	$categories = [
		'call-to-action' => [
			'Call to Action',
			'A collection of call to action patterns for Powder.',
		],
		'content' => [
			'Content',
			'A collection of content patterns for Powder.',
		],
		'example' => [
			'Example',
			'A collection of example patterns for Powder.',
		],
		'footer' => [
			'Footer',
			'A collection of footer patterns for Powder.',
		],
		'gallery' => [
			'Gallery',
			'A collection of gallery patterns for Powder.',
		],
		'header' => [
			'Header',
			'A collection of header patterns for Powder.',
		],
		'hero' => [
			'Hero',
			'A collection of hero patterns for Powder.',
		],
		'pricing' => [
			'Pricing',
			'A collection of pricing patterns for Powder.',
		],
		'team' => [
			'Team',
			'A collection of team patterns for Powder.',
		],
		'testimonials' => [
			'Testimonials',
			'A collection of testimonial patterns for Powder.',
		],
	];

	// Register each category.
	foreach ( $categories as $slug => [ $label, $description ] ) {
		register_block_pattern_category(
			'powder-' . $slug,
			[
				'label'       => __( $label, 'powder' ),
				'description' => __( $description, 'powder' ),
			]
		);
	}

} );
