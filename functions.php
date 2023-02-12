<?php

// Créer le CPT Formation
function portfolio_register_post_types()
{

    // CPT Formation
    $labels = array(
        'name' => 'Formation',
        'all_items' => 'Toutes les formations',  // affiché dans le sous menu
        'singular_name' => 'Formation',
        'add_new_item' => 'Ajouter une formation',
        'edit_item' => 'Modifier la formation',
        'menu_name' => 'Formations'
    );


    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
    );


    register_post_type('formations', $args);
}

add_action('init', 'portfolio_register_post_types'); // Le hook init lance la fonction

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


// Ajouter des classes au body
function my_plugin_body_class($classes)
{
    $classes[] = 'flex h-full flex-col bg-zinc-50 dark:bg-black';
    return $classes;
}

add_filter('body_class', 'my_plugin_body_class');

// Ajouter un emplacement de menu
function theme_register_nav_menu()
{
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'text_domain'),
        'liste_campus' => __('Liste campus', 'text_domain'),
        'liens_rapides' => __('Liens rapides', 'text_domain'),
    ));
}

add_action('after_setup_theme', 'theme_register_nav_menu', 0);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_image_size('logo-footer', 373, 146, array('center', 'center'));
add_image_size('panoramic-size-frontpage', 1520, 365, array('center', 'center'));
add_image_size('presentation-size-frontpage', 500, 1000, array('center', 'center'));
add_image_size('card-size-frontpage', 350, 210, array('center', 'center'));
add_image_size('presentation-size-page', 628, 421, array('center', 'center'));
add_image_size('profile-image', 180, 180, array('center', 'center'));
add_image_size('article-image', 350, 210, array('center', 'center'));

