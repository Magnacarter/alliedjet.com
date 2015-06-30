<?php
/**
 * Loop through all the Barebones theme projects
 */
$args = array(
	'post_type' => 'portfolio',
	);

$portfolio = new WP_Query( $args ) ?>

<section id="single-projects" class="grid-container">

<?php if ( $portfolio->have_posts() ) : ?>

	<?php while ( $portfolio->have_posts() ) : $portfolio->the_post() ?>

		<div class="single-work grid-33 tablet-grid-50 mobile-grid-100">
			<a href="<?php echo esc_url( get_permalink() ) ?>"><img src="<?php the_field( 'project_image' ) ?>" alt="<?php the_field( 'project_description' ) ?>"/></a>
		</div>

	<?php endwhile; endif;

wp_reset_postdata() ?>


</section>