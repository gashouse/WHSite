// --------------------------------------------------------------------------------
// Requirements
// --------------------------------------------------------------------------------
require('../vendor/jquery.throttled-resize');
var Swipe = require('../vendor/swipe');

// --------------------------------------------------------------------------------
// Loaded
// --------------------------------------------------------------------------------
console.log('|-- components/instagram-slider.js... loaded');

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

$('.instagram__post').each(function(index) {
	var view_width = $(window).width();
	var post_height = $(this).outerHeight();
	var img_height = $(this).find('.instagram__photo img').outerHeight();
	var text_height = $(this).find('.instagram__text').outerHeight();
	var wrapper_height = img_height - 115;

	if (view_width >= settings.break.large_min) {
		$(this).find('.instagram__text--wrapper').css('max-height', wrapper_height);
	}

	if (text_height > wrapper_height) {
		$(this).find('.instagram__text--wrapper').addClass('with-scroll');
	}

});

// --------------------------------------------------------------------------------
// Set Active Slide
// --------------------------------------------------------------------------------
var active_post = function(index, elem) {
	$('.instagram__post.post__active').removeClass('post__active');
	$(elem).addClass('post__active');
}

// --------------------------------------------------------------------------------
// Set Active Thumbnail
// --------------------------------------------------------------------------------
var click_thumb = function(elem) {
	$('.instagram__thumbnail').each(function(index) {
		$(this).removeClass('thumbnail__active');
	});
	$(elem).parent().addClass('thumbnail__active');
}

var active_thumb = function(index) {
	$('.instagram__thumbnail').each(function(index) {
		$(this).removeClass('thumbnail__active');
	});
	// $(elem).parent().addClass('thumbnail__active');
	$('#InstagramThumbnail--' + index).addClass('thumbnail__active');
}

// --------------------------------------------------------------------------------
// Set Active Slider Height
// --------------------------------------------------------------------------------
var active_height = function() {
	var post_height = $('.instagram__post.post__active').outerHeight();
	$('.instagram__post--wrapper').css({
		'height': post_height,
		'max-height': post_height,
	});
}

// --------------------------------------------------------------------------------
// Set Thumbnail Height
// --------------------------------------------------------------------------------
var thumbnail_size = function() {
	var thumbnail_width = $('.instagram__thumbnail').first().outerWidth();
	var thumbnail_height = thumbnail_width;

	$('.instagram__thumbnail').css({
		'height': thumbnail_height,
		'max-height': thumbnail_height,
	});

	$('.instagram__thumbnail').each(function(index) {
		var img_elem = $(this).find('img');
		var img_width = $(img_elem).outerWidth();
		var img_height = $(img_elem).outerHeight();
		var img_aspect = img_height/img_width;

		// If portrait image
		if (img_aspect > 1) {
			img_elem.addClass('thumb__portrait');
			img_elem.css({
				'width': thumbnail_width,
				'height': (img_height * thumbnail_width) / img_width,
			});
		// If landscape image
		} else if (img_aspect < 1) {
			img_elem.addClass('thumb__landscape');
			img_elem.css({
				'width': (img_width * thumbnail_height) / img_height,
				'height': thumbnail_height,
			});
		// If square image
		} else if (img_aspect == 1) {
			img_elem.addClass('thumb__square');
			img_elem.css({
				'width': thumbnail_width,
				'height': thumbnail_height,
			});
		} else {
			//
		}

	});
}

// --------------------------------------------------------------------------------
// Document Ready
// --------------------------------------------------------------------------------
$( document ).ready(function() {

	window.mySwipe = $('#InstagramSlider').Swipe({
		// startSlide: 0,
		// auto: 3000,
		continuous: true,
		disableScroll: true,
		stopPropagation: true,
		callback: function(index, elem) {
			active_post(index, elem);
			active_thumb(index);
			active_height(elem);
		},
		// transitionEnd: function(index, elem) {}
	}).data('Swipe');

	$('#InstagramPrev').on('click', function(){
		mySwipe.prev();
	});

	$('#InstagramNext').on('click', function(){
		mySwipe.next();
	});

	$('.instagram__thumbnail').each(function(index) {
		$('#InstagramThumbnail--' + index + ' a').on('click', function(){
			mySwipe.slide(index);
			click_thumb($(this));
		});
	});

	active_height();
	thumbnail_size();
});


// --------------------------------------------------------------------------------
// Window Resized
// --------------------------------------------------------------------------------
$(window).on("throttledresize", function( event ) {
	active_height();
	thumbnail_size();
});
