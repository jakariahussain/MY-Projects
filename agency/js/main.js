(function ($) {
    //(plugin name wow plugins)
    new WOW().init();


    //(Services owl-caroselplugins)
    $('.about_area .owl-carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
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

    //(Testimonials owl-caroselplugins)
    $('.testimonials .owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    //(services owl-caroselplugins)
    $('.services .owl-carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
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
    // smoth scroll
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