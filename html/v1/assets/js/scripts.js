var isRTL = $('html').attr('dir') == "rtl" ? true : false,
    winWidth = $(window).width(),
    winHeight = $(window).height(),
    headerHeight = $('.sec-corporate-agb').outerHeight(),
    headerHeightOffset = $('.header').outerHeight();
$(function () {
  browserDetect();
  scrollToSec('.js-scroll-anchor', '.js-scroll-sec');
  mobileMenu();
  var hash = location.hash.replace(/^#/, '');

  if (hash) {
    $('html, body').scrollTop({
      scrollTop: 0
    });
    $('.nav-pills a[href="#' + hash + '"]').tab('show');
    setTimeout(function () {
      $('html, body').animate({
        scrollTop: $("#" + hash).offset().top - headerHeightOffset - 100
      }, 600);
    }, 600);
  }
});
$(window).on('load', function () {
  // $('.nav-pills a').on('shown.bs.tab', function (e) {
  //     fixedToScroll();
  // })
  $(".js-loader").fadeOut(600);
  ChangeToSvg();
  dataTrim();
  initSelect2('.js-select');
  fixedToScroll();
  initMobSlider();
  customScrollBar();

  if ($('#map').length > 0) {
    initMap();
  }

  if ($('#map2').length > 0) {
    initMap2();
  }

  if ($('#map3').length > 0) {
    initMap3();
  }

  tabsFix();
});
$(window).on('resize orientationchange', function () {
  // Do on resize
  winWidth = $(window).width(), winHeight = $(window).height(); // fixedToScroll();

  initMobSlider();
  customScrollBar();
});
$(window).on('scroll', function () {
  //Do on Scroll
  scroll();
  tabsFix();
});
$(document).keyup(function (e) {
  if (e.keyCode == 27) {//Do on ESC press
  }
});
var tabpositionfromtop;

if ($('.tabs-fix-wrap').length > 0) {
  tabpositionfromtop = $('.tabs-fix-wrap').offset().top;
}

function tabsFix() {
  if ($('.tabs-fix-wrap').length > 0) {
    var windowScroll = $(window).scrollTop();
    var headerHeight = $('.header').height();
    var totalGap = windowScroll + headerHeight;
    var panelHeight = $('.tabs-fix-wrap').height(); //console.log(tabpositionfromtop, totalGap);

    if (tabpositionfromtop <= totalGap) {
      $('.tabs-fix-wrap').addClass('fix-this');
      $('.tabs-fix-wrap').css('top', headerHeight);
      $('.tabs-fix-wrap').parents().find('.sec-services.side-bar').css('padding-top', panelHeight);
    } else {
      $('.tabs-fix-wrap').removeClass('fix-this');
      $('.tabs-fix-wrap').css('top', 'auto');
      $('.tabs-fix-wrap').parents().find('.sec-services.side-bar').removeAttr('style');
    }
  }
}

var fixedSidebar = $('.js-fixed-sidebar').height();
$('.js-scroll-sec').css('minHeight', fixedSidebar + 100);

function scrollToSec(anchor, section) {
  var $thisAnchor = $(anchor);
  var $thisSection = $(section);
  $thisAnchor.find('a').click(function (e) {
    e.preventDefault();
    $thisAnchor.find('a').parent().removeClass('active');
    $(this).parent().addClass('active');
    var targetSection = $(this).attr('href').split('#')[1];
    var sectionPos = $thisSection.find('[data-link="' + targetSection + '"]').offset().top;
    moveTo(sectionPos);
  });
}

;

function moveTo(position) {
  var headerHeight = $('.sec-corporate-agb').outerHeight();
  $("html, body").animate({
    scrollTop: position - headerHeight
  }, "slow");
}

;

function fixedToScroll() {
  if ($('.js-fixed-sidebar').length > 0) {
    $('.js-fixed-sidebar').each(function (i, ele) {
      var $self = $(ele);
      $(this).css('width', $(this).parent().width());
      var headerHeightOffset = $('.header').outerHeight();
      var scrollOffset = $(this).parent().offset().top;
      var sidebarHeight = $(this).outerHeight();
      var bottomStickyOffset = scrollOffset + $(this).parent().outerHeight();
      $(window).scroll(function () {
        var winScroll = $(this).scrollTop();
        var extraTopBar = $('.tabs-fix-wrap.fix-this').outerHeight() == undefined ? 0 : $('.tabs-fix-wrap.fix-this').outerHeight();
        var forFixedOffset = winScroll + headerHeightOffset + extraTopBar;
        var forBottomOffset = winScroll + headerHeightOffset + extraTopBar + sidebarHeight;

        if (forFixedOffset > scrollOffset && forBottomOffset < bottomStickyOffset) {
          $self.addClass('is--fixed');
          $self.removeClass('is--bottom');
        } else if (forBottomOffset > bottomStickyOffset) {
          $self.removeClass('is--fixed');
          $self.addClass('is--bottom');
        } else {
          $self.removeClass('is--fixed is--bottom');
        }
      });
    });
  }

  $('a[data-toggle="pill"]').on('shown.bs.tab', function (event) {
    fixedToScroll();
  });
}

;

function elementInViewport2(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while (el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return top < window.pageYOffset + window.innerHeight && left < window.pageXOffset + window.innerWidth && top + height > window.pageYOffset && left + width > window.pageXOffset;
}

;

function elementInViewport(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while (el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return top >= window.pageYOffset && left >= window.pageXOffset && top + height <= window.pageYOffset + window.innerHeight && left + width <= window.pageXOffset + window.innerWidth;
}

;

var scroll = function scroll(rush) {
  $('[data-link]').each(function () {
    var sdx = $(this).position().top;
    var wx = $(window).scrollTop();
    var dp = winHeight / 10;
    var dds = $(this).position().top;

    if (elementInViewport(this)) {
      var thisValue = $(this).attr('data-link');
      $('.js-scroll-anchor li').removeClass('active');
      $('.js-scroll-anchor a[href="#' + thisValue + '"]').parent().addClass('active');
    }
  });
};

function browserDetect() {
  navigator.sayswho = function () {
    var ua = navigator.userAgent,
        tem,
        M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

    if (/trident/i.test(M[1])) {
      tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
      return 'IE ' + (tem[1] || '');
    }

    if (M[1] === 'Chrome') {
      tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
      if (tem != null) return tem.slice(1).join('').replace('OPR', 'Opera');
    }

    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
    if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
    return M.join(' ');
  }();

  $('body').addClass(navigator.sayswho);
} // change to svg 


function ChangeToSvg() {
  $('img.js-tosvg').each(function () {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    $.get(imgURL, function (data) {
      var $svg = $(data).find('svg');

      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }

      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' insvg');
      }

      $svg = $svg.removeAttr('xmlns:a');

      if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
      }

      $img.replaceWith($svg);
    }, 'xml');
  });
} // data trim


