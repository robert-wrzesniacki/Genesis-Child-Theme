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
 * Our Our Activity Template.
 */
?>

<div class="container-fluid section-container our-activity-container">
	<div class="row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'our_activity_title' ); ?></h1>
		</div>
	</div>
	<div class="row our-activity-sections-content-row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-3 our-activity-sections-col">
			<div class="our-activity-section-container our-activity-section-1" id="our-activity-section-1">
				<h5 class="our-activity-section-title"><?php the_field( 'monographs_commentaries_textbooks_title' ); ?></h5>
			</div>
			<div class="our-activity-section-container our-activity-section-2" id="our-activity-section-2">
				<h5 class="our-activity-section-title plus"><?php the_field( 'selected_academic_articles_title' ); ?></h5>
				<?php if ( have_rows( 'selected_academic_articles' ) ) : ?>
				<?php $year = 1;?>
				<div class="our-activity-section-years our-activity-section-2-years">
				<?php while ( have_rows( 'selected_academic_articles' ) ) : the_row() ?>
					<p class="our-activity-section-2-year our-activity-section-2-year-<?php echo $year; ?>" id="our-activity-section-2-year-<?php echo $year; ?>"><?php the_sub_field( 'year' ); ?></p>
					<?php $year++; ?>
				<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="our-activity-section-container our-activity-section-3" id="our-activity-section-3">
				<h5 class="our-activity-section-title"><?php the_field( 'selected_blog_posts_editorials_title' ); ?></h5>
			</div>
			<div class="our-activity-section-container our-activity-section-4" id="our-activity-section-4">
				<h5 class="our-activity-section-title plus"><?php the_field( 'selected_conference_presentations_title' ); ?></h5>
				<?php if ( have_rows( 'selected_conference_presentations' ) ) : ?>
				<?php $year = 1;?>
				<div class="our-activity-section-years our-activity-section-4-years">
				<?php while ( have_rows( 'selected_conference_presentations' ) ) : the_row() ?>
					<p class="our-activity-section-4-year our-activity-section-4-year-<?php echo $year; ?>" id="our-activity-section-4-year-<?php echo $year; ?>"><?php the_sub_field( 'year' ); ?></p>
					<?php $year++; ?>
				<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 col-xl-9 our-activity-content-col">
			<div class="our-activity-content-container our-activity-content-1" id="our-activity-section-1-content">
				<!-- If articles exists -->
				<?php 
				$total_articles = count( get_field('monographs_commentaries_textbooks') );
				if ( have_rows( 'monographs_commentaries_textbooks' )) : ?>
				<section class="our-activity-content-wrap">
					<?php 
					$i = 0;
					$no = 0;
					while ( have_rows( 'monographs_commentaries_textbooks' ) ) : the_row();
					$i++; ?>
					<article class="our-activity-content-single">
						<p>
							<?php the_sub_field( 'text' ); ?>
							<?php $link_articles = get_sub_field( 'link' ); 
							if( $link_articles ) { ?>
								<a href="<?php echo $link_articles;?>" target="_blank" class="our-activity-link">Link</a>
							<?php } ?>
						</p>
					</article>
					<?php 

					if ($i % 5 === 0 && $total_articles > 5) {
						$no++; ?>
						</section>
						<section class="our-activity-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
					<?php }
				
					endwhile; ?>
				</section>

				<!-- Load more button -->
				<?php if ( $total_articles > 5 ) { ?> 
					<p class="our-activity-load-more uppercase-with-arrow" id="our-activity-content-1-load-more-<?php echo $year; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
				<?php } ?>

				<!-- Endif articles exists -->
				<?php endif; ?>
			</div>
			<div class="our-activity-content-container our-activity-content-2" id="our-activity-section-2-content">
				<?php if ( have_rows( 'selected_academic_articles' ) ) : ?>
				<?php $year = 1; ?>
				<?php while ( have_rows( 'selected_academic_articles' ) ) : the_row() ?>
				<div class="our-activity-section-2-year-content our-activity-section-2-year-<?php echo $year; ?>-content" id="our-activity-section-2-year-<?php echo $year; ?>-content">
					<!-- If articles exists -->
					<?php 
						$total_articles = count( get_sub_field('selected_academic_articles_content') );
						if ( have_rows( 'selected_academic_articles_content' )) : ?>
						<section class="our-activity-content-wrap">
							<?php 
							$i = 0;
							$no = 0;
							while ( have_rows( 'selected_academic_articles_content' ) ) : the_row();
							$i++; ?>
							<article class="our-activity-content-single">
								<p>
									<?php the_sub_field( 'text' ); ?>
									<?php $link_articles = get_sub_field( 'link' ); 
									if( $link_articles ) { ?>
										<a href="<?php echo $link_articles;?>" target="_blank" class="our-activity-link">Link</a>
									<?php } ?>
								</p>
							</article>
							<?php 

							if ($i % 5 === 0 && $total_articles > 5) {
								$no++; ?>
								</section>
								<section class="our-activity-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
							<?php }
						
							endwhile; ?>
						</section>

						<!-- Load more button -->
						<?php if ( $total_articles > 5 ) { ?> 
							<p class="our-activity-load-more uppercase-with-arrow" id="our-activity-content-2-load-more-<?php echo $year; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
						<?php } ?>

						<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<?php $year++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="our-activity-content-container our-activity-content-3" id="our-activity-section-3-content">
				<!-- If articles exists -->
				<?php 
				$total_articles = count( get_field('selected_blog_posts_editorials') );
				if ( have_rows( 'selected_blog_posts_editorials' )) : ?>
				<section class="our-activity-content-wrap">
					<?php 
					$i = 0;
					$no = 0;
					while ( have_rows( 'selected_blog_posts_editorials' ) ) : the_row();
					$i++; ?>
					<article class="our-activity-content-single">
						<p>
							<?php the_sub_field( 'text' ); ?>
							<?php $link_articles = get_sub_field( 'link' ); 
							if( $link_articles ) { ?>
								<a href="<?php echo $link_articles;?>" target="_blank" class="our-activity-link">Link</a>
							<?php } ?>
						</p>
					</article>
					<?php 

					if ($i % 5 === 0 && $total_articles > 5) {
						$no++; ?>
						</section>
						<section class="our-activity-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
					<?php }
				
					endwhile; ?>
				</section>

				<!-- Load more button -->
				<?php if ( $total_articles > 5 ) { ?> 
					<p class="our-activity-load-more uppercase-with-arrow" id="our-activity-content-3-load-more-<?php echo $year; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
				<?php } ?>

				<!-- Endif articles exists -->
				<?php endif; ?>
			</div>
			<div class="our-activity-content-container our-activity-content-4" id="our-activity-section-4-content">
				<?php if ( have_rows( 'selected_conference_presentations' ) ) : ?>
				<?php $year = 1; ?>
				<?php while ( have_rows( 'selected_conference_presentations' ) ) : the_row() ?>
				<div class="our-activity-section-4-year-content our-activity-section-4-year-<?php echo $year; ?>-content" id="our-activity-section-4-year-<?php echo $year; ?>-content">
					<!-- If articles exists -->
					<?php 
					$total_articles = count( get_sub_field('selected_conference_presentations_content') );
					if ( have_rows( 'selected_conference_presentations_content' )) : ?>
					<section class="our-activity-content-wrap">
						<?php 
						$i = 0;
						$no = 0;
						while ( have_rows( 'selected_conference_presentations_content' ) ) : the_row();
						$i++; ?>
						<article class="our-activity-content-single">
							<p>
								<?php the_sub_field( 'text' ); ?>
								<?php $link_articles = get_sub_field( 'link' ); 
								if( $link_articles ) { ?>
									<a href="<?php echo $link_articles;?>" target="_blank" class="our-activity-link">Link</a>
								<?php } ?>
							</p>
						</article>
						<?php 

						if ($i % 5 === 0 && $total_articles > 5) {
							$no++; ?>
							</section>
							<section class="our-activity-content-wrap" data-articels_no="<?php echo esc_attr( $no ); ?>">
						<?php }
					
						endwhile; ?>
					</section>

					<!-- Load more button -->
					<?php if ( $total_articles > 5 ) { ?> 
						<p class="our-activity-load-more uppercase-with-arrow" id="our-activity-content-4-load-more-<?php echo $year; ?>" data-page="1"><?php esc_html_e( 'Load more', 'genesis-child-theme' ); ?></p>
					<?php } ?>

					<!-- Endif articles exists -->
					<?php endif; ?>
				</div>
				<?php $year++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>