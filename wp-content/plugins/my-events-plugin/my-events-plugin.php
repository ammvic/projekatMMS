<?php
/**
 * Plugin Name: My Events Plugin
 * Plugin URI:  https://example.com
 * Description: Plugin za registraciju prilagođenog post type-a "Događaji".
 * Version:     1.0
 * Author:      Amina Memisahovic
 * Author URI:  https://example.com
 */

if (!defined('ABSPATH')) {
    exit; // Zaštita: prekida ako se pristupa direktno
}

function mep_register_cpt_dogadjaji() {
    $labels = array(
        'name'               => 'Događaji',
        'singular_name'      => 'Događaj',
        'add_new'            => 'Dodaj novi',
        'add_new_item'       => 'Dodaj novi događaj',
        'edit_item'          => 'Izmeni događaj',
        'new_item'           => 'Novi događaj',
        'view_item'          => 'Pogledaj događaj',
        'search_items'       => 'Pretraži događaje',
        'not_found'          => 'Nema pronađenih događaja',
        'not_found_in_trash' => 'Nema događaja u korpi',
        'all_items'          => 'Svi događaji',
        'menu_name'          => 'Događaji',
        'name_admin_bar'     => 'Događaj',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true, 
        'rewrite'            => array('slug' => 'dogadjaji'),
        'supports'           => array('title','editor','thumbnail','excerpt','custom-fields'),
        'menu_icon'          => 'dashicons-calendar-alt',
    );

    register_post_type('dogadjaji', $args);
}
add_action('init', 'mep_register_cpt_dogadjaji');
