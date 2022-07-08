<?php
/**
 * Title: Section with cover image, heading, text, buttons.
 * Slug: bright-mode/general-hero
 * Categories: bright-mode-general
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample.jpg'; ?>","id":238,"dimRatio":50,"focalPoint":{"x":"0.50","y":"0.00"},"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"150px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:120px;padding-bottom:150px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-238" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample.jpg'; ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"max-96"} -->
<h1 class="has-text-align-center has-base-color has-text-color has-max-96-font-size"><?php echo esc_html__( 'Welcome to your sublime', 'bright-mode' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-gradient-primary-secondary","fontSize":"max-96"} -->
<h1 class="has-text-align-center is-style-gradient-primary-secondary has-max-96-font-size"><?php echo esc_html__( 'WordPress website.', 'bright-mode' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size"><?php echo esc_html__( 'Modern design, fresh patterns, vibrant colors—all in one theme.', 'bright-mode' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"wideSize":"960px"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"40px","right":"40px"}}},"className":"is-style-shadow-base","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-shadow-base has-medium-font-size"><a class="wp-block-button__link" style="padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px"><?php echo esc_html__( 'View Theme Features', 'bright-mode' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
