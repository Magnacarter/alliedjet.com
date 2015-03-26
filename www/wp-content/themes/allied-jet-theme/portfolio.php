<?php
/**
 * Loop through Lauren's projects
 *
 */
$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => '4',
	);

$portfolio = new WP_Query( $args ) ?>

<section id="single-projects" class="grid-container">

<?php if ( $portfolio->have_posts() ) : ?>

	<?php $i = 0 ?>

	<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); $i++;

		if( $i === 1 ) { ?>

		<div class="feature-project grid-100">
			<a href=""><img src="<?php the_field( 'project_image' ) ?>"></a>
				<div class="feature-hover grid-30">
					<h1><i><?php echo esc_html( get_the_title() ) ?></i></h1>
					<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
					<h3><i><?php the_field( 'small_title' ) ?></i></h3>
				</div>
			<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
		</div>

		<?php } else { ?>

		<div class="single-project-wrap">
			<div class="single-project grid-33 tablet-grid-50 mobile-grid-100">
				<a href="<?php echo esc_url( get_permalink() ) ?>"><img src="<?php the_field( 'project_image' ) ?>" alt="<?php the_field( 'project_description' ) ?>"/></a>
					<div class="single-hover grid-50">
						<h3><i><?php echo esc_html( get_the_title() ) ?></i></h3>
						<h5><i><?php the_field( 'small_title' ) ?></i></h5>
					</div>
			</div>
		</div>

		<?php }

	endwhile; endif;

wp_reset_postdata() ?>

</section>