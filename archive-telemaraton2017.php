<?php

/*
  Template Name: Telemaraton 2017
  Template Post Type: post, page, product
*/

 get_header();

?>

<section class="con-cpts">

  <div class="container">
     <div class="row">
        <div class="col-md-12 con">
            <?php // echo 'estoy en category'; ?>
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
    <div class="cuadro-cpts">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
           <div class="contenido">
                  <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <div class="thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                  </div>
                  <!-- div class="info"><?php // the_excerpt();  ?></div -->
            </div>

          <?php endwhile; ?>
          <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
          <?php else : ?>
          <p><?php _e('Ups!, no hay entradas.'); ?></p>
          <?php endif; ?>
        </div><!-- fin de cuadro CPTS -->
       </div>
    </div><!-- fin del RoW -->
    </div>

</section>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
