<?php
// Template Name: Tutoring
get_header();
get_template_part("template-parts/custom-templates/intro-banner-small", "page");
?>
<div class="container_custom">
    <?php echo do_shortcode('[fluentform id="13"]'); ?>
</div>
<?php get_footer(); ?>