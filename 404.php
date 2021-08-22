<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * Experimenting with using 404.php so that 404.html can easily override the template & if there's no
 * support for block theme it can fallback here.
 * @package mayuki
 * @since 1.0.0
 */

/**
 *  Explicitly defining the header rendering that block templates pull
 *  doing so here so that we do not have to create a separate header.php or footer.php specifically
 *  for this functionality.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

	<main class="container-404">
		<h1 class="has-text-align-center has-large-font-size"><?php _e( 'Oops! That page can&rsquo;t be found.', 'mayuki' ); ?></h1>

		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mayuki' ); ?></p>

		<?php echo do_blocks('<!-- wp:search {"label":""} /-->'); ?>
	</main>


<?php wp_footer(); ?>

</body>
</html>