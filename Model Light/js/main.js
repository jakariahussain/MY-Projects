(function ($) {
    /* //sticky menu
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 1) {
                $(".sticky").removeClass("sticky-header");
            } else {
                $(".sticky").addClass("sticky-header");
            }
        });
        */
    //(plugin name wow plugins)
    new WOW().init();

    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
        }
    });
})(jQuery);