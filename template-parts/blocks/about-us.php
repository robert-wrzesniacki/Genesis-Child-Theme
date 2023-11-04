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
 * Our About Us Template.
 */
?>

<div class="container-fluid section-container about-us-container">
	<div class="row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'about_us_title' ); ?></h1>
		</div>
		<?php
		$experience_link = get_field( 'about_us_experience_link' );
		$recognition_link = get_field( 'about_us_recognition_link' );
		$international_link = get_field( 'about_us_international_link' );
		$global_reach_link = get_field( 'about_us_global_reach_link' );
		$help_link = get_field( 'about_us_help_link' );
		$contact_link = get_field( 'about_us_contact_link' );
		$values_link = get_field( 'about_us_values_link' );
		?>
		<div class="col-12 col-lg-6 mh-100 special-padding-right">
			<div class="row mh-100">
				<div class="col-12 col-sm-6 about-us-col">
					<?php if ( $experience_link ) { ?>
					<a href="<?php echo $experience_link; ?>">
					<?php } ?>
						<div class="about-us-card experience">
							<?php the_field( 'about_us_experience_text' ); ?>
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_experience_link_text' ); ?></p>
						</div>
					<?php if ( $experience_link ) { ?>
					</a>
					<?php } ?>
				</div>
				<div class="col-12 col-sm-6 about-us-col">
					<div class="about-us-tile">
						<div class="about-us-card face about-us-bg-img recognition" style="background-image: url(<?php the_field( 'about_us_recognition_img' ); ?>);">
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_recognition_link_text' ); ?></p>
						</div>
						<?php if ( $recognition_link ) { ?>
						<a href="<?php echo $recognition_link; ?>">
						<?php } ?>
						<div class="about-us-card back recognition">
							<?php the_field( 'about_us_recognition_text_hover' ); ?>
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_recognition_link_text_hover' ); ?></p>
						</div>
						<?php if ( $recognition_link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-12 about-us-col">
					<div class="about-us-tile">
						<div class="about-us-card face about-us-bg-img international"  style="background-image: url(<?php the_field( 'about_us_international_img' ); ?>);">
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_international_link_text' ); ?></p>
						</div>
						<?php if ( $international_link ) { ?>
						<a href="<?php echo $international_link; ?>">
						<?php } ?>
						<div class="about-us-card back international">
							<?php the_field( 'about_us_international_text_hover' ); ?>
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_international_link_text_hover' ); ?></p>
						</div>
						<?php if ( $international_link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-12 show-on-lg-up about-us-col">
					<div class="about-us-tile">
						<div class="about-us-card face about-us-bg-img global-reach"  style="background-image: url(<?php the_field( 'about_us_global_reach_img' ); ?>);">
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_global_reach_link_text' ); ?></p>
						</div>
						<?php if ( $global_reach_link ) { ?>
						<a href="<?php echo $global_reach_link; ?>">
						<?php } ?>
						<div class="about-us-card back global-reach">
							<?php the_field( 'about_us_global_reach_text_hover' ); ?>
							<?php the_field( 'about_us_global_reach_link_text_hover' ); ?>
						</div>
						<?php if ( $global_reach_link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6 mh-100 special-padding-left">
			<div class="row mh-100">
				<div class="col-12 about-us-col">
					<?php if ( $help_link ) { ?>
					<a href="<?php echo $help_link; ?>">
					<?php } ?>
					<div class="about-us-card how-can-we-help">
						<?php the_field( 'about_us_help_text' ); ?>
						<p class="uppercase-with-arrow"><?php the_field( 'about_us_help_link_text' ); ?></p>
					</div>
					<?php if ( $help_link ) { ?>
					</a>
					<?php } ?>
				</div>
				<div class="col-12 col-sm-6 about-us-col">
					<?php if ( $contact_link ) { ?>
					<a href="<?php echo $contact_link; ?>">
					<?php } ?>
					<div class="about-us-card contact">
						<?php the_field( 'about_us_contact_text' ); ?>
						<p class="uppercase-with-arrow"><?php the_field( 'about_us_contact_link_text' ); ?></p>
					</div>
					<?php if ( $contact_link ) { ?>
					</a>
					<?php } ?>
				</div>
				<div class="col-12 col-sm-6 about-us-col">
					<?php if ( $values_link ) { ?>
					<a href="<?php echo $values_link; ?>">
					<?php } ?>
					<div class="about-us-card about-us-bg-img our-values" style="background-image: url(<?php the_field( 'about_us_values_img' ); ?>);">
						<?php the_field( 'about_us_values_text' ); ?>
						<p class="uppercase-with-arrow"><?php the_field( 'about_us_values_link_text' ); ?></p>
					</div>
					<?php if ( $values_link ) { ?>
					</a>
					<?php } ?>
				</div>
				<div class="col-12 show-on-lg-down about-us-col">
					<div class="about-us-tile">
						<div class="about-us-card face about-us-bg-img global-reach"  style="background-image: url(<?php the_field( 'about_us_global_reach_img' ); ?>);">
							<p class="uppercase-with-arrow"><?php the_field( 'about_us_global_reach_link_text' ); ?></p>
						</div>
						<?php if ( $global_reach_link ) { ?>
						<a href="<?php echo $global_reach_link; ?>">
						<?php } ?>
						<div class="about-us-card back global-reach">
							<?php the_field( 'about_us_global_reach_text_hover' ); ?>
							<?php the_field( 'about_us_global_reach_link_text_hover' ); ?>
						</div>
						<?php if ( $global_reach_link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>