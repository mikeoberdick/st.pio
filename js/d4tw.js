jQuery(function($){

//Automatically generate filler content height to ensure footer is on bottom of the page
jQuery(document).ready(function() {
	jQuery('#js-heightControl').css('height', jQuery(window).height() - jQuery('html').height() +'px');
});

/////////////////  SLIDER  \\\\\\\\\\\\\\\\\
$(document).ready(function() {
	$('#heroSlider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  infinite: true,
	  arrows: false,
	  dots: false,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  fade: true,
	  fadeSpeed: 1000
	});
});

//end of file
});