<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
	
<?php get_template_part('template-parts/content','page-head')?>	
	
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-page">
				
				<div class="portlet white-bg none-radius">
					
					<div class="portlet-body none-radius">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div calss="large_title_img">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>
					 <div id="myCarousel_Gallery" class="carousel image-carousel slide">
					 	<div class="carousel-inner">
						<?php 
							 while ( have_posts() ) : the_post();
						        if ( get_post_gallery() ) :
						            $gallery = get_post_gallery( get_the_ID(), false );
						            /* Loop through all the image and output them one by one */
						        	$row = 0;
						        	$active = '';
						            foreach( $gallery['src'] as $src ) : 
						            	if($row == 0){ $active = 'active' ;}
						            	else{$active = '';}
						            	$url_resize_img = aq_resize($src,'800px', '600px', true);
						            ?>
											<div class="item <?php echo $active;?> ">
												<img src="<?php echo $url_resize_img; ?>" class="img-responsive" alt="Gallery" />
											</div>
						                <?php
						                $row ++;
						            endforeach;
						        endif;
						    endwhile;
						?>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel_Gallery" data-slide="prev">
						<i class="m-icon-big-swapleft m-icon-white"></i>
						</a>
						<a class="carousel-control right" href="#myCarousel_Gallery" data-slide="next">
						<i class="m-icon-big-swapright m-icon-white"></i>
						</a>
					</div>
					</article>
					</div>
					</div>
				</div>
				<div class="col-md-3 blog-sidebar ">
					<?php get_sidebar('content-left'); ?>
				</div>
				
			</div>		
	</div>
</div>
<?php get_footer(); ?>
