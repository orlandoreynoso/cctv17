<!-- Archivo de cabecera gobal de Wordpress -->

<?php 

/*
  Template Name: sigle
  Template Post Type: post, page, product
*/

 get_header();

?>
<section class="contenido">

  <article class="noticias">

    <?php echo 'estoy en single'; ?>

<!-- Contenido del post -->
<?php if ( have_posts() ) : the_post(); ?>

<div class="descripcion_categoria">
    <span class="cat"><?php the_category (); ?></span>
    <span class="icon">&raquo;</span>    
    <span class="date"><?php the_time('j F, Y'); ?></span>  
</div>


  <div class="total">

    <?php // echo "donde estoy estas son para las entradas"; ?>

  <!-- h1><?php the_title(); ?></h1 -->      
  <?php the_content(); ?>


  <address>Por <?php the_author_posts_link() ?></address>
  <!-- Comentarios -->
  <?php comments_template(); ?>

  </div>  

  <?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>



<?php endif; ?>


  </article>

  <aside class="redes">
      <?php get_sidebar(); ?>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
      
  </aside>  

</section>




<?php get_footer(); ?>