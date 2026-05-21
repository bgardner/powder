<?php
/**
 * Handle theme updates.
 *
 * @package Powder
 */

function powder_theme_updates( $transient ) {
	$cache_key = 'powder_update_check';
	$data      = get_transient( $cache_key );

	if ( false === $data ) {
		$response = wp_remote_get( 'https://powder.design/powder-theme-updates.json' );

		if ( is_wp_error( $response ) ) {
			return $transient;
		}

		$data = json_decode( wp_remote_retrieve_body( $response ) );

		if ( ! $data ) {
			return $transient;
		}

		set_transient( $cache_key, $data, 12 * HOUR_IN_SECONDS );
	}

	if ( version_compare( powder_version(), $data->version, '<' ) ) {
		$transient->response['powder'] = array(
			'theme'       => 'powder',
			'new_version' => $data->version,
			'url'         => 'https://powder.design/changelog/',
			'package'     => $data->download_url,
		);
	}

	return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'powder_theme_updates' );

function powder_clear_update_cache() {
	delete_transient( 'powder_update_check' );
}
add_action( 'load-update-core.php', 'powder_clear_update_cache' );
