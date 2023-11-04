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
class Post_Team_Member extends Page_Template {
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
		add_action( 'genesis_entry_content', array( $this, 'team_member_content' ), 15 );
	}
	
	/**
	 * Post Team Member Content.
	 */
	public function team_member_content() {
		if ( ! function_exists( 'get_field' ) ) {
			return null;
		}
		?>
		<div class="container-fluid section-container member-container">
			<div class="row">
				<div class="col-12">
					<h1 class="section-title"><?php echo the_title(); ?></h1>
				</div>
				<div class="col-12 col-lg-5 col-xl-4 col-xxl-3">
					<div class="member-img">
						<?php 
						$linkedin = get_field( 'member_linkedin_link');
						$email = get_field( 'member_email' );
						?>
						<?php
							$image = get_field( 'member_photo' );
							$size  = 'member_photo';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						<?php
						$cv = get_field( 'member_cv' );
						if ( $cv ) : ?>
						<div class="member-cv">
							<a href="<?php echo $cv['url']; ?>"><?php the_field( 'member_cv_button' ); ?></a>
						</div>
						<?php endif; ?>
					</div>
					<div class="member-info">
						<div class="member-contact-info member-info-single">
							<h4 class="aquamarine uppercase-text"><?php the_field( 'member_contact_title' ); ?></h4>
							<?php if ($linkedin) : ?>
							<a href="<?php echo $linkedin; ?>" class="contact-linkedin" target="_blank"></a>
							<?php endif; ?>
							<?php if ($email) : ?>
							<a href="mailto:<?php echo $email; ?>" class="contact-email"></a>
							<?php endif; ?>
						</div>
						<div class="member-bar-admissions member-info-single">
							<h4 class="aquamarine uppercase-text"><?php the_field( 'member_bar_admissions_title' ); ?></h4>
							<div class="member-info-list"><?php the_field( 'member_bar_admissions_list' ); ?></div>
						</div>
						<div class="member-achievements member-info-single">
							<h4 class="aquamarine uppercase-text"><?php the_field( 'member_achievements_title' ); ?></h4>
							<div class="member-info-list"><?php the_field( 'member_achievements_list' ); ?></div>
						</div>
						<div class="member-languages member-info-single">
							<h4 class="aquamarine uppercase-text"><?php the_field( 'member_languages_title' ); ?></h4>
							<div class="member-info-list"><?php the_field( 'member_languages_list' ); ?></div>
						</div>
						<?php
						$cv = get_field( 'member_cv' );
						if ( $cv ) : ?>
						<div class="member-cv">
							<a href="<?php echo $cv['url']; ?>"><?php the_field( 'member_cv_button' ); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-12 col-lg-7 col-xl-8 col-xxl-9">
					<h4 class="navy"><?php the_field( 'member_overview_title' ); ?></h4>
					<div class="overview member-description">
						<?php the_field( 'member_overview_content' ); ?>
						<a class="load-more"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></a>
					</div>
					<div class="row">
						<?php 
						$arbitration = get_field( 'member_arbitration_content' );
						$litigation = get_field( 'member_litigation_content' );
						$publications = get_field( 'member_publications_content' );
						$education = get_field( 'member_education_content' );
						?>
						<?php if ( $arbitration ) : ?>
						<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 arbitration-title member-tab">
							<h4 class="navy"><?php the_field( 'member_arbitration_title' ); ?></h4>
						</div>
						<?php endif; ?>
						<?php if ( $litigation ) : ?>
						<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 litigation-title member-tab">
							<h4 class="navy"><?php the_field( 'member_litigation_title' ); ?></h4>
						</div>
						<?php endif; ?>
						<?php if ( $publications ) : ?>
						<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 publications-title member-tab">
							<h4 class="navy"><?php the_field( 'member_publications_title' ); ?></h4>
						</div>
						<?php endif; ?>
						<?php if ( $education) : ?>
						<div class="col-6 col-sm-3 col-lg-4 col-xl-3 education-title member-tab">
							<h4 class="navy"><?php the_field( 'member_education_title' ); ?></h4>
						</div>
						<?php endif; ?>
					</div>
					<div class="row">
						<?php if ( $arbitration ) : ?>
						<div class="col-12 arbitration-content member-description">
							<?php the_field( 'member_arbitration_content' ); ?>
							<a class="load-more"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></a>
						</div>
						<?php endif; ?>
						<?php if ( $litigation ) : ?>
						<div class="col-12 litigation-content member-description">
							<?php the_field( 'member_litigation_content' ); ?>
							<a class="load-more"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></a>
						</div>
						<?php endif; ?>
						<?php if ( $publications ) : ?>
						<div class="col-12 publications-content member-description">
							<?php the_field( 'member_publications_content' ); ?>
							<a class="load-more"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></a>
						</div>
						<?php endif; ?>
						<?php if ( $education) : ?>
						<div class="col-12 education-content member-description">
							<?php the_field( 'member_education_content' ); ?>
							<a class="load-more"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></a>
						</div>
						<?php endif; ?>
					</div>
					<div class="genesis-child-theme-single-post-nav-container">
						<?php previous_post_link('%link', '<span class="genesis-child-theme-single-post-nav prev">previous</span>'); ?>
						<a href ="<?php echo get_post_type_archive_link( 'team-member' ); ?>"><?php esc_html_e( 'Team Site', 'genesis-child-theme' ); ?></a>
						<?php next_post_link('%link', '<span class="genesis-child-theme-single-post-nav next">next</span>'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
}