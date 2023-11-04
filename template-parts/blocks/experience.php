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
 * Our Experience Template.
 */
?>

<div class="container-fluid section-container experience-container">
	<div class="row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'experience_title' ); ?></h1>
		</div>
	</div>
	<div class="row experience-sections-content-row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-3 experience-sections-col">
			<div class="experience-section-container experience-section-1" id="experience-section-1">
				<h5 class="experience-section-title"><?php the_field( 'geography_title' ); ?></h5>
			</div>
			<div class="experience-section-container experience-section-2" id="experience-section-2">
				<h5 class="experience-section-title plus"><?php the_field( 'type_of_cases_title' ); ?></h5>
				<?php if ( have_rows( 'type_of_cases' ) ) : ?>
				<?php $type = 1;?>
				<div class="wrapper-experience wrapper-experience-section-2">
					<div class="select-wrap experience-section-2-types">
						<ul class="default-option default-option-experience-section-2">
							<li>
								<div class="option">
									<p><?php esc_html_e( 'Select...', 'genesis-child-theme' ); ?></p>
								</div>
							</li>
						</ul>
						<ul class="select-ul select-ul-experience-section-2">
								
						<?php while ( have_rows( 'type_of_cases' ) ) : the_row() ?>
							<li id="experience-section-2-type-<?php echo $type; ?>">
								<div class="option">
									<p><?php the_sub_field( 'type' ); ?></p>
								</div>
							</li>
						<?php $type++; ?>
						<?php endwhile; ?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="experience-section-container experience-section-3" id="experience-section-3">
				<h5 class="experience-section-title plus"><?php the_field( 'industries_title' ); ?></h5>
				<?php if ( have_rows( 'industries' ) ) : ?>
				<?php $type = 1;?>
				<div class="wrapper-experience wrapper-experience-section-3">
					<div class="select-wrap experience-section-3-types">
						<ul class="default-option default-option-experience-section-3">
							<li>
								<div class="option">
									<p><?php esc_html_e( 'Select...', 'genesis-child-theme' ); ?></p>
								</div>
							</li>
						</ul>
						<ul class="select-ul select-ul-experience-section-3">
								
						<?php while ( have_rows( 'industries' ) ) : the_row() ?>
							<li id="experience-section-3-type-<?php echo $type; ?>">
								<div class="option">
									<p><?php the_sub_field( 'type' ); ?></p>
								</div>
							</li>
						<?php $type++; ?>
						<?php endwhile; ?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 col-xl-9 experience-content-col">
			<div class="experience-content-container experience-content-1" id="experience-section-1-content">
				<p class="experience-section-description"><?php the_field( 'geography_description' ); ?></p>
				<div class="geography-map-container">
					<?php 
						$image = get_field( 'geography_map' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					<div class="map-europe map-overlay" id="europe">
					</div>
					<div class="map-europe-img">
					<?php 
						$image = get_field( 'geography_map_europe' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>

					<div class="map-north-america map-overlay" id="north-america">
					</div>
					<div class="map-north-america-img">
					<?php 
						$image = get_field( 'geography_map_north_america' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>
					
					<div class="map-south-america map-overlay" id="south-america">
					</div>
					<div class="map-south-america-img">
					<?php 
						$image = get_field( 'geography_map_south_america' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>
					
					<div class="map-asia map-overlay" id="asia">
					</div>
					<div class="map-asia-img">
					<?php 
						$image = get_field( 'geography_map_asia' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>

					<div class="map-africa map-overlay" id="africa">
					</div>
					<div class="map-africa-img">
					<?php 
						$image = get_field( 'geography_map_africa' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>

					<div class="map-australia map-overlay" id="australia">
					</div>
					<div class="map-australia-img">
					<?php 
						$image = get_field( 'geography_map_australia' );
						$size = 'full';
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					</div>
				</div>
				<div class="geography-europe geography-content" id="europe-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_europe') );
					if ( have_rows( 'geography_europe' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_europe' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-europe-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<div class="geography-north-america geography-content" id="north-america-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_north_america') );
					if ( have_rows( 'geography_north_america' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_north_america' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-north-america-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<div class="geography-south-america geography-content" id="south-america-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_south_america') );
					if ( have_rows( 'geography_south_america' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_south_america' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-south-america-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<div class="geography-asia geography-content" id="asia-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_asia') );
					if ( have_rows( 'geography_asia' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_asia' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-south-asia-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<div class="geography-africa geography-content" id="africa-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_africa') );
					if ( have_rows( 'geography_africa' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_africa' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-africa-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<div class="geography-australia geography-content" id="australia-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_field('geography_australia') );
					if ( have_rows( 'geography_australia' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'geography_australia' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p class="country"><?php the_sub_field( 'country' ); ?></p>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-australia-load-more" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
			</div>
			<div class="experience-content-container experience-content-2" id="experience-section-2-content">
				<p class="experience-section-description"><?php the_field( 'type_of_cases_description' ); ?></p>
				<p class="experience-section-search-results">
					<?php esc_html_e( 'Search results for:', 'genesis-child-theme' ); ?>
					<?php if ( have_rows( 'type_of_cases' ) ) : ?>
					<?php while ( have_rows( 'type_of_cases' ) ) : the_row() ?>
						<span class="search-results-experience-content-2"><?php the_sub_field( 'type' ); ?></span>
					<?php endwhile; ?>
					<?php endif; ?>
				</p>
				<?php if ( have_rows( 'type_of_cases' ) ) : ?>
				<?php $type = 1; ?>
				<?php while ( have_rows( 'type_of_cases' ) ) : the_row() ?>
				<div class="experience-section-2-type-content experience-section-2-type-<?php echo $type; ?>-content" id="experience-section-2-type-<?php echo $type; ?>-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_sub_field( 'descriptions_of_cases' ) );
					if ( have_rows( 'descriptions_of_cases' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'descriptions_of_cases' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?>
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-2-load-more-<?php echo $type; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<?php $type++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="experience-content-container experience-content-3" id="experience-section-3-content">
				<p class="experience-section-description"><?php the_field( 'industries_description' ); ?></p>
				<p class="experience-section-search-results">
					<?php esc_html_e( 'Search results for:', 'genesis-child-theme' ); ?>
					<?php if ( have_rows( 'industries' ) ) : ?>
					<?php while ( have_rows( 'industries' ) ) : the_row() ?>
						<span class="search-results-experience-content-3"><?php the_sub_field( 'type' ); ?></span>
					<?php endwhile; ?>
					<?php endif; ?>
				</p>
				<?php if ( have_rows( 'industries' ) ) : ?>
				<?php $type = 1; ?>
				<?php while ( have_rows( 'industries' ) ) : the_row() ?>
				<div class="experience-section-3-type-content experience-section-3-type-<?php echo $type; ?>-content" id="experience-section-3-type-<?php echo $type; ?>-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_sub_field( 'descriptions_of_cases' ) );
					if ( have_rows( 'descriptions_of_cases' )) : ?>
					<section class="experience-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'descriptions_of_cases' ) ) : the_row();
						$i++; ?>
						<article class="experience-content-single">
							<p><?php the_sub_field( 'description' ); ?></p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="experience-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?>
						<p class="experience-load-more uppercase-with-arrow" id="experience-content-3-load-more-<?php echo $type; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<?php $type++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>