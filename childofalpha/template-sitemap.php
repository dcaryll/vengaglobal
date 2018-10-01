<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: Sitemap
 */
 
global $data; //get theme panel data

//get template header
get_header();

//start page loop
if (have_posts()) : while (have_posts()) : the_post();

//set default post type titles
$portfolio_name =($data['portfolio_post_type_name']) ? $data['portfolio_post_type_name'] : __('Portfolio','wpex');
$services_name = ($data['services_post_type_name']) ? $data['services_post_type_name'] : __('Services','wpex');
$staff_name = ($data['staff_post_type_name']) ? $data['staff_post_type_name'] : __('Staff','wpex');
$faqs_name = ($data['faqs_post_type_name']) ? $data['faqs_post_type_name'] : __('FAQs','wpex');
?>
    
<header id="page-heading">
	<h1><?php the_title(); ?></h1>
</header>
<!-- END page-heading -->
    
    
<div id="template-sitemap" class="clearfix">

    <?php the_content(); ?>
    
    <div id="sitemap-wrap" class="clearfix">
    


<h2 id="pages">Pages</h2>
<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '',
    'title_li' => '',
  )
);
?>
</ul>

</br>
<h2 id="posts">Posts</h2>
<ul>
<?php
// Add categories you'd like to exclude in the exclude here
$cats = get_categories('exclude=');
foreach ($cats as $cat) {
  echo "<li><h3>".$cat->cat_name."</h3>";
  echo "<ul>";
  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
  while(have_posts()) {
    the_post();
    $category = get_the_category();
    // Only display a post link once, even if it's in multiple categories
    if ($category[0]->cat_ID == $cat->cat_ID) {
      echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    }
  }
  echo "</ul>";
  echo "</li>";
}
?>
</ul>
	</div>
    <!-- /sitemap-wrap -->
  
  </div>
	<!-- /post -->
  
<?php
//reset the query just incase
wp_reset_query();

//end page loop
endwhile; endif;

//get template footer
get_footer(); ?>