<?php
if (is_page("imat")) { ?>
    <h2>IMAT Courses</h2>
    <?php echo do_shortcode('[ld_course_list course_category_name="imat"]'); ?>
    <h4>IMAT Past Papers – Simulator & Worked Solutions</h4>
    <?php echo do_shortcode('[course_content course_id="13602"]'); ?>
<?php
} elseif (is_page("neet")) { ?>
    <h2>NEET Courses</h2>
    <?php echo do_shortcode('[ld_course_list course_category_name="neet-exam"]'); ?>
    <?php echo do_shortcode('[ld_course_list course_category_name="study-techniques"]'); ?>
    <div class="scroller">
        <?php echo do_shortcode('[course_content course_id="14655"]'); ?>
    </div>
<?php
} elseif (is_page("bmat")) { ?>
    <h2>BMAT Courses</h2>
    <?php echo do_shortcode('[ld_course_list course_category_name="bmat-exam"]'); ?>
    <?php echo do_shortcode('[ld_course_list course_category_name="study-techniques"]'); ?>
    <?php echo do_shortcode('[course_content course_id="13610"]'); ?>
<?php
} ?>