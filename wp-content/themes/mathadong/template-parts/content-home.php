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
						$array1 = get_box_category_home('hoat-dong-cua-vien','Hoạt động');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title">
							<?php echo $array1['img'];?>
						</div>
						<div class="portlet-body none-radius">
							<h4><?php echo $array1['title'];?></h4>
							<?php echo $array1['desc'];?>
							<?php get_related_post_by_cat(array('postnum'=>2, 'category'=>'hoat-dong-cua-vien','text_lenght'=>6),'');?>
						</div>
					</div>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						$array2 = get_box_category_home('tin-moi','Tin mới');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title">
							<?php echo $array2['img'];?>
						</div>
						<div class="portlet-body none-radius">
							<h4><?php echo $array2['title'];?></h4>
							<?php echo $array2['desc'];?>
							<?php get_related_post_by_cat(array('postnum'=>2, 'category'=>'tin-moi','text_lenght'=>6),'');?>
						</div>
					</div>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 bounceInUp animated ">
				<!-- BEGIN Portlet PORTLET-->
					<div class="cta-content marbot40">
	                    <ul class="side-menu list-group media">
	                    	<li class="list-group-item"><a href="/tin-tuc/tin-moi/thong-bao-muc-huong-bao-hiem-y-te-tai-benh-vien-mat-ha-dong/"> <i class="fa fa-book media-left"></i> <span class="media-body"> Thông báo của Bệnh viện </span></a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-life-ring media-left"></i> <span class="media-body">Bản đồ chỉ dẫn Đường đến BV</span></a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-eye media-left"></i> <span class="media-body"> Hỗ trợ - Tư vấn </span> </a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-calendar media-left"></i> <span class="media-body"> Yêu cầu đăng ký </span></a></li>
	                        <li class="list-group-item"><a href="/tailieu"> <i class="fa fa-download media-left"></i> <span class="media-body"> Tài liệu </span></a></li>
	                    </ul>
	                </div>
				<!-- END Portlet PORTLET-->
			</div>
		</div>
		
</div>
<?php $postdv = get_post_by_name('bang-gia-dich-vu','dichvu'); ?>
<div class="page-head " >
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
	            
	            <div class="row">
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-21 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Patient Care</h4>
                                <p class="fontresize">
                                    Both of our surgeons and most of our staff have had LASIK.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-hospital circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Local Care</h4>
                                <p class="fontresize">
                                    We work with over 400 optometrists across the Northwest.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Experience</h4>
                                <p class="fontresize">
                                    Our surgeons have performed over 100,000 LASIK.
                                </p>
                            </div>
                        </div>
                    </div>
	           </div>
	        </div>
	    </div>
	</div>
</div>

<section class="top-bottom-spacing white-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4 marbot10">
                	<h1>
                    	<span class="fw-normal">Bệnh viện mắt Hà Đông </span>Bệnh viện chăm sóc mắt hoàn hảo và toàn diện
                    </h1>
                </div>
                <!-- // Section 1 -->
                
                <div class="col-md-8">
                	<div class="row marbot20">
                        <!-- Section 2 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                                We offers a complete range of eye care services including LASIK and PRK refractive surgery, eye exams, vision testing for glasses and contacts.
                            </p>
                            <p class="fontresize">
                                All Laser Lasik, Cornea &amp; Glaucoma, Laser Cataract Surgery, Brow lift services.
                            </p>
                        </div>
                        <!-- // Section 2 -->
                        
                        <!-- Section 3 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                                Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye.
                            </p>
                            <p class="fontresize">
                                Glaucoma is slowly damages the eyes and can causes vision loss.
                            </p>
                        </div>
                        <!-- // Section 3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
		<div class="row ">
			<?php 
				get_post_by_cat_theme1(array('postnum'=>4, 'category'=>'quytrinh','text_lenght'=>6),'');
			?>
		</div>
		
</div>
