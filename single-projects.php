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
				    	<div class="project-data-category"><p>Category</p>
				    		<?php get_categories();?>
				    	</div>
				    	<div class="project-data-date"><p>Year</p>
					    	<?php $date = get_field('project_date');
					    	echo $date;?>
				    	</div>
				    	<div class="project-data-services">
					    	<p>services</p>
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
		<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/hostingv2.png">
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
		<p class="project-text">From the very beginning of this project we wanted to bring the website to perfection, in terms of both functionality & aesthictal appeal, yet in the end, we can say that we are pleased with the final outcome, & so is Vodafone.</p>
		<div class='grouped-buttons'> 
           <a class="button"><i class="fa fa-desktop">  </i>  Visit Site</a> 
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
		<p class="project-text">The young & enthusatic creatives from Unplugged were very professional & well thought-out. As, the way they covered every feature desired was in a rather interesting layout; highlighting how they saw out identity & put it into action.</p>
		<p class="quote-teller">- Marco Polo, CEO Vodafone</p>
		<i class="fa fa-quote-right" aria-hidden="true"></i>
	</div>
</div>

<!-- footer -->
<?php
	$next_post = get_next_post();
	if (!empty( $next_post )): ?>
		<div class="project__footer container two-parts">
			<div class="project__footer-image">
			 <?php echo get_the_post_thumbnail( $next_post->ID, 'medium-large' ); ?>
			</div>
			<div class="project__footer-content">
			 <h1 class="project-title"><?php echo esc_attr( $next_post->post_title ); ?></h1>
			 <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="button">Next project<i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
<?php endif; ?>
</div>
<?php get_footer();
