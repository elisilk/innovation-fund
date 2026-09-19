<section class="section-impact-stats">
  <?php if (have_rows('stats')) : ?>
    <div class="section-impact-stats__inner">
      <?php while (have_rows('stats')) : the_row();
        $stat_value = get_sub_field('stat_value');
        $stat_description = get_sub_field('stat_description');
      ?>
        <div class="stat">
          <div class="stat__value"><?php echo $stat_value; ?></div>
          <div class="stat__description"><?php echo $stat_description; ?></div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>