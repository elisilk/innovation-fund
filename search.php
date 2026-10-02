<?php get_header(); ?>

<main id="main" class="search">
  <div class="entry-content flow-content has-block-space-lg">
    <header class="page-header">
      <h1 class="page-title">Search Results</h1>
    </header>

    <?php if (have_posts()) : ?>
      <div><?php printf(esc_html__('Search Results for: %s', 'text-domain'), '<span>' . get_search_query() . '</span>'); ?></div>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content', 'search'); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'text-domain'); ?></p>

    <?php endif; ?>

    <div class="flow-content">
      <h2>Try Another Search</h2>
      <?php get_search_form(); ?>
    </div>

    <footer>
      <p>Developer note: search.php</p>
    </footer>
  </div>
</main>

<?php get_footer(); ?>