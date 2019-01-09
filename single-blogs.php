<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="single-blogs-page-container">

	<!-- <div class="main-container">
		<div class="main-grid">
			<main class="main-content"> -->
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- <?php get_template_part( 'template-parts/content', '' ); ?> -->
					<div class="single-blogs-page-header" style="background-image:url('<?php the_post_thumbnail_url('full') ?>');">
						<!-- <?php get_template_part( 'template-parts/featured-image' ); ?> -->
							<!-- <?php   the_post_thumbnail('full'); ?> -->
							<!-- <h1>jjjjjjjjj</h1> -->
					</div>
					<div class="single-blogs-blog-header">
							<div class="author-avatar">
    						<img class="author-image"src=" <?php the_field('author_avatar') ?>" alt="">
								<img class="purple-line purple-line-1" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-purple.svg" alt="">
								<img class="purple-line purple-line-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-purple.svg" alt="">
								<img class="purple-line purple-line-3" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-purple.svg" alt="">
								<img class="purple-line purple-line-4" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/line-purple.svg" alt="">
								<img class="zigzag zigzag-1" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">
								<img class="zigzag zigzag-2" src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/blogs/fill-1.svg" alt="">
							</div>
							<h1 class="blog-post-title"><?php the_title(); ?></h1>
							<div class="blog-post-info">
								<div class="author-details">
									Written By: <br> <span><?php the_field('author') ?></span>
								</div>
								<div class="share-social-media">
									Share on:
									<!-- <br> -->
									<div class="social-icons">
									<a class="icon-container facebook"href="#"> <i class="icon-facebook-squared"></i> </a>
									<a class="icon-container gplus"href="#"> <i class="icon-gplus"></i> </a>
									<a class="icon-container linkedin"href="#"> <i class="icon-linkedin-squared"></i> </a>
									<a class="icon-container pinterest"href="#"> <i class="icon-pinterest-circled"></i> </a>
									<a class="icon-container twitter"href="#"> <i class="icon-twitter"></i> </a>
									<a class="icon-container quora"href="#"> <i class="icon-quora"></i> </a>
									<a class="icon-container instagram"href="#"> <i class="icon-instagram"></i> </a>
									<a class="icon-container link"href="#"> <i class="icon-link"></i> </a>
									</div>
								</div>
							</div>
					</div>
					<div class="single-blogs-blog-content">
						<?php the_field('introduction') ?>
						<?php while(have_rows('topics')): the_row(); ?>
							<div class="topic">
								<?php the_sub_field('topic_title') ?>
									<div class="subtopics">
										<?php while(have_rows('subtopics')): the_row();?>


										<!-- right right_aligned_image -->

										<?php if(get_sub_field('right_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-right-aligned-image">


											<?php the_sub_field('subtopic_title') ?>
											<?php the_sub_field('subtopic_text') ?>
											<img class="right_aligned_image"src="<?php echo get_sub_field('right_aligned_image')['image']?>" alt="">
													<span><?php echo get_sub_field('right_aligned_image')['title'] ?></span>
											</div>
										<!--  right_aligned_image -->

										<!-- bottom aligned image -->
									<?php else: ?>
										<?php  if(get_sub_field('large_bottom_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-large-bottom-aligned-image">


											<?php the_sub_field('subtopic_title') ?>
											<?php the_sub_field('subtopic_text') ?>
											<img class="large_bottom_aligned_image" src="<?php echo get_sub_field('large_bottom_aligned_image')['image']?>" alt="">
											<span><?php echo get_sub_field('large_bottom_aligned_image')['title'] ?></span>
										</div>
										<!-- bottom aligned image -->
										<!-- top aligned image -->
									<?php else: ?>
										<?php  if(get_sub_field('large_top_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-large-top-aligned-image">
												<?php the_sub_field('subtopic_title') ?>
											<img class="large_top_aligned_image" src="<?php echo get_sub_field('large_top_aligned_image')['image']?>" alt="" >
											<span><?php echo get_sub_field('large_top_aligned_image')['title'] ?></span>
											<?php the_sub_field('subtopic_text') ?>
											</div>

										<!-- top aligned image -->
										<!-- several images -->
									<?php else: ?>
										<?php if(have_rows('small_images')): ?>
												<div class="subtopic subtopic-with-several-images">
													<?php the_sub_field('subtopic_title') ?>
													<?php the_sub_field('subtopic_text') ?>
												<?php while(have_rows('small_images')): the_row(); ?>
													<img class="small_images small_images_aligned" alt="" src="<?php echo get_sub_field('small_image')['image'] ?>">
													<span><?php echo get_sub_field('small_image')['title'] ?></span>
												<?php endwhile; ?>
											</div>
											<!-- several images -->
											<!--  quote-->
										<?php else: ?>
											<?php if(get_sub_field('quote')['text']): ?>
													<div class="subtopic subtopic-with-quote">
														<?php the_sub_field('subtopic_title') ?>
														<?php the_sub_field('subtopic_text') ?>
												<span><?php the_sub_field('quote')['text'] ?></span>
												<span><?php the_sub_field('quote')['author'] ?></span>
											</div>
										<?php else: ?>
											<?php the_sub_field('subtopic_title') ?>
											<?php the_sub_field('subtopic_text') ?>
											<?php endif; ?>
											<!--  quote-->
										<?php endif; ?>
										<?php endif; ?>
										<?php endif; ?>

										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							</div>

						<?php endwhile; ?>
					</div>


					<!-- <?php the_content(); ?> -->
					<!-- <h1>nn</h1> -->
					<!-- <?php the_post_navigation(); ?> -->
					<!-- <?php comments_template(); ?> -->
				<?php endwhile; ?>
			<!-- </main> -->
			<!-- <?php get_sidebar(); ?> -->
		<!-- </div>
	</div> -->
</div>

<?php get_footer();
