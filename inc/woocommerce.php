<?php
/**
 * WooCommerce for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://briangardner.com/
 */
 
/**
 * Enqueue WooCommerce styles.
 */
function powder_enqueue_woocommerce_styles() {
	// Check if WooCommerce is active and on a WooCommerce page.
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if ( is_woocommerce() ) {
			// Get the Powder theme object.
			$powder_theme = wp_get_theme( 'powder' );

			// Get the version of the Powder theme.
			$powder_version = $powder_theme->get( 'Version' );

			// Enqueue the WooCommerce style sheet.
			wp_enqueue_style( 'powder-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), $powder_version );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'powder_enqueue_woocommerce_styles' );
