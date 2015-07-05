<section id="our-company" class="grid-container">

	<div class="staff-image grid-100">
		<img src="<?php the_field( 'staff_image', 'options' ) ?>">
	</div>

	<?php

	$args = array(
		'post_type' => 'employees',
		);

	$employees = new WP_Query( $args );

	if ( $employees->have_posts() ) : ?>

		<?php while ( $employees->have_posts() ) : $employees->the_post() ?>

		<div class="single-employee">

			<div class="employee-image grid-30 tablet-grid-100">
				<img src="<?php the_field( 'employee_image' ) ?>">
			</div>

			<div class="employee-content grid-parent grid-70 tablet-grid-100">
				<h3><?php the_title() ?></h3>
				<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

				<div class="position grid-25">
					<h4><?php the_field( 'position' ) ?></h4>
				</div>

				<div class="phone-number grid-25">
					<p><?php the_field( 'phone_number' ) ?></p>
				</div>

				<div class="email grid-25">
					<a href="mailto:<?php the_field( 'email' ) ?>"><p><?php the_field( 'email' ) ?></p></a>
				</div>

				<p><?php the_field( 'employee_description' ) ?></p>
			</div>

		</div>

	<?php endwhile; endif ?>

	<?php wp_reset_postdata() ?>

</section>