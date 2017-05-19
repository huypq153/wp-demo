<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package PQHEyeDoctor
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function pqheyedoctor_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'pqheyedoctor_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 */
function pqheyedoctor_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	$classes[] = 'page-header-menu-fixed';
	return $classes;
}
add_filter( 'body_class', 'pqheyedoctor_body_classes' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
function pqheyedoctor_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}
add_filter( 'attachment_link', 'pqheyedoctor_enhanced_image_navigation', 10, 2 );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 */
function pqheyedoctor_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'pqheyedoctor' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'pqheyedoctor_wp_title', 10, 2 );

/**
 * Create Gioithieu Post Type
 */

function create_gioithieu_post_type() {

	// Set UI labels for Custom Post Type
	$labels = array(
			'name'                => _x( 'Giới thiệu', 'Post Type General Name', 'pqheyedoctor' ),
			'singular_name'       => _x( 'Giới thiệu', 'Post Type Singular Name', 'pqheyedoctor' ),
			'menu_name'           => __( 'Giới thiệu', 'pqheyedoctor' ),
			'parent_item_colon'   => __( 'Parent Intro', 'pqheyedoctor' ),
			'all_items'           => __( 'DS Giới thiệu', 'pqheyedoctor' ),
			'view_item'           => __( 'Xem Giới thiệu', 'pqheyedoctor' ),
			'add_new_item'        => __( 'Thêm mới Giới thiệu', 'pqheyedoctor' ),
			'add_new'             => __( 'Thêm mới', 'pqheyedoctor' ),
			'edit_item'           => __( 'Sửa Giới thiệu', 'pqheyedoctor' ),
			'update_item'         => __( 'Cập nhật Giới thiệu', 'pqheyedoctor' ),
			'search_items'        => __( 'Tìm Giới thiệu', 'pqheyedoctor' ),
			'not_found'           => __( 'Not Found', 'pqheyedoctor' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'pqheyedoctor' ),
	);

	// Set other options for Custom Post Type

	$args = array(
			'label'               => __( 'gioithieu', 'pqheyedoctor' ),
			'description'         => __( 'Giới thiệu news and reviews', 'pqheyedoctor' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'gioithieu' ),
			/* A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'gioithieu', $args );
	

}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action( 'init', 'create_gioithieu_post_type', 0 );


/**
 * Create Dichvu Post Type
 */

function create_dichvu_post_type() {

	// Set UI labels for Custom Post Type
	$labels = array(
			'name'                => _x( 'Dịch vụ', 'Post Type General Name', 'pqheyedoctor' ),
			'singular_name'       => _x( 'Dịch vụ', 'Post Type Singular Name', 'pqheyedoctor' ),
			'menu_name'           => __( 'Dịch vụ', 'pqheyedoctor' ),
			'parent_item_colon'   => __( 'Parent Dịch vụ', 'pqheyedoctor' ),
			'all_items'           => __( 'DS Dịch vụ', 'pqheyedoctor' ),
			'view_item'           => __( 'Xem Dịch vụ', 'pqheyedoctor' ),
			'add_new_item'        => __( 'Thêm Dịch vụ', 'pqheyedoctor' ),
			'add_new'             => __( 'Thêm mới', 'pqheyedoctor' ),
			'edit_item'           => __( 'Sửa Dịch vụ', 'pqheyedoctor' ),
			'update_item'         => __( 'Cập nhật Dịch vụ', 'pqheyedoctor' ),
			'search_items'        => __( 'Tìm Dịch vụ', 'pqheyedoctor' ),
			'not_found'           => __( 'Not Found', 'pqheyedoctor' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'pqheyedoctor' ),
	);

	// Set other options for Custom Post Type

	$args = array(
			'label'               => __( 'dichvu', 'pqheyedoctor' ),
			'description'         => __( 'Dịch vụ news and reviews', 'pqheyedoctor' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'dichvu' ),
			/* A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
	* is like Posts.
	*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'dichvu', $args );


}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action( 'init', 'create_dichvu_post_type', 1 );

/**
 * Create Quy trinh Post Type
 */

function create_quytrinh_post_type() {

	// Set UI labels for Custom Post Type
	$labels = array(
			'name'                => _x( 'Quy trình', 'Post Type General Name', 'pqheyedoctor' ),
			'singular_name'       => _x( 'Quy trình', 'Post Type Singular Name', 'pqheyedoctor' ),
			'menu_name'           => __( 'Quy trình', 'pqheyedoctor' ),
			'parent_item_colon'   => __( 'Parent Quy trình', 'pqheyedoctor' ),
			'all_items'           => __( 'DS Quy trình', 'pqheyedoctor' ),
			'view_item'           => __( 'Xem Quy trình', 'pqheyedoctor' ),
			'add_new_item'        => __( 'Thêm Quy trình', 'pqheyedoctor' ),
			'add_new'             => __( 'Thêm mới', 'pqheyedoctor' ),
			'edit_item'           => __( 'Sửa Quy trình', 'pqheyedoctor' ),
			'update_item'         => __( 'Cập nhật Quy trình', 'pqheyedoctor' ),
			'search_items'        => __( 'Tìm Quy trình', 'pqheyedoctor' ),
			'not_found'           => __( 'Not Found', 'pqheyedoctor' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'pqheyedoctor' ),
	);

	// Set other options for Custom Post Type

	$args = array(
			'label'               => __( 'quytrinh', 'pqheyedoctor' ),
			'description'         => __( 'Quy trình news and reviews', 'pqheyedoctor' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'quytrinh' ),
			/* A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
	* is like Posts.
	*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'quytrinh', $args );


}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action( 'init', 'create_quytrinh_post_type', 2 );

/**
 * Create Tai lieu Post Type
 */

function create_tailieu_post_type() {

	// Set UI labels for Custom Post Type
	$labels = array(
			'name'                => _x( 'Tài liệu', 'Post Type General Name', 'pqheyedoctor' ),
			'singular_name'       => _x( 'Tài liệu', 'Post Type Singular Name', 'pqheyedoctor' ),
			'menu_name'           => __( 'Tài liệu', 'pqheyedoctor' ),
			'parent_item_colon'   => __( 'Parent Tài liệu', 'pqheyedoctor' ),
			'all_items'           => __( 'DS Tài liệu', 'pqheyedoctor' ),
			'view_item'           => __( 'Xem Tài liệu', 'pqheyedoctor' ),
			'add_new_item'        => __( 'Thêm Tài liệu', 'pqheyedoctor' ),
			'add_new'             => __( 'Thêm mới', 'pqheyedoctor' ),
			'edit_item'           => __( 'Sửa Tài liệu', 'pqheyedoctor' ),
			'update_item'         => __( 'Cập nhật Tài liệu', 'pqheyedoctor' ),
			'search_items'        => __( 'Tìm Tài liệu', 'pqheyedoctor' ),
			'not_found'           => __( 'Not Found', 'pqheyedoctor' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'pqheyedoctor' ),
	);

	// Set other options for Custom Post Type

	$args = array(
			'label'               => __( 'tailieu', 'pqheyedoctor' ),
			'description'         => __( 'Tài liệu news and reviews', 'pqheyedoctor' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'tailieu' ),
			/* A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
	* is like Posts.
	*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'tailieu', $args );


}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action( 'init', 'create_tailieu_post_type', 3 );

/**
 *  post view set 
 */
function postview_set($postID) {
	$count_key = 'postview_number';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
/**
 * post view 
 */
function postview_get($postID){
	$count_key = 'postview_number';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 lượt xem";
	}
	return $count.' lượt xem';
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/**
 * get related post
 */
function get_related_post() {
	global $post;
	$categories = get_the_category($post->ID);
	$child_cats = array();
	if ( get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type($post->ID);
	}else {

		if(count($categories) ==1){
			$child_cats[] = $categories[0]->term_id;
		}else{
			foreach ( $categories as $post_cat ) {
				//echo $post_cat->category_parent;
				if ( 0 != $post_cat->category_parent ) {
					$child_cats[] = $post_cat->term_id;
				}
			}
		}
	}
	$args=array(
			'category__in' => $child_cats,
			'post__not_in' => array($post->ID),
			'post_type' => $post_type,
			'showposts'=>4,
			'post_status'=>'publish',
			'posts_per_page'=>-1,
			'caller_get_posts'=>1,
			'order'=>'asc'
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ):
			if( is_single() ): ?>
				<h2 class="relatedtitle">Tin liên quan</h2>
				<div class="related row">
					<?php 
					$row = 1;
					while ($my_query->have_posts()):$my_query->the_post();?>
						<div class="col-md-6 " style="margin-bottom: 10px;">
		        			<div class="media">
			                    <a class="pull-left" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
			                    	<?php if(has_post_thumbnail()):?>
			                        	<?php 
				                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($my_query->ID), 'thumbnail_size' );
				                        	$url = $thumb['0'];
				                        	$url_resize_img = aq_resize($url,'158px', '90px', true);
				                        ?>
				                        	<img class=" " src="<?php echo $url_resize_img; ?>" alt="">
			                        <?php else:?>
			                        	<img class="media-object" src="http://placehold.it/158x90" alt="">
			                        <?php endif;?>
			                        
			                    </a>
			                    <div class="media-body">
			                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			                        <br>
			                        <?php the_date('d/m/Y','<span class="sp-post-date">( ', ')</span>');?>
			                    </div>
			                </div>
			        	</div>
					<?php endwhile; ?>
				</div>
		<?php 
			endif; 
		endif; 
		wp_reset_query(); 
		
}

/**
 * Breadcrumb
 */ 

function dimox_breadcrumbs(){
	/* === OPTIONS === */
	$text['home']     = 'Trang chủ'; // text for the 'Home' link
	$text['category'] = '%s'; // text for a category page
	$text['tax'] 	  = '%s'; // text for a taxonomy page
	$text['search']   = 'Search Results for "%s" Query'; // text for a search results page
	$text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
	$text['author']   = 'Articles Posted by %s'; // text for an author page
	$text['404']      = 'Error 404'; // text for the 404 page
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter   = ' &#47; '; // delimiter between crumbs
	$before      = '<span class="current">'; // tag before the current crumb
	$after       = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */
	global $post;
	$homeLink = get_bloginfo('url') . '/';
	$linkBefore = '<span typeof="v:Breadcrumb">';
	$linkAfter = '</span>';
	$linkAttr = ' rel="v:url" property="v:title"';
	$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
	if (is_home() || is_front_page()) {
		if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $text['home'] . '</a></div>';
	} else {
		echo '<div id="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#">' . sprintf($link, $homeLink, $text['home']) . $delimiter;

		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
			}
			echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
		} elseif( is_tax() ){
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
			}
			echo $before . sprintf($text['tax'], single_cat_title('', false)) . $after;

		}elseif ( is_search() ) {
			echo $before . sprintf($text['search'], get_search_query()) . $after;
		} elseif ( is_day() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
			echo $before . get_the_time('d') . $after;
		} elseif ( is_month() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo $before . get_the_time('F') . $after;
		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				if($slug['slug'] == "intro"){
					$slug['slug'] = '/';
				}
				printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];

				$cats = get_category_parents($cat, TRUE, $delimiter);
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
			$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
			echo $cats;
			printf($link, get_permalink($parent), $parent->post_title);
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
		} elseif ( is_page() && !$post->post_parent ) {
			if ($showCurrent == 1) echo $before . get_the_title() . $after;
		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo $delimiter;
			}
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
		} elseif ( is_tag() ) {
			echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;
		} elseif ( is_404() ) {
			echo $before . $text['404'] . $after;
		}
		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
		echo '</div>';
	}
} // end dimox_breadcrumbs()

/**
 * Get post of category slider by CatID
 *
 */
function get_post_of_category_slider($catID){
	$args=array(
			'category__in' => $catID,
			'showposts'=>4,
			'ignore_sticky_posts'=>1,
			'orderby'=>rand);
	$my_query = new WP_Query($args);

	if( $my_query->have_posts() ):

	?>
				<ul id="<?php echo $catID;?>" >
				<?php 
					while ($my_query->have_posts()):$my_query->the_post();?>
				          <li ><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	           <?php endwhile; ?>
               </ul>    
	<?php 
		endif; 
		wp_reset_query(); 
}

/**
 * Create Post of Category
 * 
 */
function create_postcategory_widget() {
	register_widget( 'PostCategory_Widget' );
}
add_action( 'widgets_init', 'create_postcategory_widget' );

class PostCategory_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
				'post_category',
				'PQH bài theo chuyên mục',
				array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
		);
	}
	/*
	 * Tạo form điền tham số cho widget
	 * ở đây ta có 3 form là title, postnum (số lượng bài) và postdate (tuổi của bài
	 */
	function form($instance) {
		$default = array(
				'title' => 'Bài viết theo chuyên mục',
				'postnum' => 5,
				'bg_widget' => '',
				'category' => 'slug',
		);
		$instance = wp_parse_args( (array) $instance, $default );
		$title = esc_attr( $instance['title'] );
		$postnum = esc_attr( $instance['postnum'] );
		$bg_widget = esc_attr( $instance['bg_widget'] );
		$category = esc_attr( $instance['category'] );

		echo "<label>Tiêu đề:</label> <input class='widefat' type='text' name='".$this->get_field_name('title')."' value='".$title."' />";
		echo "<label>Số lượng bài viết:</label> <input class='widefat' type='number' name='".$this->get_field_name('postnum')."' value='".$postnum."' />";
		echo "<label>Mầu widget:</label> <input class='widefat' type='text' name='".$this->get_field_name('bg_widget')."' value='".$bg_widget."' placeholder='blue|grey|yellow|red|green|blue-hoki|purple'  />";
		echo '<p>Nhập vào slug chuyên mục <input type="text" class="widefat" name="'.$this->get_field_name('category').'" value="'.$category.'" placeholder="'.$category.'"  /></p>';
	}

	/*
	 * Cập nhật dữ liệu nhập vào form tùy chọn trong database
	 */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['postnum'] = strip_tags($new_instance['postnum']);
		$instance['bg_widget'] = strip_tags($new_instance['bg_widget']);
		$instance['category'] = strip_tags($new_instance['category']);
		return $instance;
	}

	function widget($args, $instance) {
		global $postdate; // Thiết lập biến $postdate là biến toàn cục để dùng ở hàm filter_where
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$postnum = $instance['postnum'];
		$category = $instance['category'];
		$bg_widget =  (!empty($instance['bg_widget'])) ? $instance['bg_widget'] : '';
		$query_args = array(
				'posts_per_page' => $postnum,
				//'category_name' => $category,
				//'post_type' =>$category,
				//'taxonomies' => array( 'post_tag', 'category','intro','faq','review'),
				'orderby' => 'date',
				'order' => 'DESC'
		);
		$post_type_arr = array('gioithieu','dichvu','quytrinh','news','cat-news');
		if(in_array($category, $post_type_arr)){
			$query_args['post_type'] = $category;
		}else{
			$query_args['category_name'] = $category;
		}
		echo $before_widget;
		echo '<div class="portlet box '.$bg_widget.' ">';
		echo '	<div class="portlet-title">';
		echo '		<div class="caption">';
		echo $title;
		echo '		</div>';
		echo '		<div class="tools">';
		echo '			<a href="javascript:;" class="collapse" data-original-title="" title="">';
		echo '			</a>';
		echo '		</div>';
		echo '	</div>';
		$postview_query = new WP_Query( $query_args );
		if ($postview_query->have_posts() ) :
		while ( $postview_query->have_posts() ) :
                $postview_query->the_post(); 
				echo '<div class="portlet-body">';
		?>
 				<div class="media">
					<a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php 
							if ( has_post_thumbnail() ){
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postview_query->ID), 'thumbnail_size' );
								$url = $thumb['0'];
								$url_resize_img = aq_resize($url,'83px', '63px', true);
								echo '<img class="media-object" src="'.$url_resize_img.'" alt="">';
							}else{
								echo '<img class="media-object" src="http://placehold.it/83x63" alt="">';
							}
						 ?>
					</a>
					<div class="media-body" >
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
	                		if(!empty($text_lenght) && $text_lenght >0 ){
	                			echo short_title($text_after,$text_lenght);
	                		}else{
	                			$subtitle = get_post_meta(get_the_ID(), 'tkx_sub_title', true);
	                			if(isset($subtitle) && !empty($subtitle)) {
	                				echo $subtitle;
	                			}else {
	                				the_title();
	                			}
	                		}
	                		?>
                		</a>
					</div>
				</div>
			<?php echo '</div>';?>
            <?php endwhile;
            endif;
            echo '</div>';
            echo $after_widget;
    }
}

