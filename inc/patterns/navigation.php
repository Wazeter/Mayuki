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
					<!-- wp:group {"align":"full","className":"mayuki-nav"} -->
						<div class="wp-block-group alignfull mayuki-nav">
							<!-- wp:site-logo {"width":120} /-->
							<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center"} /-->
							<!-- wp:navigation {"itemsJustification":"right","align":"wide"} -->
								<!-- wp:navigation-link {"isTopLevelLink":true} /-->
								<!-- wp:navigation-link {"isTopLevelLink":true} /-->
								<!-- wp:navigation-link {"isTopLevelLink":true} /-->
							<!-- /wp:navigation -->
						</div>
					<!-- /wp:group -->
				';



return array(
	'title'         => __( 'Navigation', 'mayuki' ),
	'categories'    => array( 'mayuki' ),
	'content'       => $content,
);