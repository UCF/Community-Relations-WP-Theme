<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
  <div id="contentWrapper">
  <div id="utilBar"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-printer.gif" width="16" height="16" alt="Print Page" /></a><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-rss.gif" width="16" height="16" alt="Add Rss Feed" /></a></div>
  <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-top.png"  />
  <div id="pageContent">
      <div id="imgHeader"></div>
      <div class="contentCopy">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

		   </div>
     
    </div>
    <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-footer.png" width="734" height="114" /></div>
  <div class="clear"></div>
</div>

<?php get_footer(); ?>
