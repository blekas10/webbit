<?php

function webbit_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'webbit_theme_support');

function register_custom_menu() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'register_custom_menu');

function remove_the_wpautop_function() {
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
}

add_action( 'after_setup_theme', 'remove_the_wpautop_function' );

// Register Custom Post Type
function custom_post_type_projektai() {
    $labels = array(
        'name' => 'Projektai',
        'singular_name' => 'Projektas',
        'menu_name' => 'Projektai',
        'name_admin_bar' => 'Projektai',
        'archives' => 'Projektai Archives',
        'attributes' => 'Projektų atributai',
        'parent_item_colon' => 'Pagrindinis elementas:',
        'all_items' => 'Visi projektai',
        'add_new_item' => 'Pridėti naują projektą',
        'add_new' => 'Pridėti naują',
        'new_item' => 'Naujas projektas',
        'edit_item' => 'Redaguoti projektą',
        'update_item' => 'Atnaujinti projektą',
        'view_item' => 'Peržiūrėti projektą',
        'view_items' => 'Peržiūrėti projektus',
        'search_items' => 'Ieškoti projektų',
        'not_found' => 'Projektų nerasta',
        'not_found_in_trash' => 'Projektų šiukšlėse nerasta',
        'featured_image' => 'Pagrindinė nuotrauka',
        'set_featured_image' => 'Nustatyti pagrindinę nuotrauką',
        'remove_featured_image' => 'Pašalinti pagrindinę nuotrauką',
        'use_featured_image' => 'Naudoti pagrindinę nuotrauką',
        'insert_into_item' => 'Įterpti į projektą',
        'uploaded_to_this_item' => 'Įkelta į šį projektą',
        'items_list' => 'Projektų sąrašas',
        'items_list_navigation' => 'Projektų sąrašo naršymas',
        'filter_items_list' => 'Filtruoti projektų sąrašą',
    );
    $args = array(
        'label' => 'Projektas',
        'description' => 'Projektų sąrašas',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-generic', // You can change this icon
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projektai'),
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('projektai', $args);
}
add_action('init', 'custom_post_type_projektai', 0);



function webbit_register_styles()
{
    wp_enqueue_style('webbit-fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null, 'all');
    wp_enqueue_style('webbit-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), null, 'all');
    wp_enqueue_style('webbit-animate', get_template_directory_uri() . '/lib/animate/animate.min.css', null, false, 'all');
    wp_enqueue_style('webbit-owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', null, false, 'all');
    wp_enqueue_style('webbit-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, false, 'all');
    wp_enqueue_style('webbit-style', get_template_directory_uri() . '/css/style.css?v=' . time(), null, false, 'all');
}

add_action('wp_enqueue_scripts', 'webbit_register_styles');

function webbit_register_scripts()
{
    wp_enqueue_script('webbit-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, false, 'all');
    wp_enqueue_script('webbit-bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', null, false, 'all');
    wp_enqueue_script('webbit-wow', get_template_directory_uri() . '/lib/wow/wow.min.js', null, false, 'all');
    wp_enqueue_script('webbit-easing', get_template_directory_uri() . '/lib/easing/easing.min.js', null, false, 'all');
    wp_enqueue_script('webbit-waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', null, false, 'all');
    wp_enqueue_script('webbit-counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', null, false, 'all');
    wp_enqueue_script('webbit-owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', null, false, 'all');
    wp_enqueue_script('webbit-main', get_template_directory_uri() . '/js/main.js', null, false, 'all');
}

add_action('wp_enqueue_scripts', 'webbit_register_scripts');