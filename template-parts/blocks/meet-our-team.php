<?php
/**
 * Superpaczka
 *
 * @package Superpaczka
 * @author  InspireLabs
 * @link    https://inspirelabs.pl/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};
/**
 * Our Meet Our Team Block Template.
 */
?>

<div class="container-fluid section-container team-members-container">
	<div class="row ">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'meet_our_team_title' ); ?></h2>
		</div>
		<div class="col-12 swiper-navigation-col">
			<div class="swiper-navigation-container">
				<div class="swiper-meet-our-team-button-prev"></div>
				<div class="swiper-meet-our-team-pagination"></div>
				<div class="swiper-meet-our-team-button-next"></div>
			</div>
		</div>
		<div class="col-12">
			<div class="swiper-container swiper-meet-our-team">
				
				<div class="swiper-wrapper">
				<?php
				wp_reset_query();
				$args = array(
					'post_type' 	 => 'team-member',
					'orderby'		 => 'date',
					'order'			 => 'ASC',
					'posts_per_page' => -1,
				);

				$loop = new \WP_Query( $args );  ?>
				<?php
				while( $loop->have_posts() ) : $loop->the_post(); 
				$post_id = get_the_ID();
				?>
				<div class="swiper-slide">
					<div class="swiper-member-container">
						<div class="member-image">
							<?php
								$image = get_field( 'member_photo', $post_id );
								$size  = 'member_photo';
							if ( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
							<div class="member-overlay"></div>
							<a class="view-more-button" href=<?php echo get_permalink(); ?>><?php the_field( 'view_more_button' ); ?></a>
						</div>
						<div class="swiper-member-data">
							<h4 class="member-name"><?php echo get_the_title(); ?></h4>
							<h5 class="member-position uppercase-text"><?php the_field( 'member_position', $post_id ); ?></h5>
						</div>
					</div>
				</div>
				<?php
				endwhile;
				?>
				</div>
			</div><!--end of swiper container-->
		</div>
	</div>
</div>