<?php
add_theme_support('post-thumbnails');


function load_blog_posts_ajax() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    // Consulta personalizada para las publicaciones
    $args = array(
        'posts_per_page' => 8, // Cantidad de publicaciones por página
        'paged'          => $paged
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4">
                <div class="item-blog">
                    <div class="image-blog">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                                <img src="<?php bloginfo('template_url') ?>/assets/img/default-image.png">
                            <?php endif; ?>
                        </a>
                        <span><?php the_category(', '); ?></span>
                    </div>
                    <div class="text-blog">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 13, '...'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile;
    else :
        echo '<p>' . esc_html__('Lo siento, no hay más entradas.', 'text-domain') . '</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_load_blog_posts', 'load_blog_posts_ajax');
add_action('wp_ajax_nopriv_load_blog_posts', 'load_blog_posts_ajax');