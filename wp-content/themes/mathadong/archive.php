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
			<div class="large_title_img">
			
	                	<h1><?php the_archive_title();?></h1>
	                	<?php the_archive_description('<h2 class="blockquote_1">','</h2>');?>
					</div>
					<div class="keyword_filter">&nbsp;</div>
					<?php 
					// Start the Loop.
					while ( have_posts() ) : the_post();
						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 * 
						 */
						get_template_part( 'template-parts/content', 'archive' );
						
		
					// End the loop.
					endwhile;
		
					// Previous/next page navigation.
					the_posts_pagination( array(
						'type' =>'list',	
						'screen_reader_text' => __( '&nbsp;', 'twentysixteen' ),	
						'prev_text'          => __( 'Prev', 'twentysixteen' ),
						'next_text'          => __( 'Next', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentysixteen' ) . ' </span>',
					) );
					endif;
			
		</div>
		<div class="row">
			<?php pqheyedoctor_pagination(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
