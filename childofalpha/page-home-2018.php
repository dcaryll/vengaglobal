<?php
/*
  Template Name: Homepage (2018)
*/

//get global variables
global $data;

//get template header
get_header(); ?>

	<section class="hero--component">
		<div class="container">
			<div class="hero--header">
				<?php the_field('hero_content'); ?>
				<!-- <h2>Your <span>Go Global</span> Partner</h2>
				<p>Venga Global is a full service globalization company.</p>
				<p>We partner with clients and provide the integrated services they need to reach new markets faster.</p> -->
			</div>
			<div class="hero--ctas">
				<?php the_field('hero_ctas'); ?>
				<!-- <ul>
					<li><a href="https://www.vengaglobal.com/services/translation-localization/">Translation &amp; Localization</a></li>
					<li><a href="https://www.vengaglobal.com/services/globalization-consulting/">Globalization Consulting</a></li>
					<li><a href="https://www.vengaglobal.com/services/global-creative-services/">Global Creative Services</a></li>
				</ul> -->
			</div>
		</div>
	</section>

	<section class="feature-cards--component">
		<div class="generic--header dark">
			<h3><?php the_field('feature_cards_header'); ?></h3>
			<!-- <h3>Our Commitment</h3> -->
		</div>
		<div class="feature-cards--list">
			<div class="feature-cards--single">
				<div class="feature-cards--single-content">
					<?php the_field('feature_card_one'); ?>
					<!-- <h4 class="fadein">Solution Oriented</h4>
					<p class="fadein">We care about our clients' business and actively seek solutions to daily challenges. Our company culture promotes engagement and we keep open lines of communication in every step of the process.</p> -->
				</div>
			</div>
			<div class="feature-cards--single">
				<div class="feature-cards--single-content">
					<?php the_field('feature_card_two'); ?>
					<!-- <h4 class="fadein">Transparent</h4>
					<p class="fadein">Knowing what is going on behind the scenes can give you confidence. We give you all the information you need. From details about your project’s linguists to on-demand operational and business reporting.</p> -->
				</div>
			</div>
			<div class="feature-cards--single">
				<div class="feature-cards--single-content">
					<?php the_field('feature_card_three'); ?>
					<!-- <h4 class="fadein">Dependable</h4>
					<p class="fadein">Reliability is a big consideration when you choose a partner. Our program approach is designed to give you certainty and a translation and localization partner you can depend on.</p> -->
				</div>
			</div>
		</div>
	</section>
	
	<section class="success-stories--component">
		<div class="container">
			<div class="generic--header">
				<h3><?php the_field('success_stories_headline'); ?></h3>
				<!-- <h3>Our Work</h3> -->
			</div>
			<div class="success-stories--layout">

				<?php  
                    $posts = get_field('customer_stories'); 
                    if ($posts) { ?>
                        <?php foreach($posts as $post) { setup_postdata($post); ?>
                            <div class="success-stories--single" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"></a>
                                <div class="success-stories--single-item-titles">
	                                <h5 class="success-stories--single-item-title"><?php the_title(); ?></h5>
	                                <p class="success-stories--single-item-subtitle"><?php the_field('subtitle'); ?></p>
	                            </div>
                            </div>
                        <?php } //End for each loop
                        wp_reset_postdata(); //Restores WP post data ?>
                    <?php } //End if ?>

				<!-- <div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div>
				<div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div>
				<div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div>
				<div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div>
				<div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div>
				<div class="success-stories--single">
					<div class="success-stories--single-item">
						<a href="" rel="bookmark" title=""></a>
						<div class="success-stories--single-item-titles">
                        	<h5 class="success-stories--single-item-title">Employee Scheduling Software</h5>
                        	<p class="success-stories--single-item-subtitle">Simplifying the Translation Process to Save Time &amp; Money</p>
                        </div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	
	<section class="customer--component">
		<div class="container">
			<div class="generic--header">
				<h3>Our Clients</h3>
			</div>
			<div class="customer--logos">
				<?php the_field('customer_logos'); ?>
				<!-- <ul>
					<li class="fadein"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avature-logo.png" alt="Avature"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/Peakon_Logo_Website.png" alt="Peakon"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/Officevibe_Logo_Website.png" alt="Officevibe"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2015/07/hire-vue.png" alt="HireVue"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/05/Deloitte_Logo_Website.png" alt="Deloitte"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/Indeed_Logo_Website.png" alt="Indeed"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/Pinterest_Logo_Website.png" alt="Pinterest"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/Slack_Logo_Website.png" alt="Slack"/></a></li>	<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/07/SurveyMonkey_Logo_Website.png" alt="Surveymonkey"/></a></li>
					<li class="fadein"><a href="#"><img src="https://www.vengaglobal.com/wp-content/uploads/2018/05/Planday_Logo_Website-1.png" alt="Planday"/></a></li>
				</ul> -->
			</div>
		</div>
	</section>
	
	<section class="testimonial--component">
		<div class="testimonial--layout">
			<div class="generic--header">
			<!-- <h3>What our<br> customers say</h3>-->				
			<h3><?php the_field('testimonial_headline'); ?></h3>
			</div>
			<div class="testimonial--wrapper">
				<?php echo do_shortcode("[testimonial_rotator id=9011]"); ?>
<!-- 				<div class="testimonial_rotator_quote">I'm so happy you've pushed us to be open-minded to changing our processes to work better and more efficiently with translations. While even the smallest change to process or systems can be unsettling in the workplace, our dedicated team at Venga has managed all the changes to help us work smarter with incredible efficiency. Thanks to that, the transition felt completely seamless and easy on our end.</div>
				<div class="testimonial_rotator_author_info cf-tr">
					<p>TalentA</p>
				</div> -->
			</div>
		</div>
	</section>
				
<?php //get template footer
get_footer("new"); ?>
