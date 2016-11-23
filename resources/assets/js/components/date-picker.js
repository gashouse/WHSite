// --------------------------------------------------------------------------------
// Requirements
// --------------------------------------------------------------------------------
var moment = require('moment');
var Pikaday = require('../vendor/pikaday');

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
// --------------------------------------------------------------------------------
// Document Ready
// --------------------------------------------------------------------------------
$(document).ready(function() {

	var picker = new Pikaday({
		field: $('#date')[0],
		format: 'YYYY-MM-DD',
	});
});