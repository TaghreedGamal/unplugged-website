<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<!-- <?php get_template_part( 'template-parts/featured-image' ); ?> -->
<div class="main-container container">
	<div class="main-grid ">
		<main class="main-content main-content__project">
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- <?php get_template_part( 'template-parts/featured-image' ); ?> -->
				<div class="main-content__project-content">
					<a href="<?php echo esc_url( home_url( '/projects' ) ); ?>"class="close-page">&times</a>
					<?php get_template_part( 'template-parts/content', '' ); ?>
					<div class="project-data">
				    	<div class="project-data-category">
				    		<p>
					    		<?php $id= get_the_ID();
									$categories = get_the_terms( $post->ID, 'projects_categories' );
									$num=0;
									foreach( $categories as $category ) {
										if($num == 0){
									    	echo  $category->name . ' :</br>';
									    	$num=$num+1;
										}
									}
								?>
								<img src="<?php the_field('project-logo'); ?>">
							</p>
				    	</div>
				    	<div class="project-data-date"><p>Year :</p>
					    	<?php $date = get_field('project_date');
					    	echo $date;?>
				    	</div>
				    	<div class="project-data-services">
					    	<p>services :</p>
					    		<div class="small-icon">
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
					    </div>
				    </div>
				     <div class="grouped-buttons">
		                <a class="button"><i class="fa fa-desktop">  </i>  Visit Site</a> 
		                <a class="button scroll" >Scroll for info.   <i class="fa fa-level-down"></i></a> 
	               	</div>
				</div>
				<div class="main-content__project-image">
					<?php if( get_field('project-img') ): ?>
						<img src="<?php the_field('project-img'); ?>" />
					<?php endif; ?>
			    </div>
			<?php endwhile; ?>
		</main>
	</div>
<!-- 	<?php get_sidebar(); ?>
 -->	</div>
</div>
<!-- Idea section -->
<div class="project__Idea container two-parts" id="pIdea">
	<div class="project__Idea-image">
		<svg class="ideaCircle" xmlns="http://www.w3.org/2000/svg" width="420" height="420" viewBox="0 0 439 452">
		    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
		</svg>
		<svg class="ideaL1" xmlns="http://www.w3.org/2000/svg" width="271" height="271" viewBox="0 0 271 271">
		    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="6" d="M3 3l264.047 264.047"/>
		</svg>
		<svg class="ideaL11" xmlns="http://www.w3.org/2000/svg" width="271" height="271" viewBox="0 0 271 271">
		    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="6" d="M3 3l264.047 264.047"/>
		</svg>
		<svg class="ideaL2" xmlns="http://www.w3.org/2000/svg" width="233" height="233" viewBox="0 0 233 233">
		    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="6" d="M3 3l227 227"/>
		</svg>
		<svg class="ideaL21" xmlns="http://www.w3.org/2000/svg" width="233" height="233" viewBox="0 0 233 233">
		    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="6" d="M3 3l227 227"/>
		</svg>
		<svg class="ideaSCircle" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
		    <circle cx="503" cy="384" r="40" fill="#31006D" fill-rule="nonzero" transform="translate(-463 -344)"/>
		</svg>
		<img class="ideaImg" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project-page/light-bulb.png">
		<svg class="ideaZigzag1" xmlns="http://www.w3.org/2000/svg" width="177" height="41" viewBox="0 0 177 41">
		    <path fill="#EE7719" fill-rule="evenodd" d="M175.422 32.463c-8.012-7.24-13.785-15.91-18.683-25.585-1.314-2.6-4.334-2.853-6.65-1.79-12.08 5.542-20.43 16.04-30.638 24.241-4.855-5.451-9.417-11.198-14.291-16.627C101.845 9.004 94.919-.287 89.028.42 75.713 2.015 66.012 17.368 56.584 27.764 51.136 16.394 44.158-.221 31.67.002 16.585.27 10.115 20.05 1.336 29.804c-4.246 4.713 2.613 11.784 6.873 7.051 7.223-8.02 11.577-19.434 20.142-26.104 8.424-6.558 19.818 22.671 22.778 27.754 1.7 2.924 5.255 3.083 7.633 1.009 5.077-4.428 9.41-9.804 13.986-14.754 2.29-2.478 12.167-15.03 15.677-14.428 4.72.812 11.308 11.01 14.283 14.428 4.252 4.89 8.256 10.04 12.696 14.754 1.418 1.506 4.146 2.043 5.89.782 10.258-7.414 18.426-17.76 29.246-24.233 4.824 8.757 10.564 16.725 18.009 23.451 4.684 4.233 11.586-2.792 6.873-7.051"/>
		</svg>
		<svg class="ideaZigzag2" xmlns="http://www.w3.org/2000/svg" width="177" height="41" viewBox="0 0 177 41">
		    <path fill="#EE7719" fill-rule="evenodd" d="M175.422 32.463c-8.012-7.24-13.785-15.91-18.683-25.585-1.314-2.6-4.334-2.853-6.65-1.79-12.08 5.542-20.43 16.04-30.638 24.241-4.855-5.451-9.417-11.198-14.291-16.627C101.845 9.004 94.919-.287 89.028.42 75.713 2.015 66.012 17.368 56.584 27.764 51.136 16.394 44.158-.221 31.67.002 16.585.27 10.115 20.05 1.336 29.804c-4.246 4.713 2.613 11.784 6.873 7.051 7.223-8.02 11.577-19.434 20.142-26.104 8.424-6.558 19.818 22.671 22.778 27.754 1.7 2.924 5.255 3.083 7.633 1.009 5.077-4.428 9.41-9.804 13.986-14.754 2.29-2.478 12.167-15.03 15.677-14.428 4.72.812 11.308 11.01 14.283 14.428 4.252 4.89 8.256 10.04 12.696 14.754 1.418 1.506 4.146 2.043 5.89.782 10.258-7.414 18.426-17.76 29.246-24.233 4.824 8.757 10.564 16.725 18.009 23.451 4.684 4.233 11.586-2.792 6.873-7.051"/>
		</svg>
	</div>
	<div class="project__Idea-content">
		<h1 class="project-title">The Idea</h1>
		<p class="project-text">What we aimed to assess is the old website, by analysing the data we received from the client then, proposing our possible solutions to the hurdles they demonstrated through a modern, user-friendly aesthetic design.</p>
		<div> 
           	<a class="button top" ><i class="fa fa-angle-up"></i></a>
        </div>
	</div>
