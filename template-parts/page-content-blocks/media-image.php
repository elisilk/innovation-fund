<?php
// $image_id = $args['image_id'] ?? 0;
$image_id = get_sub_field('image') ?? 0;

if (! $image_id) {
  return;
}

$caption = wp_get_attachment_caption($image_id);
$credit  = get_field('credit', $image_id);
?>

<figure class="media-image has-inline-size-md has-flow-space-lg">
  <?php
  echo wp_get_attachment_image(
    $image_id,
    'content-image',
    false,
    [
      'class' => 'media-image__img',
    ]
  );
  ?>

  <?php if ($caption || $credit) : ?>
    <figcaption class="media-image__caption">
      <?php if ($caption) : ?>
        <span class="media-image__text">
          <?php echo esc_html($caption); ?>
        </span>
      <?php endif; ?>

      <?php if ($credit) : ?>
        <span class="media-image__credit">
          Credit: <?php echo esc_html($credit); ?>
        </span>
      <?php endif; ?>
    </figcaption>
  <?php endif; ?>
</figure>