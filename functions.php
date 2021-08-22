<?php

define( 'MAYUKI_VERSION', wp_get_theme()->get( 'Version' ) );

if (! function_exists('mayuki_theme_setup' ) ) :
	function mayuki_theme_setup() {
		add_theme_support( 'automatic-feed-links' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Enqueue editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Featured image
		add_theme_support( 'post-thumbnails' );

	}
	add_action( 'after_setup_theme', 'mayuki_theme_setup' );

endif;
