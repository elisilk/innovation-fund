<header class="page__header section-title content-container flow">
  <h1 id="page-title"><?php the_sub_field('title'); ?></h1>
  <?php
  $intro = get_sub_field('intro');
  if ($intro):
  ?>
    <p><?php echo esc_html($intro); ?></p>
  <?php endif; ?>
</header>