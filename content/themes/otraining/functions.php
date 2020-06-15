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
        'name' => 'Menu du haut (Formations)'
    ]);
    register_sidebar([
        'id' => 'footer1',
        'name' => 'Footer de gauche'
    ]);
    register_sidebar([
        'id' => 'footer2',
        'name' => 'Footer du millieu'
    ]);
    register_sidebar([
        'id' => 'footer3',
        'name' => 'Footer de droite'
    ]);


}

add_action('widgets_init', 'otraining_widgets');


// First we create a function
function list_terms_custom_taxonomy( $atts ) {
 
    // Inside the function we extract custom taxonomy parameter of our shortcode
    extract( shortcode_atts( array(
        'custom_taxonomy' => '',
    ), $atts ) );


// https://developer.wordpress.org/reference/functions/get_term/
// https://www.advancedcustomfields.com/resources/adding-fields-taxonomy-term/
// https://www.advancedcustomfields.com/resources/adding-fields-menu-items/
// https://www.advancedcustomfields.com/resources/the_field/


// "archcate est le nom de la custom taxo" pour la boucle foreach
$terms = get_terms('archcate');

// pour retrouver le custom field lié au term d'une taxonomie il faut : 'NomDeLaTaxo_IdDuTerm' (ex: 'archcate_18')
$taxonomy = 'archcate_'; 


    foreach ( $terms as $term ) { 
        $post_id = $taxonomy . $term->term_id;
        $icon = get_field('archcate_icon', $post_id);

?>
        <li class="list-term-archcate">
        
        <a href="<?php echo home_url(); ?>/archcate/<?php echo $term->slug;?>"><?php echo $icon;?><?php echo $term->name;?></a>
        </li>
<?php
    }

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