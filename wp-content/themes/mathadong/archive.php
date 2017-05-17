<?php
get_header(); 
?>

<?php get_template_part('template-parts/content','page-head')?>	
<div class="page-content" >
	<div class="container" >
		<div class="row">
			<div class="col-md-12 ">	
                <?php if ( have_posts() ) : ?>
						<?php
						    if ( is_single() ) {
								$cats =  get_the_category();
								$cat = $cats[0]; // let's just assume the post has one category
							}
							else { // category archives
								$cat = get_category( get_query_var( 'cat' ) );
								//the_archive_title( '<h1 class="page-title">', '</h1>' );
								//the_archive_description( '<div class="taxonomy-description">', '</div>' );
								//echo '<h1 class="page-title"></h1>';
							}
							$cat_id = $cat->cat_ID;
							$cat_name = $cat->name;
							$cat_slug = $cat->slug;
		 					$parentCatID = $cat_id;
						?>
						<?php
						if(is_tag()):
							?>
								<div class="portlet white-bg">
								<div class="portlet-body">
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
									'prev_text'          => __( 'Previous page', 'twentysixteen' ),
									'next_text'          => __( 'Next page', 'twentysixteen' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
								) );
								?>
								</div>
								</div>
							<?php 
						else:
							
								if($parentCatID >0):
								?>
									<div class="row">
								<?php 
									$args = array('child_of' => $parentCatID);
									$categories = get_categories( $args );
									if(isset($categories) && count($categories) >0 ):
										$row = 1;
										foreach($categories as $category) :
											$cat_ID = $category->term_id;
											$cat_data = get_option("category_". $cat_ID);
											$bg_attr = '';
											if (isset($cat_data['img'])){
												$cat_resize_img = aq_resize($cat_data['img'],'340px', '269px', true);
												//echo '<div class="category_image"><img src="'.$cat_resize_img.'"></div>';
												$bg_attr = 'style="background-image: url("'.$cat_resize_img.'"); background-repeat: no-repeat;"';
											}
											
									?>
									
										<div class="col-md-6">
											<div class="portlet white-bg">
												<div class="portlet-body">
													<div class="sbi_panel" data-bg="<?php echo $cat_resize_img; ?>">
														<h3><a href="<?php echo get_category_link( $category->term_id )?>" class="sbi_label"><?php echo $category->name;?></a></h3>
														<div class="sbi_content">
															<?php get_post_of_category_slider($cat_ID);?>
														</div>						
													</div>
												</div>
											</div>
							            </div>
									           	
									<?php
										endforeach; 
									?>
								</div>
									<?php 
								  else:
										?>
										
										<div class="portlet white-bg">
										<div class="portlet-body">
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
										?>
										</div>
										</div>
									<?php 
									endif;
								endif;
								?>
							<?php 
						endif;
							?>
					<?php 
					//echo '<div class="row">';
					// Previous/next page navigation.
					pqheyedoctor_pagination();
					//echo '</div>';
					?>
				
					<?php 
				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );
				endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
