$(document).ready(function() {
	// Header Scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}

		if(scroll >= 700){
			$('.home_navigation').addClass('fixing');
		}
		if(scroll >= 800){
			$('.home_navigation').addClass('fixed');
		}
		else {	
			$('.home_navigation').removeClass('fixed');	
			$('.home_navigation').removeClass('fixing');	
		}
	});


	$(function(){
		$(window).resize(function() {
			$('#home').height($(window).height()-100);
			$('.bg_overlay').height($(window).height());
		});

		$(window).trigger('resize');

	});

	$("li.sub_menu").mouseover(function(){
        $(".primary-nav li.sub_menu ul").addClass('open');
    }).mouseleave(function() {
		$(".primary-nav li.sub_menu ul").removeClass('open');
	});

	$("li.sub_menu_home").mouseover(function(){
        $(".home-primary-nav li.sub_menu_home ul").addClass('open');
    }).mouseleave(function() {
		$(".home-primary-nav li.sub_menu_home ul").removeClass('open');
	});


	$('.parallax').parallax();

	// Waypoints
	$('.work').waypoint(function() {
		$('.work').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.download').waypoint(function() {
		$('.download .btn').addClass('animated tada');
	}, {
		offset: '75%'
	});

	// Fancybox
	$('.work-box').fancybox();

	// Flexslider
	// $('.flexslider').flexslider({
	// 	animation: "slide",
	// 	directionNav: false,
	// });

	// Page Scroll
	var sections = $('section')
		nav = $('nav[role="navigation"], div[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();
	    	if (cur_pos >= top && cur_pos <= bottom) {
	      		nav.find('a').removeClass('active');
	      		nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    	}
	  	});
	});
	nav.find('a').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: $(id).offset().top - 75
		}, 500);
	  return false;
	});

	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;
	});	
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});
});