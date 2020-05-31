(function ($) {
$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
	slideBy:2,
	autoplayTimeout:3000,
	autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
})
    //sticky menu
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
            $(".sticky").removeClass("sticky-header");
        } else {
            $(".sticky").addClass("sticky-header");
        }
    });
    //(plugin name wow plugins)
    new WOW().init();

   $( "#accordion" ).accordion(); 


})(jQuery);