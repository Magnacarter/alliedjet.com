<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header() ?>

	<div id="primary" class="content-area">

		<div class='four-o-four'>

			<header class="error-title">

				<h1 class="page-title"><?php _e( '404 Page Not Found' ) ?></h1>

			</header>

			<div class="page-wrapper">

				<div class="page-content">

					<h2><?php _e( 'Hmmmm, sorry, we could not locate the page you want.' ) ?></h2>

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ) ?></p>

					<?php get_search_form() ?>

				</div><!-- .page-content -->

			</div><!-- .page-wrapper -->

		</div><!-- .four-o-four -->

	</div><!-- #primary -->

<?php get_footer() ?>