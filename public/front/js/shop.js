(function ($) {
    "use strict";

    $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll'
      });




        // loader
        var loader = function() {
            setTimeout(function() {
                if($('#ftco-loader').length > 0) {
                    $('#ftco-loader').removeClass('show');
                }
            }, 1);
        };
        loader();


    // Initiate the wowjs
    new WOW().init();


 // Back to top button
 $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});

// Sticky Navbar
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.sticky-top').addClass('shadow-sm').css('top', '0px');
    } else {
        $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
    }
});


// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});
// Facts counter
$('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
});


// Date and time picker
$('.date').datetimepicker({
    format: 'L'
});
$('.time').datetimepicker({
    format: 'LT'
});


// Header carousel
$(".header-carousel").owlCarousel({
    autoplay: false,
    animateOut: 'fadeOutLeft',
    items: 1,
    dots: true,
    loop: true,
    nav : true,
    navText : [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
    ]
});


// Testimonials carousel
$(".testimonial-carousel").owlCarousel({
    autoplay: false,
    smartSpeed: 1000,
    center: true,
    dots: false,
    loop: true,
    nav : true,
    navText : [
        '<i class="bi bi-arrow-left"></i>',
        '<i class="bi bi-arrow-right"></i>'
    ],
    responsive: {
        0:{
            items:1
        },
        768:{
            items:2
        }
    }
});


})(jQuery);
