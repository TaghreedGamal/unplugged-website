<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container container">
	<div class="main-grid ">
		<main class="main-content main-content__project">
			<?php while ( have_posts() ) : the_post(); ?>
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
	                                if( have_rows('services-icons') ):
	                                    while ( have_rows('services-icons') ) : the_row();
	                                        ?> <img src="<?php the_sub_field('services-icons-img')?>">
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
  </div>
</div>
<!-- Idea section -->
<div class="project__Idea container two-parts scrollToInfo" ">
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
		<h1 class="two-parts-title">The Idea</h1>
		<p class="two-parts-text">What we aimed to assess is the old website, by analysing the data we received from the client then, proposing our possible solutions to the hurdles they demonstrated through a modern, user-friendly aesthetic design.</p>
		<div> 
           	<a class="button scroll-top" ><i class="fa fa-angle-up"></i></a>
        </div>
	</div>
</div>
<!-- cycles section -->

<div class="project__tabs">
	<div class="tabs-content projtabs" data-tabs-content="slide-tabs">
        <?php 
	        $tabNo=1;
	        if( have_rows('project-steps-title') ): 
                while( have_rows('project-steps-title') ): the_row(); 
            		if($tabNo==1){ 
            			?>
                	<div class="tabs-panel is-active" id="panel<?php echo $tabNo; ?>c">
	                	<?php the_sub_field('proj-step-slider'); ?>
                	</div>
                    <?php }
		     		else{
		     			?>
		     			<div class="tabs-panel" id="panel<?php echo $tabNo; ?>c">
		                	<?php the_sub_field('proj-step-slider'); ?>
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
        if( have_rows('project-steps-title') ):
   			 while ( have_rows('project-steps-title') ) : the_row();
       		 if($url==1){ ?>
            <li class="tabs-title is-active">
            	<a href="#panel<?php echo $url;?>c" aria-selected="true">
	            	<?php echo("0".$stepNo.".");?>
	            	<br>
	            	<?php the_sub_field('proj-step-title');?>
	            </a>
            </li>
         <?php }
        else { ?>        
            <li class="tabs-title">
                <a href="#panel<?php echo $url;?>c" aria-selected="true">
	            	<?php echo("0".$stepNo.".");?>
	            	<br>
	            	<?php the_sub_field('proj-step-title');?>
	            </a>
            </li>
            <?php }
            $url++;
            $stepNo++;
            endwhile;
		endif;?>
    </ul> 
</div>

<!-- final results -->
<div class="project__Final container two-parts">
	<div class="project__Final-image">
		<svg class="finalCircle" xmlns="http://www.w3.org/2000/svg" width="358" height="368" viewBox="0 0 358 368">
		    <path fill="#55BBEB" fill-rule="evenodd" d="M327.551 173.405c.11-26.274 9.857-48.976 28.95-67.449.066-.076.132-.129.198-.184.37-.629.748-1.23 1.097-1.864.221-.352.277-.76.095-1.153-.381-.815-.765-1.64-1.192-2.47-7.37-14.219-16.55-27.257-27.459-39.123-10.206-11.082-21.612-20.875-34.273-29.266-18.08-11.985-37.682-20.652-58.844-25.983a197.753 197.753 0 0 0-27.473-4.829c-3.926-.396-7.854-.67-11.777-.87-8.491-.447-16.99-.16-25.46.538-.112.016-.21.016-.31.03-4.109.537-8.237.932-12.325 1.549-8.192 1.27-16.26 3.029-24.207 5.34a189.692 189.692 0 0 0-39.638 16.463C76.21 34.507 59.767 47.639 45.636 63.456c-11.492 12.882-20.98 27.037-28.388 42.5-4.524 9.427-8.22 19.17-10.99 29.23-2.2 8.007-3.926 16.064-4.955 24.313-.103.76-.175 1.536-.271 2.31-.466 4.545-2.128 23.658.108 43.881.15 1.175.307 2.361.472 3.528.72 5.307 1.739 10.572 2.968 15.77 3.1 13.13 7.537 25.786 13.446 37.968 7.673 15.798 17.416 30.251 29.309 43.352 10.344 11.397 21.945 21.432 34.849 29.987 15.508 10.324 32.237 18.198 50.18 23.583 7.93 2.377 15.97 4.255 24.155 5.554 3.068.485 6.133.983 9.232 1.276 3.195.297 6.375.76 9.572.903 5.91.276 11.799.55 17.714.276 4.038-.172 8.064-.239 12.096-.602a262.24 262.24 0 0 0 14.784-1.863c7.983-1.268 15.827-3.103 23.562-5.385 12.83-3.786 25.116-8.84 36.832-15.192a189.995 189.995 0 0 0 39.158-28.139c2.788-2.599 5.472-5.292 8.082-8.045V173.405z"/>
		</svg>
		<svg class="purplepath" xmlns="http://www.w3.org/2000/svg" width="368" height="244" viewBox="0 0 368 244">
		    <g fill="#31006D" fill-rule="evenodd">
		        <path d="M4.484 240.427c1.008 1.818 3.02 2.93 5.083 2.618 2.639-.389 4.368-2.914 3.866-5.639a181.444 181.444 0 0 1-2.776-23.916c-.135-2.762-2.411-4.982-5.083-4.976-2.678.023-4.733 2.255-4.6 5.014a195.474 195.474 0 0 0 2.934 25.279c.105.583.304 1.129.576 1.62M3.57 193.045c.784 1.416 2.179 2.458 3.848 2.68 2.71.37 5.119-1.594 5.347-4.369a182.457 182.457 0 0 1 3.666-23.954c.608-2.708-1.059-5.505-3.727-6.245-2.665-.741-5.307.85-5.918 3.559a192.325 192.325 0 0 0-3.867 25.303 5.3 5.3 0 0 0 .65 3.026M14.974 145.538a4.91 4.91 0 0 0 2.484 2.186 4.989 4.989 0 0 0 6.463-2.768 175.204 175.204 0 0 1 10.41-21.454 4.928 4.928 0 0 0-1.85-6.752 4.975 4.975 0 0 0-6.766 1.872 185.305 185.305 0 0 0-11.002 22.67 4.917 4.917 0 0 0 .261 4.246M37.81 103.516a4.26 4.26 0 0 0 1.267 1.415c2.127 1.511 5.278.996 7.047-1.153a190.811 190.811 0 0 1 16.599-17.761c2.036-1.916 2.18-4.93.315-6.725-1.866-1.795-5.022-1.691-7.064.227a202.7 202.7 0 0 0-17.55 18.773c-1.313 1.601-1.486 3.652-.615 5.224M74.163 67.324c.111.2.237.403.38.59 1.672 2.282 4.774 2.821 6.908 1.201a163.415 163.415 0 0 1 19.564-12.749l.302-.167c2.35-1.302 3.131-4.37 1.754-6.854-1.373-2.478-4.391-3.446-6.742-2.143l-.27.15a172.77 172.77 0 0 0-20.687 13.483c-1.968 1.494-2.438 4.271-1.209 6.489M115.6 45.11c1.188 2.143 3.798 3.142 6.145 2.231a175.163 175.163 0 0 1 22.825-7.062c2.678-.622 4.328-3.308 3.695-5.982a4.984 4.984 0 0 0-5.986-3.713 184.361 184.361 0 0 0-24.133 7.464 4.972 4.972 0 0 0-2.546 7.061M163.58 32.915c.873 1.574 2.657 2.547 4.622 2.33a174.249 174.249 0 0 1 23.125-.965c2.653.069 4.933-1.984 5.092-4.583.162-2.609-1.862-4.77-4.518-4.838-8.118-.209-16.342.133-24.44 1.017-2.65.29-4.635 2.62-4.43 5.215.052.661.246 1.278.55 1.824M263.633 54.766a177.103 177.103 0 0 1 16.892 10.242c2.269 1.55 5.284.974 6.744-1.29 1.466-2.26.814-5.348-1.448-6.901a189.75 189.75 0 0 0-17.145-10.446c-1.51-.813-6.25 7.752-5.043 8.395M358.074 181.998c1 1.805 3.011 2.908 5.082 2.598 2.631-.39 4.368-2.914 3.878-5.632a194.854 194.854 0 0 0-6.163-24.712c-.846-2.642-3.593-4.163-6.138-3.4-2.54.753-3.915 3.515-3.07 6.156a182.803 182.803 0 0 1 5.834 23.375 5.32 5.32 0 0 0 .577 1.615M299.91 77.038c.262.473.598.914 1.011 1.298a181.123 181.123 0 0 1 16.039 16.946c1.721 2.066 4.627 2.4 6.5.74 1.872-1.656 1.999-4.674.281-6.74a192.357 192.357 0 0 0-16.95-17.913c-1.958-1.821-4.859-1.736-6.479.19-1.274 1.518-1.375 3.724-.403 5.479M343.157 135.946c1.237 2.231 4.137 3.082 6.659 1.89 2.63-1.244 3.848-4.249 2.711-6.703a172.022 172.022 0 0 0-12.017-21.766c-1.481-2.273-4.665-2.84-7.114-1.277-2.456 1.561-3.255 4.677-1.775 6.936A164.437 164.437 0 0 1 343 135.641c.051.104.1.205.156.305"/>
		        <path d="M262.664 22.86c7.08 12.773 2.45 28.922-10.318 36-12.768 7.078-28.917 2.445-35.997-10.327-7.075-12.765-2.444-28.91 10.324-35.988 12.769-7.078 28.915-2.45 35.99 10.316m-54.205 30.047c9.491 17.123 31.141 23.334 48.262 13.844 17.12-9.49 23.327-31.143 13.836-48.266-9.489-17.117-31.137-23.322-48.258-13.832-17.12 9.49-23.329 31.136-13.84 48.254"/>
		    </g>
		</svg>
		<svg class="orangepath" xmlns="http://www.w3.org/2000/svg" width="240" height="149" viewBox="0 0 240 149">
		    <g fill="#EE7719" fill-rule="evenodd">
		        <path d="M97.636 10.39c.247 2.347-1.135 4.603-3.408 5.335-7.511 2.38-14.8 5.54-21.693 9.386-2.38 1.33-5.374.427-6.683-2.022-1.308-2.456-.442-5.517 1.942-6.854a127.961 127.961 0 0 1 23.48-10.163c2.592-.812 5.343.674 6.166 3.338.1.326.162.655.196.98M10.386 118.714c.033.316.038.64.004.968a123.374 123.374 0 0 0 .21 23.643l.023.221a4.967 4.967 0 0 1-4.414 5.463 4.96 4.96 0 0 1-5.448-4.426l-.023-.222a133.14 133.14 0 0 1-.226-25.567 4.967 4.967 0 0 1 5.383-4.507 4.966 4.966 0 0 1 4.49 4.427M194.25 18.945a4.833 4.833 0 0 1-.552 2.807c-1.273 2.403-4.269 3.32-6.686 2.064a121.622 121.622 0 0 0-22.019-8.891 4.917 4.917 0 0 1-3.335-6.117c.782-2.596 3.54-4.084 6.166-3.319a130.854 130.854 0 0 1 23.81 9.62 4.885 4.885 0 0 1 2.616 3.836M147.303 4.837c.032.31.036.622.005.94-.254 2.642-2.68 4.595-5.41 4.362a126.528 126.528 0 0 0-23.817.26l-.291.03c-2.722.286-5.164-1.61-5.442-4.249-.276-2.625 1.719-4.995 4.44-5.28l.291-.031A136.89 136.89 0 0 1 142.831.59c2.393.2 4.238 2.022 4.472 4.247M54.643 33.909a4.902 4.902 0 0 1-1.72 4.28 120.277 120.277 0 0 0-16.395 16.787 4.858 4.858 0 0 1-6.86.733 4.917 4.917 0 0 1-.744-6.896 130.35 130.35 0 0 1 17.734-18.154 4.86 4.86 0 0 1 6.87.62 4.899 4.899 0 0 1 1.115 2.63M23.505 71.564a4.932 4.932 0 0 1-.536 2.812 121.273 121.273 0 0 0-8.86 22.033 4.919 4.919 0 0 1-6.117 3.346c-2.605-.774-4.098-3.532-3.331-6.152a130.973 130.973 0 0 1 9.586-23.836 4.909 4.909 0 0 1 6.646-2.083 4.974 4.974 0 0 1 2.612 3.88M204.46 45.012c.772 7.35 7.316 12.71 14.589 11.945 7.273-.765 12.561-7.367 11.789-14.718-.773-7.351-7.318-12.71-14.591-11.945-7.273.764-12.56 7.366-11.788 14.718m35.214-3.701c1.29 12.276-7.54 23.303-19.685 24.58-12.145 1.276-23.074-7.674-24.365-19.95-1.29-12.278 7.54-23.305 19.685-24.581 12.144-1.277 23.075 7.673 24.365 19.95"/>
		    </g>
		</svg>
		<img class="finalImg" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/project-page/old-megaphone.png">
		<svg class="circleLine1" xmlns="http://www.w3.org/2000/svg" width="147" height="55" viewBox="0 0 147 55">
		    <path fill="none" fill-rule="nonzero" stroke="#55BBEB" stroke-linecap="round" stroke-width="6" d="M3.444 3.426L143.5 51.061"/>
		</svg>
		<svg class="smallCircle" xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55">
		    <circle cx="510.375" cy="377.146" r="27" fill="#EE7719" fill-rule="nonzero" transform="rotate(-26 -489.134 1248.197)"/>
		</svg>
		<svg class="circleLine2" xmlns="http://www.w3.org/2000/svg" width="147" height="55" viewBox="0 0 147 55">
		    <path fill="none" fill-rule="nonzero" stroke="#55BBEB" stroke-linecap="round" stroke-width="6" d="M3.444 3.426L143.5 51.061"/>
		</svg>

	</div>
	<div class="project__Final-content">
		<h1 class="two-parts-title">Final Result</h1>
		<p class="two-parts-text"><?php echo get_field('project_finalresult_content') ?></p>
		<div class='grouped-buttons'> 
			<a class="button" href="<?php echo get_field('project_finalresult_link') ?>"  target="_blank"><i class="fa fa-desktop">  </i>Visit Site</a>
        </div>
	</div>
</div>


<!-- final testimonials -->
<div class="project__Testimonial container two-parts" id="pIdea">
	<div class="project__Testimonial-title">
		<h1 class="two-parts-title">Final<br> Testimonial</h1>
	</div>
	<div class="project__Testimonial-content">
		<i class="fa fa-quote-left"></i>
		<p class="two-parts-text"><?php echo get_field('project-testimonial') ?></p>
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
			   <img src="<?php the_field('project-img',$next_post->ID); ?>" />
			</div>
			<div class="project__footer-content">
			 <h1 class="two-parts-title"><?php echo esc_attr( $next_post->post_title ); ?></h1>
			 <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="button">Next project<i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
<?php endif; ?>
</div>
<?php get_footer();
