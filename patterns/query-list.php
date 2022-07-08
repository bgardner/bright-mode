<?php
/**
 * Title: Query of posts in list view.
 * Slug: bright-mode/query-list
 * Categories: bright-mode-query
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","layout":{"inherit":false,"wideSize":"960px"}} -->
<div class="wp-block-group alignfull">
<!-- wp:query {"queryId":1,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":"6"},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template -->
<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:post-featured-image {"isLink":true} /-->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}},"typography":{"lineHeight":1.25}},"fontSize":"large"} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size" style="margin-top:0px">
<!-- wp:post-date /-->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'by', 'bright-mode' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-author {"showAvatar":false} /-->
</div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:post-excerpt {"moreText":"Read More →"} /-->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
