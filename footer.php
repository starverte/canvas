<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint/Canvas
 * @since 0.1.0
 */

$sv_site = get_theme_mod( 'sv_site' ); ?>

</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info container">
    <div id="footer-left" class="col-lg-10 col-md-9 col-sm-8">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-left', 'container' => false, 'menu_class' => 'nav nav-pills', 'fallback_cb' => false ) ); ?>
    </div>
    <div id ="credits" class="col-lg-2 col-md-3 col-sm-4">
      <div class="row">
        <div class="col-xs-4">
          <a href="http://starverte.com"><img class="icon-star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/star.png"></a>
        </div>
        <div class="col-xs-4">
          <a href="http://fortcollinscreative.com"><img class="icon-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Cs.png"></a>
        </div>
        <div class="col-xs-4">
          <a href="http://sparks.starverte.com"><img class="icon-spark" src="<?php echo get_stylesheet_directory_uri(); ?>/img/spark.png"></a>
        </div>
      </div>
      <p>

      <?php if (!empty($sv_site) && $sv_site == 'starverte') { ?>
        Developed by <a href="http://starverte.com">Star Verte</a><br class="hidden-xs">
      <?php } ?>

      <?php if (!empty($sv_site) && $sv_site == 'fortcollinscreative') { ?>
        Created by <a href="http://starverte.com">Star Verte</a><br class="hidden-xs">
      <?php } ?>

      <?php if (!empty($sv_site) && $sv_site == 'sparks') { ?>
        Fueled by <a href="http://starverte.com">Star Verte</a><br class="hidden-xs">
      <?php } ?>

        <span class="visible-xs-inline"> | </span>Powered by <a href="http://wordpress.org">WordPress</a>
      </p>
    </div>

  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php get_footer( 'close' );
