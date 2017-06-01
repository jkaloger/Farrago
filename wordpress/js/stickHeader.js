$(function(){
    var hdr = $('.header');
    var nav = $('.navItems');
    var anchor = $('.hdrNav').offset().top
               + $('.hdrNav').outerHeight(true);
    $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if(sc >= anchor) {
            
            nav.addClass('sticky');
            hdr.addClass('hdrPush');
            $('#logo').removeClass('hidden');
        } else {
           hdr.removeClass('hdrPush');
           nav.removeClass('sticky');
           $('#logo').addClass('hidden');
        }
    });
});