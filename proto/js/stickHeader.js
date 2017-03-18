$(function(){
    var nav = $('.navItems');
    var anchor = $('.hdrNav').offset().top
               + $('.hdrNav').outerHeight(true);
    $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if(sc >= anchor) {
            nav.addClass('sticky');
            console.log(">");
        } else {
           nav.removeClass('sticky');
           console.log("<");
        }
    });
});