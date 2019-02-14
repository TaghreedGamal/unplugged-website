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
_e( 'All Rights Reserved. Made with Love & Coffee in Egypt.' );
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




//Products
add_action( 'init', 'create_post_type_products' );
function create_post_type_products() {
   register_post_type( 'products',
       array(
           'labels' => array(
               'name' => __( 'Products' ),
               'singular_name' => __( 'Product' )
               ),
           'public' => true,
           'has_archive' => true,
           'rewrite' => array('slug' => 'products'),
           'supports' => array(
               'title',
               'editor',
               'revision',
               'excerpt',
               'thumbnail',
               'custom-fields'
           ),
       )


   );
}


add_action( 'init', 'create_products_taxonomies' );
function create_products_taxonomies() {
// Add new taxonomy, make it hierarchical (like categories)
$labels = array(
  'name'              => _x( 'Products Categories', 'taxonomy general name', 'textdomain' ),
  'singular_name'     => _x( 'Products Category', 'taxonomy singular name', 'textdomain' ),
  'search_items'      => __( 'Search Products Categories', 'textdomain' ),
  'all_items'         => __( 'All Products Categories', 'textdomain' ),
  'parent_item'       => __( 'Parent Products Category', 'textdomain' ),
  'parent_item_colon' => __( 'Parent Products Category:', 'textdomain' ),
  'edit_item'         => __( 'Edit Products Category', 'textdomain' ),
  'update_item'       => __( 'Update Products Category', 'textdomain' ),
  'add_new_item'      => __( 'Add New Products Category', 'textdomain' ),
  'new_item_name'     => __( 'New Products Category Name', 'textdomain' ),
  'menu_name'         => __( 'Products Categories', 'textdomain' ),
);

$args = array(
  'hierarchical'      => true,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'rewrite'           => array( 'slug' => 'products_categories' ),
);

register_taxonomy( 'products_categories', array( 'products' ), $args );
}



//blog
add_action( 'init', 'create_post_type_blogs' );
function create_post_type_blogs() {
   register_post_type( 'blogs',
       array(
           'labels' => array(
               'name' => __( 'Blogs' ),
               'singular_name' => __( 'Blog' )
               ),
           'public' => true,
           'has_archive' => true,
           'rewrite' => array('slug' => 'blogs'),
           'supports' => array(
               'title',
               'editor',
               'revision',
               'excerpt',
               'thumbnail',
               'custom-fields'
           ),
       )

   );
}
//blog years
add_action( 'init', 'create_blogs_taxonomies' );
function create_blogs_taxonomies() {
// Add new taxonomy, make it hierarchical (like categories)
$labels = array(
  'name'              => _x( 'Year', 'taxonomy general name', 'textdomain' ),
  'singular_name'     => _x( 'Year', 'taxonomy singular name', 'textdomain' ),
  'search_items'      => __( 'Search Year', 'textdomain' ),
  'all_items'         => __( 'All Year', 'textdomain' ),
  'parent_item'       => __( 'Parent Year', 'textdomain' ),
  'parent_item_colon' => __( 'Parent Year:', 'textdomain' ),
  'edit_item'         => __( 'Edit Year', 'textdomain' ),
  'update_item'       => __( 'Update Year', 'textdomain' ),
  'add_new_item'      => __( 'Add New Year', 'textdomain' ),
  'new_item_name'     => __( 'New Blogs Year', 'textdomain' ),
  'menu_name'         => __( 'Years', 'textdomain' ),
);

$args = array(
  'hierarchical'      => true,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'rewrite'           => array( 'slug' => 'year-category' ),
);

register_taxonomy( 'year-category', array( 'blogs' ), $args );
}

