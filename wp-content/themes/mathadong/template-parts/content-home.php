<?php
/**
 * @package PQHEyeDoctor
 */
?>
<div class="container">
		<div class="row ">
			<div class="col-md-4 ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						echo creat_html_box_category('hoat-dong-cua-vien','Hoạt động');
					?>
					<?php 
						get_post_by_cat(array('postnum'=>5, 'category'=>'hoat-dong-cua-vien','text_lenght'=>6),'');
					?>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						echo creat_html_box_category('tin-moi','Tin mới');
					?>
					<?php 
						get_post_by_cat(array('postnum'=>5, 'category'=>'tin-moi','text_lenght'=>6),'');
					?>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 bounceInUp animated ">
				<!-- BEGIN Portlet PORTLET-->
					<div class="cta-content marbot40">
	                    <ul class="side-menu list-group media">
	                    	<li class="list-group-item"><a href="form-download.htm"> <i class="fa fa-book media-left"></i> <span class="media-body"> Thông báo của Bệnh viện </span></a></li>
	                        <li class="list-group-item"><a href="insurance-payments.htm"> <i class="fa fa-life-ring media-left"></i> <span class="media-body">Bản đồ chỉ dẫn Đường đến BV</span></a></li>
	                        <li class="list-group-item"><a href="insurance-payments.htm"> <i class="fa fa-usd media-left"></i> <span class="media-body">Hỗ trợ - Tư vấn </span></a></li>
	                        <li class="list-group-item"><a href="order-contact-lenses.htm"> <i class="fa fa-eye media-left"></i> <span class="media-body"> Order Contant Lenses </span> </a></li>
	                        <li class="list-group-item"><a href="appointment.htm"> <i class="fa fa-calendar media-left"></i> <span class="media-body"> Request Appointment </span></a></li>
	                        <li class="list-group-item"><a href="before-after-4-column.htm"> <i class="fa fa-download media-left"></i> <span class="media-body"> Before &amp; After </span></a></li>
	                    </ul>
	                </div>
				<!-- END Portlet PORTLET-->
			</div>
		</div>
		
</div>
<?php $postdv = get_post_by_name('bang-gia-dich-vu','dichvu'); ?>
<div class="page-head " style="margin-bottom: 40px">
	<div class="center-banner top-bottom-spacing banner-parallax "  style="background-position: 50% -25px;">
	    <div class="color-overlay"></div>
	    <div class="container">
	        <div class="row">
	            <!-- Left Section -->
	            <div class="col-md-8 ">
	            	<div class="center-banner-title"> <?php  echo $postdv[0]->post_title; ?></div>
	            	<div class="offer">
                          <?php  echo $postdv[0]->post_excerpt; ?>
                    </div>
	            </div>
	            <!-- Left Section -->
	            
	            <!-- Right Section -->
	            <div class="col-md-4">                
	            
	            </div>
	            <!-- Right Section -->
	        </div>
	    </div>
	</div>
</div>

<div class="container">
		<div class="row ">
			<?php 
				get_post_by_cat_theme1(array('postnum'=>4, 'category'=>'quytrinh','text_lenght'=>6),'');
			?>
		</div>
		
</div>
