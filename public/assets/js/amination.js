// header
// active nav
// $(document).ready(function () {
//     $('ul li a').click(function () {
//         $('li a').removeClass("active");
//         $(this).addClass("active");
//     });
// });
$(document).ready(function () {
    $('.navRight a').click(function () {
        //removing the previous selected menu state
        $('.navRight').find('li.active').removeClass('active');
        //adding the state for this parent menu
        $(this).parents("li").addClass('active');

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
