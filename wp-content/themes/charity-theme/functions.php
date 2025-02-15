<?php
function charity_theme_setup() {
    // Omogućava generisanje <title> taga
    add_theme_support( 'title-tag' );

    // Omogućava prikaz "featured image" ukoliko bude potrebno
    add_theme_support( 'post-thumbnails' );

    // Registruj glavni meni
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'charity-theme'),
    ));
}
add_action('after_setup_theme', 'charity_theme_setup');

function charity_theme_assets() {
    // Učitaj Font Awesome preko CDN-a
    wp_enqueue_style(
        'charity-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
        array(),
        '6.0.0-beta3',
        'all'
    );

    // Učitaj glavni CSS fajl (pored obaveznog style.css)
    wp_enqueue_style(
        'charity-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'charity_theme_assets');

