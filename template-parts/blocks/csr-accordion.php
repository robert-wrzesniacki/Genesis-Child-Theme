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
 * Our CSR Accordion Template.
 */
?>

<div class="container-fluid section-container csr-accordion-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'csr_accordion_title' ); ?></h2>
		</div>
		<?php if ( have_rows( 'csr_accordion_services' ) ) : 
		$i=1;
		while ( have_rows( 'csr_accordion_services' ) ) :
			the_row();
			
			?>
		<div class="col-12 csr-accordion-col csr-accordion-col-<?php echo $i; ?>">
			<div class="csr-accordion-single-service">
				<div class="csr-accordion-title-container">
					<h4 class="darkgray csr-accordion-title"><?php the_sub_field( 'title' ); ?></h4>
					<span class="read-more-help"></span>
					<h4 class="darkgray read-more-help"><?php esc_html_e( 'Read more', 'genesis-child-theme' ); ?></h4>
				</div>
				<div class="csr-accordion-content-container">
					<div class="csr-accordion-single-img">
						<?php 
							$image = get_sub_field( 'photo' );
							$size = 'autowidth';
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					<div class="csr-accordion-single-desc-1"><?php the_sub_field( 'description_1' ); ?></div>
					<div class="csr-accordion-single-desc-2"><?php the_sub_field( 'description_2' ); ?></div>
					<div class="csr-accordion-single-desc-container show-on-lg-up">
						<div class="csr-accordion-single-desc-1 show-on-lg-up"><?php the_sub_field( 'description_1' ); ?></div>
						<div class="csr-accordion-single-desc-2 show-on-lg-up"><?php the_sub_field( 'description_2' ); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>