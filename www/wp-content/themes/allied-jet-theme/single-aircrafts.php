<?php
/**
 * Template Name: Single aircraft page
 */
get_header() ?>

	<section id="aircraft">

		<?php while ( have_posts() ) : the_post() ?>

			<?php if ( have_rows( 'aircraft_slider_images' ) ) : ?>

			<div class="flexslider">

				<ul class="slides">

				<?php while( have_rows( 'aircraft_slider_images' ) ) : the_row();

				// vars
				$image = get_sub_field( 'aircraft_slider_image' ) ?>

					<li class="slide">
						<div class="aircraft-image">
							<img src="<?php echo esc_url( $image ) ?>"/>
						</div>
					</li>

				<?php endwhile ?>

				</ul>

			<?php endif ?>

			</div>

			<div class="aircraft-details">

				<div class="aircraft-text grid-container">

					<h2><?php the_title() ?></h2>

					<HR WIDTH="80%" COLOR="#701f15" SIZE="2">

					<div class="serial-number grid-50 grid-tablet-50 grid-mobile-100">
						<h3>Serial Number: <?php the_field( 'serial_number' ) ?></h3>
					</div>

					<div class="registration grid-50 grid-tablet-50 grid-mobile-100">
						<h3>Registration: <?php the_field( 'registration' ) ?></h3>
					</div>

					<div class="aircraft-description grid-100">
						<p><?php the_field( 'aircraft_description' ) ?></p>
					</div>

				</div>

			</div>

			<?php get_template_part( 'specs' ) ?>

		<?php endwhile;

	wp_reset_postdata() ?>

	<div class="to-top grid-100">
		<a href="#"><img src="<?php the_field( 'top', 'options' ) ?>"></a>
	</div>

	<div class="disclaimer grid-container">
		<p><?php the_field( 'disclaimer', 'options' ) ?></p>
	</div>

	</section>

<?php get_footer() ?>