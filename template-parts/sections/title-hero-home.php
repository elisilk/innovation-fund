<header class="page__header section-hero-home">
  <h1 class="visually-hidden" id="page-title"><?php the_sub_field('title'); ?></h1>

  <div class="hero__text">
    <div class="hero__text-inner flow">
      <div class="hero__headline">
        <?php the_sub_field('headline'); ?>
      </div>
      <?php
      $button_link = get_sub_field('button_link');
      if ($button_link):
        $link_url = $button_link['url'];
        $link_title = $button_link['title'];
        $link_target = $button_link['target'] ? $button_link['target'] : '_self';
      ?>
        <a class="button hero__button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
  </div>

  <?php
  $image = get_sub_field('image');
  if (!empty($image)): ?>
    <img class="hero__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
</header>