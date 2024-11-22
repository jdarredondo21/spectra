<?php get_header() ?>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a></li>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="blog-internal">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="content-internal-top">
          <div class="button-blog">
            <?php echo get_the_category_list(', '); ?>
          </div>
          <h1><?php the_title(); ?></h1>
          <p>PUBLICADO EL <?php echo get_the_date(); ?></p>
          <div class="share-socials">
            <p>Compartir</p>
            <ul>
              <li><a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-wpp-blog.svg"></a></li>
              <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-x-blog.svg"></a></li>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-facebook-blog.svg"></a></li>
              <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-linkedin-blog.svg"></a></li>
            </ul>
          </div>
          <div class="image-top">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
              <img src="<?php bloginfo('template_url') ?>/assets/img/banner-blog.png">
            <?php endif; ?>
          </div>
        </div>
        <div class="content-internal-info">
          <div class="description">
            <?php the_content(); ?>
          </div>
          <div class="share-socials">
            <p>Compartir</p>
            <ul>
              <li><a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-wpp-blog.svg"></a></li>
              <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-x-blog.svg"></a></li>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-facebook-blog.svg"></a></li>
              <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/icon-linkedin-blog.svg"></a></li>
            </ul>
          </div>
          <div class="content-next-after">
            <div><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/dot-pagination.svg">
                <p>Volver</p>
              </a></div>
            <div><?php next_post_link('%link', 'Continuar al siguiente blog <img src="' . get_bloginfo('template_url') . '/assets/img/dot-pagination.svg">'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="interest">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="tittle-interest">
          <h1>Te puede interesar</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $categories = wp_get_post_categories($post->ID);
      $args = array(
        'category__in' => $categories,
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'caller_get_posts' => 1
      );
      $related_posts = new WP_Query($args);
      if ($related_posts->have_posts()) :
        while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
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
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;
      else : ?>
        <p><?php esc_html_e('No hay entradas relacionadas disponibles.'); ?></p>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php get_footer() ?>