$(function() {

//Declare image height and window height
    var $imgHeight = $(".hero-image").height(),
    $windowHeight = $(window).height();
//Remove new header if there are no hero images on those pages    
    if (!$('main.site-main > div').hasClass('hero-image')) {
       
        $('header').removeClass('new-header');
    };
//Show fixed header once scrolled past the hero image    
    $(window).on("scroll", function() {
        var $fromTop = $(window).scrollTop();
        if ($fromTop < $imgHeight) {
            $('header').addClass('new-header');
        } else {
            $('header').removeClass('new-header');
        }
    });
});