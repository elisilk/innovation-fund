<?php

/**
 * Enqueue scripts and styles
 */

function bhsinnovationfund2026_theme_assets()
{
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();

  $css_path = $theme_dir . '/assets/dist/app.css';
  $css_uri  = $theme_uri . '/assets/dist/app.css';

  $js_path = $theme_dir . '/assets/dist/app.js';
  $js_uri  = $theme_uri . '/assets/dist/app.js';

  wp_enqueue_style(
    'bhsinnovationfund',
    $css_uri,
    [],
    filemtime($css_path)
  );

  wp_enqueue_script(
    'bhsinnovationfund',
    $js_uri,
    [],
    filemtime($js_path),
    true
  );

  wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'bhsinnovationfund2026_theme_assets');
