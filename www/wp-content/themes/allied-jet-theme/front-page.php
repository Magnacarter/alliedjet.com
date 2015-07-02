<?php
/**
 *This is the home page.
 */
get_header() ?>

<section id="front-page-content">

	<div class="flexslider">

		<?php

		$args = array(
			'post_type' => 'aircrafts',
		);

		$aircrafts = new WP_Query( $args );

		?>

		<?php if ( $aircrafts->have_posts() ) : ?>

			<?php while ( $aircrafts->have_posts() ) : $aircrafts->the_post() ?>

				<?php $link = esc_url( get_permalink() ) ?>

				<?php if( have_rows('front_page_slides') ) : ?>

				<ul class="slides">

					<?php $i = 0 ?>

					<?php while( have_rows('front_page_slides') ) : the_row(); $i++;

						// vars
						$image = get_sub_field('aircraft_image');
						$name = get_sub_field('aircraft_name');

					?>

						<li class="slide">

							<i><h1><?php echo $name ?></h1></i>

							<img src="<?php echo esc_url( $image ) ?>"/>

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

				<?php endif;

			endwhile;

		endif; ?>

	</div>

</section>

<?php get_footer() ?>