<?php
/**
 * Title: Header with site logo, site title, navigation.
 * Slug: bright-mode/header-alt
 * Categories: bright-mode-header
 * Block Types: core/template-part/header
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"gradient":"primary-secondary"} -->
<div class="wp-block-group alignfull has-primary-secondary-gradient-background has-background" style="margin-top:0px"><!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","className":"has-no-background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-no-background has-base-color has-text-color has-link-color" style="margin-top:0px;padding-top:30px;padding-bottom:30px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":24,"shouldSyncIcon":false} /-->
<!-- wp:site-title /-->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"isResponsive":true,"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
