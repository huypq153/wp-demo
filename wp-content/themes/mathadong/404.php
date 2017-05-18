<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>
<?php get_template_part('template-parts/content','page-head')?>	
<div class="page-content" >
	<div class="container " style="margin-top: 30px;">
		<div class="row">
			<div class="col-md-12 ">	
				<div class="portlet white-bg none-radius">
					<div class="portlet-body none-radius">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 blog-page ">	
				<div class="portlet">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_sidebar( 'content-bottom' ); ?>
	
<?php get_footer(); ?>
