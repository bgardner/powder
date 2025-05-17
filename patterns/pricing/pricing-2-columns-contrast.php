<?php
/**
 * Title: Pricing table with 2 columns
 * Slug: powder/pricing-2-columns-contrast
 * Categories: powder-pricing
 */
?>
<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","wideSize":"840px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Discover our pricing options', 'powder' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:group {"layout":{"type":"constrained","wideSize":"480px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'Choose the plan that best suits your business needs. (Lifetime offers the most value. Ka-chow!)', 'powder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
					<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'Basic', 'powder' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"xx-large"} -->
						<p class="has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:400;line-height:1">$95</p>
						
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size">/ <?php echo esc_html__( 'year', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.5"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'Perfect for WordPress designers who are curious or just getting started.', 'powder' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Powder theme', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Basic support', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-x.svg'; ?>" alt="Circle x icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Sample child theme', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-x.svg'; ?>" alt="Circle x icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Figma design files', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get Basic →', 'powder' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
					<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'Lifetime', 'powder' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"xx-large"} -->
						<p class="has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:400;line-height:1">$295</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size">/ <?php echo esc_html__( 'once', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'Perfect for WordPress designers who want the deal of a lifetime. Literally.', 'powder' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-invert"} -->
						<figure class="wp-block-image size-full is-resized is-style-invert"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Powder theme', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-invert"} -->
						<figure class="wp-block-image size-full is-resized is-style-invert"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Premium support', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-invert"} -->
						<figure class="wp-block-image size-full is-resized is-style-invert"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Sample child theme', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="line-height:1">
						<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-invert"} -->
						<figure class="wp-block-image size-full is-resized is-style-invert"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/icons/icon-circle-check.svg'; ?>" alt="Circle check icon" style="object-fit:cover;width:20px;height:20px"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html__( 'Figma design files', 'powder' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Get Lifetime →', 'powder' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
