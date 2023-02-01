<?php


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// Ajouter des classes au body
function my_plugin_body_class($classes) {
    $classes[] = 'flex h-full flex-col bg-zinc-50 dark:bg-black';
    return $classes;
}


add_filter('body_class', 'my_plugin_body_class');