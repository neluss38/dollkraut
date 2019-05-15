// ------------------------------------
//
// Sliders
//
// ------------------------------------

const jQuery = require('jquery');
const Swiper = require('swiper');

(function($) { // eslint-disable-line no-unused-vars

	if (typeof window.Sliders == 'undefined') window.Sliders = {};

	Sliders = {

		settings: {},

		/*
		 * Sliders init
		 */

		init: function() {

			this.sliders();
			console.log('Sliders initilised');

		},

		sliders: function() {
			var smallCal = new Swiper('.swiper-container', {
			    speed: 400,
			});
		}
	};

	module.exports = Sliders;

})(jQuery);
