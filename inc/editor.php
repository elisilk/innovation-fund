<?php

/* Disable Gutenberg Editor on Pages */

add_filter(
  'use_block_editor_for_post_type',
  function ($enabled, $post_type) {

    if ($post_type === 'page') {
      return false;
    }

    return $enabled;
  },
  10,
  2
);

add_action('init', function () {
  remove_post_type_support('page', 'editor');
}, 99);
