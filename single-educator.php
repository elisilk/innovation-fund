<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post post--educator" aria-labelledby="post-title">
    <header class="post__header<?php echo has_post_thumbnail() ? ' post__header--has-thumbnail' : ''; ?>">
      <div class="post__header-text subcontent-container">
        <h1 class="post__title" id="post-title"><?php the_title(); ?></h1>

        <div class="educator__department"><?php echo get_field('department')['label']; ?></div>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post__thumbnail"><?php the_post_thumbnail(); ?></div>
      <?php endif; ?>
    </header>

    <div class="post__main content-container flow">

      <?php
      $programs = get_field('related_programs');
      if ($programs): ?>
        <p>Programs:
          <?php foreach ($programs as $i => $p):
            if ($i > 0) _e('•'); ?>
            <a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID); ?></a>
          <?php endforeach; ?>
        </p>
      <?php endif; ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>