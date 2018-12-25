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

<div class="main-container container">
	<div class="main-grid">
		<main class="main-content">
			<div class="main-content__filter-section">
				<!-- <?php wp_list_categories()?> -->
				<div class="filter-menu">
					<h3>Filter by</h3>	
					<?php
					$taxonomyName = "projects_categories";
				//This gets top layer terms only.  This is done by setting parent to 0.  
					$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) ); 
					echo '<ul class="accordion" data-accordion data-allow-all-closed="true">';
					foreach ( $parent_terms as $pterm ) {
						$link = add_query_arg('projects_categories', $pterm->slug);
					// echo($link); don't go to link
						echo '<li class="accordion-item" data-accordion-item><a href='. $link .' class="accordion-title">' . $pterm ->name . '</a>';
    				//Get the Child terms
						$terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
						echo '<div class="accordion-content" data-tab-content><ul id="filter-ul">';
						foreach ( $terms as $term ) {
							$link = add_query_arg('projects_categories', $term->slug);?>
							<li><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>   
						<?php } 
       				// echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';   
    				// }
						echo '</ul></div></li>';
					}
					echo '</ul>';
					?>   

					<div class="filter-icons">
						<button list-view><i class="fa fa-th-list"></i><p>Tile View</p></button> 
						<button grid-view><i class="fa fa-th-large"></i><p>Grid View</p></button> 
					</div>
				</div>
			</div>
			<div class="main-content__project-section">
				<div class="scroll-posts cute_scroll">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="project-section__post">
								<div class="project-section__post__image">
									<?php
									the_post_thumbnail('full'); 
									?>
								</div>
								<div class="project-section__post__box box">
									<!-- <?php get_template_part( 'template-parts/content', get_post_format() );?> -->
									<h2 class="box__title"><?php the_title();?></h2>  
									<div class="box__text"><?php the_excerpt(); ?></div> </br>
									<div class="small-icon" id="post-icons">
	                                    <?php
	                                    if( have_rows('project_services') ):
	                                        while ( have_rows('project_services') ) : the_row();
	                                            ?> <img src="<?php the_sub_field('project_service_img')?>">
	                                    <?php
	                                        endwhile;
	                                    else :
	                                    endif;
	                                    ?>
									</div>       
									<div class="grouped-buttons">
										<a href="<?php echo(get_post_permalink())?>" class="button">View Project   <i class="fa fa-long-arrow-right"></i></a> 
									</div> 
								</div>
							</div>
						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
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

				</div>
			</main>
			<?php get_sidebar(); ?>


		</div>
	</div>

	<?php get_footer();
