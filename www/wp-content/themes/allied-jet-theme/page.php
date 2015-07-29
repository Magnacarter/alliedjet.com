<?php
/*
 * page
 */
get_header() ?>

	<!-- Our Company Page -->
	<?php if ( is_page( 'our-company' ) ) : ?>

		<style type="text/css">

			.general-content {
				display: none;
			}

		</style>

		<?php get_template_part( 'company' ) ?>

	<?php endif ?>

	<!-- Services Page -->
	<?php if ( is_page( 'services' ) ) : ?>

		<style type="text/css">

			.general-content {
				display: none;
			}

		</style>

		<?php get_template_part( 'services' ) ?>

	<?php endif ?>

	<!-- Contact Page -->
	<?php if ( is_page( 'contact-us' ) ) : ?>

		<style type="text/css">

			.general-content {
				display: none;
			}

			footer {
				margin-top: 0px;
			}

		</style>

		<?php get_template_part( 'contact' ) ?>

	<?php endif ?>

<?php get_footer() ?>