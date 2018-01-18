( function( $ ) {
	jQuery("#five-col .widget").each(function(){
		jQuery( this ).find('img').wrap( "<div class='img-container'></div>");
		jQuery(jQuery(this).find('h2').detach()).appendTo(jQuery(this));
	});
	jQuery(".custom-html-widget").addClass('cl-effect-1');

} )( jQuery );