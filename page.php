<?php get_header(); ?>

<main id="main" class="site-main">
  <?php if (have_rows('page_sections')) : ?>
    <article class="page" aria-labelledby="page-title">
      <!-- page header section -->
      <?php
      the_row();
      $template = 'template-parts/sections/'
        . str_replace('_', '-', get_row_layout());
      if (locate_template($template . '.php')) {
        get_template_part($template);
      }
      ?>

      <!-- page content sections -->
      <?php if (have_rows('page_sections')) : ?>
        <div class="page__main">
          <?php while (have_rows('page_sections')) : the_row(); ?>
            <?php
            $template = 'template-parts/sections/'
              . str_replace('_', '-', get_row_layout());
            if (locate_template($template . '.php')) {
              get_template_part($template);
            }
            ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </article>
  <?php endif; ?>
</main>

<?php get_footer(); ?>