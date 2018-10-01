<?php
/**
 * The template for displaying the footer.
 * @package Wordpress
*/
?>

  <footer class="footer--component">
      
      <div class="container">
          
            <div class="footer--layout-left eight columns">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/venga-locations-map.png" alt="Venga Locations"/>
            </div>
            
            <div class="footer--layout-right eight columns">
                
                <div class="footer--description">
                    <h4>Who we are</h4>
                    <p>Originated in the software industry, we use our twenty plus years’ experience globalizing information-based technology products to help our clients succeed internationally. Venga offers translation, localization, and global creative services to enable clients in any industry to reach new markets faster.</p>
                </div>
                
                <div class="three-column-grid">
                  <div class="footer--links">
                      <h4>About Venga</h4>
                      <ul>
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Locations</a></li>
                          <li><a href="#">Contact Us</a></li>                
                          <li><a href="#">Careers</a></li>
                          <li><a href="#">T&Cs - US</a></li>
                          <li><a href="#">T&Cs - UK</a></li>
                      </ul>
                  </div>
                  <div class="footer--quicklinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Client Portal</a></li>
                        <li><a href="#">Vendor Portal</a></li>
                        <li><a href="#">Webtrans</a></li>                
                        <li><a href="#">Vengacloud</a></li>
                    </ul>
                  </div>
                  
                  <div class="footer--otherlinks">
                    <h4>Additional Links</h4>
                    <ul>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Privacy Notice</a></li>
                        <li><a href="#">Terms of Use</a></li>                
                        <li><a href="#">Back to Top</a></li>
                    </ul>
                  </div>
                  
                </div>
                
                <div class="footer--social">
                    <h4>Find us on social</h4>
                    <ul>
                        <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flogo-HexRBG-Wht-72.png" alt="Find us on Facebook"/></a></li>
                        <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Twitter_Social_Icon_Square_White.png" alt="Find us on Twitter"/></a></li>
                        <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/In-White-75px-R.png" alt="Find us on LinkedIn"/></a></li>
                    </ul>
                </div>
                
                <div class="footer--copyright">
                    <p>Copyright &copy; <?php echo date("Y"); ?> Venga Global. All rights reserved.</p>
                </div>
                
            </div>
      
  </footer>


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
  
<?php wp_footer(); ?>

</body>
</html>