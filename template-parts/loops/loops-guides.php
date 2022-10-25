<?php
if (is_page("imat")) {
    $args = array(
        'tag' => "imat-guide", // Here is where is being filtered by the tag you want
        'orderby' => 'publish_date',
        'order' => 'DESC'
    );
} elseif (is_page("neet")) {
    $args = array(
        'tag' => "neet-guide", // Here is where is being filtered by the tag you want
        'orderby' => 'publish_date',
        'order' => 'DESC'
    );
} elseif (is_page("bmat")) {
    $args = array(
        'tag' => "bmat-guide", // Here is where is being filtered by the tag you want
        'orderby' => 'publish_date',
        'order' => 'DESC'
    );
}

$guides_written = new WP_Query($args);
?>

<?php
if ($guides_written->have_posts()) : while ($guides_written->have_posts()) : $guides_written->the_post(); ?>
        <div class="tag--block">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('class' => 'exam--articles-img', 'alt' => get_the_title())); ?>
            <?php endif; ?>
            <div class="tag--content">
                <h4><?php echo the_title(); ?></h4>
                <p><?php echo the_excerpt(); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" class="tag--link">
                Read Now
            </a>
        </div>
    <?php endwhile;
else : ?>
    <div class="no--posts">
        <h3>We've searched for the Guides.</h3>
        <p>Sadly we have not found anything. Stay tuned, we'll surely have this column filled in a matter of days.</p>
        <p>If you believe this behavior shouldn't happen, write to us.</p>
        <?php echo do_shortcode('[fluentform_modal form_id="12" btn_text="Bug Report Form" css_class="bug-report"]'); ?>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>