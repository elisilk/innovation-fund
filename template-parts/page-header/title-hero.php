<?php
$page_title = get_the_title();

$page_header = get_field('page_header');

$hero_headline = $page_header['hero_headline'];
$hero_image = $page_header['hero_image'];
$hero_cta_label = $page_header['hero_cta_label'];
$hero_cta_link = $page_header['hero_cta_link'];

$heading = $hero_headline ?: $page_title;
?>
<header class="page__header section-hero">
  <div class="hero__text">
    <div class="hero__text-inner flow">
      <h1 id="page-title" class="hero__headline">
        <?php echo esc_html($heading); ?>
      </h1>
      <?php if ($hero_cta_label && $hero_cta_link): ?>
        <a class="button hero__button" href="<?php echo esc_url($hero_cta_link); ?>"><?php echo esc_html($hero_cta_label); ?></a>
      <?php endif; ?>
    </div>
  </div>

  <?php
  if (!empty($hero_image)): ?>
    <img class="hero__image" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
  <?php endif; ?>
</header>