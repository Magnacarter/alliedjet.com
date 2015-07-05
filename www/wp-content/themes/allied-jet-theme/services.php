<section id="services">

	<div class="service-header">
		<img class="grid-container" src="<?php the_field( 'service_header', 'options' ) ?>">
	</div>

	<div class="service-content-wrap">

	<?php

	$args = array(
		'post_type' => 'services',
	);

	$services = new WP_Query( $args );

	if ( $services->have_posts() ) : ?>

		<?php while ( $services->have_posts() ) : $services->the_post() ?>

		<div class="service-content grid-container">

			<div class="service-icon grid-30 grid-tablet-100">
				<img src="<?php the_field( 'service_icon' ) ?>">
			</div>

			<div class="service-description grid-70 grid-tablet-100">
				<h3><?php the_title() ?></h3>
				<p><?php the_field( 'service_description' ) ?></p>
			</div>

			<HR WIDTH="80%" COLOR="#701f15" SIZE="2">

		</div>

		<?php endwhile; endif ?>

	<?php wp_reset_postdata() ?>

	</div>

</section>