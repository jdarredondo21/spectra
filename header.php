<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Spectra | Inicio</title>
<link rel="icon" href="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php bloginfo('template_url') ?>/css/bootstrap-grid.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
<link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet">
<body>
  <header>
    <nav id="navbar">
      <ul class="menu" id="menu-items"><img class="logo-mobile" src="<?php bloginfo('template_url') ?>/assets/img/logo-mobile.svg" alt="Logo"><img class="before-mobile" src="<?php bloginfo('template_url') ?>/assets/img/before-menu-mobile.png">
        <li><a class="active" href="#">Nosotros</a></li>
        <li class="has-submenu"><a class="toggle-submenu" href="#">Productos</a>
          <ul class="submenu">
            <li> <a href="#">Automóvil</a></li>
            <li> <a href="#">Decorativas</a></li>
            <li> <a href="#">Arquitectónica</a></li>
            <li> <a href="#">Seguridad</a></li>
            <li> <a href="#">Simulador 360</a></li>
          </ul>
        </li>
        <li><a href="<?=  get_permalink(11) ?>">Distribuidores</a></li>
        <li><a href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog </a></li>
        <li class="has-submenu"><a class="toggle-submenu" href="#">Centro de experiencia </a>
          <ul class="submenu">
            <li> <a href="#">Para distribuidores</a></li>
            <li> <a href="#">Para cliente final</a></li>
          </ul>
        </li><a class="button-red" href="">Contáctanos<img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a>
        <div class="socials-mobile">
          <ul> 
            <li> <a href=""><img alt="" src="<?php bloginfo('template_url') ?>/assets/img/linkedin-footer.svg"></a></li>
            <li> <a href=""><img alt="" src="<?php bloginfo('template_url') ?>/assets/img/instagram-footer.svg"></a></li>
            <li> <a href=""><img alt="" src="<?php bloginfo('template_url') ?>/assets/img/facebook-footer.svg"></a></li>
          </ul>
        </div><img class="close-button" id="close-button" src="<?php bloginfo('template_url') ?>/assets/img/close-button.svg">
      </ul>
      <div class="logo"><a href="<?= get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo-header.svg" alt="Logo"></a>
        <div class="before-logo"> <img src="<?php bloginfo('template_url') ?>/assets/img/before-logo.svg" alt="Logo"></div>
      </div>
      <div class="content-button"><a class="button-red" href="">Contáctanos<img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/dot-right.svg"></a>
        <button class="menu-button" id="menu-button"><img alt="Icono" src="<?php bloginfo('template_url') ?>/assets/img/menu-hamburguesa.svg"></button>
      </div>
    </nav>
  </header>