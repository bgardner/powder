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

 	// Enqueue WooCommerce style sheet if plugin is active and on a WooCommerce page.
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if ( is_woocommerce() ) {
			wp_enqueue_style( 'powder-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css' );
		}
	}

}
add_action( 'wp_enqueue_scripts', 'powder_enqueue_woocommerce_styles' );
