// ------------------------------------
//
// Theme
//
// ------------------------------------

const jQuery = require('jquery');

(function($) { // eslint-disable-line no-unused-vars

	if (typeof window.Theme == 'undefined') window.Theme = {};

	Theme = {

		settings: {},

		/*
		 * Theme init
		 */

		init: function() {

			this.website();
			console.log('Theme initilised');

		},

		website: function() {
			var $menuhome = $('.menu-home');
		    var $mobilemenu = $('.hamburger-icon');
		    var $header = $('.header-wrapper');
		    var $stripe = $('.ham-stripe');
		    var $menutitlebio = $('.submenu-title-bio');
		    var $menutitlebooking = $('.submenu-title-booking');
		   	var	$links = $('.header-wrapper .primary a');
		    var	$pages = $('.page');

		    mobilemenutoggle();
		        function mobilemenutoggle() {
		            $mobilemenu.click(function() {
		                $mobilemenu.toggleClass('active');
		                $header.toggleClass('active');
		                $stripe.toggleClass('active');
		            });
		        }


		    removemenutoggle();
		        function removemenutoggle() {
		            $('.header-wrapper .primary a').click(function() {
		                $('.header-wrapper').removeClass('active');
		                $header.removeClass('active');
		                $stripe.removeClass('active');
		            });
		        }

		    submenutogglebio();
		        function submenutogglebio() {
		            $menutitlebio.click(function() {
		                $('.submenu-item-bio').toggleClass('active');
		            });
		        }

		    submenutogglebooking();
		        function submenutogglebooking() {
		            $menutitlebooking.click(function() {
		                $('.submenu-item-booking').toggleClass('active');
		            });
		        }

		    $links.each(function(index) {

		        $(this).click(function(e){

		            // stop link from going anywhere
		            e.preventDefault();

		            // remove active class from all active menu items
		            $('.header-wrapper .primary a').removeClass('is-active');

		            // add active class to the clicked menu items
		            $(this).addClass('is-active');


		            // remove active class from all active pages
		            $('.page').removeClass('is-active');

		            // get index of this menu item
		            var $index = $(this).data('index');

		            // loop over all pages, find the matching index, add active class
		            $('.page').each(function() {
		                if($(this).data('index') == $index) {
		                    $(this).addClass('is-active');
		                }
		            });
		        });
		    })
		}
	};

	module.exports = Theme;

})(jQuery);