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
				array( 'label' => __( 'Mayuki', 'mayuki' ) )
			);
			register_block_pattern_category(
				'cards',
				array( 'label' => __( 'Cards', 'mayuki' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'navigation',
				'cards'
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'mayuki/' . $block_pattern,
					require __DIR__ . '/block-patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'mayuki_register_block_patterns' );