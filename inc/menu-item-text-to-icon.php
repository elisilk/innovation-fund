<?php

/**
 * Conditionally replace navigation menu text with an icon.
 */
function bhsinnovationfund2026_change_menu_title_to_icon($title, $menu_item, $args, $depth)
{
  if ($args->theme_location === 'social-menu') {
    switch (strtolower($title)) {
      case 'facebook':
        $title = '<span class="visually-hidden">' . $title . '</span>' . get_theme_icon('logo-facebook', array('icon-ui', 'icon-facebook-outline'));
        break;
      case 'twitter':
      case 'x':
        $title = '<span class="visually-hidden">' . $title . '</span>' . get_theme_icon('logo-x', array('icon-ui', 'icon-x'));
        break;
      case 'instagram':
        $title = '<span class="visually-hidden">' . $title . '</span>' . get_theme_icon('logo-instagram', array('icon-ui', 'icon-instagram'));
        break;
      case 'linkedin':
        $title = '<span class="visually-hidden">' . $title . '</span>' . get_theme_icon('logo-linkedin', array('icon-ui', 'icon-linkedin'));
        break;
      case 'youtube':
        $title = '<span class="visually-hidden">' . $title . '</span>' . get_theme_icon('logo-youtube', array('icon-ui', 'icon-youtube'));
        break;
      default:
        break;
    }
  }

  return $title;
}

add_filter('nav_menu_item_title', 'bhsinnovationfund2026_change_menu_title_to_icon', 10, 4);
