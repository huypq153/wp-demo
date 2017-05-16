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
			
	                <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			echo '<div class="row">';
			// Previous/next page navigation.
			pqheyedoctor_pagination();
			echo '</div>';

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
	</div>
</div>
<?php get_footer(); ?>
