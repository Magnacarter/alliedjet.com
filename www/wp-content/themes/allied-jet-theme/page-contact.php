<?php
/**
 * Contact Page
 */
get_header() ?>

<section id="contact-page-content" class="grid-container">

	<div class="contact-content grid-100">

		<div class="page-title grid-100">

			<h1><?php the_title() ?></h1>

		</div>

		<h3>Email Us</h3>

		<?php while ( have_posts() ) : the_post() ?>

			<div class="page-post-content grid-100">

				<?php the_content() ?>

			</div>

		<?php endwhile ?>

	</div>

</section>

<?php get_footer() ?>