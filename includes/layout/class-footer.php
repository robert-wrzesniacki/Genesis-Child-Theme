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
 * Page Footer structure and content.
 */
class Footer {
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
		remove_all_actions( 'genesis_footer' );
		add_action( 'genesis_footer', array( $this, 'page_footer' ) );
	}
	/**
	 * Page footer.
	 */
	public function page_footer() {
		if ( ! function_exists( 'get_field' ) ) {
			return null;
		}
		?>
		<footer>
			<div class="container-fluid footer-container">
				<div class="row footer-row">
					<div class="col-12 footer-nav-col">
						<div class="menu-footer-container">
							<nav>
								<?php
								wp_nav_menu(
									array(
										'menu'       => '4',
										'menu_class' => 'menu-footer',
									)
								);
								?>
							</nav>
						</div>
					</div>
					<div class="col-12 footer-copyrights-col">
					<p>	&copy; <?php echo date("Y"); ?> <a href="<?php echo esc_url( get_home_url() ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></p>
					</div>
				</div>
			</div>
		</footer>
		<?php
	}
}
