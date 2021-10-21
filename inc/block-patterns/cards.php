<?php
/**
 * Card patterns.
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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0em","right":"0em","bottom":"0em","left":"0em"}}},"className":"is-style-column-stack is-mayuki-card","layout":{"type":"flex"}} -->
<div class="wp-block-group is-style-column-stack is-mayuki-card" style="padding-top:0em;padding-right:0em;padding-bottom:0em;padding-left:0em"><!-- wp:image {"sizeSlug":"large","className":"is-mayuki-card-image"} -->
		<figure class="wp-block-image size-large is-mayuki-card-image">
			<img src="https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt=""/>
		</figure>
	<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>Basic Card Title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is a basic card that stores a picture, headline and descriptive text for highlighting important points. Has drop shadow and border by default.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
';



return array(
	'title'         => __( 'Basic Card', 'mayuki' ),
	'categories'    => array( 'cards' ),
	'content'       => $content,
);