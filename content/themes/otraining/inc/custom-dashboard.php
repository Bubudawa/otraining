<?php


//admin bar hidden in Front
function remove_admin_bar() {
    add_filter('show_admin_bar', '__return_false');
    add_filter('admin_head', '__return_false');
}
  add_action('init', 'remove_admin_bar');


/**
 * Remove link from admin_bar
 */
function deefuse_remove_admin_bar_links() {
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo from the admin_bar
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link from the admin_bar
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link from the admin_bar
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link from the admin_bar
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link from the admin_bar
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link from the admin_bar
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link from the admin_bar
    $wp_admin_bar->remove_menu('new-content');         // Remove the create link from the admin_bar

}
  add_action( 'wp_before_admin_bar_render', 'deefuse_remove_admin_bar_links' );


//remove Posts and Comments from Dashboard
function custom_admin_menu() {
	global $menu;
	unset($menu[5]);			// Articles
	unset($menu[25]);			// Commentaires
}
add_action('admin_menu', 'custom_admin_menu', 11);


//remove help form adminbar
function remove_contextual_help() {
  $screen = get_current_screen();
  $screen->remove_help_tabs();
}
add_action( 'admin_head', 'remove_contextual_help' );


//Add widgets on dashboard
  function training_dashboard_widget_function() {
        echo 'Pour accéder à vos formations ou pour en créer une nouvelle, rendez-vous dans l\'onglet "Formations".';
  }

  function training_add_dashboard_widgets() {
    $user = wp_get_current_user();

    if (!in_array('student', $user->roles)) {
        wp_add_dashboard_widget('dashboard_training', 'Mes formations', 'training_dashboard_widget_function');
    }

  }
    add_action('wp_dashboard_setup', 'training_add_dashboard_widgets' );


    function profil_dashboard_widget_function() {
          echo 'Pour modifier votre profil ou changer de mot de passe, rendez-vous dans l\'onglet "Profil".';
    }
  
    function profil_add_dashboard_widgets() {
        wp_add_dashboard_widget('dashboard_profil', 'Mon profil', 'profil_dashboard_widget_function');
    }
      add_action('wp_dashboard_setup', 'profil_add_dashboard_widgets' );
  

//Remove WordPress Footer Credits
function wpo_remove_footer_admin() {
	return '';
}
  add_filter('admin_footer_text', 'wpo_remove_footer_admin');


//Remove WordPress version in footer
function wpo_remove_version_footer() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
  add_action( 'admin_menu', 'wpo_remove_version_footer' );


//Hidden the widgets on the Dashboard
function disable_default_dashboard_widgets() {

  remove_meta_box('dashboard_activity', 'dashboard', 'core');
  remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');			// Autres news WordPress
  remove_meta_box('dashboard_secondary', 'dashboard', 'core');			// News WordPress
  
  }
    add_action('admin_menu', 'disable_default_dashboard_widgets');



    //Empeche les Formateurs de voir les formations des autres sans que cela les empeche de voir les Customs Fields.
  function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
        $screen = get_current_screen();
        add_filter('views_'.$screen->id, 'seomix_adm_user_remove_post_counts');
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');

function seomix_adm_user_remove_post_counts($views) {
  
  $views = array_intersect_key($views, array_flip(array('mine','trash')));
  return $views;
}



//Empeche les formateurs de voir les images qui ne sont pas les siennes.
add_action('pre_get_posts','users_own_attachments');
function users_own_attachments( $wp_query_obj ) {

    global $current_user, $pagenow;

    $is_attachment_request = ($wp_query_obj->get('post_type')=='attachment');

    if( !$is_attachment_request )
        return;

    if( !is_a( $current_user, 'WP_User') )
        return;

    if( !in_array( $pagenow, array( 'upload.php', 'admin-ajax.php' ) ) )
        return;

    if( !current_user_can('delete_pages') )
        $wp_query_obj->set('author', $current_user->ID );

    return;
}


function remove_archcate_for_teacher() {

  // global $pagenow;
    // $user = wp_get_current_user();
 
    if (!current_user_can('update_plugins')) {
        remove_meta_box('archcatediv', 'formation', 'normal');

    }
}

add_action('admin_menu', 'remove_archcate_for_teacher');