<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post<?php echo has_post_thumbnail() ? ' post--has-featured-image' : ''; ?>" aria-labelledby="post-title">
    <header class="post__header entry-content has-block-space-lg">
      <div class="post__header__inner flow-content<?php echo has_post_thumbnail() ? ' has-inline-size-lg' : ''; ?>">
        <h1 class="post__title" id="post-title"><?php the_title(); ?></h1>

        <?php if (has_excerpt()) : ?>
          <div class="post__excerpt"><?php the_excerpt(); ?></div>
        <?php endif; ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post__featured-image has-flow-space-lg">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
    </header>

    <?php if (!empty($post->post_content)) : ?>
      <div class="post__main entry-content flow-content has-block-space-lg">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>