$(function(){
    var nav = $('.navItems');
    var anchor = $('.hdrNav').offset().top
               + $('.hdrNav').outerHeight(true);
    $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if(sc >= anchor) {
            nav.addClass('sticky');
            $('#logo').removeClass('hidden');
        } else {
           nav.removeClass('sticky');
           $('#logo').addClass('hidden');
        }
    });
});