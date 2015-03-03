jQuery(document).foundation();

//
//$(document).ready(function () {
//    $('.slider').slick({
//        mobileFirst: true,
//        autoplay: true,
//        adaptiveHeight: true,
//        infinite: true,
//        dots: false,
//        arrows: false,
//        responsive: [
//            {
//                breakpoint: 1000,
//                settings: {
//                    arrows: true
//                }
//            }
//        ]
//    });
//});

$(document).foundation({
    equalizer : {
        // Specify if Equalizer should make elements equal height once they become stacked.
        equalize_on_stack: false
    }
});

function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
        center: new google.maps.LatLng(41.965309, -87.669801),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
}
google.maps.event.addDomListener(window, 'load', initialize);

$(document).foundation('equalizer', 'reflow');