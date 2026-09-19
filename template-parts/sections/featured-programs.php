<section class="section-featured-programs flow content-container container--mb">
  <header>
    <h2 class="section__heading container--text">
      <?php the_sub_field('heading'); ?>
    </h2>
  </header>

  <?php
  $post_type = 'program';
  $post_type_label = ucfirst($post_type) . "s";

  $args = array(
    'post_type'      => $post_type,
    'posts_per_page' => 6,
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
      <?php while ($posts->have_posts()) : ?>
        <li>
          <?php
          $posts->the_post();
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

  <a class="button" href="/programs">All Programs</a>
</section>