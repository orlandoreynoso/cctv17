<div class="entradas_recientes">

<?php 

echo "<div class='titulo_last'>últimas noticias</div>";

//  dynamic_sidebar('sidebar');   
	ultimas_paginas();

/*
<h2>Entradas Recientes</h2>
<div class="enlace">
<?php $the_query = new WP_Query( 'cat=4&showposts=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile;?>
</div> */

?>


</div>