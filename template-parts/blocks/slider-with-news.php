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
 * Slider with news Template.
 */
?>

<div class="container-fluid section-container slider-with-news-container">
	<div class="row">
		<div class="col-12 padding">
		<?php
			$slider_with_news = get_field('slider_with_news');
			if( $slider_with_news ): ?>
			<div class="swiper-container swiper-slider-with-news">
				<div class="swiper-wrapper">
				<?php foreach( $slider_with_news as $post): 
					$permalink = get_permalink( $post->ID );
					$title = get_the_title( $post->ID );
					$excerpt = get_the_excerpt( $post->ID );
					
					$custom_slider_img_large = get_field('custom_slider_img_large', $post->ID);
					if($custom_slider_img_large){
						$large = 	wp_get_attachment_image_src( $custom_slider_img_large, 'full' );
						$photo_large = $large[0];
					}
					else{
						$photo_large = get_the_post_thumbnail_url( $post->ID, 'post-image-slider-large' );
					}

					$custom_slider_img_medium = get_field('custom_slider_img_medium', $post->ID);
					if($custom_slider_img_medium){
						$medium = 	wp_get_attachment_image_src( $custom_slider_img_medium, 'full' );
						$photo_medium = $medium[0];
					}
					else{
						$photo_medium = get_the_post_thumbnail_url( $post->ID, 'post-image-slider-medium' );
					}

					$custom_slider_img_small = get_field('custom_slider_img_small', $post->ID);
					if($custom_slider_img_small){
						$small = 	wp_get_attachment_image_src( $custom_slider_img_small, 'full' );
						$photo_small = $small[0];
					}
					else{
						$photo_small = get_the_post_thumbnail_url( $post->ID, 'post-image-slider-small' );
					}

					$categories = get_the_category( $post->ID );
				?>
					<div class="swiper-slide">
						<div class="swiper-news-container show-on-md-down" style="background-image: url(<?php echo $photo_small ?>);">
							<div class="swiper-news-container-inner">
								<?php foreach ( $categories as $category ) : ?>
								<h4 class="genesis-child-theme-post-category"><?php echo esc_html( $category->cat_name ); ?></h4>
								<?php endforeach; ?>
								<a class="genesis-child-theme-post-title" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
								<a class="genesis-child-theme-post-excerpt" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $excerpt ); ?>...</a>
								<div class="swiper-navigation-container">
									<div class="swiper-slider-with-news-button-prev"></div>
									<div class="swiper-slider-with-news-pagination"></div>
									<div class="swiper-slider-with-news-button-next"></div>
								</div>
							</div>
							<div class="swiper-bar">
								<div class="swiper-bar-inner">
								</div>
							</div>
						</div>
						
						<div class="swiper-news-container show-on-md-up show-on-xl-down" style="background-image: url(<?php echo $photo_medium ?>);">
							<div class="swiper-news-container-inner">
								<?php foreach ( $categories as $category ) : ?>
								<h4 class="genesis-child-theme-post-category"><?php echo esc_html( $category->cat_name ); ?></h4>
								<?php endforeach; ?>
								<a class="genesis-child-theme-post-title" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
								<a class="genesis-child-theme-post-excerpt" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $excerpt ); ?>...</a>
								<div class="swiper-navigation-container">
									<div class="swiper-slider-with-news-button-prev"></div>
									<div class="swiper-slider-with-news-pagination"></div>
									<div class="swiper-slider-with-news-button-next"></div>
								</div>
							</div>
							<div class="swiper-bar">
								<div class="swiper-bar-inner">
								</div>
							</div>
						</div>
						<div class="swiper-news-container show-on-xl-up" style="background-image: url(<?php echo $photo_large ?>);">
							<div class="swiper-news-container-inner">
								<?php foreach ( $categories as $category ) : ?>
								<h4 class="genesis-child-theme-post-category"><?php echo esc_html( $category->cat_name ); ?></h4>
								<?php endforeach; ?>
								<a class="genesis-child-theme-post-title" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
								<a class="genesis-child-theme-post-excerpt" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $excerpt ); ?>...</a>
								<div class="swiper-navigation-container">
									<div class="swiper-slider-with-news-button-prev"></div>
									<div class="swiper-slider-with-news-pagination"></div>
									<div class="swiper-slider-with-news-button-next"></div>
								</div>
							</div>
							<div class="swiper-bar">
								<div class="swiper-bar-inner">
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		
	</div>
</div>