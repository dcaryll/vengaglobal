<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */
global $data; //get theme options
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <?php if($data['disable_responsive'] !='disable') { ?>
  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <?php } ?>


  <!-- Title Tag -->
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

  <?php if(!empty($data['custom_favicon'])) { ?>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo $data['custom_favicon']; ?>" />
  <?php } ?>


  <?php if (is_page_template( 'template-home-page.php' )): ?>
    <link href="<?php echo get_site_url(); ?>/wp-content/themes/childofalpha/main.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <?php endif; ?>


  <!-- Browser dependent stylesheets -->

<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" media="screen" />
  <![endif]-->

<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/awesome_font_ie7.css" media="screen"/>
  <![endif]-->



  <?php
//cutom fonts css
  get_template_part( 'includes/custom-fonts');

//tracking code - header
  echo stripslashes($data['tracking_header']);
  ?>

  <!-- WP Head -->
  <?php wp_head(); ?>

<!-- Begin Body -->
<body <?php body_class('body '. $data['color_scheme'] .''); ?>>











  <?php if (is_page_template( 'template-home-page.php' )): ?>

    <div class="home-navbar">
      <div class="container">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/venga-logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-alt">
              <a  class="btn btn-primary navbar-btn navbar-right nav-quote">Request a Quote</a>
              <form action="/" method="get" class="navbar-form navbar-right nav-search" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" value="<?php the_search_query(); ?>">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </form>
              <p class="navbar-text navbar-right nav-phone-number">1.800.VENGA</p>
            </div>


            <?php
            wp_nav_menu( array(
              'menu'              => 'home_new',
              'theme_location'    => 'home_new',
              'depth'             => 3,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbar-collapse',
              'menu_class'        => 'nav navbar-nav navbar-right',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
            ?>


            <!-- <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">How we can help</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Why Venga</a></li>
              </ul>
            </div> -->

          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  <?php else: ?>










    <?php if($data['disable_top_bar'] != 'disable') { ?>
    <div id="top-bar" <?php if($data['top_bar_position'] == 'fixed') { echo 'class="top-bar-fixed"'; } ?>>
      <div id="top-bar-inner" class="outerbox clearfix">
       <?php
            //show top navigation unless disabled
       if($data['disable_top_bar_menu'] !='disable') { ?>
       <nav id="top-navigation">
        <?php wp_nav_menu( array(
          'theme_location' => 'top_menu',
          'menu_class' => 'top-menu sf-menu',
          'sort_column' => 'menu_order',
          'fallback_cb' => false,
          'walker' => new wpex_menu_walker()
          )); ?>
        </nav><!-- /top-bar-nav -->
        <?php }
			//top bar menu alternative
        if($data['disable_top_bar_menu'] == 'disable' && $data['top_bar_menu_alternative']) { ?>
        <div id="top-bar-left">
          <?php echo do_shortcode($data['top_bar_menu_alternative']); ?>
        </div><!--top-bar-right -->
        <?php } ?>

        <?php
            //show social region if not disabled
        if($data['enable_disable_social'] !='disable') { ?>
        <ul id="social">
          <?php
          $social_links = wpex_get_social();
                //social loop
          foreach($social_links as $social_link) {
            if(!empty($data[$social_link])) {
              echo '<li><a href="'. $data[$social_link] .'" title="'. $social_link .'" target="_blank"><img src="'. get_template_directory_uri() .'/images/social/'.$social_link.'.png" alt="'. $social_link .'" /></a></li>';
            } }
            ?>
          </ul><!-- /social -->
          <?php } ?>
          <?php
			//show social alternative
          if($data['enable_disable_social'] == 'disable' && $data['social_alternative']) { ?>
          <div id="top-bar-right">
            <?php echo do_shortcode($data['social_alternative']); ?>
          </div><!--top-bar-right -->
          <?php } ?>
        </div><!-- /top-bar-inner -->
      </div><!-- /top-bar -->
      <?php } ?>


<div id="wrap" class="outerbox clearfix">

	<div id="main-content" class="clearfix fitvids-container">

   <?php
	//run code only on pages
   if(is_page() && !is_attachment()) {

		//show large featured images on pages
    $full_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size');
    if($full_img) { echo '<div id="page-featured-img"><img src="'. $full_img[0] .'" alt="'. get_the_title() .'" /></div>'; }

		//show sliders if selected
    global $post;
		$page_slider = get_post_meta($post->ID, 'wpex_page_slider', TRUE); //get slider meta

		if($page_slider != 'no_slider' && $page_slider != '') { ?>
   <div id="full-slider"><?php echo do_shortcode("[slider id=".$page_slider."]"); ?></div><!--/full-slider -->
   <?php }
 } ?>







<?php endif ?>