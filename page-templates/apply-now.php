<?php
/*
Template Name: Apply Now
*/
get_header(); ?>

<div class="careers-page-container  apply-page-container">
  <div class="careers-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >
      <div class="careers-header-title">
        <h1>Coffee is <br> our bestfriend</h1>
        <!-- <a class="button join-team-button" href="<?php the_field('careers_link');?>">Join the Team</a> -->
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

    <div class="apply-form-container">
      <?php
       $job =  $_GET['job'];
       $job_type = $_GET['job_type'];
       

    $terms = get_terms( array(
        'taxonomy' => 'vacancy_types',
        'hide_empty' => false,
    ) );

    $valid_type = 'false';
    foreach( $terms as $term ){
      $type_name = $term->name;
      $type_name  = str_replace(' ', '_',strtolower($type_name)); 
      if($type_name == $job_type){
        $valid_type = 'true';
      break;
      }
    }
    // echo $valid_type;


        if($job_type == "internship"){
          echo do_shortcode('[gravityform id="9" title ="false" ajax="true"]');
        }else{
          if($job_type != "internship" && $job_type != ""){
            echo do_shortcode('[gravityform id="10" title ="false" ajax="true"]');
          }else{?>
              <div class='error'><h1>Sorry, an error occured</h1> <a class='back-button button' href=''><i class='icon-left'></i>Back to vacancies</a></div>;
            
          <?php }
        }

      ?>
      <div class="job" style="display:none;"><?php echo $job?></div>
    </div>

  </div>

<?php get_footer(); ?>
