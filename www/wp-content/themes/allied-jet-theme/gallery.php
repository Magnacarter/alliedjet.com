<?php

$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => '50'
);

$projects = new WP_Query( $args ) ?>

<section id="single-projects" class="grid-container">

<?php if ( $projects->have_posts() ) : ?>

<?php $i = 0 ?>

	<?php while ( $projects->have_posts() ) : $projects->the_post(); $i++ ?>

		<div class="single-work grid-33 tablet-grid-50 mobile-grid-100">
			<a href="<?php echo esc_url( get_permalink() ) ?>"><img src="<?php the_field( 'project_image' ) ?>" alt="<?php the_field( 'project_description' ) ?>"/></a>
				<div class="gallery-hover grid-50">
					<h3><i><?php echo esc_html( get_the_title() ) ?></i></h3>
					<h5><i><?php the_field( 'small_title' ) ?></i></h5>
				</div>
		</div>

	<?php if ( 0 === $i % 3 || $i === $projects->found_posts ) : ?>
		<div class="clear"></div>
	<?php endif; ?>

	<?php endwhile; endif;

wp_reset_postdata() ?>

</section>