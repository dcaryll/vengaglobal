<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Landing Page 2
 */

//get template header
get_header();

//start post loop
if (have_posts()) : while (have_posts()) : the_post(); ?>

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
get_sidebar('landing-pages'); //get sidebar template
get_footer(); //get footer template ?>