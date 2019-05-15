const jQuery = require('jquery');
var Theme = require('./modules/theme');
var Sliders = require('./modules/sliders');

jQuery(document).ready(function($) { // eslint-disable-line no-unused-vars
	Theme.init();
	Sliders.init();
});