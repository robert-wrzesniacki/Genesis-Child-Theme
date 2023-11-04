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
 * Single Post template.
 */
class Post_Single extends Page_Template {
	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->init_hooks();
	}

	/**
	 * Init Hooks.
	 */
	public function init_hooks() {
		remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
		remove_action( 'genesis_entry_content', 'genesis_do_post_content', 10 );
		remove_all_actions( 'genesis_after_entry' );
		remove_all_actions( 'genesis_entry_footer' );
		add_action( 'genesis_entry_content', array( $this, 'page_wrapper_start' ), 10 );
		add_action( 'genesis_entry_content', array( $this, 'post_content' ), 15 );
		add_action( 'genesis_entry_content', array( $this, 'page_wrapper_end' ), 20 );
	}

	/**
	 * Content page wrapper start.
	 */
	public function page_wrapper_start() {
		?>
		<div class="container-fluid section-container single-post-container">
		<?php
	}

	/**
	 * Content.
	 */
	public function post_content() {
		?>
		<div class="row">
			<div class="col-12">
				<h1 class="section-title genesis-child-theme-post-title">
					<?php echo esc_html( get_the_title() ); ?>
				</h1>
				<div class="genesis-child-theme-post-img">
					<?php the_post_thumbnail( 'single-post-image' ); ?>
				</div>
				<div class="genesis-child-theme-post-conatiner">
					<p class="genesis-child-theme-post-date">
						<?php echo esc_html( get_the_date( 'd. m. Y' ) ); ?>
					</p>
					<div class="genesis-child-theme-post-content">
						<?php the_content(); ?>
					</div>
					<div class="genesis-child-theme-single-post-nav-container">
						<?php previous_post_link('%link', '<span class="genesis-child-theme-single-post-nav prev">previous</span>'); ?>
						<a href ="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php esc_html_e( 'News & insights site', 'genesis-child-theme' ); ?></a>
						<?php next_post_link('%link', '<span class="genesis-child-theme-single-post-nav next">next</span>'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Content page wrapper end.
	 */
	public function page_wrapper_end() {
		?>
		</div>
		<?php
	}
}