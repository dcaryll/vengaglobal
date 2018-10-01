<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Full-Width
 */

//get template header
get_header();

//start page loop
if (have_posts()) : while (have_posts()) : the_post();

//get slider meta
$page_slider = get_post_meta($post->ID, 'wpex_page_slider', true);

//show page slider if enabled
if ($page_slider == 'enable') {
	//get page slider template
	get_template_part( 'includes/page-slides');
}
?>


<div id="wrap" class="outerbox clearfix">

    <div id="main-content" class="clearfix fitvids-container">

		<div id="page-heading">
		    <h1><?php the_title(); ?></h1>	
		</div><!-- /page-heading -->

		<div id="full-width" class="clearfix">

			<article class="entry clearfix">
				<?php the_content(); ?>
			</article><!-- /entry --> 
		    
			<?php
			//show comments if not disabled
			if($data['enable_disable_page_comments'] !='disable') { comments_template(); } ?>
		     
		</div><!-- /full-width -->

	</div> <!--end wrap-->

</div> <!--end main-content-->

<?php
//end post loop
endwhile; endif;

//get template footer
get_footer(); ?>