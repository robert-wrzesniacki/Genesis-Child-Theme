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
 * Our They Write About Us Template.
 */
?>

<div class="container-fluid section-container they-write-about-us-carousel-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'they_write_about_us_title' ); ?></h2>
		</div>
		<div class="col-12 swiper-navigation-col">
			<div class="swiper-navigation-container">
				<div class="swiper-they-write-about-us-button-prev"></div>
				<div class="swiper-they-write-about-us-pagination"></div>
    			<div class="swiper-they-write-about-us-button-next"></div>
			</div>
		</div>
		<div class="col-12">
			<?php if ( have_rows( 'they_write_about_us_carousel_item' ) ) : ?>
			<div class="swiper-container swiper-they-write-about-us">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'they_write_about_us_carousel_item' ) ) :
						the_row(); 
						?>
					<div class="swiper-slide">
						<div class="swiper-they-write-about-us-slide-inner">
							<div class="swiper-they-write-about-us-img">
							<?php
								$image = get_sub_field( 'photo');
								$size  = 'they_write_about_us_photo';
							if ( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
							</div>
							<div class="swiper-they-write-about-us-text">
								<h4><?php the_sub_field( 'title' ); ?></h4>
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
