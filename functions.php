<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

// footer copyrights
function create_copyright() {
$all_posts = get_posts( 'post_status=publish&order=ASC' );
$first_post = $all_posts[0];
$first_date = $first_post->post_date_gmt;
_e( '&copy;Copyright  ' );
//if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
//echo date( 'Y' );
//} else {
//echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
//}
echo ' <strong>' . get_bloginfo( 'name' ). '</strong> ';
_e( 'All Rights Reserved. Made with Love & Coffe in Egypt.' );
}
function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/wp-content/js/custom-gsap-scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
   register_post_type( 'projects',
       array(
           'labels' => array(
               'name' => __( 'Projects' ),
               'singular_name' => __( 'Projects' )
               ),
           'public' => true,
           'has_archive' => true,
           'rewrite' => array('slug' => 'projects'),
           'supports' => array(
               'title',
               'editor',
               'revision',
               'excerpt',
               'thumbnail',
           ),
       )

   );
}
add_action( 'init', 'create_taxonomies' );
function create_taxonomies() {
 // Add new taxonomy, make it hierarchical (like categories)
 $labels = array(
   'name'              => _x( 'Projects Categories', 'taxonomy general name', 'textdomain' ),
   'singular_name'     => _x( 'Projects Category', 'taxonomy singular name', 'textdomain' ),
   'search_items'      => __( 'Search Projects Categories', 'textdomain' ),
   'all_items'         => __( 'All Projects Categories', 'textdomain' ),
   'parent_item'       => __( 'Parent Projects Category', 'textdomain' ),
   'parent_item_colon' => __( 'Parent Projects Category:', 'textdomain' ),
   'edit_item'         => __( 'Edit Projects Category', 'textdomain' ),
   'update_item'       => __( 'Update Projects Category', 'textdomain' ),
   'add_new_item'      => __( 'Add New Projects Category', 'textdomain' ),
   'new_item_name'     => __( 'New Projects Category Name', 'textdomain' ),
   'menu_name'         => __( 'Projects Categories', 'textdomain' ),
 );

 $args = array(
   'hierarchical'      => true,
   'labels'            => $labels,
   'show_ui'           => true,
   'show_admin_column' => true,
   'query_var'         => true,
   'rewrite'           => array( 'slug' => 'projects_categories' ),
 );

 register_taxonomy( 'projects_categories', array( 'projects' ), $args );
}
?>
<?php 
//function page_order_asc($query) {
  //  $query->set('orderby', 'post_date');
    //$query->set('order', 'ASC');  }
//add_action( 'pre_get_posts', 'page_order_asc');  
?> 