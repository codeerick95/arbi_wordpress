    <footer class="footer">
      <div class="container">
        <div class="arbi_info">
          <div class="logo-container">
          	<img class="logo-img" src="<?php echo getImage('contact-img.png'); ?>" alt="Logotipo"/>
          	<span class="logo-text">Arbi</span>
          </div>
          <p class="description">Analizamos, diseñamos y llevamos adelante proyectos web modernos.</p>
          <div class="social-networks"><a class="icon" href=""><i class="fab fa-facebook-square"></i></a><a class="icon" href=""><i class="fab fa-twitter-square"></i></a><a class="icon" href=""><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="line"></div>
        <div class="footer-services">
          <h3 class="subtitle">Servicios</h3>
          <ul class="services_list">
            <li class="menu-item"><a class="menu-link" href="#">Diseño web</a></li>
            <li class="menu-item"><a class="menu-link" href="#">Desarrollo web</a></li>
            <li class="menu-item"><a class="menu-link" href="#">Marketing digital</a></li>
            <li class="menu-item"><a class="menu-link" href="#">Seo</a></li>
            <li class="menu-item"><a class="menu-link" href="#">Diseño gráfico</a></li>
            <li class="menu-item"><a class="menu-link" href="#">Edición y producción de video</a></li>
          </ul>
        </div>
        <div class="newsletter">
          <h3 class="subtitle">Suscríbase a nuestro boletín</h3>
          <p class="description">Reciba las últimas noticias y publicaciones de Arbi en su correo electrónico.</p>
          <form class="form-newsletter" action="">
            <input class="form-input" type="email" placeholder="Correo electrónico" required="required"/>
            <input class="btn-primary" type="submit" value="Enviar"/>
          </form>
        </div>
        <div class="line"></div>
        <div class="footer-contact">
          <h3 class="subtitle">Contacto</h3>
          <p class="contact-info"><span class="icon"><i class="fas fa-phone" aria-hidden="true"></i></span><span class="phone">924 367 676</span></p>
          <p class="contact-info"><span class="icon"><i class="fas fa-envelope-open" aria-hidden="true"></i></span><span class="email">dev.erick95@gmail.com</span></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>