<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

//enqueue le fichier css généré par la compilation de scss
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


//enqueue le fichier javascript
function enqueue_skroll_fade_slide(){
    wp_enqueue_script('fade-slide-skroll', get_stylesheet_directory_uri() . '/js/scroll-slide-and-fade.js', array(), false, true);
}
add_action('wp_footer', 'enqueue_skroll_fade_slide');


//enqueue les fichier js pour swiper 
function ajouter_swiper_js() {
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '4.5.0', true);
}
add_action('wp_enqueue_scripts', 'ajouter_swiper_js');

//enqueue le fichier css de swiper
function enqueue_swiper_styles() {
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_styles');

//code du swiper du projet
function enqueue_swiper_init()
{
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/js/swiper-init.js', array(), false, true);
}
add_action('wp_footer', 'enqueue_swiper_init');

//enqueue le fichier js du menu
function menu_js() {
    wp_enqueue_script('menu-js', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'), '4.5.0', true);
}
add_action('wp_enqueue_scripts', 'menu_js');

//enqueue le fichier js de rellax
function rellax_js() {
    wp_enqueue_script('rellax-js', get_stylesheet_directory_uri() . '/js/rellax.min.js', array('jquery'), '4.5.0', true);
}
add_action('wp_enqueue_scripts', 'rellax_js');

//enqueue le fichier js du parallax
function parallax_js() {
    wp_enqueue_script('parallax-js', get_stylesheet_directory_uri() . '/js/parallax.js', array('jquery'), '4.5.0', true);
}
add_action('wp_enqueue_scripts', 'parallax_js');
