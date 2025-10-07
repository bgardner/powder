<?php
/**
 * Theme updates.
 *
 * @package Powder
 */

/**
 * Check for theme updates.
 */
function powder_theme_updates( $transient ) {
	$update_url = 'https://powder.design/powder-updates.json';

	$response = wp_remote_get( $update_url );
	if ( is_wp_error( $response ) ) {
		return $transient;
	}

	$data = json_decode( wp_remote_retrieve_body( $response ) );
	if ( ! $data ) {
		return $transient;
	}

	$theme           = wp_get_theme( 'powder' );
	$current_version = $theme->get( 'Version' );

	if ( version_compare( $current_version, $data->version, '<' ) ) {
		$transient->response['powder'] = [
			'theme'       => 'powder',
			'new_version' => $data->version,
			'url'         => 'https://powder.design/changelog/',
			'package'     => $data->download_url,
		];
	}

	return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'powder_theme_updates' );
