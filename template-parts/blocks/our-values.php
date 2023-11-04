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
 * Our Our Values Template.
 */
?>

<div class="container-fluid section-container our-values-container" id="our-values">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'our_values_title' ); ?></h2>
		</div>
		<div class="col-12 col-md-6 our-values-text">
			<?php the_field( 'our_values_text' ); ?>
		</div>
		<div class="col-12 col-md-6 our-values-img">
			<div class="our-values-img-inner">
				<div class="img-frame">
				</div>
				<?php
					$image = get_field( 'our_values_img' );
					$size  = 'horizontal_medium';
				if ( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
		</div>
	</div>
</div>