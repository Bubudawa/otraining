jQuery( document ).ready( function($) {

	if ( $( '.message' ).length > 0 ) {
		setTimeout( function() {
			$( '.message' ).remove();
		}, 10000 );
	}

} );