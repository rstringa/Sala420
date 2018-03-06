<?php
/***********************************************************************************************/
/* 	Compresion GZIP */
/***********************************************************************************************/
if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {
    ob_start( "ob_gzhandler" );
}
else {
    ob_start();
}
/***********************************************************************************************/
/* 	Define Constants */
/***********************************************************************************************/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/img');
define('SITEROOT', get_bloginfo('url'));	
/*-----------------------------------------------------------------------------------*/
/*	For Loading Required JS Files
/*-----------------------------------------------------------------------------------*/
		if(!function_exists('load_theme_scripts')){
			
				function load_theme_scripts(){
					
						if (!is_admin()) {
								
								// Defining scripts directory url
								$jscriptURL = get_template_directory_uri().'/js/';
								
								//wp_deregister_script('jquery');
								
								// Registering Scripts
								//wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js",  false);
								wp_register_script('tether', $jscriptURL.'tether.min.js', array('jquery'),  false);
								wp_register_script('bootstrap', $jscriptURL.'bootstrap.min.js', array('jquery'),  true);
								
								wp_register_script('royalslider', $jscriptURL.'jquery.royalslider.min.js', array('jquery'),  true);
								wp_register_script('ilightbox', $jscriptURL.'ilightbox.js', array('jquery'),  true);
								wp_register_script('swiper', $jscriptURL.'swiper.min.js', array('jquery'),  true);
								wp_register_script('custom', $jscriptURL.'custom.js', array('jquery'),  true);
								//wp_register_script('custom-compile', $jscriptURL.'custom-compile.js', array('jquery'),  true);
								
										
							
								
								
								// Enqueuing Scripts that are needed all the pages
								//wp_enqueue_script('jquery');
								wp_enqueue_script('tether');
								wp_enqueue_script('bootstrap');
								wp_enqueue_script('royalslider');
								wp_enqueue_script('ilightbox');
								wp_enqueue_script('swiper');
								wp_enqueue_script('custom');
								
								
						}
				}
		}
		add_action('wp_enqueue_scripts', 'load_theme_scripts');


// Cargar scripts con DEFER //		
function add_defer_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array('tether', 'bootstrap','royalslider','ilightbox','swiper','custom' );
   
   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);		
		
	
/***********************************************************************************************/
/* Add Theme Support for Post Formats, Post Thumbnails and Automatic Feed Links */
/***********************************************************************************************/
if (function_exists('add_theme_support')) {
	//add_theme_support('post-formats', array('link', 'quote', 'gallery', 'video'));
	
	add_theme_support('post-thumbnails', array('post','page','slider'));
	//set_post_thumbnail_size(210, 210, true);
	//add_image_size('custom-blog-image', 784, 350);

	//add_theme_support('automatic-feed-links');
}

/***********************************************************************************************/
/* Taxonomia Slider */
/***********************************************************************************************/
add_action( 'init', 'create_post_type' );
add_post_type_support("page", "excerpt");
	function create_post_type() {
         register_post_type( 'slider',
                array(
                        'labels' => array(
                                'name' => __( 'Home Slider' ),
                                'singular_name' => __( 'Slide' )
                        ),
				'capability_type' => 'post',		
				'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),		
                'public' => true,
                'has_archive' => true
                )
        );

}

/***********************************************************************************************/
/* META BOXES */
/***********************************************************************************************/
include ('metabox.php');


/***********************************************************************************************/
/* Editor WYSIWYG */
/***********************************************************************************************/
remove_filter("the_content", "wptexturize");
remove_filter("the_content", "convert_chars");


/***********************************************************************************************/
/* Ocultar Aviso de Renovacion */
/***********************************************************************************************/
add_action('admin_menu','wphidenag');
function wphidenag() {
remove_action( 'admin_notices', 'update_nag', 3 );
}

/***********************************************************************************************/
/* Cambiar Logo en el Acceso al Panel*/
/***********************************************************************************************/
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg);
			height:110px;
			width:100px;
			background-size:100px 110px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/***********************************************************************************************/
/* Cambiar el menu Entradas a Cartelera */
/***********************************************************************************************/

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Cartelera';
    $submenu['edit.php'][5][0] = 'Cartelera';
    $submenu['edit.php'][10][0] = 'Añadir Espectáculo';
  //  $submenu['edit.php'][16][0] = 'Nueva Etiqueta';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Cartelera';
    $labels->singular_name = 'Cartelera';
    $labels->add_new = 'Añadir Espectáculo';
    $labels->add_new_item = 'Añadir Espectáculo';
    $labels->edit_item = 'Editar Espectáculo';
    $labels->new_item = 'Espectáculo';
    $labels->view_item = 'Ver Espectáculos';
    $labels->search_items = 'Buscar Espectáculos';
    $labels->not_found = 'No se encontraron Espectáculos';
    $labels->not_found_in_trash = 'No se encontraron Espectáculos en la papelera';
    $labels->all_items = 'Todos los Espectáculos';
    $labels->menu_name = 'Espectáculos';
    $labels->name_admin_bar = 'Espectáculos';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

/***********************************************************************************************/
/* Remover items del menu de administracion */
/***********************************************************************************************/
function remove_menus(){
  
 // remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack* 
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

/***********************************************************************************************/
/* Remover informacion del Header  */
/***********************************************************************************************/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
function wpbeginner_remove_version() {
return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to suppo

?>