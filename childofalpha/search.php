<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */

//get theme options
global $data;

//get tempate header
get_header();

//results found
if (have_posts()) : ?>
        
        <div id="wrap" class="outerbox clearfix">

    		<div id="main-content" class="clearfix fitvids-container">

        	<header id="page-heading">
				<h1 id="archive-title"><?php if($data['translation_search_results']) { echo $data['translation_search_results']; } else { _e('Search Results For','wpex'); } ?>: <?php the_search_query(); ?></h1>
            </header><!-- /page-heading -->
            
			<div id="post" class="clearfix">

			<?php
			//show posts using the serach loop
        	get_template_part( 'includes/loop', 'search');
			
			//paginate pages
			pagination(); ?>
        
			</div><!-- /post  -->
        
		<?php
		//no results found
        else : ?>
        
			<header id="page-heading">
				<h1 id="archive-title"><?php if($data['translation_search_results']) { echo $data['translation_search_results']; } else { _e('Search Results For','wpex'); } ?>: <?php the_search_query(); ?></h1>
        	</header><!-- /page-heading -->
            
            <div id="post" class="post clearfix">
            	<?php if($data['translation_no_search_results']) { echo $data['translation_no_search_results']; } else { _e('No results found for that query.', 'wpex'); } ?>
			</div><!-- /post  -->
            
        <?php endif; ?>

</div> <!--end wrap-->
</div> <!--end main-content-->

<?php
//get template sidebar
//get_sidebar('');

//get template footer
get_footer(); ?>