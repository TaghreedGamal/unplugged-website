<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="careers-page-container  vacancy-page-container">
  <div class="careers-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >

    <div class="careers-header-title">
      <h1>Coffee is <br> our bestfriend</h1>
      <a class="button join-team-button" href="<?php the_field('careers_link');?>">Back to all jobs</a>
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
					<?php get_template_part( 'template-parts/content', '' ); ?>
					<?php the_post_navigation(); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
