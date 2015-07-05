<?php
/**
 *This is the home page.
 */
get_header() ?>

<section id="front-page-content">

	<div class="flexslider">
		<?php get_template_part( 'slider' ) ?>
	</div>

	<div class="eis-content-wrap">
		<div class="experience-integrity-section">
			<?php get_template_part( 'eis' ) ?>
		</div>
	</div>

	<?php

	if ( is_front_page() ) {
		?>

		<style type="text/css">
			footer {
				margin-top: 301px;
			}

			@media only screen and ( max-width: 766px ) {
				footer {
					margin-top: 0px;
				}
			}
		</style>

		<?php
	}

	?>

</section>

<?php get_footer() ?>