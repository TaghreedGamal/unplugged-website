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
									Written By: <br> <span><?php the_field('author') ?>
										<?php if(get_field('author_job_title')): ?>
											- <?php the_field('author_job_title'); endif;?></span>
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
						<div class="introduction">
						<?php the_field('introduction') ?>
						</div>
						<?php while(have_rows('topics')): the_row(); ?>
							<div class="topic">
								<h2 class="topic-title"><?php the_sub_field('topic_title') ?></h2>
									<div class="subtopics">
										<?php while(have_rows('subtopics')): the_row();?>


										<!-- right right_aligned_image -->

										<?php if(get_sub_field('right_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-right-aligned-image">
												<h4 class="subtopic-title"> <?php the_sub_field('subtopic_title') ?></h4>
												<div class="subtopic-content">
													<div class="subtopic-text"><?php the_sub_field('subtopic_text') ?></div>
													<div class="subtopic-image">
														<img class="right_aligned_image"src="<?php echo get_sub_field('right_aligned_image')['image']?>" alt="">
														<span class="image-title"><?php echo get_sub_field('right_aligned_image')['title'] ?></span>
													</div>
												</div>
											</div>
										<!--  right_aligned_image -->

										<!-- bottom aligned image -->
									<?php else: ?>
										<?php  if(get_sub_field('large_bottom_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-large-bottom-aligned-image">
										<h4 class="subtopic-title"><?php the_sub_field('subtopic_title') ?></h4>
										<div class="subtopic-content">
										<div class="subtopic-text"><?php the_sub_field('subtopic_text') ?></div>
											<div class="subtopic-image">
											<img class="large_bottom_aligned_image" src="<?php echo get_sub_field('large_bottom_aligned_image')['image']?>" alt="">
											<span class="image-title"><?php echo get_sub_field('large_bottom_aligned_image')['title'] ?></span>
											</div>
											</div>
										</div>
										<!-- bottom aligned image -->
										<!-- top aligned image -->
									<?php else: ?>
										<?php  if(get_sub_field('large_top_aligned_image')['image']): ?>
											<div class="subtopic subtopic-with-large-top-aligned-image">
												<h4 class="subtopic-title"> <?php the_sub_field('subtopic_title') ?></h4>
												<div class="subtopic-content">
												<div class="subtopic-image">
												<img class="large_top_aligned_image" src="<?php echo get_sub_field('large_top_aligned_image')['image']?>" alt="" >
												<span class="image-title"><?php echo get_sub_field('large_top_aligned_image')['title'] ?></span>
												</div>
												<div class="subtopic-text"><?php the_sub_field('subtopic_text') ?></div>
												</div>
											</div>

										<!-- top aligned image -->
										<!-- several images -->
									<?php else: ?>
										<?php if(get_sub_field('small_images')): ?>
												<div class="subtopic subtopic-with-several-images">
												<h4 class="subtopic-title"><?php  the_sub_field('subtopic_title') ?></h4>
												<div class="subtopic-content">
													<div class="subtopic-text"><?php  the_sub_field('subtopic_text') ?></div>
													<div class="subtopic-images">
												<?php while(have_rows('small_images')): the_row(); ?>
													<div class="subtopic-image">
													<img class="small_images small_images_aligned" alt="" src="<?php echo get_sub_field('small_image')['image'] ?>">
													<span class="image-title"><?php echo get_sub_field('small_image')['title'] ?></span>

													</div>
												<?php endwhile; ?>
													</div>
											</div>
											</div>
											<!-- several images -->
											<!--  quote-->
										<?php else: ?>
											<?php if(get_sub_field('quote')['text']): ?>
													<div class="subtopic subtopic-with-quote">
														<h4 class="subtopic-title"> <?php the_sub_field('subtopic_title') ?></h4>
														<div class="subtopic-content">
															<div class="subtopic-text"><?php the_sub_field('subtopic_text') ?></div>
															<div class="quote">
																<img class="open-quote mark"src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/blogs/open-quotation.svg" alt="">
																<h2 class="quote-text"><?php echo get_sub_field('quote')['text'] ?></h2>
																<h4 class="quote-author"><?php echo get_sub_field('quote')['author'] ?></h4>
																<img class="close-quote mark" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/blogs/close-quotation.svg" alt="">
															</div>
													</div>
											</div>
										<?php else: ?>
											<div class="subtopic">
											<h4 class="subtopic-title"><?php the_sub_field('subtopic_title') ?></h4>
											<div class="subtopic-text"><?php the_sub_field('subtopic_text') ?></div>
											</div>
											<?php endif; ?>
											<!--  quote-->
										<?php endif; ?>
										<?php endif; ?>
										<?php endif; ?>

										<?php endif; ?>

								<?php endwhile; ?>
								</div>
							</div>

						<?php endwhile; ?>
					</div>
				<div class="blog-footer">
					<h1 class="enjoyed-article">Enjoyed this article?</h1>
					<div class="share-social-media">
						Spread the love:
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
					<a href="#"class="scroll-top-button">
						<i class="icon-up-open"></i>
					</a>
				</div>
				<div class="blog-controls">

					<?php  if( get_previous_post() ): ?>
					<div class="previous-post">
						<div class="prev-next-post-title">
						<?php previous_post_link( '%link', '%title' ); ?>
							<a href="<?php  echo  get_permalink( get_adjacent_post()->ID ); ?>"class="prev-next-artcile button">
								<span>&larr;</span> Prev Article
							</a>
						</div>
						<?php
						$prevPost = get_previous_post();
						$prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
						echo "<div class='previous-post-image post-image'>";previous_post_link( '%link', $prevThumbnail);echo "</div>";
 						?>
						</div>
					<?php endif; ?>
					<?php if(get_next_post()): ?>
						<div class="next-post">

						<?php
						$nextPost = get_next_post();
						$nextThumbnail = get_the_post_thumbnail( $nextPost->ID );
						echo "<div class='next-post-image post-image'>";next_post_link( '%link', $nextThumbnail);
						echo "<img class='zigzag zigzag-1' src='";
						echo get_stylesheet_directory_uri();
						echo "/src/assets/images/blogs/fill-1.svg' alt=''>";
						echo "<img class='zigzag zigzag-2' src='";
						echo get_stylesheet_directory_uri();
						echo "/src/assets/images/blogs/fill-1.svg' alt=''>";
						echo "<img class='zigzag zigzag-3' src='";
						echo get_stylesheet_directory_uri();
						echo "/src/assets/images/blogs/fill-1.svg' alt=''>";
						echo "<img class='zigzag zigzag-4' src='";
						echo get_stylesheet_directory_uri();
						echo "/src/assets/images/blogs/fill-1.svg' alt=''>";
						echo "</div>";
 						?>
						<div class="prev-next-post-title">


						<?php next_post_link( '%link', '%title' ); ?>
						<a href="<?php echo get_permalink( get_adjacent_post( false, '', false )->ID ); ?>"class="prev-next-artcile button">
							Next Article <span>&rarr;</span>
						</a>
						</div>
							</div>
						<?php endif; ?>
				</div>


				<?php endwhile; ?>

</div>
<?php get_footer();