//blog department
add_action( 'init', 'create_blogs_department_taxonomies' );
function create_blogs_department_taxonomies() {
// Add new taxonomy, make it hierarchical (like categories)
$labels = array(
  'name'              => _x( 'Blog Departments', 'taxonomy general name', 'textdomain' ),
  'singular_name'     => _x( 'Blog Departments', 'taxonomy singular name', 'textdomain' ),
  'search_items'      => __( 'Search Blog Departments', 'textdomain' ),
  'all_items'         => __( 'All Blog Departments', 'textdomain' ),
  'parent_item'       => __( 'Parent Blog Departments', 'textdomain' ),
  'parent_item_colon' => __( 'Parent Blog Departments:', 'textdomain' ),
  'edit_item'         => __( 'Edit Blog Departments', 'textdomain' ),
  'update_item'       => __( 'Update Blog Departments', 'textdomain' ),
  'add_new_item'      => __( 'Add New Blog Departments', 'textdomain' ),
  'new_item_name'     => __( 'New Blogs Blog Departments', 'textdomain' ),
  'menu_name'         => __( 'Blog Departments', 'textdomain' ),
);

$args = array(
  'hierarchical'      => true,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'rewrite'           => array( 'slug' => 'blog_departments' ),
);

register_taxonomy( 'blog_departments', array( 'blogs' ), $args );
}


  //
  // add_filter("the_content", "plugin_myContentFilter");
  //
  // function plugin_myContentFilter($content)
  // {
  //   // Take the existing content and return a subset of it
  //   return substr($content, 0, 150);
  // }

  function template_chooser($template)
{
  global $wp_query;
  // $post_type = get_query_var('blogs');
  // // $proj_type = get_query_var('projects');
  if($wp_query->is_search && $post_type == 'projects'){
     return locate_template('archive-projects.php');
  }
  else if( $wp_query->is_search && $post_type == 'blogs' )
  {
    return locate_template('archive-blogs.php');  //  redirect to archive-search.php
  }
  else{
    // $post_type = get_query_var('products');
    if($wp_query->is_search && $post_type == 'products')
    {
      return locate_template('archive-products.php');
    }
  }
  return $template;
}
add_filter('template_include', 'template_chooser');


function query_business_challenges( $query ) {

        if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('blogs')) {
            $query->set( 'posts_per_page', 3 );
        } // end if
    }
    add_action( 'pre_get_posts', 'query_business_challenges', 1 );
function query_business_challenges2( $query ) {

        if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('projects')) {
            $query->set( 'posts_per_page', 5 );
        } // end if
    }
    add_action( 'pre_get_posts', 'query_business_challenges2', 1 );



    wp_localize_script( 'twentyfifteen-script', 'ajax_posts', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'noposts' => __('No older posts found', 'twentyfifteen'),
    ));

    function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'blogs',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="small-12 large-4 columns">
                <h1>'.get_the_title().'</h1>
                <p>'.get_the_content().'</p>
         </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


 //// projects load more button
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'projects',
        'post_status' => 'publish',
        'posts_per_page' => '5',
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
            <div class="project-section__post">
                <div class="project-section__post__box box">
                  <div class="project-section__post__box__image">
                    <?php if( get_field('project-img') ): ?>
                      <img src="<?php the_field('project-img'); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="project-section__post__box__content">
                    <h2 class="project-section__post__box__content__title box__title"><?php the_title();?></h2>  
                    <div class="project-section__post__box__content__text box__text"><?php the_excerpt(); ?></div> </br>
                    <div class="small-icon" id="post-icon">
                      <?php
                        if( have_rows('services-icons') ):
                            while ( have_rows('services-icons') ) : the_row();
                                ?> <img src="<?php the_sub_field('services-icons-img')?>">
                        <?php
                            endwhile;
                        else :
                        endif;
                      ?>
                    </div>      
                    <div class="grouped-buttons">
                      <a href="<?php echo(get_post_permalink())?>" class="button">View Project   <i class="fa fa-long-arrow-right"></i></a> 
                    </div> 
                          <?php
      if ( function_exists( 'foundationpress_pagination' ) ) :
        foundationpress_pagination();
      elseif ( is_paged() ) :
      ?>
        <nav id="post-nav">
          <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
          <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
        </nav>
      <?php endif; ?>
      <div class="loadmoreHidden"><?php echo get_next_posts_link( $max_pages ); ?> </div>

                  </div>
                </div>
              </div>
        <?php endwhile ?>
        <?php
    endif;
    wp_die();

}

?>
