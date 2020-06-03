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



// INSCRIPTION :

// Formulaire d'inscription
function register_user_form() {
	echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user">';

	// Les champs requis
  echo '<p class="login-username"><label for="nom-user">Nom</label><input type="text" name="username" id="nom-user" required></p>';
  
  echo '<p><label for="email-user">Email</label><input type="email" name="email" id="email-user" required></p>';
  
  echo '<p><label for="pass-user">Mot de passe</label><input type="password" name="pass" id="pass-user" required><br>';
  
	echo '<input type="checkbox" id="show-password"><label for="show-password">Voir le mot de passe</label></p>';

	// Nonce (pour vérifier plus tard que l'action a bien été initié par l'utilisateur)
	wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );

	//Validation
	echo '<input class="button" type="submit" value="Créer mon compte">';
	echo '</form>';

	// Enqueue de scripts qui vont nous permettre de vérifier les champs
	wp_enqueue_script( 'inscription-front' );
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
function ajouter_utilisateur() {
	// Vérifier le nonce (et n'exécuter l'action que s'il est valide)
	if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {

		// Vérifier les champs requis
		if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] ) ) {
			wp_redirect( site_url( '/signup/?message=not-user' ) );
			exit();
		}
		
		$nom = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		// Vérifier que l'user (email ou nom) n'existe pas
		if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {
			// Création de l'utilisateur
	        $user_id = wp_create_user( $nom, $pass, $email );
	        $user = new WP_User( $user_id );
	        // On lui attribue un rôle
	        $user->set_role( 'subscriber' );
	        // Envoie un mail de notification au nouvel utilisateur
	        wp_new_user_notification( $user_id, $pass );
	    } else {
	    	wp_redirect( site_url( '/signup/?message=already-registered' ) );
			exit();
	    }

		// Connecter automatiquement le nouvel utilisateur
	    $creds = array();
		$creds['user_login'] = $nom;
		$creds['user_password'] = $pass;
		$creds['remember'] = false;
		$user = wp_signon( $creds, false );

		// Redirection
		wp_redirect( site_url( '/wp-admin' ) );
		exit();
	}
}