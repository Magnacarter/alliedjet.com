<?php
/**
 * Front Page Slider
 */
if( have_rows('front_page_slides') ) : ?>

	<ul class="slides">

		<?php $i = 0 ?>

		<?php while( have_rows('front_page_slides') ) : the_row(); $i++;

			// vars
			$aji_image = get_sub_field('aircraft_image');
			$aji_name = get_sub_field('aircraft_name');

		?>

			<li class="slide">

				<i><h1><?php echo $aji_name ?></h1></i>

				<img src="<?php echo esc_url( $aji_image ) ?>"/>

				<?php if ( $i >= 2 ) : ?>

					<div class="more-info-button">
						<a href="#" claas="more-info-a">
							<span class="plus">+</span><span class="info">More Info</span>
						</a>
					</div>

				<?php endif ?>

			</li>

		<?php endwhile ?>

	</ul>

<?php endif ?>