<?php get_header(); ?>

<main id="main" class="site-main">
  <article class="post" aria-labelledby="post-title">
    <header class="post__header<?php echo has_post_thumbnail() ? ' post__header--has-thumbnail' : ''; ?>">
      <div class="post__header-text subcontent-container flow">
        <h1 class="post__title" id="post-title"><?php the_title(); ?></h1>

        <?php if (has_excerpt()) : ?>
          <div class="post__excerpt"><?php the_excerpt(); ?></div>
        <?php endif; ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post__thumbnail"><?php the_post_thumbnail(); ?></div>
      <?php endif; ?>
    </header>

    <?php if (!empty($post->post_content)) : ?>
      <div class="post__main content-container flow">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>