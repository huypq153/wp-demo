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
	         <?php echo esc_html(get_theme_mod('pqheyedoctor_footer_text')); ?>
		</div>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END FOOTER -->
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	$('.div-ainimal-fadeIn').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
	    offset: 800    
	 });  
	 console.log("aaaaa"); 
});            
</script>
</body>
</html>