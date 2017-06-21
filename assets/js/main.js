$(document).ready(function() {
  $('.calldisainer--main form').on('submit', function(e) {
      var firstTab = $('.nav-tabs--form .active a').html();
      var html = firstTab;
      $('.catalog-checkbox input:checked').each(function(index, el) {
        var id = $(this).attr('id');
        html = html + ' ' + id;
      });
      $('.input-chosen input').val(html)

    })
    /* modal window on evaves page*/
  $('.karnizi-type__block a').on('click', function(e) {
    var $parent = $(this).parent();
    $parent.addClass('current-modal-container');
    var currentId = $parent.attr('data-id');
    var title = $parent.find('.karnizi--title').html();
    $('.modal-titles').html(title);
    var country = $parent.find('.country').html();
    $('.modal-country').html(country);
    var width = $parent.find('.width').html();
    $('.modal-width span').html(width);
    var diametr = $parent.find('.diametr').html();
    $('.modal-diametr span').html(diametr);
    var image = $parent.find('img').attr('data-image');
    $('.modal-image').attr('src', image);
    $('.modal-image').attr('title', title);
    $('.modal-image').attr('alt', title);
    $('.modal-colors').html('');
    $('.current-modal-container .eaves-colors').each(function(index, el) {
      var color = $(this).attr('data-color');
      var title = $(this).html();
      $('.modal-colors').append('<div class="karnizi-type__modal-color"><div class="color color--1" style="background-color: ' + color + ';"></div><p>' + title + '</p></div>');
    });

    $('.current-modal-container').removeClass('current-modal-container')
      // $('#modal_eaves .karnizi-type__modal-descr .upper').html('verstala pidarala')
  })

  if ($('body').hasClass('page-template-page-zhaluzi') || $('body').hasClass('page-template-page-rollerblinds')) {
    /* set active shutter on shutter page */
    var location = $('.filter-1.active').attr('data-slug');
    var rendering = $('.filter-2.active').attr('data-slug');
    var selector = '.' + location + '_' + rendering;
    $('.zhaluzi-card--active').removeClass('zhaluzi-card--active');
    $(selector).addClass('zhaluzi-card--active');
    /* end setting */

    $('.filter-1').on('click', function(e) {
      if (!$(this).hasClass('active')) {
        var location = $(this).attr('data-slug');
        var rendering = $('.filter-2.active').attr('data-slug');
        var selector = '.' + location + '_' + rendering;
        $('.zhaluzi-card--active').removeClass('zhaluzi-card--active');
        $(selector).addClass('zhaluzi-card--active');
      }
    })

    $('.filter-2').on('click', function(e) {
      if (!$(this).hasClass('active')) {
        var location = $('.filter-1.active').attr('data-slug');
        var rendering = $(this).attr('data-slug');
        var selector = '.' + location + '_' + rendering;
        $('.zhaluzi-card--active').removeClass('zhaluzi-card--active');
        $(selector).addClass('zhaluzi-card--active');
      }
    })
  }

  if ($('body').hasClass('page-template-page-portfolio')) {
    $('.portfolio-filter__top a').on('click', function(e) {
      var room = $(this).attr('data-slug');
      var exampl = $('.portfolio-filter__bot .active').attr('data-slug');
      var classOne = 'room_' + room;
      var selectorOne = '.room_' + room;
      var classTwo = 'exampl_' + exampl;
      var selectorTwo = '.exampl_' + exampl;

      if ($('.portfolio-filter__bot .active').hasClass('all')) {
        $('.portfolio-rezalt--block').each(function(index, el) {
          $(this).hide('slow');
        });
        $(selectorOne).each(function(index, el) {
          $(this).show('slow');
        });
      } else {
        $('.portfolio-rezalt--block').each(function(index, el) {
          $(this).hide('slow');
        });
        $(selectorOne).each(function(index, el) {
          if ($(this).hasClass(classTwo)) {
            $(this).show('slow');
          }
        });
      }
    })
    $('.portfolio-filter__bot a').on('click', function(e) {
      var room = $('.portfolio-filter__top .active').attr('data-slug');
      var exampl = $(this).attr('data-slug');
      var classOne = 'room_' + room;
      var selectorOne = '.room_' + room;
      var classTwo = 'exampl_' + exampl;
      var selectorTwo = '.exampl_' + exampl;

      if ($('.portfolio-filter__top .active').hasClass('all')) {
        $('.portfolio-rezalt--block').each(function(index, el) {
          $(this).hide('slow');
        });
        $(selectorTwo).each(function(index, el) {
          $(this).show('slow');
        });
      } else {
        $('.portfolio-rezalt--block').each(function(index, el) {
          $(this).hide('slow');
        });
        $(selectorTwo).each(function(index, el) {
          if ($(this).hasClass(classOne)) {
            $(this).show('slow');
          }
        });
      }
    })
    $('.portfolio-filter__bot .btn-reset').on('click', function(e) {
      $('.portfolio-filter__top .active').removeClass('active')
      $('.portfolio-filter__top .all').addClass('active')
      $('.portfolio-filter__bot .active').removeClass('active')
      $('.portfolio-filter__bot .all').addClass('active')
      $('.portfolio-rezalt--block').each(function(index, el) {
        $(this).show('slow');
      });
    })
  }

  $('.disabled').on('click', function(e) {
      e.preventDefault();
    })
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
  if ($(".materials-slider-1")) {
    $(".materials-slider-1").slick({
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
  if ($(".materials-slider-2")) {
    $(".materials-slider-2").slick({
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
  if ($(".materials-slider-3")) {
    $(".materials-slider-3").slick({
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
  if ($(".materials-slider-4")) {
    $(".materials-slider-4").slick({
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
  if ($(".materials-slider-5")) {
    $(".materials-slider-5").slick({
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
  if ($(".materials-slider-6")) {
    $(".materials-slider-6").slick({
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

  $('#modal_eaves').on('shown.bs.modal', function(e) {
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

  if ($('body').hasClass('tax-categories')) {
    $('.sidebar-range').hide('fast');
    var ajaxurl = window.homepage + '/wp-admin/admin-ajax.php';
    $.ajax({
      type: "GET",
      url: ajaxurl,
      dataType: 'html',
      data: ({
        action: 'get_prices_and_id',
      }),

      success: function(data) {
        var result = JSON.parse(data);
        var range = [];

        $.each(result, function(index, val) {

          val.price = parseInt(val.price);
          val.id = parseInt(val.id);
          val.sale = parseInt(val.sale);

          range.push(val.price)
        });

        range.sort(function(a, b) {
          return a - b;
        });

        window.range = range;

        var highest = range[range.length - 1];
        var minis = range[0];

        $("#slider-range").slider({
          range: true,
          min: minis,
          max: highest,
          values: [minis, highest],
          slide: function(event, ui) {
            $("#amount").val(ui.values[0]);
            $("#amount_1").val(ui.values[1]);
          }
        });
        $("#amount").val($("#slider-range").slider("values", 0));
        $("#amount_1").val($("#slider-range").slider("values", 1));

        window.rangedResult = result;
        $('.sidebar-range').show('fast');
        return rangedResult;
      }
    });


  } else {
    var highest = 150;
    var minis = 1;
    var range = [20, 90];
    window.range = range;
    $("#slider-range").slider({
      range: true,
      min: minis,
      max: highest,
      values: range,
      slide: function(event, ui) {
        $("#amount").val(ui.values[0]);
        $("#amount_1").val(ui.values[1]);
      }
    });
    $("#amount").val($("#slider-range").slider("values", 0));
    $("#amount_1").val($("#slider-range").slider("values", 1));
  }

  // Изменение местоположения ползунка при вводиде данных в первый элемент input
  $("input#amount").change(function() {
    var value1 = $("input#amount").val();
    var value2 = $("input#amount_1").val();
    if (parseInt(value1) > parseInt(value2)) {
      value1 = value2;
      $("input#amount").val(value1);
    }
    $("#slider-range").slider("values", 0, value1);
    console.log('min')
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
    console.log('max')
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

  $("#slider-range").on("slidechange", function(event, ui) {
    spinnerLoader();
    var minValue = ui.values[0];
    var maxValue = ui.values[1];

    var result = window.rangedResult;
    var querysId = [];

    $.each(result, function(index, val) {
      if ((val.price >= minValue) && (val.price <= maxValue)) {
        querysId.push(val.id)
      }
    });
    console.log(querysId);
    var ajaxurl = window.homepage + '/wp-admin/admin-ajax.php';

    $.ajax({
      type: "GET",
      url: ajaxurl,
      dataType: 'html',
      data: ({
        action: 'get_ranged',
        ids: querysId
      }),

      success: function(data) {
        $('.card-product__img--cat').hide('fast');
        $('.card-products-cat-wrap').hide().fadeIn('slow').html(data);
        $('.card-products-cat-wrap').css('height', 'auto');
      }
    });


  });

  // maps
  (function($) {
    /*
     *  new_map
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type  function
     *  @date  8/11/2013
     *  @since 4.3.0
     *
     *  @param $el (jQuery element)
     *  @return  n/a
     */
    function new_map($el) {
      // var
      var $markers = $el.find('.marker');
      // vars
      var args = {
        zoom: 14,
        scrollwheel: false,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
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
      // create map
      var map = new google.maps.Map($el[0], args);
      // add a markers reference
      map.markers = [];
      // add markers
      $markers.each(function() {
        add_marker($(this), map);
      });
      // center map
      center_map(map);
      // return
      return map;
    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type  function
     *  @date  8/11/2013
     *  @since 4.3.0
     *
     *  @param $marker (jQuery element)
     *  @param map (Google Map object)
     *  @return  n/a
     */
    function add_marker($marker, map) {
      // var
      var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
      // create marker
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
      // add to array
      map.markers.push(marker);
      // if marker contains HTML, add it to an infoWindow
      if ($marker.html()) {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });
        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }

    }
    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type  function
     *  @date  8/11/2013
     *  @since 4.3.0
     *
     *  @param map (Google Map object)
     *  @return  n/a
     */
    function center_map(map) {
      // vars
      var bounds = new google.maps.LatLngBounds();
      // loop through all markers and create bounds
      $.each(map.markers, function(i, marker) {
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
        bounds.extend(latlng);
      });

      // only 1 marker?
      if (map.markers.length == 1) {
        // set center of map
        map.setCenter(bounds.getCenter());
        map.setZoom(16);
      } else {
        // fit to bounds
        map.fitBounds(bounds);
      }

    }

    /*
     *  document ready
     *
     *  This function will render each map when the document is ready (page has loaded)
     *
     *  @type  function
     *  @date  8/11/2013
     *  @since 5.0.0
     *
     *  @param n/a
     *  @return  n/a
     */
    // global var
    var map = null;
    $(document).ready(function() {
      $('#map').each(function() {
        // create map
        map = new_map($(this));
      });
    });
  })(jQuery);
});
$(document).ready(function() {

  var ajaxurl = window.homepage + '/wp-admin/admin-ajax.php';

  $(".sidebar-links--new").click(function(e) {
    e.preventDefault();
    spinnerLoader();
    $.ajax({
      type: "GET",
      url: ajaxurl,
      dataType: 'html',
      data: ({
        action: 'get_new',
      }),

      success: function(data) {
        $('.card-product__img--cat').hide('fast');
        $('.card-products-cat-wrap').hide().fadeIn('slow').html(data);
        $('.card-products-cat-wrap').css('height', 'auto');
      }
    });
  });

  $(".sidebar-links--sale").click(function(e) {
    e.preventDefault();
    spinnerLoader();
    $.ajax({
      type: "GET",
      url: ajaxurl,
      dataType: 'html',
      data: ({
        action: 'get_sale',
      }),

      success: function(data) {
        $('.card-product__img--cat').hide('fast');
        $('.card-products-cat-wrap').hide().fadeIn('slow').html(data);
        $('.card-products-cat-wrap').css('height', 'auto');
      }
    });
  });

});

function spinnerLoader() {
  var height = $('.card-products-cat-wrap').height();

  $('.card-products-cat-wrap').height(200);
  $('.card-products-cat-wrap').html('<div class="loader col-md-12 col-xs-12"><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span></div>')

}
