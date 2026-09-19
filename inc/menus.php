<?php

/**
 * Theme menu functions
 */

function bhsinnovationfund2026_theme_menus()
{
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Navigation'),
      'secondary-menu' => __('Secondary Navigation'),
      'social-menu' => __('Social Links')
    )
  );
}

add_action('after_setup_theme', 'bhsinnovationfund2026_theme_menus');
