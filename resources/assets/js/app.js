//Slider
$('.slider').slick({
    autoplay: true,
    autoplaySpeed: 7000,
    fade: true
});

//Search Box Functionality
$('.search-icon').on('click', function() {
    $('html').addClass('search-active');
});

$('.close').on('click', function() {
    $('html').removeClass('search-active');
});

//Open and Close Drawer
$('.hamburger').on('click', function() {
    $('html').toggleClass('drawer-active');
});