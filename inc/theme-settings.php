<?php
/**
 * Add theme settings page.
 */

// Define all options at the top (single source of truth).
$powder_color_options = array(
	'base'       => 'Base',
	'contrast'   => 'Contrast',
	'primary'    => 'Primary',
	'quaternary' => 'Quaternary'
);

$powder_category_options = array(
	'about'          => 'About',
	'call_to_action' => 'Call to Action',
	'content'        => 'Content',
	'faq'            => 'FAQs',
	'featured'       => 'Featured',
	'footer'         => 'Footer',
	'gallery'        => 'Gallery',
	'header'         => 'Header',
	'hero'           => 'Hero',
	'posts'          => 'Posts',
	'pricing'        => 'Pricing',
	'team'           => 'Team',
	'template'       => 'Template',
	'testimonials'   => 'Testimonials'
);

// Option keys (for settings registration)
$powder_all_options = array_merge(array_keys($powder_color_options), array_keys($powder_category_options));

/**
 * Add theme settings as a submenu under Appearance > Powder.
 */
add_action( 'admin_menu', function() {
	add_submenu_page(
		'themes.php',
		'Powder Settings',
		'Powder',
		'manage_options',
		'powder',
		'powder_theme_settings',
		150
	);
});

/**
 * Display content for theme settings.
 */
function powder_theme_settings() {
	global $powder_color_options, $powder_category_options;

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}
	?>
	<div class="wrap">
		<h1><?php echo esc_html__( 'Theme Settings', 'powder' ); ?></h1>
		<p>
			<?php echo esc_html__( 'Enable these patterns ', 'powder' ); ?>
			<strong><?php echo esc_html__( 'by color', 'powder' ); ?></strong>
			<?php echo esc_html__( ' to display in the Block Inserter and Site Editor.', 'powder' ); ?>
		</p>
		<form method="post" action="options.php">
			<?php settings_fields( 'powder-theme-settings-group' ); ?>
			<?php do_settings_sections( 'powder-theme-settings-group' ); ?>

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
							if ( $i > 0 && $i % $color_per_row === 0 ) echo '</tr><tr>';
							echo '<td style="width:220px; vertical-align:middle;">';
							if ( $key ) {
								echo '<label style="font-weight:normal;">';
								echo '<input type="checkbox" name="powder_setting_option_' . esc_attr( $key ) . '" value="1" ' . checked( 1, get_option( 'powder_setting_option_' . $key, '1' ), false ) . ' style="margin-right:6px;"/>';
								echo esc_html__( $powder_color_options[ $key ], 'powder' );
								echo '</label>';
							}
							echo '</td>';
						}
						?>
					</tr>
				</table>
			</div>

			<hr style="max-width:880px; margin:16px 0 32px 0; border: none; border-top: 1px solid #ccd0d4;">
			<p style="max-width:880px;">
				<?php echo esc_html__( 'Enable these patterns ', 'powder' ); ?>
				<strong><?php echo esc_html__( 'by category', 'powder' ); ?></strong>
				<?php echo esc_html__( ' to display in the Block Inserter and Site Editor.', 'powder' ); ?>
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
						if ( $i % $category_per_row === 0 ) echo '<tr valign="top">';
						echo '<td style="width:220px; vertical-align:middle;">';
						$key = $category_keys[ $i ];
						if ( $key ) {
							echo '<label style="font-weight:normal;">';
							echo '<input type="checkbox" name="powder_setting_option_' . esc_attr( $key ) . '" value="1" ' . checked( 1, get_option( 'powder_setting_option_' . $key, '1' ), false ) . ' style="margin-right:6px;"/>';
							echo esc_html__( $powder_category_options[ $key ], 'powder' );
							echo '</label>';
						}
						echo '</td>';
						if ( ( $i + 1 ) % $category_per_row === 0 ) echo '</tr>';
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
 * Register settings with sanitization.
 */
add_action( 'admin_init', function() use ( $powder_all_options ) {
	foreach ( $powder_all_options as $option ) {
		register_setting( 'powder-theme-settings-group', 'powder_setting_option_' . $option, 'sanitize_powder_theme_option' );
	}
});

/**
 * Sanitize callback function.
 */
