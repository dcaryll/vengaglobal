<?php get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
         

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="success-story--wrap">
			
		<div class="success-story--header" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat #555 top left;">
			
            <div class="success-story--container">
                
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field('subtitle'); ?></h3>
		
            </div>
            
		</div>
        
		<div class="success-story--container">
                
			<div class="success-story--grid">
				
				<div class="success-story--background">
					
					<h3>The Challenge</h3>
					<?php the_field('background_stats'); ?>
					
				</div>
				
				<div class="success-story--background-description">
					<?php the_field('background_text'); ?>
					
				</div>
				
				<div class="success-story--solution">
					
					<h3>The Solution</h3>
					<?php the_field('solution_stats'); ?>
                    
				</div>
				
				<div class="success-story--solution-description">
					
					<?php the_field('solution_text'); ?>
					
				</div>
				
				<div class="success-story--result">
					
					<h3>The Result</h3>
                    <?php the_field('result_stats'); ?>
					
				</div>
				
				<div class="success-story--result-description">
					
					<?php the_field('results_text'); ?>
					
				</div>
				
				<div class="success-story--quote">
					
					<h3>What They Say</h3>
					
				</div>
				
				<div class="success-story--quote-description">
					
					<?php the_field('testimonial'); ?>

                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					
				</div>
			
			</div>
            
        </div>
            			
		<div class="success-story--related">
            
            <div class="success-story--container">
				
				<h3>More great works</h3>
                
                <? # php echo do_shortcode('[wpdreams_rpp id=0]'); # ?>
                
                <div class="success-story--related-grid">
                    
                    <?php  
                    $posts = get_field('related_posts'); 
                    if ($posts) { ?>
                        <?php foreach($posts as $post) { setup_postdata($post); ?>
                            <div class="success-story--related-grid-item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"></a>
                                <div class="success-story--related-titles">
                                	<h5 class="success-story--related-title"><?php the_title(); ?></h5>
                                	<p class="success-story--related-subtitle"><?php the_field('subtitle'); ?></p>
                                </div>
                            </div>
                        <?php } //End for each loop
                        wp_reset_postdata(); //Restores WP post data ?>
                    <?php } //End if ?>

                </div>
            </div>
			
		</div>
			
		<div class="success-story--cta">
            
            <div class="success-story--container">
				
				<h3>Let's Work Together.</h3>
				<a href="https://www.vengaglobal.com/contact-us/" class="success-story--cta-link">Get in touch</a>
            
            </div>
            
            <div class="success-story--social">
                
				<p>Share</p>
                <?php echo do_shortcode('[jpshare]'); ?>
				<!-- <ul>
					<li><a href="#"><img src="http://www.placehold.it/30x30"/></a></li>
					<li><a href="#"><img src="http://www.placehold.it/30x30"/></a></li>
					<li><a href="#"><img src="http://www.placehold.it/30x30"/></a></li>
				</ul> -->
				
			</div>
			
		</article>
			
			<?php endwhile; ?>

			<?php else: ?>
				
				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->
			
			<?php endif; ?>
			
