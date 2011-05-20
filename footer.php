<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	<div id="footerWraper">
  <div id="footer">
    <div class="address"><img src="<?php bloginfo( 'template_directory' ); ?>/images/ucf-logo.png" alt="UCF" width="179" height="65" />
      <p>Ying Academic Center<br />
        36 West Pine Street, Suite 106<br />
        Orlando, FL  32801-2612<br />
        <strong>Phone:</strong> (407) 235-3935 </p>
    </div>
    <div class="footerNavWrapper">
      <div class="footerNav">
        <?php wp_nav_menu('main-menu');?>
      </div>
      <p class="quickLinks"><a href="http://www.facebook.com/UCF"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-fb.gif" alt="Find Us on Facebook" width="16" height="16" align="texttop" /> Find Us on Facebook</a> <a href="http://itunes.ucf.edu"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-itunesU.gif" alt="Listen on iTunes U" width="16" height="16" align="texttop" /> Listen on iTunes U</a> <a href="http://www.twitter.com/UCF"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-twitter.gif" alt="Follow Us on Twitter" width="16" height="16" align="texttop" /> Follow Us on Twitter</a> <a href="http://www.youtube.com/UCF"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-youtube.gif" alt="Watch on YouTube EDU" width="16" height="16" align="texttop" /> Watch on YouTube EDU</a></p>
      <p align="center">Copyright &copy; 2011 University of Central Florida All rights reserved. </p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
