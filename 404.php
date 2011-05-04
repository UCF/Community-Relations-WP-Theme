<?php
/**
 * The template for displaying 404 pages (Not Found).

 */

 ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="contentWrapper">
  <div id="utilBar"><a href="#" class="printPage"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-printer.gif" width="16" height="16" alt="Print Page" /></a><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-rss.gif" width="16" height="16" alt="Add Rss Feed" /></a></div>
  <img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-top.png"  />
  <div id="pageContent">
   <div class="contentCopy">
    <div id="post-0" class="post error404 not-found">
      <h1 class="entry-title">
        <?php _e( 'Page Not Found', 'twentyten' ); ?>
      </h1>
      <div class="entry-content">
        <p>
          <?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?>
        </p>
        <?php get_search_form(); ?>
      </div>
      <!-- .entry-content -->
    </div>
    <!-- #post-0 -->
  </div>
</div>
<img style="display:block;" src="<?php bloginfo( 'template_directory' ); ?>/images/bg-content-footer.png" width="734" height="114" />
</div>
<div class="clear"></div>
</div>
<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<?php get_footer(); ?>
