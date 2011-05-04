<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
      <div id="imgHeader">
<?php

if ( is_page('Home') ) {
		print "<div id='cimy_div_id'>Loading images...</div>\n";
		print "<div class='cimy_div_id_caption'></div>\n";
} else {
	  	the_post_thumbnail();
}
?>	         
      </div>
      <div class="contentCopy">
        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
                   

						<?php the_content('10'); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				

<?php endwhile; ?>
        
      </div>
      
      
   <div id="newsCtas" class="featuredBg">
        <h2>News</h2>    
        <?php 

// this is where the Lead Story module begins   

   query_posts('category_name=news','showposts=2'); 
  global $more;
// set $more to 0 in order to only get the first part of the post
$more = 0; ?>

  <?php while (have_posts()) : the_post(); ?>
  
  
   
      <?php $image_id = get_post_thumbnail_id();  
    $image_url = wp_get_attachment_image_src($image_id,'large');  
    $image_url = $image_url[0];  ?>
    
     <div class="newsCta"> <div style="float:left"> <?php the_post_thumbnail( array(100,100) ); ?></div>
          <div class="ctaContent">
            <p class="newsCtaTitle"> <?php the_title(); ?></p>
             <?php the_content(); ?>
          </div><div class="clear"></div>
        </div>
    
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
      <?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
   
    <!-- .entry-content -->
    <?php endwhile; ?>
     
        <div class="clear"></div>
        
        
        
      </div>
    </div>
    <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-footer.png" width="734" height="114" /></div>
  <div class="clear"></div>
</div>






<?php get_footer(); ?>
