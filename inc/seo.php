<?php

/* Control how the page title gets generated */

function bhsinnovationfund_document_title_parts(array $title)
{
  if (is_page()) {
    $page_header = get_field('page_header');
    $display_title = $page_header['display_title'] ?? '';

    if ($display_title) {
      $title['title'] = $display_title;
    }
  }

  return $title;
}

add_filter('document_title_parts', 'bhsinnovationfund_document_title_parts');
