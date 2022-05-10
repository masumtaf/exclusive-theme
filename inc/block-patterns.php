<?php 
/**
 * Exclusive Theme: Block Patterns
 *
 * @since Exclusive Theme 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Exclusive Theme 1.0
 *
 * @return void
 */
function exclusive_theme_register_block_patterns() {

	$block_pattern_categories = array(
		'featured' 			=> array( 'label' => __( 'Featured Test', 'exclusive-theme' ) ),
		'footer'   			=> array( 'label' => __( 'Footers Test', 'exclusive-theme' ) ),
		'header'   			=> array( 'label' => __( 'Headers Test', 'exclusive-theme' ) ),
		'query'    			=> array( 'label' => __( 'Query Test', 'exclusive-theme' ) ),
		'pages'    			=> array( 'label' => __( 'Pages Test', 'exclusive-theme' ) ),
		'exclusive-basic'   => array( 'label' => __( 'Exclusive Basic', 'exclusive-theme' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Exclusive Theme 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'exclusive_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
        'header-default',
        'footer-default',
        'call-to-action',
        'banner',
        'service-section',
        'page-banner',
        'post-listing',
        'contact-details',
        'info-section',
        'team-section',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Exclusive Theme 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'exclusive_theme_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'exclusive_theme/' . $block_pattern,
			require $pattern_file
		);
	}

}
add_action( 'init', 'exclusive_theme_register_block_patterns', 9 );
