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
 * Our What Makes Us Stand Out Template.
 */
?>

<div class="container-fluid section-container standing-out-container">
	<div class="row">
		<div class="col-12">
			<h1 class="section-title"><?php the_field( 'standing_out_title' ); ?></h1>
		</div>
	</div>
	<div class="row standing-out-row show-on-xl-down">
		<div class="col-sm-6 number-col">
			<?php 
				$link = get_field( 'standing_out_link_1' );
				$before_number = get_field( 'standing_out_symbol_before_number_1' );
				$after_number = get_field( 'standing_out_symbol_after_number_1' );
				?>
			<div class="standing-out-number h-100">
				<?php if ( $link ) { ?>
				<a href="<?php echo $link; ?>" class="whole-tile-link">
				<?php } ?>
				<?php 
					if ( $before_number ) { ?>
					<h4 class="number"><?php echo $before_number; ?></h4 >
					<?php }
					?>
				<h4 class="standing-out-number-value number number-1"><?php the_field( 'standing_out_number_1' ); ?></h4>
				<?php 
					if ( $after_number ) { ?>
					<h4 class="number"><?php echo $after_number; ?></h4 >
					<?php }
					?>
				<p class="description"><?php the_field( 'standing_out_description_1' ); ?></p>
				<?php
				if ( $link ) { ?>
				<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_1' ); ?></p>
				<?php } ?>
				<?php if ( $link ) { ?>
				</a>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-6 number-col">
			<?php 
				$link = get_field( 'standing_out_link_2' );
				$before_number = get_field( 'standing_out_symbol_before_number_2' );
				$after_number = get_field( 'standing_out_symbol_after_number_2' );
				?>
			<div class="standing-out-number h-100">
				<?php if ( $link ) { ?>
				<a href="<?php echo $link; ?>" class="whole-tile-link">
				<?php } ?>
				<?php 
					if ( $before_number ) { ?>
					<h4 class="number"><?php echo $before_number; ?></h4 >
					<?php }
					?>
				<h4 class="standing-out-number-value number number-2"><?php the_field( 'standing_out_number_2' ); ?></h4>
				<?php 
					if ( $after_number ) { ?>
					<h4 class="number"><?php echo $after_number; ?></h4 >
					<?php }
					?>
				<p class="description"><?php the_field( 'standing_out_description_2' ); ?></p>
				<?php
				if ( $link ) { ?>
				<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_2' ); ?></p>
				<?php } ?>
				<?php if ( $link ) { ?>
				</a>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-6 number-col number-col-last">
			<div class="standing-out-number">
				<?php 
				$link = get_field( 'standing_out_link_3' );
				$before_number = get_field( 'standing_out_symbol_before_number_3' );
				$after_number = get_field( 'standing_out_symbol_after_number_3' );
				if ( $link ) { ?>
				<a href="<?php echo $link; ?>" class="whole-tile-link">
				<?php } ?>
				<?php 
					if ( $before_number ) { ?>
					<h4 class="number"><?php echo $before_number; ?></h4 >
					<?php }
					?>
				<h4 class="standing-out-number-value number number-3"><?php the_field( 'standing_out_number_3' ); ?></h4>
				<?php 
					if ( $after_number ) { ?>
					<h4 class="number"><?php echo $after_number; ?></h4 >
					<?php }
					?>
				<p class="description"><?php the_field( 'standing_out_description_3' ); ?></p>
				<?php 
				$link = get_field( 'standing_out_link_3' );
				if ( $link ) { ?>
				<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_3' ); ?></p>
				<?php } ?>
				<?php if ( $link ) { ?>
				</a>
				<?php } ?>
			</div>
			<div class="speciality-col">
				<div class="standing-out-bg-img standing-out-speciality" style="background-image: url(<?php the_field( 'standing_out_speciality_photo' ); ?>);">
					<p><?php the_field( 'standing_out_speciality_description' ); ?></p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 rankings-col">
			<?php 
				$link = get_field( 'standing_out_rankings_link_url' );
				if ( $link ) { ?>
			<a href="<?php echo $link; ?>" class="whole-tile-link">
			<?php } ?>
				<div class="standing-out-bg-img standing-out-rankings" style="background-image: url(<?php the_field( 'standing_out_rankings_photo' ); ?>);">
					<p><?php the_field( 'standing_out_rankings_description' ); ?></p>
					<p class="uppercase-with-arrow"><?php the_field( 'standing_out_rankings_link_text' ); ?></p>
				</div>
			<?php if ( $link ) { ?>
			</a>
			<?php } ?>
		</div>
		<div class="col-12 collegiality-col">
			<div class="standing-out-bg-img standing-out-collegiality" style="background-image: url(<?php the_field( 'standing_out_collegiality_photo' ); ?>);">
				<p><?php the_field( 'standing_out_collegiality_description' ); ?></p>
			</div>
		</div>
	</div>

	<div class="row standing-out-row show-on-xl-up-flex">
		<div class="col-xl-9 p-0">
			<div class="row">
				<div class="col-xl-4 number-col">
					<div class="standing-out-number h-100">
						<?php 
						$link = get_field( 'standing_out_link_1' );
						$before_number = get_field( 'standing_out_symbol_before_number_1' );
						$after_number = get_field( 'standing_out_symbol_after_number_1' );
						?>
						<?php if ( $link ) { ?>
						<a href="<?php echo $link; ?>" class="whole-tile-link">
						<?php } ?>
						<?php 
							if ( $before_number ) { ?>
							<h4 class="number"><?php echo $before_number; ?></h4 >
							<?php }
							?>
						<h4 class="standing-out-number-value number"><?php the_field( 'standing_out_number_1' ); ?></h4>
						<?php 
							if ( $after_number ) { ?>
							<h4 class="number"><?php echo $after_number; ?></h4 >
							<?php }
							?>
						<p class="description"><?php the_field( 'standing_out_description_1' ); ?></p>
						<?php 
						if ( $link ) { ?>
						<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_1' ); ?></p>
						<?php } ?>
						<?php if ( $link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-4 number-col">
					<div class="standing-out-number h-100">
						<?php 
						$link = get_field( 'standing_out_link_2' );
						$before_number = get_field( 'standing_out_symbol_before_number_2' );
						$after_number = get_field( 'standing_out_symbol_after_number_2' );
						?>
						<?php if ( $link ) { ?>
						<a href="<?php echo $link; ?>" class="whole-tile-link">
						<?php } ?>
						<?php 
							if ( $before_number ) { ?>
							<h4 class="number"><?php echo $before_number; ?></h4 >
							<?php }
							?>
						<h4 class="standing-out-number-value number"><?php the_field( 'standing_out_number_2' ); ?></h4>
						<?php 
							if ( $after_number ) { ?>
							<h4 class="number"><?php echo $after_number; ?></h4 >
							<?php }
							?>
						<p class="description"><?php the_field( 'standing_out_description_2' ); ?></p>
						<?php 
						if ( $link ) { ?>
						<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_2' ); ?></p>
						<?php } ?>
						<?php if ( $link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-4 number-col">
					<div class="standing-out-number h-100">
						<?php 
						$link = get_field( 'standing_out_link_3' );
						$before_number = get_field( 'standing_out_symbol_before_number_3' );
						$after_number = get_field( 'standing_out_symbol_after_number_3' );
						?>
						<?php if ( $link ) { ?>
						<a href="<?php echo $link; ?>" class="whole-tile-link">
						<?php } ?>
						<?php 
							if ( $before_number ) { ?>
							<h4 class="number"><?php echo $before_number; ?></h4 >
							<?php }
							?>
						<h4 class="standing-out-number-value number"><?php the_field( 'standing_out_number_3' ); ?></h4>
						<?php 
							if ( $after_number ) { ?>
							<h4 class="number"><?php echo $after_number; ?></h4 >
							<?php }
							?>
						<p class="description"><?php the_field( 'standing_out_description_3' ); ?></p>
						<?php 
						if ( $link ) { ?>
						<p class="uppercase-with-arrow"><?php the_field( 'standing_out_link_text_3' ); ?></p>
						<?php } ?>
						<?php if ( $link ) { ?>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-8 collegiality-col">
					<div class="standing-out-bg-img standing-out-collegiality" style="background-image: url(<?php the_field( 'standing_out_collegiality_photo' ); ?>);">
						<p><?php the_field( 'standing_out_collegiality_description' ); ?></p>
					</div>
				</div>
				<div class="col-xl-4 speciality-col">
					<div class="standing-out-bg-img standing-out-speciality" style="background-image: url(<?php the_field( 'standing_out_speciality_photo' ); ?>);">
						<p><?php the_field( 'standing_out_speciality_description' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 rankings-col">
			<?php 
				$link = get_field( 'standing_out_rankings_link_url' );
				if ( $link ) { ?>
			<a href="<?php echo $link; ?>" class="whole-tile-link">
			<?php } ?>
			<div class="standing-out-bg-img standing-out-rankings" style="background-image: url(<?php the_field( 'standing_out_rankings_photo' ); ?>);">
				<p><?php the_field( 'standing_out_rankings_description' ); ?></p>
				<p class="uppercase-with-arrow"><?php the_field( 'standing_out_rankings_link_text' ); ?></p>
			</div>
			<?php if ( $link ) { ?>
			</a>
			<?php } ?>
		</div>
	</div>
</div>
