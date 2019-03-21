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
					<h1 class="title"><?php echo get_the_title();?></h1>
					<div class="data">
					  	<div class="technology">
					  	   <p>Description </h4>
					  	   <p class="technology-text"><?php echo get_the_content();?></p>
					  	</div>
					    <div class="services">
					    	<p>Available On </p>
				    		<div class="small-icon">
                                <?php
                                if( have_rows('technologies-icons') ):
                                    while ( have_rows('technologies-icons') ) : the_row();
                                        ?> <img src="<?php the_sub_field('technology-icon')?>">
                                <?php
                                    endwhile;
                                else :
                                endif;
                                ?>
							</div>
					    </div>
					</div>
					 <div class="grouped-buttons">
					 	<a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="button"><i class="fa fa-long-arrow-left"></i>  Back to Products</a>
<!-- 		                <a class="button">Get a Quote <i class="fa fa-long-arrow-right"></i> </a>
 -->		                <!-- <div class="arrow bounce scroll">
						  <a class="fa fa-arrow-down fa-2x" ></a>
						</div> -->
					</div>

	               <div id="container" class="scrollProd">
						<div id="scrollCircle">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
							    <defs>
							        <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
							    </defs>
							    <circle cx="150" cy="100" r="75" fill="none"/>
							    <g>
							        <use xlink:href="#circlePath" fill="none"/>
							        <text fill="#000">
							            <textPath xlink:href="#circlePath">scroll scroll scroll scroll scroll</textPath>
							        </text>
							    </g>
							</svg>
						</div>
					</div>
				</div>
				<div class="main-content__product-image">
				  	<?php if(get_field('is_desktop')==true) : ?>
						<div class="desktop-img">
							<img src="<?php the_field('product_image')?>">
							<svg class="line-image" xmlns="http://www.w3.org/2000/svg" width="123" height="330" viewBox="0 0 1	23 458">
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
<div class="remain-page hide-remainPage">
<!-- product brief  -->
<div class="Product__brief container two-parts scrollToInfo" >
	<div class="Product__brief-image">
		<svg class="briefCircle" xmlns="http://www.w3.org/2000/svg" width="450" height="450" viewBox="0 0 439 452">
		    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
		</svg>
		<svg class="briefL1" xmlns="http://www.w3.org/2000/svg" width="271" height="271" viewBox="0 0 271 271">
		    <path fill="none" fill-rule="nonzero" stroke="#ff7900" stroke-linecap="round" stroke-width="6" d="M3 3l264.047 264.047"/>
		</svg>
		<svg class="briefL11" xmlns="http://www.w3.org/2000/svg" width="271" height="271" viewBox="0 0 271 271">
		    <path fill="none" fill-rule="nonzero" stroke="#ff7900" stroke-linecap="round" stroke-width="6" d="M3 3l264.047 264.047"/>
		</svg>
		<svg class="briefL2" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 233 233">
		    <path fill="none" fill-rule="nonzero" stroke="#55bbeb" stroke-linecap="round" stroke-width="6" d="M3 3l227 227"/>
		</svg>
		<svg class="briefL21" xmlns="http://www.w3.org/2000/svg" width="200" height="160" viewBox="0 0 200 200">
		    <path fill="none" fill-rule="nonzero" stroke="#55bbeb" stroke-linecap="round" stroke-width="6" d="M3 3l227 227"/>
		</svg>
		<svg class="briefSCircle" xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 80 80">
		    <circle cx="503" cy="384" r="40" fill="#31006D" fill-rule="nonzero" transform="translate(-463 -344)"/>
		</svg>
		<img class="briefImg" src="<?php echo get_field('product_section-1_img')?>" />
		<svg class="briefZigzag1" xmlns="http://www.w3.org/2000/svg" width="140" height="41" viewBox="0 0 177 41">
		    <path fill="#EE7719" fill-rule="evenodd" d="M175.422 32.463c-8.012-7.24-13.785-15.91-18.683-25.585-1.314-2.6-4.334-2.853-6.65-1.79-12.08 5.542-20.43 16.04-30.638 24.241-4.855-5.451-9.417-11.198-14.291-16.627C101.845 9.004 94.919-.287 89.028.42 75.713 2.015 66.012 17.368 56.584 27.764 51.136 16.394 44.158-.221 31.67.002 16.585.27 10.115 20.05 1.336 29.804c-4.246 4.713 2.613 11.784 6.873 7.051 7.223-8.02 11.577-19.434 20.142-26.104 8.424-6.558 19.818 22.671 22.778 27.754 1.7 2.924 5.255 3.083 7.633 1.009 5.077-4.428 9.41-9.804 13.986-14.754 2.29-2.478 12.167-15.03 15.677-14.428 4.72.812 11.308 11.01 14.283 14.428 4.252 4.89 8.256 10.04 12.696 14.754 1.418 1.506 4.146 2.043 5.89.782 10.258-7.414 18.426-17.76 29.246-24.233 4.824 8.757 10.564 16.725 18.009 23.451 4.684 4.233 11.586-2.792 6.873-7.051"/>
		</svg>
		<svg class="briefZigzag2" xmlns="http://www.w3.org/2000/svg" width="140" height="41" viewBox="0 0 177 41">
		    <path fill="#EE7719" fill-rule="evenodd" d="M175.422 32.463c-8.012-7.24-13.785-15.91-18.683-25.585-1.314-2.6-4.334-2.853-6.65-1.79-12.08 5.542-20.43 16.04-30.638 24.241-4.855-5.451-9.417-11.198-14.291-16.627C101.845 9.004 94.919-.287 89.028.42 75.713 2.015 66.012 17.368 56.584 27.764 51.136 16.394 44.158-.221 31.67.002 16.585.27 10.115 20.05 1.336 29.804c-4.246 4.713 2.613 11.784 6.873 7.051 7.223-8.02 11.577-19.434 20.142-26.104 8.424-6.558 19.818 22.671 22.778 27.754 1.7 2.924 5.255 3.083 7.633 1.009 5.077-4.428 9.41-9.804 13.986-14.754 2.29-2.478 12.167-15.03 15.677-14.428 4.72.812 11.308 11.01 14.283 14.428 4.252 4.89 8.256 10.04 12.696 14.754 1.418 1.506 4.146 2.043 5.89.782 10.258-7.414 18.426-17.76 29.246-24.233 4.824 8.757 10.564 16.725 18.009 23.451 4.684 4.233 11.586-2.792 6.873-7.051"/>
		</svg>
	</div>
	<div class="Product__brief-content">
		<h1 class="two-parts-title"><?php echo get_field('product_section-1_title')?></h1>
		<p class="two-parts-text"><?php echo get_field('product_section-1_text')?></p>
		<div>
           	<a class="button scroll-top" ><i class="fa fa-angle-up"></i></a>
        </div>
	</div>
