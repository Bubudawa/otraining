jQuery( document ).ready( function($) {

	if ( $( '.message' ).length > 0 ) {
		setTimeout( function() {
			$( '.message' ).remove();
		}, 6000 );
	}

} );