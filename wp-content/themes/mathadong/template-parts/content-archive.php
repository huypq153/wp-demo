				<div class="col-md-6  " id="post-<?php the_ID(); ?>" >
					<!-- BEGIN Portlet PORTLET-->
					<div class="portlet white-bg none-radius">
						<div class="portlet-title-img white-bg none-radius">
							<a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		                     	<?php if(has_post_thumbnail()){?>
		                        <?php 
		                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		                        	$url = $thumb['0'];
		                        	$url_resize_img = aq_resize($url,'500px', '270px', true);
		                        ?>
		                        	<img class="img-responsive img-archive" src="<?php echo $url_resize_img; ?>" alt="">
		                        <?php }else{?>
		                        	<!-- img class="img-responsive" src="http://placehold.it/300x160" alt="" -->
		                        <?php }?>
		                    </a>
						</div>
						<div class="portlet-body">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h4 class="block"><?php the_title(); ?></h4></a>
							<div class="color-light marbot20"><em><?php twentysixteen_entry_date();?></em></div>
	                        <?php twentysixteen_excerpt(); ?>
	                        <div class="news_more">
	                        	<a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Xem tiếp</a>
	                        </div> 
						</div>
					</div>
					<!-- END Portlet PORTLET-->
				</div>
				<?php get_related_post();?>
			
