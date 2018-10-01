<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Portfolio With Sidebar
 */

//get theme options
global $data;

//get template header
get_header(); ?>

<div id="wrap" class="outerbox clearfix">

    <div id="main-content" class="clearfix fitvids-container">

<?php //start post loop

//start loop
if (have_posts()) : while (have_posts()) : the_post();

//posts per page
$template_posts_per_page = get_post_meta($post->ID, 'wpex_template_posts_per_page', true);

//grid style
$portfolio_grid_style = get_post_meta($post->ID, 'wpex_grid_style', true); //get grid style meta
$portfolio_grid_class = wpex_grid($portfolio_grid_style); //set grid style

//grid image height
$portfolio_grid_image_height_meta = get_post_meta($post->ID, 'wpex_grid_image_height', true); //get img height meta
($portfolio_grid_image_height_meta) ? $portfolio_grid_image_height = 450 * str_replace('%', '', $portfolio_grid_image_height_meta) / 100 : $portfolio_grid_image_height = 450;

//get meta to set parent category
$portfolio_parent = get_post_meta($post->ID, 'wpex_portfolio_parent', true); //get parent post type
$portfolio_filter_parent = ''; //declare parent post type variable
($portfolio_parent != 'select_portfolio_cats_parent') ? $portfolio_filter_parent = $portfolio_parent : $portfolio_filter_parent = NULL;
?>

<?php 
//Breadcrumbs
if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<header id="page-heading">
	<h1><?php the_title(); ?></h1>
</header>
<!-- /page-heading -->

<div id="post">
	<?php
	//show page content if not empty
	$content = $post->post_content;
	if(!empty($content)) { ?>
		<div id="portfolio-description" class="clearfix">
			<?php the_content();?>
		</div><!-- /portfolio-description -->
	<?php } ?>

    <div id="portfolio-template" class="clearfix">
    
        <div id="portfolio-wrap" class="clearfix">
		
            <ul class="portfolio-content">
			
                <?php		
                //tax query
                if($portfolio_filter_parent) {
					$tax_query = array(
						array(
							  'taxonomy' => 'portfolio_cats',
							  'field' => 'id',
							  'terms' => $portfolio_filter_parent
							  )
						);
                }
				else {
					$tax_query = NULL;
				}
                //get post type ==> portfolio
                query_posts(
					array(
						'post_type'=>'portfolio',
						'posts_per_page' => $template_posts_per_page,
						'paged'=>$paged,
						'tax_query' => $tax_query
                	)
				);
                //start loop
                while (have_posts()) : the_post();
                    //get the portfolio loop style
                    get_template_part('includes/loop','portfolio');
                endwhile; ?>
            </ul>
        </div><!-- /portfolio-wrap -->
        <?php
		//show pagination
        pagination();
		
		//reset query to avoid conflicts
		wp_reset_query(); ?>
    </div><!-- /portfolio-template -->
</div><!-- /post -->

<?php
//end page loop
endwhile; endif; 

//get portfolio sidebar
get_sidebar('portfolio');?>

</div> <!--end wrap-->
</div> <!--end main-content-->

 <?php //get template footer
get_footer(); ?>