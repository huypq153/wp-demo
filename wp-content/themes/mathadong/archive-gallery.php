<?php
get_header(); 
?>

<?php get_template_part('template-parts/content','page-head')?>	

<!-- BEGIN PAGE CONTENT -->
<div class="page-content page-fix-top white-bg">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 blog-page ">
	                	<h1 class="text-center"><?php the_archive_title();?></h1>
	                	<?php the_archive_description('<p>','</p>');?>
				</div>
			</div>
		</div>
</div>

<div class="page-content" >
	<div class="container " style="margin-top: 30px;">
		<div class="row">
			<?php 
			$args = array( 'posts_per_page' => -1,'post_type' => 'gallery');
			$myposts = get_posts( $args );
			/* Start the Loop */ $ink_count = 0; $ink_row_count = 0;
			foreach ( $myposts as $post ):?>
			<div id="post-<?php the_ID(); ?>" class="col-md-6">
				<!-- BEGIN Portlet PORTLET-->
				<div class="portlet white-bg none-radius">
					<div class="portlet-title-image none-radius">
						<a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if(has_post_thumbnail()){?>
                        <?php 
                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
                        	$url = $thumb['0'];
                        	$url_resize_img = aq_resize($url,'760px', null, true);
                        ?>
                        	<img class="img-responsive" src="<?php echo $url_resize_img; ?>" alt="">
                        <?php }else{?>
                        	<!-- img class="img-responsive" src="http://placehold.it/300x160" alt="" -->
                        <?php }?>
                         </a>
					</div>
					<div class="portlet-body ">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="arc_title"><?php the_title(); ?></h2></a>
						<div class="color-light marbot20"><em><?php twentysixteen_entry_date();?></em></div>
                        <?php twentysixteen_excerpt(); ?>
                        <div class="news_more">
                        	<a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Xem tiếp</a>
                        </div> 
					</div>
				</div>
				<!-- END Portlet PORTLET-->
			</div>
            <?php 
				if ($ink_count == 1 )
					{
						$ink_count=0;
						$ink_row_count++;
					}
				else {	
					$ink_count++;
				}
			?>
			<?php endforeach; ?>
			
		</div>
		<div class="row">
			<?php pqheyedoctor_pagination(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
