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
<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="?php echo get_site_url(); ?>/wp-content/themes/childofalpha/img/favicon.ico">
  <link rel="apple-touch-icon" href="?php echo get_site_url(); ?>/wp-content/themes/childofalpha/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="?php echo get_site_url(); ?>/wp-content/themes/childofalpha/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="?php echo get_site_url(); ?>/wp-content/themes/childofalpha/img/apple-touch-icon-114x114.png">


<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
  <?php if (is_page_template( 'template-home-page.php' )): ?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <?php endif; ?>


    <link href="<?php echo get_site_url(); ?>/wp-content/themes/childofalpha/stylesheets/skeleton.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/wp-content/themes/childofalpha/stylesheets/main.css" rel="stylesheet">

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

  <script>
    $(function() {
      $( "#tabs" ).tabs();
    });
   </script>
   
<header id="top">

    <div class="container">

      <div class="logo three columns">
           
           <a href="https://www.vengaglobal.com">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Venga Global" />
          </a>

      </div> <!--end logo-->

      <div class="header-right thirteen columns">

        <div class="contact-search">

          <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
          <div><input type="text" size="18" class="text-input" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
          <input type="image" id="searchsubmit" value="Search" class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/img/search-button.png" />
          </div>
          </form>


        </div> <!--end contact-search-->


            <?php
            wp_nav_menu( array( 
              'theme_location' => 'header-menu-2014', 
              'container_class' => 'mainnav',
              'menu_id'            => 'nav',
              'container'       => 'nav' 
              ) 
            );
            ?>

        </div> <!--end header-right-->

      </div> <!--end container-->

  </header> <!--end header-with-nav-->