</div>

<!-- product background -->
<div class="Product__background container two-parts" >
	<div class="Product__background-content">
		<h1 class="two-parts-title"><?php echo get_field('product_section-2_title')?></h1>
		<div class="Product__background-image mobile">
			<img src="<?php echo get_field('product_section-2_img')['bg-img']; ?>" />
			<span class="image-title"><?php echo get_field('product_section-2_img')['bg-img-title']; ?></span>
		</div>
		<p class="two-parts-text"><?php the_field('product_section-2_text'); ?></p>
	</div>
	<div class="Product__background-image desktop">
		<img src="<?php echo get_field('product_section-2_img')['bg-img']; ?>" />
		<span class="image-title"><?php echo get_field('product_section-2_img')['bg-img-title']; ?></span>
	</div>
</div>

<!-- product concept -->
<div class="Product__concept container two-parts" >
	<h1 class="two-parts-title mobile"><?php echo get_field('product_section-3_title')?></h1>
	<div class="Product__concept-image">
			<?php if(get_field('is_desktop')==true) : ?>
					<div class="desktop-img">
						<svg class="conceptCircle" xmlns="http://www.w3.org/2000/svg" width="350" height="350" viewBox="0 0 439 452">
						    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
						</svg>
						<svg class="conceptLine-image" xmlns="http://www.w3.org/2000/svg" width="29" height="230" viewBox="0 0 29 261">
						    <path fill="#31006D" fill-rule="nonzero" d="M17 5v15.5a2.5 2.5 0 0 1-5 0V5H2.5a2.5 2.5 0 0 1 0-5h24a2.5 2.5 0 0 1 0 5H17zm-5 251v-15.5a2.5 2.5 0 0 1 5 0V256h9.5a2.5 2.5 0 0 1 0 5h-24a2.5 2.5 0 0 1 0-5H12zm0-219.5a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18zm0 34a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18zm0 34a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18zm0 34a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18zm0 34a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18zm0 34a2.5 2.5 0 0 1 5 0v18a2.5 2.5 0 0 1-5 0v-18z"/>
						</svg>
					    <svg class="conceptL1" xmlns="http://www.w3.org/2000/svg" width="61" height="48" viewBox="0 0 61 48">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M58.537 45.146L2.463 2.854 45.146L2.463 2.854"/>
						</svg>
						<svg class="conceptL11" xmlns="http://www.w3.org/2000/svg" width="61" height="48" viewBox="0 0 61 48">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M58.537 45.146L2.463 2.854"/>
						</svg>
						<svg class="conceptL2" xmlns="http://www.w3.org/2000/svg" width="61" height="48" viewBox="0 0 61 48">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M58.537 45.146L2.463 2.854"/>
						</svg>
						<svg class="conceptL21" xmlns="http://www.w3.org/2000/svg" width="61" height="48" viewBox="0 0 61 48">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M58.537 45.146L2.463 2.854"/>
						</svg>
			            <svg class="conceptZigzag-image" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
						    <path fill="#ff7900" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
						</svg>
						<svg class="conceptZigzag-image-2" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
						    <path fill="#ff7900" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
						</svg>
						<img class="concept-img" src="<?php echo get_field('product_section-3_img')?>">
					</div>
				<?php else :?>
					<div class="mobile-img">
						<svg class="conceptCircle" xmlns="http://www.w3.org/2000/svg" width="350" height="350" viewBox="0 0 439 452">
						    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
						</svg>
						<svg class="conceptLine-image" xmlns="http://www.w3.org/2000/svg" width="406" height="200" viewBox="0 0 406 256">
						    <path fill="#31006D" fill-rule="nonzero" d="M12.425 12.623l13.336 7.899a2.5 2.5 0 0 1-2.547 4.302L9.877 16.925l-4.841 8.174a2.5 2.5 0 0 1-4.302-2.548l12.23-20.65a2.5 2.5 0 0 1 4.302 2.548l-4.841 8.174zm380.65 231.254l-13.649-8.083a2.5 2.5 0 1 1 2.548-4.302l13.649 8.083 4.841-8.174a2.5 2.5 0 0 1 4.302 2.548l-12.23 20.65a2.5 2.5 0 0 1-4.302-2.548l4.841-8.174zM38.701 33.997a2.5 2.5 0 0 1 2.548-4.303l15.488 9.173a2.5 2.5 0 0 1-2.548 4.302L38.7 33.996zM69.676 52.34a2.5 2.5 0 0 1 2.548-4.302l15.488 9.173a2.5 2.5 0 1 1-2.548 4.302l-15.488-9.173zm30.975 18.346a2.5 2.5 0 1 1 2.548-4.302l15.488 9.172a2.5 2.5 0 0 1-2.548 4.302l-15.488-9.172zm30.975 18.345a2.5 2.5 0 0 1 2.548-4.302l15.488 9.172a2.5 2.5 0 0 1-2.548 4.303l-15.488-9.173zm30.975 18.345a2.5 2.5 0 0 1 2.548-4.302l15.488 9.173a2.5 2.5 0 1 1-2.548 4.302l-15.488-9.173zm30.975 18.345a2.5 2.5 0 1 1 2.548-4.302l15.488 9.173a2.5 2.5 0 0 1-2.548 4.302l-15.488-9.173zm30.975 18.346a2.5 2.5 0 0 1 2.548-4.303l15.488 9.173a2.5 2.5 0 0 1-2.548 4.302l-15.488-9.172zm30.975 18.345a2.5 2.5 0 0 1 2.548-4.302l15.488 9.172a2.5 2.5 0 1 1-2.548 4.302l-15.488-9.172zm30.975 18.345a2.5 2.5 0 1 1 2.548-4.302l15.488 9.173a2.5 2.5 0 0 1-2.548 4.302l-15.488-9.173zm30.975 18.345a2.5 2.5 0 0 1 2.548-4.302l15.488 9.173a2.5 2.5 0 0 1-2.548 4.302l-15.488-9.173zm30.975 18.345a2.5 2.5 0 0 1 2.548-4.302l15.488 9.173a2.5 2.5 0 1 1-2.548 4.302l-15.488-9.173z"/>
						</svg>
					    <svg class="conceptL1" xmlns="http://www.w3.org/2000/svg" width="180" height="98" viewBox="0 0 180 98">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M177.5 95.5l-175-93"/>
						</svg>
						<svg class="conceptL11" xmlns="http://www.w3.org/2000/svg" width="67" height="38" viewBox="0 0 67 38">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M64.5 35.5l-62-33"/>
						</svg>
						<svg class="conceptL2" xmlns="http://www.w3.org/2000/svg" width="180" height="98" viewBox="0 0 180 98">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M177.5 95.5l-175-93"/>
						</svg>
						<svg class="conceptL21" xmlns="http://www.w3.org/2000/svg" width="67" height="38" viewBox="0 0 67 38">
						    <path fill="none" fill-rule="nonzero" stroke="#003A47" stroke-linecap="round" stroke-width="5" d="M64.5 35.5l-62-33"/>
						</svg>
			            <svg class="conceptZigzag-image" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
						    <path fill="#ff7900" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
						</svg>
						<svg class="conceptZigzag-image-2" xmlns="http://www.w3.org/2000/svg" width="130" height="20" viewBox="0 0 70 16">
						    <path fill="#ff7900" fill-rule="evenodd" d="M68.418 12.316C65.293 9.57 63.042 6.28 61.131 2.61c-.512-.986-1.69-1.082-2.593-.678-4.712 2.102-7.969 6.085-11.95 9.196-1.893-2.068-3.672-4.248-5.574-6.308C39.721 3.416 37.02-.109 34.723.16c-5.193.605-8.977 6.43-12.654 10.374C19.944 6.22 17.223-.084 12.352.001 6.469.102 3.945 7.607.522 11.307c-1.657 1.789 1.018 4.471 2.68 2.676 2.817-3.043 4.515-7.373 7.855-9.904 3.286-2.488 7.73 8.601 8.884 10.53.664 1.109 2.05 1.17 2.977.382 1.98-1.68 3.67-3.72 5.455-5.597.893-.94 4.746-5.702 6.114-5.474 1.842.308 4.41 4.177 5.571 5.474 1.659 1.855 3.22 3.81 4.952 5.597.553.572 1.617.775 2.297.297 4.001-2.813 7.187-6.738 11.407-9.194 1.881 3.322 4.12 6.346 7.024 8.897 1.826 1.606 4.518-1.06 2.68-2.675"/>
						</svg>
						<img class="concept-img" src="<?php echo get_field('product_section-3_img')?>">
						    </div>
					<?php endif; ?>
	</div>
	<div class="Product__concept-content">
		<h1 class="two-parts-title desktop"><?php echo get_field('product_section-3_title')?></h1>
		<p class="two-parts-text"><?php echo get_field('product_section-3_text')?></p>
	</div>
