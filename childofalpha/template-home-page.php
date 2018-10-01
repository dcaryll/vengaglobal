<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 * Template Name: (V2) Home Page
 */

//get template header
get_header(); ?>

















<header><!-- HEADER BANNER -->
  <div class="home-banner" style="background-image: url('<?php the_field('background_image'); ?>')">
    <span class="overlay" style="background-color: rgba(255,255,255,0.<?php the_field('banner_overlay'); ?>)"></span>
    <div class="home-banner-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1><?php the_field('main_heading_banner'); ?></h1>
            <h2><?php the_field('sub_heading'); ?></h2>
            <p><?php the_field('text_area'); ?></p>
            <?php the_field('banner_cta'); ?>
          </div>
          <div class="col-lg-4">
            <div class="home-ebook-image">
              <img src="<?php the_field('banner_ebook'); ?>" alt="">
            </div>
          </div>
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->
    </div><!-- END HOME BANNER CONTENT -->
  </div><!-- END HOME BANNER -->
</header><!-- END HEADER BANNER -->









<section><!-- HOME MARKETING NEEDS SECTION -->
  <div class="home-section home-marketing-needs">
    <div class="home-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2><?php the_field('main_heading_marketing'); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 block1"><!-- MARKETING BLOCK -->
            <div class="marketing-block">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?php the_field('section_1_icon'); ?>" alt="">
                </div>
                <div class="col-sm-9">
                  <h3><?php the_field('section_1_heading'); ?></h3>
                  <p><?php the_field('section_1_text'); ?>
                    <a href="<?php the_field('section_1_link'); ?>"><?php the_field('section_1_learn_more_link_text'); ?></a>
                  </p>
                </div>
              </div><!-- END ROW -->
            </div>
          </div><!-- END MARKETING BLOCK -->
          <div class="col-lg-6 block2"><!-- MARKETING BLOCK -->
            <div class="marketing-block">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?php the_field('section_2_icon'); ?>" alt="">
                </div>
                <div class="col-sm-9">
                  <h3><?php the_field('section_2_heading'); ?></h3>
                  <p><?php the_field('section_2_text'); ?>
                    <a href="<?php the_field('section_2_link'); ?>"><?php the_field('section_2_learn_more_link_text'); ?></a>
                  </p>
                </div>
              </div><!-- END ROW -->
            </div>
          </div><!-- END MARKETING BLOCK -->
          <div class="col-lg-6 block3"><!-- MARKETING BLOCK -->
            <div class="marketing-block">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?php the_field('section_3_icon'); ?>" alt="">
                </div>
                <div class="col-sm-9">
                  <h3><?php the_field('section_3_heading'); ?></h3>
                  <p><?php the_field('section_3_text'); ?>
                    <a href="<?php the_field('section_3_link'); ?>"><?php the_field('section_3_learn_more_link_text'); ?></a>
                  </p>
                </div>
              </div><!-- END ROW -->
            </div>
          </div><!-- END MARKETING BLOCK -->
          <div class="col-lg-6 block4"><!-- MARKETING BLOCK -->
            <div class="marketing-block">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?php the_field('section_4_icon'); ?>" alt="">
                </div>
                <div class="col-sm-9">
                  <h3><?php the_field('section_4_heading'); ?></h3>
                  <p><?php the_field('section_4_text'); ?>
                    <a href="<?php the_field('section_4_link'); ?>"><?php the_field('section_4_learn_more_link_text'); ?></a>
                  </p>
                </div>
              </div><!-- END ROW -->
            </div>
          </div><!-- END MARKETING BLOCK -->
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->
    </div><!-- END HOME CONTENT -->
  </div><!-- END HOME MARKETING NEEDS -->
</section><!-- END SECTION -->











<section><!-- HOME TESTIMONIALS SECTION -->
  <div class="home-section home-testimonials">
    <div class="home-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>What <span>People Are Saying</span> About Venga</h2>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="test-quote">
                  <span class="quote-icon-before"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-left.png" alt=""></span>
                  <?php the_field('testimonial_1_quote'); ?>
                  <span class="quote-icon-after"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-right.png" alt=""></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="test-image">
                  <img class="img-responsive" src="<?php the_field('testimonial_1_image'); ?>" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="test-name">
                  <?php the_field('testimonial_1_name'); ?>
                </div>
                <div class="test-title">
                  <?php the_field('testimonial_1_title'); ?>
                </div>
              </div>
            </div>
          </div>

        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->
    </div><!-- END HOME CONTENT -->
  </div><!-- END HOME TESTIMONIALS -->
</section><!-- END SECTION -->







