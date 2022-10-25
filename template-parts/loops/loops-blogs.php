<div class="fl_width blogs">
    <div class="blogs--section container_custom">
        <div class="blogs--section-layout">
            <?php

            if (is_page("imat-articles")) {
                $args = array(
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                    'category_name' => 'imat',
                );
            } else {
                $args = array(
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                    'category_name' => 'neet',
                );
            }

            $articles_written = new WP_Query($args);

            if ($articles_written->have_posts()) : while ($articles_written->have_posts()) : $guides_written->the_post(); ?>
                    <div class="blogs--section-layout_block">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                        <div class="layout_block-content">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'post-thumbnail', 'title' => 'Feature image']); ?>
                            <div class="block--content">
                                <div class="block-text">
                                    <p><?php the_category(); ?></p>
                                    <a class="featartlink" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                    <p class="blogwrap-excerpt"><?php echo substr(get_the_excerpt(), 0, 75); ?>...</p>
                                    <a class="blogwrap-link" href="<?php the_permalink(); ?>">Read now</a>
                                </div>
                                <div class="layout_block-reference">
                                    <p><?php the_author(); ?></p>
                                    <p><?php the_time('d,M,Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <div class="no--posts">
                    <h3>We've searched for the Articles.</h3>
                    <p>Sadly we have not found anything. Stay tuned, we'll surely have this column filled in a matter of days.</p>
                    <p>If you believe this behavior shouldn't happen, write to us.</p>
                    <?php echo do_shortcode('[fluentform_modal form_id="12" btn_text="Bug Report Form" css_class="bug-report"]'); ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>