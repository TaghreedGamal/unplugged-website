
  <div class="latest-articles-container">
    <div class="main-content__filter-section">
      <!-- <?php wp_list_categories()?> -->
      <!-- <form class="search-bar" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
          <input type="text" name="" value="" placeholder="Search">
          <a class="search-button" href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
          </a>
        </form> -->

          <!-- <input type="submit" class="search-button" id="searchsubmit" value=""/> -->
          <!-- <div> -->
             <!-- <h3>Search Blogs</h3> -->
             <form role="search" class="search-bar" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
             <input type="text" name="s" placeholder="Search"/>
             <input type="hidden" name="post_type" value="blogs" /> <!-- // hidden 'products' value -->
             <button class="search-button"type="submit" alt="Search" value="Search">
              <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
            </button>
           </form>
          <!-- </div> -->

          <div class="filter-menu filter-menu-mobile">
  					 <ul class="accordion accordion-outer" data-accordion data-allow-all-closed="true">

  					 	<li class="accordion-item" data-accordion-item>
  					 		<a href="#" class="accordion-title">Filter By</a>
  							<div class="accordion-content content-outer" data-tab-content>
                  <ul class="accordion" data-accordion data-allow-all-closed="true">
                    <li class="accordion-item " data-accordion-item>
                      <a class="accordion-title" href="#">Years</a>
                      <div class="accordion-content" data-tab-content>
                        <ul id="filter-ul">
                      <?php
                      $taxonomyName = "year-category";
                      $terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                        foreach ( $terms as $term ) {
                          $link = add_query_arg('year-category', $term->slug);?>
                          <li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
                        <?php  }?>
                      </ul>
                      </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                      <a href="#" class="accordion-title">Departments</a>
                      <div class="accordion-content" data-tab-content>
                        <ul id='filter-ul-departments'>
                          <?php
                          $taxonomyName = "blog_departments";
                          $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                          foreach ( $parent_terms as $pterm ) {
                            $link = add_query_arg('blog_departments', $pterm->slug);
                            echo '<li><a href='. $link .' class="">' . $pterm ->name . '</a></li>';

                          }
                          ?>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
             </ul>
            </div>

      <div class="filter-menu filter-menu-desktop">
        <h3>Filter by</h3>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
          <li class="accordion-item " data-accordion-item>
            <a class="accordion-title" href="#">Years</a>
            <div class="accordion-content" data-tab-content>
              <ul id="filter-ul">
            <?php
            $taxonomyName = "year-category";
            $terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );

               foreach ( $terms as $term ) {
                $link = add_query_arg('year-category', $term->slug);?>
                <li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
              <?php  }?>
            </ul>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Departments</a>
            <div class="accordion-content" data-tab-content>
              <ul id='filter-ul-departments'>
                <?php
      					$taxonomyName = "blog_departments";
                $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                foreach ( $parent_terms as $pterm ) {
                  $link = add_query_arg('blog_departments', $pterm->slug);
                  echo '<li><a href='. $link .' class="">' . $pterm ->name . '</a></li>';

                }
                ?>
              </ul>
            </div>
          </li>
        </ul>
      </div>
        </div>
    <div class="articles-container">
      <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
       $query = array(
        'post_type' => 'blogs', 'posts_per_page' => -1, 'paged'=>$paged, 'nopaging'=>false);

    $loop = new WP_Query($query);?>
        <?php if(have_posts()) : ?>
          <?php while ( have_posts() ) :the_post(); ?>
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
                <div class="blog-post-content"><?php echo substr(strip_tags(get_field('introduction')), 0, 400) ," ...";?></div>
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

              <a class="button read-more"href="<?php the_permalink(); ?>">Read More <i class="icon-right"></i></a>
              <img class="blue-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">
              <img class="blue-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-2.svg" alt="">

              </div>
            </div>
          <?php endwhile; ?>

        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; // End have_posts() check. ?>

        <?php
        // var_dump($query);
        // wp_reset_postdata();
        // next_posts_link( 'Older Entries »', $loop->max_num_pages ); /* Display navigation to next/previous pages when applicable */ ?>

        <div class="loadmorehidden" style="display:none;">
           <?php echo get_next_posts_link( $max_pages ); ?>
         </div>
        <?php

  			if ( function_exists( 'foundationpress_pagination' ) ) :
  				foundationpress_pagination();
  			elseif (is_paged() ) :
  			?>
  				<nav id="post-nav">
  					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
  					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
  				</nav>
  			<?php endif; ?>
        </div>


  </div>
