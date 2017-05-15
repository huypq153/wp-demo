<?php
/**
 * The template for displaying search results pages
 *
 */

get_header(); ?>

	<!-- Content Row -->
       <div class="row content">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">
		<div class="col-lg-12 post-cat-content">
		<?php if ( have_posts() ) : ?>

			<div class="large_title_img">
                	<h1><?php printf( __( 'Tìm thấy các bài viết của: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</div>
			<div class="keyword_filter">&nbsp;</div>
				

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</div>
		
		<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
 			</div>

        </div>
        <!-- /.row -->


<?php get_footer(); ?>
