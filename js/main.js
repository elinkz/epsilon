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
			$('.step_0').css('font-weight', '300');
			$('.step_1').css('font-weight', '700');
		});
	}

	$( '.next_step_btn' ).on( 'click', loadContent );

	});

}(window.jQuery));