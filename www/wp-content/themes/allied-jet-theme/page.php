<?php
/**
 * page
 */
get_header() ?>

	<!-- Services Page -->
	<?php if( is_page( 'services' ) ) : ?> 

		<?php get_template_part( 'serve' ) ?>

	<?php endif ?>

	<!-- Our Company Page -->
	<?php if ( is_page( 'our-company' ) ) : ?>

		<?php get_template_part( 'company' ) ?>

	<?php endif ?>

	<!-- Contact Page -->
	<?php if ( is_page( 'contact-us' ) ) : ?>

		<?php get_template_part( 'contact' ) ?>

	<?php endif ?>

<?php get_footer() ?>