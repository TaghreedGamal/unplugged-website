<?php
/*
Template Name: Careers
*/
get_header(); ?>
<div class="careers-page-container">
  <div class="careers-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >

    <div class="careers-header-title">
      <h1>Coffee is <br> our bestfriend</h1>
      <a class="button join-team-button" href="<?php the_field('careers_link');?>">Join the Team</a>
  </div>
  <div class="small-paper-clip-images">
    <img class="small-paper-clip" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/small-paper-clip.png" alt="">
    <img class="dark-circle"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/oval-blue.svg" alt="">
    <img class="blue-circle"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/semi-circle-full.svg" alt="">
    <img class="line-1"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/line.svg" alt="">
    <img class="line-2"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/line.svg" alt="">

  </div>
  <div class="large-paper-clip-images">
    <img class="large-paper-clip" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/large-paper-clip.png" alt="">
    <img class="dark-circle"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/oval-blue.svg" alt="">
    <img class="blue-circle"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/semi-circle-full.svg" alt="">
    <img class="zigzag-1"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/home/mline1.png" alt="">
    <img class="zigzag-2"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/home/mline1.png" alt="">

  </div>
  </div>
  <div class="careers-page-content">
    <div class="team-section">
      <div class="team-image">
        <img src="<?php the_field('team_image'); ?>" alt="">
      </div>
      <div class="team-text">
        <?php the_field('team_text'); ?>
        <img src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/long-zigzag.png" alt="">
      </div>
    </div>
    <div class="who-we-hire-section">
      <div class="who-we-hire-image">
        <img class="bike-image" src="<?php the_field('who_we_hire_image') ?>" alt="">
        <img class="curve-orange"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/curve-orange.svg" alt="">
        <img class="curve-blue"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/curve-blue.svg" alt="">
        <img class="blue-circle"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/semi-circle-full.svg" alt="">
        <img class="line"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/line-dotted.svg" alt="">
        <img class="zigzag-1"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/small-zigzag.svg" alt="">
        <img class="zigzag-2"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/careers/small-zigzag.svg" alt="">
      </div>
      <div class="who-we-hire-content">
        <h1>Who we hire</h1>
        <div class="who-we-hire-text">
            <p><?php the_field('who_we_hire') ?></p>
            <a class="join-team-button button"href="<?php the_field('careers_link'); ?>">Join the Team</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
