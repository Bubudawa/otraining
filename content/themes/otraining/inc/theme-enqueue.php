<?php

if (!function_exists('otraining_scripts')):

    function otraining_scripts()
    {
        wp_enqueue_style(
            'otraining-style',
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'otraining-app',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.0.0',
            true
        );
    }

endif;


add_action('wp_enqueue_scripts', 'otraining_scripts');



// Il faut register les scripts que notre formualire utilise

function register_login_script() {

    wp_register_script(
        'inscription-front',
        get_theme_file_uri('/public/js/inscription.js'),
        ['jquery'],
         '1.1.0',
         true
    );

    wp_register_script(
        'message',
        get_theme_file_uri('/public/js/message.js'),
        ['jquery'],
        '1.1.0',
        true
    );

    wp_enqueue_script(
        'jquery'
    );

    // Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
    wp_enqueue_script(
        'message'
    );
}

add_action( 'wp_enqueue_scripts', 'register_login_script' );