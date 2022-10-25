<!-- 
    Template Name: Blog Template
-->


<!-- Function to decide which blogs on which pages -->
<?php get_header(); ?>
<?php 
if(is_page('32555')):get_template_part('/blog-imat', 'page'); 
else:get_template_part('/blog-neet', 'page');
endif;
?>
<?php get_footer(); ?>

