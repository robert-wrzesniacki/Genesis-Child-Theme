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

<div class="container-fluid section-container how-we-can-help-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'how_we_can_help_title' ); ?></h2>
		</div>
		<?php if ( have_rows( 'how_we_can_help_services' ) ) : 
		$i=1;
		while ( have_rows( 'how_we_can_help_services' ) ) :
			the_row();
			
			?>
		<div class="col-12 how-we-can-help-col how-we-can-help-col-<?php echo $i; ?>">
			<div class="how-we-can-help-single-service">
				<div class="how-we-can-help-title-container">
					<h4 class="darkgray how-we-can-help-title"><?php the_sub_field( 'title' ); ?></h4>
					<span class="read-more-help"></span>
					<h4 class="darkgray read-more-help"><?php esc_html_e( 'Read more', 'genesis-child-theme' ); ?></h4>
				</div>
				<div class="how-we-can-help-content-container">
					<div class="how-we-can-help-single-img">
						<?php 
							$image = get_sub_field( 'photo' );
							$size = 'vertical_medium';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					<div class="how-we-can-help-single-desc-1"><?php the_sub_field( 'description_1' ); ?></div>
					<div class="how-we-can-help-single-desc-2"><?php the_sub_field( 'description_2' ); ?></div>
					<div class="how-can-we-help-single-desc-container show-on-lg-up">
						<div class="how-we-can-help-single-desc-1 show-on-lg-up"><?php the_sub_field( 'description_1' ); ?></div>
						<div class="how-we-can-help-single-desc-2 show-on-lg-up"><?php the_sub_field( 'description_2' ); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>