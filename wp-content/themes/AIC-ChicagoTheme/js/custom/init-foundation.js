jQuery(document).foundation();

$(document).ready(function () {
    $('.slider').slick({
        mobileFirst: true,
        autoplay: true,
        adaptiveHeight: true,
        infinite: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    arrows: true
                }
            }
        ]
    });
});

