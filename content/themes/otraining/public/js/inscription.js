jQuery( document ).ready( function($) {
	$( '#register-user' ).on( 'submit', function(e) {

		$( this ).find( 'input:required' ).each( function() {
			// On vérifie si les input requis sont remplis
			if ( $( this ).val().trim() == '' ) {
				e.preventDefault();
				$( this ).addClass( 'error' );
			}
		} );

		$( this ).find( 'input[type="email"]' ).each( function() {
			// Regex pour vérifier le champ email
			var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
			if ( ! pattern.test( $( this ).val() ) ) {
				e.preventDefault();
				$( this ).addClass( 'error' );
			}
		} );

	} );

	// Toggle hidden password
	$( '#show-password' ).on( 'change', function() {
		if ( $( this ).is( ':checked' ) ) {
			changetype( $( '#pass-user' ), 'text' );
		} else {
			changetype( $( '#pass-user' ), 'password' );
		}
	} );
	
	// Cette fonction permet de changer un type text et type password
	// Se referer à http://codepen.io/CreativeJuiz/pen/cvyEi/
	// ... et https://gist.github.com/3559343 pour comprendre
	function changeType(x, type) {
		if(x.prop('type') == type)
			return x;
		try {
			return x.prop('type', type);
		} catch(e) {
			var html = $("<div>").append(x.clone()).html();
			var regex = '/type=(\")?([^\"\s]+)(\")?/';
			var tmp = $(html.match(regex) == null ?
				html.replace(">", ' type="' + type + '">') :
				html.replace(regex, 'type="' + type + '"') );
			tmp.data('type', x.data('type') );
			var events = x.data('events');
			var cb = function(events) {
				return function() {
					for(i in events)
					{
						var y = events[i];
						for(j in y)
							tmp.bind(i, y[j].handler);
					}
				}
			}(events);
			x.replaceWith(tmp);
			setTimeout(cb, 10);
			return tmp;
		}
	}
} );