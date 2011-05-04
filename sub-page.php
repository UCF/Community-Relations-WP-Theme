<?php
/*
Template Name: Sub Page
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>



  <div id="contentWrapper">
  <div id="utilBar"><a href="#" class="printPage"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-printer.gif" width="16" height="16" alt="Print Page" /></a><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-rss.gif" width="16" height="16" alt="Add Rss Feed" /></a></div>
  <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-top.png"  />
  <div id="pageContent">
      <div id="imgHeader"><?php the_post_thumbnail();?></div>
      <div class="contentCopy">
        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
                     <h1><?php single_post_title(); ?></h1>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				

<?php endwhile; ?>
        
      </div>
     
    </div>
    <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-footer.png" width="734" height="114" /></div>
  <div class="clear"></div>
</div>






<?php get_footer(); ?>
