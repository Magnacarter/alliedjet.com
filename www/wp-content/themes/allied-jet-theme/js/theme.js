jQuery( document ).ready( function($) {

	//Hover elements for feature project
	var featureProject = $( '.feature-project' );

	featureProject.hover(
		function() {
			$( this ).find( '.feature-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.feature-hover' ).fadeOut(400);
		}
	);

	//Hover elements for single projects
	var featureProject = $( '.single-project' );

	featureProject.hover(
		function() {
			$( this ).find( '.single-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.single-hover' ).fadeOut(400);
		}
	);

	//Hover elements for single projects
	var featureProject = $( '.single-work' );

	featureProject.hover(
		function() {
			$( this ).find( '.gallery-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.gallery-hover' ).fadeOut(400);
		}
	);

});

