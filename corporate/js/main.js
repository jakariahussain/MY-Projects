(function ($) {
    //(plugin name wow plugins)
    new WOW().init();

    //(owl-caroselplugins)

    /*===================================================================
                                Project Circle
    =====================================================================*/
    $('.circle.one').css('transform', 'rotate(90deg)'); //For circle one
    $('.circle.two').css('transform', 'rotate(175deg)'); //For circle two
    $('.circle.three').css('transform', 'rotate(270deg)'); //For circle three
    $('.circle.four').css('transform', 'rotate(270deg)'); //For circle three

    /*===================================================================
                     Client Review Slider [Owl-Carousel]
    =====================================================================*/
    $('.creview-slider').owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        navText: ["<img src='images/all/05.png'>", "<img src='images/all/05.png'>"],
        smartSpeed: 500,
        dots: true,
        dotsData: true,
        onInitialized: counter,
        onTranslated: counter,
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

    function counter(event) {
        var item = event.item.index + 1; // Position of the current item
        $('.current-position').html("0" + item);
    }

    //(owl-caroselplugins)
    $('.testimonials .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        navText: ["<img src='images/all/04.png'>", "<img src='images/all/04.png'>"],
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