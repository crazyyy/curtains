$(document).ready(function() {
  //filter btns
  $(".portfolio-filter__top .btn").click(function(e) {
    e.preventDefault();
    $(".portfolio-filter__top .btn").each(function() {
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });
  $(".portfolio-filter__bot .btn").click(function(e) {
    e.preventDefault();
    $(".portfolio-filter__bot .btn").each(function() {
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });
  $(".btn-reset").click(function(e) {
    e.preventDefault();
    $(".btn-filter").each(function() {
      $(this).removeClass("active");
    });
  });
  //**************
  $(".filter-orange .filter-1").click(function(e) {
    e.preventDefault();
    $(".filter-orange .filter-1").each(function() {
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });
  $(".filter-orange .filter-2").click(function(e) {
    e.preventDefault();
    $(".filter-orange .filter-2").each(function() {
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });
  //sidebar accordeon
  $(".sidebar-category__btn").click(function() {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(this).next().slideDown();
    } else {
      $(this).next().slideUp();
    }
  });
  //gallery
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
  /*****end gallery****/
  //slider karnizi-sliders__slider
  if ($(".karnizi-sliders__slider")) {
    $(".karnizi-sliders__slider").slick();
  };
  //materials-slider
  if ($(".materials-slider")) {
    $(".materials-slider").slick({
      slidesToShow: 5,
      slidesToScroll: 2,
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 2
        }
      }]
    });
  };
  //modal-slider
  $('#myModal').on('shown.bs.modal', function(e) {
    $(".modal-slider").slick();
  });

  //******header footer******
  $(function() {
    var hf = function() {
      var h_footer = $("footer").height();
      $(".wrapper").css({
        "paddingBottom": h_footer
      });
      if ($(window).width() < 992) {
        $(".blog-page__block.img-right").each(function() {
          $(this).find(".date").after($(this).find("img"));
        });
      };
      if ($(window).width() < 768) {
        $(".footer .row").prepend($(".footer-logo"));
      };
      /*if ($(window).width()<480) {
          $(".h-top__contacts").after($(".h-top__adress"));
          $(".f-top__widget-vk").after($(".f-top__logo"));
      };*/
    }
    $(window).bind("load resize", hf);
  });
  /**********************/
  //hamburger menu
  $(".hamburger").click(function() {
    $(this).toggleClass("is-active");
    if ($(this).hasClass("is-active")) {
      $(".h-menu__list").slideDown();
    } else {
      $(".h-menu__list").slideUp();
    }
  });
  /***********************/
  $(".we-make__link").mouseenter(function() {
    $(this).children(".informer").fadeIn();
  }).mouseleave(function() {
    $(this).children(".informer").fadeOut();
  });
  /************range slider****************/
  $("#slider-range").slider({
    range: true,
    min: 1,
    max: 150,
    values: [20, 90],
    slide: function(event, ui) {
      $("#amount").val(ui.values[0]);
      $("#amount_1").val(ui.values[1]);
    }
  });
  $("#amount").val($("#slider-range").slider("values", 0));
  $("#amount_1").val($("#slider-range").slider("values", 1));

  // Изменение местоположения ползунка при вводиде данных в первый элемент input
  $("input#amount").change(function() {
    var value1 = $("input#amount").val();
    var value2 = $("input#amount_1").val();
    if (parseInt(value1) > parseInt(value2)) {
      value1 = value2;
      $("input#amount").val(value1);
    }
    $("#slider-range").slider("values", 0, value1);
  });

  // Изменение местоположения ползунка при вводиде данных в второй элемент input
  $("input#amount_1").change(function() {
    var value1 = $("input#amount").val();
    var value2 = $("input#amount_1").val();

    if (parseInt(value1) > parseInt(value2)) {
      value2 = value1;
      $("input#amount_1").val(value2);
    }
    $("#slider-range").slider("values", 1, value2);
  });

  // фильтрация ввода в поля
  jQuery('#amount, #amount_1').keypress(function(event) {
    var key, keyChar;
    if (!event) var event = window.event;

    if (event.keyCode) key = event.keyCode;
    else if (event.which) key = event.which;

    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
    keyChar = String.fromCharCode(key);

    if (!/\d/.test(keyChar)) return false;

  });
  //map
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 14,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(53.903760, 27.561377),

      // How you would like to style the map.
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [{
          "saturation": "-100"
        }]
      }, {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": 65
        }, {
          "visibility": "on"
        }]
      }, {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": "50"
        }, {
          "visibility": "simplified"
        }]
      }, {
        "featureType": "road",
        "elementType": "all",
        "stylers": [{
          "saturation": "-100"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [{
          "visibility": "simplified"
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [{
          "lightness": "30"
        }]
      }, {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [{
          "lightness": "40"
        }]
      }, {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [{
          "saturation": -100
        }, {
          "visibility": "simplified"
        }]
      }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "hue": "#ffff00"
        }, {
          "lightness": -25
        }, {
          "saturation": -97
        }]
      }, {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [{
          "saturation": "25"
        }, {
          "lightness": "-76"
        }, {
          "gamma": "4.71"
        }, {
          "color": "#C22679"
        }]
      }, {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [{
          "lightness": -25
        }, {
          "saturation": -100
        }]
      }]
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var markerIcon = 'img/marker.png';
    var marker1 = new google.maps.Marker({
      position: new google.maps.LatLng(53.901878, 27.543881),
      map: map,
      icon: markerIcon
    });
    var marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(53.899416, 27.555606),
      map: map,
      icon: markerIcon
    });
    var marker3 = new google.maps.Marker({
      position: new google.maps.LatLng(53.898286, 27.586119),
      map: map,
      icon: markerIcon
    });
    var marker4 = new google.maps.Marker({
      position: new google.maps.LatLng(53.907462, 27.590258),
      map: map,
      icon: markerIcon
    });

    //infowindows
    var infowindow1 = new google.maps.InfoWindow({
      content: '<div class="infowindow-map">' +
        '<div class="infowindow-head"><h3 class="upper orange fira-bold">ТЦ «ТИТАН»</h3><p>пр. Победителей 103</p></div>' +
        '<p>Время работы: ПН-ВТ: 8:00 - 20:00</p>' +
        '<p class="lilac">ВС: 8:00 - 20:00</p>' +
        '</div>'
    });
    var infowindow2 = new google.maps.InfoWindow({
      content: '<div class="infowindow-map">' +
        '<div class="infowindow-head"><h3 class="upper orange fira-bold">ТЦ «ТИТАН2»</h3><p>пр. Победителей 103</p></div>' +
        '<p>Время работы: ПН-ВТ: 8:00 - 20:00</p>' +
        '<p class="lilac">ВС: 8:00 - 20:00</p>' +
        '</div>'
    });
    var infowindow3 = new google.maps.InfoWindow({
      content: '<div class="infowindow-map">' +
        '<div class="infowindow-head"><h3 class="upper orange fira-bold">ТЦ «ТИТАН3»</h3><p>пр. Победителей 103</p></div>' +
        '<p>Время работы: ПН-ВТ: 8:00 - 20:00</p>' +
        '<p class="lilac">ВС: 8:00 - 20:00</p>' +
        '</div>'
    });
    var infowindow4 = new google.maps.InfoWindow({
      content: '<div class="infowindow-map">' +
        '<div class="infowindow-head"><h3 class="upper orange fira-bold">ТЦ «ТИТАН4»</h3><p>пр. Победителей 103</p></div>' +
        '<p>Время работы: ПН-ВТ: 8:00 - 20:00</p>' +
        '<p class="lilac">ВС: 8:00 - 20:00</p>' +
        '</div>'
    });

    marker1.addListener('click', function() {
      infowindow1.open(map, marker1);
    });
    marker2.addListener('click', function() {
      infowindow2.open(map, marker2);
    });
    marker3.addListener('click', function() {
      infowindow3.open(map, marker3);
    });
    marker4.addListener('click', function() {
      infowindow4.open(map, marker4);
    });
  }
});
