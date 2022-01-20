<footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
            <a href="<?php the_field('Tel', 2); ?>">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                <?php the_field('Tel'); ?>
                </span>
              </a>
              <a href="mailto:<?php the_field('email'); ?>">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  <?php the_field('email', 2); ?>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
            <?php the_field ('footer'); ?>
            </a>
            <?php the_field ('footer_title'); ?>

            <div class="footer_social">
              <a href="mailto:<?php the_field('footer_socil_face'); ?>">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="mailto:<?php the_field('footer_socil_twitt'); ?>">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="mailto:<?php the_field('footer_socil_inst'); ?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="map_container">
            <div class="map">
            <?php the_field('Map', 2); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>