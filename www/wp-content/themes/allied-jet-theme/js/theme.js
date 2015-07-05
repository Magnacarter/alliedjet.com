jQuery( document ).ready( function($) {
	//Flexslider
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 6000,
			controlNav: false,
			directionNav: true,
			animationSpeed: 2000,
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

	//Individual Aircraft page, "back to top" button
	var toTop = $( '.to-top a' );
	toTop.click( function( e ) {
		e.preventDefault();
		$( 'html, body' ).animate({ scrollTop: 0 }, 500 );
		return false;
	});

});//Document ready end.