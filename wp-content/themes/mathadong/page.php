<?php
/**
 * The template for displaying pages
 *
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
					
				// End of the loop.
			endwhile;
		else:
			get_template_part( 'template-parts/content', 'none' );
		?>
	<?php endif;?>
	<?php get_sidebar( 'content-bottom' ); ?>
<?php get_footer(); ?>
