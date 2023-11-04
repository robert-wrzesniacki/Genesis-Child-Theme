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
 * Our Services Template.
 */
?>

<div class="container-fluid section-container services-container">
	<div class="row services-row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'services_title' ); ?></h1>
		</div>
		<div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 services-description">
			<?php the_field( 'services_description_1' ); ?>
		</div>
		<div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 services-img">
			<?php 
				$image = get_field( 'services_img' );
				$size = 'member_photo';
			if ( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
		</div>
		<div class="col-12 col-sm-12 col-lg-8 col-xl-9 services-description">
			<?php the_field( 'services_description_2' ); ?>
		</div>
		<div class="col-12 services-text-in-the-frame">
			<p><?php the_field( 'services_text_in_the_frame' ); ?></p>
		</div>
	</div>
</div>