</div>

<!-- product steps -->
<div class="product__tabs">
	<div class="tabs-content prodtabs" data-tabs-content="slide-tabs">
        <?php
	        $tabNo=1;
	        if( have_rows('product_tabs') ):
                while( have_rows('product_tabs') ): the_row();
            		if($tabNo==1){
            			?>
                	<div class="tabs-panel is-active" id="panel<?php echo $tabNo; ?>c">
	                	<?php the_sub_field('product_tabs_slider'); ?>
                	</div>
                    <?php }
		     		else{
		     			?>
		     			<div class="tabs-panel" id="panel<?php echo $tabNo; ?>c">
		                	<?php the_sub_field('product_tabs_slider'); ?>
		            	</div>
	            <?php 	}
	         	$tabNo++;
	         	endwhile;
	         	endif;
       ?>
	</div>
    <ul class="tabs container" data-tabs id="slide-tabs">
    	<?php $url = 1;
        $stepNo=1;
        if( have_rows('product_tabs') ):
   			 while ( have_rows('product_tabs') ) : the_row();
       		 if($url==1){ ?>
            <li class="tabs-title is-active">
            	<a href="#panel<?php echo $url;?>c" aria-selected="true">
	            	<?php echo("0".$stepNo.".");?>
	            	<br>
	            	<?php the_sub_field('product_tabs_titles');?>
	            </a>
	            <a class="active-tab-title Responsive" href="#panel<?php echo $url;?>c" aria-selected="true">
	            	<?php echo("0".$stepNo.".");?>
	            	<?php the_sub_field('product_tabs_titles');?>
	            </a>
            </li>
         <?php }
        else { ?>
            <li class="tabs-title">
                <a href="#panel<?php echo $url;?>c" aria-selected="true">
	            	<?php echo("0".$stepNo.".");?>
	            	<br>
	            	<?php the_sub_field('product_tabs_titles');?>
	            </a>
	            <a class="active-tab-title Responsive" href="#panel<?php echo $url;?>c" >
	            	<?php echo("0".$stepNo.".");?>
	            	<?php the_sub_field('product_tabs_titles');?>
	            </a>
            </li>
            <?php }
            $url++;
            $stepNo++;
            endwhile;
		endif;?>
    </ul>
