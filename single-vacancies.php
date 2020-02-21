<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

?>
<?php 


$job = str_replace(' ', '_',strtolower(get_the_title())); 

 $type = get_field('job_type');
 $type_name = "";
		foreach( $type as $term ){
			 $type_name = $term->name;
     }
              
$job_type = str_replace(' ', '_',strtolower($type_name)); 

?>

<div class="careers-page-container  vacancy-page-container">
  <div class="careers-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >

    <div class="careers-header-title">
      <!-- <h1>Coffee is <br> our bestfriend</h1> -->
      <!-- <h1><?php the_title();?></h1> -->
      <a class="button join-team-button" href="<?php echo esc_url( home_url( '/vacancies' ) ); ?>"><i class="icon-left"></i> Back to all jobs</a>
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


	<?php get_template_part( 'template-parts/featured-image' ); ?>
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'template-parts/content', '' ); ?>
					<?php //the_post_navigation(); ?>
          <?php //comments_template(); ?>
          
          <div class="vacancy">
            <div class="vacancy-header">
              <div class="vacancy-title">
                <h1><?php the_title();?></h1>
                <?php if(get_field('experience')):?>
                  <p><?php the_field('experience')?></p>
                <?php endif;?>

              </div>
              <div class="apply">
                <p>Be the First to Apply</p>
                <a href="<?php echo esc_url(add_query_arg( array("job" => $job, "job_type" => $job_type), site_url('/apply-now/')))?>" class="button" >Apply Now <i class="icon-right"></i> </a>
              </div>
            </div>

            <div class="company">
              <div class="about-the-company">
                <h2>About the Company</h2>
                <p>We build what we know best. With the perfect blend of innovative design and state of the art technology. We build web and mobile solutions for our clients with the client business needs at the core of our solutions.
              With our flawless process, tuned to serve our clients with the fastest and easiest way to build a great website. Our dedicated team will work hard to deliver the best product driving our clients' overall business results. Our clients are from Cairo, Silicon Valley, Europe and the GCC. </p>
              </div>
              <div class="why-join-us">
                <h3>so why join us?</h3>
                <p> We have the entrepreneurial spirit, experience, technology and mindset to turn you into a guru developer, we are a fast growing GUC alumni team with very big dreams and hopes.</p>

              </div>
            </div>

            <?php if(have_rows('job_requirements') || have_rows('good_to_have')):?>
              <div class="vacancy-details">
                <?php if(have_rows('job_requirements')):?>
                  <ul class="requirements">
                    Job Requirements:
                  <?php while(have_rows('job_requirements')): the_row();?>
                    <li><?php the_sub_field('requirement')?></li>
                  <?php endwhile;?>
                  </ul>
                <?php endif;?>

                <?php if(have_rows('good_to_have')):?>
                  <ul class="good-to-have">
                  Good to have:
                  <?php while(have_rows('good_to_have')): the_row();?>
                    <li><?php the_sub_field('point')?></li>
                  <?php endwhile;?>
                  </ul>
                <?php endif;?>
              </div>
            <?php endif;?>


            <div class="apply-container">
                <h1>Interested in this job?</h1>
                <div class="apply">
                  <p>Be the First to Apply</p>
                  <a href="<?php echo esc_url(add_query_arg( array("job" => $job, "job_type" => $job_type), site_url('/apply-now/')))?>" class="button" >Apply Now <i class="icon-right"></i> </a>
                </div>
            </div>

          </div>


				<?php endwhile; ?>
			</main>
			<?php //get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
