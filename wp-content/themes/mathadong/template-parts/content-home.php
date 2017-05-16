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
						get_post_by_cat(array('postnum'=>5, 'category'=>'hoat-dong-cua-vien'),'');
					?>
					<div class="panel-group accordion" id="accordion1">
								<div class="panel panel-r-home">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
										Collapsible Group Item #1 </a>
										</h4>
									</div>
									<div id="collapse_1" class="panel-collapse in">
										<div class="panel-body">
											<p>
												 Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
											</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
										Collapsible Group Item #2 </a>
										</h4>
									</div>
									<div id="collapse_2" class="panel-collapse collapse">
										<div class="panel-body" style="height:200px; overflow-y:auto;">
											<p>
												 111111Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
											</p>
											<p>
												 Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												<a class="btn blue" href="ui_tabs_accordions_navs.html#collapse_2" target="_blank">
												Activate this section via URL </a>
											</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">
										Collapsible Group Item #3 </a>
										</h4>
									</div>
									<div id="collapse_3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>
												 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
											</p>
											<p>
												 Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												<a class="btn green" href="ui_tabs_accordions_navs.html#collapse_3" target="_blank">
												Activate this section via URL </a>
											</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
										Collapsible Group Item #4 </a>
										</h4>
									</div>
									<div id="collapse_4" class="panel-collapse collapse">
										<div class="panel-body">
											<p>
												 Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
											</p>
											<p>
												 Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
											</p>
											<p>
												<a class="btn red" href="ui_tabs_accordions_navs.html#collapse_4" target="_blank">
												Activate this section via URL </a>
											</p>
										</div>
									</div>
								</div>
							</div>
				<!-- END Portlet PORTLET-->
			</div>
			<div class="col-md-4 ">
				<!-- BEGIN Portlet PORTLET-->
					<?php 
						echo creat_html_box_category('tin-moi','Tin mới');
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
<div class="page-head ">
	<div class="center-banner top-bottom-spacing banner-parallax "  style="background-position: 50% -25px;">
	    <div class="color-overlay"></div>
	    <div class="container">
	        <div class="row">
	            <!-- Left Section -->
	            <div class="col-md-8 div-ainimal-fadeIn">
	                sdsdsd
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
