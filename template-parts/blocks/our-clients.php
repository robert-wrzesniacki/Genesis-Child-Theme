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
 * Our Our Clients Template.
 */
?>

<div class="container-fluid section-container our-clients-container">
<div class="row ">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'our_clients_title' ); ?></h2>
		</div>
		<div class="col-12 swiper-navigation-col">
			<div class="swiper-navigation-container">
				<div class="swiper-our-clients-button-prev"></div>
				<div class="swiper-our-clients-pagination"></div>
				<div class="swiper-our-clients-button-next"></div>
			</div>
		</div>
		<div class="col-12">
		<?php if ( have_rows( 'our_clients_logos' ) ) : ?>
			<div class="swiper-container swiper-our-clients">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'our_clients_logos' ) ) :
						the_row(); 
						?>
					<div class="swiper-slide">
						<?php
							$image = get_sub_field( 'logo');
							$size  = 'client_logo';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					<?php endwhile; ?>
				</div>
			</div><!--end of swiper container-->
		<?php endif; ?>
		</div>
	</div>
</div>