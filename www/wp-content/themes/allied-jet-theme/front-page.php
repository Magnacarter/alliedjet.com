<?php
/**
 *This is the home page.
 */
get_header() ?>

	<section id="front-page-content" class="grid-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

			<div class="page-title grid-100">

				<h1><?php the_title() ?></h1>

			</div>

			<div class="page-post-content grid-100">

				<?php the_content() ?>

			</div>

		<?php endwhile; endif ?>

	</section>

<?php get_footer() ?>