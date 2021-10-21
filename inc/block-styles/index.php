<?php

function mayuki_register_block_styles() {
	// Group block extensions
	wp_enqueue_script(
		'rich-editor',
		get_theme_file_uri( 'inc/block-styles/group.js' ),
		array( 'wp-blocks', 'wp-dom' ),
		MAYUKI_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'mayuki_register_block_styles' );