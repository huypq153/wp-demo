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
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3 class="entry-title"><?php the_title(); ?></h3>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'pqheyedoctor' ),
						'after'  => '</div>',
					) );
				?>
			</div>
			<?php edit_post_link( __( 'Edit', 'pqheyedoctor' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->
	</div>
</div>

