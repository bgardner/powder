<?php
/**
 * Initialize theme styles and support.
 */
if ( ! function_exists( 'powder_setup' ) ) {
	function powder_setup() {

		// Enqueue editor style sheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'powder_setup' );
