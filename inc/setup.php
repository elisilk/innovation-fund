<?php

/**
 * Theme setup functions
 */

function bhsinnovationfund2026_theme_setup()
{
  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');

  // Enable support for a custom logo
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
  ));
}

add_action('after_setup_theme', 'bhsinnovationfund2026_theme_setup');
