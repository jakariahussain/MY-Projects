(function ($) {
    /*=======================================================
                            wow Js
    =======================================================*/
    new WOW().init();

    /*=======================================================
                    Data-background
    =======================================================*/
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })

    /*=======================================================
                    Magnific Popup
    =======================================================*/
    $('.gallery_item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    /*=======================================================
                    Header Swipper Slider
    =======================================================*/
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
            loop: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    /*=======================================================
                    services owl-caroselplugins)
    =======================================================*/
    $('.testimonials_review .owl-carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        nav: false,
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
    /*=======================================================
                            smoth scroll
    =======================================================*/
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