<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="blogs-page-container container" >
  <div class="blogs-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >
    <h1 class="blogs-header">We create to Share, <br>
Connect, & Inspire.</h1>
<div class="small-typewriter-container">
  <img class="blue-semi-circle" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/circle-1.svg" alt="">
  	<img class="small-typewriter" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/small-typewriter.png" alt="">
    <img class="zigzag-line-5" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">
    <img class="zigzag-line-6" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">

</div>
  <div class="header-images">
		<img class="typewriter" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/typewriter.png" alt="">
    <img class="blue-semi-circle-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/semi-circle-full.svg" alt="">
    <img class="dark-blue-circle" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/oval-blue.svg" alt="">
    <img class="orange-line-1" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-orange.svg" alt="">
    <img class="orange-line-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-orange.svg" alt="">

    <!-- <img class="empty-rocket" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-wireframe.png" alt=""> -->
    <!-- <img class="middle-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt=""> -->
    <!-- <img class="last-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt=""> -->
  </div>
  </div>

  <h1 class="featured-articles-title">Featured Articles</h1>
  <?php $query = array(
    'post_type' => 'blogs', 'posts_per_page' => -1);
$loop = new WP_Query($query);?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php if ( $loop->have_posts() ) : ?>

			<div class="featured-articles-slider">

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if(get_field('add_to_featured_articles')==true): ?>

				<div class="featured-articles-slide slide">
          <div class="blog-post-image">
            <div class="post-images">
              <img class="orange-circle" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/oval.svg" alt="">

              <img class="blue-line-1" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">
              <img class="blue-line-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">

              <img class="zigzag-line-1" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">
              <img class="zigzag-line-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">


              <img class="zigzag-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">
              <img class="zigzag-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">

            </div>
            <?php
            the_post_thumbnail('full');
            ?>
          </div>

          <div class="blog-post-text">
          <h2 class="blog-post-header">
            <?php the_title(); ?>
          </h2>
          <div class="author">
            <img src=" <?php the_field('author_avatar') ?>" alt="">
            <span class="author-name">By: <?php the_field('author') ?></span>
          </div>
          <div class="blog-post-content"><?php echo substr(strip_tags(get_field('introduction')), 0, 280)," ...";?></div>
            </div>
          <div class="blog-post-details">
            <div class="blog-post-date">
              <?php echo get_the_date('M, j'); ?>
              <br>
              <?php echo get_the_date('Y'); ?>

            </div>
            <div class="blog-post-time">
              <img src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/clock-icon.svg" alt="">
              <span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></span>
            </div>

          </div>
				<!-- <?php get_template_part( 'template-parts/content', get_post_format() ); ?> -->

        <a class="button read-more"href="<?php the_permalink(); ?>">Read More <i class="icon-right"></i> </a>
        <img class="blue-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">
        <img class="blue-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">

				</div>
      <?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>


			<?php /* Display navigation to next/previous pages when applicable */ ?>
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

		</main>
		<?php get_sidebar(); ?>

	</div>


</div>
<div class="latest-articles-section">
  <h1 class="latest-articles-header">Latest Articles</h1>
    <?php include 'blogs-filters.php'; ?>
    <a class="load-more button">Load More</a>

</div>
</div>


<?php get_footer();
