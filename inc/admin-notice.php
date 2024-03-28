<?php
/**
 * Admin notice for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://powder.design/
 */

/**
 * Include dismissable admin notice.
 */
function powder_admin_notice() {

	if ( get_option( 'powder_admin_notice_dismissed' ) == 'yes' ) {
		return;
	}

	echo '<div class="notice is-dismissible notice-warning" id="powder-admin-notice"><p>' . esc_html__( 'Unlock the full potential of Powder with our', 'powder' ) . ' <a href="https://powder.design/all-access/" target="_blank">' . esc_html__( 'All-Access plan', 'powder' ) . '</a>, ' . esc_html__( 'which features an extensive library of wireframe patterns for building websites quickly.', 'powder' ) . '</p></div>';

	// Handle notice dismissal with Javascript.
	?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(document).on('click', '#powder-admin-notice .notice-dismiss', function() {
			$.post(ajaxurl, { action: 'powder_dismiss_admin_notice' });
		});
	});
	</script>
	<?php
}
add_action( 'admin_notices', 'powder_admin_notice' );

/**
 * Dismiss notice with AJAX.
 */
function powder_dismiss_admin_notice() {

	update_option( 'powder_admin_notice_dismissed', 'yes' );
	wp_die();

}
add_action( 'wp_ajax_powder_dismiss_admin_notice', 'powder_dismiss_admin_notice' );