/**
 * Get news of categroy by slug
 * @param unknown $post_number
 * @param unknown $cat_slug
 */
function get_news_of_category_by_slug( $post_number, $cat_slug ) {
	$query_args = array(
			'posts_per_page' => $post_number,
			'category_name' => $cat_slug,
			'orderby' => 'date',
			'order' => 'asc'
	);
	$post = new WP_Query($query_args);
	if ($post->have_posts()):

	while( $post->have_posts() ) :
                $post->the_post(); ?>
 				<div class="media">
                     <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     	<?php if(has_post_thumbnail()){?>
                     		<?php 
	                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($my_query->ID), 'thumbnail_size' );
	                        	$url = $thumb['0'];
	                        	$url_resize_img = aq_resize($url,'82px', '62px', true);
	                        ?>
	                        <img class="media-object-home "  src="<?php echo $url_resize_img; ?>" alt="">
                        <?php }else{?>
                        <img class="media-object-home" src="http://placehold.it/82x62" alt="">
                        <?php }?>
                    </a>
                    <div class="media-body">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php endwhile;
    endif;
 	wp_reset_query();
}

/**
 * creat_html_box_category
 * @param unknown $cat_slug
 */
function creat_html_box_category($cat_slug, $title='', $skin='', $radius=false){
	$cat = get_cat_by_slug($cat_slug);
	if($cat->cat_ID >0){
		if(empty($title)) $title= $cat->name;
		
		$cssRadius = ' none-radius ';
		if($radius)
			$cssRadius = ' ';
		$desc = '<p>'.$cat->description.'</p>';
		$cat_resize_img = aq_resize($cat->img_data['img'],'600px',null, true);
		$cat_img = '<a class="pull-left" href="/'.$cat->slug.'" title="'.$title.'"><img class="img-responsive" src="'.$cat_resize_img.'" alt="'.$title.'"> </a>';
		$retVal = '<div class="portlet '.$skin . $cssRadius .'">
							<div class="portlet-title">
								'.$cat_img.'	                                                
							</div>
							<div class="portlet-body '. $cssRadius .'">
								<h3 class="ptitle">'.$title.'</h3> 
								'.$desc.'
							</div>
					</div>';
		return $retVal;
	}
	return '';
}

