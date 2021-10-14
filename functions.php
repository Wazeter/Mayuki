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
/* load block-styles only when used - 07/01/2021, might not need */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

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
		get_theme_file_uri( 'assets/css/build/global.css' ),
		'',
		MAYUKI_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mayuki_styles' );

/**
 * Attach extra styles to multiple blocks.
 */
function mayuki_enqueue_block_styles() {
	// An array of blocks.
	$styled_blocks = [ 'paragraph', 'code', 'cover', 'group' ];

	foreach ( $styled_blocks as $block_name ) {
		// Get the stylesheet handle. This is backwards-compatible and checks the
		// availability of the `wp_should_load_separate_core_block_assets` function,
		// and whether we want to load separate styles per-block or not.
		$handle = (
			function_exists( 'wp_should_load_separate_core_block_assets' ) &&
			wp_should_load_separate_core_block_assets()
		) ? "wp-block-$block_name" : 'wp-block-library';

		// Get the styles.
		$styles = file_get_contents( get_theme_file_path( "assets/css/build/$block_name.css" ) );

		// Add frontend styles.
		wp_add_inline_style( $handle, $styles );

		// Add editor styles.
		add_editor_style( "assets/css/build/$block_name.css" );
		if ( file_exists( get_theme_file_path( "assets/css/build/$block_name.css" ) ) ) {
			add_editor_style( "assets/css/build/$block_name.css" );
		}
	}
}
// Add frontend styles.
add_action( 'wp_enqueue_scripts', 'mayuki_enqueue_block_styles' );
// Add editor styles.
add_action( 'admin_init', 'mayuki_enqueue_block_styles' );