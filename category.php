


<!-- Archivo de cabecera global de Wordpress -->
<?php 


/*

Template Name: Categorias

 */

 ?>


<?php get_header(); ?>

<section class="contenido">

  <article class="noticias">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>        

<!-- Título de categoría -->
<h2><?php single_cat_title(); ?></h2>
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>



    <?php while ( have_posts() ) : the_post(); ?>

<div class="entradas-noticias">

  <div class="fecha">
    <span class="label1"><?php the_time('j  '); ?></span>
    <span class="label2"><?php the_time('F '); ?></span>
  </div>

  <div class="contenido">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();  ?>
  </div>

   
</div>

    <?php endwhile; ?>


    <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
    <!-- div class="pagination">
      <span class="in-left"><?php // next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php // previous_posts_link('Entradas más recientes »'); ?></span>
    </div -->
  


<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

  </article>

  <aside class="redes">
    <!-- Archivo de barra lateral por defecto -->
      <?php get_sidebar(); ?>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
  </aside>  

</section>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>