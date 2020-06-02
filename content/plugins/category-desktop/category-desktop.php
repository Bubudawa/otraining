<?php

/*
Plugin Name: oCategoryDesktop
Description: Plugin permettant d'ajouter des catégories du bureau.
Version: 1.0
*/

if (!defined('WPINC')){
    die;
}

class oCategoryDesktop
{
    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
    }

    public function register_cpt()
    {
        $labels = [
            'name'               => 'catégoriesDesk',
            'singular_name'      => 'catégories du bureau',
            'menu_name'          => 'catégories du bureau',
            'name_admin_bar'     => 'catégories du bureau',
            'add_new'            => 'Ajouter une catégories du bureau',
            'add_new_item'       => 'Ajouter une nouvelle catégories du bureau',
            'new_item'           => 'Nouvelle catégories du bureau',
            'edit_item'          => 'Editer une catégories du bureau',
            'view_item'          => 'Voir la catégories du bureau',
            'all_items'          => 'Voir toutes les catégories du bureau',
            'search_items'       => 'Rechercher une catégories du bureau',
            'not_found'          => 'Aucune catégories du bureau trouvée',
            'not_found_in_trash' => 'Aucune catégories du bureau trouvée dans la corbeille',
            'attributes'         => 'Attributs de la catégories du bureau'
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
            'slug' => 'categoriedesk'

        ];

    register_post_type('categoriedesk',$args);
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

$oCategorie = new oCategoryDesktop();

register_activation_hook(__FILE__, [$oCategorie, 'oCategorie_activate']);
register_deactivation_hook(__FILE__, [$oCategorie, 'oCategorie_deactivate']);