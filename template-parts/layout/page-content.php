<?php while (have_rows('page_sections')) : the_row();
  $section_background = get_sub_field('background');
  $section_block_spacing = get_sub_field('block_spacing');
  $section_content = get_sub_field('content_blocks');

  $section_classes = [
    'section',
    'is-background-' . $section_background,
    'has-block-space-' . $section_block_spacing,
  ];
?>
  <section class="<?php echo esc_attr(implode(' ', $section_classes)); ?> entry-content">
    <?php if (have_rows('content_blocks')) : ?>
      <?php while (have_rows('content_blocks')) : the_row(); ?>
        <?php
        $block_layout = get_row_layout();
        $block_template = 'template-parts/page-content-blocks/'
          . str_replace('_', '-', $block_layout);
        if (locate_template($block_template . '.php')) {
          get_template_part($block_template);
        }
        ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
<?php endwhile; ?>