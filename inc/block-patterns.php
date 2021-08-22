<?php
/**
 * Mayuki Theme: Block Patterns
 *
 * @package mayuki
 * @since 1.0.0
 */

if ( ! function_exists( 'mayuki_register_block_patterns' ) ) :

	function mayuki_register_block_patterns() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'mayuki',
				array( 'label' => __('Mayuki', 'mayuki' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'navigation'
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'mayuki/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'mayuki_register_block_patterns' );