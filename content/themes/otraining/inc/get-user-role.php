<?php

/**
 * Get the user's roles
 */

function get_current_user_roles() {
    if( is_user_logged_in() ) {

    $user = wp_get_current_user();

    $roles = $user->role;

    //return $roles;
    // This returns an array

    // Use this to return a single value
    return $roles[0];

    }

    else {
        return array();
    }
}