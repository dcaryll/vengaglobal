<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */
 
//get theme options
global $data;

//grid style
$highlights_grid_style = $data['home_highlights_grid']; //get grid style meta
$highlights_grid_class = wpex_grid($highlights_grid_style); //set grid style

//column number - used for clearing floats
$column_count = str_replace(' Column', '', $data['home_highlights_grid']);

//get post type ==> hp highlights
global $post;
$args = array(
	'post_type' =>'hp_highlights',
	'numberposts' => '-1'
);
$hp_highlight_posts = get_posts($args);

//start loop if highlights actually exist
if($hp_highlight_posts) { ?>        

<div id="home-highlights">
    
	<?php
	//show heading if title isn't empty
    if($data['home_highlights_title']) { ?>
    	<h2 class="heading">
        	<span>
				<?php if(!empty($data['home_highlights_title_url'])) { ?> 
                <a href="<?php echo $data['home_highlights_title_url']; ?>" title="<?php echo $data['home_highlights_title']; ?>"><span><?php echo $data['home_highlights_title']; ?></span></a>
                <?php } else { echo $data['home_highlights_title']; } ?>
			</span>
        </h2>
    <?php } ?>
    
    <div class="grid-container clearfix">
    
		<?php
		$count=0; //set counter var
        foreach($hp_highlight_posts as $post) : setup_postdata($post); //start loop
		$count++; //increase counter var with each post in loop
        
        //meta
        $hp_highlights_url = get_post_meta($post->ID, 'wpex_hp_highlights_url', TRUE);
        $hp_highlights_icon = get_post_meta($post->ID, 'wpex_hp_highlights_icon', TRUE);
		$hp_highlights_icon_color = get_post_meta($post->ID, 'wpex_hp_highlights_icon_color', TRUE);
		$hp_highlights_icon_size = get_post_meta($post->ID, 'wpex_hp_highlights_icon_size', TRUE);
        ?>
        
        <div class="hp-highlight <?php echo $highlights_grid_class; echo ' '. $post->ID; ?>">
            
            <?php
			//display icon if option not set to default
            if($hp_highlights_icon !='Select') { ?>
            	<div class="hp-highlight-icon">
                	<?php
					//show highlight icon with link
                    if(!empty($hp_highlights_url)) { ?><a href="<?php echo $hp_highlights_url; ?>" title="<?php the_title(); ?>">
                		<span class="wpex-icon-<?php echo $hp_highlights_icon; ?>" style="color: <?php echo $hp_highlights_icon_color; ?>;font-size: <?php echo $hp_highlights_icon_size; ?>;"></span>
                	</a>
                    <?php }
					//link not defined => show highlight icon without link
					else { ?>
                    	<span class="wpex-icon-<?php echo $hp_highlights_icon; ?>" style="color: <?php echo $hp_highlights_icon_color; ?>;font-size: <?php echo $hp_highlights_icon_size; ?>;"></span>
					<?php } ?>
				</div><!-- /hp-highlight-icon -->
            <?php } //highlight meta option set to "Select" ?>

			
			<?php
				//add support for using custom images to replace Font Awesome icons
				$img_url = wp_get_attachment_url(get_post_thumbnail_id(),'full'); // Get full URL to image
				if(img_url) {  ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="highlight-img"><img src="<?php echo $img_url; ?>" alt="<?php echo the_title(); ?>" /></a>
				<?php } 
			?>
			
            <h3>
				<?php
				//show the highlight title as a link
				if(!empty($hp_highlights_url)) { ?><a href="<?php echo $hp_highlights_url; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				<?php }
				//show plain title because link option is blank
				else { the_title(); } ?>
            </h3>
            <?php
			//show the post content
            the_content(); ?>
        </div>
        <!-- /hp-highlight -->
		<?php
        //clear floats
		if($count == $column_count) { echo '<div class="clear"></div>'; $count = 0; }
		//end loop
		endforeach; ?>
	 </div><!-- /grid-container -->
     
</div><!-- /home-highlights -->      	
<?php
} //no highlights found
wp_reset_postdata(); //reset postdata to avoid any conflicts ?>