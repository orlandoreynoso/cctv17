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



<section class="tv-play">

<div class="container">

  <div class="row">
  <article  class="player-seccions">

   <div class="player" id="player">
      <div style="position: relative;padding-bottom: 56%;padding-top: 20px;height: 0"><iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%' frameborder='0' scrolling='no' allowFullScreen  src='https://ott.streann.com/streaming/player.html?U2FsdGVkX18oDz4ycbBDS2LTetAdShkZDUZf1ofoP8pf/LLHHuWCRKCjQm2ES0C115OJpEt3CZBPuw7zzAYozsoAiQ0pKxoIZp0tH9VzjUOPukf+BYdCJxVO3v5vdebnGd3ABe0REFv1gz+cX6sqs/vb5ARxK3OrVGamTIUdhe1qSUFKel6VJ+VoVxUIuLevkgTL/zKMrlRygHPMEC0/0LdHUFlWmQaWiIbVKmABN+jW+aNGaIwLvRpMXS1LkgWtZwXsJThCwgnxjRqJ7ejXHfQttNLxvfm/B+8dVzI6hqVAb3jvN0FM6S54pgCmHRs60ZPVtg8DxZdVdV0G3bVMvw=='></iframe></div>
  </div>
  <div class="seccions">
    <a href="<?php bloginfo('url'); ?>/donaciones" class="secciones seccions_1">
      <span><i class="icon-library fa fa-bank"></i>Donaciones</span>
    </a>
    <a  href="<?php bloginfo('url'); ?>/amigos" class="secciones seccions_2">
        <span><i class="icon-cogs fa fa-cog"></i>Amigos</span>
    </a>
    <a  href="<?php bloginfo('url'); ?>/programas" class="secciones seccions_3">
        <span><i class="icon-cogs fa fa-tv"></i>Programas</span>      
    </a>
    <a  href="<?php bloginfo('url'); ?>/cobertura" class="secciones seccions_4">
        <span><i class="icon-location2 fa fa-map-marker"></i>Cobertura</span>      
    </a>
  </div>  
  </article>
  </div>
</div>


</section>

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