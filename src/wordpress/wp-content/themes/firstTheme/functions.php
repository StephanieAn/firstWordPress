<?php
function register_assets() {
    wp_register_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style('style');
}

add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 250, 250, true );

// // Définir d'autres tailles d'images
// add_image_size( 'products', 800, 600, false );
// add_image_size( 'square', 256, 256, false );

add_theme_support('title-tag');
add_action('wp_enqueue_scripts', 'register_assets');

register_nav_menus( array(
	'main' => 'Menu_Header',
	'header' => 'Haut de page',
) );


register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );