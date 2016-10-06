$(document).ready(function () {

    $('body').find('.parallax').each(function () {
        var positionStart = $(this).data('start');

        $(this).css("top", positionStart + "px");
        if ($(this).data('right') >= 0) {
            var positionRight = $(this).data('right');
            $(this).css("right", positionRight + "px");
        }
        if ($(this).data('left') >= 0) {
            var positionLeft = $(this).data('left');
            $(this).css("left", positionLeft + "px");
        }
    });


    $(window).on('scroll', function () {
        var offset = $(window).scrollTop();
        var sectionStart = $('section.start');
        var sectionStartHeight = sectionStart.height();
        var count = ((offset) / sectionStartHeight);
        if (offset < sectionStartHeight / 3) {
            $('header').removeClass('scrolled').addClass('dashed');
        }
        else {
            $('header').addClass('scrolled').removeClass('dashed');
        }

        if (offset <= sectionStartHeight) {

            $('.start-overlay').css("opacity", count);

        }

    });

    $(window).on('scroll', function () {
        var offset = $(window).scrollTop();
        $('section.parallax-section').each(function () {

            var parallaxStart = parseInt($(this).offset().top);
            var parallaxEnd = parseInt(parallaxStart + $(this).height());
            if (offset > (parallaxStart - 300) && offset < (parallaxEnd)) {
                var current = offset + 300;
                $(this).find('.parallax').each(function () {
                    var positionStart = $(this).data('start');
                    var positionEnd = $(this).data('end');
                    $(this).css("top", positionStart + (((current - parallaxStart) / (parallaxEnd)) * (positionEnd - positionStart)) + "px");
                });
            }
        });
    });

});

$(window).load(function () {
    $('section.start').addClass('loaded');
    setTimeout(function () {
        $('section.start .content .button').addClass('loaded');
    }, 2500);
});

$('a.wrapper').on('click', function (event) {
    event.preventDefault();
});

$('a.marker-1').on('click', function (event) {
    event.preventDefault();
    map.setCenter(new google.maps.LatLng(52.392772, 20.713141));
    map2.setCenter(new google.maps.LatLng(52.393772, 20.713141));
    $('ul.shop-info').find('a.button').removeClass('active');
    $(this).addClass('active');
    infowindow.open(map, marker);
    infowindow3.open(map2, marker21);
});

$('a.marker-2').on('click', function (event) {
    event.preventDefault();
    map.setCenter(new google.maps.LatLng(52.207649, 20.974265));
    map2.setCenter(new google.maps.LatLng(52.207649, 20.974265));
    $('ul.shop-info').find('a.button').removeClass('active');
    $(this).addClass('active');
    infowindow2.open(map, marker2);
    infowindow4.open(map2, marker22);
});

$('.hamburger-switch').on('click', function (event) {
    $(this).toggleClass('active');
    $('header nav').toggleClass('active');
});

$('.lightbox-close').on('click', function (event) {
    $('.lightbox-background, .lightbox-content').removeClass('active');
});

$('a[href], button[href]').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, {
                duration: 1000,
                complete: function () {
                    target.find('.buttons-main').addClass('active');
                    $('section.start .buttons-main').addClass('active');
                }
            });

            return false;
        }
    }
});

$(document).ready(function () {
    initMap();
});

function initMap() {
    // Styles a map in night mode.

    var myOptions = {
        center: {lat: 52.392772, lng: 20.713141},
        zoom: 15,
        scrollwheel: false,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ebe3cd"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#523735"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f1e6"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#c9b2a6"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#dcd2be"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#ae9e90"
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#93817c"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#a5b076"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#447530"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f1e6"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#fdfcf8"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f8c967"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#e9bc62"
                    }
                ]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e98d58"
                    }
                ]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#db8555"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#806b63"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#8f7d77"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ebe3cd"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#b9d3c2"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#92998d"
                    }
                ]
            }
        ]
    };
    map = new google.maps.Map(document.getElementById('map'), myOptions);
    map2 = new google.maps.Map(document.getElementById('map-2'), myOptions);

    marker = new google.maps.Marker({
        position: new google.maps.LatLng(52.392772, 20.713141),
        map: map,
        title: 'Dębina'
    });

    marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(52.207649, 20.974265),
        map: map,
        title: 'Warszawa'
    });

    marker21 = new google.maps.Marker({
        position: new google.maps.LatLng(52.392772, 20.713141),
        map: map2,
        title: 'Dębina'
    });

    marker22 = new google.maps.Marker({
        position: new google.maps.LatLng(52.207649, 20.974265),
        map: map2,
        title: 'Warszawa'
    });
    contentString = '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Wędliny z Dębiny</h1>' +
        '<div id="bodyContent">' +
        '<p>Dębina ul. Pańska 12</p><p>05-152 Czosnów</p>' +
        '<p><a class="red" href="mailto:wedlinyzdebiny@o2.pl">wedlinyzdebiny@o2.pl</a></p>' +
        '</div>' +
        '</div>';

    contentString2 = '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Hala Banacha "Zieleniak"&nbsp;</h1>' +
        '<div id="bodyContent">' +
        '<p>pawilon numer 26 ul. Grójecka 97</p><p>02-101 Warszawa</p>' +
        '<p><a class="red" href="mailto:wedlinyzdebiny@o2.pl">wedlinyzdebiny@o2.pl</a></p>' +
        '</div>' +
        '</div>';

    infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    infowindow2 = new google.maps.InfoWindow({
        content: contentString2
    });
    infowindow3 = new google.maps.InfoWindow({
        content: contentString
    });
    infowindow4 = new google.maps.InfoWindow({
        content: contentString2
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });

    marker2.addListener('click', function () {
        infowindow2.open(map, marker2);
    });

    marker21.addListener('click', function () {
        infowindow.open(map2, marker21);
    });

    marker22.addListener('click', function () {
        infowindow2.open(map2, marker22);
    });

    infowindow.open(map, marker);
    infowindow3.open(map2, marker21);
}
