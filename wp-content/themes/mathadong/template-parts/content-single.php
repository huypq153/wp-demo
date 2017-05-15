<?php
/**
 * @package pqheyedoctor
 */
?>
<div class="portlet pqh-light">
	<div class="portlet-body">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php
				
			if (has_post_thumbnail() ) : ?>
			<div class="featured-image-single">
		        <?php 
				        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
				        $url = $thumb['0'];
				        $url_resize_img = aq_resize($url,'847px', null, true);
				    ?>
			        <img class="img-single img-responsive"  src="<?php echo $url_resize_img; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
				
			</div>
			<?php endif; ?>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-meta">
					<?php the_date('d/m/Y', '<span class="sp-post-date"><i class="fa fa-calendar"></i> ', '</span>'); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
			<div class="entry-content">
				
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'pqheyedoctor' ),
						'after'  => '</div>',
					) );
				?>
				
				<?php
// 					echo postview_get(get_the_ID());
							
// 					get_related_post();
		
// 					// If comments are open or we have at least one comment, load up the comment template.
// 					if ( comments_open() || get_comments_number() ) {
// 						comments_template();
// 					}
					// End of the loop.
				?>
			</div><!-- .entry-content -->
		
			<footer class="entry-meta">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', 'pqheyedoctor' ) );
		
					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', 'pqheyedoctor' ) );
		
					if ( ! pqheyedoctor_categorized_blog() ) {
						// This blog only has 1 category so we just need to worry about tags in the meta text
						if ( '' != $tag_list ) {
							$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pqheyedoctor' );
						} else {
							$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pqheyedoctor' );
						}
		
					} else {
						// But this blog has loads of categories so we should probably display them here
						if ( '' != $tag_list ) {
							$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pqheyedoctor' );
						} else {
							$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pqheyedoctor' );
						}
		
					} // end check for categories on this blog
		
					printf(
						$meta_text,
						$category_list,
						$tag_list,
						get_permalink()
					);
				?>
				<?php edit_post_link( __( 'Edit', 'pqheyedoctor' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-## -->
	</div>
</div>