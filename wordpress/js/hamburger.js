$(function() {
	var burger = $('.hamburger');
	var nav = $('.overlay');
	burger.click(function() {
		nav.toggleClass('nav-active');
		burger.toggleClass('is-active');
		$("html, body").animate({ scrollTop: 0 }, "slow");
		$('body').toggleClass('no-scroll');
	});
});