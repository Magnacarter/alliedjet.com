<?php
/**
 * Template Name: Archive Aircrafts
 */
get_header() ?>
<section id="archives-page" class="grid-container">

	<?php

	$args = array(
		'post_type' => 'aircrafts',
		);

	$aircrafts = new WP_Query( $args ) ?>

	<section id="single-aircrafts" class="grid-container">

	<?php if ( $aircrafts->have_posts() ) : ?>

		<?php while ( $aircrafts->have_posts() ) : $aircrafts->the_post() ?>

			<div class="single-aircraft grid-45 tablet-grid-45 mobile-grid-100">
				<img src="<?php the_field( 'aircraft_image' ) ?>" height="324" width="505"/>

				<HR WIDTH="100%" COLOR="#701f15" SIZE="8">

				<div class="single-aircraft-text">

					<h2><?php the_title() ?></h2>

					<HR WIDTH="80%" COLOR="#701f15" SIZE="2">

					<p><?php the_field( 'aircraft_description' ) ?></p>

					<p>Registration: <?php the_field( 'registration' ) ?></p>

					<p>Airframe Time: <?php the_field( 'airframe_time' ) ?></p>

					<p>Engine Hours: <?php the_field( 'engine_hours' ) ?></p>

					<div class="aircraft-more-info-button grid-100">
						<a href="<?php the_permalink() ?>"><img src="<?php the_field( 'more_info_button', 'options' ) ?>"></a>
					</div>

				</div>

			</div>

		<?php endwhile; endif;

	wp_reset_postdata() ?>

	</section>

</section>

<?php get_footer() ?>