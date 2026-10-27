<?php
$page_title = get_the_title();

$page_header = get_field('page_header');

$hero_headline = $page_header['hero_headline'];
$hero_image = $page_header['hero_image'];
$hero_cta_link = $page_header['hero_cta_link'];

$heading = $hero_headline ?: $page_title;
?>
<header class="page__header section-hero">
  <div class="hero__text">
    <div class="hero__text-inner flow-content">
      <h1 id="page-title" class="hero__headline">
        <?php echo esc_html($heading); ?>
      </h1>

      <?php if (is_array($hero_cta_link)) :
        $link_url    = $hero_cta_link['url'];
        $link_title  = $hero_cta_link['title'];
        $link_target = !empty($hero_cta_link['target']) ? $hero_cta_link['target'] : '_self';
      ?>
        <a
          href="<?php echo esc_url($link_url); ?>"
          class="button hero__button"
          target="<?php echo esc_attr($link_target); ?>"
          <?php echo $link_target === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
          <?php echo esc_html($link_title); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>

  <?php
  if (!empty($hero_image)): ?>
    <img class="hero__image" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
  <?php endif; ?>
</header>