/**
 * get_box_category_home
 * @param unknown $cat_slug
 */
function get_box_category_home($cat_slug, $title='', $img_size='600px'){
	$cat = get_cat_by_slug($cat_slug);
	if($cat->cat_ID >0){
		if(empty($title)) $title= $cat->name;
		$desc = '<p>'.$cat->description.'</p>';
		$cat_resize_img = aq_resize($cat->img_data['img'],$img_size,null, true);
		$cat_img = '<a class="pull-left" href="/'.$cat->slug.'" title="'.$title.'"><img class="img-responsive" src="'.$cat_resize_img.'" alt="'.$title.'"> </a>';
		$retVal = array('img'=> $cat_img, 'title' =>$title, 'desc'=> $desc);
		return $retVal;
	}
	return '';
}

function get_related_post_by_cat($args, $title) {
	global $postdate;
	$text_lenght = 0;
	$text_after = '';
	$postnum = $args['postnum'];
	$category = $args['category'];
	if(array_key_exists('text_lenght',$args) && $args['text_lenght']){
		$text_lenght = $args['text_lenght'];
	}
	$query_args = array(
			'posts_per_page' => $postnum,
			'orderby' => 'date',
			'order' => 'DESC'
	);
	$post_type_arr = array('gioithieu','quytrinh','tailieu','dichvu');
	if(in_array($category, $post_type_arr)){
		$query_args['post_type'] = $category;
	}else{
		$query_args['category_name'] = $category;
	}
	$postview_query = new WP_Query( $query_args );
	if ($postview_query->have_posts() ) :
	$row = 0;
	while ( $postview_query->have_posts() ) :
			$postview_query->the_post();
			$post = get_post($postview_query->ID);
	?>
			<div class="media">
                     <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     	<?php if(has_post_thumbnail()){?>
                     		<?php 
	                        	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($my_query->ID), 'thumbnail_size' );
	                        	$url = $thumb['0'];
	                        	//echo $url;
	                        	$url_resize_img = aq_resize($url,'82px', '62px', true);
	                        ?>
	                        <img class="media-object-home "  src="<?php echo $url_resize_img; ?>" alt="">
                        <?php }else{?>
                        	<img class="media-object-home" src="http://placehold.it/82x62" alt="">
                        <?php }?>
                    </a>
                    <div class="media-body">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
      <?php endwhile;
      endif;
}

