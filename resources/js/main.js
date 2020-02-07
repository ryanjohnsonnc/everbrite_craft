import 'slick-carousel';
import './plugins/accordion.plugin';
import './plugins/dropdown.plugin';
import './plugins/mobileNavigation.plugin';
import './plugins/stickyElement.plugin';
import './plugins/stickyHeader.plugin';
import './plugins/tabs.plugin';

import "bootstrap";
window.$ = $;


/* Global Variables */
var $window      = $(window),
    wh           = $window.innerHeight,
    globalHeader = $('.navbar'),
    body         = $('body');

/* Initialize AOS */
AOS.init({
  offset: 200,
  duration: 600,
  easing: 'ease-in-sine',
  delay: 0,
  disable: 'mobile',
  once: true,
});

$window.on('load', function(){
  // Handles Sticky Nav
  $window.scroll(function(){
    if( $window.scrollTop() >= 30 ) {
      globalHeader.addClass('scrolled');
    } else {
      globalHeader.removeClass('scrolled');
    }
  });

  AOS.refresh();

  // Handle Empty Link Clicks
  $('a[href="#"]').on('click', function(e) {
    e.preventDefault;
  });

  $('.nav-link').click(function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top
    }, 1500);
});

  // Product Photos Slider
  var productSlider = $('.product-main_carousel');
  var productNav    = $('.product-main_nav');
  if(productSlider.length) {
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
    });

    // Handling the clicking of the Promise button
    $('.product-main_nav .nav-item').on('click', function(e) {
      e.preventDefault;
      console.log('hey');
    });
  }

  // Image Gallery (.image-gallery_slider)
  var imageSlider = $('.image-gallery_slider');
  if(imageSlider.length) {
    imageSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
    });
  };

  // Image Carousel (.image-carousel)
  var imageCarousel = $('.image-carousel');
  if(imageCarousel.length) {
    imageCarousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      fade: true,
      autoplay: true,
    });
  };

  // Product Intro Slider (.product-intro_slider)
  var productSlider = $('.product-intro_slider');
  if(productSlider.length) {
    productSlider.slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: false,
      autoplay: true,
    });

    // Handling Video Modals
    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
        

  };

});


function isOnScreen(elem) {
	// if the element doesn't exist, abort
	if( elem.length == 0 ) {
		return;
	}
	var $window = jQuery(window)
	var viewport_top = $window.scrollTop()
	var viewport_height = $window.height()
	var viewport_bottom = viewport_top + viewport_height
	var $elem = jQuery(elem)
	var top = $elem.offset().top
	var height = $elem.height()
	var bottom = top + height

	return (top >= viewport_top && top < viewport_bottom) ||
	(bottom > viewport_top && bottom <= viewport_bottom) ||
	(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}



let scrollRef = 0;

window.addEventListener('scroll', function() {
  // increase value up to 10, then refresh AOS
  scrollRef <= 10 ? scrollRef++ : AOS.refresh();
});
