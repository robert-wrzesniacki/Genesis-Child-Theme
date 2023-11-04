<?php
/**
 * GenesisChildTheme
 *
 * @package GenesisChildTheme
 * @author  Robert Wrześniacki
 * @link    https://raw-code.it
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};
/**
 * Our What Makes Us Stand Out Carousel Template.
 */
?>

<div class="container-fluid section-container standing-out-carousel-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'standing_out_carousel_title' ); ?></h2>
		</div>
		<div class="col-12 swiper-navigation-col">
			<div class="swiper-navigation-container">
				<div class="swiper-standing-out-button-prev"></div>
				<div class="swiper-standing-out-pagination"></div>
    			<div class="swiper-standing-out-button-next"></div>
			</div>
		</div>
		<div class="col-12">
			<?php if ( have_rows( 'standing_out_carousel_item' ) ) : ?>
			<div class="swiper-container swiper-standing-out">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'standing_out_carousel_item' ) ) :
						the_row(); 
						?>
					<div class="swiper-slide">
						<div class="swiper-standing-out-slide-inner">
							<div class="swiper-standing-out-img">
							<?php
								$image = get_sub_field( 'letter_img');
								$size  = 'letter_image';
							if ( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
							</div>
							<div class="swiper-standing-out-text">
								<h3 class="gradient-header"><?php the_sub_field( 'title' ); ?></h3>
								<div class="text"><?php the_sub_field( 'text' ); ?></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
				
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
