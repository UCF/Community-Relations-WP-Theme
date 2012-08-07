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
      <div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-487" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-487"><a href="http://communityrelations.ucf.edu/">Home</a></li>
<li id="menu-item-488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-488"><a href="http://communityrelations.ucf.edu/about-us/">About the Office</a></li>
<li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489"><a href="http://communityrelations.ucf.edu/departments/">Departments</a></li>
<li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-505"><a href="/news">News</a></li>
<li id="menu-item-486" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-486"><a href="http://communityrelations.ucf.edu/events/">Photo Gallery</a></li>
<li id="menu-item-492" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-492"><a href="http://events.ucf.edu/">Calendar</a></li>
<li id="menu-item-490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-490"><a href="http://communityrelations.ucf.edu/resources/">Resources</a></li>
<li id="menu-item-491" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-491"><a href="http://communityrelations.ucf.edu/contact/">Contact</a></li>
</ul></div>
      </div>
      <p class="quickLinks"><a target="_blank" href="http://www.facebook.com/UCFCommunityRelations"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-fb.gif" alt="Find Us on Facebook" width="16" height="16" align="texttop" /> Find Us on Facebook</a> <a href="http://itunes.ucf.edu"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-itunesU.gif" alt="Listen on iTunes U" width="16" height="16" align="texttop" /> Listen on iTunes U</a> <a href="http://www.twitter.com/UCF"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-twitter.gif" alt="Follow Us on Twitter" width="16" height="16" align="texttop" /> Follow Us on Twitter</a> <a href="http://www.youtube.com/UCF"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-youtube.gif" alt="Watch on YouTube EDU" width="16" height="16" align="texttop" /> Watch on YouTube EDU</a></p>
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
