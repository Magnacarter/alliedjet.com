jQuery( document ).ready( function($) {
	//Flexslider
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 10000,
			controlNav: true,
			directionNav: false,
			animationSpeed: 1000,
			direction: "horizontal",
			animation: "slide", //String: Select your animation type, "fade" or "slide"
			prevText: "", //String: Set the text for the "previous" directionNav item
			nextText: "",
		});
	});

	//Sub nav appear slow.
	var $navServices = $( 'nav ul li' );
	var $subMenu = $( 'nav ul ul' );

	$navServices.hover(
		function() {
			$( this ).find( $subMenu ).slideToggle(400);
		}
	);

	//Push Menu for tablet and mobile
	$('.toggle-menu').jPushMenu();

	//Hamburger navigation
	var hamburger = $( '.hamburger a' );
	var toggle_menu = $( '.toggle_menu' );
	hamburger.click( function( e ) {
		e.preventDefault();
		toggle_menu.slideToggle( 'slow' );
	});

});//Document ready end.