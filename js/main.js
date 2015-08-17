(function ($) {
"use strict";
	
	$(document).ready(function() {

	function loadContent () {
		$.ajax({
			url: 'wp-admin/admin-ajax.php',
			data: {
				action: 'load_content'
			}
		}).done(function(data) {
			$('.shopping_cart_content').html(data);
		});
	}

	$( '.betalsatt' ).on( 'click', loadContent );

	});

}(window.jQuery));