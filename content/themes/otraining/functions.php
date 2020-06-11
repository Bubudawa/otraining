<?php

require('inc/theme-enqueue.php');

require('inc/theme-setup.php');

require('inc/custom-dashboard.php');

require('inc/login.php');

require('inc/subscribe.php');

require('inc/training-widgets.php');

require('inc/student-signup.php');

require('inc/teacher-signup.php');

require('inc/search.php');

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


//Gérer les widgets
function otraining_widgets() {
    // Déclarer un emplacement de widget
    register_sidebar([
        'id' => 'main',
        'name' => 'Menu de Formation'
    ]);
    register_sidebar([
        'id' => 'aside',
        'name' => 'Footer'
    ]);

}

add_action('widgets_init', 'otraining_widgets');


// First we create a function
function list_terms_custom_taxonomy( $atts ) {
 
    // Inside the function we extract custom taxonomy parameter of our shortcode
     
        extract( shortcode_atts( array(
            'custom_taxonomy' => '',
        ), $atts ) );
     
    // arguments for function wp_list_categories
    $args = array( 
    'taxonomy' => $custom_taxonomy,
    'title_li' => ''
    );
     
    // We wrap it in unordered list 
    echo '<ul>'; 
    echo wp_list_categories($args);
    echo '</ul>';
    }
     
    // Add a shortcode that executes our function
    add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );
     
    //Allow Text widgets to execute shortcodes
     
    add_filter('widget_text', 'do_shortcode');

    function categorie_remove_menu_items() {
        if( !current_user_can( 'administrator' ) ):
            remove_menu_page( 'edit.php?post_type=categorie' );
        endif;
    }
    add_action( 'admin_menu', 'categorie_remove_menu_items' );
   
    