function dataTrim() {
  var ellipsis = "...";
  $('[data-trim]').each(function () {
    var text = $(this).html();
    var charLimit = parseInt($(this).attr('data-trim'));
    $(this).html(TrimLength(text, charLimit));
    $(this).addClass('is--trimmed');
  });

  function TrimLength(text, maxLength) {
    text = $.trim(text);

    if (text.length > maxLength) {
      text = text.substring(0, maxLength - ellipsis.length);
      return text.substring(0, text.lastIndexOf(" ")) + ellipsis;
    } else return text;
  }
}

function mobileMenu() {
  $('.js-menu-toggle').click(function () {
    if ($(".navigation").hasClass("open")) {
      $(".navigation").removeClass('open');
      $("body").removeClass("js-hiden-body");
      $('.js-menu-toggle').removeClass('active');
      $('.menu-wraper').removeClass('js-hid');
    } else {
      $('.navigation').addClass('open');
      $("body").addClass("js-hiden-body");
      $('.js-menu-toggle').addClass('active');
      setTimeout(function () {
        $('.menu-wraper').addClass('js-hid');
      }, 350);
    }
  });
} // lang dropdown


$(document).on("click", ".js-languageselector", function () {
  $(this).find('.dropdownMenu').slideToggle();
}); // lang dropdown

