<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Market
 */
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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'market' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
				<?php edit_post_link( __( 'Edit', 'market' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
			</article><!-- #post-## -->

		</div>
	</div>
</div>
