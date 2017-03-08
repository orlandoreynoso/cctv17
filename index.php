<?php 



/*

Template Name: Index
Template Post Type: post, page, product

 */



 get_header();


?>

<!---********************************************* -->

<section class="contenido">

  <article class="noticias">
	<div class="mapeo">
		<!-- Breadcrumb -->
		<?php the_breadcrumb(); ?>
		<!-- Fin Breadcrumb -->
	</div> 



	<?php if (have_posts()): while(have_posts()): the_post();  ?>


<div class="entradas-noticias">
	<?php echo 'estoy en el index'; ?>

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

	<?php else: ?>
				
<article class="post resume">

	<div class="post-title">

		<h2><?php _e('No hay contenidos disponibles','apk' ) ?></h2>

	</div>



	<div class="post-content">

		<p><?php _e('No hay contenidos que correspondan con esta pagina, por favor revizar la busqueda para encontrar lo que desea','apk' ) ?></p>

		<?php get_search_form(); ?>

	</div>

</article>

<?php endif; ?>




  </article>

  <aside class="redes">
      <?php get_sidebar(); ?>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
  </aside>  

</section>


<!---********************************************* -->




<?php  get_footer(); ?>