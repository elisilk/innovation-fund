<?php
$is_alert_active = get_field('is_alert_active', 'option');

$alert_excluded_pages_list = get_field('alert_excluded_pages', 'option');

$is_current_page_excluded = false;

if (!empty($alert_excluded_pages_list)) {
  $current_page_id = get_the_ID();

  foreach ($alert_excluded_pages_list as $excluded_page) {
    $excluded_id = is_object($excluded_page) ? $excluded_page->ID : $excluded_page;
    if ((int) $current_page_id === (int) $excluded_id) {
      $is_current_page_excluded = true;
      break;
    }
  }
}

$alert_heading   = get_field('alert_heading', 'option');
$alert_message   = get_field('alert_message', 'option');
$alert_cta_link  = get_field('alert_cta_link', 'option');

// Auto-exclude if the current page URL matches the target CTA URL
if (is_array($alert_cta_link)) {
  $current_url = home_url(add_query_arg([], $wp->request));
  if (trailingslashit($current_url) === trailingslashit($alert_cta_link['url'])) {
    $is_current_page_excluded = true;
  }
}

if ($is_alert_active && ! $is_current_page_excluded && ! empty($alert_message)) :

  $alert_cta_hash_data = '';
  if (is_array($alert_cta_link)) {
    $alert_cta_hash_data = $alert_cta_link['url'] . $alert_cta_link['title'] . ($alert_cta_link['target'] ?? '');
  }

  $content_to_hash = [
    'heading'  => trim($alert_heading),
    'message'  => trim($alert_message),
    'cta_link' => $alert_cta_hash_data
  ];
  $alert_hash = md5(json_encode($content_to_hash));
?>
  <section id="site-alert" class="site-alert" aria-label="Sitewide Notification" data-alert-id="<?php echo esc_attr($alert_hash); ?>">
    <div class="site-alert__inner">
      <div class="site-alert__content">
        <?php if (!empty($alert_heading)) : ?>
          <h2 class="site-alert__heading"><?php echo esc_html($alert_heading); ?></h2>
        <?php endif; ?>

        <div class="site-alert__body">
          <?php echo wp_kses_post($alert_message); ?>
        </div>

        <?php if (is_array($alert_cta_link)) :
          $link_url    = $alert_cta_link['url'];
          $link_title  = $alert_cta_link['title'];
          $link_target = ! empty($alert_cta_link['target']) ? $alert_cta['target'] : '_self';
        ?>
          <a
            href="<?php echo esc_url($link_url); ?>"
            class="button site-alert__cta"
            target="<?php echo esc_attr($link_target); ?>"
            <?php echo $link_target === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
            <?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
      </div>

      <button
        type="button"
        id="site-alert-dismiss-btn"
        class="site-alert-dismiss"
        aria-label="Dismiss alert">
        &times;
      </button>
    </div>
  </section>
<?php endif; ?>