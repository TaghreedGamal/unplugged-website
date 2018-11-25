<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<!-- <?php get_template_part( 'template-parts/featured-image' ); ?> -->
<div class="main-container ">
	<div class="main-grid ">
		<main class="main-content main-content__project">
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- <?php get_template_part( 'template-parts/featured-image' ); ?> -->
				<div class="main-content__project-content">
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<div class="project-data">
			    	<div class="project-data-category"><p></p>Category</div>
			    	<div class="project-data-date"><p>Year<br><?php $date = get_field('project_date');
			    	echo $date;?></p></div>
			    	<div class="project-data-services">
				    	<p>services
				    		<div class="small-icon" id="post-icons">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/basket-ecommerce.png">   
								<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/rubiks-responsive.png">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/design-mix.png">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/hostingv2.png">
							</div> 
						</p>
				    </div>
			    </div>
			     <div class="row-buttons">
	                <a class="button"><i class="fa fa-desktop">  </i>  Visit Site</a> 
	                <a class="button scroll" >Scroll for info.   <i class="fa fa-level-down"></i></a> 
               </div>
				</div>
				<div class="main-content__project-image">
				<?php	the_post_thumbnail('large'); ?>
			    </div>
				 <!-- <?php the_post_navigation(); ?>  -->
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
<!-- 	<?php get_sidebar(); ?>
 -->	</div>
</div>

<div class="container">
	<!-- Idea section -->
		<div class="project__Idea" id="pIdea">
			<div class="project__Idea-image">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/home/hostingv2.png">
			</div>
			<div class="project__Idea-content">
				<h1>The Idea</h1>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
				<div> 
	               	<a class="button top" ><i class="fa fa-angle-up"></i></a>
	            </div>
       		</div>
		</div>
		<!-- cycles section -->
		<div class="project__cycles">
			<div class="tabs-content" data-tabs-content="example-tabs">
			  <div class="tabs-panel is-active cycle-tabs" id="panel1">
			    <h1>Title 1</h1>
			    <carousel-3d>
				    <slide :index="0">
				      Slide 1 Content
				    </slide>
				    <slide :index="1">
				      Slide 2 Content
				    </slide>
  				</carousel-3d>
			   <!--  <div class="main">
				  <div class="cycle-slider">
		            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project/cycle.png">  </div> 
		          	<div><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project/cycle.png"></div>
		          	<div><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project/cycle.png">  </div>
		          	<div><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project/cycle.png">  </div>
		          	<div><img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project/cycle.png">  </div>
		          </div>
				</div> -->
			  </div>
			  <div class="tabs-panel" id="panel2">
			    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
			  </div>
			</div>
			<ul class="tabs" data-tabs id="example-tabs">
			  <li class="tabs-title is-active"><a href="#panel1" data-tabs-target="panel1" aria-selected="true">Tab 1</a></li>
			  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Tab 2</a></li>
			</ul>
		</div>
</div>
<?php get_footer();
