(function ($) {
	var ua = window.navigator.userAgent;
	var isIE = /MSIE|Trident/.test(ua);

	if ( !isIE ) {
		//IE specific code goes here
		"use strict";
	}

	/*** Sticky header */
	$(window).scroll(function(){
		if($("body").scrollTop() > 0 || $("html").scrollTop() > 0) {
			$(".header-fixed").addClass("stop");
		} else {
			$(".header-fixed").removeClass("stop");
		}
	});

	$(".navbar-toggler").click(function() {
		$(this).toggleClass('in');
	});

	/*** Header height = gutter height */
	function setGutterHeight(){
		var header = document.querySelector('.header-fixed'),
			  gutter = document.querySelector('.header-fixed + .header-gutter');
		if (gutter) {
			gutter.style.height = header.offsetHeight + 'px';
		}
	}
	window.onload = setGutterHeight;
	window.onresize = setGutterHeight;
	
	/*** Banner Slider */
	$('.slider-content').slick({
		arrows: false,
		autoplay: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.slider-images'
	});

	$('.slider-images').slick({
		dots: false,
		autoplay: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		focusOnSelect: true,
		prevArrow: $('.prev'),
		nextArrow: $('.next'),
		asNavFor: '.slider-content',
	});

	// Animation
	$('.slider-content').on('init', function(e, slick) {
		var $firstAnimatingElements = $('.blog-post:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);    
	});

	$('.slider-content').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.blog-post[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements); 
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function() {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});

			$this.addClass($animationType).one(animationEndEvents, function() {
				$this.removeClass($animationType);
			});
		});
	};

}(jQuery));