</div>
<!-- cycles section -->

<div class="project__cycles">
	<div class="tabs-content" data-tabs-content="example-tabs">
	  <div class="tabs-panel is-active" id="panel1">
	  	<section id="slider">
		  <input type="radio" name="slider" id="s1">
		  <input type="radio" name="slider" id="s2" checked>
		  <input type="radio" name="slider" id="s3">
		  <label for="s1" id="slide1" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project-page/cycle.png);"><div class="overlayer"></div></label>
		  <label for="s2" id="slide2" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project-page/cycle.png);"><div class="overlayer"></div></label>
		  <label for="s3" id="slide3" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project-page/cycle.png);"><div class="overlayer"></div></label>
		</section>
	  </div>
	  <div class="tabs-panel" id="panel2">
	    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
	  </div>
	</div>
	<ul class="tabs container" data-tabs id="example-tabs">
	  <li class="tabs-title is-active"><a href="#panel1" data-tabs-target="panel1" aria-selected="true">01. <br>On Boarding</a></li>
	  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">02. <br>Points Redeem</a></li>
	  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">03. <br>Products & Services</a></li>
	  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">04. <br>Offers & Subscriptions</a></li>
	</ul>
</div>

<!-- final results -->
<div class="project__Final container two-parts" id="pIdea">
	<div class="project__Final-image">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/hostingv2.png">
	</div>
	<div class="project__Final-content">
		<h1 class="project-title">Final Result</h1>
		<p class="project-text"><?php echo get_field('project_finalresult_content') ?></p>
		<div class='grouped-buttons'> 
			<a class="button" href="<?php echo get_field('project_finalresult_link') ?>"  target="_blank"><i class="fa fa-desktop">  </i>Visit Site</a>
        </div>
	</div>
</div>


<!-- final testimonials -->
<div class="project__Testimonial container two-parts" id="pIdea">
	<div class="project__Testimonial-title">
		<h1 class="project-title">Final<br> Testimonial</h1>
	</div>
	<div class="project__Testimonial-content">
		<i class="fa fa-quote-left"></i>
		<p class="project-text"><?php echo get_field('project-testimonial') ?></p>
		<p class="quote-teller"><?php echo get_field('project-testimonial-teller') ?></p>
		<i class="fa fa-quote-right" aria-hidden="true"></i>
	</div>
</div>

<!-- footer -->
<?php
	$next_post = get_next_post();
	if (!empty( $next_post )): ?>
		<div class="project__footer container two-parts">
			<div class="project__footer-image">
				<?php if( get_field('project-img') ): ?>
					<img src="<?php the_field('project-img',$next_post->ID); ?>" />
				<?php endif; ?>
			</div>
			<div class="project__footer-content">
			 <h1 class="project-title"><?php echo esc_attr( $next_post->post_title ); ?></h1>
			 <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="button">Next project<i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
<?php endif; ?>
</div>
<?php get_footer();
