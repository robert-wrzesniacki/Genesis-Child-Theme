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

		<div class="services-grid-col">
			<div class="services-grid-single-service-content">
				<div class="services-grid-single-service-img">
						<?php 
							$image = get_sub_field( 'photo' );
							$size = 'post-image-archive';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</div>
				<div>
					<h4 class="services-grid-single-title"><?php the_sub_field( 'title' ); ?></h4>
				</div>
				<div class="services-grid-single-text"><?php the_sub_field( 'text' ); ?></div>
			</div>
			<div class="services-grid-single-service-link">
				<a href="<?php the_sub_field( 'link' ); ?>"><?php esc_html_e( 'Read more', 'genesis-child-theme' ); ?></a>
			</div>
		</div>
		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>