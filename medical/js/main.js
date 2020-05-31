(function ($) {
    /*=======================================================================
                               wow Js
=========================================================================*/
    new WOW().init();
    
    /*=======================================================================
                               Sticky Js
=========================================================================*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 0) {
            $(".sticky").removeClass("sticky-header");
        } else {
            $(".sticky").addClass("sticky-header");
        }
    });
    
    /*=======================================================================
                              Counter Js
=========================================================================*/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    /*=======================================================================
                               Services Carousel Js
=========================================================================*/
    $('.services_area .owl-carousel').owlCarousel({
        margin: 40,
        loop: true,
        navText: ['<span>&#8810;</span>', '<span>&#8811;</span> '],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    
    /*=======================================================================
                              Department Carousel Js
=========================================================================*/
    $('.department_area .owl-carousel').owlCarousel({
        margin: 30,
        loop: true,
        autoplay: true,
        navText: ['<span>&#8810;</span>', '<span>&#8811;</span> '],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    
    /*=======================================================================
                               Team_area Carousel Js
=========================================================================*/
    $('.team_area .owl-carousel').owlCarousel({
        margin: 30,
        loop: true,
        autoplay: true,
        navText: ['<span>&#8810;</span>', '<span>&#8811;</span> '],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    //
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 5,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        loop: true,
        loopedSlides: 1, //looped slides should be the same
        thumbs: {
            swiper: galleryThumbs,
        },
    });

    /*=======================================================================
                              SmoothScroll Js
=========================================================================*/
    var scroll = new SmoothScroll('a[href*="#"]', {
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        speed: 2000,
        offset: 50,
        easing: 'easeInOutCubic',
        customEasing: function (time) {
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;
        },
    });

})(jQuery);