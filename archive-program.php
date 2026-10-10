<?php get_header(); ?>

<main id="main" class="program-archive">
  <div class="entry-content flow-content has-block-space-lg">
    <header class="page__header section-title flow-content">
      <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <section class="filterable-card-list has-inline-size-md flow-content has-block-space-lg">
      <h2>Timeline</h2>

      <?php
      $post_type = 'program';
      $post_type_label = ucfirst($post_type) . "s";
      $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'meta_key'  => 'year_funded',
        'orderby'   => array(
          'meta_value_num' => 'DESC',
          'post_title' => 'ASC',
        ),
        'order'     => 'DESC',
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()):
        $current_year = '';
      ?>
        <ul class="timeline">
          <?php while ($posts->have_posts()) :  $posts->the_post();
            // $post_year = get_the_date('Y');
            $post_year = get_field('year_funded');

            if ($post_year !== $current_year) {
              if ($current_year !== '') {
                echo '</li>';
                echo '</ul>';
              }

              $current_year = $post_year;
              echo '<li class="timeline__year">';
              echo '<div class="year">' . esc_html($current_year) . '</div>';
              echo '<ul>';
            }
          ?>
            <li class="timeline__item" <?php
                                        $programType = get_field('program_type');
                                        if (is_array($programType)) {
                                          echo "data-type=" . $programType['value'];
                                        } ?>>
              <?php
              get_template_part(
                'template-parts/components/program-list-item'
              );
              ?>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <div>
          <p>Sorry, no <?php echo $post_type_label; ?> were found!</p>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
    </section>

    <section class="filterable-card-list has-inline-size-lg flow-content">
      <h2>Filterable Card List</h2>

      <div class="filter-controls">
        <button class="filter-btn active" data-filter='all'><span>All</span></button>
        <button class="filter-btn" data-filter='course'><span>Course</span></button>
        <button class="filter-btn" data-filter='initiative'>Initiative</button>
        <button class="filter-btn" data-filter='fellow'>Fellow</button>
        <button class="filter-btn" data-filter='summit'>Summit</button>
        <button class="filter-btn" data-filter='planning'>Planning</button>
      </div>

      <form role="search" class="search-form" id="live-search-form">
        <label class="visually-hidden" for="live-search-input">Search the programs:</label>
        <input type="search" name="q" id="live-search-input" placeholder="Type to filter list...">
      </form>

      <?php
      $post_type = 'program';
      $post_type_label = ucfirst($post_type) . "s";

      $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'meta_key'  => 'year_funded',
        'orderby'   => array(
          'meta_value_num' => 'DESC',
          'post_title' => 'ASC',
        ),
        'order'     => 'DESC',
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()): ?>
        <ul class="card-list has-block-space-lg">
          <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <li class="filterable-list-item" <?php
                                              $programType = get_field('program_type');
                                              if (is_array($programType)) {
                                                echo "data-type=" . $programType['value'];
                                              } ?>>
              <?php
              get_template_part(
                'template-parts/components/program-card'
              );
              ?>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <div>
          <p>Sorry, no <?php echo $post_type_label; ?> were found!</p>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
    </section>
  </div>

</main>

<?php get_footer(); ?>