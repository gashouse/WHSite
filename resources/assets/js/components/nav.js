// --------------------------------------------------------------------------------
// Loaded
// --------------------------------------------------------------------------------
console.log('|-- components/nav.js... loaded');

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
var toggle_menu = function(){
	if ($('#Header').hasClass('toggle__active')) {
		$('#Header').removeClass('toggle__active');
		$('#Nav').removeClass('menu__active');
		$('body').removeClass('menu__open');
	} else {
		$('#Header').addClass('toggle__active');
		$('#Nav').addClass('menu__active');
		$('body').addClass('menu__open');
	}
}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
$('#MenuButton').on('click', function() {
	toggle_menu();
	// if ($('#Header').hasClass('toggle__active')) {
	// 	$('#Header').removeClass('toggle__active');
	// 	$('#Nav').removeClass('menu__active');
	// 	$('body').removeClass('menu__open');
	// } else {
	// 	$('#Header').addClass('toggle__active');
	// 	$('#Nav').addClass('menu__active');
	// 	$('body').addClass('menu__open');
	// }
});

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
$('.close-menu').on('click', function() {
	toggle_menu();
});
