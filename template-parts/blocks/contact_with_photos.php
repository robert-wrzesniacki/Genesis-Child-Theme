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
 * Our Contact With Photos Template.
 */
?>

<div class="container-fluid section-container contact-with-photos-container">
	<div class="row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'contact_with_photos_title' ); ?></h1>
		</div>
		<div class="col-12 col-sm-6 col-lg-6 contact-data-col contact-data-col-2">
			<div class="contact-lets-be-in-touch">
				<h5 class="uppercase-text"><?php the_field( 'contact_with_photos_social_media_title' ); ?></h5>
				<a class="contact-mail" href="mailto:<?php the_field( 'contact_with_photos_email_address' ); ?>"><?php the_field( 'contact_with_photos_email_address' ); ?></a>
				<a class="contact-linkedin" href="<?php the_field( 'contact_with_photos_linkedin_link' ); ?>" target="_blank"></a>
				<a class="contact-fb" href="<?php the_field( 'contact_with_photos_fb_link' ); ?>" target="_blank"></a>
				<a class="contact-twitter" href="<?php the_field( 'contact_with_photos_twitter_link' ); ?>" target="_blank"></a>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-6 contact-data-col contact-data-col-2">
			<div class="contact-whats-more">
				<div class="contact-whats-more-inner">
					<h5 class="uppercase-text"><?php the_field( 'contact_with_photos_whats_more' ); ?></h5>
					<h6><?php the_field( 'contact_with_photos_check_also' ); ?></h6>
					<a class="uppercase-with-arrow-link " href="<?php the_field( 'contact_with_photos_news_insights_link' ); ?>"><?php the_field( 'contact_with_photos_news_insights_text' ); ?></a>
				</div>
			</div>
		</div>
		
		<?php if ( have_rows( 'contact_with_photos_data' ) ) : ?>
		<?php while ( have_rows( 'contact_with_photos_data' ) ) : the_row(); ?>
		
		<div class="col-12 col-sm-6 col-lg-3 contact-data-col">
			<?php 
				$image = get_sub_field( 'contact_photo' );
				$size = 'contact_photo';
			?>
			<div class="contact-data-inner" style="background-image: url(<?php the_sub_field('contact_photo'); ?>);">
				<h5 class="uppercase-text"><?php the_sub_field( 'contact_country_name' ); ?></h5>
				<div class="contact-details"><?php the_sub_field( 'contact_details' ); ?></div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</div>