<?php

/*
Plugin Name: Subscribe-Plugin
Description: Plugin permettant de gérer les inscriptions aux formations
Version: 1.0
*/

if (!defined('WPINC')){
    die;
}

class OSubscribe
{
    public function __construct()
    {
        add_theme_support( 'post-thumbnails' );
        add_action('init', [$this, 'create_cpt']);
        add_action('init', [$this, 'register_taxonomies']);
    }

    public function create_cpt()
    {
        $labels = [
            'name'               => 'Inscrit',
            'singular_name'      => 'Inscrit',
            'menu_name'          => 'Inscrits',
            'name_admin_bar'     => 'Inscrit',
            'add_new'            => 'Ajouter un Inscrit',
            'add_new_item'       => 'Ajouter un nouvel Inscrit',
            'new_item'           => 'Nouvel Inscrit',
            'edit_item'          => 'Editer un Inscrit',
            'view_item'          => 'Voir l\'inscrit',
            'all_items'          => 'Voir tous les Inscrits',
            'search_items'       => 'Rechercher un Inscrit',
            'not_found'          => 'Aucun Inscrit trouvé',
            'not_found_in_trash' => 'Aucun Inscrit trouvé dans la corbeille',
            'attributes'         => 'Attributs de l\'inscrit'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hirerarchical' => false,
            // pour passer sur Gutenberg :
            // 'show_in_rest' => true,
            'exclude_from_search' => true,
            'menu_position' => 2,
            'menu_icon' => 'dashicons-networking',
            'supports' => [
                'title',
                'editor',
                'custom-fields',
                'thumbnail'
            ]
        ];

        register_post_type(
            'subscribe',
            $args
        );
    }

    public function register_taxonomies() {
        register_taxonomy(
            'category',
            'subscribe',
            [
                'label' => 'training-id',
                'public' => true,
                'hierarchical' => true,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'category'
                ]

            ]
        );

        register_taxonomy(
            'tag',
            'subscribe',
            [
                'label' => 'user-id',
                'public' => true,
                'hierarchical' => true,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'tag'
                ]

            ]
        );
    }

    public function osubscribe_activate()
    {
        $this->create_cpt();
        $this->register_taxonomies();
        flush_rewrite_rules();
    }

    public function osubscribe_deactivate()
    {
        flush_rewrite_rules();
    }
}

$osubscribe = new OSubscribe();

register_activation_hook(__FILE__, [$osubscribe, 'osubscribe_activate']);

register_deactivation_hook(__FILE__, [$osubscribe, 'osubscribe_deactivate']);