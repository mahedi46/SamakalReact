$(document).ready(function () {

  // sticky-menu
  $(window).scroll(function () {
    if ($(window).scrollTop() > 20) {
      $(".main-menu").addClass('sticky');
    } else {
      $(".main-menu").removeClass('sticky');
    }
  });

  //BackToTop
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back_to_top').fadeIn();
      } else {
        $('#back_to_top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back_to_top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    $('#back_to_top').tooltip('show');

  });
});

// back-to
var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

// onload-modal-home-js-here
$ (window).ready (function () {
  setTimeout (function () {
      $ ('#modal-popup').modal ("show")
  }, 1000)
  
  setTimeout (function () {
      $ ('#modal-popup').modal ("hide")
  }, 10000)
})

// header-search-js
$('.main-menu').on('click', '.search-toggle', function(e) {
  var selector = $(this).data('selector');

  $(selector).toggleClass('show').find('.search-input').focus();
  $(this).toggleClass('active');

  e.preventDefault();
});



// slider
$(document).ready(function () {
  $('.glallery-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed:1000,
    lazyLoad: 'ondemand',
    fade: true,
    autoplay: false,
    prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]

  });

});
