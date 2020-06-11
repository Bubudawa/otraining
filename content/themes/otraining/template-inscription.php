<?php
/*
Template Name: Inscription
*/
?>

<?php get_header(); ?>

<div class="login-text">
    <h2>Inscription</h2>
    <p>Si vous avez déjà un compte : <a href="<?php echo home_url(); ?>/connexion">cliquez ici pour vous connecter</a>.</p>
</div>

<div class="login__container">
    <div class="login__connexion">
        <div class="login__content">


<?php

    if (!is_user_logged_in()){
        register_student_form();
    }
    else {
        echo '<p>Vous êtes déjà connecté.</p>';

        echo '<p>Vous devez vous déconnecter pour créer un compte Elève.</p>';

        echo '<p><a href="' . $logout . '">cliquez ici pour vous déconnecter.</a></p>';
    }
 ?>

        </div>
    </div>
</div>

<div class="login-text">
    <p>Si vous souhaitez devenir formateur et pouvoir proposer vos formations : 
        <a href="<?php echo home_url(); ?>/devenir-formateur">cliquez ici pour devenir formateur</a>.
    </p>
</div>


<?php get_footer(); ?>