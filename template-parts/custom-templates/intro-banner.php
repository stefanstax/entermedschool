<section class="container-fluid">
  <div class="bg--gradient container_custom row justify-content-between gx-0">
    <div class="col-12 col-lg-12 custom--block mx-auto">
      <h1 id="list-item-1" class="w-100 fw ts80 lh70">Everyone deserves an equal chance.</h1>
      <p class="ts20">We are an educational organisation with the mission to connect and educate current and future medical students
        worldwide.
      </p>
      <div class="button--group">
        <?php if (!is_user_logged_in()) : ?>
          <a href="https://entermedschool.com/registration/" target="_blank"><strong>Access free medical materials
              today!</strong></a>
        <? endif; ?>
        <?php
        function decideWhich()
        {
          $user = wp_get_current_user();
          if (in_array('imat_exam', (array) $user->roles)) {
            echo do_shortcode('[course_inprogress course_id="914"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/imat/lessons/study-of-life/">Continue IMAT 2022 All in One </a> [/course_inprogress]');
            echo do_shortcode('[course_notstarted course_id="914"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/imat/lessons/study-of-life/">Enroll In IMAT 2022 All in One </a> [/course_notstarted]');
          } else if (in_array('neet_exam', (array) $user->roles)) {
            echo do_shortcode('[course_inprogress course_id="14655"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/neetug/lessons/neet-2020/">Continue NEET-UG 2022 1000`s of Practice Questions </a> [/course_inprogress]');
            echo do_shortcode('[course_notstarted course_id="14655"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/neetug/lessons/neet-2020/">Enroll In NEET-UG 2022 1000`s of Practice Questions </a> [/course_notstarted]');
          } else if (in_array('bmat_exam', (array) $user->roles)) {
            echo do_shortcode('[course_inprogress course_id="13610"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/bmat-past-papers-worked-solutions/lessons/bmat-past-papers-worked-solutions-section-1/">Continue BMAT Worked Solutions </a> [/course_inprogress]');
            echo do_shortcode('[course_notstarted course_id="13610"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/bmat-past-papers-worked-solutions/lessons/bmat-past-papers-worked-solutions-section-1/">Enroll In BMAT Worked Solutions </a> [/course_notstarted]');
          } else if (in_array('subscriber', (array) $user->roles)) {
            echo do_shortcode('[course_inprogress course_id="326"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/study-techniques/lessons/introduction-get-to-know-me/">Continue Study Techniques </a> [/course_inprogress]');
            echo do_shortcode('[course_notstarted course_id="326"] <a class="course--dynamic" href="https://staging.entermedschool.com/courses/study-techniques/lessons/introduction-get-to-know-me/">Enroll In Study Techniques </a> [/course_notstarted]');
          }
        }
        decideWhich();
        ?>
        <a href="https://patreon.com/arihoresh" target="_blank" class="button--secondary fb">Support the cause</a>
      </div>
    </div>
  </div>
</section>