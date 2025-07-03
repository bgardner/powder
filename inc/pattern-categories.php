<?php
/**
 * Register pattern category.
 */
function powder_register_pattern_category( $slug, $label, $description ) {
	register_block_pattern_category(
		'powder-' . $slug,
		array(
			'label'       => __( $label, 'powder' ),
			'description' => __( $description, 'powder' ),
		)
	);
}

/**
 * Register pattern categories.
 */
function powder_register_pattern_categories() {
	$categories = array(
		'about'          => array( __( 'About', 'powder' ), __( 'A collection of about patterns for Powder.', 'powder' ) ),
		'call-to-action' => array( __( 'Call to Action', 'powder' ), __( 'A collection of call to action patterns for Powder.', 'powder' ) ),
		'content'        => array( __( 'Content', 'powder' ), __( 'A collection of content patterns for Powder.', 'powder' ) ),
		'faq'            => array( __( 'FAQs', 'powder' ), __( 'A collection of FAQ patterns for Powder.', 'powder' ) ),
		'featured'       => array( __( 'Featured', 'powder' ), __( 'A collection of featured patterns for Powder.', 'powder' ) ),
		'footer'         => array( __( 'Footer', 'powder' ), __( 'A collection of footer patterns for Powder.', 'powder' ) ),
		'gallery'        => array( __( 'Gallery', 'powder' ), __( 'A collection of gallery patterns for Powder.', 'powder' ) ),
		'header'         => array( __( 'Header', 'powder' ), __( 'A collection of header patterns for Powder.', 'powder' ) ),
		'hero'           => array( __( 'Hero', 'powder' ), __( 'A collection of hero patterns for Powder.', 'powder' ) ),
		'posts'          => array( __( 'Posts', 'powder' ), __( 'A collection of posts patterns for Powder.', 'powder' ) ),
		'pricing'        => array( __( 'Pricing', 'powder' ), __( 'A collection of pricing patterns for Powder.', 'powder' ) ),
		'team'           => array( __( 'Team', 'powder' ), __( 'A collection of team patterns for Powder.', 'powder' ) ),
		'template'       => array( __( 'Template', 'powder' ), __( 'A collection of template patterns for Powder.', 'powder' ) ),
		'testimonials'   => array( __( 'Testimonials', 'powder' ), __( 'A collection of testimonials patterns for Powder.', 'powder' ) ),
	);

	foreach ( $categories as $slug => $details ) {
		powder_register_pattern_category( $slug, $details[0], $details[1] );
	}
}
add_action( 'init', 'powder_register_pattern_categories' );
