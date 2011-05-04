<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="styles/site.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/styles/site.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo( 'template_directory' ); ?>/styles/print.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	$('.printPage').click(function() {
		window.print();
		return false;
	});
});
</script>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/scripts/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'sliceDown', // Specify sets like: 'fold,fade,sliceDown'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:3000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:false, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
</head>

<body <?php body_class(); ?>>
<script src="http://universityheader.ucf.edu/bar/js/university-header.js" type="text/javascript"></script>
<div id="siteWrapper">
  <div class="dateBar"><img src="<?php bloginfo( 'template_directory' ); ?>/images/top-nav.png" alt="Todays Date" width="278" height="26" align="left" style="display:block;" />
 <span style="float:right; padding-right:6px;"> 
  <SCRIPT LANGUAGE="Javascript">
<!-- 

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
				"Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(monthNames[now.getMonth()] + " " + 
now.getDate() + ", " + now.getFullYear());

// -->
</SCRIPT>
</span>
  <div class="clear"></div>
  
</div><div class="logoHeader"><a href="<?php bloginfo ( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/dcr-logo.jpg" width="429" height="84" alt="DCR Logo" /></a></div>
