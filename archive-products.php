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
    <h1 class="products-header">We Desvise and
  Launch Digital
  Products</h1>
  <div class="header-images">
    <img class="empty-rocket" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-wireframe.png" alt="">
    <img class="middle-rocket"src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/products/rocket-toy.png" alt="">
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

					<!-- <div class="filter-icons">
						<button list-view><i class="fa fa-th-list"></i><p>Tile View</p></button>
						<button grid-view><i class="fa fa-th-large"></i><p>Grid View</p></button>
					</div> -->
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
              <!-- <svg class="zigzag-image"xmlns="http://www.w3.org/2000/svg" id="" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100px" height="49.917px" viewBox="0 0 132.333 49.917" enable-background="new 0 0 132.333 49.917" xml:space="preserve">
              <path opacity="1" fill="none" stroke="red"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.5,28.257c1.546-4.939,4.89-9.221,10.539-8.812c5.301,0.383,8.156,5.381,8.115,10.268c-0.029,3.428,3.722,5.415,6.213,2.656  c2.359-2.612,4.477-5.397,6.6-8.203c1.377-1.819,3.363-5.188,5.741-5.813c3.917-1.031,8.311,9.685,10.81,12.157  c3.173,3.137,9.031,1.197,12.118-0.889c3.239-2.185,5.581-5.397,8.196-8.295c1.246,3.692,3.012,7.096,6.285,9.621  "/>
              </svg> -->
              <img class="zigzag-image-2" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/zigzag.svg" alt="">
            </div>
            <div class="product-info-desktop box">
              <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
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
              <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
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
