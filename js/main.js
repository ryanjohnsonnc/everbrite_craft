(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($, __webpack_provided_window_dot_$, jQuery) {/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! slick-carousel */ "./node_modules/slick-carousel/slick/slick.js");
/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(slick_carousel__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _plugins_accordion_plugin__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./plugins/accordion.plugin */ "./resources/js/plugins/accordion.plugin.js");
/* harmony import */ var _plugins_dropdown_plugin__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./plugins/dropdown.plugin */ "./resources/js/plugins/dropdown.plugin.js");
/* harmony import */ var _plugins_mobileNavigation_plugin__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./plugins/mobileNavigation.plugin */ "./resources/js/plugins/mobileNavigation.plugin.js");
/* harmony import */ var _plugins_stickyElement_plugin__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./plugins/stickyElement.plugin */ "./resources/js/plugins/stickyElement.plugin.js");
/* harmony import */ var _plugins_stickyHeader_plugin__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./plugins/stickyHeader.plugin */ "./resources/js/plugins/stickyHeader.plugin.js");
/* harmony import */ var _plugins_tabs_plugin__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./plugins/tabs.plugin */ "./resources/js/plugins/tabs.plugin.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(bootstrap__WEBPACK_IMPORTED_MODULE_7__);








__webpack_provided_window_dot_$ = $;
/* Global Variables */

var $window = $(window),
    wh = $window.innerHeight,
    globalHeader = $('.navbar'),
    body = $('body');
$window.on('load', function () {
  // Handles Sticky Nav
  $window.scroll(function () {
    if ($window.scrollTop() >= 30) {
      globalHeader.addClass('scrolled');
    } else {
      globalHeader.removeClass('scrolled');
    }
  }); // Handle Empty Link Clicks

  $('a[href="#"]').on('click', function (e) {
    e.preventDefault;
  }); // Product Photos Slider

  var productSlider = $('.product-main_carousel');
  var productNav = $('.product-main_nav');

  if (productSlider.length) {
    productSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: productNav
    });
    productNav.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: productSlider,
      dots: true,
      centerMode: true,
      focusOnSelect: true
    }); // Handling the clicking of the Promise button

    $('.product-main_nav .nav-item').on('click', function (e) {
      e.preventDefault;
      console.log('hey');
    });
  } // Image Gallery (.image-gallery_slider)


  var imageSlider = $('.image-gallery_slider');

  if (imageSlider.length) {
    imageSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true
    });
  }

  ; // Product Intro Slider (.product-intro_slider)

  var productSlider = $('.product-intro_slider');

  if (productSlider.length) {
    productSlider.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: false,
      autoplay: true
    }); // Handling Video Modals

    var $videoSrc;
    $('.video-btn').click(function () {
      $videoSrc = $(this).data("src");
    }); // when the modal is opened autoplay it  

    $('#videoModal').on('shown.bs.modal', function (e) {
      // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
      $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    }); // stop playing the youtube video when I close the modal

    $('#videoModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src', $videoSrc);
    });
  }

  ;
});

function isOnScreen(elem) {
  // if the element doesn't exist, abort
  if (elem.length == 0) {
    return;
  }

  var $window = jQuery(window);
  var viewport_top = $window.scrollTop();
  var viewport_height = $window.height();
  var viewport_bottom = viewport_top + viewport_height;
  var $elem = jQuery(elem);
  var top = $elem.offset().top;
  var height = $elem.height();
  var bottom = top + height;
  return top >= viewport_top && top < viewport_bottom || bottom > viewport_top && bottom <= viewport_bottom || height > viewport_height && top <= viewport_top && bottom >= viewport_bottom;
}
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js-exposed"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js-exposed"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js-exposed")))

/***/ }),

/***/ 6:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/ryanjohnson/Sites/everbrite/resources/js/main.js */"./resources/js/main.js");


/***/ })

},[[6,"/js/manifest","/js/vendor"]]]);
//# sourceMappingURL=main.js.map