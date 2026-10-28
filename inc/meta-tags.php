<?php

function bhsinnovationfund_seo_meta_tags()
{
  // Generate the description text
  if (is_singular()) {
    global $post;
    if (! empty($post)) {
      if (! empty($post->post_excerpt)) {
        $description = $post->post_excerpt;
      } elseif (is_page()) {
        $description = get_bloginfo('description');
      } else {
        $cleaned_content = wp_strip_all_tags($post->post_content);
        $description = wp_trim_words($cleaned_content, 30, '');
      }
    }
  } elseif (is_front_page() || is_home()) {
    $description = get_bloginfo('description');
  } elseif (is_category() || is_tag() || is_tax()) {
    $description = wp_strip_all_tags(term_description());
  } else {
    $description = get_bloginfo('description');
  }

  // Clean text strings safely
  $description = esc_attr(trim(preg_replace('/\s+/', ' ', $description)));
  $site_title  = esc_attr(get_bloginfo('name'));
  $page_title  = esc_attr(wp_get_document_title());
  $page_url    = esc_url(home_url($_SERVER['REQUEST_URI']));

  // Determine the share image

  // Default to a fallback image
  $share_image = get_stylesheet_directory_uri() . '/assets/static/images/BIF-Share-Image.png';

  // If viewing a singular post/page with a featured image, overwrite the fallback
  if (is_singular() && has_post_thumbnail()) {
    $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
    if ($featured_img) {
      $share_image = $featured_img;
    }
  }

  // Output all meta tags cleanly

  // Description
  if (! empty($description)) {
    echo '<meta name="description" content="' . $description . '" />' . "\n";
    echo '<meta property="og:description" content="' . $description . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . $description . '" />' . "\n";
  }

  // Titles, URLs, and Types
  echo '<meta property="og:title" content="' . $page_title . '" />' . "\n";
  echo '<meta name="twitter:title" content="' . $page_title . '" />' . "\n";
  echo '<meta property="og:url" content="' . $page_url . '" />' . "\n";
  echo '<meta property="og:site_name" content="' . $site_title . '" />' . "\n";
  echo '<meta property="og:type" content="' . (is_singular('post') ? 'article' : 'website') . '" />' . "\n";
  echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";

  // Image Output
  echo '<meta property="og:image" content="' . esc_url($share_image) . '" />' . "\n";
  echo '<meta name="twitter:image" content="' . esc_url($share_image) . '" />' . "\n";
}

add_action('wp_head', 'bhsinnovationfund_seo_meta_tags');

/* 
 * prevent search engines from indexing low-value
 * internal pages, including search results or 404
 * error pages
 */

function bhsinnovationfund_robots_meta()
{
  if (is_search() || is_404()) {
    echo '<meta name="robots" content="noindex, nofollow" />' . "\n";
  }
}

add_action('wp_head', 'bhsinnovationfund_robots_meta');
