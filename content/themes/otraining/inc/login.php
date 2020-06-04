<?php

// function add_lost_password_link() {
// 	return '<a href="/wp-login.php?action=lostpassword">Lost Password?</a>';
// }
// add_action( 'login_form_middle', 'add_lost_password_link' );

function lost_password_link( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url(__FILE__) . '">Mot de passe perdu</a>';
	return $formbottom;
}
add_filter( 'login_form_bottom', 'lost_password_link' );


function possibly_redirect(){
    global $pagenow;
    if( 'wp-login.php' == $pagenow ) {
      if ( isset( $_POST['wp-submit'] ) ||   // in case of LOGIN
        ( isset($_GET['action']) && $_GET['action']=='logout') ||   // in case of LOGOUT
        ( isset($_GET['checkemail']) && $_GET['checkemail']=='confirm') ||   // in case of LOST PASSWORD
        ( isset($_GET['checkemail']) && $_GET['checkemail']=='registered') ) return;    // in case of REGISTER
      else wp_redirect( home_url() ); // or wp_redirect(home_url('/login'));
      exit();
    }
  }
  add_action('init','possibly_redirect');


// message d'erreur si connexion vide
function _catch_empty_user( $username, $pwd ) {
  if (empty($pwd)&&empty($username)) {
    wp_safe_redirect(home_url().'/login/?login=empty');
    exit();
  }  if ( empty( $username )) {
    wp_safe_redirect(home_url() . '/login/?user=empty' );
    exit();
  }
  if (empty($pwd)) {
    wp_safe_redirect(home_url().'/login/?pwd=empty');
    exit();
  }
}
add_action( 'wp_authenticate', '_catch_empty_user', 1, 2 );



// messaeg d'erreur si erreur de connexion
function pippin_login_fail( $username ) {
     $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
     // if there's a valid referrer, and it's not the default log-in screen
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
          wp_redirect(home_url() . '/login/?login=failed' );  // let's append some information (login=failed) to the URL for the theme to use
          exit;
     }
}
add_action( 'wp_login_failed', 'pippin_login_fail' );  // hook failed login




// Il faut register les scripts que notre formualire utilise
add_action( 'wp_enqueue_scripts', 'register_login_script' );
function register_login_script() {
	wp_register_script( 'inscription-front', get_template_directory_uri() . '/public/js/inscription.js', array( 'jquery' ), '1.0', true );
	wp_register_script( 'message', get_template_directory_uri() . '/public/js/message.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery' );

	// Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
	wp_enqueue_script( 'message' );
}