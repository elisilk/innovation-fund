<?php

/**
 * Retrieve a custom inline SVG asset with accessibility options.
 * 
 * @param string  $icon_name The filename without the .svg extension.
 * @param array  $args      Optional arguments for classes, visibility, and labels.
 * @return string The modified and sanitized inline SVG markup or an empty string.
 */
function get_theme_icon($icon_name, $args = [])
{
  // Define accessibility defaults
  $defaults = [
    'class'       => '',
    'aria_hidden' => true,
    'aria_label'  => '',
  ];

  $args = wp_parse_args($args, $defaults);

  // Fetch the SVG asset
  $file_path = get_theme_file_path('/assets/static/icons/' . $icon_name . '.svg');

  if (! file_exists($file_path)) {
    return '';
  }

  // Retrieve the raw SVG code
  $svg = file_get_contents($file_path);

  // Build accessibility and styling attributes dynamically
  $attributes = '';

  if (! empty($args['class'])) {
    $attributes .= ' class="' . esc_attr($args['class']) . '"';
  }

  if ($args['aria_hidden']) {
    // Hide from screen readers AND prevent keyboard focus bugs
    $attributes .= ' aria-hidden="true" role="presentation" focusable="false"';
  } else {
    // Expose to accessibility tree if explicit labels are provided
    $attributes .= ' role="img"';
    if (! empty($args['aria_label'])) {
      $attributes .= ' aria-label="' . esc_attr($args['aria_label']) . '"';
    }
  }

  // Inject the dynamic attributes into the opening <svg> tag
  $svg = preg_replace('/^<svg/i', '<svg' . $attributes, $svg);

  return $svg;
}

/**
 * Display a custom inline SVG asset with accessibility options.
 * 
 * @param string $icon_name The filename of the icon (minus extension).
 * @param array  $args      Optional arguments for classes, visibility, and labels.
 * @return void
 */

function the_theme_icon($icon_name, $args = [])
{
  echo get_theme_icon($icon_name, $args);
}
