<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post<?php echo has_post_thumbnail() ? ' post--has-featured-image' : ''; ?>" aria-labelledby="post-title">
    <header class="post__header entry-content has-block-space-lg">
      <div class="post__header__inner flow-content<?php echo has_post_thumbnail() ? ' has-inline-size-lg' : ''; ?>">
        <hgroup>
          <?php
          $educatorDept = get_field('department');
          if (is_array($educatorDept)) : ?>
            <div class="post__eyebrow"><?php echo $educatorDept['label']; ?></div>
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