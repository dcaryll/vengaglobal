<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */
 
//get global variables
global $data;

//get template header
get_header(); ?>

	</div>
</div>


<div id="home-nivoslider-wrap">
<?php putRevSlider( "slider1" ) ?>
</div>


<div id="wrap" class="outerbox clearfix">
<div id="main-content" class="clearfix fitvids-container">

<div id="home-wrap" class="clearfix">

<?php
//show default homepage if blog style is not enabled
if($data['enable_disable_home_blog'] !='enable') {

//get homepage module blocks
$layout = $data['homepage_blocks']['enabled'];
if ($layout):
foreach ($layout as $key=>$value) {
	
    switch($key) {

		//slider
		case 'home_slider':
		if($data['home_slider'] != 'Select') {
		?>
		<div id="full-slider"><?php echo do_shortcode("[slider id=".$data['home_slider']."]"); ?></div><!--/full-slider -->
		<?php
		}
	
		//tagline
		break;
		case 'home_tagline':
		
		if($data['home_tagline']) { ?>
		<?php if(!empty($data['home_tagline_title'])) { 
			if(!empty($data['home_tagline_title_url'])) { ?>
				<h2 class="heading"><a href="<?php echo $data['home_tagline_title_url']; ?>" title="<?php echo $data['home_tagline_title']; ?>"><span><?php echo $data['home_tagline_title']; ?></span></a></h2>
			<?php } else { ?>
				<h2 class="heading"><span><?php echo $data['home_tagline_title']; ?></span></h2>
			<?php } } ?>
		<div id="home-tagline" class="clearfix">
			<?php echo stripslashes(do_shortcode($data['home_tagline'])); ?>
		</div>
		<!-- /home-tagline -->
		<?php }
		
		
		//highlights
		break;
		case 'home_highlights':
		require_once('includes/home-highlights.php');
		
		
		//portfolio
		break;
		case 'home_portfolio':
		require_once('/../Alpha/includes/home-portfolio.php');
	
		
		//staff
		break;
		case 'home_staff':
		require_once('/../Alpha/includes/home-staff.php');
		
		
		//blog
		break;
		case 'home_blog':
		require_once('/../Alpha/includes/home-blog.php');
		
		
		//widgets
		break;
		case 'home_widgets':
		if(!empty($data['home_widgets_title'])) {
			if(!empty($data['home_widgets_title_url'])) { ?>
			<h2 class="heading"><a href="<?php echo $data['home_widgets_title_url']; ?>" title="<?php echo $data['home_widgets_title']; ?>"><span><?php echo $data['home_widgets_title']; ?></span></a></h2>
			<?php } else { ?>
				<h2 class="heading"><span><?php echo $data['home_widgets_title']; ?></span></h2>
			<?php } }
		echo '<div id="home-widgets" class="clearfix"><div class="grid-container">';
		dynamic_sidebar('homepage');
		echo '</div></div>';
		
		
		//static page
		break;
		case 'home_static_page':
			if($data['home_static_page'] !='Select') {
				require_once('/../Alpha/includes/home-static-page.php');
			}
			
		//custom module 1
		break;
		case 'custom_module_one':
			if($data['home_custom_one']) {
				echo '<div class="home-custom-one">'. do_shortcode($data['home_custom_one']) .'</div>';
			}
		
		
		//custom module 2
		break;
		case 'custom_module_two':
			if($data['home_custom_two']) {
				echo '<div class="home-custom-two">'. do_shortcode($data['home_custom_two']) .'</div>';
			}
		
		//custom module 3
		break;
		case 'custom_module_three':
			if($data['home_custom_three']) {
				echo '<div class="home-custom-three">'. do_shortcode($data['home_custom_three']) .'</div>';
			}
			
		//custom module 4
		break;
		case 'custom_module_three':
			if($data['home_custom_four']) {
				echo '<div class="home-custom-four">'. do_shortcode($data['home_custom_four']) .'</div>';
			}
			
		//custom module 5
		break;
		case 'custom_module_three':
			if($data['home_custom_five']) {
				echo '<div class="home-custom-five">'. do_shortcode($data['home_custom_five']) .'</div>';
			}
	
    }
	
}
endif;
?>

<?php 
} else {
	//homepage blog style is enabled, so show that instead
	require_once('/../Alpha/includes/hp-blog.php');
} ?>

</div>
<!-- END home-wrap -->   
<?php
//get template footer
get_footer(); ?>