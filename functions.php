<?php

define( 'MAYUKI_VERSION', wp_get_theme()->get( 'Version' ) );

// Block patterns.
require_once 'inc/block-patterns.php';

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

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function mayuki_styles() {
	wp_enqueue_style(
		'mayuki-global',
		get_theme_file_uri( 'assets/css/global.css' ),
		'',
		MAYUKI_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mayuki_styles' );
