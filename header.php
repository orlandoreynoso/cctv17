<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
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
	
<header>
	<div class="ca-cabecera">
		<div class="container">
			<div class="row">
				<div class="ml col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="ca-logo-slogan">
						<a class="logo-link" href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/canalarquidiocesano.jpg" alt="Canal Arquidiocesano"></a>
					</div>			
				</div>
				<div class="mr col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<div class="ca-search-followers">
						<div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
						<div class="cuadro-redes">
							<a class="icon-facebook fb fa fa-facebook" href="https://www.facebook.com/TvArquidiocesana"></a>
							<a class="icon-twitter tw fa fa-twitter" href="https://twitter.com/CanalCatolico63"></a>
							<a class="icon-youtube2 yt fa fa-youtube" href="https://www.youtube.com/channel/UCaX9JrFxj84pLq3lbApsA-g/videos"></a>
						</div>			
					</div>			
				</div>
			</div>
		</div>
	</div>
</header>

<div class="contenido_menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav id="navegacion" class="navegando">
					<?php  showMenu();  ?>
				</nav>			
			</div>
		</div>
	</div>	
</div>

