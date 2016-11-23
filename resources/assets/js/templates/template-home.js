// --------------------------------------------------------------------------------
// Requirements
// --------------------------------------------------------------------------------
require('../vendor/jquery.throttled-resize');
require('../components/instagram-slider');
require('../components/date-picker');

// --------------------------------------------------------------------------------
// Loaded
// --------------------------------------------------------------------------------
console.log('|-- templates/template-home.js... loaded');

// --------------------------------------------------------------------------------
// Toggle All Hours (Small)
// --------------------------------------------------------------------------------
$('#ViewHoursLink').on('click', function() {
	if ($('#TodaysHours').hasClass('todays-hours__view-all')) {
		$('#TodaysHours').removeClass('todays-hours__view-all');
		$('#TodaysHours').addClass('todays-hours__view-less');
		$('.details__block--all-hours').addClass('all-hours__open');
	} else {
		$('#TodaysHours').removeClass('todays-hours__view-less');
		$('#TodaysHours').addClass('todays-hours__view-all');
		$('.details__block--all-hours').removeClass('all-hours__open');
	}
});

// --------------------------------------------------------------------------------
// Booking Tabs
// --------------------------------------------------------------------------------
	var reset_tab_class = function(){
		$('ul.booking__tabs--list li').each(function(){
			$(this).removeClass('booking__tab--active');
		});
		$('.booking__content--block').each(function(){
			$(this).removeClass('booking__active');
		});
	}

	$('#BookingReservationsTab').on('click mouseenter', function(){
		reset_tab_class();
		$(this).parent().addClass('booking__tab--active');
		$('#BookingReservations').addClass('booking__active');
	});
	$('#BookingPartiesTab').on('click mouseenter', function(){
		reset_tab_class();
		$(this).parent().addClass('booking__tab--active');
		$('#BookingParties').addClass('booking__active');
	});
	$('#BookingVIPTab').on('click mouseenter', function(){
		reset_tab_class();
		$(this).parent().addClass('booking__tab--active');
		$('#BookingVIP').addClass('booking__active');
	});

	// $('#BookingReservationsTab').on('mouseenter', function(){
	// 	reset_tab_class();
	// 	$(this).parent().addClass('booking__tab--active');
	// 	$('#BookingReservations').addClass('booking__active');
	// });
	// $('#BookingPartiesTab').on('mouseenter', function(){
	// 	reset_tab_class();
	// 	$(this).parent().addClass('booking__tab--active');
	// 	$('#BookingParties').addClass('booking__active');
	// });
	// $('#BookingVIPTab').on('mouseenter', function(){
	// 	reset_tab_class();
	// 	$(this).parent().addClass('booking__tab--active');
	// 	$('#BookingVIP').addClass('booking__active');
	// });

// --------------------------------------------------------------------------------
// Show Hours (Medium Up)
// --------------------------------------------------------------------------------
$(window).on("throttledresize", function( event ) {
	var view_width = $(window).width();
	if (view_width >= settings.break.medium_min) {
		$('.details__block--all-hours').show();
	}
});
