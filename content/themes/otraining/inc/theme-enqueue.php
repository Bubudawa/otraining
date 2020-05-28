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