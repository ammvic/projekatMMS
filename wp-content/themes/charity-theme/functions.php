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

function charity_customize_register($wp_customize) {
    // Sekcija za prilagođavanje boja
    $wp_customize->add_section('charity_colors', array(
        'title'    => __('Boje teme', 'charity-theme'),
        'priority' => 30,
    ));

    // Opcija za boju headera
    $wp_customize->add_setting('header_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'header_color',
        array(
            'label'    => __('Boja Headera', 'charity-theme'),
            'section'  => 'charity_colors',
            'settings' => 'header_color',
        )
    ));

    // Opcija za boju footera
    $wp_customize->add_setting('footer_color', array(
        'default'   => '#333333',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'footer_color',
        array(
            'label'    => __('Boja Footera', 'charity-theme'),
            'section'  => 'charity_colors',
            'settings' => 'footer_color',
        )
    ));
}
add_action('customize_register', 'charity_customize_register');

function charity_custom_colors() {
    ?>
    <style type="text/css">
        header { background-color: <?php echo get_theme_mod('header_color', '#ffffff'); ?>; }
        footer { background-color: <?php echo get_theme_mod('footer_color', '#333333'); ?>; }
    </style>
    <?php
}
add_action('wp_head', 'charity_custom_colors');


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

function charity_widgets_init() {
    // Postojeće widget zone
    register_sidebar(array(
        'name'          => __('Glavna Sidebar Zona', 'charity-theme'),
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Zona', 'charity-theme'),
        'id'            => 'footer-sidebar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    // Dodatna profesionalnija widget zona u headeru
    register_sidebar(array(
        'name'          => __('Header Widget Zona', 'charity-theme'),
        'id'            => 'header-widget',
        'description'   => __('Widget zona prikazana u headeru sajta', 'charity-theme'),
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="header-widget-title">',
        'after_title'   => '</h3>',
    ));

    // Widget zona za istaknuti sadržaj na početnoj strani
    register_sidebar(array(
        'name'          => __('Homepage Featured Widget Zona', 'charity-theme'),
        'id'            => 'homepage-featured-widget',
        'description'   => __('Widget zona za istaknuti sadržaj ili slider na početnoj stranici', 'charity-theme'),
        'before_widget' => '<div class="homepage-featured-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-featured-widget-title">',
        'after_title'   => '</h3>',
    ));

    // Widget zona za poziv na donaciju
    register_sidebar(array(
        'name'          => __('Donation Call-to-Action Widget Zona', 'charity-theme'),
        'id'            => 'donation-widget',
        'description'   => __('Widget zona za prikazivanje poziva na donaciju', 'charity-theme'),
        'before_widget' => '<div class="donation-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="donation-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'charity_widgets_init');


