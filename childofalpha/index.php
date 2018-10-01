<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */
 
//get global variables
global $data;

//get template header
get_header(); ?>

	<section class="featured-image">

		<div class="container">

			<div class="featured-image-content sixteen columns">

				<h2>Translation<br> and Localization Experts</h2>

				<h3>More than 20 years of experience</h3>

				<p>Supporting 50+ languages, Venga will help you grow globally with software localization (L10n), website translation, global branding and video voice-over.</p>

				<a href="http://info.vengaglobal.com/website-software-translation-localization-quote">Get a Free Quote</a>

			</div> <!--end featured-image-content-->

		</div> <!--end container-->

	</section> <!--end featured-image-->

	<section class="services-home">

		<div class="container">

			<div class="services-header sixteen columns">

				<h2>Translation and Localization Services</h2>

			</div> <!--end services-header-->

			<div class="service-wrap one third column">

				<a href="services">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/translation-icon-90x90.png" alt="Translation" />
					<h4>Translation</h4>
				</a>

			</div> <!--end service-wrap-->

			<div class="service-wrap one third column">

				<a href="localization-services/software-localization-services">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/localization-icon-90x90.png" alt="Localization" />
					<h4>Localization</h4>
				</a>

			</div> <!--end service-wrap-->				

			<div class="service-wrap one third column">

				<a href="localization-services/global-creative-services">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/global-creative-icon-90x90.png" alt="Global Creative Services" />
					<h4>Global Creative Services</h4>
				</a>

			</div> <!--end service-wrap-->


		</div> <!--end container-->

	</section> <!--end services-home-->

	<section class="what-people-are-saying">

		<div class="container">

			<div class="testimonial sixteen columns">

				<h2>What People are Saying About Venga</h2>

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img//quote-left.png" alt="quotation" />
				<p>I don't know what I would do without Venga's unfailing attention to our needs.<br> We are very happy with our service from Venga.</p> 
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img//quote-right.png" alt="quotation" />

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
				  			<a href="http://info.vengaglobal.com/resources/best-practices/how-to-create-your-translation-glossary-guide">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/translation-glossary.jpg" alt="Translation Glossary" />
				  				<p>How to create your translation glossary</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://info.vengaglobal.com/download-planning-a-localization-project-dont-miss-this-insider-advice">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planning-localization.jpg" alt="Planning Your Localization" />
				  				<p>Planning a <br>Localization Project</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://info.vengaglobal.com/resources/red-paper/global-marketing-website-localization-guide">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/venga-global-marketing.jpg" alt="Global Marketing" />
				  				<p>6 Considerations for Website Localization</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://info.vengaglobal.com/resources/red-papers/localization-in-the-agile-environment">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/agile-localization.jpg" alt="Agile Localization" />
				  				<p>Localization in the <br>Agile Environment</p>
				  			</a>
				  		</li>	
				  	</ul>			    
				  </div> <!--end ebooks-->

				  <div id="blogs">

				  	<ul>
				  		<li>
				  			<a href="http://blog.vengaglobal.com/6-ways-to-save-on-the-cost-of-translation-services">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/translation-tips.jpg" alt="Translation Tips" />
				  				<p>6 Ways to Save on the Cost of Translation Services</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://blog.vengaglobal.com/global-marketing-101-how-to-localize-your-website-quickly-effectively">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/global-marketing-101.jpg" alt="Global Marketing 101" />
				  				<p>Global Marketing 101: Localize Your Website Quickly And Effectively</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://blog.vengaglobal.com/multilingual-seo-the-secret-weapon-of-global-videos">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/multilingual-seo.jpg" alt="Multilingual SEO" />
				  				<p>Multilingual SEO: The 5 Steps After Keyword Translation</p>
				  			</a>
				  		</li>
				  		<li>
				  			<a href="http://blog.vengaglobal.com/6-ways-to-reduce-the-cost-of-video-translation-services-voice-over">
				  				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reduce-costs.jpg" alt="Reduce Costs" />
				  				<p>6 Ways to Reduce the Cost of Video Translation and Voice-Over</p>
				  			</a>
				  		</li>	
				  	</ul>				  		

				  </div> <!--end blogs-->
			
				</div> <!--end tabs-->

			</div> <!--end answers-wrap-->

		</div> <!--end container-->

	</section> <!--end translation-questions-->

	
<?php
//get template footer
get_footer(); ?>