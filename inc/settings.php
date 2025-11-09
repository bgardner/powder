<?php
/**
 * Add theme settings page and handle Powder pattern logic.
 *
 * @package Powder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option definitions.
 */
$powder_color_options = [
	'base'     => 'Base',
	'contrast' => 'Contrast',
];

$powder_category_options = [
	'call_to_action' => 'Call to Action',
	'content'        => 'Content',
	'faq'            => 'FAQs',
	'footer'         => 'Footer',
	'gallery'        => 'Gallery',
	'header'         => 'Header',
	'hero'           => 'Hero',
	'pricing'        => 'Pricing',
	'team'           => 'Team',
	'testimonials'   => 'Testimonials',
];

$powder_all_options = array_merge(
	array_keys( $powder_color_options ),
	array_keys( $powder_category_options )
);

/**
 * Add Theme Settings page under Appearance > Powder.
 */
add_action( 'admin_menu', function() {
	add_submenu_page(
		'themes.php',
		'Powder Settings',
		'Powder',
		'manage_options',
		'powder',
		'powder_theme_settings'
	);
});

/**
 * Display the Theme Settings page.
 */
function powder_theme_settings() {
	global $powder_color_options, $powder_category_options;

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'powder' ) );
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Theme Settings', 'powder' ); ?></h1>
		<p>
			<?php
			echo esc_html__( 'Enable these patterns ', 'powder' );
			echo '<strong>' . esc_html__( 'by color', 'powder' ) . '</strong> ';
			echo esc_html__( 'to display in the Block Inserter and Site Editor.', 'powder' );
			?>
		</p>
		<form method="post" action="options.php">
			<?php
			settings_fields( 'powder-theme-settings-group' );
			do_settings_sections( 'powder-theme-settings-group' );
			?>

			<!-- COLOR OPTIONS -->
			<div style="max-width:880px; width:100%;">
				<table class="form-table" style="width:880px; min-width:880px;">
					<tr>
						<?php
						$color_keys = array_keys( $powder_color_options );
						$color_per_row = 4;
						while ( count( $color_keys ) % $color_per_row !== 0 ) {
							$color_keys[] = null;
						}
						foreach ( $color_keys as $i => $key ) {
							if ( $i > 0 && $i % $color_per_row === 0 ) {
								echo '</tr><tr>';
							}
							echo '<td style="width:220px; vertical-align:middle;">';
							if ( $key ) {
								printf(
									'<label style="font-weight:normal;"><input type="checkbox" name="%1$s" value="1" %2$s style="margin-right:6px;" /> %3$s</label>',
									esc_attr( 'powder_setting_option_' . $key ),
									checked( 1, get_option( 'powder_setting_option_' . $key, '1' ), false ),
									esc_html( $powder_color_options[ $key ] )
								);
							}
							echo '</td>';
						}
						?>
					</tr>
				</table>
			</div>
			
			<hr style="max-width:880px; margin:16px 0 32px 0; border:none; border-top:1px solid #ccd0d4;">
			<p style="max-width:880px;">
				<?php
				echo esc_html__( 'Enable these patterns ', 'powder' );
				echo '<strong>' . esc_html__( 'by category', 'powder' ) . '</strong> ';
				echo esc_html__( 'to display in the Block Inserter and Site Editor.', 'powder' );
				?>
			</p>
			
			<!-- CATEGORY OPTIONS -->
			<div style="max-width:880px; width:100%;">
				<table class="form-table" style="width:880px; min-width:880px;">
					<?php
					$category_keys = array_keys( $powder_category_options );
					$category_per_row = 4;
					while ( count( $category_keys ) % $category_per_row !== 0 ) {
						$category_keys[] = null;
					}
					for ( $i = 0; $i < count( $category_keys ); $i++ ) {
						if ( $i % $category_per_row === 0 ) {
							echo '<tr valign="top">';
						}
						echo '<td style="width:220px; vertical-align:middle;">';
						$key = $category_keys[ $i ];
						if ( $key ) {
							printf(
								'<label style="font-weight:normal;"><input type="checkbox" name="%1$s" value="1" %2$s style="margin-right:6px;" /> %3$s</label>',
								esc_attr( 'powder_setting_option_' . $key ),
								checked( 1, get_option( 'powder_setting_option_' . $key, '1' ), false ),
								esc_html( $powder_category_options[ $key ] )
							);
						}
						echo '</td>';
						if ( ( $i + 1 ) % $category_per_row === 0 ) {
							echo '</tr>';
						}
					}
					?>
				</table>
			</div>

			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

/**
 * Register settings and sanitize.
 */
add_action( 'admin_init', function() use ( $powder_all_options ) {
	foreach ( $powder_all_options as $option ) {
		register_setting(
			'powder-theme-settings-group',
			'powder_setting_option_' . $option,
			'sanitize_powder_theme_option'
		);
	}
});

function sanitize_powder_theme_option( $input ) {
	return $input === '1' ? '1' : '0';
}

/**
 * Unregister patterns based on settings.
 */
add_action( 'init', function() {
	$file = get_template_directory() . '/inc/patterns.php';

	if ( ! file_exists( $file ) ) {
		return;
	}

	$patterns = include $file;

	if ( ! is_array( $patterns ) ) {
		return;
	}

	foreach ( $patterns as $option => $pattern_ids ) {
		if ( get_option( $option, '1' ) !== '1' ) {
			foreach ( $pattern_ids as $pattern_id ) {
				if ( function_exists( 'unregister_block_pattern' ) ) {
					unregister_block_pattern( $pattern_id );
				}
			}
		}
	}
});
