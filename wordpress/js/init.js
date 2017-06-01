function search() {
	$('.search').toggleClass("push");
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$('.searchText').focus();
}

$(document).ready(function() {
	$('.sliderGallery').slick({
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		adaptiveHeight: true
	});
	$('.tileGallery').slick({
	  infinite: true,
	  slidesToShow: 3,
	  arrows: false,
	  slidesToScroll: 3,
	  autoplay: false
	});

	$('.see-more-button').click(function() {
		$('#postHead').toggleClass("extend");
	});
});