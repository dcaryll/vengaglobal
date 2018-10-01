<?php
/*
  Template Name: Homepage (2015)
*/

//get global variables
global $data;

//get template header
get_header(); ?>

	<section class="featured-slider">

		<?php echo do_shortcode('[rev_slider alias="clean-news-slider"]'); ?>

	</section> <!--end featured-image-->

	<section class="what-people-are-saying">

		<div class="container">

			<div class="testimonial sixteen columns">

				<h2>What People are Saying About Venga</h2>

				<?php echo do_shortcode("[testimonial_rotator id=9011]"); ?>

			</div> <!--end testimonial-->

		</div> <!--end container-->

	</section> <!--end what-people-are-saying-->

	<section class="translation-questions">

		<div class="container">

			<div class="answers-wrap sixteen columns">

				<div id="tabs">

				<h2>Find answers to your translation questions</h2>

				  <ul>
				    <li><a href="#ebooks">eBooks</a></li>
				    <li><a href="#blogs">Blogs</a></li>
				  </ul>

				  <div id="ebooks">	

				  	<ul>
				  		<li>
				  			<a href="<?php the_field('ebook_link_1'); ?>">
				  				<?php if( get_field('ebook_image_1') ): ?>
									<img src="<?php the_field('ebook_image_1'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('ebook_description_1'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('ebook_link_2'); ?>">
				  				<?php if( get_field('ebook_image_2') ): ?>
									<img src="<?php the_field('ebook_image_2'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('ebook_description_2'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('ebook_link_3'); ?>">
				  				<?php if( get_field('ebook_image_3') ): ?>
									<img src="<?php the_field('ebook_image_3'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('ebook_description_3'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('ebook_link_4'); ?>">
				  				<?php if( get_field('ebook_image_4') ): ?>
									<img src="<?php the_field('ebook_image_4'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('ebook_description_4'); ?></p>
				  			</a>
				  		</li>	
				  	</ul>			    
				  </div> <!--end ebooks-->

				  <div id="blogs">

				  	<ul>
				  		<li>
				  			<a href="<?php the_field('blog_link_1'); ?>">
				  				<?php if( get_field('blog_image_1') ): ?>
									<img src="<?php the_field('blog_image_1'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('blog_description_1'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('blog_link_2'); ?>">
				  				<?php if( get_field('blog_image_2') ): ?>
									<img src="<?php the_field('blog_image_2'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('blog_description_2'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('blog_link_3'); ?>">
				  				<?php if( get_field('blog_image_3') ): ?>
									<img src="<?php the_field('blog_image_3'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('blog_description_3'); ?></p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="<?php the_field('blog_link_4'); ?>">
				  				<?php if( get_field('blog_image_4') ): ?>
									<img src="<?php the_field('blog_image_4'); ?>" />
								<?php endif; ?>
				  				<p><?php the_field('blog_description_4'); ?></p>
				  			</a>
				  		</li>	
				  	</ul>				  		

				  </div> <!--end blogs-->
			
				</div> <!--end tabs-->

			</div> <!--end answers-wrap-->

		</div> <!--end container-->

	</section> <!--end translation-questions-->

	<section class="clients-wrap">

		<div class="container">

			<div class="client-rotator sixteen columns">

				<h2>Our Clients</h2>

				<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>

			</div> <!--end client-rotator-->

		</div> <!--end container-->

	</section> <!--end clients-wrap-->

<?php
//get template footer
get_footer(); ?>