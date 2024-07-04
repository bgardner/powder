<?php
/**
 * Title: Columns section with eBook covers
 * Slug: powder/content-ebook-covers
 * Categories: powder-content
 */
?>
<!-- wp:group {"metadata":{"name":"eBook Covers"},"align":"full","className":"is-style-section-1","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","wideSize":""}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Meet Powder', 'powder-studio' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"60px"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:60px"><?php echo esc_html__( 'Are you ready to design with WordPress?', 'powder-studio' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"overlayColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|x-40"},"dimensions":{"minHeight":"400px"}},"textColor":"base","borderColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-border-color has-base-border-color has-base-color has-text-color" style="border-width:1px;min-height:400px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.2"}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="line-height:1.2;text-transform:uppercase"><?php echo esc_html__( 'Sample Title', 'powder-studio' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
					<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html__( 'By: Brian Gardner', 'powder-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Download eBook', 'powder-studio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"overlayColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|x-40"},"dimensions":{"minHeight":"400px"}},"textColor":"base","borderColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-border-color has-base-border-color has-base-color has-text-color" style="border-width:1px;min-height:400px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.2"}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="line-height:1.2;text-transform:uppercase"><?php echo esc_html__( 'Sample Title', 'powder-studio' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
					<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html__( 'By: Brian Gardner', 'powder-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Download eBook', 'powder-studio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"overlayColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|x-40"},"dimensions":{"minHeight":"400px"}},"textColor":"base","borderColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-border-color has-base-border-color has-base-color has-text-color" style="border-width:1px;min-height:400px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.2"}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="line-height:1.2;text-transform:uppercase"><?php echo esc_html__( 'Sample Title', 'powder-studio' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
					<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html__( 'By: Brian Gardner', 'powder-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Download eBook', 'powder-studio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
