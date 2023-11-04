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
 * pronounced Template.
 */
?>


<div class="container-fluid section-container pronounced-container">
	<div class="row pronounced-row">
		<div class="col-12">
			<h2 class="section-title"><?php the_field( 'pronounced_title' ); ?></h2>
		</div>
			<div class="col-12 col-lg-6 pronounced-video">
				<?php 

				$video_mp4 =  get_field('pronounced_mp4_file'); // MP4 Field Name
				$video_poster = get_field('pronounced_poster'); // Poster Field Name
				$attr =  array(
					'mp4'      => $video_mp4,
					'poster'   => $video_poster,
					);
				echo wp_video_shortcode(  $attr );
				
				?>
			</div>
			
			<div class="col-12 col-lg-6 pronounced-description">
				<?php the_field( 'pronounced_description' ); ?>
			</div>
			
	</div>
</div>