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
<!-- wp:group {"style":{"border":{"style":"solid","width":"0.1em","radius":"0.2rem"},"spacing":{"padding":{"top":"0em","right":"0em","bottom":"0em","left":"0em"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="border-radius:0.2rem;border-style:solid;border-width:0.1em;padding-top:0em;padding-right:0em;padding-bottom:0em;padding-left:0em">
	<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.2rem","topRight":"0.2rem","bottomLeft":null,"bottomRight":null}}}} -->
	<figure class="wp-block-image alignfull size-large" style="border-top-left-radius:0.2rem;border-top-right-radius:0.2rem">
		<img src="https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=406&amp;w=640" alt=""/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0em"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:0em">
		<!-- wp:heading {"level":3} -->
		<h3>Basic Card Title</h3>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>This is a basic card that stores a picture, headline and descriptive text for highlighting important points. Has drop shadow and border by default.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->';



return array(
	'title'         => __( 'Basic Card', 'mayuki' ),
	'categories'    => array( 'cards' ),
	'content'       => $content,
);