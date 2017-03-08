<?php 

/*
Template Name: Interiores
Template Post Type: post, page, product
 */

 get_header();


?>

<section class="contenido">

  <article class="noticias">
    <?php echo 'estoy en PAGE Interiores'; ?>
    <div class="mapeo"><?php the_breadcrumb(); ?></div>    


                  <?php
          // Start the loop.
    //   echo  'estoy en page';

          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 

  </article>

  <aside class="redes">
      <?php get_sidebar(); ?>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
  </aside>  

</section>


<?php get_footer();  ?>