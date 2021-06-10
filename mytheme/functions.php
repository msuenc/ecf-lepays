<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter la prise en charge des menus
function register_my_menus() {
    register_nav_menus(
       array(
         'header-menu' => __( 'Header Menu' ),
         'footer-menu' => __( 'Footer Menu' )
       )
    );
}
add_action( 'init', 'register_my_menus' );

// Ajouter la prise en charge d'autres scripts
function register_assets() {

    //  Déclarer un autre fichier CSS
    wp_enqueue_style( 
    'main-css', 
    get_template_directory_uri() . '/css/main.css',
    array(), 
    '1.0'
    );
}
add_action('wp_enqueue_scripts', 'register_assets');

//  Barre de recherche
add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
function add_search_box( $items, $args ) {
    return $items;
}

//  Sidebar
register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Accès rapide',
) );