function sanitize_powder_theme_option( $input ) {
	return $input === '1' ? '1' : '0';
}

/**
 * Unregister patterns based on settings.
 */
add_action( 'init', function() {
	$patterns = [
		'powder_setting_option_base' => [
			'powder/about-half',
			'powder/about-split',
			'powder/call-to-action-button',
			'powder/call-to-action-centered',
			'powder/call-to-action-outline',
			'powder/call-to-action-promo',
			'powder/call-to-action-stacked',
			'powder/content-links',
			'powder/content-logos',
			'powder/content-social-numbers',
			'powder/faq-columns',
			'powder/faq-stacked',
			'powder/featured-columns',
			'powder/featured-content-boxes',
			'powder/featured-intro-columns',
			'powder/footer-mega',
			'powder/footer-multi-column',
			'powder/footer-split',
			'powder/footer-stacked',
			'powder/gallery-grid-multi',
			'powder/gallery-grid-square',
			'powder/gallery-mosaic',
			'powder/gallery-row',
			'powder/gallery-text-images',
			'powder/header-logo-button',
			'powder/header-logo-social',
			'powder/header-site-logo',
			'powder/header-title-separator',
			'powder/hero-basic-text-button',
			'powder/hero-columns-image-text',
			'powder/hero-columns-text-image',
			'powder/hero-cover-stack',
			'powder/hero-image-text-buttons',
			'powder/posts-grid',
			'powder/posts-list',
			'powder/pricing-2-columns',
			'powder/pricing-3-columns',
			'powder/team-columns',
			'powder/team-single-image-text',
			'powder/team-single-text-image',
			'powder/template-page-featured',
			'powder/template-page-sidebar',
			'powder/template-post-featured',
			'powder/template-post-sidebar',
			'powder/testimonials-bold',
			'powder/testimonials-columns',
			'powder/testimonials-grid',
			'powder/testimonials-single'
		],
		'powder_setting_option_contrast' => [
			'powder/about-half-contrast',
			'powder/about-split-contrast',
			'powder/call-to-action-button-contrast',
			'powder/call-to-action-centered-contrast',
			'powder/call-to-action-outline-contrast',
			'powder/call-to-action-promo-contrast',
			'powder/call-to-action-stacked-contrast',
			'powder/content-links-contrast',
			'powder/content-logos-contrast',
			'powder/content-social-numbers-contrast',
			'powder/faq-columns-contrast',
			'powder/faq-stacked-contrast',
			'powder/featured-columns-contrast',
			'powder/featured-content-boxes-contrast',
			'powder/featured-intro-columns-contrast',
			'powder/footer-contrast',
			'powder/footer-mega-contrast',
			'powder/footer-multi-column-contrast',
			'powder/footer-split-contrast',
			'powder/footer-stacked-contrast',
			'powder/gallery-grid-multi-contrast',
			'powder/gallery-grid-square-contrast',
			'powder/gallery-mosaic-contrast',
			'powder/gallery-row-contrast',
			'powder/gallery-text-images-contrast',
			'powder/header-contrast',
			'powder/header-logo-button-contrast',
			'powder/header-logo-social-contrast',
			'powder/header-site-logo-contrast',
			'powder/header-title-separator-contrast',
			'powder/hero-basic-text-button-contrast',
			'powder/hero-columns-image-text-contrast',
			'powder/hero-columns-text-image-contrast',
			'powder/hero-cover-stack-contrast',
			'powder/hero-image-text-buttons-contrast',
			'powder/posts-contrast',
			'powder/posts-grid-contrast',
			'powder/posts-list-contrast',
			'powder/pricing-2-columns-contrast',
			'powder/pricing-3-columns-contrast',
			'powder/team-columns-contrast',
			'powder/team-single-image-text-contrast',
			'powder/team-single-text-image-contrast',
			'powder/testimonials-bold-contrast',
			'powder/testimonials-columns-contrast',
			'powder/testimonials-grid-contrast',
			'powder/testimonials-single-contrast'
		],
		'powder_setting_option_primary' => [
			'powder/about-half-primary',
			'powder/about-split-primary',
			'powder/call-to-action-button-primary',
			'powder/call-to-action-centered-primary',
			'powder/call-to-action-outline-primary',
			'powder/call-to-action-promo-primary',
			'powder/call-to-action-stacked-primary',
			'powder/content-links-primary',
			'powder/content-logos-primary',
			'powder/content-social-numbers-primary',
			'powder/faq-columns-primary',
			'powder/faq-stacked-primary',
			'powder/featured-columns-primary',
			'powder/featured-content-boxes-primary',
			'powder/featured-intro-columns-primary',
			'powder/footer-primary',
			'powder/footer-mega-primary',
			'powder/footer-multi-column-primary',
			'powder/footer-split-primary',
			'powder/footer-stacked-primary',
			'powder/gallery-grid-multi-primary',
			'powder/gallery-grid-square-primary',
			'powder/gallery-mosaic-primary',
			'powder/gallery-row-primary',
			'powder/gallery-text-images-primary',
			'powder/header-primary',
			'powder/header-logo-button-primary',
			'powder/header-logo-social-primary',
			'powder/header-site-logo-primary',
			'powder/header-title-separator-primary',
			'powder/hero-basic-text-button-primary',
			'powder/hero-columns-image-text-primary',
			'powder/hero-columns-text-image-primary',
			'powder/hero-cover-stack-primary',
			'powder/hero-image-text-buttons-primary',
			'powder/posts-primary',
			'powder/posts-grid-primary',
			'powder/posts-list-primary',
			'powder/pricing-2-columns-primary',
			'powder/pricing-3-columns-primary',
			'powder/team-columns-primary',
			'powder/team-single-image-text-primary',
			'powder/team-single-text-image-primary',
			'powder/testimonials-bold-primary',
			'powder/testimonials-columns-primary',
			'powder/testimonials-grid-primary',
			'powder/testimonials-single-primary'
		],
		'powder_setting_option_quaternary' => [
			'powder/about-half-quaternary',
			'powder/about-split-quaternary',
			'powder/call-to-action-button-quaternary',
			'powder/call-to-action-centered-quaternary',
			'powder/call-to-action-outline-quaternary',
			'powder/call-to-action-promo-quaternary',
			'powder/call-to-action-stacked-quaternary',
			'powder/content-links-quaternary',
			'powder/content-logos-quaternary',
			'powder/content-social-numbers-quaternary',
			'powder/faq-columns-quaternary',
			'powder/faq-stacked-quaternary',
			'powder/featured-columns-quaternary',
			'powder/featured-content-boxes-quaternary',
			'powder/featured-intro-columns-quaternary',
			'powder/footer-quaternary',
			'powder/footer-mega-quaternary',
			'powder/footer-multi-column-quaternary',
			'powder/footer-split-quaternary',
			'powder/footer-stacked-quaternary',
			'powder/gallery-grid-multi-quaternary',
			'powder/gallery-grid-square-quaternary',
			'powder/gallery-mosaic-quaternary',
			'powder/gallery-row-quaternary',
			'powder/gallery-text-images-quaternary',
			'powder/header-quaternary',
			'powder/header-logo-button-quaternary',
			'powder/header-logo-social-quaternary',
			'powder/header-site-logo-quaternary',
			'powder/header-title-separator-quaternary',
			'powder/hero-basic-text-button-quaternary',
			'powder/hero-columns-image-text-quaternary',
			'powder/hero-columns-text-image-quaternary',
			'powder/hero-cover-stack-quaternary',
			'powder/hero-image-text-buttons-quaternary',
			'powder/posts-quaternary',
			'powder/posts-grid-quaternary',
			'powder/posts-list-quaternary',
			'powder/pricing-2-columns-quaternary',
			'powder/pricing-3-columns-quaternary',
			'powder/team-columns-quaternary',
			'powder/team-single-image-text-quaternary',
			'powder/team-single-text-image-quaternary',
			'powder/testimonials-bold-quaternary',
			'powder/testimonials-columns-quaternary',
			'powder/testimonials-grid-quaternary',
			'powder/testimonials-single-quaternary'
		],
		'powder_setting_option_about' => [
			'powder/about-half-contrast',
			'powder/about-half-primary',
			'powder/about-half-quaternary',
			'powder/about-half',
			'powder/about-split-contrast',
			'powder/about-split-primary',
			'powder/about-split-quaternary',
			'powder/about-split'
		],
		'powder_setting_option_call_to_action' => [
			'powder/call-to-action-button-contrast',
			'powder/call-to-action-button-primary',
			'powder/call-to-action-button-quaternary',
			'powder/call-to-action-button',
			'powder/call-to-action-centered-contrast',
			'powder/call-to-action-centered-primary',
			'powder/call-to-action-centered-quaternary',
			'powder/call-to-action-centered',
			'powder/call-to-action-outline-contrast',
			'powder/call-to-action-outline-primary',
			'powder/call-to-action-outline-quaternary',
			'powder/call-to-action-outline',
			'powder/call-to-action-promo-contrast',
			'powder/call-to-action-promo-primary',
			'powder/call-to-action-promo-quaternary',
			'powder/call-to-action-promo',
			'powder/call-to-action-stacked-contrast',
			'powder/call-to-action-stacked-primary',
			'powder/call-to-action-stacked-quaternary',
			'powder/call-to-action-stacked'
		],
		'powder_setting_option_content' => [
			'powder/content-links-contrast',
			'powder/content-links-primary',
			'powder/content-links-quaternary',
			'powder/content-links',
			'powder/content-logos-contrast',
			'powder/content-logos-primary',
			'powder/content-logos-quaternary',
			'powder/content-logos',
			'powder/content-social-numbers-contrast',
			'powder/content-social-numbers-primary',
			'powder/content-social-numbers-quaternary',
			'powder/content-social-numbers'
		],
		'powder_setting_option_faq' => [
			'powder/faq-columns-contrast',
			'powder/faq-columns-primary',
			'powder/faq-columns-quaternary',
			'powder/faq-columns',
			'powder/faq-stacked-contrast',
			'powder/faq-stacked-primary',
			'powder/faq-stacked-quaternary',
			'powder/faq-stacked'
		],
		'powder_setting_option_featured' => [
			'powder/featured-columns-contrast',
			'powder/featured-columns-primary',
			'powder/featured-columns-quaternary',
			'powder/featured-columns',
			'powder/featured-content-boxes-contrast',
			'powder/featured-content-boxes-primary',
			'powder/featured-content-boxes-quaternary',
			'powder/featured-content-boxes',
			'powder/featured-intro-columns-contrast',
			'powder/featured-intro-columns-primary',
			'powder/featured-intro-columns-quaternary',
			'powder/featured-intro-columns'
		],
		'powder_setting_option_footer' => [
			'powder/footer-contrast',
			'powder/footer-primary',
			'powder/footer-quaternary',
			'powder/footer-mega-contrast',
			'powder/footer-mega-primary',
			'powder/footer-mega-quaternary',
			'powder/footer-mega',
			'powder/footer-multi-column-contrast',
			'powder/footer-multi-column-primary',
			'powder/footer-multi-column-quaternary',
			'powder/footer-multi-column',
			'powder/footer-split-contrast',
			'powder/footer-split-primary',
			'powder/footer-split-quaternary',
			'powder/footer-split',
			'powder/footer-stacked-contrast',
			'powder/footer-stacked-primary',
			'powder/footer-stacked-quaternary',
			'powder/footer-stacked'
		],
		'powder_setting_option_gallery' => [
			'powder/gallery-grid-multi-contrast',
			'powder/gallery-grid-multi-primary',
			'powder/gallery-grid-multi-quaternary',
			'powder/gallery-grid-multi',
			'powder/gallery-grid-square-contrast',
			'powder/gallery-grid-square-primary',
			'powder/gallery-grid-square-quaternary',
			'powder/gallery-grid-square',
			'powder/gallery-mosaic-contrast',
			'powder/gallery-mosaic-primary',
			'powder/gallery-mosaic-quaternary',
			'powder/gallery-mosaic',
			'powder/gallery-row-contrast',
			'powder/gallery-row-primary',
			'powder/gallery-row-quaternary',
			'powder/gallery-row',
			'powder/gallery-text-images-contrast',
			'powder/gallery-text-images-primary',
			'powder/gallery-text-images-quaternary',
			'powder/gallery-text-images'
		],
		'powder_setting_option_header' => [
			'powder/header-contrast',
			'powder/header-primary',
			'powder/header-quaternary',
			'powder/header-logo-button-contrast',
			'powder/header-logo-button-primary',
			'powder/header-logo-button-quaternary',
			'powder/header-logo-button',
			'powder/header-logo-social-contrast',
			'powder/header-logo-social-primary',
			'powder/header-logo-social-quaternary',
			'powder/header-logo-social',
			'powder/header-site-logo-contrast',
			'powder/header-site-logo-primary',
			'powder/header-site-logo-quaternary',
			'powder/header-site-logo',
			'powder/header-title-separator-contrast',
			'powder/header-title-separator-primary',
			'powder/header-title-separator-quaternary',
			'powder/header-title-separator'
		],
		'powder_setting_option_hero' => [
			'powder/hero-basic-text-button-contrast',
			'powder/hero-basic-text-button-primary',
			'powder/hero-basic-text-button-quaternary',
			'powder/hero-basic-text-button',
			'powder/hero-columns-image-text-contrast',
			'powder/hero-columns-image-text-primary',
			'powder/hero-columns-image-text-quaternary',
			'powder/hero-columns-image-text',
			'powder/hero-columns-text-image-contrast',
			'powder/hero-columns-text-image-primary',
			'powder/hero-columns-text-image-quaternary',
			'powder/hero-columns-text-image',
			'powder/hero-cover-stack-contrast',
			'powder/hero-cover-stack-primary',
			'powder/hero-cover-stack-quaternary',
			'powder/hero-cover-stack',
			'powder/hero-image-text-buttons-contrast',
			'powder/hero-image-text-buttons-primary',
			'powder/hero-image-text-buttons-quaternary',
			'powder/hero-image-text-buttons'
		],
		'powder_setting_option_posts' => [
			'powder/posts-contrast',
			'powder/posts-primary',
			'powder/posts-quaternary',
			'powder/posts-grid-contrast',
			'powder/posts-grid-primary',
			'powder/posts-grid-quaternary',
			'powder/posts-grid',
			'powder/posts-list-contrast',
			'powder/posts-list-primary',
			'powder/posts-list-quaternary',
			'powder/posts-list'
		],
		'powder_setting_option_pricing' => [
			'powder/pricing-2-columns-contrast',
			'powder/pricing-2-columns-primary',
			'powder/pricing-2-columns-quaternary',
			'powder/pricing-2-columns',
			'powder/pricing-3-columns-contrast',
			'powder/pricing-3-columns-primary',
			'powder/pricing-3-columns-quaternary',
			'powder/pricing-3-columns'
		],
		'powder_setting_option_team' => [
			'powder/team-columns-contrast',
			'powder/team-columns-primary',
			'powder/team-columns-quaternary',
			'powder/team-columns',
			'powder/team-single-image-text-contrast',
			'powder/team-single-image-text-primary',
			'powder/team-single-image-text-quaternary',
			'powder/team-single-image-text',
			'powder/team-single-text-image-contrast',
			'powder/team-single-text-image-primary',
			'powder/team-single-text-image-quaternary',
			'powder/team-single-text-image'
		],
		'powder_setting_option_template' => [
			'powder/template-page-featured',
			'powder/template-page-sidebar',
			'powder/template-post-featured',
			'powder/template-post-sidebar'
		],
		'powder_setting_option_testimonials' => [
			'powder/testimonials-bold-contrast',
			'powder/testimonials-bold-primary',
			'powder/testimonials-bold-quaternary',
			'powder/testimonials-bold',
			'powder/testimonials-columns-contrast',
			'powder/testimonials-columns-primary',
			'powder/testimonials-columns-quaternary',
			'powder/testimonials-columns',
			'powder/testimonials-grid-contrast',
			'powder/testimonials-grid-primary',
			'powder/testimonials-grid-quaternary',
			'powder/testimonials-grid',
			'powder/testimonials-single-contrast',
			'powder/testimonials-single-primary',
			'powder/testimonials-single-quaternary',
			'powder/testimonials-single'
		]
	];

	foreach ( $patterns as $option => $pattern_ids ) {
		if ( get_option( $option, '1' ) !== '1' ) {
			foreach ( $pattern_ids as $pattern_id ) {
				unregister_block_pattern( $pattern_id );
			}
		}
	}
});
