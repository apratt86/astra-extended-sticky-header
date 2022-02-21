(function( $ ) {
	'use strict';

	$(window).scroll(function(){
		if( $(this).scrollTop() > 100 ) {
			$('#masthead').css({"background-color":"var(--e-global-color-primary)"});
			$('.ast-above-header-wrap').css({"display":"none"});
		} else {
			$('#masthead').css({"background-color":"transparent"});
			$('.ast-above-header-wrap').css({"display":"block"});
		}
	});

})( jQuery );