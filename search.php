<?php get_header(); ?>

<main id="main" class="site-main">
  <div class="container flow">

    <?php if (have_posts()) : ?>
      <header class="page-header">
        <h1 class="page-title">
          <?php printf(esc_html__('Search Results for: %s', 'text-domain'), '<span>' . get_search_query() . '</span>'); ?>
        </h1>
      </header>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content', 'search'); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>
      <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'text-domain'); ?></p>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <footer>
      <p>Developer note: search.php</p>
    </footer>
  </div>
</main>

<?php get_footer(); ?>