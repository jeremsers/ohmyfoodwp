<?php
// appel du fichier function helper
require_once(__DIR__.'/functions-helper.php');


/* Chargement des fichier css */

// Ajout du fichier reset.css plus d'explication dans le fichier
add_action( 'wp_enqueue_scripts', 'my_child_reset_styles', 21 );
function my_child_reset_styles() {
    wp_enqueue_style( 'child-reset', get_stylesheet_directory_uri() . '/reset.css', array(), '1.0' );
}

// Ajout du client vite pour HMR et SASS et JS
add_action( 'wp_enqueue_scripts', 'enqueue_vite', 19 );
function enqueue_vite() {
    $vite_dev_server = 'http://localhost:3000';
    wp_enqueue_script_module('vite-client', "$vite_dev_server/@vite/client", array(), null, true);
    wp_enqueue_script_module('theme-main', "$vite_dev_server/src/main.js", array(), null, true);
    wp_enqueue_style('theme-vite-style', "$vite_dev_server/src/styles.scss");

}



// Ajout du fichier style.css
function theme_enqueue_styles() {
	
  $file_name = '/style.css'; // Nom du fichier CSS
	$style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
	wp_enqueue_style(
        'oh-my-food-style', // Identifiant unique pour votre style
        get_stylesheet_directory_uri(). $file_name,
        array(), // Dépendances, le cas échéant
        file_exists($style_path) ? filemtime($style_path) : false // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );

/* Chargement du fichier script.js */

add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_scripts' );
function wpchild_enqueue_scripts(){
  wp_enqueue_script( 'oh-my-food-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '', true );
}

function get_nav_menu() : ?array {
  $menu = get_term_by( 'name' , 'Navigation', 'nav_menu');
  if ( $menu ) {
    return wp_get_nav_menu_items( $menu->term_id );
  }
  return null;
}







