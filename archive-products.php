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
    <h1 class="products-header">We Desvise and Launch Digital Products</h1>
  <div class="header-images">
    <img class="empty-rocket" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-wireframe.png" alt="">
    <img class="middle-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/middle-rocket-2.png" alt="">
    <img class="last-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt="">
  </div>
  </div>



<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<div class="main-content__filter-section">
				<!-- <?php wp_list_categories()?> -->
        <div class="search-bar">
            <input type="text" name="" value="" placeholder="Search">
            <a class="search-button" href="#">
              <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
            </a>
        </div>
				<div class="filter-menu">
					<h3>Filter by</h3>
					<?php
					$taxonomyName = "products_categories";
				//This gets top layer terms only.  This is done by setting parent to 0.
					$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
					echo '<ul class="accordion" data-accordion data-allow-all-closed="true">';
					foreach ( $parent_terms as $pterm ) {
						$link = add_query_arg('products_categories', $pterm->slug);
					// echo($link); don't go to link
						echo '<li class="accordion-item" data-accordion-item><a href='. $link .' class="accordion-title">' . $pterm ->name . '</a>';
						//Get the Child terms
						$terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
						echo '<div class="accordion-content" data-tab-content><ul id="filter-ul">';
						foreach ( $terms as $term ) {
							$link = add_query_arg('products_categories', $term->slug);?>
							<li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
						<?php }
							// echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
						// }
						echo '</ul></div></li>';
					}
					echo '</ul>';
					?>
				</div>
			</div>

			<?php /* Start the Loop */ ?>
				<div class="products-whole-section cute_scroll">
				<?php if ( have_posts() ) : ?>



			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-section">
					<div class="product-section__post__image">


            <?php if(get_field('is_desktop')==true) : ?>
            <div class="product_image_desktop">


            <?php
						the_post_thumbnail('full');
						?>
            <img class="line-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/line.svg" alt="">
            <img class="circles-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/circles.svg" alt="">
            <img class="orange-circle-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/oval.svg" alt="">
              <img class="zigzag-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/zigzag.svg" alt="">
              <img class="zigzag-image-2" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/zigzag.svg" alt="">
            </div>
            <div class="product-info-desktop box">
              <!-- <?php get_template_part( 'template-parts/content', get_post_format() ); ?> -->
                    <a class="box__title"href="#"><?php the_title(); ?></a>
              <a class="view-details-button button"href="#">View details</a>
            </div>
          <?php else : ?>
            <div class="product_image">


            <?php
						the_post_thumbnail('full');
						?>
            <img class="line-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/line.svg" alt="">
            <img class="circles-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/circles.svg" alt="">
            <img class="orange-circle-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/oval.svg" alt="">
              <img class="zigzag-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/zigzag.svg" alt="">
              <img class="zigzag-image-2" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/zigzag.svg" alt="">
            </div>
            <div class="product-info box">
              <!-- <?php get_template_part( 'template-parts/content', get_post_format() ); ?> -->
              <a class="box__title"href="#"><?php the_title(); ?></a>
              <a class="view-details-button button"href="#">View details</a>
            </div>
          <?php endif; ?>




					</div>

				</div>


			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
			</div>
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
