<?php
/**
 * Settings for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://powderwp.com/
 */
 
/**
 * Add theme settings admin menu.
 */
function powder_theme_menu() {
	add_menu_page(
		'Theme Settings', // Page title
		'Powder', // Menu title
		'manage_options', // Capability
		'powder', // Menu slug
		'powder_theme_settings', // Function
		'dashicons-marker', // Admin icon
		55 // Position
	);
}
add_action( 'admin_menu', 'powder_theme_menu' );

/**
 * Display content for theme settings.
 */
function powder_theme_settings() {
	if ( !current_user_can( 'manage_options' )) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}

	$settings = array(
		'call_to_action' => 'Call to Action',
		'content'        => 'Content',
		'footers'        => 'Footers',
		'gallery'        => 'Gallery',
		'headers'        => 'Headers',
		'hero'           => 'Hero',
		'posts'          => 'Posts',
		'pricing'        => 'Pricing',
		'team'	         => 'Team',
		'templates'      => 'Templates',
		'testimonials'   => 'Testimonials'
	);

	?>
	<div class="wrap">
		<h1><?php echo esc_html__( 'Theme Settings', 'powder' ); ?></h1>
		<p><?php echo esc_html__( 'Enable these patterns to display in the Block Inserter and Site Editor.', 'powder' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'powder-theme-settings-group' ); ?>
			<?php do_settings_sections( 'powder-theme-settings-group' ); ?>
			<table class="form-table">
				<?php foreach ($settings as $key => $label): ?>
					<tr valign="top">
						<th scope="row"><?php echo esc_html__( $label, 'powder' ); ?></th>
						<td>
							<input type="checkbox" name="powder_setting_option_<?php echo $key; ?>" value="1" <?php checked(1, get_option( 'powder_setting_option_'.$key, '1' ), true); ?>/>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

/**
 * Register settings with sanitization.
 */
function powder_theme_admin_init() {
	$options = array(
		'call_to_action', 
		'content', 
		'footers', 
		'gallery', 
		'headers', 
		'hero', 
		'posts', 
		'pricing', 
		'team', 
		'templates', 
		'testimonials'
	);
	foreach ($options as $option) {
		register_setting('powder-theme-settings-group', 'powder_setting_option_' . $option, 'sanitize_powder_theme_option');
	}
}
add_action('admin_init', 'powder_theme_admin_init');

/**
 * Sanitize callback function.
 */
function sanitize_powder_theme_option($input) {
	return $input === '1' ? '1' : '0';
}

/**
 * Unregister patterns based on settings.
 */
function powder_unregister_patterns() {
	$patterns = [
		'powder_setting_option_call_to_action' => [
			'powder/call-to-action-boxed-dark',
			'powder/call-to-action-boxed',
			'powder/call-to-action-button-dark',
			'powder/call-to-action-button',
			'powder/call-to-action-centered-dark',
			'powder/call-to-action-centered',
			'powder/call-to-action-outline-dark',
			'powder/call-to-action-outline',
			'powder/call-to-action-promo-dark',
			'powder/call-to-action-promo',
			'powder/call-to-action-stacked-dark',
			'powder/call-to-action-stacked'
		],
		'powder_setting_option_content' => [
			'powder/content-about-split-dark',
			'powder/content-about-split',
			'powder/content-boxes-feature-dark',
			'powder/content-boxes-feature',
			'powder/content-boxes-outline-dark',
			'powder/content-boxes-outline',
			'powder/content-ebook-covers-dark',
			'powder/content-ebook-covers',
			'powder/content-faqs-columns-dark',
			'powder/content-faqs-columns',
			'powder/content-faqs-stacked-dark',
			'powder/content-faqs-stacked',
			'powder/content-feature-columns-dark',
			'powder/content-feature-columns',
			'powder/content-links-dark',
			'powder/content-links',
			'powder/content-logos-dark',
			'powder/content-logos',
			'powder/content-social-numbers-dark',
			'powder/content-social-numbers'
		],
		'powder_setting_option_footers' => [
			'powder/footer-dark',
			'powder/footer-featured-dark',
			'powder/footer-featured',
			'powder/footer-mega-dark',
			'powder/footer-mega',
			'powder/footer-multi-column-dark',
			'powder/footer-multi-column',
			'powder/footer-social-dark',
			'powder/footer-social',
			'powder/footer-split-dark',
			'powder/footer-split',
			'powder/footer-stacked-dark',
			'powder/footer-stacked'
		],
		'powder_setting_option_gallery' => [
			'powder/gallery-grid-multi-dark',
			'powder/gallery-grid-multi',
			'powder/gallery-grid-square-dark',
			'powder/gallery-grid-square',
			'powder/gallery-row-dark',
			'powder/gallery-row',
			'powder/gallery-text-images-dark',
			'powder/gallery-text-images'
		],
		'powder_setting_option_headers' => [
			'powder/header-dark',
			'powder/header-logo-button-dark',
			'powder/header-logo-button',
			'powder/header-logo-social-dark',
			'powder/header-logo-social',
			'powder/header-site-logo-dark',
			'powder/header-site-logo',
			'powder/header-title-separator-dark',
			'powder/header-title-separator'
		],
		'powder_setting_option_hero' => [
			'powder/hero-columns-image-text-dark',
			'powder/hero-columns-image-text',
			'powder/hero-columns-text-image-dark',
			'powder/hero-columns-text-image',
			'powder/hero-cover-gradient-dark',
			'powder/hero-cover-gradient',
			'powder/hero-cover-stack-dark',
			'powder/hero-cover-stack',
			'powder/hero-image-text-buttons-dark',
			'powder/hero-image-text-buttons',
			'powder/hero-stacked-text-image-dark',
			'powder/hero-stacked-text-image',
			'powder/hero-text-button-dark',
			'powder/hero-text-button'
		],
		'powder_setting_option_posts' => [
			'powder/posts-dark',
			'powder/posts-grid-dark',
			'powder/posts-grid'
		],
		'powder_setting_option_pricing' => [
			'powder/pricing-2-columns-dark',
			'powder/pricing-2-columns',
			'powder/pricing-3-columns-dark',
			'powder/pricing-3-columns'
		],
		'powder_setting_option_team' => [
			'powder/team-columns-dark',
			'powder/team-columns',
			'powder/team-single-image-text-dark',
			'powder/team-single-image-text',
			'powder/team-single-text-image-dark',
			'powder/team-single-text-image'
		],
		'powder_setting_option_templates' => [
			'powder/template-page-box-shadow',
			'powder/template-page-gradient-cover',
			'powder/template-single-box-shadow',
			'powder/template-single-gradient-cover',
		],
		'powder_setting_option_testimonials' => [
			'powder/testimonials-bold-dark',
			'powder/testimonials-bold',
			'powder/testimonials-columns-dark',
			'powder/testimonials-columns',
			'powder/testimonials-grid-dark',
			'powder/testimonials-grid',
			'powder/testimonials-single-dark',
			'powder/testimonials-single'
		]
	];

	foreach ($patterns as $option => $pattern_ids) {
		if (get_option($option, '1') !== '1') {
			foreach ($pattern_ids as $pattern_id) {
				unregister_block_pattern($pattern_id);
			}
		}
	}
}
add_action('init', 'powder_unregister_patterns');
