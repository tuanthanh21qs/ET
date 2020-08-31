(function($) {
"use strict";
    /* service toggle */
    $('.service-two-icon ').on('click', function() {
        $(this).siblings('.service-two_toggle ').css({
            'left': '0px',
            'opacity': '1'
        });
        $(this).siblings('.service-two-close-icon').css({
            'left': '95%',
            'opacity': '1'
        });
    });
    $('.service-two-close-icon').on('click', function() {
        $(this).siblings('.service-two_toggle ').css({
            'left': '-100%',
            'opacity': '0'
        });
        $(this).css({
            'left': '-100%',
            'opacity': '0'
        });
    });
/* end service toggle */
})(jQuery);

