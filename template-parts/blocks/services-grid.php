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
 * Our How We Can Help Template.
 */
?>

<div class="container-fluid section-container services-grid-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'services_grid_title' ); ?></h2>
		</div>
		<div class="services-grid">
		<?php if ( have_rows( 'grid_services' ) ) : 
		$i=1;
		while ( have_rows( 'grid_services' ) ) :
			the_row();
			
			?>


		<div class="col-12 services-grid-col">
			<div class="services-grid-single-service">
				<div class="services-grid-title-container">
					<h3 class="services-grid-title"><?php the_sub_field( 'title' ); ?></h3>
				</div>
				<div class="services-grid-content-container">
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 services-grid-single-img">
						<?php 
							$image = get_sub_field( 'photo' );
							$size = 'post-image-archive';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 services-grid-single-content">
						<div class="services-grid-single-text"><?php the_sub_field( 'text' ); ?></div>
						<div class="services-grid-single-service-link">
							<a class="" href="<?php the_sub_field( 'link' ); ?>"><?php esc_html_e( 'Read more', 'genesis-child-theme' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>