<?php

/*

Template Name: Portada
  Template Post Type: post, page, product

 */

?>


<?php get_header(); ?>

<section class="slide">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
         // Este es para la pagina oficial echo do_shortcode("[metaslider id=188]");
        ?>
        <?php
          echo do_shortcode("[metaslider id=188]");
        ?>
      </div>
    </div>
  </div>
</section>


<?php get_template_part( 'template/cover','stream'); ?>
<div class="n-sec-div">
    <?php get_template_part( 'template/cover','seccioneshome'); ?>
</div>

<section class="con-general">
	<div class="container">
     <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 con">
            <article class="noticias">
              <div class="titulo_noticias"><h2>CODIFICACIÓN SATELITAL</h2></div>
                  <?php
                // Start the loop.
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

            <?php //  ultimas_noticias(); ?>
            </article>
       </div>
      <div class="col-xs-12 col-sm-12 col-md-4 side">
          <div class="entradas">
            <!-- div class="titulo_entradas"><h3>Entradas recientes</h3></div -->
            <div class="recientes">
              <?php // get_sidebar(); ?>
              <div class="facebook">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>
              </div>
            </div>
          </div>
      </div>
     </div>
  </div>
</section>

<section class="tv-seccion">
  <div class="container">

    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-8 last-news">
      <div class="titulo_noticias"><h2>ÚLTIMAS NOTICIAS</h2></div>
      <?php ultimas_noticias(); ?>
    </div>

    </div>

  </div>
</section>



<?php get_footer(); ?>
