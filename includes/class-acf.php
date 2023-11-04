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
 * Handle all operation for ACF settings.
 */
class ACF {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_filter( 'acf/settings/save_json', array( $this, 'acf_json_save_point' ) );
		add_filter( 'acf/settings/load_json', array( $this, 'acf_json_load_point' ) );
		add_action( 'init', array( $this, 'acf_options_page' ) );
		add_action( 'init', array( $this, 'acf_custom_image_sizes' ) );
		if ( function_exists( 'acf_register_block_type' ) ) {
			add_action( 'acf/init', array( $this, 'register_acf_block_types' ) );
		}
		add_filter( 'block_categories', array( $this, 'block_categories' ), 10, 2 );
		add_theme_support( 'align-wide' );
	}

	/**
	 * Register all custom gutenberg blocks.
	 */
	public function register_acf_block_types() {
		
		// Register a meet our team block.
		acf_register_block_type(
			array(
				'name'            => 'meet our team',
				'title'           => __( 'Meet our team', 'genesis-child-theme' ),
				'description'     => __( 'A custom meet our team block', 'genesis-child-theme' ),
				'icon'            => 'groups',
				'render_template' => 'template-parts/blocks/meet-our-team.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'meet our team', 'genesis-child-theme' ), __( 'team members', 'genesis-child-theme' ) )
			)
		);
		
		// Register a what makes us stand out block.
		acf_register_block_type(
			array(
				'name'            => 'what makes us stand out',
				'title'           => __( 'What makes us stand out', 'genesis-child-theme' ),
				'description'     => __( 'A custom what makes us stand out block', 'genesis-child-theme' ),
				'icon'            => 'star-filled',
				'render_template' => 'template-parts/blocks/what-makes-us-stand-out.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'what makes us stand out', 'genesis-child-theme' ), __( 'numbers', 'genesis-child-theme' ) )
			)
		);
		
		// Register a contact block.
		acf_register_block_type(
			array(
				'name'            => 'contact',
				'title'           => __( 'Contact', 'genesis-child-theme' ),
				'description'     => __( 'A custom contact block', 'genesis-child-theme' ),
				'icon'            => 'email-alt',
				'render_template' => 'template-parts/blocks/contact.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'contact', 'genesis-child-theme' ) )
			)
		);
		
		// Register an about us block.
		acf_register_block_type(
			array(
				'name'            => 'about us',
				'title'           => __( 'About us', 'genesis-child-theme' ),
				'description'     => __( 'A custom about us block', 'genesis-child-theme' ),
				'icon'            => 'tagcloud',
				'render_template' => 'template-parts/blocks/about-us.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'about us', 'genesis-child-theme' ) )
			)
		);
		
		// Register an our values block.
		acf_register_block_type(
			array(
				'name'            => 'our values',
				'title'           => __( 'Our values', 'genesis-child-theme' ),
				'description'     => __( 'A custom our values block', 'genesis-child-theme' ),
				'icon'            => 'yes',
				'render_template' => 'template-parts/blocks/our-values.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'our values', 'genesis-child-theme' ) )
			)
		);

		// Register a what makes us stand out carousel block.
		acf_register_block_type(
			array(
				'name'            => 'what makes us stand out carousel',
				'title'           => __( 'What makes us stand out - carousel', 'genesis-child-theme' ),
				'description'     => __( 'A custom what makes us stand out carousel block', 'genesis-child-theme' ),
				'icon'            => 'star-filled',
				'render_template' => 'template-parts/blocks/what-makes-us-stand-out-carousel.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'what makes us stand out', 'genesis-child-theme' ), __( 'what makes us stand out carousel', 'genesis-child-theme' ) )
			)
		);

		// Register a csr accordion block.
		acf_register_block_type(
			array(
				'name'            => 'csr accordion',
				'title'           => __( 'CSR Accordion', 'genesis-child-theme' ),
				'description'     => __( 'A custom csr accordion block', 'genesis-child-theme' ),
				'icon'            => 'editor-help',
				'render_template' => 'template-parts/blocks/csr-accordion.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'csr accordion', 'genesis-child-theme' ) )
			)
		);

		// Register a how we can help block.
		acf_register_block_type(
			array(
				'name'            => 'how we can help',
				'title'           => __( 'How we can help', 'genesis-child-theme' ),
				'description'     => __( 'A custom how we can help block', 'genesis-child-theme' ),
				'icon'            => 'editor-help',
				'render_template' => 'template-parts/blocks/how-we-can-help.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'how we can help', 'genesis-child-theme' ) )
			)
		);

		// Register services grid block.
		acf_register_block_type(
			array(
				'name'            => 'services grid',
				'title'           => __( 'Services Grid', 'genesis-child-theme' ),
				'description'     => __( 'A custom services grid block', 'genesis-child-theme' ),
				'icon'            => 'editor-help',
				'render_template' => 'template-parts/blocks/services-grid.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'services', 'genesis-child-theme' ) )
			)
		);

		// Register a services block.
		acf_register_block_type(
			array(
				'name'            => 'services',
				'title'           => __( 'Services', 'genesis-child-theme' ),
				'description'     => __( 'A custom services block', 'genesis-child-theme' ),
				'icon'            => 'index-card',
				'render_template' => 'template-parts/blocks/services.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'services', 'genesis-child-theme' ) )
			)
		);
		
		// Register a single service block.
		acf_register_block_type(
			array(
				'name'            => 'single service',
				'title'           => __( 'Single Service', 'genesis-child-theme' ),
				'description'     => __( 'A custom single service block', 'genesis-child-theme' ),
				'icon'            => 'index-card',
				'render_template' => 'template-parts/blocks/single-service.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'service', 'genesis-child-theme' ) )
			)
		);
			// Register a Pronounced block.
		acf_register_block_type(
			array(
				'name'            => 'pronounced',
				'title'           => __( 'Pronounced', 'genesis-child-theme' ),
				'description'     => __( 'A custom Pronounced block', 'genesis-child-theme' ),
				'icon'            => 'index-card',
				'render_template' => 'template-parts/blocks/pronounced.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'pronounced', 'genesis-child-theme' ) )
			)
		);
		acf_register_block_type(
			array(
				'name'            => 'csr',
				'title'           => __( 'CSR', 'genesis-child-theme' ),
				'description'     => __( 'A custom CSR block', 'genesis-child-theme' ),
				'icon'            => 'index-card',
				'render_template' => 'template-parts/blocks/csr.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'csr', 'genesis-child-theme' ) )
			)
		);
		// Register an our fees block.
		acf_register_block_type(
			array(
				'name'            => 'our fees',
				'title'           => __( 'Our fees', 'genesis-child-theme' ),
				'description'     => __( 'A custom our fees block', 'genesis-child-theme' ),
				'icon'            => 'thumbs-up',
				'render_template' => 'template-parts/blocks/our-fees.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'our fees', 'genesis-child-theme' ) )
			)
		);

		// Register a contact block with photos.
		acf_register_block_type(
			array(
				'name'            => 'contact with photos',
				'title'           => __( 'Contact with photos', 'genesis-child-theme' ),
				'description'     => __( 'A custom contact block', 'genesis-child-theme' ),
				'icon'            => 'email',
				'render_template' => 'template-parts/blocks/contact_with_photos.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'contact with photos', 'genesis-child-theme' ) )
			)
		);

		// Register a legal notice block.
		acf_register_block_type(
			array(
				'name'            => 'legal notice',
				'title'           => __( 'Legal notice', 'genesis-child-theme' ),
				'description'     => __( 'A custom legal notice block', 'genesis-child-theme' ),
				'icon'            => 'editor-alignleft',
				'render_template' => 'template-parts/blocks/legal-notice.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'legal notice', 'genesis-child-theme' ) )
			)
		);

		// Register a rankings block.
		acf_register_block_type(
			array(
				'name'            => 'rankings',
				'title'           => __( 'Rankings', 'genesis-child-theme' ),
				'description'     => __( 'A custom rankings block', 'genesis-child-theme' ),
				'icon'            => 'awards',
				'render_template' => 'template-parts/blocks/rankings.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'rankings', 'genesis-child-theme' ) )
			)
		);

		// Register a privacy policy block.
		acf_register_block_type(
			array(
				'name'            => 'privacy policy',
				'title'           => __( 'Privacy policy', 'genesis-child-theme' ),
				'description'     => __( 'A custom privacy policy block', 'genesis-child-theme' ),
				'icon'            => 'editor-ol',
				'render_template' => 'template-parts/blocks/privacy-policy.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'privacy policy', 'genesis-child-theme' ) )
			)
		);

		// Register a slider with news block.
		acf_register_block_type(
			array(
				'name'            => 'slider with news',
				'title'           => __( 'Slider with news', 'genesis-child-theme' ),
				'description'     => __( 'A custom slider with news block', 'genesis-child-theme' ),
				'icon'            => 'images-alt',
				'render_template' => 'template-parts/blocks/slider-with-news.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'slider with news', 'genesis-child-theme' ) )
			)
		);

		// Register an our activity block.
		acf_register_block_type(
			array(
				'name'            => 'our activity',
				'title'           => __( 'Our activity', 'genesis-child-theme' ),
				'description'     => __( 'A custom our activity block', 'genesis-child-theme' ),
				'icon'            => 'editor-ol',
				'render_template' => 'template-parts/blocks/our-activity.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'our activity', 'genesis-child-theme' ) )
			)
		);

		// Register an experience block.
		acf_register_block_type(
			array(
				'name'            => 'experience',
				'title'           => __( 'Experience', 'genesis-child-theme' ),
				'description'     => __( 'A custom experience block', 'genesis-child-theme' ),
				'icon'            => 'editor-ol',
				'render_template' => 'template-parts/blocks/experience.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'experience', 'genesis-child-theme' ) )
			)
		);

		// Register an our clients block.
		acf_register_block_type(
			array(
				'name'            => 'our clients',
				'title'           => __( 'Our clients', 'genesis-child-theme' ),
				'description'     => __( 'A custom our clients block', 'genesis-child-theme' ),
				'icon'            => 'images-alt2',
				'render_template' => 'template-parts/blocks/our-clients.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'our clients', 'genesis-child-theme' ) )
			)
		);

		// Register a they write about us block.
		acf_register_block_type(
			array(
				'name'            => 'they write about us',
				'title'           => __( 'They write about us', 'genesis-child-theme' ),
				'description'     => __( 'A custom they write about us block', 'genesis-child-theme' ),
				'icon'            => 'id',
				'render_template' => 'template-parts/blocks/they-write-about-us.php',
				'category'        => 'genesis-child-theme',
				'mode'            => 'preview',
				'align'           => 'full',
				'keywords'        => array( __( 'they write about us', 'genesis-child-theme' ) )
			)
		);

	}

	/**
	 * Registered custom block category.
	 *
	 * @param array  $categories .
	 * @param object $post .
	 * @return array
	 */
	public function block_categories( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'genesis-child-theme',
					'title' => __( 'genesis-child-theme', 'genesis-child-theme' ),
					'icon'  => 'admin-site-alt3',
				),
			)
		);
	}

	/**
	 * Automatic saving of the json file with configuration of acf fields on the plugin side.
	 *
	 * @param string $path .
	 * @return string
	 */
	public function acf_json_save_point( $path ) {
		// update path.
		$path = get_stylesheet_directory() . '/acf';

		return $path;
	}

	/**
	 * Loading changes from json file to sync.
	 *
	 * @param string $paths .
	 * @return string|array
	 */
	public function acf_json_load_point( $paths ) {
		// remove original path (optional).
		unset( $paths[0] );

		// append path.
		$paths[] = get_stylesheet_directory() . '/acf';

		return $paths;
	}

	/**
	 * ACF Options Pages.
	 */
	public function acf_options_page() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page(
				array(
					'page_title' => __( 'genesis-child-theme', 'genesis-child-theme' ),
					'menu_title' => __( 'genesis-child-theme', 'genesis-child-theme' ),
					'menu_slug'  => 'theme-general-settings',
					'capability' => 'edit_posts',
					'redirect'   => false,
				)
			);
		}
	}

	/**
	 * ACF Custom image sizes.
	 */
	public function acf_custom_image_sizes() {
		if ( function_exists( 'add_image_size' ) ) { 
			add_image_size('member_photo', 384, 406, true);
			add_image_size('horizontal_medium', 666, 404, true);
			add_image_size('letter_image', 335, 245, false);
			add_image_size('vertical_medium', 354, 430, true);
			add_image_size('ranking_photo', 388, 560, true);
			add_image_size('client_logo', 240, 192, true);
			add_image_size('they_write_about_us_photo', 234, 234, true);
			add_image_size('csr_horizontal', 800, 'auto', true);
			add_image_size('autowidth', 'auto', 'auto', true);
	   }
	}
}

new ACF();
