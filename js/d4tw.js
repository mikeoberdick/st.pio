//Automatically generate filler content height to ensure footer is on bottom of the page
jQuery(document).ready(function() {
	jQuery('#js-heightControl').css('height', jQuery(window).height() - jQuery('html').height() +'px');
});

//Homepage Slider

jQuery(document).ready(function(){
  	jQuery('#homepageSlider').slick({
    autoplay: true,
 	autoplaySpeed: 5000,
  	infinite: true,
  	speed: 500,
  	fade: true,
  	cssEase: 'linear',
    arrows: false,
  });
});