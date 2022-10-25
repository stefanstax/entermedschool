<?php
/*    
    Template Name: Home Page | Remodel
*/
?>

<main>
    <?php get_template_part("/template-parts/custom-templates/intro-banner", "page"); ?>

    <?php get_template_part("/template-parts/custom-templates/home-exams", "page"); ?>

    <?php get_template_part("/template-parts/custom-templates/home-testimonials", "page"); ?>

    <!-- Disabled per request / Ari - 10/10/2021 - Confirmation before making functional -->
    <!-- <?php echo do_shortcode('[fluentform type="conversational" id="5"]'); ?> -->

    <?php get_template_part("/template-parts/custom-templates/home-representatives", "page"); ?>
</main>