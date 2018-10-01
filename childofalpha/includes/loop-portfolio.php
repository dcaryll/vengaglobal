<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * This file contains the styling for portfolio entries.
 */
 
//global variables
global $data, $wpex_counter, $portfolio_grid_class, $portfolio_grid_image_height;

//count
$wpex_counter++;

//get featured image
$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image

//set image width
($portfolio_grid_class == 'grid-2') ? $portfolio_grid_image_width = 450 : $portfolio_grid_image_width = 390;

//crop image
$featured_image = $img_url; //resize & crop the image

//get terms
$terms = get_the_terms( get_the_ID(), 'portfolio_cats' );
$terms_list = get_the_term_list( get_the_ID(), 'portfolio_cats' );

//get meta
$portfolio_entry_style = get_post_meta($post->ID, 'wpex_portfolio_entry_style', true);
$portfolio_entry_lightbox = get_post_meta($post->ID, 'wpex_portfolio_entry_lightbox', true);
$portfolio_entry_custom_url = get_post_meta($post->ID, 'wpex_portfolio_entry_custom_url', true);
$portfolio_entry_custom_url_target = get_post_meta($post->ID, 'wpex_portfolio_entry_custom_url_target', true);


//set entry url to lightbox
if($portfolio_entry_style == 'lightbox') { $portfolio_entry_url = $portfolio_entry_lightbox;
	//set entry url to custom url
	} elseif ($portfolio_entry_style == 'url') { $portfolio_entry_url = $portfolio_entry_custom_url;
	//set entry url to default permalink
	} else { $portfolio_entry_url = get_permalink($post->ID); }


//show entry only if it has a featured image
if($featured_image) {  ?>
<li class="portfolio-entry <?php echo $portfolio_grid_class; ?> <?php if($terms) { foreach ($terms as $term) { echo $term->slug .' '; } } ?>">
	<a href="<?php echo $portfolio_entry_url; ?>" title="<?php the_title(); ?>" class="portfolio-entry-img-link <?php if($portfolio_entry_style == 'lightbox') { echo 'prettyphoto-link'; } ?>" <?php if($portfolio_entry_custom_url) { echo 'target="_'.$portfolio_entry_custom_url_target.'"'; } ?>><img src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>" class="portfolio-entry-img" /></a>
	<?php if($data['enable_disable_portfolio_title'] == 'enable' || $data['enable_disable_portfolio_excerpt'] == 'enable') { ?>
    <div class="portfolio-entry-description">
        <?php
        //item title
        if($data['enable_disable_portfolio_title'] != 'disable') { ?>
        	<h2><a href="<?php echo $portfolio_entry_url; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php }
        //item excerpt
        if($data['enable_disable_portfolio_excerpt'] != 'disable') { ?>
        	<div class="portfolio-entry-excerpt">
				<?php
                !empty($post->post_excerpt) ? $excerpt = get_the_excerpt() : $excerpt = wp_trim_words(get_the_content(), $data['portfolio_entry_excerpt_length']);
                echo $excerpt; ?>
            </div><!-- .portfolio-entry-excerpt -->
        <?php } ?>
		<?php
		//show read more buttn if not disabled
		if($data['portfolio_read_more'] != 'disable') { ?>
		<a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wpex_translation('readmore'); ?> &rarr;</a>
		<?php } ?>
    </div><!-- .portfolio-entry-description -->
    <?php } ?>
</li><!-- /portfolio-entry -->
<?php } //end loop ?>