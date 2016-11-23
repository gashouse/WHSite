// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
var breakpoints = function(element) {
	// Set Defaults
	element = element || $('body');

	// Variables
	var view_width = $(window).width();

	// Remove Classes
	$(element).removeClass('break-small break-medium break-large break-xlarge break-xxlarge');

	// Logic
	if (view_width <= settings.break.small_max) {
		$(element).addClass('break-small');
	} else if (view_width >= settings.break.medium_min && view_width <= settings.break.medium_max) {
		$(element).addClass('break-medium');
	} else if (view_width >= settings.break.large_min && view_width <= settings.break.large_max) {
		$(element).addClass('break-large');
	} else if (view_width >= settings.break.xlarge_min && view_width <= settings.break.xlarge_max) {
		$(element).addClass('break-xlarge');
	} else if (view_width >= settings.break.xxlarge_min) {
		$(element).addClass('break-xxlarge');
	} else {
		$(element).addClass('break-unknown');
	}
}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
module.exports = breakpoints;
