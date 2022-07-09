<?php
/**
 * Title: Footer with columns, text, button, links.
 * Slug: bright-mode/footer-default
 * Categories: bright-mode-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1360
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"main","textColor":"base","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"gradient":"primary-secondary"} -->
<div class="wp-block-group alignfull has-primary-secondary-gradient-background has-background" style="margin-top:0px"><!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"bottom":"60px","top":"100px"},"blockGap":"30px","margin":{"top":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;padding-top:100px;padding-bottom:60px"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.3,"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:300;line-height:1.3"><?php echo esc_html__( 'Are you interested in working with us? Send an email to', 'bright-mode' ); ?> <a href="mailto:hello@example.com" data-type="mailto" data-id="mailto:hello@example.com">hello@example.com</a> or <a href="#"><?php echo esc_html__( 'schedule a free call', 'bright-mode' ); ?></a>. <?php echo esc_html__( 'Ka-chow!', 'bright-mode' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"align":"right","className":"is-style-shadow-base"} -->
<div class="wp-block-button alignright is-style-shadow-base"><a class="wp-block-button__link"><?php echo esc_html__( 'Work With Us', 'bright-mode' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"40px","bottom":"40px"},"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"fontSize":"tiny"} -->
<div class="wp-block-group alignwide has-tiny-font-size" style="font-style:normal;font-weight:400;padding-top:40px;padding-bottom:40px"><!-- wp:paragraph -->
<p>© 2022 Your Company LLC · <a href="https://wordpress.org/themes/bright-mode/" data-type="URL" data-id="https://wordpress.org/themes/bright-mode/">Bright Mode Theme</a> <?php echo esc_html__( 'by', 'bright-mode' ); ?> <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#">Instagram</a>&nbsp;·&nbsp;<a href="#">Twitter</a>&nbsp;·&nbsp;<a href="#">Facebook</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
