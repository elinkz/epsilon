(function ($) {
"use strict";
	
	$(document).ready(function() {
		// Load Products
	   /*function loadProducts (container, href) {
			$(container).load(href + ' #products');
		}

		$( '.product_categories' ).on( 'click', function (event) {
			
			var product_container = $('.products_container');
			var href = $(this).attr('href');
			var container = product_container.find('.product');

			if ( !container.length ) {
				 product_container.append('<div class="product"></div>');
				 container = product_container.find('.product');
			}

			event.preventDefault();
			loadProducts(container, href);
			$('.close_single_btn').fadeIn('fast');

		});

		// Close products
		$('.close_single_btn').on('click', function() { 

			$('.product').remove();
			$('.close_single_btn').css('display', 'none');
			
		});*/

	function loadContent () {
		$.ajax({
			url: '/wp-admin/admin-ajax.php',
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