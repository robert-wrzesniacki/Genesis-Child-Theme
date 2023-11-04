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
 * Page Header structure and content.
 */
class Header {
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
		remove_all_actions( 'genesis_header' );
		remove_all_actions( 'genesis_after_header' );
		add_action( 'genesis_header', array( $this, 'page_header' ) );
		add_action('wp_head', array( $this, 'my_analytics' ));
	}

	/**
	 * Page Header.
	 */
	public function page_header() {
		if ( ! function_exists( 'get_field' ) ) {
			return null;
		}
		$page_logo = get_field( 'genesis-child-theme_logo', 'option' );
		$size      = 'full';
		?>
		<header class="container-fluid header-container">
			<div class="row top-header-row">
				<div class="col-12 top-header-col">
					<div class="menu-cities-container">
					<?php
					wp_nav_menu(
						array(
							'menu'       => '5',
							'menu_class' => 'menu-cities',
						)
					);
					?>
					</div>
				</div>
			</div>
			<div class="row logo-nav-row">
				<div class="col-9 col-lg-3 logo-col">
					<a href="<?php echo esc_url( get_home_url() ); ?>">
						<?php
						if ( $page_logo ) {
							echo wp_get_attachment_image( $page_logo, $size );
						}
						?>
					</a>
				</div>
				<div class="col-3 col-lg-9 nav-col">
					<div class="menu-bar" id ="menu-bar">
						<div id="bar1" class="bar"></div>
						<div id="bar2" class="bar"></div>
						<div id="bar3" class="bar"></div>
					</div>
					<div class="header-main-nav">
					<?php
					wp_nav_menu(
						array(
							'menu'       => '2',
							'menu_class' => 'menu-main',
						)
					);
					?>
					</div>
				</div>
			</div>
		</header>
		<?php
	}

	public function my_analytics() {
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176595731-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-176595731-1');
	</script>
	<?php
	}
}
