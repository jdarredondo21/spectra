<?php get_header()
?>

<section class="blog"><img class="before-left" src="<?php bloginfo('template_url') ?>/assets/img/before-left-blog.png"><img class="before-right" src="<?php bloginfo('template_url') ?>/assets/img/before-right-blog.png">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="tittle-blog">
          <h1>Blog y noticias</h1>
          <p>Descubra nuestros últimos artículos y noticias sobre las ultimas tendencias sobre nuevas tecnologías en polarizados.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
        <p><?php esc_html_e('Lo siento, no hay entradas disponibles.'); ?></p>
      <?php endif; ?>

    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="pagination-blog">
          <ul>
            <li> <a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/dot-pagination.svg">
                <p>Volver</p>
              </a></li>
            <li> <a href="">1</a></li>
            <li> <a href="">2</a></li>
            <li> <a class="active" href="">3</a></li>
            <li> <a href="">4</a></li>
            <li> <a href="">5</a></li>
            <li> <a href="">
                <p>Avanzar</p><img src="<?php bloginfo('template_url') ?>/assets/img/dot-pagination.svg">
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer()
?>