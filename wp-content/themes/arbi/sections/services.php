


<section class="services" id="services">
  <div class="container">
    <h2 class="subtitle">
      Brindamos servicios creativos
    </h2>
    <div class="services-list">
        <?php 
        $query = new WP_Query(array('post_type' => 'servicio'));
        if ( $query->have_posts() ) : 

        ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $campos_adicionales = get_post_custom();?>
            <article class="card">
              <span class="icon">
                <i class="<?php echo getIcon($campos_adicionales); ?>" aria-hidden="true"></i>
              </span>
              <h3 class="card-title"><?php the_title(); ?></h3>
              <p class="description">
                <span><?php the_excerpt(); ?></span>
              </p>
              <a class="card-link" href="<?php echo get_the_permalink(); ?>">Leer más</a>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>