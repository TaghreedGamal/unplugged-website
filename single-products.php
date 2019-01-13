<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="background"></div>
<div class="main-container container">
	<div class="main-grid">
		<main class=" main-content__product">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="main-content__product-content">
					<a href="<?php echo esc_url( home_url( '/products' ) ); ?>"class="close-page">&times</a>
					<h1 class="title"><?php echo get_the_title();?></h1>
					<div class="data">
					  	<div class="technology">
					  	   <p>Technologies used:</h4>
					  	   <p class="technology-text"><?php echo get_the_content();?></p>
					  	</div>
					    <div class="services">
					    	<p>services :</p>
				    		<div class="small-icon">
                                <?php
                                if( have_rows('services') ):
                                    while ( have_rows('services') ) : the_row();
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
		                <a class="button">Get a Quote <i class="fa fa-long-arrow-right"></i> </a> 
		                <a class="button scroll" >Scroll for info.   <i class="fa fa-level-down"></i></a> 
	               	</div>
				</div>
				<div class="main-content__product-image">
				  	<?php if(get_field('is_desktop')==true) : ?>
						<div class="desktop-img">
							<img src="<?php the_field('product_image')?>">
							<svg class="line-image" xmlns="http://www.w3.org/2000/svg" width="123" height="330" viewBox="0 0 123 458">
							    <path fill="#31006D" fill-rule="nonzero" d="M21.394 9.244l5.204 26.493.578 2.944-5.887 1.156-.578-2.943L15.507 10.4 4.713 12.52l-2.944.578L.613 7.211l2.944-.579 27.475-5.396 2.944-.578 1.156 5.887-2.944.578-10.794 2.12zm80.212 439.512l-5.73-29.174-.579-2.944 5.888-1.156.578 2.944 5.73 29.174 10.794-2.12 2.944-.578 1.156 5.887-2.944.579-27.475 5.396-2.944.578-1.156-5.887 2.944-.578 10.794-2.12zM26.493 66.331l-.579-2.944 5.888-1.156.578 2.944 5.782 29.437.578 2.944-5.887 1.157-.579-2.944-5.781-29.438zm11.563 58.875l-.578-2.943 5.888-1.157.578 2.944 5.782 29.438.578 2.943-5.888 1.157-.578-2.944-5.782-29.438zm11.564 58.875l-.578-2.943 5.887-1.157.579 2.944 5.782 29.438.578 2.943-5.888 1.157-.578-2.944-5.782-29.438zm11.564 58.876l-.578-2.944 5.887-1.157.578 2.944 5.782 29.438.579 2.944-5.888 1.156-.578-2.944-5.782-29.437zm11.564 58.875l-.578-2.944 5.887-1.156.578 2.943 5.782 29.438.578 2.944-5.887 1.156-.578-2.944-5.782-29.437zm11.563 58.875l-.578-2.944 5.888-1.156.578 2.943 5.782 29.438.578 2.944-5.887 1.156-.579-2.944-5.782-29.437z"/>
							</svg>
							<svg  class="circles-image" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 176 175">
							    <g fill="none" fill-rule="nonzero" stroke-width="2">
							        <circle cx="87.503" cy="88.003" r="68.002" stroke="#55BBEB"/>
							        <circle cx="88.003" cy="87.503" r="86.503" stroke="#003A47"/>
							    </g>
							</svg>
							<svg class="orange-circle-image" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 89 89">
							    <circle cx="109.5" cy="372.5" r="44.5" fill="#EE7719" fill-rule="nonzero" transform="translate(-65 -328)"/>
							</svg>
				            <svg class="zigzag-image" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
							    <path fill="#003A47" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
							</svg>
							  <svg class="zigzag-image-2" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
							    <path fill="#003A47" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
							</svg>
						</div>
						<?php else :?>
							<div class="mobile-img">
								<img src="<?php the_field('product_image')?>">
								<svg class="line-image" xmlns="http://www.w3.org/2000/svg" width="30" height="440" viewBox="0 0 19 356">
									<path fill="#31006D" fill-rule="nonzero" d="M11 3v24H8V3H0V0h19v3h-8zM8 353v-23h3v23h8v3H0v-3h8zM8 34.5V33h3v27H8V34.5zm0 33V66h3v27H8V67.5zm0 33V99h3v27H8v-25.5zm0 33V132h3v27H8v-25.5zm0 33V165h3v27H8v-25.5zm0 33V198h3v27H8v-25.5zm0 33V231h3v27H8v-25.5zm0 33V264h3v27H8v-25.5zm0 33V297h3v27H8v-25.5z"/>
								</svg>
								<svg  class="circles-image" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 176 175">
								    <g fill="none" fill-rule="nonzero" stroke-width="2">
								        <circle cx="87.503" cy="88.003" r="68.002" stroke="#55BBEB"/>
								        <circle cx="88.003" cy="87.503" r="86.503" stroke="#003A47"/>
								    </g>
								</svg>
								<svg class="orange-circle-image" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 89 89">
								    <circle cx="109.5" cy="372.5" r="44.5" fill="#EE7719" fill-rule="nonzero" transform="translate(-65 -328)"/>
								</svg>
					            <svg class="zigzag-image" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
								    <path fill="#003A47" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
								</svg>
								  <svg class="zigzag-image-2" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
								    <path fill="#003A47" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
								</svg>
						</div>
					<?php endif; ?>	
				</div>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
