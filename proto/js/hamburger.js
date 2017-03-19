$(function() {
	var burger = $('.hamburger');
	var nav = $('.mobile-menu');
	burger.click(function() {
		burger.toggleClass('hamburgerActive');
		nav.toggleClass('pullUpMenu');
	});

	
});