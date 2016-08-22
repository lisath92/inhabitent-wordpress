$(function() {

    var $imgHeight = $(".hero-image").height(),
        $windowHeight = $(window).height();


    window.onload = function() {
        if ($('body').hasClass('home') || $('body').hasClass('page-template-page-about')) {
            $fromTop = $(window).scrollTop();
            if ($fromTop < $imgHeight) {
                $('.site-header').addClass('new-header');
            }
        }
    };


    $(window).on("scroll", function() {
        var $fromTop = $(window).scrollTop();
        if ($fromTop < $imgHeight) {
            console.log('I am past the hero image! ' + $imgHeight + ' is the image height ' + $windowHeight + ' is the window height.');
            $('.site-header').addClass('new-header');
        } else {

            $('.site-header').removeClass('new-header');
        }
    });
});