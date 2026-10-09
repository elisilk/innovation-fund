<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post<?php echo has_post_thumbnail() ? ' post--has-featured-image' : ''; ?>" aria-labelledby="post-title">
    <header class="post__header entry-content has-block-space-lg">
      <div class="post__header__inner flow-content<?php echo has_post_thumbnail() ? ' has-inline-size-lg' : ''; ?>">
        <hgroup>
          <?php
          $eventType = get_field('event_type');
          if (is_array($eventType)) : ?>
            <div class="post__eyebrow"><?php echo $eventType['label']; ?></div>
          <?php endif; ?>
          <h1 class="post__title" id="post-title"><?php the_title(); ?></h1>
        </hgroup>

        <?php if (has_excerpt()) : ?>
          <div class="post__excerpt"><?php the_excerpt(); ?></div>
        <?php endif; ?>

        <?php if (has_post_thumbnail()) {
          get_template_part('template-parts/layout/featured-image');
        } ?>
      </div>
    </header>

    <div class="post__main entry-content flow-content has-block-end-space-xl">
      <?php $eventDate = get_field('event_date');
      if ($eventDate) :
        $date = new DateTime($eventDate);
      ?>
        <p><?php echo $date->format('F j, Y'); ?></p>
      <?php endif; ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>