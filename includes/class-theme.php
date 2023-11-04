<?php
/**
 * GenesisChildTheme
 *
 * @package GenesisChildTheme
 * @author  Robert Wrześniacki
 * @link    https://raw-code.it
 */

namespace GenesisChildTheme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};

/**
 * Theme helper class.
 */
class Theme {
	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init_hooks();
	}

	/**
	 * Init Hooks.
	 */
	public function init_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_front_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		add_action( 'init', array( $this, 'custom_image_sizes' ) );
		add_filter(
			'excerpt_length',
			function( $length ) {
				return 10;
			}
		);
		add_filter( 'excerpt_more', '__return_empty_string' ); 
	}

	/**
	 * Enqueue front script and styles.
	 */
	public function enqueue_front_scripts() {
		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );

		wp_enqueue_style(
			'genesis-child-theme-style',
			CHILD_URL . '/dist/css/styles.css',
			'',
			$theme_version
		);
		wp_enqueue_script(
			'genesis-child-theme-js',
			CHILD_URL . '/dist/js/scripts.js',
			array( 'jquery' ),
			$theme_version,
			true
		);
		wp_enqueue_style(
			'genesis-child-theme-swipercss',
			CHILD_URL . '/dist/css/swiper.min.css',
			$theme_version,
			true
		);
		wp_enqueue_script(
			'genesis-child-theme-swiperjs',
			CHILD_URL . '/dist/js/swiper.min.js',
			$theme_version,
			true
		);
	}

	/**
	 * Enqueue admin script and styles.
	 */
	public function enqueue_admin_scripts() {
		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );

		wp_enqueue_style(
			'superpaczka-style',
			CHILD_URL . '/dist/css/styles.css',
			'',
			$theme_version
		);
	}

	/**
	 * Add custom image size.
	 */
	public function custom_image_sizes() {
		add_image_size( 'single-post-image', 512, 310, true );
		add_image_size( 'post-image-archive', 340, 200, true );
		add_image_size( 'post-image-slider-small', 768, 470, true );
		add_image_size( 'post-image-slider-medium', 1200, 660, true );
		add_image_size( 'post-image-slider-large', 1620, 700, true );
	}
}

new Theme();
