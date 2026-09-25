<div class="block-highlights">
  <?php if (have_rows('highlights')) : ?>
    <div class="block-highlights__inner">
      <?php while (have_rows('highlights')) : the_row();
        $highlight_heading = get_sub_field('heading');
        $highlight_description = get_sub_field('description');
      ?>
        <div class="highlight">
          <div class="highlight__heading"><?php echo esc_html($highlight_heading); ?></div>
          <div class="highlight__description"><?php echo esc_html($highlight_description); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>