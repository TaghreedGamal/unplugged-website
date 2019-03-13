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

<div class="products-page-container container" >
  <div class="products-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >

    <h1 class="products-header">We Devise and <br>
  Launch Digital
  Products</h1>
  <div class="header-images">
    <img class="empty-rocket" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-wireframe.png" alt="">
    <img class="middle-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/middle-rocket-2.png" alt="">
    <img class="last-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt="">
  </div>
  </div>



<div class="main-container">
	<div class="main-grid">
		<main class="main-content">


<?php include 'products-filters.php'; ?>

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
