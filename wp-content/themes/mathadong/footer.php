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
	<?php if ( is_active_sidebar( 'footer' )  ) : ?>
		<aside id="secondary" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer' ); ?>
		</aside><!-- .sidebar .widget-area -->
	<?php endif; ?>
	<div class="top-strip white-bg">
    	<div class="container">
            <div class="row vertical-align">
                    
                <div class="col-md-8 vertical-middle visible-block-sm-xs marbot30-sm-xs">
                    <div class="text-center marbot0 media">
                        <span class="media-left"><i class="fa fa-phone icon-bordered"></i></span>
                        <span class="media-body text-left media-middle">
                            Bạn cần trợ giúp xin gọi cho chúng tôi <a href="tel:0433825059"><span class="bold">(84) 0433 825 059</span></a>                
                        </span>
                    </div> 
                </div>
                
                <div class="col-md-4 vertical-middle visible-block-sm-xs text-center animatedParent animateOnce">
                    <a href="tel:0433825059" class="btn btn-type1-reverse pulse animated go">Gọi Cấp Cứu</a>
                </div>
            </div>
        </div>
    </div>  
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="content-footer">
			<div class="container">
				<div class="text-center marbot50">
                    <div class="clearfix social-icons-simple footer-social-bg social-icons-lg text-center marbot30">
                        <ul>
                          <li data-html="true" title="" data-toggle="tooltip" data-original-title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li data-html="true" title="" data-toggle="tooltip" data-original-title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li data-html="true" title="" data-toggle="tooltip" data-original-title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li data-html="true" title="" data-toggle="tooltip" data-original-title="Google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li data-html="true" title="" data-toggle="tooltip" data-original-title="Instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      </ul>
                    </div>
                    <div class="footer-menu marbot30">
                    	
                        <ul class="list-unstyled list-inline">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a></li>
                            <li><a href="/gioithieu">Giới thiệu</a></li>
                            <li><a href="/dichvu">Dịch vụ</a></li>
                            <li><a href="/cat/tin-tuc">Tin tức</a></li>
                            <li><a href="/quytrinh">Quy trình</a></li>
                            <li><a href="/tailieu">Tài liệu</a></li>
                            <li><a href="/lien-he">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="copyright marbot30-md-xs">
                        <?php echo esc_html(get_theme_mod('pqheyedoctor_footer_text')); ?>                   
                    </div>
                </div>
		         
			</div>
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