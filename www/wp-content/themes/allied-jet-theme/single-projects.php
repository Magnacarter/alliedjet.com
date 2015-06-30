<?php
/**
 * Template Name: Single project page
 */
get_header() ?>

	<?php if ( is_single() ) : ?>

	<div id="portfolio-slider" class="flexslider grid-container">

	<h1><?php the_field( 'vendor_section_title' ) ?></h1>

		<?php if( have_rows( 'portfolio_slide' ) ) : ?>

			<ul class="slides">

			<?php while( have_rows( 'portfolio_slide' ) ) : the_row();

				// vars
				$image1 = get_sub_field( 'portfolio_image_1' );
				?>

				<li class="slide">
					<div class="portfolio-image">
						<img src="<?php echo esc_url( $image ) ?>"/>
					</div>
				</li>

			<?php endwhile ?>

			</ul>

		<?php endif;

	endif ?><!--is_single if-->

<?php get_footer() ?>