<section id="contact-us">

	<div class="contact-content-wrap">

		<div class="contact-content grid-container">

			<div class="contact-info grid-parent grid-50 tablet-grid-100">

				<h3>Contact Us</h3>

				<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

				<div class="sales-phone grid-50">
					<h4>Phone:</h4>
					<p><?php the_field( 'sales_phone', 'options' ) ?></p>
					<p><?php the_field( 'sales_phone_two', 'options' ) ?></p>
				</div>

				<div class="sales-email grid-50">
					<h4>Email:</h4>
					<p><?php the_field( 'sales_email', 'options' ) ?></p>
				</div>

				<div class="sales-fax grid-50">
					<h4>Fax:</h4>
					<p><?php the_field( 'sales_fax', 'options' ) ?></p>
				</div>

				<div class="sales-address grid-50">
					<h4>Mailing Address:</h4>
					<p><?php the_field( 'mailing_address', 'options' ) ?></p>
				</div>

			</div>

			<div class="contact-form grid-50 tablet-grid-100">

				<h3>Email Us</h3>

				<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

				<?php the_field( 'contact_form', 'options' ) ?>

			</div>

		</div>

		<?php

		$args = array(
			'post_type' => 'employees',
			);

		$employees = new WP_Query( $args ) ?>

		<div class="contact-staff-wrap">

			<?php if ( $employees->have_posts() ) : ?>

				<?php while ( $employees->have_posts() ) : $employees->the_post() ?>

				<div class="contact-staff grid-25 tablet-grid-50 mobile-grid-100">
					<img src="<?php the_field( 'employee_image' ) ?>">
					<h3><?php the_title() ?></h3>
					<p><?php the_field( 'phone_number' ) ?></p>
					<p><?php the_field( 'email' ) ?></p>
				</div>

			<?php endwhile; endif ?>

			<?php wp_reset_postdata() ?>

		</div>

	</div>

</section>