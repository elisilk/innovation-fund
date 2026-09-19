<?php

/**
 * Output an inline SVG icon from the theme assets directory.
 *
 * @param string $icon_name The filename without the .svg extension.
 * @param array  $classes   Optional array of CSS classes to inject into the SVG element.
 * @return string           The sanitized inline SVG markup or an empty string.
 */
function get_theme_icon($icon_name, $classes = array())
{
  // Define the path to the SVG file
  $file_path = get_theme_file_path('/assets/static/icons/' . $icon_name . '.svg');

  if (! file_exists($file_path)) {
    return '';
  }

  // Retrieve the raw SVG code
  $svg = file_get_contents($file_path);

  // Optional: Inject custom CSS classes directly into the SVG tag for styling
  if (! empty($classes) && is_array($classes)) {
    $class_string = implode(' ', array_map('sanitize_html_class', $classes));

    if (strpos($svg, 'class="') !== false) {
      $svg = str_replace('class="', 'class="' . $class_string . ' ', $svg);
    } else {
      $svg = str_replace('<svg', '<svg class="' . $class_string . '"', $svg);
    }
  }

  return $svg;
}

/**
 * Echo the helper function output directly into template files.
 */
function the_theme_icon($icon_name, $classes = array())
{
  echo get_theme_icon($icon_name, $classes);
}
