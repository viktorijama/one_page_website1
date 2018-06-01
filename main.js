
/* Language*/

  function myFunction() {
    document.getElementById("lngen").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.drop-lng')) {

      var dropdowns = document.getElementsByClassName("drop-lng-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  // Mobile menu//
  $(document).ready(function(){
      $(".navbar-nav a").click(function () {
          $(".collapse").removeClass('show');
        });
  });

  // Services content hide-show //
  $('.show-content').click(function(){

    if ($(this).hasClass('arrow-down')) {
        $(this).removeClass('arrow-down');
        $(this).addClass('arrow-up');
    } else {
        $(this).removeClass('arrow-up');
        $(this).addClass('arrow-down');
    }

    $(this).parent().parent().parent().next('.service-content').slideToggle('slow');

});

// map//
    window.onload = function() {
              initialize();
            }

        function initialize() {
        	  var myLatlng = new google.maps.LatLng(54.8921961, 23.9320768);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scaleControl: false,
        		scrollwheel: false,
        		styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "-100"
                        }
                    ]
                },
                {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 65
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": "50"
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "-100"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "30"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "40"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#ffff00"
                        },
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -97
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -100
                        }
                    ]
                }
            ]

            }

            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            var content =
            '<div class="iw-content">' +
                "Kauno pilis, <br />LT-00000 Kaunas" +
                '</div>' ;

            var infowindow = new google.maps.InfoWindow({
            	                 	content: content
            	            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: "One Page Website",
                animation: google.maps.Animation.DROP,
                                icon: "http://s4marketers.com/wp-content/plugins/google-maps/assets/images/icons/blueflag64.png"
                            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });

            google.maps.event.addListener(infowindow, 'click', function() {
                infowindow.close(map,marker);
              });

  // *
  // START INFOWINDOW CUSTOMIZE.
  // *
  google.maps.event.addListener(infowindow, 'domready', function() {
    var iwOuter = $('.gm-style-iw');

    var iwBackground = iwOuter.prev();
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});
    iwOuter.parent().parent().css({left: '138px', top:'107px'});
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'border-left: none;' + 'border-right: none;'});
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'none', 'background':'#003275'});
    iwBackground.children(':nth-child(3)').find('div:nth-child(2)').css({'left':'9.3px'});
    iwBackground.children(':nth-child(3)').find('div:first-child').children().css({'transform': 'skewX(38.6deg)'});
    iwBackground.children(':nth-child(3)').find('div:nth-child(2)').children().css({'transform': 'skewX(-38.6deg)'});
    iwBackground.children(':nth-child(3)').css({'margin-top':'-49px', 'margin-left':'-84px','left':'0px','top':'99px', 'transform':'rotate(90deg)', 'background':'#003275'});

    var iwCloseBtn = iwOuter.next();
    iwCloseBtn.css({opacity: '0',  right: '43px', top: '15px', border: '1px, solid', 'border-radius': '50px'});

    var iwCloseArea = iwOuter.next().next();
    iwCloseArea.css({'right': '37px', 'top':'9px', 'width':'165px', 'height':'65px'});
});

}
