<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */

//get template header
get_header(); ?>

<div id="wrap" class="outerbox clearfix">

    <div id="main-content" class="clearfix fitvids-container">

<?php //start post loop
if (have_posts()) : while (have_posts()) : the_post(); ?>


   <?php
    //run code only on pages
   if(is_page() && !is_attachment()) {

        //show large featured images on pages
    $full_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size');
    if($full_img) { echo '<div id="page-featured-img"><img src="'. $full_img[0] .'" alt="'. get_the_title() .'" /></div>'; }

        //show sliders if selected
    global $post;
        $page_slider = get_post_meta($post->ID, 'wpex_page_slider', TRUE); //get slider meta

        if($page_slider != 'no_slider' && $page_slider != '') { ?>
   <div id="full-slider"><?php echo do_shortcode("[slider id=".$page_slider."]"); ?></div><!--/full-slider -->
   <?php }
 } ?>
 
<?php 
//Breadcrumbs
if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

    <header id="page-heading">
        <h1><?php the_title(); ?></h1>		
    </header><!-- /page-heading -->
    
    <article id="post" class="clearfix">
        <div class="entry clearfix">	
            <?php the_content(); ?>
        </div><!-- /entry -->               
		<?php
        //show comments if not disabled
        if($data['enable_disable_page_comments'] !='disable') { comments_template(); } ?>    
    </article><!-- /post -->
    
<?php
endwhile; endif; //end post loop
get_sidebar('pages'); //get sidebar template ?>

</div> <!--end wrap-->
</div> <!--end main-content-->

<?php get_footer(); //get footer template ?>