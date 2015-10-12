<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Canvas
 * @since 0.1.0
 */

$sv_site = get_theme_mod( 'sv_site' ); ?>

  <nav class="navbar navbar-canvas navbar-top" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
      </div><!-- .navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php
        if (!empty($sv_site) && ($sv_site == 'fortcollinscreative' | $sv_site == 'sparks' )) {
          if ( class_exists( 'Flint_Walker_Nav_Menu_Navbar' ) ) {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Walker_Nav_Menu_Navbar ) );
          } else {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
          }
        }
        ?>

        <?php if (!empty($sv_site) && $sv_site == 'fortcollinscreative') { ?>
        <div class="navbar-right">
          <a class="btn btn-fcc disabled navbar-btn" href="http://my.fortcollinscreative.com/wp-login.php?redirect_to=http%3A%2F%2Fmy.fortcollinscreative.com%2Fwp-signup.php">Create website</a>
          <a class="btn btn-default navbar-btn" href="http://my.fortcollinscreative.com/wp-login.php">Login</a>
        </div>
        <?php } ?>

        <?php if (!empty($sv_site) && $sv_site == 'sparks') { ?>
        <div class="navbar-right">
          <div class="btn-group">
            <button type="button" class="btn btn-sparks dropdown-toggle" data-toggle="dropdown">
              Download <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="https://github.com/starverte/flint/releases/download/v1.3.4/flint.zip">Flint</a></li>
              <li><a href="https://github.com/starverte/steel/releases/download/v1.2.4/steel.zip">Steel</a></li>
            </ul>
          </div>
          <a class="btn btn-sparks navbar-btn" href="<?php echo esc_url( home_url('/support') ); ?>">Support</a>
          <a class="btn btn-default disabled navbar-btn" href="#">Login</a>
        </div>
        <?php } ?>

        <?php
        if (!empty($sv_site) && $sv_site == 'starverte') {
          wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
        }
        ?>

      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->

