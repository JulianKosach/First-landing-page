// When the window has finished loading create our google map below
// google.maps.event.addDomListener(window, 'load', init);
// jQuery
(function($, undefined) {



    $(document).ready(function() {
        var isMapInit = false;
        $('a.map-btn').click(function(e) {
            e.preventDefault();
            mapLazyInit();
        });

        function mapLazyInit() {
            if (!isMapInit) {
                $("body").append('<div id="pop-map"><a href="#"></a>\
                        <p>Москва, 129346, Янтарный проезд, д.21, пом. III <br> (вход со двора рядом с подъездом №2)</p>\
                        <div id="map"></div></div>');
                init();
                isMapInit = true;
                $("#pop-map a").click(function(e) {
                    e.preventDefault();
                    $('#pop-map').animate({
                        'opacity': '0'
                    }, 800, function() {
                        $(this).css("display", "none");
                    });
                });
            }
            $('#pop-map').css({
                'display': 'block',
                'opacity': '0'
            });
            $('#pop-map').animate({
                'opacity': '1'
            }, 800);
        };
    });



    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var bounds = new google.maps.LatLngBounds();
        var center = new google.maps.LatLng(55.8708447, 37.6855528); //55.87117,37.687188
        bounds.extend(center);
        var loc = new google.maps.LatLng(55.8708447, 37.6855528);
        bounds.extend(loc);
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,
            scrollwheel: false,
            streetViewControl: false,
            panControl: true,
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },

            // The latitude and longitude to center the map (always required)
            center: center, // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "landscape",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "stylers": [{
                    "hue": "#00aaff"
                }, {
                    "saturation": -100
                }, {
                    "gamma": 2.15
                }, {
                    "lightness": 12
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": 24
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": 57
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        var map = new google.maps.Map(mapElement, mapOptions);


        var marker = new google.maps.Marker({
            position: loc,
            map: map,
            icon: {
                url: 'img/loc.png',
                size: new google.maps.Size(47, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(23, 71)
            },
            title: 'Москва, Янтарный проезд, д.21'
        });

        // map.fitBounds(bounds);//autozoom
    };

})(jQuery);
