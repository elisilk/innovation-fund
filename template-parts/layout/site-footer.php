<footer id="footer" class="site-footer">
  <div class="site-footer__main bg-primary">
    <div class="container">
      <h2 class="visually-hidden">Further Information on the BHS Innovation Fund</h2>

      <div>
        <?php the_theme_icon('chatbubbles-outline', array('icon-ui', 'icon-chatbubbles-outline')); ?>
        <h3>Contact</h3>
        <address>
          <a href="mailto:bhsinnovationfund@psbma.org">bhsinnovationfund@psbma.org</a>
          <a href="tel:617-713-5201">617-713-5201</a>
          <a href="https://maps.app.goo.gl/N5Uzbado8s4ytenFA">
            115 Greenough St<br>Brookline, MA 02445
          </a>
        </address>
      </div>

      <div>
        <?php the_theme_icon('people-outline', array('icon-ui', 'icon-people-outline')); ?>
        <h3>Follow</h3>
        <div class="site-footer__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'social-menu',
          )); ?>
        </div>
      </div>

      <div>
        <?php the_theme_icon('laptop-outline', array('icon-ui', 'icon-laptop-outline')); ?>
        <h3>Connect</h3>
        <a class="button" href="https://docs.google.com/forms/d/e/1FAIpQLSd-E429F6JQIctwUuyTYnGEksqG-riLhewTjBBg5m-1xzcR0A/viewform">
          Join Our Email List
        </a>
      </div>

      <div>
        <?php the_theme_icon('link-outline', array('icon-ui', 'icon-link-outline')); ?>
        <h3>Quicklinks</h3>
        <div class="site-footer__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container'      => 'nav',
          )); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer__banner bg-secondary">
    <div class="container">
      <p>&copy; 2026 BHS Innovation Fund</p>
    </div>
  </div>
</footer>