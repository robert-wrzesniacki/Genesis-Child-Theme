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
 * Single Member Post template.
 */
class Archive_Team_Member extends Page_Template {
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
		remove_action( 'genesis_entry_header', 'genesis_do_post_title', 10 );
		add_action( 'genesis_loop', array( $this, 'archive_team_member_content' ), 15 );
	}
	
	/**
	 * Post Team Member Content.
	 */
	public function archive_team_member_content() {
		if ( ! function_exists( 'get_field' ) ) {
			return null;
		}
		?>
		<div class="container-fluid section-container team-members-container">
			<div class="row">
				<div class="col-12">
					<h1 class="section-title"><?php echo post_type_archive_title( '', false ); ?></h1>
				</div>
				<?php
				
				$args = array(
					'post_type' 	 => 'team-member',
					'orderby'		 => 'date',
					'order'			 => 'ASC',
					'posts_per_page' => -1,
				);

				$loop = new \WP_Query( $args );  ?>
				<?php
			
				while( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<div class="member-container">
						<div class="member-image">
							<?php
								$image = get_field( 'member_photo' );
								$size  = 'member_photo';
							if ( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
							<div class="member-overlay"></div>
							<a class="view-more-button" href=<?php echo get_permalink(); ?>><?php the_field( 'view_more_text' ); ?></a>
						</div>
						<div class="swiper-member-data">
							<h4 class="member-name"><?php echo get_the_title(); ?></h4>
							<h5 class="member-position uppercase-text"><?php the_field( 'member_position' ); ?></h5>
						</div>
					</div>
				</div>
				
				<?php
				endwhile;
				wp_reset_postdata(); 
				?>
			</div>
		</div>
	<?php
	}
}