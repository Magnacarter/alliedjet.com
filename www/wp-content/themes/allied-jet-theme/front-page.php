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
		<div class="experience-integrity-section grid-container">
			<?php get_template_part( 'eis' ) ?>
		</div>
	</div>

</section>

<?php get_footer() ?>