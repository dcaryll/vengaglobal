<?php

// Register widgetized area for horizontal mega menu navigation
register_sidebar(array(
	'name' => __( 'Mega Menu','wpex'),
	'id' => 'mega-menu',
	'description' => __( 'Widgets in this area are used in horizontal mega menu','wpex' ),
	'before_widget' => '<div id="mega menu widget">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => '',
));

// Register widget area for landing pages.
register_sidebar(array(
	'name' => __( 'Landing Pages','wpex'),
	'id' => 'landing_pages',
	'description' => __( 'Widgets in this area are used on landing pages.','wpex' ),
	'before_widget' => '<div class="sidebar-box %2$s clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="heading"><span>',
	'after_title' => '</span></h4>',
));

// Register widget area for landing pages.
register_sidebar(array(
	'name' => __( 'Blog','wpex'),
	'id' => 'blog',
	'description' => __( 'Widgets in this area are used on the blog.','wpex' ),
	'before_widget' => '<div class="sidebar-box %2$s clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="heading"><span>',
	'after_title' => '</span></h4>',
));

// Enable the ability of uploading SVG files to Media Library
function cc_mime_types( $mimes ){
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", false, null);
   wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js', array('jquery'), '1.11.2');
   wp_enqueue_script('jquery');
   wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);
}

function register_dcaryll_menu() {
  register_nav_menu('header-menu-2014',__( 'Header Menu 2014' ));
}
add_action( 'init', 'register_dcaryll_menu' );


add_theme_support( 'html5', array( 'search-form' ) );

/**
 * Show all parents, regardless of post status.
 *
 * @param   array  $args  Original get_pages() $args.
 *
 * @return  array  $args  Args set to also include posts with pending, draft, and private status.
 */
function my_slug_show_all_parents( $args ) {
	$args['post_status'] = array( 'publish', 'pending', 'draft', 'private' );
	return $args;
}
add_filter( 'page_attributes_dropdown_pages_args', 'my_slug_show_all_parents' );
add_filter( 'quick_edit_dropdown_pages_args', 'my_slug_show_all_parents' );

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'success-stories',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Success Stories' ),
                'singular_name' => __( 'Success Story' )
            ),
			'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
			'with_front' => false,
            'rewrite' => array('slug' => 'success-stories'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/**
 * Set 'with_front' to false for the 'experts' post type.
 */
add_filter( 'register_post_type_args', function( $args, $post_type )
{
    if( 'success-stories' === $post_type && is_array( $args ) )
            $args['rewrite']['with_front'] = false;

    return $args;
}, 99, 2 );

function cptui_register_my_taxes_success_stories() {

	/**
	 * Taxonomy: Success Stories.
	 */

	$labels = array(
		"name" => __( "Categories", "" ),
		"singular_name" => __( "Category", "" ),
	);

	$args = array(
		"label" => __( "Success Stories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Success Stories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'success_stories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "success_stories",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "success_stories", array( "success-stories" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_success_stories' );

// Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );

// Add featured image sizes
add_image_size( 'success-medium', 800, 600, true ); // width, height, crop
//custom post type URL rewrite
/*function filter_post_type_link($link, $post)
{
    if ($post->post_type != 'portfolio')
        return $link;

    if ($cats = get_the_terms($post->ID, 'portfolio_cats'))
        $link = str_replace('%portfolio_cats%', array_pop($cats)->slug, $link);
    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);
*/
?>