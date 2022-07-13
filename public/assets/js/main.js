(function($){
	"use strict";

    // Header Sticky
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 120){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		}
	});

    // Mean Menu
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});

	// Feedback Swiper
    var swiper = new Swiper(".feedbackSwiper", {
        autoplay: false,
        direction: "vertical",
        navigation: {
            nextEl: ".two",
            prevEl: ".one",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                direction: "horizontal",
            },
            576: {
                slidesPerView: 1,
                direction: "horizontal",
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
                direction: "horizontal",
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2,
            },
        },
    });
	var swiper = new Swiper(".feedbackSwiperSlides", {
		loop: true,
        autoplay: false,
		spaceBetween: 30,
		centeredSlides: true,
		navigation: {
            nextEl: ".customTwo",
            prevEl: ".customOne",
        },
        breakpoints: {
            0: {
				slidesPerView: 1,
            },
            576: {
				slidesPerView: 2,
				spaceBetween: 25,
				centeredSlides: false,
            },
            768: {
				slidesPerView: 2,
            },
            992: {
				slidesPerView: 3,
            },
            1200: {
				slidesPerView: 3,
            },
            1400: {
				slidesPerView: 4,
            },
        },
    });

    // Screenshots Slides
	var swiper = new Swiper(".screenshotsSwiperSlides", {
		loop: false,
        autoplay: false,
		spaceBetween: 25,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
				slidesPerView: 2,
            },
            576: {
				slidesPerView: 2,
            },
            768: {
				slidesPerView: 3,
            },
            992: {
				slidesPerView: 3,
            },
            1200: {
				slidesPerView: 3,
            },
            1400: {
				slidesPerView: 5,
            },
        },
    });

	// On Hover
	try {
        $(".features-area .content ul li.b2").on("mouseenter", function() {
            $('.features-area .image img:nth-child(2)').addClass('active');
        });
        $(".features-area .content ul li.b2").on("mouseleave", function() {
            $('.features-area .image img:nth-child(2)').removeClass('active');
        });
        $(".features-area .content ul li.b3").on("mouseenter", function() {
            $('.features-area .image img:nth-child(3)').addClass('active');
        });
        $(".features-area .content ul li.b3").on("mouseleave", function() {
            $('.features-area .image img:nth-child(3)').removeClass('active');
        });
    } catch (err) {}

    // Tabs
    $('.customer-service-tabs .tabs li').on('click', function(){
		var tab_id = $(this).attr('data-tab');
		$('.customer-service-tabs .tabs li').removeClass('current');
		$('.tab-content').removeClass('current');
		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

    // Odometer
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

    // Popup Image
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

	// Popup Video
	$('.popup-video').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	// FAQ Accordion
	$(function() {
		$('.accordion').find('.accordion-title').on('click', function(){
			// Adds Active Class
			$(this).toggleClass('active');
			// Expand or Collapse This Panel
			$(this).next().slideToggle('fast');
			// Hide The Other Panels
			$('.accordion-content').not($(this).next()).slideUp('fast');
			// Removes Active Class From Other Titles
			$('.accordion-title').not($(this)).removeClass('active');		
		});
	});

	// WoW
	new WOW().init();

    // Scroll Back to Top
	try {
		let progressPath = document.querySelector('.progress-wrap path');
		let pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		let updateProgress = function () {
			let scroll = $(window).scrollTop();
			let height = $(document).height() - $(window).height();
			let progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).on('scroll', updateProgress);	
		let offset = 50;
		let duration = 550;
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > offset) {
				$('.progress-wrap').addClass('active-progress');
			} else {
				$('.progress-wrap').removeClass('active-progress');
			}
		});				
		$('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			$('html, body').animate({scrollTop: 0}, duration);
			return false;
		});
	} catch (err) {}

    // Preloader
	$(window).on('load', function() {
		$('.preloader-area').addClass('deactivate');
	});

}(jQuery));