/**
 * get post by cat theme1
 * @param unknown $args
 * @param unknown $title
 */
function get_post_by_cat_theme1($args, $title) {
	global $postdate; 
	$text_lenght = 0;
	$text_after = '';
	$postnum = $args['postnum'];
	$category = $args['category'];
	if(array_key_exists('text_lenght',$args) && $args['text_lenght']){
		$text_lenght = $args['text_lenght'];
	}
	$query_args = array(
			'posts_per_page' => $postnum,
			'orderby' => 'date',
			'order' => 'DESC'
	);
	$post_type_arr = array('gioithieu','quytrinh','tailieu','dichvu');
	if(in_array($category, $post_type_arr)){
		$query_args['post_type'] = $category;
	}else{
		$query_args['category_name'] = $category;
	}
	$postview_query = new WP_Query( $query_args );
	if ($postview_query->have_posts() ) :
	$row = 0;
	while ( $postview_query->have_posts() ) :
                $postview_query->the_post(); 
				$post = get_post($postview_query->ID);
	?>
			<div class="col-md-6 ">
				<div class="portlet eye-box-cat ">
						<div class="portlet-title">
							<?php 
								if ( has_post_thumbnail() ){
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postview_query->ID), 'thumbnail_size' );
									$url = $thumb['0'];
									$url_resize_img = aq_resize($url,'600px', '278px', true);
									echo '<img class="img-responsive" src="'.$url_resize_img.'" alt="">';
								}
							 ?>                                                
						</div>
						<h3>
							<?php
								if(!empty($text_lenght) && $text_lenght > 0 ){
		                			echo short_title($text_after,$text_lenght);
		                		}else{
		                			the_title();
		                		} ?> 
						</h3> 
						<div class="portlet-body">
							<?php echo  $post->post_excerpt;?>
						</div>
				</div>
			</div>
                
				<?php $row ++;?>
            <?php endwhile;
            endif;
}

