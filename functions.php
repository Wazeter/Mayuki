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

		// Widgets Block Editor
		add_theme_support( 'widgets-block-editor' );

		// Widgets
		add_theme_support( 'widgets' );

	}
	add_action( 'after_setup_theme', 'mayuki_theme_setup' );

endif;

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 * @since 1.0.0
 * @access public
 */
function mayuki_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mayuki_content_width', 672 );
}

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
		MAYUKI_VERSION,
		'screen and (min-width: 601px)'
	);
	wp_enqueue_style(
		'mayuki-mobile',
		get_theme_file_uri( 'assets/css/mobile.css' ),
		'',
		MAYUKI_VERSION,
		'screen and (max-width: 600px)'
	);
}
add_action( 'wp_enqueue_scripts', 'mayuki_styles' );
