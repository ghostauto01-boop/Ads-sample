<?php
/**
 * CREATEBYMOH Theme Functions and Definitions
 * Standard WooCommerce-compatible hybrid FSE Theme configuration
 */

function createbymoh_theme_setup() {
    // Universal theme support declarations
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    // Gutenberg FSE Block Theme & Editor Support
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    // WooCommerce Universal Support
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Classic Navigation Menu Support
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'createbymoh' ),
    ) );
}
add_action( 'after_setup_theme', 'createbymoh_theme_setup' );

function createbymoh_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style( 'createbymoh-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap', array(), null );
    
    // Theme stylesheet
    wp_enqueue_style( 'createbymoh-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Interactive script
    wp_enqueue_script( 'createbymoh-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );
    
    // Safely serialize and pass PHP variables (such as template folder URI) to JavaScript
    wp_localize_script( 'createbymoh-theme-js', 'createbymohTheme', array(
        'templateUrl' => get_template_directory_uri()
    ) );
}
add_action( 'wp_enqueue_scripts', 'createbymoh_enqueue_assets' );
