<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Arbi</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header" id="header">
      <div class="container">
        <div class="logo-container">
        	<img class="logo-img" src="<?php echo getImage('logo.png'); ?>" alt="Logotipo"/>
        	<span class="logo-text">Arbi</span>
        </div>
        <div class="hamburger-container">
          <button class="hamburger hamburger--spring" type="button" id="hamburger"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
        </div>
        <nav class="nav" id="navbar">
          <ul class="menu">
            <li class="menu-item"><a class="menu-link" href="index.html#hero" onclick="$('#hero').animatescroll({padding: 100});">Inicio</a></li>
            <li class="menu-item"><a class="menu-link" href="index.html#about-us" onclick="$('#about-us').animatescroll({padding: 100});">Sobre nosotros</a></li>
            <li class="menu-item"><a class="menu-link" href="index.html#services" onclick="$('#services').animatescroll({padding: 100});">Servicios</a></li>
            <li class="menu-item"><a class="menu-link" href="index.html#projects" onclick="$('#projects').animatescroll({padding: 100});">Portafolio</a></li>
            <li class="menu-item"><a class="btn-primary" href="index.html#contact" onclick="$('#contact').animatescroll({padding: 100});">CONTACTO</a></li>
          </ul>
        </nav>
      </div>
    </header>