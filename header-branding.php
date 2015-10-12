<?php
/**
 * The Header for our theme.
 *
 * Displays the branding header element
 *
 * @package Flint/Canvas
 * @since 0.1.0
 */

$sv_site = get_theme_mod( 'sv_site' ); ?>

<div id="masthead" class="fill site-header" role="banner">
  <div class="container">
    <div class="site-branding">
      <?php if (is_front_page()) { ?>

        <?php if (!empty($sv_site) && $sv_site == 'fortcollinscreative') { ?>

          <h2 class="tagline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Managed WordPress Hosting</a></h2>

          <h3 class="description">Fort Collins Creative is a sensible solution to hosting a WordPress website, without a call center overseas, and with the option of support over coffee*</h3>

          <div class="clearfix"><p></p></div>

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <a class="btn btn-canvas btn-block btn-lg hidden-xs" href="#learn-more">Learn more</a>
              <a class="btn btn-canvas btn-block visible-xs-block" href="#learn-more">Learn more</a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <a class="btn btn-canvas btn-block btn-lg hidden-xs" href="#plans">View plans and pricing</a>
              <a class="btn btn-canvas btn-block visible-xs-block" href="#plans">View plans and pricing</a>
              <p class="btn-lbl">Plans start at $23/month</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

          </div><!-- .row -->

          <div class="row">

            <div class="col-lg-6 col-md-6"></div>

            <div class="col-lg-6 col-md-6">
              <p style="text-align: right;">* Available for clients within 25 miles of Fort Collins</p>
            </div>

          </div><!-- .row -->

        <?php } /* if (!empty($sv_site) && $sv_site == 'fortcollinscreative') */ ?>

        <?php if (!empty($sv_site) && $sv_site == 'sparks') { ?>

          <h2 class="tagline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">WordPress Development Framework</a></h2>

          <h3 class="description">Build a better website using a minimalist, responsive theme and an ultimate plugin that can be extended with child themes and modules.</h3>

          <div class="clearfix"><p></p></div>

          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a class="btn btn-canvas btn-block btn-lg hidden-sm hidden-xs" href="http://sparks.starverte.com/flint">Learn more about Flint</a>
              <a class="btn btn-canvas btn-block visible-sm-block visible-xs-block" href="http://sparks.starverte.com/flint">Learn more <br class="visible-xs-block">about Flint</a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a class="btn btn-canvas btn-block btn-lg hidden-sm hidden-xs" href="http://sparks.starverte.com/steel">Learn more about Steel</a>
              <a class="btn btn-canvas btn-block visible-sm-block visible-xs-block" href="http://sparks.starverte.com/steel">Learn more <br class="visible-xs-block">about Steel</a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a class="btn btn-canvas btn-block btn-lg hidden-sm hidden-xs" href="#support">Premium Developer Support</a>
              <a class="btn btn-canvas btn-block visible-sm-block visible-xs-block" href="#support"><span class="hidden-xs">Premium </span>Developer <br class="visible-xs-block">Support</a>
              <p class="btn-lbl hidden-sm hidden-xs">Plans start at $23/yr</p>
              <p class="btn-lbl visible-sm-block visible-xs-block" style="font-size:15px;">Plans start at $23/yr</p>
            </div>

          </div><!-- .row -->

        <?php } /* if (!empty($sv_site) && $sv_site == 'sparks') */ ?>

        <?php if (!empty($sv_site) && $sv_site == 'starverte') { ?>

          <h2 class="tagline hidden-xs" style="font-size: 36px;">We develop excellent software and services that enable businesses to transform data into relationships</h2>

          <h2 class="tagline visible-xs-block" style="font-size: 24px;">We develop excellent software and services that enable businesses to transform data into relationships</h2>

          <div class="clearfix"><p></p></div>

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <a class="btn btn-canvas btn-block btn-lg hidden-xs" href="#">Request a Quote</a>
              <a class="btn btn-canvas btn-block visible-xs-block" href="#">Request a Quote</a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <a class="btn btn-canvas btn-block btn-lg hidden-xs" href="#">Hire a Professional</a>
              <a class="btn btn-canvas btn-block visible-xs-block" href="#">Hire a Professional</a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

          </div><!-- .row -->

        <?php } /* if (!empty($sv_site) && $sv_site == 'starverte') */ ?>

      <?php } /* if (is_home() | is_front_page()) */ ?>

      <div class="clearfix"><p></p></div>

    </div><!-- .site-branding -->
  </div><!-- .container -->
</div><!-- #masthead -->


  <div class="stripe">
    <div class="container">

      <?php if (is_home() | is_front_page()) { ?>

      <?php if (!empty($sv_site) && $sv_site == 'fortcollinscreative') { ?>
        <p>Powering Creativity</p>
      <?php } ?>

      <?php if (!empty($sv_site) && $sv_site == 'sparks') { ?>
        <p>Inspiring Developers to Create Sites on Fire</p>
      <?php } ?>

      <?php } else { ?>
        <p><?php the_title(); ?></p>
        <?php if ( current_user_can('edit_posts') ) { ?><a class="btn btn-default btn-sm btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>
      <?php } /* if (is_home() | is_front_page()) */ ?>

    </div><!-- .container -->
  </div><!-- .stripe -->
