<?php
/**
 * Add theme settings.
 *
 * @package Powder
 */

function powder_settings_get_disabled_pattern_categories() {
	$disabled = get_option( 'powder_disabled_pattern_categories', [] );

	if ( ! is_array( $disabled ) ) {
		return [];
	}

	return array_values(
		array_intersect(
			array_map( 'sanitize_key', $disabled ),
			array_keys( powder_settings_get_pattern_categories() )
		)
	);
}

function powder_settings_get_locked_patterns() {
	return [
		'powder/header',
		'powder/footer',
		'powder/navigation',
	];
}

function powder_settings_unregister_disabled_patterns() {
	$disabled = powder_settings_get_disabled_pattern_categories();

	if ( empty( $disabled ) ) {
		return;
	}

	$registry = WP_Block_Patterns_Registry::get_instance();

	foreach ( $registry->get_all_registered() as $pattern ) {
		if ( empty( $pattern['name'] ) || empty( $pattern['categories'] ) || ! is_array( $pattern['categories'] ) ) {
			continue;
		}

		if ( in_array( $pattern['name'], powder_settings_get_locked_patterns(), true ) ) {
			continue;
		}

		if ( array_intersect( $pattern['categories'], $disabled ) ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}
add_action( 'init', 'powder_settings_unregister_disabled_patterns', 100 );

function powder_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have permission to access this page.', 'powder' ) );
	}

	?>
	<div class="wrap powder-settings">
		<div class="powder-settings-panel">
			<h1><?php esc_html_e( 'Powder Settings', 'powder' ); ?></h1>
			<div class="powder-settings-body">
				<div id="powder-settings-app"></div>
			</div>
		</div>
	</div>
	<?php
}

function powder_settings_register_page() {
	add_theme_page(
		__( 'Powder', 'powder' ),
		__( 'Powder', 'powder' ),
		'manage_options',
		'powder',
		'powder_settings_page'
	);
}
add_action( 'admin_menu', 'powder_settings_register_page' );

function powder_settings_register_rest_route() {
	register_rest_route(
		'powder/v1',
		'/settings',
		[
			'methods'             => WP_REST_Server::READABLE,
			'callback'            => function() {
				return [
					'categories'                 => powder_settings_get_pattern_categories(),
					'disabledPatternCategories' => powder_settings_get_disabled_pattern_categories(),
				];
			},
			'permission_callback' => function() {
				return current_user_can( 'manage_options' );
			},
		]
	);

	register_rest_route(
		'powder/v1',
		'/settings',
		[
			'methods'             => WP_REST_Server::EDITABLE,
			'callback'            => function( $request ) {
				$disabled = $request->get_param( 'disabledPatternCategories' );

				if ( ! is_array( $disabled ) ) {
					$disabled = [];
				}

				$disabled = array_values(
					array_unique(
						array_intersect(
							array_map( 'sanitize_key', $disabled ),
							array_keys( powder_settings_get_pattern_categories() )
						)
					)
				);

				update_option( 'powder_disabled_pattern_categories', $disabled, false );

				return [
					'success'                   => true,
					'disabledPatternCategories' => $disabled,
				];
			},
			'permission_callback' => function( $request ) {
				$nonce = $request->get_header( 'X-WP-Nonce' );

				return current_user_can( 'manage_options' ) && wp_verify_nonce( $nonce, 'wp_rest' );
			},
			'args'                => [
				'disabledPatternCategories' => [
					'type'    => 'array',
					'items'   => [
						'type' => 'string',
					],
					'default' => [],
				],
			],
		]
	);
}
add_action( 'rest_api_init', 'powder_settings_register_rest_route' );
