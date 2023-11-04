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
 * csr Template.
 */
?>

<div class="container-fluid section-container csr-container">
	<div class="row csr-row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'csr_title' ); ?></h1>
		</div>
		<div class="col-12 csr-description">
			<?php the_field( 'csr_description_1' ); ?>
		</div>
		<div class="col-12 csr-description">
			<?php the_field( 'csr_description_2' ); ?>
		</div>
		<div class="col-12 csr-img">
			<?php 
				$image = get_field( 'csr_img' );
				$size = 'csr_horizontal';
			if ( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
		</div>
	</div>
</div>