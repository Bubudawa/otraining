<?php

/*
Plugin Name: O'Roles
Description: Permet d'ajouter des rôles suplémentaires (formateurs et élèves) et de modifier le menu du Back Office en fonction du rôle.
Version: 2.0
*/

if (!defined('WPINC')) {
    die;
}

class ORoles {

    public function __construct() {

        add_action('init', [$this, 'oroles_add_roles']);
        add_action('admin_menu', [$this, 'remove_menu_items']);
    }

    public function oroles_add_roles() {

        add_role(
            'teacher',
            'Formateur',
            [
                'edit_posts' => true,
                'delete_posts' => true,
                'read' => true
            ]
        );

        add_role(
            'student',
            'Elève',
            [
                'read' => true,
                // 'read_private_posts' => true
            ]
        );
    }

    public function oroles_add_cap() {

        $role = get_role('teacher');

        $role->add_cap('upload_files');
        $role->add_cap('');

    }


    //Remove menu items depending on user
    public function remove_menu_items() {

        $user = wp_get_current_user();

        global $menu;

        if (in_array('teacher', $user->roles)) {
            $restricted = array(
            __('Posts'),
            __('Pages'),
            __('Contact'),
            __('Comments'),
            __('Plugins'),
            __('Tools'),
            );
        }

        elseif (in_array('student', $user->roles)) {
            $restricted = array(
            __('Posts'),
            __('Pages'),
            __('Links'),
            __('Media'),
            __('Contact'),
            __('Comments'),
            __('Plugins'),
            __('Tools'),
            __('Users'),
            );
        }
        
        else {
            $restricted = array(
            //no restriction for the others users
            );
        }

        end($menu);

        while (prev($menu)) {
            $value = explode(' ', $menu[key($menu)][0]);

            if (in_array($value[0] != null?$value[0]:"", $restricted)) {
                unset($menu[key($menu)]);
            }
        }
        
    }
        
    


    public function oroles_remove_role() {

        if (get_role('teacher')) {
            remove_role('teacher');
        }
        if (get_role('student')) {
            remove_role('student');
        }
    }

    public function oroles_activate() {

        $this->oroles_add_roles();
        $this->oroles_add_cap();
    }

    public function oroles_deactivate() {

        $this->oroles_remove_role();

    }

}

$oroles = new ORoles;

register_activation_hook(__FILE__, [$oroles, 'oroles_activate']);

register_deactivation_hook(__FILE__, [$oroles, 'oroles_deactivate']);
