<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post<?php echo has_post_thumbnail() ? ' post--has-featured-image' : ''; ?>" aria-labelledby="post-title">
    <header class="post__header entry-content has-block-space-lg">
      <div class="post__header__inner flow-content<?php echo has_post_thumbnail() ? ' has-inline-size-lg' : ''; ?>">
        <hgroup>
          <?php
          $programType = get_field('program_type');
          if (is_array($programType)) : ?>
            <div class="post__eyebrow"><?php echo $programType['label']; ?></div>
          <?php endif; ?>

          <h1 class="post__title" id="post-title"><?php the_title(); ?></h1>
        </hgroup>


        <?php if (has_excerpt()) : ?>
          <div class="post__excerpt"><?php the_excerpt(); ?></div>
        <?php endif; ?>

        <div class="post__tags tags">
          <div class="tag tag--year"><?php echo get_field('year_funded'); ?></div>
          <?php if (get_field('is_currently_funded')) : ?>
            <div class="tag tag--current">Currently Funded</div>
          <?php elseif (get_field('is_active')) : ?>
            <div class="tag tag--active">Active</div>
          <?php endif; ?>
        </div>

        <?php if (has_post_thumbnail()) {
          get_template_part('template-parts/layout/featured-image');
        } ?>
      </div>
    </header>

    <div class="post__main entry-content flow-content has-block-end-space-xl block-prose">
      <?php
      $educators = get_field('related_educators');
      if ($educators):
        // sort educators array by their name (the title)
        $order = array();
        foreach ($educators as $i => $row) {
          $fullName = get_the_title($row->ID);
          $nameParts = explode(" ", trim($fullName));
          $lastName = array_pop($nameParts);
          // $order[$i] = $fullName;
          $order[$i] = $lastName;
        }
        array_multisort($order, SORT_ASC, $educators); ?>
        <h2>Educators</h2>
        <ul>
          <?php foreach ($educators as $e): ?>
            <li>
              <a href="<?php echo get_permalink($e->ID); ?>"><?php echo get_the_title($e->ID); ?></a>
              <?php
              $educatorDept = get_field('department', $e->ID);
              if (!empty($educatorDept)) : ?>
                (<?php echo esc_html($educatorDept['label']); ?>)
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php
      $programSummary = get_field('summary');
      if ($programSummary) : ?>
        <h2>Program Summary</h2>
        <?php echo get_field('summary'); ?>
      <?php endif; ?>

      <?php if (have_rows('related_stories')) : ?>
        <h2>Related News</h2>
        <ul>
          <?php while (have_rows('related_stories')) : the_row();
            $story_title = get_sub_field('title');
            $story_url = get_sub_field('url');
            $story_publication = get_sub_field('publication');
            $story_date = get_sub_field('date');
          ?>
            <li>
              <a href="<?php echo esc_url($story_url); ?>"><?php echo esc_html($story_title); ?></a>, <?php echo esc_html($story_publication); ?>, <?php echo esc_html($story_date); ?>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>

      <?php
      $programNarrative = get_field('narrative');
      if ($programNarrative) : ?>
        <h2>More Info</h2>
        <?php echo apply_filters('the_content', $programNarrative); ?>
      <?php endif; ?>
    </div>

  </article>
</main>

<?php get_footer(); ?>