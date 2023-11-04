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
 * Our Service Template.
 */
?>

<div class="container-fluid section-container single-service-container">
	<div class="row service-row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'service_title' ); ?></h1>
		</div>
	</div>
	<div class="single-service-flex">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9 single-service-text">
			<?php the_field( 'service_text' ); ?>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 single-service-img">
			<?php 
				$image = get_field( 'service_img' );
				$size = 'member_photo';
			if ( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
		</div>
	</div>
</div>