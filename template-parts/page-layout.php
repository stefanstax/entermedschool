<!-- 
    Template Name: Page Template
-->

<?php get_header(); ?>

<!-- Function to decide which page on which pages -->

<?php
if (is_page('33276')) : get_template_part('/imat-page', 'page');
elseif (is_page('27295')) : get_template('/homepage-page', 'page');
elseif (is_page('33287')) : get_template_part('/neet-page', 'page');
elseif (is_page('33574')) : get_template_part('/privacypolicy-page', 'page');
elseif (is_page('33577')) : get_template_part('/representatives-page', 'page');
else : get_template_part('/team-page', 'page');
endif;
?>

<?php get_footer(); ?>