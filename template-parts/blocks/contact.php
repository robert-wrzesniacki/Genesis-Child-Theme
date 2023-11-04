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
 * Our Contact Template.
 */
?>

<div class="container-fluid section-container contact-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'contact_title' ); ?></h2>
		</div>
		<div class="col-12">
		<div class="col-12 col-sm-6 col-lg-6 contact-data-col conntact-col">
			<div class="contact-data-inner-box contact-box">
				<h5 class="uppercase-text"><?php the_field( 'contact_social_media_title' ); ?></h5>
				<a class="contact-mail" href="mailto:<?php the_field( 'contact_email_address' ); ?>"><?php the_field( 'contact_email_address' ); ?></a>
				<a class="contact-linkedin" href="<?php the_field( 'contact_linkedin_link' ); ?>" target="_blank"></a>
				<a class="contact-fb" href="<?php the_field( 'contact_fb_link' ); ?>" target="_blank"></a>
				<a class="contact-twitter" href="<?php the_field( 'contact_twitter_link' ); ?>" target="_blank"></a>
			</div>
		</div>
		</div>
		<?php if ( have_rows( 'contact_data' ) ) : ?>
		<?php while ( have_rows( 'contact_data' ) ) : the_row(); ?>
		<div class="col-12 col-lg-3 contact-data-col">
			<div class="contact-data-inner">
				<h5 class="uppercase-text"><?php the_sub_field( 'contact_country_name' ); ?></h5>
				<div><?php the_sub_field( 'contact_details' ); ?></div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>