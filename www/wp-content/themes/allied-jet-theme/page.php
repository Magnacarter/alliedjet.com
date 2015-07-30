<?php
/**
 * page
 */
get_header() ?>

	<!-- Services Page -->
	<?php if ( is_page( 'services' ) ) : ?> 

		<?php get_template_part( 'serve' ) ?>

	<!-- Our Company Page -->
	<?php elseif ( is_page( 'our-company' ) ) : ?>

		<?php get_template_part( 'company' ) ?>

	<!-- Contact Page -->
	<?php elseif ( is_page( 'contact-us' ) ) : ?>

		<?php get_template_part( 'contact' ) ?>

	<?php endif ?>

<?php get_footer() ?>