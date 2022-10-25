<?php
$footer_widgets = buddyboss_theme_get_option('footer_widgets');
$footer_widgets_columns = buddyboss_theme_get_option('footer_widget_columns');
$footer_copyright = buddyboss_theme_get_option('footer_copyright'); ?>

<?php if ($footer_widgets) {
  if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')  || is_active_sidebar('footer-5')) : ?>
    <div class="footer-widget-area bb-footer">
      <div class="container">
        <div class="bb-grid">
          <?php if (is_active_sidebar('footer-1') && $footer_widgets_columns >= '1') : ?>
            <div class="footer-widget area-1">
              <?php dynamic_sidebar('footer-1'); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if (is_active_sidebar('footer-2') && $footer_widgets_columns >= '2') : ?>
            <div class="footer-widget area-2">
              <?php dynamic_sidebar('footer-2'); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if (is_active_sidebar('footer-3') && $footer_widgets_columns >= '3') : ?>
            <div class="footer-widget area-3">
              <?php dynamic_sidebar('footer-3'); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if (is_active_sidebar('footer-4') && $footer_widgets_columns >= '4') : ?>
            <div class="footer-widget area-4">
              <?php dynamic_sidebar('footer-4'); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if (is_active_sidebar('footer-5') && $footer_widgets_columns >= '5') : ?>
            <div class="footer-widget area-5">
              <?php dynamic_sidebar('footer-5'); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>
        </div>
      </div><!-- .widget-area -->
    </div>
<?php endif;
} ?>

<?php if (($footer_copyright) && (!is_singular('lesson')) && (!is_singular('llms_quiz')) &&  (!is_singular('llms_assignment')) &&  (!is_singular('llms_my_certificate'))) { ?>
  <footer class="footer-bottom bb-footer style-<?php echo buddyboss_theme_get_option('footer_style'); ?>">
    <div class="fl_width footer">
      <div class="footer--section container_custom">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-3 d-flex flex-column">
            <label for="">Popular Courses</label>
            <ul>
              <li><a href="https://entermedschool.com/courses/study-techniques/">Study Techniques</a></li>
              <li><a href="https://entermedschool.com/courses/imat/">IMAT Exam</a></li>
              <li><a href="https://entermedschool.com/courses/bmat-past-papers-worked-solutions/">BMAT
                  Exam</a></li>
              <li><a href="https://entermedschool.com/courses/usmle-step-1/">USMLE Step 1</a></li>
              <li><a href="https://entermedschool.com/courses/practice-questions/">Q Bank</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4 col-lg-3 d-flex flex-column">
            <label for="">Information</label>
            <ul>
              <li><a href="https://entermedschool.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="https://entermedschool.com/privacy-policy/">Terms of Service</a></li>
              <li><a href="https://www.patreon.com/AriHoresh" target="_blank" rel="noreferrer">Donate</a></li>
              <li><a href="https://entermedschool.com/privacy-policy/">Rules</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4 col-lg-3 d-flex flex-column">
            <label for="">Contact Us</label>
            <ul>
              <li><a href="mailto:ari@entermedschool.com">ari@entermedschool.com</a></li>
              <li><a href="mailto:contact@staxtalks.com/">Report a bug</a></li>
              <li>Pavia, Italy</li>
            </ul>
          </div>
          <div class="col-12 col-md-12 col-lg-3 d-flex flex-column align-items-start">
            <a class="mb-2" href="https://discord.gg/bN2AtM93Ax" target="_blank" rel="noreferrer">
              <img style="border-radius: 5px;" src="https://res.cloudinary.com/dnqicdh71/image/upload/v1633024972/EnterMedSchool/footer_discord-ems_link.png" alt="EnterMedschool Discord relationship">
            </a>
            <div class="social--icons">
              <a href="https://instagram.com/entermedschool" target="_blank" rel="noreferrer"><img style="width:25px; height:25px;" src="https://res.cloudinary.com/dnqicdh71/image/upload/v1633029056/EnterMedSchool/social-icons/vkfy8j9wjiof9mr0opke.svg" /></a>
              <a href="https://www.youtube.com/channel/UCCtKoblefUFJfQHUMvqA0kQ" target="_blank" rel="noreferrer"><img style="width:25px; height:25px;" src="https://res.cloudinary.com/dnqicdh71/image/upload/v1633029056/EnterMedSchool/social-icons/nzias71slzdslcqthkxx.svg" />
              </a>
            </div>
          </div>
          <div class="col-12 footer--intro mt-4">
            <p>EnterMedSchool.com is an educational organisation initiated by Ari Horesh.
              Some of the courses use materials from “OpenStax”, with permission (CC 4.0V). |
              By using our website, you agree to our: Terms of use , Privacy policy and Rules |
              By continuing to browse the site you are agreeing to our use
              of cookies to enhance your site experience and for analytical purposes</p>
            <p>P.IVA: IT02865360180 Pavia, Italy</p>
            <p>© 2022 – Ari Horesh | Website built and maintained by <a href="mailto:collab@staxtalks.com" target="_blank" style="color: #f9f9f9">Stefan Stax</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php } ?>