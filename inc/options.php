<?php

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Sitewide Settings',
    'menu_slug' => 'sitewide-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}
