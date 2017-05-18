<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Market
 */
?>
<?php get_template_part('template-parts/content','page-head')?>	
<div class="page-content" >
	<div class="container " >
	
	<div class="portlet light none-radius">
				<div class="portlet-body none-radius">
					<div class="row">
						<div class="col-md-12">
							<!-- Google Map -->
							<div class="row">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14902.122861371825!2d105.7729125!3d20.9713529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46e02204a6f36ab3!2zQuG7h25oIFZp4buHbiBN4bqvdCBIw6AgxJDDtG5n!5e0!3m2!1sen!2s!4v1495099674620" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div id="page-<?php the_ID(); ?>" class="row margin-bottom-20">
								<div class="col-md-6">
									<div class="space20">
									</div>
									<h3 class="form-section"><?php the_title(); ?></h3>
									<p>
										 <?php the_content(); ?>
									</p>
									<div class="well">
										<h4>Địa chỉ</h4>
										<address>
										<strong>2D Nguyễn Viết Xuân</strong><br>
										 P.Quang Trung, Q.Hà Đông<br>
										 Tp.Hà Nội, Việt Nam<br>
										<abbr title="Phone">P:</abbr> 0433 825 059 - 0433 518 215 </address>
										<address>
										<strong>Email</strong><br>
										<a href="mailto:bvmhd@hanoi.gov.vn">
										 bvmhd@hanoi.gov.vn </a>
										</address>
										<ul class="social-icons margin-bottom-10">
											<li>
												<a href="https://www.facebook.com/BenhvienMatHaDong/" data-original-title="facebook" class="facebook">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="skype" class="skype">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="twitter" class="twitter">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="youtube" class="youtube">
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="space20">
									</div>
									<!-- BEGIN FORM-->
									<form action="javascript:;">
										<h3 class="form-section">Phản hồi</h3>
										<p>
											 Mọi thông tin phản hồi tại đây
										</p>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-check"></i>
												<input type="text" class="form-control" placeholder="Tiêu đề">
											</div>
										</div>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-user"></i>
												<input type="text" class="form-control" placeholder="Tên">
											</div>
										</div>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-envelope"></i>
												<input type="password" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" rows="3=6" placeholder="Nội dung"></textarea>
										</div>
										<button type="submit" class="btn green">Gửi</button>
									</form>
									<!-- END FORM-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

