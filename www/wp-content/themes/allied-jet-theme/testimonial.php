<?php
/**
 * Testimonal loop for slider
 */
?>

<div id="testimonial-slider" class="flexslider grid-container">

	<h1><?php the_field( 'testimonial_section_title' ) ?></h1>

	<ul class="slides">
		<?php
		$args = array(
			'post_type' => 'testimonial',
		);

		$the_query = new WP_Query( $args ) ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>

				<?php if( have_rows( 'testimonial_slide' ) ) : ?>

					<?php while( have_rows( 'testimonial_slide' ) ) : the_row();

					// vars
					$testimonial_image = get_sub_field( 'testimonial_image' );
					$testimonial = get_sub_field( 'testimonial' );
					$testimonial_name = get_sub_field( 'testimonial_name' );
					$testimonial_company = get_sub_field( 'testimonial_company' );
					?>

					<li>
						<div class="testimonial_image grid-20">
							<img src="<?php echo esc_url( $testimonial_image ) ?>"/>
						</div>

						<div class="testimonial grid-60">
							<img src="<?php echo esc_url( $testimonial ) ?>"/>
						</div>

						<div class="testimonial_name grid-20">
							<h3><?php echo esc_html( $testimonial_name ) ?></h3>
							<p><?php echo esc_html( $testimonial_company ) ?></p>
						</div>
					</li>

					<?php endwhile ?><!--end slide while-->

				<?php endif ?><!--end slide if-->

			<?php endwhile ?><!--end cpt posts query while-->

		<?php endif ?><!--end have posts if-->

	</ul>

</div>