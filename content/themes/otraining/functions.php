<?php

require('inc/theme-enqueue.php');


require('inc/custom-dashboard.php');


require('inc/login.php');


require('inc/subscribe.php');

//in order to have the models pages
function login_model() {
    add_theme_support(
        'post-thumbnails',
        [
            'page'
         ]

    );
}
add_action('after_setup_theme', 'login_model');