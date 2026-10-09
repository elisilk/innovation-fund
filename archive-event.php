<?php get_header(); ?>

<main id="main" class="event-archive">
  <div class="entry-content flow-content has-block-space-lg">
    <header class="page__header section-title flow-content">
      <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <div class="flow-content">
      <?php
      $post_type = 'event';
      $post_type_label = ucfirst($post_type) . "s";
      $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'meta_key'       => 'event_date',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
      );
      $query = new WP_Query($args);

      $grouped_events = array();

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $raw_date = get_field('event_date', false, false);
          if ($raw_date) {
            $year  = (int) substr($raw_date, 0, 4);
            $month = (int) substr($raw_date, 4, 2);
            if ($month >= 7) {
              $school_year = $year . '-' . ($year + 1);
            } else {
              $school_year = ($year - 1) . '-' . $year;
            }
            $grouped_events[$school_year][] = $post;
          }
        endwhile;
        wp_reset_postdata();
      endif;

      if (!empty($grouped_events)) :
        krsort($grouped_events);
        foreach ($grouped_events as $year_label => $posts) : ?>
          <div class="flow-content">
            <h2>School Year: <?php echo esc_html($year_label); ?></h2>

            <ul>
              <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <li>
                  <?php the_field('event_date'); ?> -
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php endforeach;
              wp_reset_postdata(); ?>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div>
          <p>Sorry, no <?php echo $post_type_label; ?> were found!</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>