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
 * Our Privacy Policy Template.
 */
?>

<div class="container-fluid section-container privacy-policy-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'privacy_policy_title' ); ?></h2>
		</div>
		<div class="col-12 privacy-policy-description-col">
			<p><?php the_field( 'privacy_policy_description' ); ?></p>
		</div>
	</div>
	<div class="row privacy-policy-chapters-content-row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-3 privacy-policy-chapters-col">
		<?php if ( have_rows( 'privacy_policy_chapters' ) ) : ?>
		<?php $i=1; ?>
		<?php while ( have_rows( 'privacy_policy_chapters' ) ) : the_row(); ?>
			<div class="privacy-policy-chapter-container privacy-policy-chapter-<?php echo $i; ?>" id="chapter-<?php echo $i; ?>">
				<h5 class="chapter-number"><?php echo $i; ?>.</h5>
				<h5 class="chapter-title"><?php the_sub_field( 'chapter_title' ); ?></h5>
			</div>
		<?php $i++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div class="col-12 col-md-7 col-lg-8 col-xl-9 privacy-policy-content-col">
		<?php if ( have_rows( 'privacy_policy_chapters' ) ) : ?>
		<?php $j=1; ?>
		<?php while ( have_rows( 'privacy_policy_chapters' ) ) : the_row(); ?>
			<div class="privacy-policy-content-container privacy-policy-content-<?php echo $j; ?>" id="chapter-<?php echo $j; ?>-content">
				<?php the_sub_field( 'chapter_content' ); ?>
				<div class="privacy-policy-pagination">
					<div class="privacy-policy-pagination-single privacy-policy-prev-chapter"><p><?php esc_html_e( 'Previous chapter', 'genesis-child-theme' ); ?></p></div>
					<div class="privacy-policy-pagination-single privacy-policy-next-chapter"><p><?php esc_html_e( 'Next chapter', 'genesis-child-theme' ); ?></p></div>
				</div>
			</div>
			
		<?php $j++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>