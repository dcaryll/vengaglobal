<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Landing Page Full
 */

//get template header
get_header();

//start post loop
if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="wrap" class="container">

    <div id="main-content">

        <div id="page-heading">
            <h1><?php the_title(); ?></h1>  
        </div><!-- /page-heading -->

        <div class="column-left eight columns">

            <article class="entry clearfix">
                <?php the_content(); ?>
            </article><!-- /entry --> 
             
        </div><!-- column-left -->

        <div class="column-right six columns entry">
                
            <?php the_field('lp_column_right'); ?>

        </div>

    </div> <!--end wrap-->

</div> <!--end main-content-->
    
<?php
endwhile; endif; //end post loop
get_footer(); //get footer template ?>