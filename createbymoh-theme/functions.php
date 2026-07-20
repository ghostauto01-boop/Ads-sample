<?php
// Enqueue Google Fonts & theme stylesheet
function createbymoh_enqueue_styles() {
    wp_enqueue_style('createbymoh-google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap', array(), null);
    wp_enqueue_style('createbymoh-main-styles', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'createbymoh_enqueue_styles');

// Add support for basic WP features
function createbymoh_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'createbymoh'),
    ));
}
add_action('after_setup_theme', 'createbymoh_setup_theme');
