<?php
/**
 * @package pqheyedoctor
 */
?>
<div class="portlet pqh-light none-radius">
	<div class="portlet-body none-radius">
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
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	</div>
</div>