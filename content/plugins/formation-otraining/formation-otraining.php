<?php

/*
Plugin Name: formation-otraining
Description: Plugin permettant d'ajouter des Formations.
Version: 1.0
*/

if (!defined('WPINC')){
    die;
}

class OFormation
{
    public function __construct()
    {
        add_theme_support( 'post-thumbnails' );
        add_action('init', [$this, 'create_cpt']);
    }

    public function create_cpt()
    {
        $labels = [
            'name'               => 'Formation',
            'singular_name'      => 'Formation',
            'menu_name'          => 'Formations',
            'name_admin_bar'     => 'Formation',
            'add_new'            => 'Ajouter une Formation',
            'add_new_item'       => 'Ajouter une nouvelle Formation',
            'new_item'           => 'Nouvelle Formation',
            'edit_item'          => 'Editer une Formation',
            'view_item'          => 'Voir la Formation',
            'all_items'          => 'Voir toutes les Formations',
            'search_items'       => 'Rechercher une Formation',
            'not_found'          => 'Aucune Formation trouvée',
            'not_found_in_trash' => 'Aucune Formation trouvée dans la corbeille',
            'attributes'         => 'Attributs de la Formation'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hirerarchical' => false,
            // pour passer sur Gutenberg :
            // 'show_in_rest' => true,
            'exclude_from_search' => true,
            'menu_position' => 2,
            'menu_icon' => 'dashicons-book',
            'supports' => [
                'title',
                'editor',
                'custom-fields',
                'thumbnail'
            ]
        ];

        register_post_type(
            'formation',
            $args
        );
    }

    public function oformation_activate()
    {
        $this->create_cpt();
        flush_rewrite_rules();
    }

    public function oformation_deactivate()
    {
        flush_rewrite_rules();
    }
}

$oformation = new OFormation();

register_activation_hook(__FILE__, [$oformation, 'oformation_activate']);

register_deactivation_hook(__FILE__, [$oformation, 'oformation_deactivate']);