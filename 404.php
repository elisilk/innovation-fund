<?php get_header(); ?>

<main id="main" class="site-main">
  <div class="container container--mbe flow">
    <header class="page__header section-title container container--text flow">
      <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'text-domain'); ?></h1>
    </header>

    <section class="flow">
      <p>The page you were looking for at <strong><?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?></strong> does not exist.</p>

      <p><?php _e('Maybe try a search?', 'text-domain'); ?></p>
      <?php get_search_form(); ?>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="button">
        <?php _e('Return to Home', 'text-domain'); ?>
      </a>
    </section>


    <?php
    $post_types = array('post', 'page', 'program');
    foreach ($post_types as $post_type) {
      $post_type_label = ucfirst($post_type) . "s"
    ?>
      <!-- <?php echo $post_type_label; ?> -->
      <section class="flow">
        <header>
          <h2><?php echo $post_type_label; ?></h2>
        </header>

        <?php
        $args = array(
          'post_type'      => $post_type,
          'posts_per_page' => -1,
          'orderby'        => 'title',
          'order'          => 'ASC'
        );
        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) : ?>
          <div class="card-list">
            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

              <?php if ($post_type == 'program') :
                get_template_part(
                  'template-parts/components/cards/program-card'
                );
              else : ?>

                <article class="post flow">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
                  <header>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                  </header>

                  <?php $post_excerpt = get_the_excerpt();
                  if (! empty($post_excerpt)) : ?>
                    <div>
                      <?php echo $post_excerpt; ?>
                    </div>
                  <?php endif; ?>
                </article>
              <?php endif; ?>

            <?php endwhile;
            wp_reset_postdata();
            ?>
          </div>
        <?php else : ?>
          <div>
            <p>Sorry, no <?php echo $post_type_label; ?> were found!</p>
          </div>
        <?php endif; ?>
      </section>
    <?php } ?>

    <footer>
      <p>Developer note: 404.php</p>
    </footer>
  </div>
</main>

<?php get_footer(); ?>