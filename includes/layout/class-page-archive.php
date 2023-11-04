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
 * Archive Page template.
 */
class Page_Archive {

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
		remove_action( 'genesis_entry_header', 'genesis_do_post_title', 10 );
		remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
		remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
		remove_action( 'genesis_entry_content', 'genesis_do_post_content', 10 );
		remove_all_actions( 'genesis_after_entry' );
		remove_all_actions( 'genesis_entry_footer' );
		add_action( 'genesis_before_loop', array( $this, 'blog_wrapper_start' ), 20 );
		add_action( 'genesis_before_loop', array( $this, 'blog_page_title' ), 25 );
		add_action( 'genesis_before_loop', array( $this, 'sidebar_content' ), 30 );
		add_action( 'genesis_loop', array( $this, 'posts_wrapper_start' ), 6 );
		add_action( 'genesis_entry_content', array( $this, 'post_content' ), 15 );
		add_action( 'genesis_after_loop', array( $this, 'posts_wrapper_end' ), 5 );
		add_action( 'genesis_after_loop', array( $this, 'blog_wrapper_end' ), 15 );
	}


	/**
	 * Content wrapper start.
	 */
	public function blog_wrapper_start() {
		?>
		<div class="container-fluid section-container blog-container">
			<div class="row">
		<?php
	}

	/**
	 * Title
	 */
	public function blog_page_title() {
		?>
		<div class="col-12">
			<?php 
			$our_title = get_the_title( get_option('page_for_posts', true) );
			echo '<h1 class="section-title">' .$our_title. '</h1>';
			?>
		</div>
		<?php
	}

	/**
	 * Sidebar.
	 */
	public function sidebar_content() {
		?>
		<div class="col-12 col-md-3 genesis-child-theme-sidebar-container">
			<?php do_action( 'genesis_sidebar' ); ?>
		</div>
		<?php
	}

	/**
	 * Posts wrapper start.
	 */
	public function posts_wrapper_start() {
		?>
		<div class="col-12 col-md-9 genesis-child-theme-posts-container">
		<?php
	}

	/**
	 * Content.
	 */
	public function post_content() {
		?>
		<div class="genesis-child-theme-post-container">
			
			<div class="genesis-child-theme-post-img" >
			<a href = "<?php echo esc_html( get_permalink() ); ?>" class="genesis-child-theme-post-link">
				<?php 
				global $post;
				echo get_the_post_thumbnail( $post->ID, 'single-post-image' ); 
				?>
				<p class="genesis-child-theme-post-date">
					<?php echo esc_html( get_the_date( 'd. m. Y' ) ); ?>
				</p>
				</a>
			</div>
		
			
			<div class="genesis-child-theme-post-text">
				<?php
				global $post;
				$categories = get_the_category( $post->ID );
				?>
				<?php foreach ( $categories as $category ) : ?>
				<h4 class="genesis-child-theme-post-category"><a href = "<?php echo esc_html( get_permalink() ); ?>"><?php echo esc_html( $category->cat_name ); ?></a></h4>
				<?php endforeach; ?>
				<p class="genesis-child-theme-post-title">
				<a href = "<?php echo esc_html( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
				</p>
				<a href = "<?php echo esc_html( get_permalink() ); ?>" class="genesis-child-theme-post-read-more uppercase-with-arrow-link"><?php esc_html_e( 'Read more', 'genesis-child-theme' ); ?></a>
				</a>
			</div>
		</div>
		<?php
	}

	/**
	 * Posts wrapper end.
	 */
	public function posts_wrapper_end() {
		?>
		</div>
		<?php
	}

	/**
	 * Content wrapper end.
	 */
	public function blog_wrapper_end() {
		?>
			</div>
		</div>
		<?php
	}
}
