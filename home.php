<?php 

/*
Template Name: Home
Template Post Type: post, page, product
 */

 get_header();


?>

<section class="player-seccions">
	<?php 
	    echo do_shortcode("[metaslider id=188]"); 
	?>
</section> 

<section class="player-seccions">
  <?php echo 'estoy en el home'; ?>
  <div class="player" id="player">
<div style="position: relative;padding-bottom: 56%;padding-top: 20px;height: 0"><iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%' frameborder='0' scrolling='no' allowFullScreen  src='https://ott.streann.com/streaming/player.html?U2FsdGVkX18oDz4ycbBDS2LTetAdShkZDUZf1ofoP8pf/LLHHuWCRKCjQm2ES0C115OJpEt3CZBPuw7zzAYozsoAiQ0pKxoIZp0tH9VzjUOPukf+BYdCJxVO3v5vdebnGd3ABe0REFv1gz+cX6sqs/vb5ARxK3OrVGamTIUdhe1qSUFKel6VJ+VoVxUIuLevkgTL/zKMrlRygHPMEC0/0LdHUFlWmQaWiIbVKmABN+jW+aNGaIwLvRpMXS1LkgWtZwXsJThCwgnxjRqJ7ejXHfQttNLxvfm/B+8dVzI6hqVAb3jvN0FM6S54pgCmHRs60ZPVtg8DxZdVdV0G3bVMvw=='></iframe></div>
  </div>

  <div class="seccions">
    <a href="<?php bloginfo('url'); ?>/donaciones" class="secciones seccions_1">
        <h2><span class="icon-library"></span>Ayúdanos >> Cuentas Bancarias</h2>
    </a>
    <a  href="<?php bloginfo('url'); ?>/amigos" class="secciones seccions_2">
        <h2><span class="icon-user"></span>Amigos</h2>
    </a>
    <a  href="<?php bloginfo('url'); ?>/programas" class="secciones seccions_3">
        <h2><span class="icon-cogs"></span>Programas</h2>      
    </a>
    <a  href="<?php bloginfo('url'); ?>/cobertura" class="secciones seccions_4">
        <h2><span class="icon-location2"></span>Cobertura</h2>     
    </a>
  </div>


</section>

<section class="contenido">

  <article class="noticias">
  <div class="titulo_noticias"><h1>ULTIMAS NOTICIAS</h1></div>  

  
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

  <?php  ultimas_noticias(); ?>
  </article>

  <aside class="redes">
      <?php // get_sidebar(); ?>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
  </aside>  

</section>




<?php get_footer();  ?>