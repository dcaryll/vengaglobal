<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */

//global variables
global $data, $post;

//footer grid
$footer_grid_style = $data['footer_layout'];
$footer_grid_class = wpex_grid($footer_grid_style);

//footer callout options
$footer_callout_text = $data['footer_callout_text'];
$footer_callout_btn_txt = $data['footer_callout_btn_txt'];
$footer_callout_btn_link = $data['footer_callout_btn_link'];
$footer_callout_btn_color = $data['footer_callout_btn_color'];
$footer_callout_btn_icon = $data['footer_callout_btn_icon'];
$footer_callout_btn_link_target = $data['footer_callout_btn_link_target'];
?>

  <footer>

    <div class="footer-top">

      <div class="container">

        <div class="footer-top-content sixteen columns">

          <ul>
            <li><a href="https://www.vengaglobal.com/services/content-type/software-localization-services/">Software Localization</a></li>
            <li><a href="https://www.vengaglobal.com/services/content-type/documentation-translation/">Documentation Translation</a></li>
            <li><a href="https://www.vengaglobal.com/services/content-type/website-translation/">Website Translation</a></li>
            <li><a href="https://www.vengaglobal.com/services/content-type/elearning-translation/">eLearning Translation</a></li>
            <li><a href="https://www.vengaglobal.com/services/content-type/multimedia-video-translation/">Multimedia & Video Translation</a></li>
            <li><a href="https://www.vengaglobal.com/services/content-type/marketing-translation/">Marketing Translation</a></li>
<li><a href="https://www.vengaglobal.com/services/global-creative-services/">Global Creative Services</a></li>
          </ul>

        </div> <!--end footer-top-content-->

      </div> <!--end container-->

    </div> <!--end footer-top-->

    <div class="footer-main">

      <div class="container">

        <div class="footer-who-we-are six columns">

          <h3>Who We Are</h3>
          <p>Originated in the software industry, we use our twenty plus years’ experience globalizing information-based technology products to help our clients succeed internationally. Venga offers translation, localization, and global creative services to enable clients in any industry to reach new markets faster.</p>

        </div> <!--end footer-who-we-are-->

        <div class="footer-about-venga three columns">

          <h3>About Venga</h3>

          <ul>
            <li><a href="?page_id=5463">Company</a></li>
            <li><a href="?page_id=4813">Locations</a></li>
            <li><a href="?page_id=5487">Contact Us</a></li>
            <li><a href="?page_id=4866">Careers</a></li>
			<li><a href="?page_id=7625">T&Cs - US</a></li>
			<li><a href="?page_id=12672">T&Cs - UK</a></li>
          </ul>

        </div> <!--end footer-about-venga-->

        <div class="footer-quick-links three columns">

          <h3>Quick Links</h3>

          <ul>
            <li><a href="https://xtrf.vengacorp.com/portal/">Client Portal</a></li>
            <li><a href="https://xtrf.vengacorp.com/partners">Vendor Portal</a></li>
            <li><a href="http://tms.vengacorp.com/memoqweb/">Webtrans</a></li>
            <li><a href="http://www.vengacloud.com/">Vengacloud</a></li>
          </ul>

        </div> <!--end footer-quick-links-->

        <div class="footer-follow-us four columns">

          <h3>Follow Us</h3>

          <ul>
            <li><a href="https://www.facebook.com/pages/Venga/119740474719366" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" alt="Facebook"/></a></li>
            <li><a href="https://twitter.com/VengaGlobal" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png" alt="Twitter"/></a></li>
            <li><a href="http://www.linkedin.com/company/294748?trk=tyah" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png" alt="LinkedIn"/></a></li>
          </ul>

        </div> <!--end footer-follow-us-->

        <div class="footer-clear"></div>

      </div> <!--end container-->

    </div> <!--end footer-main-->

    <div class="footer-bottom">

      <div class="container">

        <div class="footer-copyright eight columns">

          <p>Copyright &copy; <?php echo date("Y"); ?> Venga. All rights reserved.</p>

        </div> <!--end footer-copyright-->

        <div class="footer-quick-nav eight columns">

          <ul>
            <li><a href="https://www.vengaglobal.com">Home</a></li>
            <li><a href="https://www.vengaglobal.com/cookie-policy/">Cookie Policy</a></li>
            <li><a href="?page_id=6130">Privacy Notice</a></li>
            <li><a href="?page_id=6133">Terms of Use</a></li>
            <li><a href="#top">Top</a></li>
          </ul>

        </div> <!--end footer-quick-nav-->

      </div> <!--end container-->

    </div> <!--end footer-bottom-->
<script type="text/javascript">
piAId = '233712';
piCId = '1020';

(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
  </footer>


<?php wp_footer(); ?>

</body>
</html>