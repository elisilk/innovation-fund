<article class="program-card card">
  <div class="card__text">
    <hgroup>
      <?php
      $programType = get_field('program_type');
      if (is_array($programType)) : ?>
        <p class="card__eyebrow"><?php echo $programType['label']; ?></p>
      <?php endif; ?>

      <h3 class="card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </hgroup>

    <div class="card__excerpt"><?php the_excerpt(); ?></div>

    <div class="tags">
      <div class="tag tag--year"><?php echo get_field('year_funded'); ?></div>
      <?php if (get_field('is_currently_funded')) : ?>
        <div class="tag tag--current">Currently Funded</div>
      <?php elseif (get_field('is_active')) : ?>
        <div class="tag tag--active">Active</div>
      <?php endif; ?>
    </div>
  </div>

  <div class="card__img">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/images/logo/BIF-Logo-Top-Color-Transparent.png" alt="Default Program Image Placeholder" class="placeholder" />
    <?php endif; ?>
  </div>
</article>