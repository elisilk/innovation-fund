<?php

/**
 * Enqueue scripts and styles
 */

function bhsinnovationfund2026_theme_assets()
{
  $theme_uri = get_template_directory_uri();

  wp_enqueue_style(
    'bhs-innovation-fund-app',
    $theme_uri . '/assets/dist/app.css',
    [],
    null
  );

  wp_enqueue_script(
    'bhs-innovation-fund-app',
    $theme_uri . '/assets/dist/app.js',
    [],
    null,
    true
  );

  wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'bhsinnovationfund2026_theme_assets');
