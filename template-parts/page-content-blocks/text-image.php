<div class="block-text-image" aria-labelledby="block-heading">
  <div class="block-text-image__inner">
    <div class="block-text-image__text flow">
      <?php
      $heading = get_sub_field('heading');
      $text = get_sub_field('text');
      ?>
      <h2 <?php if (!get_sub_field('show_heading')) : ?>class="visually-hidden" <?php endif; ?> id="block-heading"><?php echo esc_html($heading); ?></h2>

      <?php echo $text; ?>

      <?php
      $button_link = get_sub_field('button_link');
      if ($button_link):
        $link_url = $button_link['url'];
        $link_title = $button_link['title'];
        $link_target = $button_link['target'] ? $button_link['target'] : '_self';
      ?>
        <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>

    <?php
    $image = get_sub_field('image');
    if (!empty($image)): ?>
      <img class="block-text-image__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>
</div>