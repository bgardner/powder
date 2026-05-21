<?php
/**
 * Register pattern categories.
 *
 * @package Powder
 */

function powder_settings_get_pattern_categories() {
	return [
		'powder-call-to-action' => [
			'label'       => __( 'Call to Action', 'powder' ),
			'description' => __( 'Encourage your viewers or readers to take an immediate action.', 'powder' ),
		],
		'powder-content' => [
			'label'       => __( 'Content', 'powder' ),
			'description' => __( 'Present detailed information about products, services, and more.', 'powder' ),
		],
		'powder-footer' => [
			'label'       => __( 'Footer', 'powder' ),
			'description' => __( 'Connect with website visitors and display relevant information.', 'powder' ),
		],
		'powder-gallery' => [
			'label'       => __( 'Gallery', 'powder' ),
			'description' => __( 'Deliver stunning visuals with clarity and make sharing seamless.', 'powder' ),
		],
		'powder-header' => [
			'label'       => __( 'Header', 'powder' ),
			'description' => __( 'Simplify the browsing experience and establish brand presence.', 'powder' ),
		],
		'powder-hero' => [
			'label'       => __( 'Hero', 'powder' ),
			'description' => __( 'Showcase value propositions and core services front and center.', 'powder' ),
		],
		'powder-navigation' => [
			'label'       => __( 'Navigation', 'powder' ),
			'description' => __( 'An overlay to guide visitors with site title, links, social icons.', 'powder' ),
		],
		'powder-pricing' => [
			'label'       => __( 'Pricing', 'powder' ),
			'description' => __( 'Provide product details and prices for simple comparison.', 'powder' ),
		],
		'powder-team' => [
			'label'       => __( 'Team', 'powder' ),
			'description' => __( 'Present a list of members of your company or organization.', 'powder' ),
		],
		'powder-testimonials' => [
			'label'       => __( 'Testimonials', 'powder' ),
			'description' => __( 'Spotlight friendly words, customer reviews, and success stories.', 'powder' ),
		],
	];
}

function powder_settings_register_pattern_categories() {
	foreach ( powder_settings_get_pattern_categories() as $slug => $data ) {
		register_block_pattern_category(
			$slug,
			[
				'label'       => $data['label'],
				'description' => $data['description'],
			]
		);
	}
}
add_action( 'init', 'powder_settings_register_pattern_categories' );
