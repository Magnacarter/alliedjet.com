<?php
/**
 * Specs section for single aircraft pages
 */
?>

<section id="specs">

	<div class="spec-content grid-container">

		<div class="airframe grid-50 mobile-grid-100">

			<h4>Airframe</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "airframe" ) ?>

		</div>

		<div class="props grid-50 mobile-grid-100">

			<h4>Props</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "props" ) ?>

		</div>

		<div class="engines grid-50 mobile-grid-100">

			<h4>Engines</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "engines" ) ?>

		</div>

		<div class="avionics grid-50 mobile-grid-100">

			<h4>Avionics</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "avionics" ) ?>

		</div>

		<div class="options grid-50 mobile-grid-100">

			<h4>Options</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "options" ) ?>

		</div>

		<div class="interiors grid-50 mobile-grid-100">

			<h4>Interiors</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "interiors" ) ?>

		</div>

		<div class="exterior grid-50 mobile-grid-100">

			<h4>Exterior</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "exterior" ) ?>

		</div>

		<div class="maintenance_status grid-50 mobile-grid-100">

			<h4>Maintenance Status</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "maintenance_status" ) ?>

		</div>

		<div class="notes grid-50 mobile-grid-100">

			<h4>Notes</h4>

			<HR WIDTH="100%" COLOR="#701f15" SIZE="2">

			<?php the_field( "notes" ) ?>

		</div>

	</div>

</section>