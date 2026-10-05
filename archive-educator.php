<?php get_header(); ?>

<main id="main" class="educator-archive">
  <div class="entry-content flow-content has-block-space-lg">
    <header class="page__header section-title flow-content">
      <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <div>
      <?php
      $post_type = 'educator';
      $post_type_label = ucfirst($post_type) . "s";
      $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'order'     => 'ASC',
      );
      $query = new WP_Query($args);
      $posts = $query->posts;

      if (!empty($posts)):

        // sort the posts by last name
        usort($posts, function ($a, $b) {
          // Get full titles, remove leading/trailing spaces
          $title_a = trim(get_the_title($a->ID));
          $title_b = trim(get_the_title($b->ID));

          // Split titles into arrays of individual words
          $words_a = explode(' ', $title_a);
          $words_b = explode(' ', $title_b);

          // Grab last element (word) from each array
          $last_word_a = end($words_a);
          $last_word_b = end($words_b);

          // Perform a case-insensitive string comparison
          return strcasecmp($last_word_a, $last_word_b);
        });
      ?>
        <ul>
          <?php foreach ($posts as $post):
            setup_postdata($post); ?>
            <li>
              <?php the_title('<a href="' . esc_url(get_permalink()) . '">', '</a>'); ?>
              <?php
              $educatorDept = get_field('department');
              if (is_array($educatorDept)) : ?>
                <span>(<?php echo $educatorDept['label']; ?>)</span>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else : ?>
        <div>
          <p>Sorry, no <?php echo $post_type_label; ?> were found!</p>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>