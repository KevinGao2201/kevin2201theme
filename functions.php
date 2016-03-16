<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/*
function load_my_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans'); 	wp_enqueue_style( 'googleFonts');
}add_action('wp_print_styles', 'load_my_fonts');
*/

/*
function my_add_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'));
	wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/js/flexslider-init.js', array('jquery', 'flexslider'));
    wp_enqueue_style('flexslider-style', get_stylesheet_directory_uri().'/css/flexslider.css');
}
add_action('wp_enqueue_scripts', 'my_add_scripts');
*/
?>