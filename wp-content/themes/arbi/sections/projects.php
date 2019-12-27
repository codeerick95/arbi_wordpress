<section class="projects" id="projects">
  <div class="container">
    <h2 class="subtitle">Proyectos desarrollados</h2>
    <div class="projects-list" id="projects-list">
      <?php
        $query = new WP_Query(array('post_type' => 'proyecto'));
        if($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post();
      ?>
        <article class="card sweetbox-item">
          <img class="sweetbox-small-img" src="<?php the_field('imagen'); ?>"/>
          <img class="sweetbox-large-img" src="<?php the_field('imagen'); ?>" alt="Project image"/>
            <p class="description sweetbox-description-img"><?php the_title(); ?></p>
          </article>
      <?php endwhile; endif;?>
    </div>
  </div>
</section>