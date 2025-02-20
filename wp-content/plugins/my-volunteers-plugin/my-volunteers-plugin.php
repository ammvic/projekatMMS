<?php
/**
 * Plugin Name: My Volunteers Plugin
 * Plugin URI:  https://tvoj-sajt.com
 * Description: Registruje prilagođeni post type "Volonteri" za unos i prikaz volontera.
 * Version:     1.0
 * Author:      Amina Memisahovic
 * Author URI:  https://tvoj-sajt.com
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Zaštita od direktnog pristupa fajlu
}

function mvp_register_cpt_volonteri() {
    $labels = array(
        'name'               => 'Volonteri',
        'singular_name'      => 'Volonter',
        'menu_name'          => 'Volonteri',
        'name_admin_bar'     => 'Volonter',
        'add_new'            => 'Dodaj novog',
        'add_new_item'       => 'Dodaj novog volontera',
        'edit_item'          => 'Izmeni volontera',
        'new_item'           => 'Novi volonter',
        'view_item'          => 'Pogledaj volontera',
        'search_items'       => 'Pretraži volontere',
        'not_found'          => 'Nije pronađen nijedan volonter',
        'not_found_in_trash' => 'Nije pronađen nijedan volonter u korpi',
        'all_items'          => 'Svi volonteri',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'volonteri'),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'dashicons-groups',
    );

    register_post_type('volonteri', $args);
}
add_action('init', 'mvp_register_cpt_volonteri');