function initSelect2(target, search) {
  var $target = $(target);
  $target.each(function (i, e) {
    var tarPar = $(e).parent('.select2-box');
    var tarPlace = $(e).data('placeholder');
    var dataClass = $(e).data('class'); // var searchVal = search;
    // searchVal = $(e).hasClass('js-search') ? $(e).attr('data-search') : search ;

    $(e).select2({
      dropdownParent: tarPar,
      minimumResultsForSearch: -1,
      width: '100%',
      placeholder: tarPlace,
      dir: isRTL
    });
  });
} // mobile slider


function initMobSlider() {
  if (winWidth < 992) {
    if ($('.js-img-slide').length > 0) {
      $('.js-img-slide').each(function () {
        $(this).not('.slick-initialized').slick({
          dots: true,
          arrows: false,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: false,
          swipeToSlide: true,
          rtl: isRTL,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 3
            }
          }, {
            breakpoint: 576,
            settings: {
              slidesToShow: 2
            }
          }]
        });
      });
    }
  } else {
    $('.js-img-slide.slick-initialized').each(function () {
      $(this).slick('unslick');
    });
  }
} // mega menu


if (winWidth >= 1200) {
  $('.js-sub-menu-anchor, [data-menu-id] > *').hover(function () {
    menuMouseHoverAdjustmentt();
  });
} else {
  $('.js-sub-menu-anchor').on('click', function (e) {
    if (!$(this).hasClass('has-no-child')) {
      e.preventDefault();
      menuMouseHoverAdjustmentt();
    }
  });
}

$('.c-megaMenu-dropdown .js-goBack').on('click', function () {
  $(this).parents().find('.js-mega-menu').fadeOut();
});

function menuMouseHoverAdjustmentt() {
  $('.js-sub-menu-anchor').each(function () {
    var thisId = $(this).attr('data-target');
    var thisSubMenu = $('[data-menu-id="' + thisId + '"]');
    var thisSubMenuChild = thisSubMenu.find(' > *');

    if ($(this).is(":hover") || $(thisSubMenuChild).is(':hover')) {
      $(this).addClass('active');
      thisSubMenu.stop().fadeIn('fast');
    } else {
      $(this).removeClass('active');
      thisSubMenu.stop().fadeOut('fast');
    }
  });
} // custom scrollbar


function customScrollBar() {
  if (winWidth < 992) {
    $('.js-custom-scroll-bar').mCustomScrollbar();
    $('.js-menuscroll-desktop').mCustomScrollbar();
    $('.c-event-banner .event-txt-box .time').mCustomScrollbar({
      theme: "minimal-dark",
      setHeight: 150
    });
  } else {
    $('.js-custom-scroll-bar').mCustomScrollbar("destroy");
  }
}

;
var map;

function initMap() {
  var location = {
    lat: 15.587988,
    lng: 32.537749
  };
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: location,
    disableDefaultUI: true,
    fullscreenControl: true,
    zoomControl: true
  });
}

;

function initMap2() {
  var location = {
    lat: 15.5879884,
    lng: 32.5377491
  };
  map = new google.maps.Map(document.getElementById('map2'), {
    zoom: 10,
    center: location,
    disableDefaultUI: true,
    fullscreenControl: true,
    zoomControl: true
  });
}

;

function initMap3() {
  var location = {
    lat: 15.587988,
    lng: 32.537749
  };
  map = new google.maps.Map(document.getElementById('map3'), {
    zoom: 10,
    center: location,
    disableDefaultUI: true,
    fullscreenControl: true,
    zoomControl: true
  });
}

;