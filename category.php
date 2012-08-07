<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
  <div id="contentWrapper">
  <div id="utilBar"><a href="#" class="printPage"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-printer.gif" width="16" height="16" alt="Print Page" /></a><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-rss.gif" width="16" height="16" alt="Add Rss Feed" /></a></div>
  <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-top.png"  />
  <div id="pageContent">
      <div id="imgHeader"><?php the_post_thumbnail();?></div>
      <div class="contentCopy">
	
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

	
      </div>
     
    </div>
    <img style="display:block;" src="http://ucfdcr.eleet-tech.com/wp-content/themes/UCF-DCR/images/bg-content-footer.png" width="734" height="114" /></div>
  <div class="clear"></div>
</div>


<?php get_footer(); ?>
