<?php
/**
 * Navigation pattern.
 *
 * @package mayuki
 * @since 1.0.0
 */

/**
 *
 * The content of navigation block pattern. Saved as variable in order to
 * make editing easier and more focused, and potentially separation in future
 * updates.
 */

$content = '
	<!-- wp:group {"align":"full","className":"mayuki-navigation"} -->
	<div class="wp-block-group alignfull mayuki-navigation">
		<!-- wp:site-logo {"width":60} /-->	
		<!-- wp:navigation {"orientation":"horizontal","isResponsive":true,"itemsJustification":"right","align":"wide"} -->
			<!-- wp:navigation-link /-->
			<!-- wp:navigation-link /-->
			<!-- wp:navigation-link /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->';



return array(
	'title'         => __( 'Navigation', 'mayuki' ),
	'categories'    => array( 'mayuki' ),
	'content'       => $content,
);