<?php
//
// Template Name: Exams Page Template
//
get_header(); ?>

<main>
    <?php get_template_part("/template-parts/loops/loops-banner", "page"); ?>
    <div class="con-1200">
        <div class="loops-guides-articles">
            <div class="loops-guides">
                <?php get_template_part("/template-parts/loops/loops-titles-guides"); ?>
                <div class="scroller">
                    <?php get_template_part("/template-parts/loops/loops-guides", "page"); ?>
                </div>
            </div>
            <div class="loops-articles">
                <?php get_template_part("/template-parts/loops/loops-titles-articles"); ?>
                <div class="scroller">
                    <?php get_template_part("/template-parts/loops/loops-articles", "page"); ?>
                </div>
            </div>
        </div>
        <div class="loops-courses-forums">
            <div class="loops-courses">
                <?php get_template_part("/template-parts/loops/loops-courses", "page"); ?>
            </div>
            <div class="loops-forums">
                <?php get_template_part("/template-parts/loops/loops-forums", "page"); ?>
            </div>
        </div>
    </div>
    <?php
    if (!empty(get_the_content())) {
        the_content();
    }
    ?>
</main>

<?php get_footer(); ?>