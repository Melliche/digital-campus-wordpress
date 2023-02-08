<?php


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

add_image_size('logo-footer', 373, 146, array( 'center', 'center' ) );
add_image_size('panoramic-size-frontpage', 1520, 365, array('center', 'center'));
add_image_size('card-size-frontpage', 350, 210, array('center', 'center'));
add_image_size('presentation-size-page', 628, 421, array('center', 'center'));
