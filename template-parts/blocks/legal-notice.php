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
 * Our Legal Notice Template.
 */
?>

<div class="container-fluid section-container legal-notice-container">
	<div class="row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'legal_notice_title' ); ?></h2>
		</div>
		<div class="col-12 legal-notice-text-col">
			<?php the_field( 'legal_notice_text' ); ?>
		</div>
	</div>
</div>