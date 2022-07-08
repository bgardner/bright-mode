<?php
/**
 * Title: Query of posts in stack view.
 * Slug: bright-mode/query-stack
 * Categories: bright-mode-query
 * Viewport Width: 1280
 */

?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
<div class="wp-block-query">
<!-- wp:query-title {"type":"archive"} /-->
<!-- wp:term-description /-->
<!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"30px","top":"0px"}}}} /-->
<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
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
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
