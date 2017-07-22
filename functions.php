<?php

// Scripts & CSS
function lowwwe_theme_styles() {
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/external/normalize.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'lowwwe_theme_styles' );