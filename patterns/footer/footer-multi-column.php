<?php
/**
 * Title: Footer - multi-column
 * Slug: powder/footer-multi-column
 * Categories: powder-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","wideSize":"600px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0">
		<!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
		<h2 class="wp-block-heading" style="font-size:48px"><?php echo esc_html__( 'Designed with love. Powered by WordPress.', 'powder' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
			<h3 class="wp-block-heading has-x-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Main Office', 'powder' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
			<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
				<!-- wp:list-item -->
				<li>1989 Evermore Lane</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Wonderland, CA 90909</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#">847.555.8080</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
					<h3 class="wp-block-heading has-x-small-font-size" style="text-transform:uppercase">Chicago</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Brooke Swift</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'powder' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:brooke@example.com">brooke@example.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
					<h3 class="wp-block-heading has-x-small-font-size" style="text-transform:uppercase">Nashville</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Sarah Taylor</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'powder' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:sarah@example.com">sarah@example.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
					<h3 class="wp-block-heading has-x-small-font-size" style="text-transform:uppercase">New York</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Hayley Jones</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'powder' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:hayley@example.com">hayley@example.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"x-small"} -->
	<div class="wp-block-group alignwide has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.75"}},"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p> · </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="https://briangardner.com/powder/">Powder Theme</a> by <a href="https://briangardner.com/">Brian Gardner</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","className":"is-style-outline","style":{"spacing":{"blockGap":{"left":"5px"}}}} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-outline">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.threads.net/","service":"threads"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
