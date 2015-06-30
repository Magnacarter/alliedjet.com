<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
		<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo( 'name' ) ) ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ) ?>">
		<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/favicon.ico" />
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>

	<div class="header-area-wrap grid-container">
		<div class="header-logo grid-30 tablet-grid-33 mobile-grid-33">
			<a href="<?php echo esc_url( get_home_url() ) ?>"><img src="<?php the_field( 'nav_logo', 'options' ) ?>"/></a>
		</div>

		<nav class="main-nav grid-45 tablet-grid-33 mobile-grid-33">
			<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ) ?>
		</nav>

		<div class="header-locations grid-25 tablet-grid-33 mobile-grid-33">
			<h3><?php the_field( 'call_today', 'options' ) ?></h3>
			<h4>Locations</h4>

			<ul class="location-list">
				<li><?php the_field( 'header_location_1', 'options' ) ?></li>

				<li class="location-two"><?php the_field( 'header_location_2', 'options' ) ?></li>

				<li class="location-three"><?php the_field( 'header_location_3', 'options' ) ?></li>
			</ul>
		</div>

		<div class="hamburger">
			<a class="toggle-menu menu-left push-body"><img height="40" width="40" src="<?php the_field( 'hamburger_icon', 'options' ) ?>"></a></img>
		</div>

		<nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
			<?php wp_nav_menu( array( 'menu' => 'push-nav' ) ) ?>
		</nav>
	</div>










