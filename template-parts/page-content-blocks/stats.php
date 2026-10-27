<div class="block-stats has-inline-size-lg has-no-gutter">
  <?php if (have_rows('stat')) : ?>
    <?php while (have_rows('stat')) : the_row();
      $stat_value = get_sub_field('value');
      $stat_description = get_sub_field('description');
    ?>
      <div class="stat flow-content">
        <div class="stat__value"><?php echo esc_html($stat_value); ?></div>
        <div class="stat__description"><?php echo esc_html($stat_description); ?></div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>