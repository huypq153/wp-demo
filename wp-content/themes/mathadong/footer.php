<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package PQHEyeDoctor
 */
?>
	</div>
	<!-- END PAGE CONTAINER -->
	<?php get_sidebar('footer'); ?>  
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="container">
	         <?php echo esc_html(get_theme_mod('market_footer_text')); ?>
		</div>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END FOOTER -->
<?php wp_footer(); ?>

<script>
jQuery(document).ready(function() {    
    Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
	//Script to Activate the Carousel
// 	$('.carousel').carousel({
// 	    interval: 5000 //changes the speed
// 	})
	$('.dropdown').hover(function(){
		$(this).children('ul').stop(true, true).slideDown(500);	
	},function(){
		$(this).children('ul').stop(true, true).delay(50).slideUp(500);
	});

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
		//$('#slider').nivoSlider();
		$('#slider').nivoSlider({
	       effect: 'fade',
	       animSpeed: 250, // Slide transition speed
	       pauseTime: 9000 // How long each slide will show	
	   });
	});
});
</script>

</body>
</html>