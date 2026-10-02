<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title('<a href="' . esc_url(get_permalink()) . '">', '</a>'); ?>

  <?php if (false): ?>
    <!-- all this has been hidden for now, not executed -->
    <header class="entry-header">
      <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
    </header>

    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>

    <footer class="entry-footer">
      <span class="posted-on"><?php the_date(); ?></span>
      <span class="author">By <?php the_author(); ?></span>
    </footer>
  <?php endif; ?>
</article>