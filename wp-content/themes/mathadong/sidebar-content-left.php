<?php
/**
 * The template for the content left widget areas on posts and pages
 *
 */
?>
<?php if ( is_active_sidebar( 'sidebar-content-left' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-content-left' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>



