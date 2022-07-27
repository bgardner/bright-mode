<?php
/**
 * Title: Page with image, text, social icons, buttons.
 * Slug: bright-mode/link-page-secondary-tertiary-background
 * Categories: bright-mode-link-page
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0px"}}},"textColor":"background","gradient":"secondary-tertiary","className":"is-style-full-height","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-full-height has-background-color has-secondary-tertiary-gradient-background has-text-color has-background has-link-color" style="margin-top:0px"><!-- wp:group {"layout":{"wideSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:image {"align":"center","id":266,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/avatar.jpg'; ?>" alt="Sample Avatar" class="wp-image-266" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="your-name-1"><?php echo esc_html__( 'Your Name', 'bright-mode' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Company Name', 'bright-mode' ); ?><br><a href="mailto:name@exmaple.com">name@example.com</a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","align":"center","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","width":100,"className":"is-style-fill-background is-style-shadow-main"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-background is-style-shadow-main"><a class="wp-block-button__link has-base-background-color has-background"><?php echo esc_html__( 'Visit My Website', 'bright-mode' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"base","width":100,"className":"is-style-fill-background is-style-shadow-main"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-background is-style-shadow-main"><a class="wp-block-button__link has-base-background-color has-background"><?php echo esc_html__( 'Read My Blog', 'bright-mode' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"base","width":100,"className":"is-style-fill-background is-style-shadow-main"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-background is-style-shadow-main"><a class="wp-block-button__link has-base-background-color has-background"><?php echo esc_html__( 'Download My Ebook', 'bright-mode' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"base","width":100,"className":"is-style-fill-background is-style-shadow-main"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-background is-style-shadow-main"><a class="wp-block-button__link has-base-background-color has-background"><?php echo esc_html__( 'Follow My Newsletter', 'bright-mode' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"base","width":100,"className":"is-style-fill-background is-style-shadow-main"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-background is-style-shadow-main"><a class="wp-block-button__link has-base-background-color has-background"><?php echo esc_html__( 'Listen to My Podcast', 'bright-mode' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><a href="https://wordpress.org/themes/bright-mode/"><?php echo esc_html__( 'Made with Bright Mode', 'bright-mode' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