/**
 * get post by cat theme2
 * @param unknown $args
 * @param unknown $title
 */
function get_post_by_cat($args, $title) {
	global $postdate;
	$text_lenght = 0;
	$text_after = '';
	$postnum = $args['postnum'];
	$category = $args['category'];
	if(array_key_exists('text_lenght',$args) && $args['text_lenght']){
		$text_lenght = $args['text_lenght'];
	}
	$query_args = array(
			'posts_per_page' => $postnum,
			'orderby' => 'date',
			'order' => 'DESC'
	);
	$post_type_arr = array('gioithieu','quytrinh','tailieu','dichvu');
	if(in_array($category, $post_type_arr)){
		$query_args['post_type'] = $category;
	}else{
		$query_args['category_name'] = $category;
	}
	$postview_query = new WP_Query( $query_args );
	if ($postview_query->have_posts() ) :
	$row = 0;
	while ( $postview_query->have_posts() ) :
	$postview_query->the_post();
	$post = get_post($postview_query->ID);
	$inshow = 'collapse';
	if($row ==0){
		$inshow = 'in';
	}
	?>
                <div class="panel-group accordion" id="accordion1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a class="panel-title accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_<?php echo $post->ID; ?>">
							<?php
								if(!empty($text_lenght) && $text_lenght > 0 ){
		                			echo short_title($text_after,$text_lenght);
		                		}else{
		                			the_title();
		                		} ?> 
							
							</a>
						</div>
						
						<div id="collapse_<?php echo $post->ID; ?>" class="panel-collapse <?php echo $inshow; ?>">
							<div class="panel-body">
								<div class="media">
										<a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php 
												if ( has_post_thumbnail() ){
													$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postview_query->ID), 'thumbnail_size' );
													$url = $thumb['0'];
													$url_resize_img = aq_resize($url,'83px', '63px', true);
													echo '<img class="media-object" src="'.$url_resize_img.'" alt="">';
												}else{
													echo '<img class="media-object" src="http://placehold.it/83x63" alt="">';
												}
											 ?>
										</a>
										<div class="media-body" >
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php
						                				the_title();
						                		?>
					                		</a>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<?php $row ++;?>
            <?php endwhile;
            endif;
}

