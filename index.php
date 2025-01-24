<?php get_header();
?>
<section class="banner">
  <div class="hover-circle"> </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="swiper gallery-top">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="item-banner" style="background-image: url('<?php echo get_field('imagen_url_1'); ?>')">
                <div class="text-banner">
                  <h2>
                    <span><?php echo get_field('title'); ?></span>
                  </h2>
                  <p><?php echo get_field('descripcion'); ?></p>
                  <div class="content-buttons">
                    <a class="button-red" href="">Contáctanos
                      <img alt="Icono" src="<?php bloginfo('template_url'); ?>/assets/img/dot-right.svg">
                    </a>
                    <a class="button-transparent" href="">Ser distribuidor
                      <img alt="Icono" src="<?php bloginfo('template_url'); ?>/assets/img/dot-right.svg">
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="item-banner" style="background-image: url('<?php echo get_field('imagen_url_2'); ?>')">
                <div class="text-banner">
                  <h2>
                    <span><?php echo get_field('title_copiar'); ?></span>
                  </h2>
                  <p><?php echo get_field('descripcion_copiar'); ?></p>
                  <div class="content-buttons">
                    <a class="button-red" href="">Contáctanos
                      <img alt="Icono" src="<?php bloginfo('template_url'); ?>/assets/img/dot-right.svg">
                    </a>
                    <a class="button-transparent" href="">Ser distribuidor
                      <img alt="Icono" src="<?php bloginfo('template_url'); ?>/assets/img/dot-right.svg">
                    </a>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="swiper-button-prev prev-top"><img src="<?php bloginfo('template_url') ?>/assets/img/button-dot-banner.svg"></div>
          <div class="swiper-button-next next-top"><img src="<?php bloginfo('template_url') ?>/assets/img/button-dot-banner.svg"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="categories">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content-categories">
          <div class="swiper swiperCategories">
            <div class="swiper-wrapper">
              <?php
              $categories = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
              ));
              foreach ($categories as $category) :
                if ($category->slug == 'sin-categoria') {
                  continue; // Saltar la categoría "Sin categoría"
                }
                $image = get_field('imagen', 'category_' . $category->term_id); // Obtener la URL de la imagen del ACF

              ?>
                <div class="swiper-slide">
                  <div class="item-category">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($category->name); ?>">
                    <h3><?php echo esc_html($category->name); ?></h3>
                    <p><?php echo esc_html($category->description); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="swiper-button-prev prev-category"><img src="<?php bloginfo('template_url') ?>/assets/img/button-dot-category.svg"></div>
          <div class="swiper-button-next next-category"><img src="<?php bloginfo('template_url') ?>/assets/img/button-dot-category.svg"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="movie">
  <div class="before-movie"> <img alt="Logo Spectra" src="<?php bloginfo('template_url') ?>/assets/img/before-movie.png"></div>
  <div class="container">
    <?php
    $page_id = 7; // ID de la página "Inicio"
    $page = get_post($page_id);
    $content = apply_filters('the_content', $page->post_content);
    $content_parts = explode("\n", wpautop($content));
    $title = strip_tags(array_shift($content_parts));
    $paragraph = implode("\n", $content_parts);
    ?>

    <div class="row">
      <div class="col-md-6">
        <div class="tittle-movie">
          <h2><?php echo esc_html($title); ?></h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="text-movie">
          <p><?php echo $paragraph; ?></p>
          <a class="button-red" href="<?php echo get_permalink($page_id); ?>">Conocer más<img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cards-general">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="item-card"><img alt="Visualizador" src="<?php bloginfo('template_url') ?>/assets/img/visualizador.png">
          <div class="text-card">
            <h4>Visualizador</h4>
            <div class="divide">
              <p>¿Quieres saber como se verá la película? ingresa a nuestro visualizador y encuentra la mejor opción para ti.</p>
              <div>
                <div class="button-card"><a href=""><img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-card"><img alt="Distribuidor" src="<?php bloginfo('template_url') ?>/assets/img/distribuidor.png">
          <div class="text-card">
            <h4>Conviértete En Distribuidor</h4>
            <div class="divide">
              <p>Pregunta por nuestro programa de distribuidores y empieza tu crecimiento comercial con SPECTRA.</p>
              <div>
                <div class="button-card"><a href=""><img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-card"><img alt="Cotizador" src="<?php bloginfo('template_url') ?>/assets/img/cotizador.png">
          <div class="text-card">
            <h4>Cotizador</h4>
            <div class="divide">
              <p>¡Ingresa ya las medidas de tu proyecto y obten una cotización ahora!</p>
              <div>
                <div class="button-card"><a href=""><img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="know">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tittle-know">
          <h2>Conoce nuestros distribuidores</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="swiper-container swiper-row-1">
          <div class="swiper-wrapper">
            <?php
            $images = get_field('Galeria'); // Obtener la galería de imágenes del ACF
            $counter = 0; // Inicializar el contador

            if ($images) : // Verificar si hay imágenes en la galería
              foreach ($images as $image) :
                if ($counter == 6) : // Crear una nueva fila después de 6 elementos
                  $counter = 0;
                  echo '</div></div></div></div><div class="row"><div class="col-md-12"><div class="swiper-container swiper-row-2"><div class="swiper-wrapper">';
                endif;
            ?>
                <div class="swiper-slide">
                  <div class="item-brand">
                    <img alt="<?php echo esc_attr($image['alt']); ?>" src="<?php echo esc_url($image['url']); ?>">
                  </div>
                </div>
            <?php
                $counter++; // Incrementar el contador
              endforeach;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="become">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="background-become" style="background-image: url(&quot;<?php bloginfo('template_url') ?>/assets/img/background-become.png&quot;)">
          <div class="row">
            <div class="col-md-6">
              <div class="tittle-become">
                <h2><?= get_field('titulo_convertirse');?></h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-become">
                <p><?= get_field('parrafo_convertirse');?></p><a class="button-transparent" href="">Ser distribuidor<img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>