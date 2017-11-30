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
        <div class="col-xs-12 col-sm-12 col-md-8 con">
            <?php // echo 'estoy en category'; ?>
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

           <div class="contenido">
                  <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <div class="date-cat">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 fecha">
                            <span class="label1"><i class="icon-date fa fa-calendar"></i><?php the_time('j  '); ?></span>
                            <span class="label2"><?php the_time('F '); ?></span>
                          </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
                    </div>
                  </div>
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
       </div>
    </div><!-- fin del RoW -->
    </div>

</section>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
