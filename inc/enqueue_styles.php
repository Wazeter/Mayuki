<?php

// load block-styles only when used - 07/01/2021, might not need
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

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
 * Enqueue editor styles.
 *
 * @since 1.0.0
 */
function mayuki_editor_styles() {
	wp_enqueue_style(
		'mayuki-editor',
		get_theme_file_uri( 'assets/css/build/editor.css' ),
		'',
		MAYUKI_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'mayuki_editor_styles' );

/**
 * Attach extra styles to multiple blocks.
 */
function mayuki_enqueue_block_styles() {
	// An array of blocks.
	// sample entry for styled_blocks: 'paragraph', 'code', 'cover', 'group'
	// 'group', 'paragraph', 'heading', 'code', 'preformatted', 'list'
	$styled_blocks = [ 'group', 'columns', 'buttons', 'button', 'heading', 'preformatted', 'paragraph' ];

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
