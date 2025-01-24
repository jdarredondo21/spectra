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
    <div class="row" id="blogPost">
      <?php
      // Configuración de la consulta personalizada
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Obtiene el número de página actual
      $args = array(
        'posts_per_page' => 8, // Limitar a 1 publicación por página
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
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;
      else : ?>
        <p><?php esc_html_e('Lo siento, no hay entradas disponibles.'); ?></p>
      <?php endif;
      $total_pages = $query->max_num_pages; ?>
    </div>

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="pagination-blog">
          <ul class="pagination-directory">
            <li>
              <a href="" class="item qmenos">
                <img src="<?php bloginfo('template_url') ?>/assets/img/dot-pagination.svg">
                <p>Volver</p>
              </a>
            </li>
            <?php
            // $total_pages = 5; // Reemplaza con el número total de páginas calculado dinámicamente.
            for ($i = 1; $i <= $total_pages; $i++) {
              if ($i == 1) {
                echo '<li> <a href="" class="item active">' . $i . '</a></li>';
              } else {
                echo '<li> <a href="" class="item">' . $i . '</a></li>';
              }
            }
            ?>
            <li>
              <a href="" class="item qmas">
                <p>Avanzar</p>
                <img src="<?php bloginfo('template_url') ?>/assets/img/dot-pagination.svg">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        // Evento para manejar clics en los elementos de la paginación
        $('.pagination-directory').on('click', '.item', function(e) {
            e.preventDefault();

            // Determinar la página solicitada
            let paged;
            if ($(this).hasClass('qmenos')) {
                // Página anterior
                paged = Number($('.pagination-directory .active').text()) - 1;
            } else if ($(this).hasClass('qmas')) {
                // Página siguiente
                paged = Number($('.pagination-directory .active').text()) + 1;
            } else {
                // Página específica
                paged = Number($(this).text());
            }

            // Prevenir que el número de página salga de los límites
            if (paged < 1 || paged > <?php echo $total_pages; ?>) return;

            // Actualizar la clase activa
            $('.pagination-directory .item').removeClass('active');
            $(`.pagination-directory .item:contains(${paged})`).addClass('active');
            // Realizar solicitud AJAX
            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php"); ?>',
                type: 'post',
                data: {
                    action: 'load_blog_posts',
                    paged: paged // Página solicitada
                },
                success: function(response) {
                    // Actualizar el contenido del blog con la respuesta
                    $('#blogPost').html(response);
                },
                error: function(error) {
                    console.log('Error en la solicitud:', error);
                }
            });
        });
    });
</script>

<?php get_footer()
?>