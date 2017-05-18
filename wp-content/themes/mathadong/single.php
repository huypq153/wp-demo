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
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							
							postview_set(get_the_ID());
							
							// Include the single post content template.
							get_template_part( 'template-parts/content', 'single' );
							
						endwhile;
						?>
				</div>
				<div class="col-md-3 blog-sidebar ">
					<?php get_sidebar('content-left'); ?>
				</div>
				
			</div>		
			
			<div class="row">
				<?php get_sidebar(); ?>
			</div>
	</div>
</div>
<?php get_footer(); ?>
