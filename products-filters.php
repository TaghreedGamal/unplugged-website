
<div class="products-filters">


			<div class="main-content__filter-section">
				<!-- <?php wp_list_categories()?> -->
        <!-- <div class="search-bar">
            <input type="text" name="" value="" placeholder="Search">
            <a class="search-button" href="#">
              <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
            </a>
        </div> -->

           <!-- <h3>Search Blogs</h3> -->
           <form role="search" class="search-bar" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
           <input type="text" name="name" placeholder="Search"/>
           <input type="hidden" name="post_type" value="products" /> <!-- // hidden 'products' value -->
           <button class="search-button"type="submit" alt="Search" value="Search">
            <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/search.svg" alt="">
          </button>
         </form>
    <div class="filter-menu filter-menu-desktop">
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
				<div class="filter-menu filter-menu-mobile">
					 <ul class="accordion accordion-outer" data-accordion data-allow-all-closed="true">

					 	<li class="accordion-item" data-accordion-item>
					 		<a href="#" class="accordion-title">Filter By</a>
							<div class="accordion-content content-outer" data-tab-content>

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
					 	</li>
					 </ul>


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
              <!-- <?php get_template_part( 'template-parts/content', get_post_format() ); ?> -->
                    <a class="box__title"href="#"><?php the_title(); ?></a>
              <a class="view-details-button button"href="<?php the_permalink(); ?>">View details <i class="icon-right"></i> </a>
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
              <a class="view-details-button button"href="<?php the_permalink(); ?>">View details <i class="icon-right"></i></a>
            </div>
          <?php endif; ?>




					</div>

				</div>


			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
			</div>
</div>
