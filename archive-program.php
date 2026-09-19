<?php get_header(); ?>

<main id="main" class="program-archive">
  <div class="content-container flow container--mbe">
    <header class="page__header section-title">
      <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <div class="filter-controls">
      <h2 class="visually-hidden">Filter by program type</h2>
      <button class="filter-btn active" data-filter='all'><span>All</span></button>
      <button class="filter-btn" data-filter='course'><span>Course</span></button>
      <button class="filter-btn" data-filter='initiative'>Initiative</button>
      <button class="filter-btn" data-filter='fellow'>Fellow</button>
      <button class="filter-btn" data-filter='summit'>Summit</button>
      <button class="filter-btn" data-filter='planning'>Planning</button>
    </div>

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
      <ul class="card-list is-regular-content">
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
          <li class="filterable-list-item" <?php
                                            $programType = get_field('program_type');
                                            if (is_array($programType)) {
                                              echo "data-type=" . $programType['value'];
                                            } ?>>
            <?php
            get_template_part(
              'template-parts/components/cards/program-card'
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
    wp_reset_query(); ?>

  </div>
</main>

<?php get_footer(); ?>