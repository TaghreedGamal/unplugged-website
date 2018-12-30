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
    <h1 class="blogs-header">We create to Share,
Connect, & Inspire.</h1>
	<img class="small-typewriter" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/small-typewriter.png" alt="">
  <div class="header-images">
		<img class="typewriter" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/typewriter.png" alt="">

    <!-- <img class="empty-rocket" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-wireframe.png" alt=""> -->
    <!-- <img class="middle-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt=""> -->
    <!-- <img class="last-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt=""> -->
  </div>
  </div>


<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php if ( have_posts() ) : ?>
			<div class="featured-articles-slider">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="featured-articles-slide slide">
          <h2 class="blog-post-header">
            <?php the_title(); ?>
          </h2>
          <div class="author">
            <img src=" <?php the_field('author_avatar') ?>" alt="">
            <span class="author-name">By: <?php the_field('author') ?></span>
          </div>
          <p class="blog-post-content"><?php the_content(); ?></p>
          <div class="blog-post-details">
            <div class="blog-post-time">
            <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
            </div>
            <div class="blog-post-date">
              <?php echo get_the_date(); ?>
            </div>
          </div>
				<!-- <?php get_template_part( 'template-parts/content', get_post_format() ); ?> -->
				<?php
				the_post_thumbnail('full');
				?>
        <a class="button read-more"href="#">Read More →</a>
				</div>
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
</div>


<?php get_footer();
