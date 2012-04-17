<?php
/**

 */
?>



<div id="sideBar">
<?php 
global $wp_query;
$thePostID = $wp_query->post->ID;

$thePostParentID = $wp_query->post->post_parent;

 //echo $thePostID
 ?>
    <div id="nav">
      <ul>
        <li><a href="/<?php bloginfo ( 'url' ); ?>">Home</a></li>
        <li><a href="/about-us">About the Office</a><?php 
  if( $thePostID == 7 || $thePostParentID == 7  ){ ?>
<ul id="nav_sub">
<?php
if($post->post_parent)
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); else
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
<?php echo $children; ?>
<?php } ?>
</ul>
<?php } ?></li>
        <li><a href="/departments">Departments</a><?php 
  if( $thePostID == 31 || $thePostParentID == 31  ){ ?>
<ul id="nav_sub">
<?php
if($post->post_parent)
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); else
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
<?php echo $children; ?>
<?php } ?>
</ul>
<?php } ?></li>
        <li><a href="/news">News</a></li>
        <li><a href="/events">Events</a></li>
        <li><a href="http://events.ucf.edu/?upcoming=upcoming" target="_blank">Calendar</a></li>
        <li><a href="/resources">Resources</a><?php 
  if( $thePostID == 43 || $thePostParentID == 43  ){ ?>
<ul id="nav_sub">
<?php
if($post->post_parent)
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); else
$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
<?php echo $children; ?>
<?php } ?>
</ul>
<?php } ?></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/bg-nav-btm.png"  /></div>
    <!--div id="eventsWrapper"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/upcoming-events.gif" width="181" height="31" alt="Upcoming Events" />
      <p align="center"> <a href="http://events.ucf.edu/?upcoming=upcoming" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/btn-view-all-events.jpg" width="189" height="39" alt="View All Events" /></a></p>
    </div-->
  </div>


	

