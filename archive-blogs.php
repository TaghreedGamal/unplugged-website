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
<div class="small-typewriter-container">
  <img class="blue-semi-circle" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/semi-circle.svg" alt="">
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
    'post_type' => 'blogs');
$loop = new WP_Query($query);?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php if ( have_posts() ) : ?>

			<div class="featured-articles-slider">

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
          <p class="blog-post-content"><?php echo substr(get_field('introduction'), 0, 750) ,"..";?></p>
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

        <a class="button read-more"href="<?php the_permalink(); ?>">Read More →</a>
        <img class="blue-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">
        <img class="blue-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">

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
<div class="latest-articles-section">
  <h1 class="latest-articles-header">Latest Articles</h1>
  <div class="latest-articles-container">
    <div class="main-content__filter-section">
      <!-- <?php wp_list_categories()?> -->
      <form class="search-bar" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
          <input type="text" name="" value="<?php the_search_query(); ?>" placeholder="Search">
          <a class="search-button" href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
          </a>
          <!-- <input type="submit" class="search-button" id="searchsubmit" value=""/> -->

      </form>
      <!-- <div class="filter-menu"> -->
        <!-- <h3>Filter by</h3>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
          <li class="accordion-item" data-accordion-item>
             <a href="#" class="accordion-title">Date/Time</a>
          <div class="accordion-content" data-tab-content>
            <ul id="filter-ul">
            <?php
            $all_dates = array();
             while ( have_posts() ) : the_post();
                $date = get_the_date('M, j, Y');
                if(!in_array($date, $all_dates))
                {
                  array_push($all_dates, $date);
                  echo'<li><a href="">'.$date.'</a></li>';
                }
              endwhile;
             ?>

            </ul>
          </div>
          </li>
        </ul>
      </div> -->

      <div class="filter-menu">
        <h3>Filter by</h3>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
          <li class="accordion-item" data-accordion-item>
            <a href="#">Date & Time</a>
            <div class="accordion-content" data-tab-content>
              <ul id="filter-ul">
            <?php
            $taxonomyName = "year-category";
            $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
            // var_dump($terms)
              foreach ( $terms as $term ) {
                $link = add_query_arg('year-category', $term->slug);?>
                <li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
              <?php  }?>
            </ul>
            </div>
          </li>
        </ul>
        <!-- <?php
        $taxonomyName = "year-category";
      //This gets top layer terms only.  This is done by setting parent to 0.
        $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
        foreach ( $parent_terms as $pterm ) {
          $link = add_query_arg('year-category', $pterm->slug);
         //echo($link); //don't go to link
          echo '<li class="accordion-item" data-accordion-item><a href='. $link .' class="accordion-title">' . $pterm ->name . '</a>';
          //Get the Child terms
          $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
          echo '<div class="accordion-content" data-tab-content><ul id="filter-ul">';
          foreach ( $terms as $term ) {
            $link = add_query_arg('year-category', $term->slug);?>
            <li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
          <?php }
            // echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
          // }
          echo '</ul></div></li>';
        }
        echo '</ul>';
        ?> -->

      </div>
        </div>
    <div class="articles-container">
        <?php if(have_posts()) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="article">
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
                <p class="blog-post-content"><?php echo substr(get_field('introduction'), 0, 750) ,"..";?></p>
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

              <a class="button read-more"href="<?php the_permalink(); ?>">Read More →</a>
              <img class="blue-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">
              <img class="blue-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">

              </div>
            </div>
          <?php endwhile; ?>

        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; // End have_posts() check. ?>
          <!-- <?php load_more_button(); ?> -->
        <!-- <?php echo do_shortcode('[ajax_load_more id="articles-container" container_type="div" css_classes="articles-container" post_type="blogs" pause="true" scroll="false" button_label="Load More" button_loading_label="Loading"]') ?> -->
      </div>

  </div>
</div>
</div>


<?php get_footer();
