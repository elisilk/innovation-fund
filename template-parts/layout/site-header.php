  <header id="header" class="site-header">
    <a href="#main" class="skip-to-main">Skip to main content</a>

    <div class="site-header__banner bg-primary">
      <div class="site-header__inner">
        <div class="site-header__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'social-menu',
          )); ?>
        </div>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd-E429F6JQIctwUuyTYnGEksqG-riLhewTjBBg5m-1xzcR0A/viewform">
          Join Our Email List
        </a>
      </div>
    </div>

    <div class="site-header__main">
      <div class="site-header__inner">
        <a href="<?php echo home_url('/'); ?>">
          <?php if (function_exists('the_custom_logo') && has_custom_logo()) :
            the_custom_logo();
          else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/static/images/BIF-Logo-Color-Transparent.png" alt="<?php bloginfo('name'); ?>" class="logo__image">
          <?php endif; ?>
        </a>

        <button
          class="site-header__menu-controls"
          aria-controls="primary-nav"
          aria-expanded="false">
          <span class="visually-hidden">Menu</span>
          <?php the_theme_icon('menu', array('icon-ui', 'icon-menu')); ?>
          <?php the_theme_icon('close', array('icon-ui', 'icon-close')); ?>
        </button>

        <div class="site-header__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'site-header__inner'      => 'nav',
          )); ?>

          <a class="button" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WMETUBMXB4DEQ&source=url">
            Donate
          </a>
        </div>
      </div>
    </div>
  </header>