<?php
/*
Template Name: hometest
*/
get_header(); ?>

<?php

// check if the repeater field has rows of data
if( have_rows('banner') ):

 	// loop through the rows of data
    while ( have_rows('banner') ) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>">
        <h1><?php the_sub_field('title'); ?></h1>
        

    <?php endwhile;

else :

    // no rows found

endif;

?>
<?php the_field('about'); ?>

<?php echo gravity_form( 1, $display_title = false,  $ajax = true); ?>

<?php get_footer();
