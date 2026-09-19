<?php

function bhsinnovationfund2026_register_post_types()
{
  // **** Programs ****

  $program_labels = array(
    'name' => 'Programs',
    'singular_name' => 'Program',
    'add_new' => 'Add New Program',
    'add_new_item' => 'Add New Program',
    'edit_item' => 'Edit Program',
    'new_item' => 'New Program',
    'view_item' => 'View Program',
    'search_items' => 'Search Programs',
    'not_found' => 'No programs found',
    'not_found_in_trash' => 'No programs found in trash',
    'all_items' => 'All Programs',
    'menu_name' => 'Programs',
    'name_admin_bar' => 'Program',
  );

  $program_args = array(
    'labels' => $program_labels, // Use the labels defined above.
    'public' => true, // Makes the custom post type publicly accessible.
    'has_archive' => true, // Enables an archive page for this post type.
    'menu_icon' => 'dashicons-lightbulb', // Sets the menu icon in the admin dashboard (Dashicons class).
    'supports' => array('title', 'thumbnail', 'excerpt'), // Enables support for the title, excerpt, and featured image (not the 'editor').
    'show_in_rest' => true, // Enables support for the Gutenberg editor and REST API.
    'show_in_nav_menus' => true,
    'rewrite' => [
      'slug' => 'programs',
    ],
  );

  register_post_type('program', $program_args);

  // **** Educators ****

  $educator_labels = array(
    'name' => 'Educators',
    'singular_name' => 'Educator',
    'add_new' => 'Add New Educator',
    'add_new_item' => 'Add New Educator',
    'edit_item' => 'Edit Educator',
    'new_item' => 'New Educator',
    'view_item' => 'View Educator',
    'search_items' => 'Search Educators',
    'not_found' => 'No educators found',
    'not_found_in_trash' => 'No educators found in trash',
    'all_items' => 'All Educators',
    'menu_name' => 'Educators',
    'name_admin_bar' => 'Educator',
  );

  $educator_args = array(
    'labels' => $educator_labels,
    'public' => true, // Makes the custom post type publicly accessible.
    'has_archive' => true, // Enables an archive page for this post type.
    'menu_icon' => 'dashicons-id-alt', // Sets the menu icon in the admin dashboard (Dashicons class).
    'supports' => array('title', 'thumbnail'), // Enables support for the title, excerpt, and featured image (not the 'editor').
    'show_in_rest' => true, // Enables support for the Gutenberg editor and REST API.
    'show_in_nav_menus' => true,
    'rewrite' => [
      'slug' => 'educators',
    ],
  );

  register_post_type('educator', $educator_args);

  // **** Events ****

  $event_labels = array(
    'name' => 'Events',
    'singular_name' => 'Event',
    'add_new' => 'Add New Event',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'new_item' => 'New Event',
    'view_item' => 'View Event',
    'search_items' => 'Search Events',
    'not_found' => 'No events found',
    'not_found_in_trash' => 'No events found in trash',
    'all_items' => 'All Events',
    'menu_name' => 'Events',
    'name_admin_bar' => 'Event',
  );

  $event_args = array(
    'labels' => $event_labels,
    'public' => true, // Makes the custom post type publicly accessible.
    'has_archive' => true, // Enables an archive page for this post type.
    'menu_icon' => 'dashicons-calendar-alt', // Sets the menu icon in the admin dashboard (Dashicons class).
    'supports' => array('title', 'thumbnail', 'excerpt'), // Enables support for the title, excerpt, and featured image (not the 'editor').
    'show_in_rest' => true, // Enables support for the Gutenberg editor and REST API.
    'show_in_nav_menus' => true,
    'rewrite' => [
      'slug' => 'events',
    ],
  );

  register_post_type('event', $event_args);
}

add_action('init', 'bhsinnovationfund2026_register_post_types');
