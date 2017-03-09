<?php 

/*
Template Name: Interiores
Template Post Type: post, page, product
 */

 get_header();


?>


<section class="con-general">

  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 con">
            <?php // echo 'Estoy en page interiores'; ?>
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
          <div class="interiores">
            <?php //  echo  'estoy en page';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>
          </div>
       </div>
        <div class="col-xs-12 col-sm-12 col-md-4 side">
          <div class="entradas">
          <div class="titulo_entradas"><h3>Entradas recientes</h3></div>
            <div class="recientes">
                    <?php get_sidebar(); ?>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
            </div>  
          </div>        
        </div>      
    </div>
  </div>
  
</section>

<?php get_footer();  ?>