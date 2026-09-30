<figure class="post__featured-image has-flow-space-lg flow-content">
  <?php the_post_thumbnail('large'); ?>
  <?php
  $thumbnail_id = get_post_thumbnail_id();
  $credit = get_field('credit', $thumbnail_id);
  if (get_the_post_thumbnail_caption() || $credit) : ?>
    <figcaption class="has-flow-space-xs">
      <?php if (get_the_post_thumbnail_caption()) : ?>
        <span class="wp-element-caption">
          <?php the_post_thumbnail_caption(); ?>
        </span>
      <?php endif; ?>

      <?php if (!empty($credit)) : ?>
        <span class="credit">
          <?php echo 'Credit: ' . esc_html($credit); ?>
        </span>
      <?php endif; ?>
    </figcaption>
  <?php endif; ?>
</figure>