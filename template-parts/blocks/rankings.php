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
 * Our Rankings Template.
 */
?>

<div class="container-fluid section-container rankings-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'rankings_title' ); ?></h2>
		</div>
		<?php if ( have_rows( 'rankings' ) ) : 
		$i = 1;
		while ( have_rows( 'rankings' ) ) :
			the_row();
			?>
		<div class="col-12 col-lg-6 rankings-col">
			<div class="rankings-col-inner">
				<?php 
					$link = get_sub_field( 'ranking_see_details_link' );
					$image = get_sub_field( 'photo' );
					$size = 'ranking_photo'; ?>
				<div id="img-<?php echo $i; ?>" class="rankings-image">
				<?php if ( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</div>
				<div class="rankings-text">
					<h4><?php the_sub_field( 'title' ); ?></h4>
					<p><?php the_sub_field( 'description' ); ?></p>
					<?php
					if ( $link ) {?>
					<a href="<?php echo $link; ?>" target="_blank" class="uppercase-with-arrow-link"><?php the_sub_field( 'see_details_text' ); ?></a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<?php if ( have_rows( 'rankings' ) ) : 
		$j = 1;
		while ( have_rows( 'rankings' ) ) :
			the_row();
			?>
		<div class="rankings-modal-container" id="img-<?php echo $j; ?>-modal">
			<?php 
			$image = get_sub_field( 'photo' );
			$size = 'ranking_photo'; ?>
			<div class="rankings-img-modal">
				<span class="rankings-close-img-modal"></span>
				<?php if ( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
		</div>
		<?php $j++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
</div>