<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

 get_header(); 
 get_sidebar(); ?>



  <div id="contentWrapper">
  <div id="utilBar"><a href="#" class="printPage"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-printer.gif" width="16" height="16" alt="Print Page" /></a><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-rss.gif" width="16" height="16" alt="Add Rss Feed" /></a></div>
  <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-top.png"  />
  <div id="pageContent">
      <div id="imgHeader"><?php //the_post_thumbnail();?></div>
      <div class="contentCopy">
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
      </div>
     
    </div>
    <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-footer.png" width="734" height="114" /></div>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>