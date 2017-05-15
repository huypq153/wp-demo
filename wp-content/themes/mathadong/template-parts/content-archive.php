				<div id="post-<?php the_ID(); ?>"  class="media">
                     <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     	<?php if(has_post_thumbnail()){?>
                        <?php 
                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
                        	$url = $thumb['0'];
                        	$url_resize_img = aq_resize($url,'300px', '160px', true);
                        ?>
                        	<img class="media-object arc-img" src="<?php echo $url_resize_img; ?>" alt="">
                        <?php }else{?>
                        	<img class="media-object " src="http://placehold.it/300x160" alt="">
                        <?php }?>
                    </a>
                    <div class="media-body">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h1 class="arc_title"><?php the_title(); ?></h1></a>
                        <?php twentysixteen_excerpt(); ?>
                        <div class="news_more">
                        	<a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Xem tiếp</a>
                        </div> 
                    </div>
                </div>
                <hr>


