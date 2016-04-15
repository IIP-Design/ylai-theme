<?php
function ylai_enqueue_scripts() {
    wp_enqueue_script( 'corona-js', get_template_directory_uri() . '/js/dist/script.js', array(), '20160414', true );
    wp_enqueue_script( 'ylai-js', get_stylesheet_directory_uri() . '/js/dist/script.js', array(), '20160415', true );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-rtl-style', get_template_directory_uri() . '/rtl.css' );
    wp_enqueue_style( 'ylai-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Oxygen' );
}
add_action( 'wp_enqueue_scripts', 'ylai_enqueue_scripts' );
?>