/**
 * get_cat_by_slug
 * @param unknown $cat_slug
 * @return Ambigous <object, WP_Term, multitype:, false>
 */

function get_cat_by_slug($cat_slug){
	$cat = get_category_by_slug($cat_slug);
	$cat_ID = $cat->term_id;
	$cat_data = get_option("category_". $cat_ID);
	$cat->img_data = $cat_data;
	return $cat;
}

/**
 * get_post_by_name
 * @param unknown $slug
 * @param unknown $post_type
 */
function get_post_by_name($slug, $post_type){
	$args = [
			'post_type'      => $post_type,
			'posts_per_page' => 1,
			'post_name__in'  => [$slug]
	];
	$query = get_posts( $args );
	return $query;
}

/**
 * Get objects by post type
 * @param unknown $post_type
 * @param unknown $post_number
 * @return WP_Query
 */
function get_objects_type($post_type, $post_number) {
	$args = array('post_type' =>$post_type,'posts_per_page' => $post_number);
	$loop = new WP_Query( $args );
	return $loop;
}

//add post-thumbnails edit form callback function
add_theme_support('post-thumbnails');

/**
 * add extra fields to category edit form callback function
 */
add_action ( 'edit_category_form_fields', 'extra_category_fields');
function extra_category_fields( $tag ) { //check for existing featured ID
	$t_id = $tag->term_id;
	$cat_meta = get_option( "category_$t_id");
	// jQuery
	wp_enqueue_script('jquery');
	// This will enqueue the Media Uploader script
	wp_enqueue_media();
	?>
      <script type="text/javascript">
		jQuery(document).ready(function($){
			$('#temp_img').hide();
		    $('#upload-btn').click(function(e) {
		        e.preventDefault();
		        var image = wp.media({ 
		            title: 'Upload Image',
		            // mutiple: true if you want to upload multiple files at once
		            multiple: false
		        }).open()
		        .on('select', function(e){
		            // This will return the selected image from the Media Uploader, the result is an object
		            var uploaded_image = image.state().get('selection').first();
		            // We convert uploaded_image to a JSON object to make accessing it easier
		            // Output to the console uploaded_image
		            //console.log(uploaded_image);
		            var image_url = uploaded_image.toJSON().url;
		            // Let's assign the url value to the input field
		            $('.image_url').val(image_url);
		            $('#temp_img').show();
		            $('#temp_img').attr('src',image_url);
		        });
		    });
		 });
	  </script>
      <tr class="form-field">
      <th scope="row" valign="top">
       <label for="cat_Image_url"><?php _e('Category Image Url'); ?></label>
      </th>
      <td>
      <input type="text" class="image_url" name="Cat_meta[img]" id="Cat_meta[img]" size="3" style="width:60%;" 
      value="<?php echo $cat_meta['img'] ? $cat_meta['img'] : ''; ?>">
      <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Select From Media">
      <br />
      <img alt="" src="" id="temp_img">
      <br />
      <span class="description"><?php _e('Image for category: use full url with '); ?></span>
      </td>
      </tr>
<?php
}

/**
 * Save extra category extra fields hook
 */
add_action ( 'edited_category', 'save_extra_category_fileds');
// save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
	if ( isset( $_POST['Cat_meta'] ) ) {
		$t_id = $term_id;
		$cat_meta = get_option( "category_$t_id");
		$cat_keys = array_keys($_POST['Cat_meta']);
		foreach ($cat_keys as $key){
			if (isset($_POST['Cat_meta'][$key])){
				$cat_meta[$key] = $_POST['Cat_meta'][$key];
			}
		}
		//save the option array
		update_option( "category_$t_id", $cat_meta );
	}
}