<section><!-- HOME RESOURCES SECTION -->
  <div class="home-section home-resources">
    <div class="home-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Find Answers to Your Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12"><!-- RESOURCE NAV TAB LINKS -->
            <div class="home-nav-tabs">
              <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#home-ebooks" role="tab" data-toggle="tab">EBOOKS</a></li>
                <li><a href="#home-blogs" role="tab" data-toggle="tab">BLOG POSTS</a></li>
              </ul>
            </div>
          </div><!-- END RESOURCE NAV TAB LINKS -->

          <div class="col-lg-12"><!-- RESOURCE TABS CONTENT -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="home-ebooks"><!-- EBOOKS CONTENT -->
                <div class="row">

                  <div class="col-xs-12 col-sm-6 col-lg-3"><!-- EBOOK -->
                    <div class="home-resource-ebook">
                      <div class="ebook-ipad" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/resource-ebook-wrap.png')">
                        <div class="ebook-image" style="background-image: url('<?php the_field('ebook_1_image'); ?>')">
                        </div>
                      </div><!-- END EBOOK IPAD -->
                      <div class="ebook-details">
                        <a class="ebook-link" href="<?php the_field('ebook_1_link'); ?>"><?php the_field('ebook_1_title'); ?></a>
                        <div class="ebook-pages"><?php the_field('ebook_1_pages'); ?></div>
                      </div><!-- END EBOOK DETAILS -->
                    </div><!-- END EBOOK WRAPPER -->
                  </div><!-- END EBOOK -->

                  <div class="col-xs-12 col-sm-6 col-lg-3"><!-- EBOOK -->
                    <div class="home-resource-ebook">
                      <div class="ebook-ipad" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/resource-ebook-wrap.png')">
                        <div class="ebook-image" style="background-image: url('<?php the_field('ebook_2_image'); ?>')">
                        </div>
                      </div><!-- END EBOOK IPAD -->
                      <div class="ebook-details">
                        <a class="ebook-link" href="<?php the_field('ebook_2_link'); ?>"><?php the_field('ebook_2_title'); ?></a>
                        <div class="ebook-pages"><?php the_field('ebook_2_pages'); ?></div>
                      </div><!-- END EBOOK DETAILS -->
                    </div><!-- END EBOOK WRAPPER -->
                  </div><!-- END EBOOK -->

                  <div class="col-xs-12 col-sm-6 col-lg-3"><!-- EBOOK -->
                    <div class="home-resource-ebook">
                      <div class="ebook-ipad" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/resource-ebook-wrap.png')">
                        <div class="ebook-image" style="background-image: url('<?php the_field('ebook_3_image'); ?>')">
                        </div>
                      </div><!-- END EBOOK IPAD -->
                      <div class="ebook-details">
                        <a class="ebook-link" href="<?php the_field('ebook_3_link'); ?>"><?php the_field('ebook_3_title'); ?></a>
                        <div class="ebook-pages"><?php the_field('ebook_3_pages'); ?></div>
                      </div><!-- END EBOOK DETAILS -->
                    </div><!-- END EBOOK WRAPPER -->
                  </div><!-- END EBOOK -->

                  <div class="col-xs-12 col-sm-6 col-lg-3"><!-- EBOOK -->
                    <div class="home-resource-ebook">
                      <div class="ebook-ipad" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/resource-ebook-wrap.png')">
                        <div class="ebook-image" style="background-image: url('<?php the_field('ebook_4_image'); ?>')">
                        </div>
                      </div><!-- END EBOOK IPAD -->
                      <div class="ebook-details">
                        <a class="ebook-link" href="<?php the_field('ebook_4_link'); ?>"><?php the_field('ebook_4_title'); ?></a>
                        <div class="ebook-pages"><?php the_field('ebook_4_pages'); ?></div>
                      </div><!-- END EBOOK DETAILS -->
                    </div><!-- END EBOOK WRAPPER -->
                  </div><!-- END EBOOK -->


                </div>
              </div><!-- END EBOOKS CONTENT -->
              <div class="tab-pane fade" id="home-blogs"><!-- BLOGS CONTENT -->
                <div class="row">

                  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.rss.js"></script>
                  <script>
                    $( document ).ready(function() {
                      $("#blog-feed").rss(
                        "http://blog.vengaglobal.com/rss.xml",{
                          limit: 4,
                          entryTemplate: '<div class="col-xs-12 col-sm-6 col-lg-3"><div class="home-blog"><div class="blog-image" style="background-image: url(\'{image}\')"></div></div><div class="blog-details"><a class="blog-link" href="{url}">{title}</a></div></div>'})

                    });
                  </script>
                  <div id="blog-feed"></div>



              </div>
            </div><!-- END BLOGS CONTENT -->
          </div><!-- END TAB CONTENT -->
        </div><!-- END RESOURCE TABS CONTENT -->

      </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
  </div><!-- END HOME CONTENT -->
</div><!-- END HOME RESOURCES -->
</section><!-- END SECTION -->


<script type="text/javascript">
  $(document).ready(function () {
    jQuery('#style-css').remove();
    jQuery('#framework-css').remove();
    jQuery('#framework-responsive-css').remove();
  });
</script>




<?php get_footer(); //get footer template ?>