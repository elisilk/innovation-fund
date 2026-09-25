<?php while (have_rows('page_sections')) : the_row();
  $section_background = get_sub_field('background');
  $section_padding = get_sub_field('vertical_padding');
  $section_content = get_sub_field('content_blocks');

  $section_classes = [
    'section',
    'section--background-' . $section_background,
    'section--padding-' . $section_padding,
  ];
?>
  <section class="<?php echo esc_attr(implode(' ', $section_classes)); ?>">
    <div class="section__inner">
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
    </div>
  </section>
<?php endwhile; ?>