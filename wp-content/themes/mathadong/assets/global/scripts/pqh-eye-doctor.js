/**
 * Custom JS Default
 */

jQuery(document).ready(function() {    
    Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features

	// Bootstrap DropDown Menu Hover
	$(".navbar-nav .dropdown").hover(            
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
			$(this).toggleClass('open');        
		},
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
			$(this).toggleClass('open');       
		}
	);
	
//	$('.dropdown').hover(function(){
//		$(this).children('ul').stop(true, true).slideDown(500);	
//	},function(){
//		$(this).children('ul').stop(true, true).delay(50).slideUp(500);
//	});

	visible = false;
	function toggleDropdown(dropdown, delay, fade, state) {
	    if (state === undefined) visible = !visible
	    else visible = state

	    dropdown.children('.dropdown-menu').stop(true, true).delay(delay)[visible ? 'fadeIn' : 'fadeOut'](fade, function() {
	        dropdown.toggleClass('open', visible);
	        dropdown.children('.dropdown-toggle').attr('aria-expanded', visible);
	        $(this).css('display', '');
	    });
	}

	$('ul.nav li.dropdown a').click(function(){
		//console.log('test');
	    if ($('.navbar-toggle').is(':visible')) return;
	    if ($(this).attr('href') != '#') {
	        toggleDropdown($(this).parent(), 50, 100, false)
	        window.location = $(this).attr('href')
	    }
	    else {
	        toggleDropdown($(this).parent(), 50, 100)
	    }
	});
	
	$(window).load(function() {
		$('#slider').nivoSlider({
	       effect: 'fade',
	       animSpeed: 250, // Slide transition speed
	       pauseTime: 9000 // How long each slide will show	
	   });
	});
	
	$('#myCarousel').carousel({
		  interval: 3000
	});
	
	$('#myCarousel_Gallery').carousel({
		  interval: 3000
	});
	
	$('#myCarousel.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));

	  if (next.next().length>0) {
	 
	      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
	      
	  }
	  else {
	      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	     
	  }
	});
	
	var Portfolio = function () {
	    return {
	        //main function to initiate the module
	        init: function () {
	            $('.mix-grid').mixitup();
	        }

	    };

	}();
	Portfolio.init(); 
});