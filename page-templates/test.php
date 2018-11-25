<?php
/*
Template Name: Test
*/
get_header(); ?>
<h1 class="title"><?php the_field('text'); ?></h1>
<?php if( get_field('image') ): ?>

	<img src="<?php the_field('image'); ?>" class="banner" />

<?php endif; ?>

<h1 class="services"><?php the_field('title'); ?></h1>
  


 <div class="grid-x ">
    
<?php

// check if the repeater field has rows of data
if( have_rows('serv') ):

 	// loop through the rows of data
    while ( have_rows('serv') ) : the_row(); ?>
   <div class="small-12 medium-6 large-4 cell icon">
        <img src="<?php the_sub_field('icon'); ?>" class="ico" >
        <h4 class="par"><?php the_sub_field('text'); ?></h4>
       </div>

    <?php endwhile;

else :

    // no rows found

endif;

?>
         
    </div>


   
        
<div class="form" >
    <h2 class="ftitle"><?php the_field('form_'); ?></h2>
  <div class="grid-x">
    <div class="small-12 cell">
<?php echo gravity_form( 2, $display_title = false,  $ajax = true); ?>
         </div>
</div>
   
    
<?php

// vars
$field = get_field_object('country');
$value = $field['value'];
$label = $field['choices'][ $value ];

?>
<p>Country: <span class="color-<?php echo $value; ?>"><?php echo $label; ?></span></p>

</div>
       

<?php get_footer();