</div>

<!-- product final -->
<div class="Product__final container two-parts" >
	<div class="Product__final-image">
			<?php if(get_field('is_desktop')==true) : ?>
					<div class="desktop-img">
						<svg class="finalCircle" xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 439 452">
						    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
						</svg>
						<svg class="finalLine-image" xmlns="http://www.w3.org/2000/svg" width="178" height="260" viewBox="0 0 178 410">
						    <path fill="#31006D" fill-rule="nonzero" d="M17.721 8.957l5.471 14.502a2.5 2.5 0 0 1-4.678 1.765l-5.47-14.503-8.89 3.353A2.5 2.5 0 0 1 2.39 9.396L24.845.926a2.5 2.5 0 0 1 1.765 4.678l-8.889 3.353zm135.434 400.117a2.5 2.5 0 0 1-1.765-4.678l22.455-8.47a2.5 2.5 0 0 1 1.765 4.678l-22.455 8.47zM24.867 42.066a2.5 2.5 0 0 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.764l-6.353-16.841zm12.706 33.683a2.5 2.5 0 1 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.679 1.764L37.573 75.75zm12.705 33.683a2.5 2.5 0 0 1 4.679-1.765l6.353 16.842a2.5 2.5 0 1 1-4.679 1.765l-6.353-16.842zm12.706 33.683a2.5 2.5 0 0 1 4.678-1.764l6.353 16.841a2.5 2.5 0 0 1-4.678 1.765l-6.353-16.842zM75.69 176.8a2.5 2.5 0 0 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.764L75.69 176.8zm12.706 33.683a2.5 2.5 0 0 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.765l-6.353-16.842zm12.706 33.683a2.5 2.5 0 1 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.765l-6.353-16.842zm12.706 33.683a2.5 2.5 0 1 1 4.678-1.764l6.353 16.841a2.5 2.5 0 1 1-4.679 1.765l-6.352-16.842zm12.705 33.684a2.5 2.5 0 0 1 4.679-1.765l6.353 16.842a2.5 2.5 0 1 1-4.679 1.764l-6.353-16.841zm12.706 33.683a2.5 2.5 0 0 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.765l-6.353-16.842zm12.706 33.683a2.5 2.5 0 0 1 4.678-1.765l6.353 16.842a2.5 2.5 0 0 1-4.678 1.765l-6.353-16.842z"/>
						</svg>
					     <svg class="finalL1" xmlns="http://www.w3.org/2000/svg" width="177" height="174" viewBox="0 0 177 174">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.617 3.196L174.5 170.586"/>
						</svg>
						<svg class="finalL11" xmlns="http://www.w3.org/2000/svg" width="83" height="80" viewBox="0 0 83 80">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.85 2.84L80.4 76.607"/>
						</svg>
						<svg class="finalL2" xmlns="http://www.w3.org/2000/svg" width="177" height="174" viewBox="0 0 177 174">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.617 3.196L174.5 170.586"/>
						</svg>
						<svg class="finalL21" xmlns="http://www.w3.org/2000/svg" width="83" height="80" viewBox="0 0 83 80">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.85 2.84L80.4 76.607"/>
						</svg>
						<svg class="finalSCircle" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 80 80">
						    <circle cx="503" cy="384" r="40" fill="#31006D" fill-rule="nonzero" transform="translate(-463 -344)"/>
						</svg>
						<img class="final-img" src="<?php the_field('product_section-5_img')?>">
					</div>
				<?php else :?>
					<div class="mobile-img">
						<svg class="finalCircle" xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 439 452">
						    <path fill="#55BBEB" fill-rule="evenodd" d="M401.662 212.987c.135-32.272 12.087-60.156 35.5-82.845.08-.094.162-.159.243-.226.453-.773.917-1.512 1.345-2.29.271-.432.34-.933.116-1.416-.467-1-.937-2.014-1.461-3.034-9.037-17.464-20.296-33.479-33.672-48.053-12.515-13.612-26.502-25.64-42.028-35.946-22.17-14.721-46.207-25.366-72.158-31.914a242.137 242.137 0 0 0-33.689-5.931c-4.814-.487-9.63-.824-14.441-1.068-10.413-.55-20.835-.197-31.22.66-.138.019-.258.019-.381.036-5.038.66-10.1 1.145-15.113 1.903-10.046 1.56-19.94 3.72-29.685 6.56a232.4 232.4 0 0 0-48.605 20.22C93.453 42.383 73.29 58.513 55.96 77.94c-14.092 15.822-25.727 33.208-34.81 52.2-5.548 11.58-10.081 23.547-13.478 35.902-2.696 9.836-4.814 19.732-6.076 29.864-.125.933-.214 1.886-.332 2.837-.57 5.583-2.61 29.057.133 53.898.185 1.442.376 2.9.578 4.332.883 6.52 2.133 12.985 3.64 19.37 3.801 16.127 9.242 31.672 16.489 46.635 9.408 19.404 21.355 37.156 35.94 53.247 12.685 13.999 26.91 26.324 42.733 36.832 19.017 12.68 39.532 22.351 61.534 28.967 9.724 2.918 19.583 5.225 29.621 6.821 3.761.595 7.52 1.207 11.32 1.568 3.918.364 7.817.933 11.738 1.108 7.247.339 14.469.675 21.722.339 4.952-.211 9.889-.293 14.833-.74a321.076 321.076 0 0 0 18.129-2.287c9.79-1.558 19.407-3.811 28.892-6.615 15.733-4.65 30.8-10.856 45.167-18.66 17.533-9.517 33.532-21.043 48.017-34.561 3.42-3.192 6.71-6.5 9.91-9.882v-166.13z"/>
						</svg>
						<svg class="finalLine-image" xmlns="http://www.w3.org/2000/svg" width="180" height="476" viewBox="0 0 256 476">
						    <path fill="#31006D" fill-rule="nonzero" d="M16.82 9.092l6.908 13.875a2.5 2.5 0 0 1-4.476 2.229l-6.908-13.875-8.504 4.234a2.5 2.5 0 0 1-2.229-4.476L23.095.382a2.5 2.5 0 0 1 2.229 4.476L16.82 9.092zm222.36 457.816l-3.313-6.655a2.5 2.5 0 1 1 4.476-2.229l3.313 6.655 8.504-4.234a2.5 2.5 0 1 1 2.229 4.476l-21.484 10.697a2.5 2.5 0 0 1-2.229-4.476l8.504-4.234zM27.275 41.309a2.5 2.5 0 0 1 4.476-2.228l8.023 16.113a2.5 2.5 0 1 1-4.476 2.228L27.275 41.31zm16.046 32.227a2.5 2.5 0 0 1 4.475-2.229L55.82 87.42a2.5 2.5 0 1 1-4.476 2.229l-8.022-16.113zm16.045 32.226a2.5 2.5 0 0 1 4.476-2.229l8.023 16.114a2.5 2.5 0 0 1-4.476 2.228l-8.023-16.113zm16.046 32.226a2.5 2.5 0 1 1 4.475-2.228l8.023 16.113a2.5 2.5 0 0 1-4.476 2.229l-8.022-16.114zm16.045 32.227a2.5 2.5 0 1 1 4.476-2.229l8.023 16.113a2.5 2.5 0 0 1-4.476 2.229l-8.023-16.113zm16.046 32.226a2.5 2.5 0 0 1 4.475-2.228l8.023 16.113a2.5 2.5 0 1 1-4.476 2.228l-8.022-16.113zm16.045 32.227a2.5 2.5 0 0 1 4.476-2.229l8.023 16.113a2.5 2.5 0 1 1-4.476 2.229l-8.023-16.113zm16.046 32.226a2.5 2.5 0 0 1 4.475-2.228l8.023 16.113a2.5 2.5 0 0 1-4.476 2.228l-8.022-16.113zm16.045 32.226a2.5 2.5 0 1 1 4.476-2.228l8.023 16.113a2.5 2.5 0 0 1-4.476 2.229l-8.023-16.114zm16.046 32.227a2.5 2.5 0 0 1 4.476-2.229l8.022 16.114a2.5 2.5 0 0 1-4.476 2.228l-8.022-16.113zm16.045 32.226a2.5 2.5 0 0 1 4.476-2.228l8.023 16.113a2.5 2.5 0 1 1-4.476 2.229l-8.023-16.114zm16.046 32.227a2.5 2.5 0 0 1 4.476-2.229l8.022 16.113a2.5 2.5 0 1 1-4.476 2.229l-8.022-16.113zm16.045 32.226a2.5 2.5 0 0 1 4.476-2.228l8.023 16.113a2.5 2.5 0 1 1-4.476 2.228l-8.023-16.113z"/>
						</svg>
					    <svg class="finalL1" xmlns="http://www.w3.org/2000/svg" width="177" height="174" viewBox="0 0 177 174">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.617 3.196L174.5 170.586"/>
						</svg>
						<svg class="finalL11" xmlns="http://www.w3.org/2000/svg" width="83" height="80" viewBox="0 0 83 80">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.85 2.84L80.4 76.607"/>
						</svg>
						<svg class="finalL2" xmlns="http://www.w3.org/2000/svg" width="177" height="174" viewBox="0 0 177 174">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.617 3.196L174.5 170.586"/>
						</svg>
						<svg class="finalL21" xmlns="http://www.w3.org/2000/svg" width="83" height="80" viewBox="0 0 83 80">
						    <path fill="none" fill-rule="nonzero" stroke="#EE7719" stroke-linecap="round" stroke-width="5" d="M2.85 2.84L80.4 76.607"/>
						</svg>
						<svg class="finalSCircle" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 80 80">
						    <circle cx="503" cy="384" r="40" fill="#31006D" fill-rule="nonzero" transform="translate(-463 -344)"/>
						</svg>
						<img class="final-img" src="<?php the_field('product_section-5_img')?>">
						    </div>
					<?php endif; ?>
	</div>
	<div class="Product__final-content">
		<h1 class="two-parts-title"><?php the_field('product_section-5_title')?></h1>
		<p class="two-parts-text"><?php the_field('product_section-5_text')?></p>
		<!-- <div class="grouped-buttons">
            <a class="button">Get a Quote <i class="fa fa-long-arrow-right"></i> </a>
        </div> -->
	</div>
</div>

<!-- footer -->
<?php
	$next_post = get_next_post();
	if (!empty( $next_post )): ?>
		<div class="product__footer container two-parts">
			<div class="product__footer-image">
				<?php echo get_the_post_thumbnail($next_post->ID,'full'); ?>
			</div>
			<div class="product__footer-content">
			 <h1 class="two-parts-title"><?php echo esc_attr( $next_post->post_title ); ?></h1>
			 <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="button">Next Product<i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
<?php endif; ?>
</div>
</div>
<?php get_footer();
