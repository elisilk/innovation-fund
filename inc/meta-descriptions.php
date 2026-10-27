<?php

function bhsinnovationfund_meta_description()
{
  if (is_singular()) {
    global $post;

    if (! empty($post)) {
      // 1. If a manual excerpt exists, use it (works for posts, pages, and custom post types)
      if (! empty($post->post_excerpt)) {
        $description = $post->post_excerpt;
      }
      // 2. If it's a PAGE and the excerpt is blank, bypass content and use the site tagline
      elseif (is_page()) {
        $description = get_bloginfo('description');
      }
      // 3. For posts or custom post types, fall back to trimming the post content
      else {
        $cleaned_content = wp_strip_all_tags($post->post_content);
        $description = wp_trim_words($cleaned_content, 30, '');
      }
    }
  }
  // Homepage
  elseif (is_front_page() || is_home()) {
    $description = get_bloginfo('description');
  }
  // All Taxonomy Archives: Categories, Tags, and Custom Taxonomies
  elseif (is_category() || is_tag() || is_tax()) {
    $description = wp_strip_all_tags(category_description());
  }
  // General fallback
  else {
    $description = get_bloginfo('description');
  }

  // Output the tag safely if a description was found
  if (! empty($description)) {
    $description = esc_attr(trim(preg_replace('/\s+/', ' ', $description)));
    echo '<meta name="description" content="' . $description . '" />' . "\n";
  }
}

add_action('wp_head', 'bhsinnovationfund_meta_description');
