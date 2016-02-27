$( document ).ready(function() {

    $menu_header_container = $('.menu-header-container');
    $('#menu-button').on('click', function() {
    	if($(this).hasClass('show'))
    		$(this).add($menu_header_container).removeClass('show');
    	else
    		$(this).add($menu_header_container).addClass('show');

    })

    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
		var font = $('#font').detach();
		$('head').append(font);;
 	}
});