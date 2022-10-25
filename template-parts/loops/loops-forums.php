<?php
if (is_page("imat")) { ?>
    <h2>IMAT Exam - Forums</h2>
    <div class="scroller">
        <?php echo do_shortcode('[bbp-single-forum id="305"]'); ?>
    </div>
<?php } elseif (is_page("neet")) { ?>
    <h2>NEET Exam - Forums</h2>
    <div class="scroller">
        <?php echo do_shortcode('[bbp-single-forum id="303"]'); ?>
    </div>
<?php } elseif (is_page("bmat")) { ?>
    <h2>BMAT Exam - Forums</h2>
    <div class="scroller">
        <?php echo do_shortcode('[bbp-single-forum id="15882"]'); ?>
    </div> <?php
        } ?>