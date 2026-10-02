<?php get_header(); ?>

<main id="main" class="archive">
  <div class="entry-content flow-content has-block-space-lg">
    <header class="page__header section-title flow-content">
      <?php
      the_archive_title('<h1 class="page-title">', '</h1>');
      the_archive_description('<div class="archive-description">', '</div>');
      ?>
    </header>

    <div class="flow-content">
      <?php if (have_posts()) : ?>
        <ul class="has-inline-size-lg flow-content">
          <?php while (have_posts()) : the_post(); ?>
            <li>
              <?php
              get_template_part('template-parts/content', get_post_format());
              ?>
              <?php echo get_post_format(); ?>
            </li>
          <?php endwhile; ?>
          <?php the_posts_navigation(); ?>
        </ul>
      <?php else : ?>
        <!-- Displayed if no posts match the archive criteria -->
        <?php get_template_part('template-parts/content', 'none'); ?>
      <?php endif; ?>

      <section aria-labelledby="archives-by-month-heading">
        <h2 id="archives-by-month-heading">Archives by Month:</h2>
        <ul>
          <?php wp_get_archives('type=monthly'); ?>
        </ul>
      </section>

      <section aria-labelledby="archives-by-category-heading">
        <h2 id="archives-by-category-heading">Archives by Category:</h2>
        <ul>
          <?php wp_list_categories(); ?>
        </ul>
      </section>

      <footer>
        <p>Developer note: archive.php</p>
      </footer>
    </div>
  </div>
</main>

<?php get_footer(); ?>