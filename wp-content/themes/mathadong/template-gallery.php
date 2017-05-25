<?php 
/**
 * The template for displaying the gallery.
 * 
 * Template Name: Gallery Page
 * 
 * @package PQHEyeDoctor
 *
 */
get_header(); ?>

<?php 
	global $post;
	$images = get_custom_attachments($post->ID);
	if($images){ ?>
	<div id="slider">
	    <?php foreach($images as $image){ ?>
	    <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
	    <?php    } ?>
	</div>
	<?php } ?>
	
	<ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
 
        $attachments = get_posts( array(
            'post_type'   => 'attachment',
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => $post->ID
        ) );
         
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                ?>
                <li><?php echo wp_get_attachment_image( $attachment->ID, 'full' ); ?>
                    <p><?php echo apply_filters( 'the_title', $attachment->post_title ); ?></p>
                </li>
                <?php
            }
        }
    endwhile; endif; ?>
</ul>
	
	
<?php
get_footer();
