<?php

if (!function_exists('otraining_setup')) {

function otraining_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'main' => 'Menu Formations',
        'burger' => 'Menu Mobile',
        'login' => 'Menu de Connexion'
    ]);

}

}

add_action('after_setup_theme', 'otraining_setup');