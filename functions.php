<?php
/**
 * Exclusive Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Exclusive Theme
 * @since Exclusive Theme 1.0
 */


 
defined( 'EXCLUSIVE_VERSION' ) || define( 'EXCLUSIVE_VERSION', '1.0.0' );
defined( 'EXSIT_DIR' ) || define( 'EXSIT_DIR', trailingslashit( get_template_directory() ) );
defined( 'EXSIT_URI' ) || define( 'EXSIT_URI', trailingslashit( get_template_directory_uri() ) );


if ( ! function_exists( 'exclusive_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Exclusive Theme 1.0
	 *
	 * @return void
	 */
	function exclusive_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		
		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'exclusive-theme' ),
				'menu-2' => esc_html__( 'Footer', 'exclusive-theme' ),
				'menu-3' => esc_html__( 'SideBar', 'exclusive-theme' ),
			)
		);
	}

endif;

add_action( 'after_setup_theme', 'exclusive_theme_support' );

if ( ! function_exists( 'exclusive_theme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Exclusive Theme 1.0
	 *
	 * @return void
	 */
	function exclusive_theme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'exclusive_theme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		//Add styles inline.
		// wp_add_inline_style( 'exclusive_theme-style', exclusive_theme_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'exclusive_theme-style' );

		wp_add_inline_style( 'load-exclusive-font-style', load_font_styles() );
		
		wp_register_style(
			'exclusive-frontend-style',
			EXSIT_URI . '/assets/css/frontend-block.css',
			array(),
			EXCLUSIVE_VERSION
		);

		wp_enqueue_style('exclusive-frontend-style');

	}

endif;

add_action( 'wp_enqueue_scripts', 'exclusive_theme_styles' );

if ( ! function_exists( 'exclusive_theme_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Exclusive Theme 1.0
	 *
	 * @return void
	 */
	function exclusive_theme_editor_styles() {

		//Add styles inline.
		wp_add_inline_style( 'wp-block-library', load_font_styles() );

	}

endif;

add_action( 'admin_init', 'exclusive_theme_editor_styles' );


/**
 * Load Font Styles
 */
function load_font_styles() {
	return "
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');		
		@import url('https://fonts.googleapis.com/css2?family=Heebo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');
	";
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
