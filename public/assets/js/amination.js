// header
// active nav
$(document).ready(function () {
    $('ul li a').click(function () {
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});
// --
$(window).scroll(function () {
    console.log($(window).scrollTop())
    if ($(window).scrollTop() > 63) {
        $('.header').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 64) {
        $('.header').removeClass('navbar-fixed');
    }
});
// --

// end header
