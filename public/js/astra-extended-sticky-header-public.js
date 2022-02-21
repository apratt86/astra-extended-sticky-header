(function( $ ) {
	'use strict';

	$(document).scroll(function(){
		if( $(this).scrollTop() > 195 ) {
			$('#masthead').css({"background-color":"rgba(164, 194, 196, 0.5)"});
		} else {
			$('#masthead').css({"background-color":"transparent"});
		}
	});

})( jQuery );
