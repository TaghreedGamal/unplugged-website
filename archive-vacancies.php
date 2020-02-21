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
<div class="careers-page-container  vacancies-page-container">
  <div class="careers-page-container-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/background.png);" >

    <div class="careers-header-title">
      <h1>Coffee is <br> our bestfriend</h1>
      <!-- <a class="button join-team-button" href="<?php the_field('careers_link');?>">Join the Team</a> -->
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

	<div class="main-container">
		<div class="main-grid">
			<main class="main-content">
			<?php if ( have_posts() ) : ?>



			<div class="filter-menu filter-menu-desktop">
				<h3>Filter by</h3>
				<ul class="accordion" data-accordion data-allow-all-closed="true">
					<li class="accordion-item " data-accordion-item>
						<a class="accordion-title" href="#">Job Type</a>
						<div class="accordion-content" data-tab-content>
						<ul id="filter-ul-types" class="filter-items">
						<?php
						$taxonomyName = "vacancy_types";
						$terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );

						foreach ( $terms as $term ) {
							$link = add_query_arg('vacancy_types', $term->slug);?>
							<li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
						<?php  }?>
						</ul>
						</div>
					</li>
					<li class="accordion-item" data-accordion-item>
						<a href="#" class="accordion-title">Departments</a>
						<div class="accordion-content" data-tab-content>
						<ul id='filter-ul-departments' class="filter-items">
							<?php
									$taxonomyName = "vacancy_departments";
							$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
							foreach ( $parent_terms as $pterm ) {
							$link = add_query_arg('vacancy_departments', $pterm->slug);
							echo '<li><a href='. $link .' class="">' . $pterm ->name . '</a></li>';

							}
							?>
						</ul>
						</div>
					</li>
				</ul>
				<?php
				global $wp;

				$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
				// echo $current_url;
				if(strpos($current_url,"vacancy_types") ||strpos($current_url,"vacancy_departments") ):?>
				<a class='reset-filters' href='<?php echo home_url( $wp->request ); ?>'>Reset Filters</a>
				<?php endif; ?>
				</div>


				<!-- filters mobile -->

				<div class="filter-menu filter-menu-mobile">
  					 <ul class="accordion accordion-outer" data-accordion data-allow-all-closed="true" data-multi-expand="true">

  					 	<li class="accordion-item" data-accordion-item>
  					 		<a href="#" class="accordion-title">Filter By</a>
  							<div class="accordion-content content-outer" data-tab-content>

                  <ul class="accordion" data-accordion data-allow-all-closed="true">
                    <?php
                    global $wp;

                    $current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
                    // echo $current_url;
                    if(strpos($current_url,"vacancy_types") || strpos($current_url,"vacancy_departments") ):?>

                    <a class='reset-filters' href='<?php echo home_url( $wp->request ); ?>'>Reset Filters</a>

                  <?php endif; ?>
                    <li class="accordion-item " data-accordion-item>
                      <a class="accordion-title" href="#">Job Type</a>
                      <div class="accordion-content" data-tab-content>
                        <ul id="filter-ul" class="filter-items">
                      <?php
                      $taxonomyName = "vacancy_types";
                      $terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                        foreach ( $terms as $term ) {
                          $link = add_query_arg('vacancy_types', $term->slug);?>
                          <li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
                        <?php  }?>
                      </ul>
                      </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                      <a href="#" class="accordion-title">Departments</a>
                      <div class="accordion-content" data-tab-content>
                        <ul id='filter-ul-departments' class="filter-items">
                          <?php
                          $taxonomyName = "vacancy_departments";
                          $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                          foreach ( $parent_terms as $pterm ) {
                            $link = add_query_arg('vacancy_departments', $pterm->slug);
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
			

				<!--vacancies  -->

				
				<?php /* Start the Loop */ ?>
				<div class="vacancies">
				<div class="vacancies-hidden">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'template-parts/content', get_post_format() ); ?>

					
					<div class="vacancy">
						<h1><?php the_title();?></h1>
						
						<div class="vacancy-type">
							<?php $type = get_field('job_type');
								foreach( $type as $term ): ?>
								<?php echo esc_html( $term->name ); ?></h2>
							<?php endforeach; ?>
						</div>
						
						<?php if(get_field('experience')):?>
							<p class="experience"><?php the_field('experience')?></p>
						<?php endif;?>

						<div class="vacancy-content">
							<?php the_excerpt();?>
							<a class="button" href="<?php the_permalink();?>">Know More</a>
						</div>
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
				</div>
			</main>
			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer();
