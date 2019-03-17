    <?php
    /**
     * The template for displaying the header
     *
     * Displays all of the head element and everything up until the "container" div.
     *
     * @package FoundationPress
     * @since FoundationPress 1.0.0
     */

    ?>
    <!doctype html>
    <html class="no-js" <?php language_attributes(); ?> >

    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />


      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

   <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
      <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <!--    first card-->
  <div class="step" style="display:none;" id="demo">
    <button close2-click class="close"><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/close.png"></button>
    <div class="contactCards">
            <div class="contactCards-sectionOne">
               <h1 >We'd Love to <br>hear from you !</h1>
               <p>We are always happy to receive your inquiries,because we can provide you with the solution you read. </p>
               <button next-click class="button cont happy">Inquire About Something</button>
           </div>
        <div class="contactCards-sectionTwo">
           <h5>Contact</h5>
           <p>info<span>@</span>unpluggedweb.com <br />
               (+2) 01273238777<br />
           </p>
       </div>
       <div class="contactCards-sectionThree">
           <h5>Address</h5>
           <p>3 Abd El-Aziz Selim,Ad Doqi,Giza,Egypt</p>
           <a href="https://goo.gl/maps/Vu4WnBh9Ah52" target="_blank"><button  class="button cont Address"><i class="fa fa-map-marker"></i>  View on map</button></a>
       </div>
       <div class="contactCards-sectionFour">
        <h5>Follow Us</h5>
        <div class="ficons">
           <div class="icon-circle button cont"><a href="https://eg.linkedin.com/company/unplugged-web-design"><i class="fa fa-linkedin"></i></a></div>
           <div class="icon-circle button cont"><a href="https://www.instagram.com/unpluggedweb/"><i class="fa fa-instagram"></i></a></div>
           <div class="icon-circle button cont"><a href="https://www.facebook.com/unpluggedweb/"><i class="fa fa-facebook-f"></i></a></div>
           <div class="icon-circle button cont"><a href="#"><i class="fa fa-behance"></i></a></div>
       </div>
</div>
</div>
</div>

<!--    second card-->

<div class="step" style="display:none;" id="demo1" >
    <button close-click class="close"><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/close.png"></button>
    <div class="conform">
       <div class="grid-x">
           <div class="small-12 cell">
            <h3>What are you looking for ? </h3>
            <div class="grouped-cards-buttons">
                <button  next-click class="button cont">Partner with us</button>
                <a class="button cont" href="https://unpluggedweb.com/careers/">Join us</a>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="step" style="display:none;" id="demo2" >
    <button close1-click class="close"><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/close.png"></button>
     <!-- <h3>Provide your contact information</h3> -->
    <div class="conform">
       <div class="grid-x">
           <div class="small-12 cell">
              <?php echo do_shortcode('[gravityform id="7" title ="false" ajax="true"]');?>
            </div>
        </div>
    </div>
</div>

<header class="site-header" role="banner">
  <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
     <div class="title-bar-left">
        <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
        <span class="site-mobile-title title-bar-title">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
       </span>
   </div>
</div>
<!-- full menu -->
<a class="menu-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
  <img class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/logo.png" alt=Unplugged Logo"></a>
<div class="full-menu" id="menu">
    <div class="full-menu__item">
        <button close-menu class="close close-responsive">&times</button>
        <div class="img-content">
           <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">
            <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/invo7.png" alt="menu-about">
            <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/menu_about-min.png" alt="menu-about">

            <div class="text-content">
                <p>About</p>
                <img class="mline" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/mline1.png">
            </div>
        </a>
    </div>
</div>
<div class="full-menu__item">
  <div class="img-content">
   <a href="<?php echo esc_url( home_url( '/projects' ) ); ?>">
    <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/invo7.png" alt="menu-portfolio">
    <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/menu_port-min.png" alt="menu-portfolio">
    <div class="text-content">
        <p>Portfolio</p>
        <img class="mline" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/mline2.png">
    </div>
</a>
</div>
</div>
<div class="full-menu__item">
  <div class="img-content">
   <a href="<?php echo esc_url( home_url( '/products' ) ); ?>">
    <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/invo7.png" alt="menu-products">
    <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/menu_product-min.png" alt="menu-blog">
    <div class="text-content">
        <p>Products</p>
        <img class="mline" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/mline2.png">
    </div>
</a>
</div>
</div>
<div class="full-menu__item">
    <button close-menu class="close close-desktop">&times</button>
    <div class="img-content">
       <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
        <img  src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/invo7.png" alt="menu-blog">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/menu_blog-min.png" alt="menu-blog">
        <div class="text-content">
            <p>Journal</p>
            <img class="mline"src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/mline1.png">
        </div>
       </a>
</div>
</div>

</div>


<nav class="site-navigation top-bar" role="navigation">
 <div class="top-bar-left">
    <div class="site-desktop-title top-bar-title">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img class="home-logo logo" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/logo.png" alt="Unplugged Logo"></a>
    </div>
     <!-- <button close-project class="close" >X</button> -->
</div>

<div class="top-bar-right">

    <button data-click  class="button">Contact us</button>

    <div class="page-name">
    
    <?php 
      $parent = get_post_type( $post->ID );
      // this for main pages
      if($parent == 'page'){
        $title=  basename(get_permalink()); 
        echo $title;
      }
      else {
        // this for post pages
        if ($parent == 'projects'){
          echo 'Portfolio';
        }
        else if ($parent == 'blogs'){
          echo 'Journal';
        }
        else {
          echo $parent;
        }
      }
      
    ?>

   </div>
    <button menu-click  class="menu-button">
        <span></span>
        <span></span>
        <span></span>
    </button>


    <?php foundationpress_top_bar_r(); ?>

    <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
    <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
<?php endif; ?>
</div>
</nav>

</header>
