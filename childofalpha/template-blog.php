<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Blog
 */

//get theme options
global $data;

//get template header
get_header();

//start page loop
if (have_posts()) : while (have_posts()) : the_post();

//posts per page
$template_posts_per_page = get_post_meta($post->ID, 'wpex_template_posts_per_page', true);

//get meta to set parent category
$blog_filter_parent = '';
$blog_parent = get_post_meta($post->ID, 'wpex_blog_parent', true);
if($blog_parent != 'select_category_parent') { $blog_filter_parent = $blog_parent; } else { $blog_filter_parent = NULL; }	
?>


	<section class="subpage-main">

		<div class="container">

			<div class="default-content eleven columns">
				<header id="page-heading">
					<h1><?php the_title(); ?></h1>
				</header><!-- /page-heading -->

				<div id="post" class="blog-template clearfix">
					<?php
					//tax query
					if($blog_filter_parent) {
						$tax_query = array(
							array(
								  'taxonomy' => 'category',
								  'field' => 'id',
								  'terms' => $blog_filter_parent,
								  )
							);
					} else { $tax_query = NULL; }
					
				    //query posts
				        query_posts(
				            array(
								'post_type'=> 'post',
								'posts_per_page' => 15,
								'paged'=>$paged,
								'tax_query' => $tax_query
				       		)
						);

					//loop
				    if (have_posts()) :
						//get entry template
						get_template_part( 'includes/loop', 'entry');            	
				    endif;
					
					//show pagination
					pagination();
					
					//reset query
					wp_reset_query(); ?>

				</div><!-- /post -->

				<?php endwhile; endif; ?>
			</div>
			
			<div class="default-sidebar five columns">
				<?php get_sidebar(blog); ?>
			</div>

		</div>
	</section>
<?php get_footer(); ?>