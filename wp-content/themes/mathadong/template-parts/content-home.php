<?php
/**
 * @package PQHEyeDoctor
 */
?>
<div class="container martop20">
		<div class="row mix-grid">
			<div class="col-md-4 fadeInLeft animated go ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						$array1 = get_box_category_home('hoat-dong-cua-vien','Hoạt động');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title mix">
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
			<div class="col-md-4 fadeInUp animated go">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						$array2 = get_box_category_home('tin-moi','Tin mới');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title mix">
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
			<div class="col-md-4 fadeInRight animated ">
				<!-- BEGIN Portlet PORTLET-->
					<div class="cta-content marbot20">
	                    <ul class="side-menu list-group media">
	                    	<li class="list-group-item"><a href="/tin-tuc/tin-moi/thong-bao-muc-huong-bao-hiem-y-te-tai-benh-vien-mat-ha-dong/"> <i class="fa fa-book fblue media-left"></i> <span class="media-body"> Thông báo của Bệnh viện </span></a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-life-ring fblue media-left"></i> <span class="media-body">Bản đồ chỉ dẫn Đường đến BV</span></a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-eye fblue media-left"></i> <span class="media-body"> Hỗ trợ - Tư vấn </span> </a></li>
	                        <li class="list-group-item"><a href="/lien-he"> <i class="fa fa-calendar fblue media-left"></i> <span class="media-body"> Yêu cầu đăng ký </span></a></li>
	                        <li class="list-group-item"><a href="/tailieu"> <i class="fa fa-download fblue media-left"></i> <span class="media-body"> Tài liệu </span></a></li>
	                    </ul>
	                </div>
				<!-- END Portlet PORTLET-->
			</div>
		</div>
		<div class="row mix-grid">
			<div class="col-md-4 fadeInLeft animated go ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						$array1 = get_box_category_home('kien-thuc-nhan-khoa','Kiến thức nhãn khoa');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title mix">
							<?php echo $array1['img'];?>
						</div>
						<div class="portlet-body none-radius">
							<h4><?php echo $array1['title'];?></h4>
							<?php echo $array1['desc'];?>
							<?php get_related_post_by_cat(array('postnum'=>2, 'category'=>'kien-thuc-nhan-khoa','text_lenght'=>6),'');?>
						</div>
					</div>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 fadeInUp animated go">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						$array2 = get_box_category_home('hoat-dong-xa-hoi','Hoạt động xã hội');
					?>
					<div class="portlet white-bg none-radius">
						<div class="portlet-title mix">
							<?php echo $array2['img'];?>
						</div>
						<div class="portlet-body none-radius">
							<h4><?php echo $array2['title'];?></h4>
							<?php echo $array2['desc'];?>
							<?php get_related_post_by_cat(array('postnum'=>2, 'category'=>'hoat-dong-xa-hoi','text_lenght'=>6),'');?>
						</div>
					</div>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 fadeInRight animated ">
				
			</div>
		</div>
		
</div>
<?php $postdv = get_post_by_name('bang-gia-dich-vu','dichvu'); ?>
<div class="page-head martop10" >
	<div class="center-banner top-bottom-spacing banner-parallax "  style="background-position: 50% -25px;">
	    <div class="color-overlay"></div>
	    <div class="container">
	        <div class="row">
	            <!-- Left Section -->
	            <div class="col-md-12 ">
	            	<div class="center-banner-title"> <?php  echo $postdv[0]->post_title; ?></div>
	            	<div class="offer">
                          <?php  echo $postdv[0]->post_excerpt; ?>
                    </div>
	            
	            <div class="row">
                        <div class="col-md-4 media marbot10 fadeInUp animated go">
                            <div class="media-left">
                                <i class="fa flaticon-medical-21 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Trang bị</h4>
                                <p class="fontresize">
                                     Bệnh viện trang bị thiết bị máy móc tiên tiến, hiện đại: máy mổ phẫu thuật Phaco lạnh, sinh hiển vi phẫu thuật, máy cắt dịch kính OS4...
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10 fadeInUp animated go">
                            <div class="media-left">
                                <i class="fa flaticon-hospital circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Phục vụ</h4>
                                <p class="fontresize">
                                    Bệnh viện Mắt Hà Đông có nhiệm vụ khám, chữa bệnh, cấp cứu phòng ngừa và điều trị chẩn đoán các bệnh về mắt...
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10 fadeInUp animated go">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Đội ngũ</h4>
                                <p class="fontresize">
                                    Bệnh viện với đội ngũ Tiến sỹ, Thạc sỹ, bác sỹ, cử nhân, điều dưỡng có chuyên môn cao nhiệt tình, đoàn kết.
                                </p>
                            </div>
                        </div>
                    </div>
	           </div>
	        </div>
	    </div>
	</div>
</div>

<section class="top-bottom-spacing white-bg marbot30">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4 marbot10">
                	<h1 class="top-bottom-title">
                    	<span class="fw-normal">Bệnh viện mắt Hà Đông </span>Bệnh viện chăm sóc mắt hoàn hảo và toàn diện
                    </h1>
                </div>
                <!-- // Section 1 -->
                
                <div class="col-md-8">
                	<div class="row marbot20">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container " >
		<div class="row martop10 ">
			<?php 
				//get_post_by_cat_theme1(array('postnum'=>4, 'category'=>'quytrinh','text_lenght'=>6),'');
			?>
			
			<div class="col-md-12 slide-footer ">
			<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
				<aside id="secondary" class="sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside><!-- .sidebar .widget-area -->
			<?php endif; ?>
			</div>
		</div>
		
</div>
