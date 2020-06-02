<?php

/*
Plugin Name: oCategory
Description: Plugin permettant d'ajouter des Categories.
Version: 1.0
*/

if (!defined('WPINC')){
    die;
}

class oCategory
{
    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
    }

    public function register_cpt()
    {
        $labels = [
            'name'               => 'Categorie',
            'singular_name'      => 'Categorie',
            'menu_name'          => 'Categories',
            'name_admin_bar'     => 'Categorie',
            'add_new'            => 'Ajouter une Categorie',
            'add_new_item'       => 'Ajouter une nouvelle Categorie',
            'new_item'           => 'Nouvelle Categorie',
            'edit_item'          => 'Editer une Categorie',
            'view_item'          => 'Voir la Categorie',
            'all_items'          => 'Voir toutes les Categories',
            'search_items'       => 'Rechercher une Categorie',
            'not_found'          => 'Aucune Categorie trouvée',
            'not_found_in_trash' => 'Aucune Categorie trouvée dans la corbeille',
            'attributes'         => 'Attributs de la Categorie'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hirerarchical' => false,
            // pour passer sur Gutenberg :
             // 'show_in_rest' => true,
            'exclude_from_search' => true,
            'menu_position' => 2,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => [
                'title',
                'editor',
                'page-attributes',
                'thumbnail',
                'custom-fields',
                'excerpt'
            ],
            'has_archive' => true,
            'slug' => 'categorie'

        ];

    register_post_type('categorie',$args);
    }

    public function oCategorie_activate()
    {
        $this->register_cpt();
        flush_rewrite_rules();
    }

    public function oCategorie_deactivate()
    {
        flush_rewrite_rules();
    }
}

$oCategorie = new oCategory();

register_activation_hook(__FILE__, [$oCategorie, 'oCategorie_activate']);
register_deactivation_hook(__FILE__, [$oCategorie, 'oCategorie_deactivate']);