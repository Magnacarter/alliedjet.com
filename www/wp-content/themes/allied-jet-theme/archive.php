<?php
/*
 * Template Name: Archives
 */
get_header() ?>
archives.php
	<section id="archive-page-content grid-container">

		<div class="archive-content grid-100">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

				<div class="page-title grid-100">

					<h1><?php the_title() ?></h1>

				</div>

				<div class="page-post-content grid-100">

					<?php the_content() ?>

				</div>

			<?php endwhile; endif ?>

		</div>

	</section>

<?php get_footer() ?>
