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
 * Our Our Fees Template.
 */
?>

<div class="container-fluid section-container our-fees-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'our_fees_title' ); ?></h2>
		</div>
		<div class="col-12 col-md-6 our-fees-text">
			<?php the_field( 'our_fees_text' ); ?>
			<a href="<?php the_field( 'our_fees_link_url' ); ?>" class="genesis-child-theme-link-with-arrow"><?php the_field( 'our_fees_link_text' ); ?></a>
		</div>
		<div class="col-12 col-md-6 our-fees-img">
			<div class="our-fees-img-inner">
				<div class="img-frame">
				</div>
				<?php
					$image = get_field( 'our_fees_img' );
					$size  = 'horizontal_medium';
				if ( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
		</div>
	</div>
</div>