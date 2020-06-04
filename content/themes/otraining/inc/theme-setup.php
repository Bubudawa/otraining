<?php

if (!function_exists('otraining_setup')) {

function otraining_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'main-menu' => 'Menu Formations',
        'burger-menu' => 'Menu Mobile',
        'login-menu' => 'Menu Connexion'
    ]);

}

}

add_action('after_setup_theme', 'otraining_setup');