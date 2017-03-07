<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<!--link rel="stylesheet" href="<?php // bloginfo('stylesheet_directory'); ?>/css/estilo.css" -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/theme.css">	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--script type="text/javascript" src="<?php // bloginfo('template_url'); ?>/js/google.js"></script -->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>


</head>
<body>
	
<div id="page-wrap">


<header>
	<div id="cabecera">
		<div id="cabecera-contenedor">
			<div id="cc-logo-slogan">
				<a class="logo-link" href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/canalarquidiocesano.jpg" alt="Canal Arquidiocesano"></a>
				<!-- a  class="slogan" href="<?php bloginfo('url'); ?>/">
					<span class="one">Televisión</span>
					<span class="two">Arquidiocesana</span>			
				</a -->	
			</div>
			<div id="cc-search-followers">
				<div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
				<div class="cuadro-redes">
					<a class="icon-facebook fb" href="https://www.facebook.com/TvArquidiocesana"></a>
					<a class="icon-twitter tw" href="https://twitter.com/CanalCatolico63"></a>
					<a class="icon-youtube2 yt" href="https://www.youtube.com/channel/UCaX9JrFxj84pLq3lbApsA-g/videos"></a>
				</div>			
			</div>			
		</div>		
	</div>

<div id="contenido_menu">
	

	<!-- div class="menu_bar">
		<a href="#" class="bt-menu"><span class="icon-menu"></span>MENU</a>		
	</div -->

	<nav id="navegacion" class="navegando">
		<?php  showMenu();  ?>
	</nav>	
</div>
	
</header>




