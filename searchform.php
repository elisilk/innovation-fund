<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <div>
    <label class="screen-reader-text" for="s"><?php _x('Search for:', 'label'); ?></label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder'); ?>" />
    <button type="submit" id="searchsubmit" class="button"><?php echo esc_html_x('Search', 'submit button'); ?></button>
  </div>
</form>