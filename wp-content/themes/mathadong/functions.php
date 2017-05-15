<?php
/**
 * PQHEyeDoctor functions and definitions
 *
 * @package PQHEyeDoctor
 */

include ('aq_resizer.php');

/**
 * Setup default site
 * 
 */
if ( ! function_exists( 'pqheyedoctor_setup' ) ) :

function pqheyedoctor_setup() {

	load_theme_textdomain( 'pqheyedoctor', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('homepage-banner',400,350,true);

	add_theme_support('title-tag');

	register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'pqheyedoctor' ),
			'top' => __( 'Top Menu', 'pqheyedoctor' ),
	) );

	add_theme_support( 'custom-background', apply_filters( 'pqheyedoctor_custom_background_args', array(
			'default-color' => 'f7f7f7',
			'default-image' => '',
	) ) );
	add_theme_support( 'post-formats', array( 'video' ) );
}

endif; // pqheyedoctor_setup
add_action( 'after_setup_theme', 'pqheyedoctor_setup' );

function pqheyedoctor_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'pqheyedoctor' ),
			'description'   => __( 'This is the Primary Sidebar. It will be displayed on Posts Pages.', 'pqheyedoctor'),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
			'name'          => __( 'Content Left', 'pqheyedoctor' ),
			'id'            => 'sidebar-content-left',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
			'name'          => __( 'Footer Left', 'pqheyedoctor' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
			'name'          => __( 'Footer Center', 'pqheyedoctor' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
			'name'          => __( 'Footer Right', 'pqheyedoctor' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'pqheyedoctor_widgets_init' );

/**
 * fixed wp_head of td0814
 *
 **/
function pqheyedoctor_wp_head(){
	echo '<style>'.PHP_EOL;
	echo 'body{ padding-top: 0px !important; }'.PHP_EOL;
	// Using custom CSS class name.
	echo 'body.body-logged-in .page-header .page-header-menu.fixed {margin-bottom: 0px !important;}' .PHP_EOL;
	echo 'body.body-logged-in .page-header .page-header-menu.fixed { top: 28px !important; }'.PHP_EOL;
	// Using WordPress default CSS class name.
	echo 'body.logged-in .page-header .page-header-menu.fixed{ top: 28px !important; }'.PHP_EOL;
	echo '</style>'.PHP_EOL;
}
add_action('wp_head', 'pqheyedoctor_wp_head');


/**
 * Load Script
 * 
 */
function pqheyedoctor_scripts() {
 	wp_enqueue_style( 'pqheyedoctor-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,600' );
	
 	wp_enqueue_style( 'pqheyedoctor-font-awesome', get_template_directory_uri()."/assets/global/plugins/font-awesome/css/font-awesome.min.css");
	
	wp_enqueue_style( 'pqheyedoctor-simple-line-icons.min', get_template_directory_uri()."/assets/global/plugins/simple-line-icons/simple-line-icons.min.css");
	
	wp_enqueue_style( 'pqheyedoctor-bootstrap-style', get_template_directory_uri()."/assets/global/plugins/bootstrap/css/bootstrap.min.css" );
	
	wp_enqueue_style( 'pqheyedoctor-uniform-default', get_template_directory_uri()."/assets/global/plugins/uniform/css/uniform.default.css" );
	
	wp_enqueue_style( 'pqheyedoctor-news-style', get_template_directory_uri()."/assets/admin/pages/css/news.css");
	
	wp_enqueue_style( 'pqheyedoctor-blog-style', get_template_directory_uri()."/assets/admin/pages/css/blog.css" );
	
	wp_enqueue_style( 'pqheyedoctor-components-rounded', get_template_directory_uri()."/assets/global/css/components-rounded.css" );
	
	wp_enqueue_style( 'pqheyedoctor-plugins', get_template_directory_uri()."/assets/global/css/plugins.css");
	
	wp_enqueue_style( 'pqheyedoctor-layout', get_template_directory_uri()."/assets/admin/layout3/css/pqh_layout.css");
	
	wp_enqueue_style( 'pqheyedoctor-default', get_template_directory_uri()."/assets/admin/layout3/css/themes/default.css");
	
	wp_enqueue_style( 'pqheyedoctor-basic-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'pqheyedoctor-jquery-min', get_template_directory_uri() . '/assets/global/plugins/jquery.min.js', array(), '20170512' , true);

	wp_enqueue_script( 'pqheyedoctor-jquery-migrate', get_template_directory_uri() . '/assets/global/plugins/jquery-migrate.min.js', array(), '20170512', true );

	wp_enqueue_script( 'pqheyedoctor-jquery-ui', get_template_directory_uri() . '/assets/global/plugins/jquery-ui/jquery-ui.min.js', array(), '20170512', true );
	
	wp_enqueue_style( 'pqheyedoctor-nivo-slider-default-theme', get_template_directory_uri()."/assets/global/nivo/slider/themes/default/default.css" );
	
	wp_enqueue_style( 'pqheyedoctor-nivo-slider-style', get_template_directory_uri()."/assets/global/nivo/slider/nivo.css" );
	
	wp_enqueue_script( 'pqheyedoctor-nivo-slider', get_template_directory_uri() . '/assets/global/scripts/nivo.slider.js', array('jquery'), '20170512', true  );
	
	wp_enqueue_script( 'pqheyedoctor-bootstrap', get_template_directory_uri() . '/assets/global/plugins/bootstrap/js/bootstrap.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-bootstrap-hover-dropdown', get_template_directory_uri() . '/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-jquery.slimscroll', get_template_directory_uri() . '/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-jquery.blockui', get_template_directory_uri() . '/assets/global/plugins/jquery.blockui.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-jquery-cokie', get_template_directory_uri() . '/assets/global/plugins/jquery.cokie.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-jquery-uniform', get_template_directory_uri() . '/assets/global/plugins/uniform/jquery.uniform.min.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-metronic', get_template_directory_uri() . '/assets/global/scripts/metronic.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-layout', get_template_directory_uri() . '/assets/admin/layout3/scripts/layout.js', array(), '20170512', true );
	
	wp_enqueue_script( 'pqheyedoctor-demo', get_template_directory_uri() . '/assets/admin/layout3/scripts/demo.js', array(), '20170512', true );
	
}
add_action( 'wp_enqueue_scripts', 'pqheyedoctor_scripts' );



/**
 *  accessible Anchors  wp_menu 
*/
function accessibleAnchors($menu_name, $menu_class='list-group', $menu_item_class='list-group-item', $link_before = NULL, $link_after = NULL, $a_class=''){
	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$a_class = !empty($a_class)? 'class="'.$a_class .'"' :'';

		$menu_list = '<ul id="menu-' . $menu_name . '" class="'.$menu_class.'">';
		foreach ( (array) $menu_items as $key => $menu_item ) {
			// uncomment next line to see all array values
			$linkText = $menu_item->title;
			$url = $menu_item->url;
			$target = $menu_item->target;
			$titleAttr = $menu_item->attr_title;
			// hard-coding the first & only CSS class here, you could loop through others
			$cssClass = $menu_item->classes[0];

			if($target == '_blank'):
			$titleAttr = " title=\"$titleAttr\"";
			else:
			endif;
			$menu_list .= '<li class="'.$menu_item_class.' '.$cssClass.'"><a href="' . $url . '"'.$titleAttr. ' '.$a_class.' >'. $link_before . $linkText .  $link_after .'</a></li>';
		}
		$menu_list .= '</ul>';
	}
	return $menu_list;
}

/* fix_category_link */
function fix_category_link($link) {
	return str_replace('/category/', '/' , $link);
}
add_filter('category_link', 'fix_category_link');

//add post-thumbnails edit form callback function
add_theme_support('post-thumbnails');

function pqheyedoctor_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}

function getTitle(){
	global $post;
	if (is_category() || is_single()) {
		$type = get_post_type();
		if(!empty($type) && $type !='post') {
			$obj = get_post_type_object($type);
			echo "<span class=\"fw-normal\">";
			echo '<a href="/' . $obj->rewrite['slug'] .'">';
			echo $obj->labels->singular_name;
			echo '</a>';
			echo "</span> ";
		}
		if (is_single()) {
			the_title();
		}
			
	} elseif (is_page()) {
			
		if($post->post_parent){
			$anc = get_post_ancestors( $post->ID );
			$title = get_the_title();
			foreach ( $anc as $ancestor ) {
				$output = '<a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a> ';
			}
			echo $output;
			echo '<strong title="'.$title.'"> '.$title.'</strong>';
		} else {
			echo '<strong> '.get_the_title().'</strong>';
		}
			
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"Archive for "; the_time('F jS, Y'); }
	elseif (is_month()) {echo"Archive for "; the_time('F, Y'); }
	elseif (is_year()) {echo"Archive for "; the_time('Y'); }
	elseif (is_author()) {echo"Author Archive"; }
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Blog Archives";}
	elseif (is_search()) {echo"Search Results";}
}



/**
 * Custom Functions for this theme.
 */
 
require_once('wp_bootstrap_navwalker.php');
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';