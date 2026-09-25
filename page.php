<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="page" aria-labelledby="page-title">

    <!-- page header section -->
    <?php
    $page_header = get_field('page_header');
    if ($page_header) {
      $header_type = $page_header['header_type'] ?: 'simple';
      if ($header_type === 'hero') {
        get_template_part('template-parts/page-header/title-hero');
      } else {
        get_template_part('template-parts/page-header/title-simple');
      }
    }
    ?>

    <?php if (have_rows('page_sections')) : ?>
      <!-- page content sections -->
      <div class="page__main">
        <?php get_template_part('template-parts/layout/page-content'); ?>
      </div>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>