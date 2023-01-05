<?php
/**
 * Title: Footer with site title, text, links.
 * Slug: powder/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull has-x-small-font-size" style="padding-top:30px;padding-bottom:30px">
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"5px"}}} -->
<div class="wp-block-group">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"5px"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"isLink":false,"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-small"} /-->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p> · </p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="https://wordpress.org/themes/powder/" data-type="URL" data-id="https://wordpress.org/themes/powder/">Theme</a> by <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p><a href="#">Twitter</a> · <a href="#">Instagram</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
