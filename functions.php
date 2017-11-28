<?php
/*Distintos fondos*/
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
// add_image_size( $name, $width, $height, $crop );
/*========================================================*/

//add_image_size( $name, $width, $height, $crop );

the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles
the_post_thumbnail('medium');          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('large');
the_post_thumbnail('full'); // La resolución original

//set_post_thumbnail_size(1024,1024,true );

include (TEMPLATEPATH. '/inc/estilos.php');

/*========================================================*/
function mi_menu(){
    register_nav_menus(
        array('navegation' => __('Menu de Navegación'),
         )
        );
}
add_action('init','mi_menu');
function showMenu(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu', /* tambien lo que contiene el  Ul primero*/
        "container"=>"",  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
    );
    wp_nav_menu($args);
}
function my_init() {
        if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', false, '2.0.3', true);
        wp_enqueue_script('jquery');
        }
}
add_action('init', 'my_init');
wp_register_script( $handle, $src, $deps, $ver, $in_footer );
/*======== Menu para todos ========================*/
function menu_two(){
?>
  <div class="iconos-01">
        <a class="linkopacity" href="<?php bloginfo('url'); ?>/tv-en-linea/"><img src="<?php echo IMAGES; ?>/icon-tv.png"></a>
  </div>
<?php
}

include (TEMPLATEPATH . '/libs/entradas.php');
include (TEMPLATEPATH . '/libs/totop.php');
include (TEMPLATEPATH . '/libs/breadcrumb.php');
include (TEMPLATEPATH . '/libs/paginacion.php');
paginacion();
// El apk viene del css
// Tags: white, two-columns, responsive layout
// Text Domain: apk
function apk_register_sidebars(){
    register_sidebar(
        array(
            'name' => __('Sidebar principal','apk'),
             'id' => 'main_sidebar',
             'descripcion' => __('Este es el sidebar principal'.'apk'),
             'before_widget' => '<div id="%1$s" class="widget %2s">',
             'after_widget' => '</div>',
             'before_title' => '<h3 class="widget-title">',
             'after_title' => '</h3>'
            ));
}
add_action('widgets_init' ,'apk_register_sidebars');
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar'
        ));
    }

?>
