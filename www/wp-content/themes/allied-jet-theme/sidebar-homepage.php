<section id="barebones_sidebar" class="grid-container">

	<?php
	if ( is_active_sidebar( 'barebones_sidebar' ) ) {
		dynamic_sidebar( 'barebones_sidebar' );
	} else {
		echo 'Insert Blog Widgets.';
	}
	?>

</section>