<?php
$page_title = get_the_title();
$page_header = get_field('page_header');
$display_title = $page_header['display_title'];
$intro_text = $page_header['intro_text'];

$heading = $display_title ?: $page_title;
?>

<header class="page__header section-title content-container flow">
  <h1 id="page-title">
    <?php echo esc_html($heading); ?>
  </h1>
  <?php if ($intro_text): ?>
    <p><?php echo esc_html(trim($intro_text)); ?></p>
  <?php endif; ?>
</header>