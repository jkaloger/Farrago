$(document).ready(function() {
	$('.sliderGallery').slick({
		arrows: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000
	});
	$('.tileGallery').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: false
	});
});